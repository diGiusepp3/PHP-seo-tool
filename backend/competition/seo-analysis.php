<?php

require_once 'helpers/curl-helper.php';

// Functie om de laadtijd van een URL te controleren
function getLoadTime($url) {
    $start = microtime(true);
    fetchUrlContent($url);
    $end = microtime(true);

    return $end - $start; // In seconden
}

// Functie om meta-tags te analyseren
function getMetaTags($url) {
    $html = fetchUrlContent($url);
    preg_match_all('/<meta\s+.*?name=["\'](.*?)["\'].*?content=["\'](.*?)["\'].*?>/i', $html, $matches);
    $metaTags = array_combine($matches[1], $matches[2]);

    return $metaTags;
}

// Functie om header-tags te analyseren
function getHeaderTagsCount($url, $tag = 'h1') {
    $html = fetchUrlContent($url);
    preg_match_all('/<' . $tag . '[^>]*>(.*?)<\/' . $tag . '>/i', $html, $matches);

    return count($matches[0]);
}

// Functie om een SEO-analyse uit te voeren
function seoAnalysis($url) {
    return [
        'load_time' => getLoadTime($url),
        'meta_tags' => getMetaTags($url),
        'h1_count' => getHeaderTagsCount($url, 'h1'),
        'h2_count' => getHeaderTagsCount($url, 'h2')
    ];
}
?>