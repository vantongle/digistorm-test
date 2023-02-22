<?php
    // Autoloader
    if (file_exists('vendor/autoload.php')) {
        require_once('vendor/autoload.php');
    }
    $dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
    $dotenv->load();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
        <link rel="stylesheet" href="resources/owlcarousel/assets/owl.carousel.min.css">
        <link rel="stylesheet" href="resources/owlcarousel/assets/owl.theme.default.min.css">
        <link rel="stylesheet" href="resources/style.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
        <script src="resources/owlcarousel/owl.carousel.min.js"></script>
        <script src="resources/main.js"></script>
        <script src="https://cdn.tailwindcss.com"></script>
        <title>Social Feed Technical Challenge</title>
        <style type="text/tailwindcss">
        @layer utilities {
        .content-auto {
            content-visibility: auto;
        }
        .thumbnail {max-width: 200px; margin: 5px;}
        }
        @layer base {
            html {
                font-family: 'Inter', system-ui, sans-serif;
            }
        }
        </style>
    </head>
    <body>
        <header class="container mx-auto p-5">
            <h1 class="text-3xl font-black">
                Social Feed Technical Challenge
            </h1>
        </header>