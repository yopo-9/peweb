<?php
require("function.php");
include("components/headerAdmin.php");
include("components/navbarAdmin.php");
// session_start();
if (empty($_SESSION['login'])) {
    header('location: login.php');
}
?>

<div class=" card shadow my-5 mx-5 px-4">
    <h3 style="font-weight: 700; font-size:25px;" class="text-center my-3">Table Produk</h3>
    <hr>
    <div class="d-flex justify-content-end w-auto me-4">
        <button type="button" class="btn btn-primary" style="font-size: small;" data-bs-toggle="modal" data-bs-target="#staticBackdropTambah">
            <i class="fa-solid fa-plus "></i> Tambah Produk
    </div>
    </button>
    <div class="table-responsive">

        <table class=" table ">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Gambar Produk</th>
                    <th scope="col">Nama Produk</th>
                    <th scope="col">Kategori</th>
                     <th scope="col">Harga</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $loop = mysqli_query($koneksi, "select * from tb_produk");
                $id = 1;

                while ($a = mysqli_fetch_array($loop)) { ?>
                    <tr>
                        <th scope="row"><?= $id ?></th>
                        <td><img src="assets/img/<?= $a['gambar'] ?>" width="50" height="50" alt=""></td>
                        <td><?= $a['nama'] ?></td>
                        <td><?= $a['kategori'] ?></td>
                        <td>Rp. <?= number_format($a['harga'], 0, ',', '.') ?></td>
                        <td>
                            <button type="button" data-bs-toggle="modal" data-bs-target="#staticBackdropEdit<?= $a["id"]; ?>" class="btn btn-primary btn-sm"><i class="fa-solid fa-pen-to-square"></i></button>
                            <a href="function.php?hapus=<?= $a['id'] ?>" type="button" class="btn btn-danger btn-sm" onclick="return confirm('Anda Yakin Ingin Menghapus Data Ini?')"><i class="fa-solid fa-trash"></i></a>
                        </td>
                    </tr>

                <?php $id++;
                } ?>

            </tbody>
        </table>
    </div>

</div>

<?php include("components/footer.php"); ?>



<!-- Modal Create-->
<div class="modal fade" id="staticBackdropTambah" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog px-4">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title " id="staticBackdropLabel" style="font-weight: 700; font-size:25px;">Tambah Produk</h1>
                <button type=" button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="row g-3" action="" method="POST" enctype="multipart/form-data">
                    <div class="col-md-6 w-100">
                        <label for="produk" class="form-label fs-6">Nama Produk</label>
                        <input type="text" name="nama" class="form-control" id="produk" required>
                    </div>
                    <div class="col-md-4 w-100">
                        <label for="kategori" class="form-label fs-6">Kategori</label>
                        <select id="kategori" class="form-select" name="kategori" required>
                            <option value="aksesoris">Aksesoris</option>
                            <option value="celana">Celana</option>
                            <option value="tas">tas</option>
                            <option value="bodycare">Bodycare</option>
                            <option value="pakaian">Pakaian</option>
                        </select>
                    </div>
                    <div class="col-12">
                        <label for="harga" class="form-label fs-6">Harga</label>
                        <input type="number" name="harga" class="form-control" id="harga" placeholder="Rp" required>
                    </div>
                    <div class="col-md-6 w-100">
                        <label for="image" class="form-label fs-6">Gambar</label>
                        <input type="file" name="gambar" class="form-control" id="image" onchange="previewImage(event)" required>
                        <div id="imagePreview" class="mt-2"></div>
                    </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="Submit" name="tambahProduk" class="btn btn-primary">Tambah Produk</button>
                </form>
            </div>
        </div>
    </div>
</div>


<!-- Modal Edit -->
<!-- Modal -->
<?php $loop = mysqli_query($koneksi, "select * from tb_produk");
while ($a = mysqli_fetch_array($loop)) { ?>
    <div class="modal fade" id="staticBackdropEdit<?= $a["id"] ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog px-4">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel" style="font-weight: 700; font-size:25px;">Edit Produk</h1>
                    <button type=" button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="row g-3" action="" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="id" value="<?= $a['id'] ?>">
                        <div class="col-md-6 w-100">
                            <label for="produk" class="form-label">Nama Produk</label>
                            <input type="text" value="<?= $a["nama"] ?>" name="nama" class="form-control" id="produk" required>
                        </div>
                        <div class="col-md-4 w-100">
                            <label for="kategori" class="form-label">Kategori</label>
                            <select id="kategori" class="form-select" name="kategori" required>
                                <option value="aksesoris">Aksesoris</option>
                                <option value="celana">Celana</option>
                                <option value="tas">tas</option>
                                <option value="bodycare">Bodycare</option>
                                <option value="pakaian">Pakaian</option>
                            </select>
                        </div>
                        <div class="col-12">
                            <label for="harga" class="form-label">Harga</label>
                            <input type="number" value="<?= $a["harga"] ?>" name="harga" class="form-control" id="harga required" placeholder="Rp">
                        </div>
                        <div class="col-md-6 w-100">
                            <label for="image" class="form-label">Gambar</label>
                            <input type="file" value="<?= $a["gambar"] ?>" name="gambar" class="form-control" id="image required" onchange="previewImage(event)">
                            <div id="imagePreview" class="mt-2"></div>
                        </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="Submit" name="editProduk" class="btn btn-primary">Edit Produk</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php } ?>



<script>
    function previewImage(event) {
        var input = event.target;

        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
                var preview = document.getElementById('imagePreview');
                preview.innerHTML = '<img src="' + e.target.result + '" alt="Preview" class="img-fluid">';
            };

            reader.readAsDataURL(input.files[0]);
        }
    }
</script>