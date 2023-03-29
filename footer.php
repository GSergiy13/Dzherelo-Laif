<section class="contacts" id="contacts">
			<div class="container">
				<div class="contacts__wrapper">
					<div class="contacts-form">
						<h2 class="contacts-form__title title">
							<?php the_field('form_title', 9); ?>
						</h2>
						<p class="contacts-form__desc">
							<?php the_field('form_desc', 9); ?>
						</p>
						<form action="#" class="form">
							<div class="form__wrapper">
								<input class="form__input" type="text" placeholder="Ваше ім’я">
								<input class="form__input" type="text" placeholder="Телефон">
							</div>
							<textarea class="form__textarea" name="textarea" id="id" placeholder="Повідомлення"></textarea>

							<button class="form__btn btn">Відправити</button>
						</form>
					</div>

					<div class="contacts-info">
						<h2 class="contacts-info__title title">
							<?= the_field('contact_title', 9); ?>
						</h2>

						<div class="contacts-info__wrapper">

							<div class="contacts-info__item">
								<img class="contacts-info__item-icon" src="<?= bloginfo('template_url');?>/assets/img/icons/phone.svg" alt="phone">
								<a href="tel:<?php  the_field('contacts_phones-1', 9); ?>" class="contacts-info__item-link"><?php the_field('contacts_phones-1', 9); ?></a>
							</div>
							<div class="contacts-info__item">
								<img class="contacts-info__item-icon" src="<?= bloginfo('template_url');?>/assets/img/icons/phone.svg" alt="phone">
								<a href="tel:<?php  the_field('contacts_phones-2', 9); ?>" class="contacts-info__item-link"><?php the_field('contacts_phones-2', 9); ?></a>
							</div>
							<div class="contacts-info__item">
								<img class="contacts-info__item-icon" src="<?= bloginfo('template_url');?>/assets/img/icons/phone.svg" alt="phone">
								<a href="tel:<?php  the_field('contacts_phones-3', 9); ?>" class="contacts-info__item-link"><?php the_field('contacts_phones-3', 9); ?></a>
							</div>

							<div class="contacts-info__item">
								<img class="contacts-info__item-icon" src="<?= bloginfo('template_url');?>/assets/img/icons/mail.svg" alt="phone">
								<a href="mailto:<?php the_field('contact_email', 9); ?>" class="contacts-info__item-link"><?php the_field('contact_email', 9); ?></a>
							</div>

							<div class="contacts-info__item">
								<img class="contacts-info__item-icon" src="<?= bloginfo('template_url');?>/assets/img/icons/map.svg" alt="map">
								<a href="#" class="contacts-info__item-link"><?php  the_field('contact_adress-1', 9); ?></a>
							</div>
							<div class="contacts-info__item">
								<img class="contacts-info__item-icon" src="<?php bloginfo('template_url');?>/assets/img/icons/map.svg" alt="map">
								<a href="#" class="contacts-info__item-link"><?php  the_field('contact_adress-2', 9); ?></a>
							</div>
							
						</div>
					</div>
				</div>
			</div>
		</section>


		<section class="location">


			<iframe class="location__img"
				src="<?= the_field('map', 9); ?>"
				width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
				referrerpolicy="no-referrer-when-downgrade"></iframe>

		</section>

		<footer class="footer">
			<div class="container">
				<div class="footer__wrapper">
					<div class="logo">
						<img src="<?= bloginfo('template_url');?>/assets/img/logo.svg" alt="logo" class="logo__img">


					</div>

					<div class="navigation">
						<nav>
							<ul class="navigation-list">
								<li class="navigation-list__box">
									<a class="navigation-list__box-link" href="#"><span>Послуги</span></a>
								</li>

								<div class="navigation-list__inner">
									<div class="navigation-list__item">
										<li class="navigation-list__box">
											<a class="navigation-list__box-link" href="./programs.html">Фізична реабілітация</a>
										</li>
										<li class="navigation-list__box">
											<a class="navigation-list__box-link" href="./neuro.html">Нейрореабілітація</a>
										</li>
										<li class="navigation-list__box">
											<a class="navigation-list__box-link" href="./therapy.html">Ерготерапія</a>
										</li>
									</div>
									<div class="navigation-list__item">
										<li class="navigation-list__box">
											<a class="navigation-list__box-link" href="./service.html">Патронажна служба</a>
										</li>
										<li class="navigation-list__box">
											<a class="navigation-list__box-link" href="./home.html">Реабілітація вдома</a>
										</li>
										<li class="navigation-list__box">
											<a class="navigation-list__box-link" href="./outpatient.html">Амбулаторне
												лікування</a>
										</li>
									</div>
									<div class="navigation-list__item">
										<li class="navigation-list__box">
											<a class="navigation-list__box-link" href="./article.html">Терапія мови та
												мовлення</a>
										</li>
										<li class="navigation-list__box">
											<a class="navigation-list__box-link" href="./care.html">Догляд 24\7</a>
										</li>
										<li class="navigation-list__box">
											<a class="navigation-list__box-link" href="./prokat-medtekhniky.html">Прокат
												Медтехніки</a>
										</li>
									</div>
								</div>

								<li class="navigation-list__box">
									<a class="navigation-list__box-link" href="./doctors.html"><span>Команда</span></a>
								</li>
								<li class="navigation-list__box">
									<a class="navigation-list__box-link" href="./blog.html"><span>Блог</span></a>
								</li>
							</ul>
						</nav>
					</div>

					<div class="social">

						<div class="social__wrapper">
							<a class="social__link" href="https://www.facebook.com/rodnikzhizni/" target="_blank">
								<img class="social__link-icon" src="<?= bloginfo('template_url');?>/assets/img/icons/fb.svg" alt="fb">
							</a>

							<a class="social__link" href="https://www.instagram.com/rodnikzhizni/" target="_blank">
								<img class="social__link-icon" src="<?= bloginfo('template_url');?>/assets/img/icons/instagram.svg" alt="instagram">
							</a>

							<a class="social__link" href="https://www.youtube.com/channel/UCwC534etVihTuEkyOyu44VQ" target="_blank">
								<img class="social__link-icon" src="<?= bloginfo('template_url');?>/assets/img/icons/youtube.svg" alt="youtube">
							</a>
						</div>


						<div class="social__copy">
							<a href="#" class="social__copy-link">Конфіденційність і умови</a>
							<div class="social__copy-year">
								2023
							</div>
						</div>
					</div>
				</div>
			</div>
		</footer>

		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js?_v=20230318120416"
			integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ=="
			crossorigin="anonymous" referrerpolicy="no-referrer"></script>
		<script type="text/javascript"
			src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js?_v=20230318120416"></script>

		<script src="<?= bloginfo('template_url');?>/assets/files/gsap.min.js?_v=20230318120416" defer></script>
		<script src="<?= bloginfo('template_url');?>/assets/files/ScrollTrigger.min.js?_v=20230318120416" defer></script>
		<script src="<?= bloginfo('template_url');?>/assets/files/ScrollSmoother.min.js?_v=20230318120416" defer></script>

    <?= wp_footer()?>

	</div>
</body>

</html>