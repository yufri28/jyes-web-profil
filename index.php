<?php
require_once './template/header.php';
?>
<!-- slider -->
<div class="slider">
    <ul class="slides">
        <li class="bg-gereja">
            <img src="./assets/slider/background.png"> <!-- random image -->
            <div class="caption center-align">
                <h3>GMIT-Yegar Sahaduta Osmo</h3>
                <h5 class="light grey-text text-lighten-3">Gedung Kebaktian</h5>
            </div>
        </li>
        <li>
            <img src="./assets/slider/sekolah minggu.jpeg" class="slide-sekolah-minggu"> <!-- random image -->
            <div class="caption left-align">
                <h3>Anak PAR</h3>
                <h5 class="light grey-text text-lighten-3">Sekolah Minggu Pos 3</h5>
            </div>
        </li>
        <li>
            <img src="./assets/slider/anak par.jpeg" class="anak-par"> <!-- random image -->
            <div class="caption right-align">
                <h3>Anak PAR</h3>
                <h5 class="light grey-text text-lighten-3">Sekolah Minggu Pos 2</h5>
            </div>
        </li>
        <li>
            <img src="./assets/slider/pemuda.JPG"> <!-- random image -->
            <div class="caption center-align">
                <h3>Pemuda</h3>
                <h5 class="light grey-text text-lighten-3">Kegiatan PA 2019 - Lasiana Beach</h5>
            </div>
        </li>
    </ul>
</div>

<!-- about -->
<section id="tentang" class="tentang-kami scrollspy">
    <div class="container">
        <div class="row">
            <h3 class="center light grey-text text-darken-3" style="padding-top: 50px;">Tentang Kami</h3>
            <div class="col m9">
                <p class="sejarah">
                    GMIT Yegar Sahaduta Osmo adalah salah satu anggota Gereja Masehi Injili di Timor (GMIT) yang
                    berlokasi di Jalan Yosudarso, Osmo, Kecamatan Alak, Kota Kupang, Nusa Tenggara Timur. Gereja
                    GMIT
                    Yegar Sahaduta Osmo didirikan pada tanggal 9 juli 1989 dengan 79 kepala keluarga. Sejak awal
                    berdirinya gereja ini, jumlah jemaat terus bertambah. Berdasarkan hasil pendataan pada awal
                    periode
                    pelayanan 2019-2023, jumlah jemaat yang tercatat sebanyak 1263 jemaat dengan 308 kepala
                    keluarga.
                </p>
            </div>
            <div class="col m3">
                <div class="gambar-profil center">
                    <img class="gambar-profil-gereja center responsive-img materialboxed" style="margin-top: 25px;"
                        src="./assets/slider/background.png" alt="">
                </div>
            </div>
        </div>
        <div class="lihat-selengkapnya center">
            <a href="./tentang-kami.php"><i>Selengkapnya...</i></a>
        </div>
    </div>
</section>
<!-- galeri -->
<section class="galeri grey lighten-3 scrollspy" id="galeri">
    <div class="container" style="padding-bottom:40px;">
        <h3 class="light center grey-text text-darken-3" style="padding-top: 50px;">Galeri</h3>
        <div class="row">
            <div class="col m3 s12">
                <img src="./assets/slider/anak par.jpeg" class="responsive-img materialboxed" width="500" alt="">
            </div>
            <div class="col m3 s12">
                <img src="./assets/slider/sekolah minggu.jpeg" class="responsive-img materialboxed" width="500" alt="">
            </div>
            <div class="col m3 s12">
                <img src="./assets/slider/pemuda.JPG" class="responsive-img materialboxed" width="500" alt="">
            </div>
            <div class="col m3 s12">
                <img src="./assets/slider/sekolah minggu.jpeg" class="responsive-img  materialboxed" alt="">
            </div>
        </div>
        <div class="row">
            <div class="col m3 s12">
                <img src="./assets/slider/sekolah minggu.jpeg" class="responsive-img  materialboxed" alt="">
            </div>
            <div class="col m3 s12">
                <img src="./assets/slider/sekolah minggu.jpeg" class="responsive-img materialboxed" width="500" alt="">
            </div>
            <div class="col m3 s12">
                <img src="./assets/slider/pemuda.JPG" class="responsive-img materialboxed" width="500" alt="">
            </div>
            <div class="col m3 s12">
                <img src="./assets/slider/anak par.jpeg" class="responsive-img materialboxed" width="500" alt="">
            </div>
        </div>
        <div class="row">
            <div class="col m3 s12">
                <img src="./assets/slider/sekolah minggu.jpeg" class="responsive-img  materialboxed" alt="">
            </div>
            <div class="col m3 s12">
                <img src="./assets/slider/sekolah minggu.jpeg" class="responsive-img materialboxed" width="500" alt="">
            </div>
            <div class="col m3 s12">
                <img src="./assets/slider/anak par.jpeg" class="responsive-img materialboxed" width="500" alt="">
            </div>
            <div class="col m3 s12">
                <img src="./assets/slider/pemuda.JPG" class="responsive-img materialboxed" width="500" alt="">
            </div>
        </div>
        <div class="lihat-selengkapnya center">
            <a href="./galeri.php"><i>Selengkapnya...</i></a>
        </div>
    </div>
</section>

<section id="kontak" class="kontak scrollspy">
    <div class="container">
        <h3 class="light center grey-text text-darken-3" style="padding-top: 50px;">Kontak Kami</h3>
        <div class="row">
            <div class="col m5 s12">
                <div class="card-panel blue darken-2">
                    <h5 class="white-text center"> Kontak
                    </h5>
                    <h6 class="white-text"><i class="material-icons">local_post_office</i>
                        yegarsahadutaosmo@gmail.com</h6>
                    <h6 class="white-text"><i class="material-icons">phone</i> 08128388888</h6>
                </div>
                <ul class="collection with-header">
                    <li class="collection-header">Lokasi</li>
                    <li class="collection-item">Jl. Yos Sudarso Osmo, Namosain, Alak, Kota Kupang, Nusa Tenggara
                        Timur</li>
                </ul>
            </div>
            <div class="col m7 s12">
                <form action="">
                    <div class="card-panel">
                        <h5>Silahkan kirim pesan anda!</h5>
                        <div class="input-field">
                            <i class="material-icons prefix">account_circle</i>
                            <input id="name" name="nama" type="text" class="validate">
                            <label for="name">Nama</label>
                        </div>
                        <div class="input-field">
                            <i class="material-icons prefix">phone</i>
                            <input id="phone" name="no_telpon" type="number" class="validate">
                            <label for="phone">Nomor Telpon</label>
                        </div>
                        <div class="input-field">
                            <i class="material-icons prefix">email</i>
                            <input id="email" name="email" type="email" class="validate">
                            <label for="email">Email</label>
                        </div>
                        <div class="input-field">
                            <i class="material-icons prefix">edit</i>
                            <textarea name="pesan" id="pesan" class="materialize-textarea"></textarea>
                            <label for="Pesan">Pesan</label>
                        </div>
                        <button type="submit" class="btn blue darken-2">Kirim</button>
                    </div>
                </form>
            </div>
            <div class="lihat-selengkapnya center">
                <a href="./kontak.php"><i>Selengkapnya...</i></a>
            </div>
        </div>
    </div>
</section>
<?php
require_once './template/footer.php';
?>