<?php
/**
 * Shared document head. A page sets these vars before including this file:
 *   $page_title       — browser/tab + OG title
 *   $page_description — meta + OG description
 *   $page_slug        — marks the active nav link (home|about|services|industries|contact)
 */
$page_title       = $page_title       ?? 'Navaacharan — R&D & Software Solutions';
$page_description = $page_description ?? 'Navaacharan is an R&D and software solutions firm bridging research and real-world application — AI/ML, software, embedded systems and applied research for industry, enterprise and government.';
$page_slug        = $page_slug        ?? '';
// Base URL path, derived from where the site is served so it works both
// under a subfolder (XAMPP: /Navaacharan) and at the web root (production: /).
$base             = rtrim(dirname($_SERVER['SCRIPT_NAME']), '/');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= htmlspecialchars($page_title) ?></title>
  <meta name="description" content="<?= htmlspecialchars($page_description) ?>">
  <meta name="author" content="Navaacharan">
  <meta name="robots" content="index, follow">
  <meta name="theme-color" content="#16130F">

  <!-- Open Graph -->
  <meta property="og:type" content="website">
  <meta property="og:site_name" content="Navaacharan">
  <meta property="og:title" content="<?= htmlspecialchars($page_title) ?>">
  <meta property="og:description" content="<?= htmlspecialchars($page_description) ?>">
  <meta property="og:image" content="<?= $base ?>/images/og.png">
  <meta name="twitter:card" content="summary_large_image">

  <!-- Favicon -->
  <link rel="icon" href="<?= $base ?>/images/favicon-package/favicon.ico" sizes="any">
  <link rel="icon" type="image/svg+xml" href="<?= $base ?>/images/favicon-package/favicon.svg">
  <link rel="icon" type="image/png" sizes="32x32" href="<?= $base ?>/images/favicon-package/favicon-32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="<?= $base ?>/images/favicon-package/favicon-16.png">
  <link rel="apple-touch-icon" href="<?= $base ?>/images/favicon-package/apple-touch-icon.png">

  <!-- Fonts: Fraunces (display) + Inter (body) -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Fraunces:ital,opsz,wght@0,9..144,300..600;1,9..144,300..500&family=Inter:wght@300;400;450;500;600&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="<?= $base ?>/css/main.css">
</head>
<body>
