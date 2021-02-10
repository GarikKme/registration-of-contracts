<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package znak
 */

?>

	<footer id="footer" class="footer">
				<div class="container">
					<div class="row ">
							<div class="col-md-5 col-lg-4">
								<div class="foot-info">
								<div class="main-site">
									<a href="<?php echo esc_url( home_url( '/' ) ); ?>">регистрация-договора.рф</a>
								</div>
									<p>
										ИП Крутских В.В.,<br> ОГРНИП 317366800101642
									</p>
									<a href="http://localhost/reg/wp-content/themes/znak/politics.pdf" target="_blank" class="politics">
										Политика конфиденциальности
									</a>
								</div>
							</div>
							<div class="col-md-3 col-lg-5">
								<nav>
									<?php
									$args = array('theme_location' => '',
										'menu'            => 'Меню в подвале',
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
									);
										$menu = wp_nav_menu( $args );
										
										$menu = preg_replace('~<li~', '<li><a href="'.home_url().'" title="На главную">Главная</a></li><li', $menu, 1 );
										echo $menu; 
										?>
									
								</nav>
							</div>
							<div class="col-md-4 col-lg-3">
								<div class="footer-links">
									<a class="footer-link">
										<div class="footer-link__img">
											<img src="<?php echo get_template_directory_uri() ?>/assets/img/icon-phone2.svg" alt="Трубка">
										</div>
										<div class="footer-link__wrap">
											<?php echo the_field('phone')?>
											<span>Заказать звонок</span>
										</div>  
									</a>
									<a href="mailto:<?php echo the_field('post')?>" class="footer-link_post">
										<img src="<?php echo get_template_directory_uri() ?>/assets/img/icon-mail2.svg" alt="Почта">
										<span><?php echo the_field('post')?></span>
									</a>
								</div>
							</div>
						</div>
					<div class="row">
						<div class="col">
							<p class="rights">
								&copy; 2020 / Все права защищены
							</p>
						</div>
					</div>
				</div>
			</footer>
		</div>
		<div style="display: none;">
		    <div class="box-modal" id="ModalConsult">
				<form id="popupResult3" class="main-form form js-form" action="<?php echo get_template_directory_uri() ?>/success.php">
					<div class="box-modal_close arcticmodal-close"></div>
					<div class="form-wrap">
						<h3 class="form__title">Оставьте заявку 
							<span>на регистрацию договора</span>
						</h3>
						<input  name="subject" type="hidden" value="Форма Стоимость">
						<div class="input-wrap">
							<img src="<?php echo get_template_directory_uri() ?>/assets/img/icon-user.svg" class="img-svg"  alt="Имя">
							<input class="form__input" name="name" type="text" placeholder="Введите ваше имя">
						</div>
						<div class="input-wrap">
							<img src="<?php echo get_template_directory_uri() ?>/assets/img/icon-phone.svg" class="img-svg"  alt="Телефон">
							<input id="phone" class="form__input" name="phone" type="tel" placeholder="Введите ваш телефон">
						</div>
						<div class="input-wrap last">
							<img src="<?php echo get_template_directory_uri() ?>/assets/img/icon-mail.svg" class="img-svg" alt="Почта">
							<input id="email" class="form__input" name="email" type="email" placeholder="Введите ваш e-mail">
						</div>
						<button data-submit class="form__btn btn" onclick="ym(65373430,'reachGoal','sendform2'); return true;">
							Отправить заявку
						</button>
						<div class="form__accept accept d-flex">
							<input type="checkbox" checked id="accept3" class="accept-ch">
							<span></span>
							<label for="accept3" >
								Я предоставляю согласие на <a href="<?php echo get_template_directory_uri() ?>/politic.pdf" target="_blank">обработку персональных данных</a>
							</label>
						</div>
					</div>
				</form>
			</div>
		</div>
		<div id="loader">
	    	<img src="<?php echo get_template_directory_uri() ?>/assets/img/ripple.svg">
	  	</div>
	  <!-- Сообщение "спасибо" после отправки формы -->
	  <div id="overlay">
	    <div id="thx">
	      	Спасибо! <br> Мы обязательно вам перезвоним!
	    </div>
	  </div>
	</body>
	</html>

<?php wp_footer(); ?>

</body>
</html>
