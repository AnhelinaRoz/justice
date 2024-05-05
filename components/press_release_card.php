<?php
global $item;
global $key;

$link = "./news.php?id=" . $item['id'];
?>
<div class="card c<?= $key + 1 ?>">
    <a
            href="<?= $link ?>"
            class="img">
        <img src="<?= $item["logo"]?? "news/news1.png" ?>" alt="">
    </a>
    <p><?= date('F Y', strtotime($item['date'])) ?></p>
    <a href="<?= $link ?>" class="h4"><?= $item['name'] ?></a>

</div>
