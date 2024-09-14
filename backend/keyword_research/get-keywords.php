<?php

include $_SERVER['DOCUMENT_ROOT'] . '/ini.inc';

$query = "SELECT * FROM keywords";
$result = $conn->query($query);

if ($result->num_rows > 0) {
    // Output data of each row
    while($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"]. " - Keyword: " . $row["keyword"]. " - Search Volume: " . $row["search_volume"]. " - Competition: " . $row["competition"]. " - Related Keywords: " . $row["related_keywords"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();