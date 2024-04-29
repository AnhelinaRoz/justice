<?php
require_once("./php_scripts/connections.php");
$id = $_GET['id'];

$result = CustomQuery("SELECT * FROM `news` WHERE `id` = $id", 1);

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
    <link rel="stylesheet" href="fonts/Athelas/font-athelas.css?<?=date("d-h-i")?>">
    <link rel="stylesheet" href="fonts/Bebasneue/font-bebasneue.css?<?=date("d-h-i")?>">
    <link rel="stylesheet" href="css/reset.css?<?=date("d-h-i")?>">
    <link rel="stylesheet" href="css/global.css?<?=date("d-h-i")?>">
    <link rel="stylesheet" href="css/news.css?<?=date("d-h-i")?>">
    <link rel="stylesheet" href="css/modal.css?<?=date("d-h-i")?>">

    <title>Document</title>
</head>
<body>
<header class="header">
    <div class="nav_top">
        <div class="bg"></div>
    </div>
    <div class="content">
        <h1 class="h1"><?= $result['name']?></h1>
        <p class="date"><?= $result['date']?></p>
    </div>
</header>
<main>
    <section class="content"><div class="content_block"><?= $result['content']?></div></section>
    <section class="pdf"><?= $result['pdf']?></section>
</main>
<?php include_once('components/footer.php') ?>
</body>
</html>