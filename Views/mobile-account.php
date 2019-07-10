<!-- mobile account begin -->
<div class="account-wrap">
    <div class="account-item account-item--style2 clearfix js-item-menu">
        <div class="image">
            <img src="<?= $userAvatarUrl;?>" alt="<?= $userName;?>" />
        </div>
        <div class="content">
            <a class="js-acc-btn" href="#"><?= $userName;?></a>
        </div>
        <div class="account-dropdown js-dropdown">
            <div class="info clearfix">
                <div class="image">
                    <a href="<?= $userUrl;?>">
                        <img src="<?= $userAvatarUrl;?>" alt="<?= $userName;?>" />
                    </a>
                </div>
                <div class="content">
                    <h5 class="name">
                        <a href="<?= $userUrl;?>"><?= $userName;?></a>
                    </h5>
                    <span class="email"><?= $userEmail;?></span>
                </div>
            </div>
            <?= $menu;?>
            <div class="account-dropdown__footer">
                <a href="<?= $logoutUrl;?>"><i class="zmdi zmdi-power"></i><?= $logoutLabel;?></a>
            </div>
        </div>
    </div>
</div>
<!-- mobile account end -->