<div class="notifi__item">
    <?php if($icon):?>
    <div class="bg-c2 img-cir img-40">
        <i class="<?= $icon;?>"></i>
    </div>
    <?php endif;?>
    <div class="content">
        <p><?= $label;?></p>
        <?php if($date):?>
        <span class="date"><?= $date;?></span>
        <?php endif;?>
    </div>
</div>