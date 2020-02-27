<!doctype html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="language" content="en" />

  <link rel="shortcut icon" href="<?php echo Yii::app()->theme->baseUrl; ?>/favicon.ico" type="image/x-icon" >

  <!-- blueprint CSS framework -->
  <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/screen.css" media="screen, projection" />
  <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/print.css" media="print" />
  <!--[if lt IE 8]>
  <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/ie.css" media="screen, projection" />
  <![endif]-->

  <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/main.css" />
  <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/form.css" />

  <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/modernizr-2.0.6.min.js"></script>

  <title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<div class="container" id="wrapper">

  <header id="header">
    <div id="logo"><?php echo CHtml::link(CHtml::encode(Yii::app()->name), '/'); ?></div>

    <nav id="mainmenu">
      <?php
      if (Yii::app()->user->name==='administrator'){  
      $menuItems = array(
         // array('label'=>'Complaint Registering', 'url'=>array('/complaintsRegistration/index')),
            array('label'=>'Complaints', 'url'=>array('/computerhome/indexadmin'),'visible'=>!Yii::app()->user->isGuest),
            array('label'=>'Rights', 'url'=>array('/rights'),'visible'=>!Yii::app()->user->isGuest),
          //array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
          //array('label'=>'Registration', 'url'=>array('/user/registration'), 'visible'=>Yii::app()->user->isGuest),
            array('label'=>'My Profile', 'url'=>array('/user/profile'), 'visible'=>!Yii::app()->user->isGuest),
            array('label'=>'Login', 'url'=>array('/user/login'), 'visible'=>Yii::app()->user->isGuest),
            array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/user/logout'), 'visible'=>!Yii::app()->user->isGuest),
          //array('label'=>'Registration', 'url'=>array('/user/registration'),'visible'=>!Yii::app()->user->isGuest),
        );}
        elseif (Yii::app()->user->name==='fieldengineer'){  
      $menuItems = array(
         // array('label'=>'Complaint Registering', 'url'=>array('/complaintsRegistration/index')),
            array('label'=>'Complaints', 'url'=>array('/computerhome/indexadmin'),'visible'=>!Yii::app()->user->isGuest),
          //array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
          //array('label'=>'Registration', 'url'=>array('/user/registration'), 'visible'=>Yii::app()->user->isGuest),
            array('label'=>'My Profile', 'url'=>array('/user/profile'), 'visible'=>!Yii::app()->user->isGuest),
            array('label'=>'Login', 'url'=>array('/user/login'), 'visible'=>Yii::app()->user->isGuest),
            array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/user/logout'), 'visible'=>!Yii::app()->user->isGuest),
          //array('label'=>'Registration', 'url'=>array('/user/registration'),'visible'=>!Yii::app()->user->isGuest),
        );} 
        else {
        $menuItems = array(
            array('label'=>'Launch Complaint', 'url'=>array('/computer/create'), 'visible'=>!Yii::app()->user->isGuest),
            array('label'=>'My Complaints', 'url'=>array('/computerhome/index'),'visible'=>!Yii::app()->user->isGuest),
            array('label'=>'All Complaints', 'url'=>array('/computer/usersearch'),'visible'=>!Yii::app()->user->isGuest),
        //    array('label'=>'All Complaints', 'url'=>array('/computerhome/index1'),'visible'=>!Yii::app()->user->isGuest),
            array('label'=>'My Profile', 'url'=>array('/user/profile'), 'visible'=>!Yii::app()->user->isGuest),
            array('label'=>'Login', 'url'=>array('/user/login'), 'visible'=>Yii::app()->user->isGuest),
            array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/user/logout'), 'visible'=>!Yii::app()->user->isGuest),
        //    array('label'=>'Registration', 'url'=>array('/user/registration'), 'visible'=>Yii::app()->user->isGuest),
            );
}
      ?>
      <?php $this->widget('zii.widgets.CMenu',array(
        'items'=>$menuItems,
        'firstItemCssClass'=>'first',
        'lastItemCssClass'=>'last',
      )); ?>
    </nav><!-- mainmenu -->
  </header><!-- header -->

  <div id="main-wrapper"><div id="main" role="main">
    <?php echo $content; ?>
  </div></div><!-- main -->

  <footer id="footer">
    <nav id="footermenu">
      <?php $this->widget('zii.widgets.CMenu',array('items'=>$menuItems)); ?>
    </nav>
    <div class="content">
      <?php echo Yii::powered(); ?>
    </div>
  </footer><!-- footer -->

</div><!-- wrapper -->

</body>
</html>
