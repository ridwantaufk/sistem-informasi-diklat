<!DOCTYPE html>
<html>

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta name="language" content="en">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

  <!-- blueprint CSS framework -->
  <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection">
  <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print">
  <!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection">
	<![endif]-->

  <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css">
  <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css">

  <!-- File CSS Bootstrap -->
  <link href="<?php echo Yii::app()->baseUrl; ?>/assets/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- File JS Bootstrap (JQuery harus di-load sebelum Bootstrap) -->
  <script src="<?php echo Yii::app()->baseUrl; ?>/assets/assets/bootstrap/js/jquery-3.5.1.min.js"></script>
  <script src="<?php echo Yii::app()->baseUrl; ?>/assets/assets/bootstrap/js/bootstrap.bundle.min.js"></script>


  <link rel="stylesheet" href="<?php echo Yii::app()->baseUrl; ?>/assets/bootstrap/css/bootstrap.min.css">
  <!-- <link rel="stylesheet" href="<?php // echo Yii::app()->baseUrl; 
                                    ?>/assets/assets/img/favicon.png"> -->
  <link rel="icon" type="image/png" href="<?php echo Yii::app()->baseUrl; ?>/assets/assets/img/favicon.png">
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo Yii::app()->baseUrl; ?>/assets/assets/css/nucleo-icons.css">
  <link rel="stylesheet" href="<?php echo Yii::app()->baseUrl; ?>/assets/assets/css/nucleo-svg.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo Yii::app()->baseUrl; ?>/assets/assets/css/material-dashboard.css?v=3.1.0">

  <script src="<?php echo Yii::app()->baseUrl; ?>/assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="<?php echo Yii::app()->baseUrl; ?>/assets/assets/js/core/popper.min.js"></script>
  <script src="<?php echo Yii::app()->baseUrl; ?>/assets/assets/js/core/bootstrap.min.js"></script>
  <script src="<?php echo Yii::app()->baseUrl; ?>/assets/assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="<?php echo Yii::app()->baseUrl; ?>/assets/assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script src="<?php echo Yii::app()->baseUrl; ?>/assets/assets/js/plugins/chartjs.min.js"></script>
  <script src="<?php echo Yii::app()->baseUrl; ?>/assets/assets/js/material-dashboard.min.js?v=3.1.0"></script>

  <script src="https://kit.fontawesome.com/42d5adcbca.js"></script>
  <script src="https://api.nepcha.com/js/nepcha-analytics.js"></script>
  <script src="https://buttons.github.io/buttons.js"></script>

  <title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body class="g-sidenav-show  bg-gray-200">

  <!-- <div id="header">
  <div id="logo"><?php // echo CHtml::encode(Yii::app()->name); 
                  ?></div>
  <div id="logo">WEB DIKLAT</div>
