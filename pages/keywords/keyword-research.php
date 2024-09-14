<?php
function fetch_google_suggestions($keyword) {
    $url = "http://suggestqueries.google.com/complete/search?client=firefox&q=" . urlencode($keyword);

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0');

    $response = curl_exec($ch);
    curl_close($ch);

    $suggestions = json_decode($response, true);
    return $suggestions[1] ?? [];
}

function expand_suggestions($initial_keyword, $depth = 1, $max_depth = 2) {
    $results = [];

    // Get initial suggestions
    $suggestions = fetch_google_suggestions($initial_keyword);

    // Add initial suggestions to results
    $results[$initial_keyword] = $suggestions;

    // If we haven't reached the max depth, expand further
    if ($depth < $max_depth) {
        foreach ($suggestions as $suggestion) {
            $expanded = expand_suggestions($suggestion, $depth + 1, $max_depth);
            $results = array_merge($results, $expanded);
        }
    }

    return $results;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $keyword = $_POST['keyword'];
    $expanded_suggestions = expand_suggestions($keyword, 1, 2); // Adjust max_depth as needed
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Keyword Research Tool</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            padding: 20px;
            color: #333;
        }
        form {
            margin-bottom: 20px;
        }
        input[type="text"] {
            padding: 10px;
            width: 300px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }
        input[type="submit"] {
            padding: 10px;
            border: none;
            background-color: #5cb85c;
            color: #fff;
            border-radius: 4px;
            cursor: pointer;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

<h1>Keyword Research Tool</h1>

<form action="" method="post">
    <input type="text" name="keyword" placeholder="Enter a keyword" required>
    <input type="submit" value="Get Suggestions">
</form>

<?php if (!empty($expanded_suggestions)): ?>
    <h2>Expanded Keyword Suggestions:</h2>
    <ul>
        <?php foreach ($expanded_suggestions as $base_keyword => $suggestions): ?>
            <li><strong><?php echo htmlspecialchars($base_keyword, ENT_QUOTES, 'UTF-8'); ?>:</strong>
                <ul>
                    <?php foreach ($suggestions as $suggestion): ?>
                        <li><?php echo htmlspecialchars($suggestion, ENT_QUOTES, 'UTF-8'); ?></li>
                    <?php endforeach; ?>
                </ul>
            </li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>

</body>
</html>

