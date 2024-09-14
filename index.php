<?php
session_start();

include $_SERVER['DOCUMENT_ROOT'] . '/ini.inc';

$bodyClass = 'home';

include $_SERVER['DOCUMENT_ROOT'] . '/header.php';
?>
<!-- Hoofdinhoud van de pagina -->
<section id="hero" class="bg-2">
    <h1>SEO Tool</h1>
    <?php if (isset($_SESSION['user_id'])): ?>
        <a href="/pages/keywords/keyword-research.php" class="btn">Go to SEO Tool</a>
    <?php else: ?>
        <a href="/pages/account/register-1.php" class="btn">Start for free</a>
    <?php endif; ?>
</section>

<form action="/backend/competition/seo-analysis.php" method="post">
    <input type="submit" value="Bekijk Beste Zoekwoorden">
</form>



<section id="features">
    <h2 class="text-center">Online SEO Software for Superior Website Optimization</h2>
    <h3 class="text-center">Webmagic provides powerful SEO tools and insights to enhance your website\'s performance and visibility.</h3>
    <div class="cards-holder">
        <div class="card">
            <div class="card-header">
                <div class="card-title title-pri-gray">
                    <h3>Keyword Research</h3>       
                </div>
            </div>
            <div class="card-body">
                <p>Keyword analysis is the process of evaluating queries people type into search engines to identify and prioritize search terms you want to rank for—and use them more effectively.</p>
            </div>
            <div class="card-footer">
                <a href="/pages/keywords/keyword-research.php" class="btn btn-pri-gray">Begin Nu</a>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <div class="card-title title-pri-pinkish">
                    <h3>Website Audit</h3>       
                </div>
            </div>
            <div class="card-body">
                <p>A website audit is an examination of page performance prior to large-scale search engine optimization (SEO) or a website redesign.</p>
            </div>
            <div class="card-footer">
                <a href="/pages/audit/seo-audit.php" class="btn btn-pri-pinkish">Begin Nu</a>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <div class="card-title title-pri-blue">
                    <h3>Rank Tracking</h3>       
                </div>
            </div>
            <div class="card-body">
                <p>Rank tracking is the practice of tracking where URLs rank on the search engine results pages for select keywords.</p>
            </div>
            <div class="card-footer">
                <a href="/pages/keywords/rank-tracking.php" class="btn btn-pri-blue">Begin Nu</a>
            </div>
        </div>
    </div>
</section>
<!--<iframe src="https://www.yeschat.ai/i/gpts-ZxWyZqMi-h4ckGPT" width="800" height="500" style="max-width: 100%;"></iframe>
<iframe src="https://www.yeschat.ai/i/gpts-9t557kEGh2f-Black-Hat-Hacker-GPT" width="800" height="500" style="max-width: 100%;"></iframe>
--><?php
include $_SERVER['DOCUMENT_ROOT'] . '/footer.php';
?>
