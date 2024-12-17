<?php
$cs = Yii::app()->getClientScript();
$cs->registerCssFile(Yii::app()->baseUrl . '/assets/bootstrap/css/bootstrap.min.css');
$cs->registerScriptFile(Yii::app()->baseUrl . '/assets/bootstrap/js/bootstrap.min.js', CClientScript::POS_END);
?>


<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="language" content="en">

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print">
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection">
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css">

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<div id="header">
  <div id="logo"><?php echo CHtml::encode(Yii::app()->name); ?></div>
</div>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo $this->createUrl('/site/index'); ?>">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo $this->createUrl('/site/about'); ?>">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo $this->createUrl('/site/contact'); ?>">Contact</a>
      </li>
      <?php if (!Yii::app()->user->isGuest): ?>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo $this->createUrl('/diklatM/index'); ?>">Diklat</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo $this->createUrl('/jadwaldiklatM/index'); ?>">Jadwal Diklat</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo $this->createUrl('/pencatatankehadiranT/index'); ?>">Pencatatan Kehadiran</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo $this->createUrl('/pesertaM/index'); ?>">Peserta Diklat</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo $this->createUrl('/site/logout'); ?>">Logout (<?php echo Yii::app()->user->name; ?>)</a>
        </li>
      <?php else: ?>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo $this->createUrl('/site/login'); ?>">Login</a>
        </li>
      <?php endif; ?>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>

<div class="container" id="page">

	<div id="mainmenu">
		<?php $this->widget('zii.widgets.CMenu',array(
			'items'=>array(
				array('label'=>'Home', 'url'=>array('/site/index')),
				array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
				array('label'=>'Contact', 'url'=>array('/site/contact')),
				array('label'=> 'Diklat', 'url'=> array('/diklatM/index'), 'visible' => !Yii::app()->user->isGuest),
				array('label'=> 'Jadwal Diklat', 'url'=> array('/jadwaldiklatM/index'), 'visible' => !Yii::app()->user->isGuest),
				array('label'=> 'Pencatatan Kehadiran', 'url'=> array('/pencatatankehadiranT/index'), 'visible' => !Yii::app()->user->isGuest),
				array('label'=> 'Peserta Diklat', 'url'=> array('/pesertaM/index'), 'visible' => !Yii::app()->user->isGuest),
				array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
				array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
			),
		)); ?>
	</div>
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php echo $content; ?>

	<div class="clear"></div>

	<div id="footer">
		Copyright &copy; <?php echo date('Y'); ?> by My Company.<br/>
		All Rights Reserved.<br/>
		<?php echo Yii::powered(); ?>
	</div><!-- footer -->

</div><!-- page -->

</body>
</html>
