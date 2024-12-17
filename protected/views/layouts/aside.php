<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start top-10 ms-3 bg-gradient-dark" id="sidenav-main">
  <div class="sidenav-header">
    <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
    <a class="navbar-brand m-0" href="#">
      <span class="ms-1 font-weight-bold text-white">Sistem Pendidikan Latihan</span>
    </a>
  </div>
  <hr class="horizontal light mt-0 mb-2">
  <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link text-white <?php echo Yii::app()->controller->id === 'site' && Yii::app()->controller->action->id === 'index' ? 'active bg-gradient-primary' : ''; ?>" href="<?php echo $this->createUrl('/site/index'); ?>">
          <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            <i class="material-icons opacity-10">dashboard</i>
          </div>
          <span class="nav-link-text ms-1">Beranda</span>
        </a>
      </li>
      <hr class="horizontal light mt-0 mb-2">
      <li class="nav-item">
        <a class="nav-link text-white <?php echo Yii::app()->controller->id === 'diklatM' && Yii::app()->controller->action->id === 'admin' ? 'active bg-gradient-primary' : ''; ?>" href="<?php echo $this->createUrl('/diklatM/admin'); ?>">
          <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            <i class="material-icons opacity-10">
              receipt_long
            </i>
          </div>
          <span class="nav-link-text ms-1">Diklat</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white <?php echo Yii::app()->controller->id === 'jadwaldiklatM' && Yii::app()->controller->action->id === 'admin' ? 'active bg-gradient-primary' : ''; ?>" href="<?php echo $this->createUrl('/jadwaldiklatM/admin'); ?>">
          <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            <i class="material-icons opacity-10">timer</i>
          </div>
          <span class="nav-link-text ms-1">Jadwal Diklat</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white <?php echo Yii::app()->controller->id === 'pesertaM' && Yii::app()->controller->action->id === 'admin' ? 'active bg-gradient-primary' : ''; ?>" href="<?php echo $this->createUrl('/pesertaM/admin'); ?>">
          <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            <i class="material-icons opacity-10">group</i>
          </div>
          <span class="nav-link-text ms-1">Peserta Diklat</span>
        </a>
      </li>
      <li class="nav-item mt-3">
        <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">Akun</h6>
      </li>
      <li class="nav-item">
        <?php if (!Yii::app()->user->isGuest) : ?>
          <a class="nav-link text-white" href="<?php echo $this->createUrl('/site/logout') ?>">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">logout</i>
            </div>
            <span class="nav-link-text ms-1">Keluar</span>
          </a>
        <?php endif; ?>
      </li>
      <!-- <li class="nav-item">
          <a class="nav-link text-white " href="../pages/sign-up.html">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">assignment</i>
            </div>
            <span class="nav-link-text ms-1">Daftar</span>
          </a>
        </li> -->
    </ul>
  </div>
  <div class="sidenav-footer position-absolute w-100 bottom-0 ">
    <div class="mx-3">
      <a class="btn btn-outline-primary mt-4 w-100" href="https://www.creative-tim.com/learning-lab/bootstrap/overview/material-dashboard?ref=sidebarfree" target="_blank" type="button">GRAFIK</a>
      <a class="btn bg-gradient-primary w-100" href="https://wa.me/6281312025217" target="_blank" type="button">WhatsApp Me !</a>
    </div>
  </div>
</aside>