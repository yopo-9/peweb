

<nav class="navbar navbar-expand-lg navbar-white bg-white shadow-lg">
    <div class="container-fluid d-flex justify-content-between mx-4 mb-2">
        <div class="d-flex align-items-center">
            <a class="navbar-brand" style="font-weight: 700; font-size:25px;" href="index.php"> <span style="color:gray; font-style:italic;">Nisstore</span> Butik</a>
            <!-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button> -->
        </div>
        <div class="btn-group dropstart" id="navbarNav">
            <a class="text-secondary text-decoration-none me-5" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Hello <?= $_SESSION['name'] ?>
                </a>
                <ul class="dropdown-menu">
                    <li><button class="dropdown-item" data-bs-toggle="modal" data-bs-target="#exampleModal" href="#"><i class="fa-solid fa-right-from-bracket"></i> logout</button></li>
                    <li><a class="dropdown-item" href="index.php"><i class="fa-solid fa-house"></i> Home</a></li>

                </ul>
        </div>


    </div>

</nav>



<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Yakin Ingin Keluar?</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Tekan Keluar Jika ingin keluar
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <a href="logout.php" class="btn btn-primary">Keluar</a>
            </div>
        </div>
    </div>
</div>