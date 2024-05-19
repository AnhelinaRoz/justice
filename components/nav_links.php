<?php
global $get_projects;
$root_link = 'index.php';
?>

<div id="home" class="header_nav big_nav">
    <div class="logo">
        <a href="index.php"><img src="img/logo.png" alt=""></a>
    </div>
    <?php include('./components/nav_links_content.php') ?>
    <div class="donate">
        <a href="https://www.gofundme.com/f/empowering-smb-entrepreneurs-upholding-rights">Donate</a>
    </div>
    <div class="burger" onclick="open_modal('burger_menu')">
        <img src="img/Vector.svg" alt="">
    </div>
</div>