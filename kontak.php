<?php
require_once './template/header.php';
?>
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

        </div>
    </div>
</section>
<?php
require_once './template/footer.php';
?>