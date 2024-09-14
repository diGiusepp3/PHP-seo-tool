<?php
$bodyClass = isset($bodyClass) ? $bodyClass : 'bg-none';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Jouw SEO-tool voor zoekwoordonderzoek, backlinks analyse, SEO-audits en tag controle.">
    <meta name="keywords" content="SEO, zoekwoordonderzoek, backlinks, SEO-audit, tags">
    <meta name="author" content="Gielen Matthias">

    <!-- Title of the page -->
    <title>SEO Tool</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="/css/bootstrap/bootstrap.min.css">
    <!-- CSS Stylesheet -->
    <link rel="stylesheet" href="/css/styles.css">
    <link rel="stylesheet" href="/css/myBootstrap.css">

    <!-- Favicon -->
    <link rel="icon" href="/favicon.ico" type="image/x-icon">
</head>
<body class="<?php echo htmlspecialchars($bodyClass); ?>">
<!-- Begin van de header sectie -->
<header>
    <nav>
        <ul>
            <li><a href="/">Home</a></li>
            <li><a href="/pages/keyword-research.php">Keywords</a></li>
            <li><a href="/pages/backlinks-analysis.php">Backlinks</a></li>
            <li><a href="/pages/audit/seo-audit.php">SEO Audit</a></li>
            <li><a href="/pages/tag-check.php">Tag Control</a></li>
            <?php
                if (isset($_SESSION['user_id'])) {
                    echo '<li><a href="/pages/account/">Account</a></li>';
                } else {
                    echo '';
                }
            ?>
        </ul>
    </nav>
</header>
<!-- Einde van de header sectie -->

<!-- Begin van de main -->
<main>
