<?php

session_start();
require $_SERVER['DOCUMENT_ROOT'] . '/ini.inc'; // Zorg ervoor dat je databaseverbinding hier beschikbaar is

// Functie om de inhoud van een pagina op te halen
function get_page_content($url): false|string
{
    $context = stream_context_create([
        'http' => [
            'header' => "User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.110 Safari/537.36\r\n"
        ]
    ]);
    return file_get_contents($url, false, $context);
}

// Functie om stopwoorden te filteren
function filter_stop_words($words, $stop_words): array
{
    return array_diff($words, $stop_words);
}

// Functie om woorden te tellen, waarbij woorden met minder dan 4 karakters worden uitgesloten
function count_words($words): array
{
    // Filter woorden om alleen woorden met 4 of meer karakters te behouden
    $filtered_words = array_filter($words, function($word) {
        return strlen($word) >= 4;
    });

    // Tel de gefilterde woorden
    $word_count = array_count_values($filtered_words);
    arsort($word_count); // Sorteer op frequentie, van hoog naar laag
    return $word_count;
}


// Functie om zoekwoorden in de inhoud van de pagina te zoeken
function search_keywords_in_content($content, $keywords): array
{
    $results = [];
    foreach ($keywords as $keyword) {
        // Gebruik stripos voor case-insensitive zoekopdrachten
        $results[$keyword] = stripos($content, $keyword) !== false;
    }
    return $results;
}

// Functie om een score te berekenen op basis van gevonden zoekwoorden
function calculate_score($search_results, $total_keywords): int
{
    $found_keywords = count(array_filter($search_results));
    $score = ($found_keywords / $total_keywords) * 100;
    return intval($score); // Zorg ervoor dat de score een geheel getal is
}

// Laad de stopwoorden uit een JSON-bestand
function load_stop_words($file_path): array
{
    $json = file_get_contents($file_path);
    if ($json === false) {
        die('Kan stopwoordenbestand niet lezen.');
    }
    $stop_words = json_decode($json, true);
    if (json_last_error() !== JSON_ERROR_NONE) {
        die('Fout bij het decoderen van JSON: ' . json_last_error_msg());
    }
    return $stop_words;
}

header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Filter en valideer de URL
    $url = filter_var($_POST['url'], FILTER_SANITIZE_URL);
    if (!filter_var($url, FILTER_VALIDATE_URL)) {
        echo json_encode(['error' => 'Ongeldige URL.']);
        exit;
    }

    // Filter en valideer de zoekwoorden
    $keywords = [
        filter_var($_POST['keyword1'], FILTER_SANITIZE_FULL_SPECIAL_CHARS),
        filter_var($_POST['keyword2'], FILTER_SANITIZE_FULL_SPECIAL_CHARS),
        filter_var($_POST['keyword3'], FILTER_SANITIZE_FULL_SPECIAL_CHARS)
    ];

    // Verkrijg de inhoud van de pagina
    $content = get_page_content($url);

    if ($content !== false) {
        // Zoek de zoekwoorden in de inhoud
        $search_results = search_keywords_in_content($content, $keywords);

        // Bereken de score
        $score = calculate_score($search_results, count($keywords));

        // Tokenize de inhoud en filter stopwoorden
        $stop_words = load_stop_words($_SERVER['DOCUMENT_ROOT'] . '/json/stop_words_dutch.json');
        $words = preg_split('/\s+/', strtolower(strip_tags($content)));
        $filtered_words = filter_stop_words($words, $stop_words);
        $word_count = count_words($filtered_words);

        // Bewaar resultaten in de database
        $user_id = $_SESSION['user_id'];

        // Voorbereiden van de SQL query
        $query = "INSERT INTO keyword_checks (user_id, url, keyword1, keyword2, keyword3, result1, result2, result3, score, checked_at) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, NOW())";
        $stmt = $conn->prepare($query);

        if ($stmt === false) {
            echo json_encode(['error' => 'Prepare failed: ' . htmlspecialchars($conn->error)]);
            exit;
        }

        // Bind de parameters
        $result1 = $search_results[$keywords[0]] ? 'Gevonden' : 'Niet gevonden';
        $result2 = $search_results[$keywords[1]] ? 'Gevonden' : 'Niet gevonden';
        $result3 = $search_results[$keywords[2]] ? 'Gevonden' : 'Niet gevonden';

        $stmt->bind_param('issssssss', $user_id, $url, $keywords[0], $keywords[1], $keywords[2], $result1, $result2, $result3, $score);

        if (!$stmt->execute()) {
            echo json_encode(['error' => 'Execute failed: ' . htmlspecialchars($stmt->error)]);
            exit;
        }

        $stmt->close();

        // Resultaten teruggeven in JSON-formaat
        echo json_encode([
            'url' => htmlspecialchars($url),
            'keywords' => $keywords,
            'results' => $search_results,
            'score' => $score,
            'word_count' => array_slice($word_count, 0, 10) // Top 10 meest voorkomende woorden
        ]);
    } else {
        echo json_encode(['error' => 'Fout bij het ophalen van de inhoud van de URL.']);
    }
}
