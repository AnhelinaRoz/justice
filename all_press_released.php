<?php
global $get_projects;
$sort = $_GET['sort'] ?? 'all';
$data_assets['css'] = [
    './css/style.css',
];
include("./components/header.php");

switch ($sort) {
    case 'new':
        $sort_sql = 'WHERE YEAR(`date`) = YEAR(CURDATE())';
        break;
    case 'archive':
        $sort_sql = 'WHERE YEAR(`date`) < YEAR(CURDATE())';
        break;
    default:
        $sort_sql = '';
}
$get_press_release = CustomQuery("SELECT * FROM `news` $sort_sql ORDER BY `date` DESC LIMIT 200;");


?>
<header class="header2">
    <div class="nav_top">
        <div class="bg"></div>
    </div>
    <div class="content">
        <h1 class="h1">Press Released</h1>
    </div>
</header>
<main class="press_release-single">
    <section class="press_release-naw_top">
        <ul class="ul">
            <li class="li"><a class="a" href="all_press_released.php?sort=all">View all</a></li>
            <li class="li"><a class="a" href="all_press_released.php?sort=new">New</a></li>
            <li class="li"><a class="a" href="all_press_released.php?sort=archive">Archive</a></li>
        </ul>
    </section>


    <section class="press_release" id="press_release">
        <div class="spisok">
            <?php
            foreach ($get_press_release as $key => $item) {
                include('components/press_release_card.php');
            }
            ?>
        </div>
    </section>
</main>
<?php

include_once('components/footer.php');

?>
