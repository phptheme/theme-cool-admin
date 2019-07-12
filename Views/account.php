<!-- pad account begin -->
<div class="account-wrap">
    <div class="account-item account-item--style2 clearfix js-item-menu">
        <div class="image">
            <img src="<?= $avatarUrl;?>" alt="<?= $name;;?>" />                             
        </div>
        <div class="content">
            <a class="js-acc-btn" href="#"><?= $name;?></a>
        </div>
        <div class="account-dropdown js-dropdown">
            <div class="info clearfix">
                <div class="image">
                    <img src="<?= $avatarUrl;?>" alt="<?= $name;?>" />
                </div>
                <div class="content">
                    <h5 class="name">
                        <?= $name;?>
                    </h5>
                    <span class="email"><?= $description;?></span>
                </div>
            </div>
            <?= $menu;?>
            <div class="account-dropdown__footer">
                <a href="<?= $logoutUrl;?>">
                    <i class="zmdi zmdi-power"></i><?= $logoutLabel;?>
                </a>
            </div>
        </div>
    </div>
</div>
<!-- pad account end -->