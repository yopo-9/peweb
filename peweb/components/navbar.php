 <?php
    session_start();
    ?>

 <!-- <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-lg fixed-top">
     <div class="container-fluid">
         <a class="navbar-brand" href="#">BUTIK.</a>
         <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
             <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse text-right" id="navbarText">
             <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                 <li class="nav-item">
                     <a class="nav-link active" aria-current="#produk" href="#">produk kami</a>
                 </li>
                 <li class="nav-item">
                     <a class="nav-link" href="#aboutus">About us</a>
                 </li>
                 <li class="nav-item">
                     <a class="nav-link" href="#caraorder">cara order</a>
                 </li>
                 <li class="nav-item">
                     <a class="nav-link" href="#kontakkami">kontak kami</a>
                 </li>
             </ul>
             <header>
                 <div class="iconCart">
                     <img src="../img/icon.png">
                     <div class="totalQuantity">0</div>
                 </div>
             </header>

         </div>
     </div>
 </nav> -->
 <nav class="navbar navbar-expand-lg navbar-white bg-white shadow-lg">
     <div class="container-fluid d-flex justify-content-between mx-4 mb-2">
         <div class="d-flex align-items-center">
             <a class="navbar-brand" style="font-weight: 700; font-size:25px;" href="index.php"><span style="color:gray; font-style:italic;">Nisstore </span>Butik</a>
             <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                 <span class="navbar-toggler-icon"></span>
             </button>
         </div>
         <div class="collapse navbar-collapse justify-content-end align-items-center " id="navbarNav">
             <ul class="navbar-nav ml-auto">
                 <li class="nav-item mx-1">
                     <a class="nav-link " aria-current="#produk" href="#">Produk </a>
                 </li>

                 <li class="nav-item mx-1">
                     <a class="nav-link" href="#kontakkami">Kontak Kami</a>
                 </li>
                 <li class="nav-item mx-1">
                     <?php
                        if (empty($_SESSION['login'])) {
                            echo '<a class="nav-link" href="login.php"><i class="fa-solid fa-right-to-bracket"></i></a>';
                        } else {
                            echo ' <a class="nav-link" href="admin.php"><i class="fa-solid fa-user"></i></a>';
                        }
                        ?>
                 </li>
                 <li class="nav-item mx-1">
                     <a class="nav-link"><i class="fa-solid fa-cart-shopping"></i></a>
                 </li>
             </ul>
         </div>
     </div>
 </nav>


 