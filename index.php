<?php
/*
Template Name: Главная
Template Post Type: post, page, product
*/
?>

<?php
	get_header();
?>
	<!-- Section Signs   -->
	<section id="signs" class="signs">
		<div class="container">
			<div class="row">
				<div class="col">
					<h2 class="signs-title">
						Нам доверяют	
					</h2>
				</div>
			</div>
			<div class="row">
				<div class="col">
					<div class="signs-info">
						<p>
							Нам доверяют патентование изобретений, полезных моделей и промышленных образцов научные учреждения и исследовательские институты, фармацевтические компании и представители малого и среднего бизнеса по всей России.
						</p>
					</div>
				</div>
			</div>
		</div>	
	</section>
	<!-- Section Stages-->
	<section id="stages" class="stages">
		<div class="container">
			<div class="row">
				<div class="col">
					<h2 class="stages-title">
						Этапы взаимодействия
					</h2>
				</div>
			</div>
			<div class="stages-wrap">
				<div class="row">	
					<div class="col-12 ml-auto">
						<div class="step step_right">
							<div class="step__number">
								<div class="step__wrap">
									<span>1 шаг</span>
									<img src="<?php echo get_template_directory_uri() ?>/assets/img/icon-step1.svg" alt="Шаг1">
								</div>
								<div class="step__point"><span></span></div>
							</div>
							<div class="step__info">
								<h5 class="step__title">
										Консультируем
								</h5>
								<p>
									Мы проводим бесплатную 
									вводную первичную <br>
									консультацию
								</p>
							</div>
						</div>
					</div>
					<div class="col-12 ml-auto">
						<div class="step step_left">
							<div class="step__number">
								<div class="step__wrap">
									<span>2 шаг</span>
									<img src="<?php echo get_template_directory_uri() ?>/assets/img/icon-step2.svg" alt="Шаг2">
								</div>
								<div class="step__point"><span></span></div>
							</div>
							<div class="step__info">
								<h5 class="step__title">
									Подписываем документы
								</h5>
								<p>
									Фиксируем все наши договоренности в письменном виде, подписывая договор
								</p>
							</div>
						</div>
					</div>
					<div class="col-12 ml-auto">
						<div class="step step_right">
							<div class="step__number">
								<div class="step__wrap">
									<span>3 шаг</span>
									<img src="<?php echo get_template_directory_uri() ?>/assets/img/icon-step3.svg" alt="Шаг3">
								</div>
								<div class="step__point"><span></span></div>
							</div>
							<div class="step__info step__info_small">
								<h5 class="step__title">
									Оплачиваете услуги и&nbsp;пошлины
								</h5>
								<p>
									Вы оплачиваете услуги по сопровождению процесса регистрации распоряжения правом по договору 
								</p>
							</div>
						</div>
					</div>
					<div class="col-12 ml-auto">
						<div class="step step_left">
							<div class="step__number">
								<div class="step__wrap">
									<span>4 шаг</span>
									<img src="<?php echo get_template_directory_uri() ?>/assets/img/icon-step4.svg" alt="Шаг4">
								</div>
								<div class="step__point"><span></span></div>
							</div>
							<div class="step__info">
								<h5 class="step__title">
										Ведем все <br>делопроизводство
								</h5>
								<p>
									Ведем все делопроизводство с патентным ведомством, постоянно информируя о статусе делопроизводства
								</p>
							</div>
						</div>
					</div>
					<div class="col-12 ml-auto">
						<div class="step step_right">
							<div class="step__number">
								<div class="step__wrap">
									<span>5 шаг</span>
									<img src="<?php echo get_template_directory_uri() ?>/assets/img/step6.svg" alt="Шаг5">
								</div>
								<div class="step__point"><span></span></div>
							</div>
							<div class="step__info step__info_small">
								<h5 class="step__title">
									Получаем <br>свидетельство 
								</h5>
								<p>
									Получаем документ, подтверждающий факт регистрации перехода/предоставления права по договору
								</p>
							</div>
						</div>
					</div>
					<div class="line-img">
					</div>
					<div class="amounts">
							Скидки на пошлины <span>при работе с нами</span>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Section Costs  -->
	<section id="costs" class="costs">
		<div class="container">
			<div class="row">
				<div class="col">
					<h2 class="costs-title">
						Cтоимость услуг
					</h2>
				</div>	
			</div>
			<div class="row justify-content-center">
				<?php  $posts = get_posts( array(
			        'numberposts' => -1,
			        'order'       => 'ASC',
			        'post_type'   => 'services',
			        'suppress_filters' => true // подавление работы фильтров изменения SQL запроса
			        ) );
			
			        foreach( $posts as $post ){
			        setup_postdata($post); 
				?>
				<div class="col-md-6 col-lg-6">
					<div class="cost">
					<div class="cost__name">
								<?php the_title() ?>
							</div>
						<div class="cost__wrap">
							
							<?php the_content() ?>
						</div>
						<div class="cost__order">
							<p class="cost__price">
								<?php echo the_field('service_price')?>
							</p>
							<a class="cost__btn btn">
								Заказать
							</a>
						</div>
					</div>
				</div>
				<?php
					}
					 wp_reset_postdata(); // сброс
				?>
				<p class="note">
					* без учета сумм государственных пошлин, которые оплачиваются дополнительно.
				</p>
			</div>
		</div>
	</section>
	<!-- Section Benefit  -->
	<!-- <section class="benefit" id="benefit">
		<style>
			.benefit {
				background: url(<?php echo the_field('benefit_bg')?>) no-repeat center top/cover;
			}
		</style>
		<div class="container">
			<div class="row align-items-end">
				<div class="col-md-6 col-lg-7">
					<div class="amount">
						<h2 class="amount__title">
							<?php echo the_field('benefit__head')?>
						</h2>
						<h3 class="amount__subtitle">
							<?php echo the_field('benefit_subhead')?>
						</h3>
						<div class="amount__info">
							<div class="amount__img">
								<img src="<?php echo get_template_directory_uri() ?>/assets/img/marker2.png" alt="Маркер">
							</div>
							<p>
								<?php echo the_field('benefit_text1')?>
							</p>
						</div>
						<div class="amount__info">
							<div class="amount__img">
								<img src="<?php echo get_template_directory_uri() ?>/assets/img/marker.png" alt="Маркер">
							</div>
							<p>
								<?php echo the_field('benefit_text2')?>
							</p>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-lg-5">
					<form id="popupResult2" class="main-form form js-form" action="<?php echo get_template_directory_uri() ?>/success.php">
						<div class="form-wrap">
							<h3 class="form__title">Оставьте заявку 
								<span>на регистрацию торговой марки</span>
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
								<input type="checkbox" checked id="accept2" class="accept-ch">
								<span></span>
								<label for="accept2" >
									Я предоставляю согласие на <a href="<?php echo get_template_directory_uri() ?>/politic.pdf" target="_blank">обработку персональных данных</a>
								</label>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section> -->
	<!-- Footer -->
	
<?php
get_footer();
