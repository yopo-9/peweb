<div class="container-fluid ">
    <h2 class="text-center mt-3 mb-4" style="font-weight: 700;">
        Selamat Datang Di <br><span style="font-style: italic;">Nisstore</span>
    </h2>
    <div class=" d-flex justify-content-center">

        <div class="btn-group" role="group" aria-label="Basic outlined example">
            <a href="?kategori=all" class="btn btn-outline-secondary border bg-whtie shadow text-dark kategori <?= (!isset($_GET['kategori']) || $_GET['kategori'] == 'all') ? 'active' : ''; ?>">Semua</a>
            <a href="?kategori=pakaian" class="btn btn-outline-secondary border bg-whtie shadow text-dark kategori <?= (isset($_GET['kategori']) && $_GET['kategori'] == 'pakaian') ? 'active' : ''; ?>">Pakaian</a>
            <a href="?kategori=tas" class="btn btn-outline-secondary border bg-whtie shadow text-dark kategori <?= (isset($_GET['kategori']) && $_GET['kategori'] == 'tas') ? 'active' : ''; ?>">Tas</a>
            <a href="?kategori=celana" class="btn btn-outline-secondary border bg-whtie shadow text-dark kategori <?= (isset($_GET['kategori']) && $_GET['kategori'] == 'celana') ? 'active' : ''; ?>">Celana</a>
            <a href="?kategori=aksesoris" class="btn btn-outline-secondary border bg-whtie shadow text-dark kategori <?= (isset($_GET['kategori']) && $_GET['kategori'] == 'aksesoris') ? 'active' : ''; ?>">Aksesoris</a>
            <a href="?kategori=bodycare" class="btn btn-outline-secondary border bg-whtie shadow text-dark kategori <?= (isset($_GET['kategori']) && $_GET['kategori'] == 'bodycare') ? 'active' : ''; ?>">Bodycare</a>
        </div>  


    </div>

    <div id="produk" class="container border mb-4 mt-4 rounded 3 shadow bg-white">
        <div class="container-fluid Pakaian">
            <div class="row row-cols-md-5 row-cols-sm-2 p-5">
                <?php
                $kategori = isset($_GET['kategori']) ? $_GET['kategori'] : 'all';
                if ($kategori !== 'all') {
                    $query = "SELECT * FROM products WHERE category = '$kategori'";
                } else {
                    $query = "SELECT * FROM products";
                }
                $loop = mysqli_query($koneksi, $query);

                while ($a = mysqli_fetch_array($loop)) { ?>
                    <div class="col mb-5 produk" data-kategori="<?= $a['kategori'] ?>">
                        <div class="card shadow d-flex flex-column pt-4 ">
                            <img src="assets/img/<?= $a['gambar'] ?>" class="card-img-top" style="max-height: 200px; object-fit: contain;">
                            <div class="card-body">
                                <p class="card-text fw-semibold text-center"><?= $a['nama'] ?></p>
                            </div>
                            <div class="card-footer d-md-flex">
                                <a href="https://api.whatsapp.com/send?phone=6282346265909&text=Halo%20Kak,Saya%20ingin%20memesan%20<?= $a['nama'] ?>%20dengan%20harga%20<?= $a['harga'] ?>%20apakah%20masih%20tersedia%20?" " class=" btn btn-sm btn-primary d-block"><i class="fa-solid fa-plus"></i></a>
                                <span class="ms-auto text-dark fw-bold d-block text-center">Rp. <?= number_format($a['harga'], 0, ',', '.') ?></span>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>

        </div>
    </div>

    <!-- <div class="container border mb-4 mt-4 rounded 3 shadow bg-white">
        <h1>Tas.</h1>
        <div class="container-fluid Tas">
            <div class="row row-cols-md-5 row-cols-sm-2 p-5">
                <div class="col">
                    <div class="card shadow">
                        <img src="../img/8888.jpeg" class="card-img-top">
                        <div class="card-body">
                            <p class="card-text"> Tas.</p>
                        </div>
                        <div class="card-footer d-md-flex">
                            <a class="btn btn-sm btn-primary d-block">detail</a>
                            <span class="ms-auto text-danger fw-bold d-block text-center">Rp. 250.000,00</span>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card shadow">
                        <img src="../img/7777.jpeg" class="card-img-top">
                        <div class="card-body">
                            <p class="card-text"> Tas.</p>
                        </div>
                        <div class="card-footer d-md-flex">
                            <a class="btn btn-sm btn-primary d-block">detail</a>
                            <span class="ms-auto text-danger fw-bold d-block text-center">Rp. 250.000,00</span>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card shadow">
                        <img src="../img/6666.jpeg" class="card-img-top">
                        <div class="card-body">
                            <p class="card-text">Tas.</p>
                        </div>
                        <div class="card-footer d-md-flex">
                            <a class="btn btn-sm btn-primary d-block">detail</a>
                            <span class="ms-auto text-danger fw-bold d-block text-center">Rp. 250.000,00</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
</div>