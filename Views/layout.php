<!DOCTYPE html>
<html lang="<?= $this->theme->lang;?>">
<head>
<!-- Required meta tags-->
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!-- Title Page-->
<title><?= $this->escape($title);?></title>
<!-- Fontfaces CSS-->
<link href="<?= $this->theme->baseUrl;?>/css/font-face.css" rel="stylesheet" media="all">
<link href="<?= $this->theme->baseUrl;?>/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
<link href="<?= $this->theme->baseUrl;?>/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
<link href="<?= $this->theme->baseUrl;?>/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
<!-- Bootstrap CSS-->
<link href="<?= $this->theme->baseUrl;?>/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">
<!-- Vendor CSS-->
<link href="<?= $this->theme->baseUrl;?>/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
<link href="<?= $this->theme->baseUrl;?>/vendor/wow/animate.css" rel="stylesheet" media="all">
<link href="<?= $this->theme->baseUrl;?>/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
<link href="<?= $this->theme->baseUrl;?>/vendor/slick/slick.css" rel="stylesheet" media="all">
<link href="<?= $this->theme->baseUrl;?>/vendor/select2/select2.min.css" rel="stylesheet" media="all">
<link href="<?= $this->theme->baseUrl;?>/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">
<!-- Main CSS-->
<link href="<?= $this->theme->baseUrl;?>/css/theme.css" rel="stylesheet" media="all">
<!-- Jquery JS-->
<script src="<?= $this->theme->baseUrl;?>/vendor/jquery-3.2.1.min.js"></script>
<!-- Bootstrap JS-->
<script src="<?= $this->theme->baseUrl;?>/vendor/bootstrap-4.1/popper.min.js"></script>
<script src="<?= $this->theme->baseUrl;?>/vendor/bootstrap-4.1/bootstrap.min.js"></script>
<!-- Vendor JS-->
<script src="<?= $this->theme->baseUrl;?>/vendor/slick/slick.min.js"></script>
<script src="<?= $this->theme->baseUrl;?>/vendor/wow/wow.min.js"></script>
<script src="<?= $this->theme->baseUrl;?>/vendor/animsition/animsition.min.js"></script> 
<script src="<?= $this->theme->baseUrl;?>/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
<script src="<?= $this->theme->baseUrl;?>/vendor/counter-up/jquery.waypoints.min.js"></script>
<script src="<?= $this->theme->baseUrl;?>/vendor/counter-up/jquery.counterup.min.js"></script>
<script src="<?= $this->theme->baseUrl;?>/vendor/circle-progress/circle-progress.min.js"></script>
<script src="<?= $this->theme->baseUrl;?>/vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
<script src="<?= $this->theme->baseUrl;?>/vendor/chartjs/Chart.bundle.min.js"></script>
<script src="<?= $this->theme->baseUrl;?>/vendor/select2/select2.min.js"></script>
<?= $this->theme->head;?>
</head>
<body>
<?= $this->theme->beginBody;?>
<div class="page-wrapper">
<!-- begin content-->
<?= $content;?>
<!-- end content-->
</div>
<!-- Main JS-->
<script src="<?= $this->theme->baseUrl;?>/js/main.js"></script>
<?= $this->theme->endBody;?>
</body>
</html>
<!-- end document-->