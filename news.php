<?php
$data_assets['css'] = [
    './css/news.css'
];
$data_assets['js'] = [
    './js/pdf_reader.js'
];
include("./components/header.php");
$id = $_GET['id'];

$result = CustomQuery("SELECT * FROM `news` WHERE `id` = $id", 1);

?>

<body>
<header class="header2">
    <div class="nav_top">
        <div class="bg"></div>
    </div>
    <div class="content">
        <h1 class="h1"><?= $result['name'] ?></h1>
        <p class="date"><?= $result['date'] ?></p>
    </div>
</header>
<main>
    <section class="content content_wrapper">
        <div class="content_block"><?= $result['content'] ?></div>
    </section>

    <div class="pdf-container__wrapper">
        <div id="pdf-container" class="pdf-container">
            <canvas id="pdf-canvas" class="pdf-canvas" data-url="<?= $result['pdf'] ?>"></canvas>
            <img src="./img/icon/arrow.svg" alt="" id="prev-button" class="btn btn_left">
            <img src="./img/icon/arrow.svg" alt="" id="next-button" class="btn btn_right">
        </div>
    </div>
    <section class="pdf"></section>
</main>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.11.338/pdf.js"></script>
<?php include_once('components/footer.php') ?>
