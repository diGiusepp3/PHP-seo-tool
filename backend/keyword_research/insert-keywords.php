<?php

require $_SERVER['DOCUMENT_ROOT'] . '/ini.inc';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $keyword = $conn->real_escape_string($_POST['keyword']);
    $search_volume = intval($_POST['search_volume']);
    $competition = floatval($_POST['competition']);
    $related_keywords = $conn->real_escape_string($_POST['related_keywords']);

    $query = "INSERT INTO keywords (keyword, search_volume, competition, related_keywords) VALUES ('$keyword', $search_volume, $competition, '$related_keywords')";

    if ($conn->query($query) === TRUE) {
        echo "Keyword data inserted successfully.";
    } else {
        echo "Error: " . $mysqli->error;
    }
}