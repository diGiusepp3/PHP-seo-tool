<?php
// compare.php

require_once 'seo-analysis.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/ini.inc';

include $_SERVER['DOCUMENT_ROOT'] . '/header.php';

if (isset($_GET['your_site']) && isset($_GET['competitor_site'])) {
    $yourSite = filter_var($_GET['your_site'], FILTER_SANITIZE_URL);
    $competitorSite = filter_var($_GET['competitor_site'], FILTER_SANITIZE_URL);

    if (filter_var($yourSite, FILTER_VALIDATE_URL) && filter_var($competitorSite, FILTER_VALIDATE_URL)) {
        // Voer SEO-analyses uit
        $yourSiteAnalysis = seoAnalysis($yourSite);
        $competitorAnalysis = seoAnalysis($competitorSite);

        // Resultaten weergeven
        echo "<h2>Vergelijking tussen jouw website en de concurrent:</h2>";

        echo "<h3>Laadtijd (in seconden):</h3>";
        echo "Jouw website: " . number_format($yourSiteAnalysis['load_time'], 2) . " s<br>";
        echo "Concurrent: " . number_format($competitorAnalysis['load_time'], 2) . " s<br>";

        echo "<h3>Meta-tags:</h3>";
        echo "<strong>Jouw website:</strong><br>";
        foreach ($yourSiteAnalysis['meta_tags'] as $name => $content) {
            echo "$name: $content<br>";
        }

        echo "<strong>Concurrent:</strong><br>";
        foreach ($competitorAnalysis['meta_tags'] as $name => $content) {
            echo "$name: $content<br>";
        }

        echo "<h3>Aantal header-tags:</h3>";
        echo "Jouw website: H1: {$yourSiteAnalysis['h1_count']}, H2: {$yourSiteAnalysis['h2_count']}<br>";
        echo "Concurrent: H1: {$competitorAnalysis['h1_count']}, H2: {$competitorAnalysis['h2_count']}<br>";

        // Resultaten opslaan in de database
        $stmt = $conn->prepare("INSERT INTO site_comparisons (site1_url, site1_load_time, site2_url, site2_load_time, site1_meta_tags, site2_meta_tags, site1_headers, site2_headers) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssssss",
            $yourSite, number_format($yourSiteAnalysis['load_time'], 2),
            $competitorSite,
            number_format($competitorAnalysis['load_time'], 2),
            json_encode($yourSiteAnalysis['meta_tags']),
            json_encode($competitorAnalysis['meta_tags']),
            json_encode($yourSiteAnalysis['headers']),
            json_encode($competitorAnalysis['headers'])
        );
        $stmt->execute();
        $stmt->close();

    } else {
        echo "Ongeldige URL's ingevoerd. Zorg ervoor dat de URL's correct zijn.";
    }
} else {
    echo "Voer zowel jouw website URL als de concurrent URL in.";
}

include $_SERVER['DOCUMENT_ROOT'] . '/footer.php';
?>
