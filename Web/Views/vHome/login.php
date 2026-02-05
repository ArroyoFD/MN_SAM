<?php
include_once "../layoutExterno.php";
?>
<!DOCTYPE html>
<html lang="en">
<?php
mostrarCss();
?>

<body>
    <!-- ======== Preloader =========== -->
    <div id="preloader">
        <div class="spinner"></div>
    </div>
    <?php
    //mostrarMenu();
    ?>
    <div class="overlay"></div>
    <main class="main-wrapper, main-wrapper-login">
        <?php
        mostrarHeader();
        ?>
        <section class="section">
            <div class="container-fluid">
                <!-- ========== title-wrapper start ========== -->
                <div class="title-wrapper pt-30">
                    <div class="row align-items-center">
                        <div class="col-md-12">
                            <div class="title">
                                <h2>Login</h2>
                            </div>
                            <div class="row g-0 auth-row">
                                <div class="col-lg-6">
                                    <div class="auth-cover-wrapper bg-primary-100">
                                        <div class="auth-cover">
                                            <div class="title text-center">
                                                <h1 class="text-primary mb-10">Bienvenid@</h1>
                                                <p class="text-medium">
                                                    Inicia sesión para continuar
                                                </p>
                                            </div>
                                            <div class="cover-image">
                                                <img src="../assets/images/auth/signin-image.svg" alt="" />
                                            </div>
                                            <div class="shape-image">
                                                <img src="../assets/images/auth/shape.svg" alt="" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end col -->
                                <div class="col-lg-6">
                                    <div class="signin-wrapper">
                                        <div class="form-wrapper">
                                            <h6 class="mb-15">Iniciar Sesión</h6>
                                            <form action="#">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="input-style-1">
                                                            <label>Identificación</label>
                                                            <input type="text" placeholder="Identificación" />
                                                        </div>
                                                    </div>
                                                    <!-- end col -->
                                                    <div class="col-12">
                                                        <div class="input-style-1">
                                                            <label>Contraseña</label>
                                                            <input type="password" placeholder="Contraseña" />
                                                        </div>
                                                    </div>
                                                    <!-- end col -->
                                                    <div class="col-xxl-12 col-lg-12 col-md-12">
                                                        <div class="text-start text-md-end text-lg-start text-xxl-end mb-30">
                                                            <a href="recuperarAcceso.php" class="hover-underline">
                                                                Olvido su contraseña?
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <!-- end col -->
                                                    <div class="col-12">
                                                        <div class="button-group d-flex justify-content-center flex-wrap">
                                                            <button class="main-btn primary-btn btn-hover w-100 text-center">
                                                                Procesar
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end row -->
                                            </form>
                                            <div class="singin-option pt-40">
                                                <p class="text-sm text-medium text-dark text-center">
                                                    No tiene una cuenta aún?
                                                    <a href="registro.php">Regístrate</a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end col -->
                            </div>
                        </div>
                        <!-- end col -->

                        <!-- end col -->
                    </div>
                    <!-- end row -->
                </div>
                <!-- ========== title-wrapper end ========== -->
            </div>
            <!-- end container -->
        </section>

        <?php
        mostrarFooter();
        ?>
        <!-- ========== footer end =========== -->
    </main>
    <!-- ======== main-wrapper end =========== -->

    <!-- ========= All Javascript files linkup ======== -->
    <?php
    mostrarJS();
    ?>
</body>

</html>