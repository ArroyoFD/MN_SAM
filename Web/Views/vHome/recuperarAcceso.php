

<?php
include_once $_SERVER["DOCUMENT_ROOT"] . "/MN_SAM/Web/Views/layoutExterno.php";
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
                                <h2>Crear Cuenta</h2>
                            </div>
                            </div>
                              <div class="row g-0 auth-row">
            <div class="col-lg-6">
              <div class="auth-cover-wrapper bg-primary-100">
                <div class="auth-cover">
                  <div class="title text-center">
                    <h1 class="text-primary mb-10">Bienvenid@</h1>
                    <p class="text-medium">
                      Enviaremos un correo electronico
                    </p>
                  </div>
                  <div class="cover-image">
                    <img src="../assets/images/auth/signup-image.svg" alt="" />
                  </div>
                  <div class="shape-image">
                    <img src="../assets/images/auth/shape.svg" alt="" />
                  </div>
                </div>
              </div>
            </div>
            <!-- end col -->
            <div class="col-lg-6">
              <div class="signup-wrapper">
                <div class="form-wrapper">
                  <h6 class="mb-15">Recuperar Acceso</h6>
                  <form action="#">
                    <div class="row">
                      <div class="col-12">
                        <div class="input-style-1">
                          <label>Identificación</label>
                          <input type="text" placeholder="Identificación" />
                        </div>
                      </div>
                      <!-- end col -->
                    
                      <!-- end col -->
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
                  <div class="singup-option pt-40">
                    <p class="text-sm text-medium text-dark text-center">
                       Ya tiene una cuenta? <a href="login.php">Inicia Sesión</a>
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