<?php
// Navigation component for SECURE SKIES Drones
// This file contains the common header and navigation for all pages
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($page_title) ? $page_title : 'SECURE SKIES Drones'; ?></title>
    <link rel="icon" type="image/x-icon" href="favicon/favicon.ico">
    <link rel="icon" type="image/svg+xml" href="favicon/favicon.svg">
    <link rel="icon" type="image/png" sizes="96x96" href="favicon/favicon-96x96.png">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header class="header">
        <nav class="nav">
            <a href="index.php" class="logo">
                <img src="secure-skies-logo.png" alt="Secure Skies" class="logo-img">
                <span class="logo-text">SECURE SKIES</span>
            </a>
            <ul class="nav-links">
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="shop2.php">Shop</a></li>
                <li><a href="upload.php">Upload Receipt</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </nav>
    </header>
    <main class="main">