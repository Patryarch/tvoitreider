<?php
    /*
    Template Name: vhod
    */
    ?>
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
        <div class="wrapper" id="vhod">
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
                <div class="container ">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 header_content">
                            <p>Личный кабинет</p>
                            <img src="http://tvoitreider.ru/wp-content/themes/trader/img/icon1.png" alt="">
                            <div class="strelka">
                                <div class="st">
                                    <img src="http://tvoitreider.ru/wp-content/themes/trader/img/strelka.png" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- конец шапки -->
            <div class="ro">
                <div class="container">
                    <div class="block1">
                        <input type="text" class="cf_name" placeholder="ИМЯ" required="">
                        <input type="text" class="cf_name" placeholder="ФАМИЛИЯ" required="">
                        <input type="text" class="cf_name" placeholder="E-MAIL" required="">
                        <input type="text" class="cf_name" placeholder="ТЕЛЕФОН" required="">
                        <input type="text" class="cf_name" placeholder="ДОПОЛНИТЕЛЬНЫЙ ТЕЛЕФОН" required="">
                        <select name="gorod">
                            <option>УРОВЕНЬ ОБУЧЕНИЯ</option>
                            <option>младшая школа</option>
                            <option>средняя школа</option>
                            <option>старшая школа</option>
                            <option>университет</option>
                        </select>
                        <input type="text" class="cf_name" placeholder="ИМЯ ВАШЕГО МЕНЕДЖЕРА" required="">
                    </div>
                    <div class="block3">
						<div class="block2">
	                        <div class="spoiler nav-btn active" data-tabid="tab1">Экономический календарь</div>
	                    </div>
                        <div class="tab-container">
                            <div class="tab-item tab1 active">
                                <iframe id="eco-calendar" height="400" width="100%" frameborder="0" allowtransparency="true" marginwidth="0" marginheight="0" src="http://tvoitreider.ru/parseit.php"></iframe>
                            </div>
                            <div class="tab-item tab2">
                                <iframe src="https://sigfxpro.com/" width="100%" height="400" frameborder="0" allowtransparency="true" marginwidth="0" marginheight="0" ></iframe>
                            </div>
                            <div class="tab-item tab3">
                                <iframe src="http://tvoitreider.ru/platforma/" width="100%" height="400" frameborder="0" allowtransparency="true" marginwidth="0" marginheight="0" ></iframe>
                            </div>
                            <div class="tab-item tab4">
                                <iframe src="#" width="100%" height="400" frameborder="0" allowtransparency="true" marginwidth="0" marginheight="0" ></iframe>
                            </div>
                            <div class="tab-item tab5">
                                <iframe src="http://tvoitreider.ru/deposit/" width="100%" height="400" frameborder="0" allowtransparency="true" marginwidth="0" marginheight="0" ></iframe>
                            </div>
                        </div>
						<div class="loader">
						  <div class="loader-wrap">
						    <div class="bar1"></div>
						    <div class="bar2"></div>
						    <div class="bar3"></div>
						    <div class="bar4"></div>
						    <div class="bar5"></div>
						    <div class="bar6"></div>
						    <div class="bar7"></div>
						    <div class="bar8"></div>
						    <div class="bar7"></div>
						    <div class="bar8"></div>
						    <div class="bar9"></div>
						    <div class="bar10"></div>
						  </div>
						</div>
					</div>
                </div>
            </div>
            <section class="younger_programm_wrap">
                <div class="container">
                    <div class="block4">
                        <a class="spoiler nav-btn" data-tabid="tab2">
                            <div>SigFxpro сигналы</div>
							<iframe src="https://sigfxpro.com/" width="100%" height="250" frameborder="0" allowtransparency="true" marginwidth="0" marginheight="0" ></iframe>
                        </a>
                        <a class="spoiler nav-btn" data-tabid="tab3">
                            <div>Платформа</div>
                        </a>
                        <a class="spoiler nav-btn" data-tabid="tab4">
                            <div>Свежая аналитика</div>
                        </a>
                        <a class="spoiler nav-btn" data-tabid="tab5">
                            <div>Депозит</div>
                        </a>
                    </div>

                </div>
            </section>
            <div class="container-fluid footer">
                <footer>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-2">
                                <p class="footer_left-right-first footer_left-right-first1"><?php echo get_cat_name(12); ?></p>
                            </div>
                            <div class="col-md-6">
                                <div class="footer_right-right-cont">
                                    <div>
                                        <?php if ( have_posts() ) : query_posts('p=68');
                                            while (have_posts()) : the_post(); ?>
                                        <?php the_post_thumbnail(array(24, 23)); ?>
                                        <?php the_content(); ?>
                                        <? endwhile; endif; wp_reset_query(); ?>
                                    </div>
                                    <div>
                                        <?php if ( have_posts() ) : query_posts('p=71');
                                            while (have_posts()) : the_post(); ?>
                                        <?php the_post_thumbnail(array(24, 33)); ?>
                                        <?php the_content(); ?>
                                        <? endwhile; endif; wp_reset_query(); ?>
                                    </div>
                                    <div class="phone">
                                        <?php if ( have_posts() ) : query_posts('p=74');
                                            while (have_posts()) : the_post(); ?>
                                        <?php the_post_thumbnail(array(24, 26)); ?>
                                        <?php the_content(); ?>
                                        <? endwhile; endif; wp_reset_query(); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="footer_right-right-cont">
                                    <a href="#" target="blank">
                                    <?php if ( have_posts() ) : query_posts('p=165');
                                        while (have_posts()) : the_post(); ?>
                                    <?php the_post_thumbnail(array(24, 34)); ?>
                                    <?php the_content(); ?>
                                    <? endwhile; endif; wp_reset_query(); ?>
                                    </a>
                                    <a href="https://vk.com/tvoitreider" target="blank">
                                        <div class="vkvk">
                                            <?php if ( have_posts() ) : query_posts('p=81');
                                                while (have_posts()) : the_post(); ?>
                                            <?php the_post_thumbnail(array(24, 34)); ?>
                                            <?php the_content(); ?>
                                            <? endwhile; endif; wp_reset_query(); ?>
                                        </div>
                                    </a>
                                    <a href="https://www.facebook.com/%D0%A2%D0%B2%D0%BE%D0%B9-%D1%82%D1%80%D0%B5%D0%B9%D0%B4%D0%B5%D1%80-1762517860707558/" target="blank">
                                        <div>
                                            <?php if ( have_posts() ) : query_posts('p=84');
                                                while (have_posts()) : the_post(); ?>
                                            <?php the_post_thumbnail(array(24, 34)); ?>
                                            <?php the_content(); ?>
                                            <? endwhile; endif; wp_reset_query(); ?>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="container footer_bottom">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12  footer_bottom_top">
                                        <?php if ( have_posts() ) : query_posts('p=65');
                                            while (have_posts()) : the_post(); ?>
                                        <?php the_content(); ?>
                                        <p class="niz">(c) <?php echo date('Y') ?> <?php the_title(); ?></p>
                                        <? endwhile; endif; wp_reset_query(); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
            <!-- Модальное окно -->
            <div class="fon">
                <div class="okno">
                    <div class="form">
                        <div class="za">
                            <?php echo get_cat_name(5); ?>
                            <div class="zak"><img class="zac_img" src="<?php echo get_template_directory_uri(); ?>/img/krest.png" alt=""></div>
                        </div>
                        <?php //echo do_shortcode(' [contact-form-7 id="91" title="Contact form"] ');
						echo do_shortcode(' [cfp id="91" title="Test" pwd="password"] '); ?>
                    </div>
                </div>
            </div>
            <!-- конец окна -->
        </div>
        <!--[if lt IE 9]>
        <script src="html5/es5-shim.min.js"></script>
        <script src="html5/html5shiv.min.js"></script>
        <script src="html5/html5shiv-printshiv.min.js"></script>
        <script src="js/respond.min.js"></script>
        <![endif]-->
        <script src="<?php echo get_template_directory_uri();?>/js/jquery-3.1.1.min.js"></script>
        <script src="<?php echo get_template_directory_uri();?>/js/main.js"></script>
        <?php wp_footer(); ?>
        <script>
            document.addEventListener('wpcf7submit', function (event) {
                  if ('91' == event.detail.contactFormId) {
                      window.location = 'http://tvoitreider.ru/vhod/';
                  }
              }, false);
			  $(document).ready(function () {
				  $("#eco-calendar").on('load', function() {
			         //var doc = this.contentDocument || this.contentWindow.document;
			         //var target = doc.getElementById("headerRow");
			         //target.innerHTML = "Found It!";
					 if($(this).contents().find(".logo").hide()) {
						if($(this).show('slow')) {
							$('.loader').hide();
						}
					 }

			     });
				 $('.spoiler').click(function() {
					 //$(this).toggleClass('active');
				 })
                 $('.nav-btn').click(function() {
                    var tabid = $(this).data('tabid');
                    $('.nav-btn').each(function() {
                        $(this).removeClass('active');
                    });
                    $('.tab-item').each(function() {
                        $(this).removeClass('active');
                    });
                    $('.'+tabid).toggleClass('active');
                    $(this).toggleClass('active');
                 });

			  });
        </script>

    </body>
</html>
