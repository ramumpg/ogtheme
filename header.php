<?php
$header_layout = isset($_GET['header']) ? $_GET['header'] : 'header-left';
$header_file = 'layouts/headers/' . $header_layout . '.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ogtheme</title>
    <!-- Materialize CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!-- Material Design Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Google Fonts (Poppins) -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="/css/style.css">
    <link id="theme-stylesheet" rel="stylesheet" href="">
    <link id="dark-mode-stylesheet" rel="stylesheet" href="/css/dark.css" disabled>
</head>
<body>
    <header>
        <?php
        if (file_exists($header_file)) {
            include($header_file);
        } else {
            include('layouts/headers/header-left.php');
        }
        ?>
    </header>
