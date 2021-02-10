<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package znak
 */

?>

	<!DOCTYPE html>
	<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title><?php bloginfo('name'); ?></title>
		<!-- Favicon -->
		<link rel="icon" href="<?php echo get_template_directory_uri() ?>/assets/img/favicon.png" type="image/x-icon">
		<link rel="shortcut icon" href="<?php echo get_template_directory_uri() ?>/assets/img/favicon.png" type="image/x-icon">
		<!-- <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;700;800&display=swap" rel="stylesheet">  -->
		<?php wp_head(); ?>
	<!-- Yandex.Metrika counter -->
    <script type="text/javascript" >
       (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
       m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
       (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");
    
       ym(65373430, "init", {
            clickmap:true,
            trackLinks:true,
            accurateTrackBounce:true,
            webvisor:true
       });
    </script>
    <noscript><div><img src="https://mc.yandex.ru/watch/65373430" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
    <!-- /Yandex.Metrika counter -->
	</head>
	<!-- Header -->
	<body>
		<div class="main">
			<header id="header" class="header">
				<style>
					.header {
						background: url(<?php echo the_field('bg_head')?>) no-repeat  top/cover;
					}
				</style>
				<div class="container">
					<div class="header-nav">
						<div class="row align-items-center">
							<div class="col-md-7 col-lg-6 d-none d-md-flex menu-collapse">
								<nav>
									<?php wp_nav_menu( array(
										'theme_location'  => '',
										'menu'            => 'Меню в шапке',
										'container'       => 'null',
										'menu_class'      => 'menu d-flex',
										'echo'            => true,
										'fallback_cb'     => 'wp_page_menu',
										'before'          => '',
										'after'           => '',
										'link_before'     => '',
										'link_after'      => '',
										'items_wrap'      => '<ul id = "%1$s" class = "%2$s">%3$s</ul>',
										'depth'           => 0,
										'walker'          => '',
									) ); ?>
								</nav>
							</div>
							<div class="col-2 d-md-none d-block">
								 <input type="checkbox" id="checkbox1" class="checkbox1 visuallyHidden">
						        <label for="checkbox1">
						            <div class="hamburger">
						                <span class="bar bar1"></span>
						                <span class="bar bar2"></span>
						                <span class="bar bar3"></span>
						                <span class="bar bar4"></span>
						            </div>
						        </label>
							</div>
							<nav>
								<div class="menu-wrap">
									<div class="menu-close">&#10006;</div>
									<?php wp_nav_menu( array(
										'theme_location'  => '',
										'menu'            => 'Меню в шапке',
										'container'       => 'null',
										'menu_class'      => 'menu menu-mob',
										'echo'            => true,
										'fallback_cb'     => 'wp_page_menu',
										'before'          => '',
										'after'           => '',
										'link_before'     => '',
										'link_after'      => '',
										'items_wrap'      => '<ul id = "%1$s" class = "%2$s">%3$s</ul>',
										'depth'           => 0,
										'walker'          => '',
									) ); ?>
								</div>
							</nav>
							<div class="col-md-3 col-lg-3">
								<a href="mailto:<?php echo the_field('post')?>" class="header-link_post">
										<img src="<?php echo get_template_directory_uri() ?>/assets/img/icon-mail2.svg" alt="Почта">
										<span><?php echo the_field('post')?></span>
								</a>
							</div>
							<div class="col-2 col-md-3 col-lg-3">
								<a class="header-link">
									<div class="header-link__img">
										<img src="<?php echo get_template_directory_uri() ?>/assets/img/icon-phone2.svg" alt="Трубка">
									</div>
									<div class="header-link__wrap">
										<?php echo the_field('phone')?>
										<span>Заказать звонок</span>
									</div>  
								</a>
							</div>
						</div>
					</div>
					<div class="row align-items-end">
						<div class="col-md-6 col-lg-8">
							<div class="offer">
								<h1 class="offer__title">
									<?php echo the_field('head')?>
								</h1>
								<div class="offer__wrap">
									<div class="offer__adv">
										<div class="offer__icon">
											<img src="<?php echo get_template_directory_uri() ?>/assets/img/icon-exp.png" alt="разработки и регистрации договоров
											  ">
										</div>
										<p class="offer__text">
											<span>значительный опыт</span> разработки и регистрации <br> договоров
											  
										</p>
									</div>
									<div class="offer__adv">
										<div class="offer__icon">
											<img src="<?php echo get_template_directory_uri() ?>/assets/img/twodays.png" alt="1-2 рабочих дня на подготовку пакета документов">
										</div>
										<p class="offer__text">
											<span>1-2 рабочих дня</span> на подготовку пакета документов
											 
										</p>
									</div>
									<div class="offer__adv">
										<div class="offer__icon">
											<img src="<?php echo get_template_directory_uri() ?>/assets/img/icon-cost.png" alt="Стоимость">
										</div>
										<p class="offer__text">
											<span>Cтоимость</span> фиксируется сразу, без&nbsp;скрытых платежей
										</p>
									</div>
									<div class="offer__adv">
										<div class="offer__icon">
											<img src="<?php echo get_template_directory_uri() ?>/assets/img/consult.png" alt="Скидки">
										</div>
										<p class="offer__text">
											<span>Консультация</span> при первом обращении бесплатно 
											 
										</p>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6 col-lg-4">
							<form id="popupResult" class="main-form form js-form" action="<?php echo get_template_directory_uri() ?>/success.php">
								<div class="form-wrap">
									<h3 class="form__title">Оставьте заявку 
										<span>на разработку договора</span>
									</h3>
									<input  name="subject" type="hidden" value="Заявка - главный экран">
									<div class="input-wrap">
										<img src="<?php echo get_template_directory_uri() ?>/assets/img/icon-user.svg" class="img-svg"  alt="Имя">
										<input class="form__input" name="name" type="text" placeholder="Введите ваше имя">
									</div>
									<div class="input-wrap">
										<img src="<?php echo get_template_directory_uri() ?>/assets/img/icon-phone.svg" class="img-svg"  alt="Телефон">
										<input id="phone" class="form__input" name="phone" type="tel" placeholder="Введите ваш телефон">
									</div>
									<div class="input-wrap">
										<img src="<?php echo get_template_directory_uri() ?>/assets/img/icon-mail.svg" class="img-svg" alt="Почта">
										<input id="email" class="form__input" name="email" type="email" placeholder="Введите ваш e-mail">
									</div>
									<button data-submit class="form__btn btn" onclick="ym(65373430,'reachGoal','sendform1'); return true;">
										Отправить заявку
									</button>
									<div class="form__accept accept d-flex">
										<input type="checkbox" checked id="accept" class="accept-ch">
										<span></span>
										<label for="accept" >
											Я предоставляю согласие на <a href="<?php echo get_template_directory_uri() ?>/politic.pdf" target="_blank">обработку персональных данных</a>
										</label>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</header>
