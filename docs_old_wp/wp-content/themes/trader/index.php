<!DOCTYPE html>
<html lang="ru">
<head>
<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter47105226 = new Ya.Metrika({
                    id:47105226,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/47105226" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="google-site-verification" content="X0nY5BIf4QsQzjOx3Ukg0NKrj09QU8JVORHOudzR3no" />
	<title>Твой Трейдер</title>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/main.css">
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon.ico" type="image/x-icon">

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-110486040-1"></script>
	<script>
	window.dataLayer = window.dataLayer || [];
	function gtag(){dataLayer.push(arguments);}
	gtag('js', new Date());

	gtag('config', 'UA-110486040-1');
	</script>

	<?php wp_head(); ?>
</head>
<body>
	<div class="wrapper">
		<!--шапка -->
		<header class="container-fluid header">
			<div class="container">
				<div class="row">
					<div class="col-lg-5 col-md-4 col-sm-12 logo">
						<a href="http://tvoitreider.ru/"><img src="<?php echo get_template_directory_uri();?>/img/logo.png" alt=""></a>
					</div>
					<div class="col-lg-7 col-md-8 col-sm-12 header_top">
						<ul class="header_ul">
							<li><a class="otz" href="#reviews"><?php echo get_cat_name(3); ?></a></li>
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
						<?php if ( have_posts() ) : query_posts('p=5');
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
			<p class="uroven_zag"><?php echo get_cat_name(8); ?></p>
			<div class="clearfix"></div>
			<a href="http://tvoitreider.ru/younger_school/" class="col-lg-3 col-md-3 col-sm-6  col-xs-6 uroven ">
				<?php if ( have_posts() ) : query_posts('p=17');
				while (have_posts()) : the_post(); ?>
				<?php the_post_thumbnail(array(136, 74)); ?>
				<p class="orang orang1"><?php the_title(); ?></p>
			<? endwhile; endif; wp_reset_query(); ?>
		</a>
		<a href="http://tvoitreider.ru/middle_school/" class="col-lg-3 col-md-3 col-sm-6  col-xs-6  uroven ">
			<?php if ( have_posts() ) : query_posts('p=19');
			while (have_posts()) : the_post(); ?>
			<?php the_post_thumbnail(array(145, 88)); ?>
			<p class="orang orang2"><?php the_title(); ?></p>
		<? endwhile; endif; wp_reset_query(); ?>
	</a>
	<a href="http://tvoitreider.ru/high_school/" class="col-lg-3 col-md-3 col-sm-6  uroven nev">
		<?php if ( have_posts() ) : query_posts('p=22');
		while (have_posts()) : the_post(); ?>
		<?php the_post_thumbnail(array(140, 94)); ?>
		<p class="orang orang3"><?php the_title(); ?></p>
	<? endwhile; endif; wp_reset_query(); ?>
</a>
<a href="http://tvoitreider.ru/university" class="col-lg-3 col-md-3 col-sm-6  uroven nev">
	<?php if ( have_posts() ) : query_posts('p=25');
	while (have_posts()) : the_post(); ?>
	<?php the_post_thumbnail(array(159, 90)); ?>
	<p class="orang orang4"><?php the_title(); ?></p>
<? endwhile; endif; wp_reset_query(); ?>
</a>

</div>
</div>
<div class="container">
	<div class="ro">
		<div class="col-lg-6 col-md-6 col-sm-6  col-xs-6 nev1">
			<?php if ( have_posts() ) : query_posts('p=17');
			while (have_posts()) : the_post(); ?>
			<?php the_content(); ?>
		<? endwhile; endif; wp_reset_query(); ?>
	</div>
	<div class="col-lg-6 col-md-6 col-sm-6  col-xs-6 nev1">
		<?php if ( have_posts() ) : query_posts('p=19');
		while (have_posts()) : the_post(); ?>
		<?php the_content(); ?>
	<? endwhile; endif; wp_reset_query(); ?>
</div>
</div>
</div>

<div class="container dovod ur">
	<div class="ro">
		<div class="col-lg-3 col-md-3 col-sm-6 nev">
			<?php if ( have_posts() ) : query_posts('p=17');
			while (have_posts()) : the_post(); ?>
			<?php the_content(); ?>
		<? endwhile; endif; wp_reset_query(); ?>
	</div>
	<div class="col-lg-3 col-md-3 col-sm-6 nev">
		<?php if ( have_posts() ) : query_posts('p=19');
		while (have_posts()) : the_post(); ?>
		<?php the_content(); ?>
	<? endwhile; endif; wp_reset_query(); ?>
</div>
<div class="col-lg-3 col-md-3 col-sm-6  nev">
	<?php if ( have_posts() ) : query_posts('p=22');
	while (have_posts()) : the_post(); ?>
	<?php the_content(); ?>
<? endwhile; endif; wp_reset_query(); ?>
</div>
<div class="col-lg-3 col-md-3 col-sm-6 nev">
	<?php if ( have_posts() ) : query_posts('p=25');
	while (have_posts()) : the_post(); ?>
	<?php the_content(); ?>
<? endwhile; endif; wp_reset_query(); ?>
</div>
</div>
</div>

<div class="container ur">
	<div class="ro">
		<div class="col-lg-3 col-md-3 col-sm-6  col-xs-6 uroven nev11 uroven">
			<?php if ( have_posts() ) : query_posts('p=22');
			while (have_posts()) : the_post(); ?>
			<?php the_post_thumbnail(array(140, 94)); ?>
			<p class="orang orang3"><?php the_title(); ?></p>
		<? endwhile; endif; wp_reset_query(); ?>
	</div>
	<div class="col-lg-3 col-md-3 col-sm-6  col-xs-6  uroven nev11 uroven">
		<?php if ( have_posts() ) : query_posts('p=25');
		while (have_posts()) : the_post(); ?>
		<?php the_post_thumbnail(array(159, 90)); ?>
		<p class="orang orang4"><?php the_title(); ?></p>
	<? endwhile; endif; wp_reset_query(); ?>
</div>
</div>
</div>
<div class="container">
	<div class="ro">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 uroven uroven1 nev1">
			<?php if ( have_posts() ) : query_posts('p=22');
			while (have_posts()) : the_post(); ?>
			<?php the_content(); ?>
		<? endwhile; endif; wp_reset_query(); ?>
	</div>
	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 uroven uroven1 nev1">
		<?php if ( have_posts() ) : query_posts('p=25');
		while (have_posts()) : the_post(); ?>
		<?php the_content(); ?>
	<? endwhile; endif; wp_reset_query(); ?>
</div>
</div>
</div>

<div class="container-fluid krugi">
	<div class="container krugi_children">
		<div class="row">
			<p  class="krugi_top"><?php echo get_cat_name(9); ?></p>
			<p  class="krugi_top krugi_top1"><?php echo get_cat_name(10); ?></p>
			<div class="col-lg-3 col-md-3 col-sm-6 cru_container" >
				<div class="cru cru11">
					<?php if ( have_posts() ) : query_posts('p=35');
					while (have_posts()) : the_post(); ?>
					<?php the_content(); ?>
				<? endwhile; endif; wp_reset_query(); ?>
			</div>
		</div>
		<div class="col-lg-3 col-md-3 col-sm-6 cru_container">
			<div class="cru">
				<?php if ( have_posts() ) : query_posts('p=37');
				while (have_posts()) : the_post(); ?>
				<?php the_content(); ?>
			<? endwhile; endif; wp_reset_query(); ?>
		</div>
	</div>
	<div class="col-lg-3 col-md-3 col-sm-6 cru_container">
		<div class="cru cru1">
			<?php if ( have_posts() ) : query_posts('p=39');
			while (have_posts()) : the_post(); ?>
			<?php the_content(); ?>
		<? endwhile; endif; wp_reset_query(); ?>
	</div>
</div>
<div class="col-lg-3 col-md-3 col-sm-6 cru_container">
	<div class="cru cru1">
		<?php if ( have_posts() ) : query_posts('p=41');
		while (have_posts()) : the_post(); ?>
		<?php the_content(); ?>
	<? endwhile; endif; wp_reset_query(); ?>
</div>
</div>
<div class="strelka ">
	<div class="st st1">
		<img src="<?php echo get_template_directory_uri(); ?>/img/strelka.png" alt="">
	</div>
</div>
</div>
</div>
</div>

<div class="container vtor1">
	<div class="row">
		<p class="uroven_zag uroven_zag1"><?php echo get_cat_name(11); ?></p>
		<div class="col-lg-4 col-md-4 col-sm-12 div_content">
			<div class="oval">
				<?php if ( have_posts() ) : query_posts('p=43');
				while (have_posts()) : the_post(); ?>
				<?php the_post_thumbnail(array(49, 45)); ?>
				<div class="spa_div">
					<span><?php the_content(); ?></span>
				</div>
			<? endwhile; endif; wp_reset_query(); ?>
		</div>
	</div>
	<div class="col-lg-4 col-md-4 col-sm-12 div_content">
		<div class="oval oval_five oval_five1">
			<?php if ( have_posts() ) : query_posts('p=46');
			while (have_posts()) : the_post(); ?>
			<?php the_post_thumbnail(array(49, 53)); ?>
			<div class="spa_div">
				<span><?php the_content(); ?></span>
			</div>
		<? endwhile; endif; wp_reset_query(); ?>
	</div>
</div>
<div class="col-lg-4 col-md-4 col-sm-12 div_content">
	<div class="oval">
		<?php if ( have_posts() ) : query_posts('p=50');
		while (have_posts()) : the_post(); ?>
		<?php the_post_thumbnail(array(52, 49)); ?>
		<div class="spa_div">
			<span><?php the_content(); ?></span>
		</div>
	<? endwhile; endif; wp_reset_query(); ?>
</div>
</div>
</div>
</div>

<div class="container vtor">
	<div class="row">
		<div class="col-lg-4 col-md-4 col-sm-12  div_content">
			<div class="oval oval_five oval_five1">
				<?php if ( have_posts() ) : query_posts('p=53');
				while (have_posts()) : the_post(); ?>
				<?php the_post_thumbnail(array(52, 48)); ?>
				<div class="spa_div">
					<span><?php the_content(); ?></span>
				</div>
			<? endwhile; endif; wp_reset_query(); ?>
		</div>
	</div>
	<div class="col-lg-4 col-md-4 col-sm-12  div_content">
		<div class="oval oval_five1">
			<?php if ( have_posts() ) : query_posts('p=56');
			while (have_posts()) : the_post(); ?>
			<?php the_post_thumbnail(array(64, 54)); ?>
			<div class="spa_div spa_div_fo">
				<span><?php the_content(); ?></span>
			</div>
		<? endwhile; endif; wp_reset_query(); ?>
	</div>
</div>
<div class="col-lg-4 col-md-4 col-sm-12  div_content">
	<div class="oval">
		<?php if ( have_posts() ) : query_posts('p=61');
		while (have_posts()) : the_post(); ?>
		<?php the_post_thumbnail(array(47, 42)); ?>
		<div class="spa_div">
			<span><?php the_content(); ?></span>
		</div>
	<? endwhile; endif; wp_reset_query(); ?>
</div>
</div>
</div>
</div>

<div class="container">
	<div class="row">
		<div class="col-lg-12 col-md-12 ">
			<a class="obuch obuch1 regreg programm_btn" href="#"><?php echo get_cat_name(7); ?></a>
		</div>
	</div>
</div>

<div class="container-fluid footer">
	<footer>
		<div class="container">
			<div class="row">
				<div id="reviews"></div>
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 footer_left">
					<p class="footer_left-right-first"><?php echo get_cat_name(13); ?></p>
					<?php echo do_shortcode(' [testimonial_rotator id=95] '); ?>
				</div>

				<div class="col-lg-6 col-md-6 col-sm-6 footer_right">
					<div class="footer_right-right">
						<p class="footer_left-right-first footer_left-right-first1"><?php echo get_cat_name(12); ?></p>
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
			<?php //echo do_shortcode(' [cr_custom_registration] ');//older
			echo do_shortcode(' [contact-form-7 id="91" title="Contact form"] '); ?>
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

<script src="<?php echo get_template_directory_uri(); ?>/js/jquery-3.1.1.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>

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
