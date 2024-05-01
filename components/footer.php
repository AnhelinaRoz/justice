<?php
global $data_assets;
?>
<footer class="footer" id="contact_us">
    <div class="content_item">
        <img src="./img/logo.png" alt="">
        <div class="">
            <p class="p">Avenue Louis-Casaï 18, Genève, Geneva 1209, CH</p>
            <a class="mail" href="mailto:registry@jpti.ch">registry@jpti.ch</a>
            <a class="local" href=""><img src="img/linkedin.svg" alt=""></a>
        </div>
    </div>
    <div class="corp">
        <p>Copyright © 2024</p>
        <p>developed by: <a href="https://dreamsagency.net/">Dreams Agency</a></p>
    </div>
</footer>
<?php include_once('components/modals.php') ?>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="./js/modal.js?<?=date("d-h-i")?>"></script>
<?php
echo getParams($data_assets, 'js');
?>
</body>
</head>