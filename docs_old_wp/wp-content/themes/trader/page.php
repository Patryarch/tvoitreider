<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Твой Трейдер</title>
        <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/main.css">
        <link rel="shortcut icon" href="<?php echo get_template_directory_uri();?>/img/favicon.ico" type="image/x-icon">
        <?php wp_head(); ?>
    </head>
    <body>
        <div class="wrapper">
            <!--шапка -->
            <header class="container-fluid header high_school">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5 col-md-4 col-sm-12 logo">
                            <a href="http://tvoitreider.ru/"><img src="<?php echo get_template_directory_uri();?>/img/logo.png" alt=""></a>
                        </div>
                        <div class="col-lg-7 col-md-8 col-sm-12 header_top">
                            <ul class="header_ul">
                                <li><a class="otz" href="http://tvoitreider.ru/#reviews"><?php echo get_cat_name(3); ?></a></li>
                                <li><a class="part" href="<?php echo get_template_directory_uri();?>/ChatSetup.zip" download="ChatSetup.zip"><?php echo get_cat_name(4); ?></a></li>
                                <li class="registr"><a class="regreg" href="#"><?php echo get_cat_name(5); ?></a></li>
                                <li class="vhod"><a href="http://tvoitreider.ru/vhod"><?php echo get_cat_name(6); ?></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </header>
            <!-- конец шапки -->


        </body>
    </html>
