<?php
include("components/header.php");
require("function.php");

session_start();

?>

<section class="vh-100">
    <div class="container py-5  h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                <div class="card bg-white text-dark shadow-lg" style="border-radius: 1rem;">
                    <div class="card-body p-5 text-center">

                        <div class="mb-md-5 mt-md-4 pb-5">

                            <h2 class="fw-bold mb-4 text-uppercase fs-3">Login</h2>
                            <div class="form-outline form-white mb-4 ">
                                <?php
                                if (!empty($_SESSION['error'])) :
                                ?>
                                    <div class="alert alert-warning" role="alert">
                                        <?php echo $_SESSION['error'] ?>
                                    </div>
                                <?php
                                endif
                                ?>
                                <form action="" method="POST">

                                    <label for="typeEmailX" class="form-label w-100 d-flex justify-contentn-start fw-semibold" style="font-size: small;">username</label>
                                    <input type="text" name="username" id="" class="form-control form-control-sm shadow" />
                            </div>
                            <div class="form-outline form-white mb-4">
                                <label for="typeEmailX" class="form-label w-100 d-flex justify-contentn-start fw-semibold" style="font-size: small;">Passowrd</label>
                                <input type="password" name="password" id="typePasswordX" class="form-control form-control-sm shadow" />
                            </div>
                            <button class="btn btn-outline-dark btn-md px-5 shadow" type="submit">Login</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>