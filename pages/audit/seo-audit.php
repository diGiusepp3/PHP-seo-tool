<?php
include $_SERVER['DOCUMENT_ROOT'] . '/ini.inc';
include $_SERVER['DOCUMENT_ROOT'] . '/header.php';

function website_audit($url): void
{
    // Make a request to the website
    $html_content = file_get_contents($url);

    // Parse the HTML content using DOMDocument
    $dom = new DOMDocument();
    @$dom->loadHTML($html_content);

    // Initialize an array to store the results
    $results = array();

    // Check for proper HTML structure
    $html = $dom->getElementsByTagName("html")->item(0);
    if ($html) {
        $results[] = array(
            'check' => 'Proper HTML structure',
            'status' => 'passed',
            'message' => 'HTML structure is valid'
        );
    } else {
        $results[] = array(
            'check' => 'Proper HTML structure',
            'status' => 'failed',
            'message' => 'HTML structure is invalid'
        );
    }

    // Check for proper heading structure
    $headings = $dom->getElementsByTagName("h1");
    $headings_count = $headings->length;
    if ($headings_count > 0) {
        $results[] = array(
            'check' => 'Proper heading structure',
            'status' => 'passed',
            'message' => 'Heading structure is correct'
        );
    } else {
        $results[] = array(
            'check' => 'Proper heading structure',
            'status' => 'failed',
            'message' => 'Heading structure is missing'
        );
    }

    // Check for proper meta description
    $meta_description = $dom->getElementsByTagName("meta");
    $meta_description_valid = false;
    for ($i = 0; $i < $meta_description->length; $i++) {
        $item = $meta_description->item($i);
        if ($item->getAttribute("name") == "description" && $item->getAttribute("content")) {
            $meta_description_valid = true;
            $results[] = array(
                'check' => 'Proper meta description',
                'status' => 'passed',
                'message' => 'Meta description is present and valid'
            );
            break;
        }
    }
    if (!$meta_description_valid) {
        $results[] = array(
            'check' => 'Proper meta description',
            'status' => 'failed',
            'message' => 'Meta description is missing or invalid'
        );
    }

    // Check for proper meta keywords
    $meta_keywords = $dom->getElementsByTagName("meta");
    $meta_keywords_valid = false;
    for ($i = 0; $i < $meta_keywords->length; $i++) {
        $item = $meta_keywords->item($i);
        if ($item->getAttribute("name") == "keywords" && $item->getAttribute("content")) {
            $meta_keywords_valid = true;
            $results[] = array(
                'check' => 'Proper meta keywords',
                'status' => 'passed',
                'message' => 'Meta keywords are present and valid'
            );
            break;
        }
    }
    if (!$meta_keywords_valid) {
        $results[] = array(
            'check' => 'Proper meta keywords',
            'status' => 'failed',
            'message' => 'Meta keywords are missing or invalid'
        );
    }

    // Check for proper image alt attributes
    $images = $dom->getElementsByTagName("img");
    $alt_count = 0;
    foreach ($images as $image) {
        if ($image->getAttribute("alt")) {
            $alt_count++;
        }
    }
    if ($alt_count == $images->length) {
        $results[] = array(
            'check' => 'Proper image alt attributes',
            'status' => 'passed',
            'message' => 'All images have proper alt attributes'
        );
    } else {
        $results[] = array(
            'check' => 'Proper image alt attributes',
            'status' => 'failed',
            'message' => 'Some images are missing alt attributes'
        );
    }

    // Check for proper link structure
    $links = $dom->getElementsByTagName("a");
    $href_count = 0;
    foreach ($links as $link) {
        if ($link->getAttribute("href")) {
            $href_count++;
        }
    }
    if ($href_count == $links->length) {
        $results[] = array(
            'check' => 'Proper link structure',
            'status' => 'passed',
            'message' => 'All links have proper href attributes'
        );
    } else {
        $results[] = array(
            'check' => 'Proper link structure',
            'status' => 'failed',
            'message' => 'Some links are missing href attributes'
        );

        // Highlight the issue with a red border
        echo "<script>
                var links = document.getElementsByTagName('a');
                for (var i = 0; i < links.length; i++) {
                    if (!links[i].hasAttribute('href')) {
                        links[i].style.border = '2px solid red';
                    }
                }
            </script>";
    }

    // Check for HTTPS
    if (strpos($url, 'https://') === 0) {
        $results[] = array(
            'check' => 'HTTPS',
            'status' => 'passed',
            'message' => 'Website is using HTTPS'
        );
    } else {
        $results[] = array(
            'check' => 'HTTPS',
            'status' => 'failed',
            'message' => 'Website is not using HTTPS'
        );
    }

    // Check for mobile-friendliness using meta viewport tag
    $meta_viewport = $dom->getElementsByTagName("meta");
    $mobile_friendly = false;
    for ($i = 0; $i < $meta_viewport->length; $i++) {
        $item = $meta_viewport->item($i);
        if ($item->getAttribute("name") == "viewport" && strpos($item->getAttribute("content"), "width=device-width") !== false) {
            $mobile_friendly = true;
            $results[] = array(
                'check' => 'Mobile-friendliness',
                'status' => 'passed',
                'message' => 'Website is mobile-friendly'
            );
            break;
        }
    }
    if (!$mobile_friendly) {
        $results[] = array(
            'check' => 'Mobile-friendliness',
            'status' => 'failed',
            'message' => 'Website is not mobile-friendly'
        );
    }

    // Check for duplicate content using canonical link
    $canonical_link = $dom->getElementsByTagName("link");
    $canonical_present = false;
    for ($i = 0; $i < $canonical_link->length; $i++) {
        $item = $canonical_link->item($i);
        if ($item->getAttribute("rel") == "canonical" && $item->getAttribute("href")) {
            $canonical_present = true;
            $results[] = array(
                'check' => 'Canonical link',
                'status' => 'passed',
                'message' => 'Canonical link is present'
            );
            break;
        }
    }
    if (!$canonical_present) {
        $results[] = array(
            'check' => 'Canonical link',
            'status' => 'failed',
            'message' => 'Canonical link is missing'
        );
    }

    // Display the results
    echo "<h2>Website Audit Results</h2>";
    echo "<table>";
    echo "<tr><th>Check</th><th>Status</th><th>Message</th></tr>";
    foreach ($results as $result) {
        echo "<tr>";
        echo "<td>" . $result['check'] . "</td>";
        echo "<td>" . $result['status'] . "</td>";
        echo "<td>" . $result['message'] . "</td>";
        echo "</tr>";
    }
    echo "</table>";

    // Initialize cURL multi handle
    $mh = curl_multi_init();

    // Create an array to store cURL handles
    $ch_array = array();

    // Get all links on the page
    $links = $dom->getElementsByTagName("a");

    // Loop through each link
    foreach ($links as $link) {
        $href = $link->getAttribute("href");

        // Skip external links and links without href
        if (empty($href) || strpos($href, 'http') !== 0) {
            continue;
        }

        // Initialize a new cURL handle
        $ch = curl_init($href);

        // Set cURL options
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HEADER, true);
        curl_setopt($ch, CURLOPT_NOBODY, true);

        // Add the handle to the multi handle
        curl_multi_add_handle($mh, $ch);

        // Store the handle in the array
        $ch_array[] = $ch;
    }

    // Execute all cURL handles
    $running = null;
    do {
        curl_multi_exec($mh, $running);
    } while ($running > 0);

    // Loop through each cURL handle
    foreach ($ch_array as $ch) {
        // Get the response information
        $info = curl_getinfo($ch);

        // Check if the request was successful
        if ($info['http_code'] == 200) {
            // Get the total time taken to load the page
            $total_time = $info['total_time'];

            // Assign a score based on the load time
            $score = calculate_score($total_time);

            // Add the result to the array
            $results[] = array(
                'url' => $info['url'],
                'load_time' => $total_time,
                'score' => $score
            );
        }

        // Remove the handle from the multi handle
        curl_multi_remove_handle($mh, $ch);

        // Close the handle
        curl_close($ch);
    }

    // Close the multi handle
    curl_multi_close($mh);

    // Display the load time results
    echo "<h2>Load Time Results</h2>";
    echo "<table>";
    echo "<tr><th>URL</th><th>Load Time (seconds)</th><th>Score</th></tr>";

    foreach ($results as $result) {
        // Check if 'url', 'load_time', and 'score' keys exist before accessing them
        if (isset($result['url']) && isset($result['load_time']) && isset($result['score'])) {
            $url = $result['url'];
            $load_time = number_format($result['load_time'], 2);
            $score = $result['score'];

            echo "<tr>";
            echo "<td>" . htmlspecialchars($url) . "</td>";
            echo "<td>" . $load_time . "</td>";
            echo "<td>" . $score . "</td>";
            echo "</tr>";
        } else {
            // Optionally, add debug information here if needed
            // echo "<tr><td colspan='3'>Incomplete data for one of the URLs</td></tr>";
        }
    }

    echo "</table>";
}

// Function to calculate the score based on the load time
function calculate_score($load_time)
{
    // Define the score ranges
    $score_ranges = array(
        array('min' => 0, 'max' => 2, 'score' => 100),
        array('min' => 2, 'max' => 4, 'score' => 75),
        array('min' => 4, 'max' => 6, 'score' => 50),
        array('min' => 6, 'max' => 8, 'score' => 25),
        array('min' => 8, 'max' => INF, 'score' => 0)
    );

    // Loop through the score ranges to find the appropriate score
    foreach ($score_ranges as $range) {
        if ($load_time >= $range['min'] && $load_time < $range['max']) {
            return $range['score'];
        }
    }

    // Return a default score if no range matches
    return 0;
}

// Check if the form is submitted
if (isset($_POST['url'])) {
    $url = $_POST['url'];
    website_audit($url);
}
?>

<!-- HTML form -->
<form method="post">
    <label for="url">Enter the URL:</label>
    <input type="text" name="url" id="url" required>
    <button type="submit">Audit Website</button>
</form>

<?php
include $_SERVER['DOCUMENT_ROOT'] . '/footer.php';
?>
