<?php 
$current_link = (isset($_SERVER["HTTPS"]) && $_SERVER["HTTPS"] === "on" ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sherman & Co Financial Services </title>
    <link rel="stylesheet" href="../assets/css/app.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="assets/images/compressed-logo.png" />
    <script src="https://kit.fontawesome.com/ec71fb7b6f.js" crossorigin="anonymous"></script>
</head>

<body>

    <header>
        <div>
            <a href="index"><img id="logo" src="../assets/images/sherman-and-co-logo.png"
                    alt="Sherman & CO Financial Services Logo"></a>
        </div>

        <nav class="main-menu">
            <ul>

                <li><a href="/" class="<?= $current_link == 'https://www.shermanfs.co.uk/' ? 'current' : null ?>">Home</a></li>
                <li><a href="/about" class="<?= $current_link == 'https://www.shermanfs.co.uk/about' ? 'current' : null ?>">About</a></li>
                <li><a href="/services" class="<?= $current_link == 'https://www.shermanfs.co.uk/services' ? 'current' : null ?>">Services</a></li>
                <li><a href="/contact" class="<?= $current_link == 'https://www.shermanfs.co.uk/contact' ? 'current' : null ?>">Contact</a></li>
            </ul>
        </nav>

        <nav>
            <div id="menuToggle">
                <input type="checkbox" />
                <span></span>
                <span></span>
                <span></span>

                <ul id="menu">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="services.php">Services</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </div>
        </nav>
    </header>