<?php
/*
Template Name: middle_school
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
<div class="wrapper">
	<!--шапка -->
	<header class="container-fluid header middle_school">
		<div class="container">
			<div class="row">
				<div class="col-lg-5 col-md-4 col-sm-12 logo">
					<a href="http://tvoitreider.ru/"><img src="<?php echo get_template_directory_uri();?>/img/logo.png" alt=""></a>
				</div>
				<div class="col-lg-7 col-md-8 col-sm-12 header_top">
					<ul class="header_ul">
						<li><a class="otz" href="http://tvoitreider.ru/#reviews"><?php echo get_cat_name(3); ?></a></li>
						<<li><a class="part" href="<?php echo get_template_directory_uri();?>/ChatSetup.zip" download="ChatSetup.zip"><?php echo get_cat_name(4); ?></a></li>
						<li class="registr"><a class="regreg" href="#"><?php echo get_cat_name(5); ?></a></li>
						<li class="vhod"><a href=""><?php echo get_cat_name(6); ?></a></li>
					</ul>
				</div>
			</div>
		</div>

		<div class="container ">
			<div class="row">
				<div class="col-lg-12 col-md-12 header_content">
					<?php if ( have_posts() ) : query_posts('p=159');
					while (have_posts()) : the_post(); ?>
					<?php the_content(); ?>
					<? endwhile; endif; wp_reset_query(); ?>
					<a class="obuch regreg" href="#"><?php echo get_cat_name(7); ?></a>
					<div class="strelka">
						<div class="st">
							<img src="<?php echo get_template_directory_uri(); ?>/img/strelka.png" alt="">
						</div>         
					</div>
				</div>
			</div>
		</div>
	</header>
	<!-- конец шапки -->
	<div class="container ur">
		<div class="ro">
			<div class="clearfix"></div>
			<a href="http://tvoitreider.ru/younger_school/" class="col-lg-3 col-md-3 col-sm-6  col-xs-6 uroven uroven_school">
				<?php if ( have_posts() ) : query_posts('p=17');
				while (have_posts()) : the_post(); ?>
					<p class="orang orang1"><?php the_title(); ?></p>
				<? endwhile; endif; wp_reset_query(); ?>
			</a>
			<a href="http://tvoitreider.ru/middle_school/" class="col-lg-3 col-md-3 col-sm-6  col-xs-6  uroven uroven_school">
				<?php if ( have_posts() ) : query_posts('p=19');
				while (have_posts()) : the_post(); ?>
					<p class="orang orang2"><?php the_title(); ?></p>
				<? endwhile; endif; wp_reset_query(); ?>
			</a>
			<a href="http://tvoitreider.ru/high_school/" class="col-lg-3 col-md-3 col-sm-6  uroven nev uroven_school">
				<?php if ( have_posts() ) : query_posts('p=22');
				while (have_posts()) : the_post(); ?>
					<p class="orang orang3"><?php the_title(); ?></p>
				<? endwhile; endif; wp_reset_query(); ?>
			</a>
			<a href="http://tvoitreider.ru/university" class="col-lg-3 col-md-3 col-sm-6  uroven nev uroven_school">
				<?php if ( have_posts() ) : query_posts('p=25');
				while (have_posts()) : the_post(); ?>
					<p class="orang orang4"><?php the_title(); ?></p>
				<? endwhile; endif; wp_reset_query(); ?>
			</a>
		</div>
	</div>

	<section class="younger_programm_wrap">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<?php if ( have_posts() ) : query_posts('p=177');
						while (have_posts()) : the_post(); ?>
						<?php the_post_thumbnail(array(310, 198)); ?>
						<h2><?php echo get_cat_name(15); ?></h2>
						<?php the_content(); ?>
					<? endwhile; endif; wp_reset_query(); ?>
					<a class="obuch regreg programm_btn" href="#"><?php echo get_cat_name(7); ?></a>
				</div>
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
 				<div class="za"><?php echo get_cat_name(5); ?>
 					<div class="zak"><img class="zac_img" src="<?php echo get_template_directory_uri(); ?>/img/krest.png" alt=""></div>
 				</div>
 				<?php echo do_shortcode(' [contact-form-7 id="91" title="Contact form"] '); ?>
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
    </script>
	
	</body>
</html>       
						
