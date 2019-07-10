<?php

use PhpTheme\Core\Html;

?>
<!DOCTYPE html>
<html lang="<?= $lang?>">
<head>
<!-- Required meta tags-->
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<?php
/*
<meta name="description" content="au theme template">
<meta name="author" content="Hau Nguyen">
<meta name="keywords" content="au theme template">
*/
?>
<!-- Title Page-->
<title><?= $this->escape($title);?></title>
<!-- Fontfaces CSS-->
<link href="<?= $this->baseUrl;?>/css/font-face.css" rel="stylesheet" media="all">
<link href="<?= $this->baseUrl;?>/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
<link href="<?= $this->baseUrl;?>/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
<link href="<?= $this->baseUrl;?>/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
<!-- Bootstrap CSS-->
<link href="<?= $this->baseUrl;?>/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">
<!-- Vendor CSS-->
<!--
<link href="<?= $this->baseUrl;?>/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
-->
<link href="<?= $this->baseUrl;?>/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
<link href="<?= $this->baseUrl;?>/vendor/wow/animate.css" rel="stylesheet" media="all">
<link href="<?= $this->baseUrl;?>/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
<link href="<?= $this->baseUrl;?>/vendor/slick/slick.css" rel="stylesheet" media="all">
<link href="<?= $this->baseUrl;?>/vendor/select2/select2.min.css" rel="stylesheet" media="all">
<link href="<?= $this->baseUrl;?>/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">
<!-- Main CSS-->
<link href="<?= $this->baseUrl;?>/css/theme.css" rel="stylesheet" media="all">
<!-- Jquery JS-->
<script src="<?= $this->baseUrl;?>/vendor/jquery-3.2.1.min.js"></script>
<!-- Bootstrap JS-->
<script src="<?= $this->baseUrl;?>/vendor/bootstrap-4.1/popper.min.js"></script>
<script src="<?= $this->baseUrl;?>/vendor/bootstrap-4.1/bootstrap.min.js"></script>
<!-- Vendor JS-->
<script src="<?= $this->baseUrl;?>/vendor/slick/slick.min.js"></script>
<script src="<?= $this->baseUrl;?>/vendor/wow/wow.min.js"></script>
<script src="<?= $this->baseUrl;?>/vendor/animsition/animsition.min.js"></script> 
<script src="<?= $this->baseUrl;?>/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
<script src="<?= $this->baseUrl;?>/vendor/counter-up/jquery.waypoints.min.js"></script>
<script src="<?= $this->baseUrl;?>/vendor/counter-up/jquery.counterup.min.js"></script>
<script src="<?= $this->baseUrl;?>/vendor/circle-progress/circle-progress.min.js"></script>
<script src="<?= $this->baseUrl;?>/vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
<script src="<?= $this->baseUrl;?>/vendor/chartjs/Chart.bundle.min.js"></script>
<script src="<?= $this->baseUrl;?>/vendor/select2/select2.min.js"></script>
<?= $this->styles();?>
<?= $head;?>
</head>
<body>
<?= $beginBody;?>
<div class="page-wrapper">
	<!-- HEADER DESKTOP-->
	<header class="header-desktop3 d-none d-lg-block">
	    <div class="section__content section__content--p35">
	        <div class="header3-wrap">                            
	            <div class="header__logo">
                    <?php if($logoUrl):?>
	                   <a href="<?= $homeUrl;?>">
                            <img src="<?= $logoUrl;?>" alt="">
                        </a>
                    <?php endif;?>
	            </div>
	            <div class="header__navbar">
	            	<?= $this->mainMenu($mainMenu);?>
	            </div>
	            <div class="header__tool">
	            	<?= $this->notifications($notifications);?>
	            	<?= $this->optionsMenu($optionsMenu);?>
                    <?= $this->account($account);?>
	            </div>
	        </div>
	    </div>
	</header>
	<!-- END HEADER DESKTOP-->
	<!-- HEADER MOBILE-->
	<header class="header-mobile header-mobile-2 d-block d-lg-none">
	    <div class="header-mobile__bar">
	        <div class="container-fluid">
	            <div class="header-mobile-inner">
                    <?php if($logoUrl):?>
                    <a class="logo" href="<?= $homeUrl;?>">
	                    <img src="<?= $logoUrl;?>" alt="">
	                </a>
                    <?php endif;?>
	                <button class="hamburger hamburger--slider" type="button">
	                    <span class="hamburger-box">
	                        <span class="hamburger-inner"></span>
	                    </span>
	                </button>
	            </div>
	        </div>
	    </div>
	    <nav class="navbar-mobile">
	        <div class="container-fluid">
                <?= $this->mainMenu($mainMenu);?>	      
            </div>
        </nav>
    </header>
	<div class="sub-header-mobile-2 d-block d-lg-none">
	    <div class="header__tool">
	    	<?= $this->actionsMenu($actionsMenu);?>
            <?= $this->notifications($notifications);?>
			<?= $this->optionsMenu($optionsMenu);?>
            <?= $this->mobileAccount($account);?>
	    </div>
	</div>
	<!-- END HEADER MOBILE -->
    <!-- PAGE CONTENT-->
    <div class="page-content--bgf7">
        <section class="p-t-20">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <?= $breadcrumbs;?>
                        <?= $content;?>
                    </div>
                </div>
            </div>
        </section>
		<!-- COPYRIGHT-->
		<section class="p-t-60 p-b-20">
		    <div class="container">
		        <div class="row">
		            <div class="col-md-12">
		                <div class="copyright">
                            <p><?= $copyright;?>
                            <br>
                            Template by <a target="_blank" href="https://colorlib.com">Colorlib</a></p>
                        </div>
		            </div>
		        </div>
		    </div>
		</section>
		<!-- END COPYRIGHT-->
    </div>
</div>
<!-- Main JS-->
<script src="<?= $this->baseUrl;?>/js/main.js"></script>
<?= $endBody;?>
</body>
</html>
<!-- end document-->