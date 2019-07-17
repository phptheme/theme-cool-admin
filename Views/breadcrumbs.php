<!-- BREADCRUMB-->
<section class="au-breadcrumb m-b-20">
    <div class="section__content">                  
        <div class="au-breadcrumb-content">
            <div class="au-breadcrumb-left">
                <?php if($items):?>  
                    <?php if($title):?>
                       <span class="au-breadcrumb-span d-none d-sm-inline"><?= $title;?></span>
                    <?php endif;?>
                    <ul class="list-unstyled list-inline au-breadcrumb__list">
                    <?php

                        /*
                        echo '<li class="list-inline-item"><a href="' . site_url('admin') . '">' . PHPTheme::t('Admin') . '</a></li>';

                        echo '<li class="list-inline-item seprate"><span>/</span></li>';

                        */

                        foreach($items as $i => $item)
                        {
                            if ($i != array_key_last($items))
                            {
                                if (!empty($item['url']))
                                {
                                    $content = '<a href="' . $item['url'] . '">' . $item['label'] . '</a>';
                                }
                                else
                                {
                                    $content = $item['label'];
                                }

                                echo '<li class="list-inline-item">' . $content .'</li>';

                                echo '<li class="list-inline-item seprate"><span>/</span></li>';
                            }
                            else
                            {
                                echo '<li class="list-inline-item active">' . $item['label'] .'</li>';
                            }
                        }
                    ?>  
                    </ul>               
                <?php endif;?>
            </div>
            <div class="d-none d-lg-block">
                <?= $actionsMenu;?>
            </div>
        </div>                   
    </div>
</section>
<!-- END BREADCRUMB-->