</div> -->
  <nav class="navbar navbar-expand-lg navbar-light bg-dark position-fixed start-0 z-index-2 end-0">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link text-warning" href="<?php echo $this->createUrl('/site/index'); ?>">
            <img src="<?php echo Yii::app()->baseUrl; ?>/assets/assets/img/logo.png" alt="Logo" height="30">
          </a>
        </li>
        <!-- <li class="nav-item">
        <a class="nav-link" href="<?php // echo $this->createUrl('/site/about'); 
                                  ?>">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php // echo $this->createUrl('/site/contact'); 
                                  ?>">Contact</a>
      </li> -->
        <?php if (!Yii::app()->user->isGuest) : ?>
          <li class="nav-item dropdown ms-11" style="position: relative; z-index: 999;">
            <a class="nav-link dropdown-toggle btn bg-gradient-light text-primary" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">List Master</a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown" style="z-index: 1000;">
              <li><a class="dropdown-item" href="<?php echo $this->createUrl('/diklatM/index'); ?>">Diklat</a></li>
              <li><a class="dropdown-item" href="<?php echo $this->createUrl('/jadwaldiklatM/index'); ?>">Jadwal Diklat</a></li>
              <li><a class="dropdown-item" href="<?php echo $this->createUrl('/pesertaM/index'); ?>">Peserta Diklat</a></li>
            </ul>
          </li>

          <!-- Menambahkan warna merah pada dropdown toggle button di bagian Transaksi -->
          <li class="nav-item dropdown ms-3" style="position: relative; z-index: 999;">
            <a class="nav-link dropdown-toggle btn bg-gradient-light text-primary" href="#" id="navbarDropdownTransaksi" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Transaksi
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownTransaksi" style="z-index: 1000;">
              <li><a class="dropdown-item" href="<?php echo $this->createUrl('/pencatatankehadiranT/index'); ?>">Pencatatan Kehadiran</a></li>
            </ul>
          </li>

          <!-- Menambahkan warna merah pada dropdown toggle button di bagian Informasi -->
          <li class="nav-item dropdown ms-3" style="position: relative; z-index: 999;">
            <a class="nav-link dropdown-toggle btn bg-gradient-light text-primary" href="#" id="navbarDropdownInfo" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Informasi
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownInfo" style="z-index: 1000;">
              <li><a class="dropdown-item" href="<?php echo $this->createUrl('/infokehadiranV/admin'); ?>">Info Kehadiran</a></li>
              <li><a class="dropdown-item" href="<?php echo $this->createUrl('/jadwaldiklatV/admin'); ?>">Jadwal Diklat</a></li>
            </ul>
          </li>

          <!-- Menambahkan warna merah pada dropdown toggle button di bagian Laporan -->
          <li class="nav-item dropdown ms-3" style="position: relative; z-index: 999;">
            <a class="nav-link dropdown-toggle btn bg-gradient-light text-primary" href="#" id="navbarDropdownInfo" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Laporan
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownInfo" style="z-index: 1000;">
              <li><a class="dropdown-item" href="<?php echo $this->createUrl('/laporandiklatV/admin'); ?>">Laporan Diklat</a></li>
            </ul>
          </li>



          <!-- <li class="nav-item">
          <a class="nav-link text-danger" href="<?php // echo $this->createUrl('/site/logout'); 
                                                ?>">Logout (<?php // echo Yii::app()->user->name; 
                                                            ?>)</a>
        </li> -->
        <?php else : ?>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo $this->createUrl('/site/login'); ?>">Login</a>
          </li>
        <?php endif; ?>


      </ul>
    </div>
  </nav>

  <div class="fixed-plugin">
    <a class="fixed-plugin-button text-dark position-fixed px-3 py-2">
      <i class="material-icons py-2">settings</i>
    </a>
    <div class="card shadow-lg">
      <div class="card-header pb-0 pt-3">
        <div class="float-start">
          <h5 class="mt-3 mb-0">Pilih Material UI</h5>
          <p>Utility</p>
        </div>
        <div class="float-end mt-4">
          <button class="btn btn-link text-dark p-0 fixed-plugin-close-button">
            <i class="material-icons">clear</i>
          </button>
        </div>
        <!-- End Toggle Button -->
      </div>
      <hr class="horizontal dark my-1">
      <div class="card-body pt-sm-3 pt-0">
        <!-- Sidebar Backgrounds -->
        <div>
          <h6 class="mb-0">Sidebar Colors</h6>
        </div>
        <a href="javascript:void(0)" class="switch-trigger background-color">
          <div class="badge-colors my-2 text-start">
            <span class="badge filter bg-gradient-primary active" data-color="primary" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-dark" data-color="dark" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-info" data-color="info" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-success" data-color="success" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-warning" data-color="warning" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-danger" data-color="danger" onclick="sidebarColor(this)"></span>
          </div>
        </a>
        <!-- Sidenav Type -->
        <div class="d-flex">
          <button class="btn bg-gradient-dark px-3 mb-2 active" data-class="bg-gradient-dark" onclick="sidebarType(this)">Dark</button>
          <button class="btn bg-gradient-dark px-3 mb-2 ms-2" data-class="bg-transparent" onclick="sidebarType(this)">Transparent</button>
          <button class="btn bg-gradient-dark px-3 mb-2 ms-2" data-class="bg-white" onclick="sidebarType(this)">White</button>
        </div>
        <p class="text-sm d-xl-none d-block mt-2">You can change the sidenav type just on desktop view.</p>
        <!-- Navbar Fixed -->
        <div class="mt-3 d-flex">
          <h6 class="mb-0">Navbar Fixed</h6>
          <div class="form-check form-switch ps-0 ms-auto my-auto">
            <input class="form-check-input mt-1 ms-auto" type="checkbox" id="navbarFixed" onclick="navbarFixed(this)">
          </div>
        </div>
        <hr class="horizontal dark my-3">
        <div class="mt-2 d-flex">
          <h6 class="mb-0">Light / Dark</h6>
          <div class="form-check form-switch ps-0 ms-auto my-auto">
            <input class="form-check-input mt-1 ms-auto" type="checkbox" id="dark-version" onclick="darkMode(this)">
          </div>
        </div>
        <hr class="horizontal dark my-sm-4">
      </div>
    </div>
  </div>


  <?php if (isset($this->breadcrumbs)) : ?>
    <?php $this->widget('zii.widgets.CBreadcrumbs', array(
      'links' => $this->breadcrumbs,
    )); ?><!-- breadcrumbs -->
  <?php endif ?>

  <?php $this->renderPartial('/layouts/aside'); ?>
  <?php if (Yii::app()->controller->id == 'pesertaM') {
    $this->renderPartial('chart');
  } ?>

  <div class="pt-6 float-end w-80">

    <?php echo $content; ?>
  </div>

  <div class="clear"></div>

  <footer class="footer py-4 ms-12 me-7">
    <div class="container-fluid ms-4">
      <div class="row align-items-center justify-content-lg-between">
        <div class="col-lg-6 mb-lg-0 mb-4">
          <div class="copyright text-center text-sm text-muted text-lg-start">
            Ridwan Taufik Project©2021 - <script>
              document.write(new Date().getFullYear())
            </script>
          </div>
        </div>
        <div class="col-lg-6">
          <ul class="nav nav-footer justify-content-center justify-content-lg-end">
            <li class="nav-item">
              <a href="https://wa.me/6281312025217" class="nav-link text-muted" target="_blank">Kontak</a>
            </li>
            <li class="nav-item">
              <a href="https://id.linkedin.com/in/ridwan-taufik-b3624325a" class="nav-link text-muted" target="_blank">Tentang</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </footer>

  <script>
    var ctx = document.getElementById("chart-bars").getContext("2d");

    new Chart(ctx, {
      type: "bar",
      data: {
        labels: ["Senin", "Selasa", "Rabu", "Kamis", "Jum'at", "Sabtu", "Minggu"],
        datasets: [{
          label: "Diklat",
          tension: 0.4,
          borderWidth: 0,
          borderRadius: 4,
          borderSkipped: false,
          backgroundColor: "rgba(255, 255, 255, .8)",
          data: [50, 20, 10, 22, 50, 10, 40],
          maxBarThickness: 6
        }, ],
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
          legend: {
            display: false,
          }
        },
        interaction: {
          intersect: false,
          mode: 'index',
        },
        scales: {
          y: {
            grid: {
              drawBorder: false,
              display: true,
              drawOnChartArea: true,
              drawTicks: false,
              borderDash: [5, 5],
              color: 'rgba(255, 255, 255, .2)'
            },
            ticks: {
              suggestedMin: 0,
              suggestedMax: 500,
              beginAtZero: true,
              padding: 10,
              font: {
                size: 14,
                weight: 300,
                family: "Roboto",
                style: 'normal',
                lineHeight: 2
              },
              color: "#fff"
            },
          },
          x: {
            grid: {
              drawBorder: false,
              display: true,
              drawOnChartArea: true,
              drawTicks: false,
              borderDash: [5, 5],
              color: 'rgba(255, 255, 255, .2)'
            },
            ticks: {
              display: true,
              color: '#f8f9fa',
              padding: 10,
              font: {
                size: 14,
                weight: 300,
                family: "Roboto",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
        },
      },
    });


    var ctx2 = document.getElementById("chart-line").getContext("2d");

    new Chart(ctx2, {
      type: "line",
      data: {
        labels: ["Apr", "May", "Jun", "Jul", "Agust", "Sep", "Okt", "Nov", "Des"],
        datasets: [{
          label: "Peserta",
          tension: 0,
          borderWidth: 0,
          pointRadius: 5,
          pointBackgroundColor: "rgba(255, 255, 255, .8)",
          pointBorderColor: "transparent",
          borderColor: "rgba(255, 255, 255, .8)",
          borderColor: "rgba(255, 255, 255, .8)",
          borderWidth: 4,
          backgroundColor: "transparent",
          fill: true,
          data: [50, 40, 300, 320, 500, 350, 200, 230, 500],
          maxBarThickness: 6

        }],
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
          legend: {
            display: false,
          }
        },
        interaction: {
          intersect: false,
          mode: 'index',
        },
        scales: {
          y: {
            grid: {
              drawBorder: false,
              display: true,
              drawOnChartArea: true,
              drawTicks: false,
              borderDash: [5, 5],
              color: 'rgba(255, 255, 255, .2)'
            },
            ticks: {
              display: true,
              color: '#f8f9fa',
              padding: 10,
              font: {
                size: 14,
                weight: 300,
                family: "Roboto",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
          x: {
            grid: {
              drawBorder: false,
              display: false,
              drawOnChartArea: false,
              drawTicks: false,
              borderDash: [5, 5]
            },
            ticks: {
              display: true,
              color: '#f8f9fa',
              padding: 10,
              font: {
                size: 14,
                weight: 300,
                family: "Roboto",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
        },
      },
    });

    var ctx3 = document.getElementById("chart-line-tasks").getContext("2d");

    new Chart(ctx3, {
      type: "line",
      data: {
        labels: ["Apr", "May", "Jun", "Jul", "Agust", "Sep", "Okt", "Nov", "Des"],
        datasets: [{
          label: "Pendapatan",
          tension: 0,
          borderWidth: 0,
          pointRadius: 5,
          pointBackgroundColor: "rgba(255, 255, 255, .8)",
          pointBorderColor: "transparent",
          borderColor: "rgba(255, 255, 255, .8)",
          borderWidth: 4,
          backgroundColor: "transparent",
          fill: true,
          data: [50, 40, 300, 220, 500, 250, 400, 230, 500],
          maxBarThickness: 6

        }],
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
          legend: {
            display: false,
          }
        },
        interaction: {
          intersect: false,
          mode: 'index',
        },
        scales: {
          y: {
            grid: {
              drawBorder: false,
              display: true,
              drawOnChartArea: true,
              drawTicks: false,
              borderDash: [5, 5],
              color: 'rgba(255, 255, 255, .2)'
            },
            ticks: {
              display: true,
              padding: 10,
              color: '#f8f9fa',
              font: {
                size: 14,
                weight: 300,
                family: "Roboto",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
          x: {
            grid: {
              drawBorder: false,
              display: false,
              drawOnChartArea: false,
              drawTicks: false,
              borderDash: [5, 5]
            },
            ticks: {
              display: true,
              color: '#f8f9fa',
              padding: 10,
              font: {
                size: 14,
                weight: 300,
                family: "Roboto",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
        },
      },
    });
  </script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>

</body>