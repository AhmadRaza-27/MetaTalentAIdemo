<?php
require_once __DIR__ . '/../config/config.php';
require_once __DIR__ . '/nav-data.php';

$currentPage = basename($_SERVER['PHP_SELF']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>
        <?php echo isset($pageTitle) ? $pageTitle . ' | ' . SITE_NAME : SITE_NAME; ?>
    </title>

    <meta name="description" content="Human-agent workforce collaboration platform.">

    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/public/css/style.css">

    <!-- Swiper.js CSS -->
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
    >
</head>

<body>

<header class="site-header">
    <div class="container header-inner">

        <a href="<?php echo BASE_URL; ?>/index.php" class="logo">
            <span class="logo-text">
                Metatalent<span class="gradient-text">.ai</span>
            </span>
        </a>

        <nav class="main-nav" id="mainNav">
            <?php foreach ($navMain as $item): ?>
                <a
                    href="<?php echo BASE_URL . '/' . $item['href']; ?>"
                    class="<?php echo $currentPage === $item['href'] ? 'active' : ''; ?>"
                >
                    <?php echo htmlspecialchars($item['label']); ?>
                </a>
            <?php endforeach; ?>
        </nav>

        <div class="header-actions">
            <a
                href="<?php echo BASE_URL; ?>/command-center.php"
                class="btn-ghost"
            >
                Sign In
            </a>

            <a
                href="<?php echo BASE_URL; ?>/dashboard.php"
                class="btn-solid"
            >
                Explore MetatalentAI
            </a>
        </div>

        <button
            class="nav-toggle"
            id="navToggle"
            aria-label="Toggle menu"
            type="button"
        >
            ☰
        </button>

    </div>
</header>

<main>