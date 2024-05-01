<?php
require_once("./php_scripts/env.php");

require_once("./php_scripts/configs.php");
require_once("./php_scripts/connections.php");
require_once("./php_scripts/global_function.php");

$get_projects = CustomQuery("SELECT * FROM `projects`");
$data_assets = $data_assets ?? [];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./fonts/Athelas/font-athelas.css?<?= date("d-h-i") ?>">
    <link rel="stylesheet" href="./fonts/Bebasneue/font-bebasneue.css?<?= date("d-h-i") ?>">
    <link rel="stylesheet" href="./css/reset.css?<?= date("d-h-i") ?>">
    <link rel="stylesheet" href="./css/global.css?<?= date("d-h-i") ?>">
    <link rel="stylesheet" href="./css/modal.css?<?= date("d-h-i") ?>">
    <?php
    echo getParams($data_assets, 'css');
    ?>
    <title><?= $title ?? $project_name ?? '' ?></title>
</head>
<body>