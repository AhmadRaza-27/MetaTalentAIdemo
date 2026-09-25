<?php
require_once __DIR__ . '/../config/config.php';
require_once __DIR__ . '/nav-data.php';
require_once __DIR__ . '/functions.php';

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

    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/public/css/style.css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/public/css/app.css">
</head>

<body class="app-body">

<div class="app-shell">

    <aside class="sidebar" id="sidebar">

        <a href="<?php echo BASE_URL; ?>/index.php" class="sidebar-logo">
            <span class="logo-text">
                Metatalent<span class="gradient-text">.ai</span>
            </span>
        </a>

        <nav class="sidebar-nav">
            <?php foreach ($sidebarMain as $item): ?>
                <a
                    href="<?php echo BASE_URL . '/' . $item['href']; ?>"
                    class="sidebar-link <?php echo $currentPage === $item['href'] ? 'active' : ''; ?>"
                >
                    <?php echo renderIcon($item['icon']); ?>
                    <span><?php echo htmlspecialchars($item['label']); ?></span>
                </a>
            <?php endforeach; ?>
        </nav>

        <div class="sidebar-divider"></div>

        <nav class="sidebar-nav">
            <?php foreach ($sidebarSecondary as $item): ?>
                <a
                    href="<?php echo BASE_URL . '/' . $item['href']; ?>"
                    class="sidebar-link muted <?php echo $currentPage === $item['href'] ? 'active' : ''; ?>"
                >
                    <?php echo renderIcon($item['icon']); ?>
                    <span><?php echo htmlspecialchars($item['label']); ?></span>
                </a>
            <?php endforeach; ?>
        </nav>

        <a
            href="<?php echo BASE_URL; ?>/institutional-memory.php"
            class="sidebar-cta"
        >
            <p class="sidebar-cta-title">Institutional Memory</p>
            <p class="sidebar-cta-sub">
                1,284 insights captured across 6 teams.
            </p>
        </a>

    </aside>

    <div class="app-main">

        <header class="app-topbar">

            <button
                class="sidebar-toggle"
                id="sidebarToggle"
                aria-label="Toggle sidebar"
                type="button"
            >
                ☰
            </button>

            <h1 class="app-page-title">
                <?php echo isset($pageTitle) ? htmlspecialchars($pageTitle) : ''; ?>
            </h1>

            <a
                href="<?php echo BASE_URL; ?>/index.php"
                class="btn-outline small"
            >
                Back to Site
            </a>
            <script>
                 if (localStorage.getItem('metatalent-dark-mode') === 'true') {
                document.documentElement.classList.add('dark-preload');
                }
            </script>
        </header>

        <section class="app-content">