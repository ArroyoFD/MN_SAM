<?php


function mostrarFooter()
{
    echo
    '<footer class="footer">
                <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6 order-last order-md-first">
                    <div class="copyright text-center text-md-start">
                        <p class="text-sm">
                        Designed and Developed by
                        <a href="https://plainadmin.com" rel="nofollow" target="_blank">
                            PlainAdmin
                        </a>
                        </p>
                    </div>
                    </div>
                    <!-- end col-->
                    <div class="col-md-6">
                    <div class="terms d-flex justify-content-center justify-content-md-end">
                        <a href="#0" class="text-sm">Term & Conditions</a>
                        <a href="#0" class="text-sm ml-15">Privacy & Policy</a>
                    </div>
                    </div>
                </div>
                <!-- end row -->
                </div>
                <!-- end container -->
            </footer>';
}

function mostrarHeader()
{
    echo
    '<header class="header">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-5 col-md-5 col-6">
              <div class="header-left d-flex align-items-center">
                <div class="menu-toggle-btn mr-15">
                  <div class="navbar-logo">
                    <a href="index.html">
                    <img src="../assets/images/logo/logo.svg" alt="logo" />
                    </a>
                </div>
                </div>
              </div>
            </div>
            
        </div>
      </header>';
}

function mostrarCss()
{
    echo
    '<head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="shortcut icon" href="../assets/images/favicon.svg" type="image/x-icon" />
        <title>Blank Page | PlainAdmin Demo</title>

        <!-- ========== All CSS files linkup ========= -->
        <link rel="stylesheet" href="../assets/css/bootstrap.min.css" />
        <link rel="stylesheet" href="../assets/css/lineicons.css" />
        <link rel="stylesheet" href="../assets/css/materialdesignicons.min.css" />
        <link rel="stylesheet" href="../assets/css/fullcalendar.css" />
        <link rel="stylesheet" href="../assets/css/main.css" />
        </head>';
}
function mostrarJS()
{
    echo
    '<script src="../assets/js/bootstrap.bundle.min.js"></script>
        <script src="../assets/js/Chart.min.js"></script>
        <script src="../assets/js/dynamic-pie-chart.js"></script>
        <script src="../assets/js/moment.min.js"></script>
        <script src="../assets/js/fullcalendar.js"></script>
        <script src="../assets/js/jvectormap.min.js"></script>
        <script src="../assets/js/world-merc.js"></script>
        <script src="../assets/js/polyfill.js"></script>
        <script src="../assets/js/main.js"></script>';
}
