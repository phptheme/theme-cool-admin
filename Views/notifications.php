<?php

use PhpTheme\Core\Html;

?>
<?= Html::beginTag('div', $options);?>
<i class="zmdi zmdi-notifications"></i>
<?php if($content):?>
<div class="notifi-dropdown notifi-dropdown--no-bor js-dropdown">
<?php if($title):?>
    <div class="notifi__title">
        <p><?= $title;?></p>
    </div>
<?php endif;?>
<?= $content;?>
<?php if($footer):?>
    <div class="notifi__footer">
        <?= $footer;?>
    </div>
<?php endif;?>
</div>
<?php endif;?>

<?= Html::endTag('div');?>