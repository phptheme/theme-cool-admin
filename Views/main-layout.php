<?php $this->beginLayout(['title' => $title]);?>
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
            	<?= is_array($notifications) ? $this->notifications($notifications) : $notifications;?>
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
            <?= $this->mobileMainMenu($mainMenu);?>	      
        </div>
    </nav>
</header>
<div class="sub-header-mobile-2 d-block d-lg-none">
    <div class="header__tool">
        <div class="d-block t-lg-none" style="position: absolute; left: -10px;">
    	  <?= $this->actionsMenu($actionsMenu);?>
        </div>
        <?= is_array($notifications) ? $this->notifications($notifications) : $notifications;?>
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
<?php $this->endLayout();?>