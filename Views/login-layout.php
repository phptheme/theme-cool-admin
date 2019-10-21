<?php $this->theme->beginLayout(['title' => $title]);?>
<div class="page-wrapper">
    <div class="page-content--bge5">
        <div class="container">
            <div class="login-wrap">
                <div class="login-content">
                    <div class="login-logo">
                        <img src="<?= $this->theme->baseUrl;?>/images/icon/logo.png" alt="CoolAdmin">
                    </div>
                    <div class="login-form">
                        <?= $content;?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->theme->endLayout();?>