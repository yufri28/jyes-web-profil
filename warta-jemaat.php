<?php
require_once './template/header.php';
?>
<section id="tentang" class="tentang-kami scrollspy" style="margin-bottom: 232px;">
    <div class="container">
        <div class="row">
            <h3 class="center light grey-text text-darken-3" style="padding-top: 50px;">Warta Jemaat</h3>
            <?php for ($i = 0; $i < 3; ++$i): ?>
            <div class="col m12 center">
                <div class="gambar-profil" style="display: flex;justify-content: center;">
                    <img class="gambar-profil-gereja responsive-img materialboxed" style="margin-top: 25px; "
                        src="./assets/slider/background.png" alt="">
                </div>
                <p class="judul">
                    Laporan Keuangan <small><i class="grey-text">(Selasa, 20 Januari 2022)</i></small>
                </p>
            </div>
            <?php endfor; ?>
        </div>
    </div>
</section>
<?php
require_once './template/footer.php';
?>