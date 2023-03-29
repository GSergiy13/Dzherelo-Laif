<?php
/**
 * Template Name: Головна
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package djerelo_life
 */

// Build the  Shortcode
?>

<?= get_header();?>

<section class="promo video-slider">
			<div class="slider">
			<?php
					if( have_rows('slider_video') ):
						// перебираем данные
						while ( have_rows('slider_video') ) : the_row();
								if( get_row_layout() == 'promo-slider-add' ):?>

									<div class="slider__box">
										<div class="promo-slider">
											<div class="vedeo">
												<video src="<?php echo the_sub_field('promo-slide-video'); ?>" loop muted playsinline>
												</video>
											</div>
											<div class="content">
												<div class="content__wrapper">
													<div class="content__number">
													<?php echo the_sub_field('promo-slider-number'); ?>
													</div>
													<h1 class="content__title">
													<?php echo the_sub_field('promo-slider-title'); ?>
													</h1>
													<p class="content__desc">
														<?php echo the_sub_field('promo-slide-desc'); ?>
													</p>
													<a class="content__btn btn" href="<?php echo the_sub_field('promo-slider-btn-link'); ?>">
													<?php echo the_sub_field('promo-slider-btn-text'); ?>
													</a>
												</div>

												<div class="social">
													<a class="social__link" href="<?php echo the_sub_field('promo_fb'); ?>">Facebook</a>
													<a class="social__link" href="<?php echo the_sub_field('promo_ig'); ?>">Instagram</a>
												</div>
											</div>
										</div>
									</div>
									<?php
								endif;
						endwhile;
				endif;
			?>
			</div>
			<div class="slider-two">
				<div class="slider-nav">
				<?php
                if( have_rows('slider_video') ):
                  // перебираем данные
                  while ( have_rows('slider_video') ) : the_row();
                      if( get_row_layout() == 'promo-slider-add' ):?>

													<div class="slider-two__item">
														<div class="slider-two__item-content">
															<div class="slider-two__item-number">
															<?php echo the_sub_field('promo-slider-number'); ?>
															</div>
															<div class="slider-two__item-text">
															<?php echo the_sub_field('promo-slider-title'); ?>
															</div>
														</div>
													</div>
										
                        <?php
                      endif;
                  endwhile;
              endif;
            ?>
				</div>
				<div class="slider-two__item">
					<img class="slider-two__item-preview" src="<?= bloginfo('template_url');?>/assets/img/slider/litle-slider.jpg" alt="slider-img">
				</div>
			</div>
		</section>

		<section class="about-us" id="about">
			<div class="container">
				<div class="about-us__wrapper">
					<div class="content effects__left">
						<h2 class="about-us__title">
							<?= the_field('about_title'); ?>
						</h2>

						<p class="about-us__desc">
						<?= the_field('about_desc'); ?>
						</p>

						<a class="about-us__btn btn-more" href="<?= the_field('about_btn-link'); ?>"><?= the_field('about_btn-text'); ?></a>
					</div>

					<div class="video effects__right">
						<img class="about-us__img" src="<?= the_field('about_img'); ?>" alt="img">

						<div class="video__play">
							<svg class="video__play-icon" width="26" height="48" viewBox="0 0 26 48" fill="none"
								xmlns="http://www.w3.org/2000/svg">
								<path
									d="M0.553467 1.67155V44.0642C0.553467 47.4711 4.67252 49.1773 7.08154 46.7682L24.6178 29.2319C26.1112 27.7386 26.1112 25.3173 24.6178 23.8239L1.90548 1.11153C1.40655 0.612606 0.553467 0.965964 0.553467 1.67155Z"
									fill="#78D651" />
							</svg>

						</div>
					</div>
				</div>
			</div>
		</section>


		<section class="services">
			<div class="container">
				<h2 class="services__title title effects__left">
					<?= the_field('services_title'); ?>
				</h2>
				<div class="services__wrapper">

				<?php
						if( have_rows('services_item') ):
								// перебираем данные
								while ( have_rows('services_item') ) : the_row();
										if( get_row_layout() == 'services_add-item' ):?>

													<div class="services-box effects__top">
														<div class="services-box__picture">
															<img src="<?php echo the_sub_field('services_img'); ?>" alt="img" class="services-box__picture-img">
														</div>

														<div class="services-box__content">
															<h2 class="services-box__content-title">
															<?php echo the_sub_field('services_name'); ?>
															</h2>

															<a class="services-box__content-btn btn" href="<?php echo the_sub_field('services_btn-link'); ?>"><?php echo the_sub_field('services_btn-text'); ?></a>
														</div>
													</div>
									
											<?php
										endif;
								endwhile;
						endif;
					?>
				</div>
			</div>
		</section>


		<section class="advances-company">
			<div class="container">
				<div class="advances-company__wrapper">
					<div class="picture effects__left">
						<div class="advances-company__decoration"></div>
						<img src="<?= the_field('advances_img'); ?>" alt="advances-company" class="advances-company__img">
					</div>
					<div class="content effects__right">
						<h2 class="advances-company__title title">
							<?= the_field('advances_title'); ?>
						</h2>

						<div class="content__wrapper">
							<div class="advances-box">
								<img src="<?= bloginfo('template_url');?>/assets/img/icons/advances-icon__1.svg" alt="" class="advances-box__icon">
								<p class="advances-box__desc">
								<?= the_field('advances_item-text-1'); ?>
								</p>
							</div>

							<div class="advances-box">
								<img src="<?= bloginfo('template_url');?>/assets/img/icons/advances-icon__2.svg" alt="" class="advances-box__icon">
								<p class="advances-box__desc">
								<?= the_field('advances_item-text-2'); ?>
								</p>
							</div>

							<div class="advances-box">
								<img src="<?= bloginfo('template_url');?>/assets/img/icons/advances-icon__3.svg" alt="" class="advances-box__icon">
								<p class="advances-box__desc">
								<?= the_field('advances_item-text-3'); ?>
								</p>
							</div>

							<div class="advances-box">
								<img src="<?= bloginfo('template_url');?>/assets/img/icons/advances-icon__4.svg" alt="" class="advances-box__icon">
								<p class="advances-box__desc">
								<?= the_field('advances_item-text-4'); ?>
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="team effects__top">
			<div class="container">
				<h2 class="team__title title ">
					<?= the_field('team_title'); ?>
				</h2>

				<div class="team__wrapper ">
					<?php
						if( have_rows('team_preview') ):
								// перебираем данные
								while ( have_rows('team_preview') ) : the_row();
										if( get_row_layout() == 'team_preview-add' ):?>

													<div class="team-box">
													<div class="team-box__picture">
														<img class="team-box__picture-img" src="<?php echo the_sub_field('team_photo'); ?>" alt="team-picutere">
													</div>
													<div class="team-box__content">
														<h3 class="team-box__content-title">
														<?php echo the_sub_field('team_name'); ?>
														</h3>
														<p class="team-box__content-desc">
														<?php echo the_sub_field('team_position'); ?>
														</p>
													</div>
												</div>
									
											<?php
										endif;
								endwhile;
						endif;
					?>
				</div>

				<a href="<?= the_field('team_btn-link'); ?>" class="btn"><?= the_field('team_btn'); ?></a>
			</div>
		</section>



		<section class="gallery effects__top" id="gallery">
			<h2 class="gallery__title title"><?= the_field('gallery_title'); ?></h2>

			<div class="slider-gallery">
					<?php
						if( have_rows('gallery_images') ):
								// перебираем данные
								while ( have_rows('gallery_images') ) : the_row();
										if( get_row_layout() == 'gallery_images-add' ):?>
												<div class="slider-gallery__item">
													<img class="slider-gallery__item-img" src="<?php echo the_sub_field('gallery_images-box'); ?>" alt="slider">
												</div>
											<?php
										endif;
								endwhile;
						endif;
					?>
			</div>
		</section>


		<section class="reviews" id="reviews">
			<div class="container">
				<div class="reviews__wrapper">
					<div class="reviews-video effects__left">
						<h2 class="reviews__title title"><?= the_field('reviews_title'); ?></h2>

						<div class="box-video">
							<img class="box-video__picture" src="<?= the_field('reviews_img'); ?>" alt="reviews">
							<div class="box-video__inner">
								<button class="box-video__btn play">

								</button>

								<h3 class="box-video__title">
								<?= the_field('reviews_btn'); ?>
								</h3>
							</div>
						</div>
					</div>

					<div class="reviews-message effects__top">


					<?php
						if( have_rows('reviews_boxs') ):
								// перебираем данные
								while ( have_rows('reviews_boxs') ) : the_row();
										if( get_row_layout() == 'reviews_boxs_add' ):?>

												<div class="box-reviews">
													<div class="box-reviews__top">
														<img class="box-reviews__photo" src="<?php echo the_sub_field('reviews_photo'); ?>" alt="reviews">

														<div class="box-reviews__name">
														<?php echo the_sub_field('reviews_name'); ?>
														</div>
													</div>
													<div class="box-reviews__bottom">
														<p class="box-reviews__desc">
														<?php echo the_sub_field('reviews_desc'); ?>
														</p>
													</div>
												</div>
											<?php
										endif;
								endwhile;
						endif;
					?>				
					</div>
				</div>
			</div>
		</section>

		<section class="partners effects__top">
			<div class="container">
				<h2 class="partners__title title">
					<?= the_field('partners_title'); ?>
				</h2>

				<div class="partners-slider">

				<?php
						if( have_rows('partners_images') ):
								// перебираем данные
								while ( have_rows('partners_images') ) : the_row();
										if( get_row_layout() == 'partners_images-add' ):?>
										
												<div class="slick-slide">
													<div class="partners-box">
														<img class="partners-box__logo" src="<?php echo the_sub_field('partners_images-box'); ?>" alt="box__logo">
													</div>
												</div>
											<?php
										endif;
								endwhile;
						endif;
					?>
				</div>
			</div>
		</section>




		<section class="blog">
			<div class="container">
				<h2 class="blog__title title effects__top">Блог</h2>

				<div class="blog__wrapper effects__top">


				<?php 
					$posts = get_posts( array(
							'numberposts' => -1,
							'category_name'    => 'blog',
							'orderby'     => 'date',
							'order'       => 'ASC',
							'post_type'   => 'post',
							'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
					) );

					foreach( $posts as $post ){
							setup_postdata($post);
							?>

						<div class="blog-box">
							<div class="blog-box__picture">
								<img class="blog-box__picture-img" src="<?php the_field('blog_img'); ?> " alt="blog">
							</div>
							<div class="blog-box__content">
								<div class="blog-box__content-date">
								<?php the_time('d.m.Y'); ?>
								</div>
								<div class="blog-box__content-title">
									<?php echo the_title(); ?>
								</div>
								<div class="blog-box__content-desc">
									<?php echo the_content(); ?>
								</div>
								<a class="blog-box__content-btn btn" href="./article.html">Дізнатися більше</a>
							</div>
						</div>
					<?php
					}

					wp_reset_postdata(); // сброс
			?>

				</div>
			</div>
		</section>


		<div class="modal modal__reviews" id="id1">
			<div class="content">
				<button class="modal__close"></button>
				<div class="youtube-lazy">
					<div class="youtube-lazy-container">
						<div class="youtube-lazy-image">
							<div class="youtube-lazy-button" data-url="d3ZZ5Gx-hLM">
								<svg>
									<path fill-rule="evenodd" clip-rule="evenodd" fill="#1F1F1F" class="ytp-large-play-button-svg"
										d="M84.15,26.4v6.35c0,2.833-0.15,5.967-0.45,9.4c-0.133,1.7-0.267,3.117-0.4,4.25l-0.15,0.95c-0.167,0.767-0.367,1.517-0.6,2.25c-0.667,2.367-1.533,4.083-2.6,5.15c-1.367,1.4-2.967,2.383-4.8,2.95c-0.633,0.2-1.316,0.333-2.05,0.4c-0.767,0.1-1.3,0.167-1.6,0.2c-4.9,0.367-11.283,0.617-19.15,0.75c-2.434,0.034-4.883,0.067-7.35,0.1h-2.95C38.417,59.117,34.5,59.067,30.3,59c-8.433-0.167-14.05-0.383-16.85-0.65c-0.067-0.033-0.667-0.117-1.8-0.25c-0.9-0.133-1.683-0.283-2.35-0.45c-2.066-0.533-3.783-1.5-5.15-2.9c-1.033-1.067-1.9-2.783-2.6-5.15C1.317,48.867,1.133,48.117,1,47.35L0.8,46.4c-0.133-1.133-0.267-2.55-0.4-4.25C0.133,38.717,0,35.583,0,32.75V26.4c0-2.833,0.133-5.95,0.4-9.35l0.4-4.25c0.167-0.966,0.417-2.05,0.75-3.25c0.7-2.333,1.567-4.033,2.6-5.1c1.367-1.434,2.967-2.434,4.8-3c0.633-0.167,1.333-0.3,2.1-0.4c0.4-0.066,0.917-0.133,1.55-0.2c4.9-0.333,11.283-0.567,19.15-0.7C35.65,0.05,39.083,0,42.05,0L45,0.05c2.467,0,4.933,0.034,7.4,0.1c7.833,0.133,14.2,0.367,19.1,0.7c0.3,0.033,0.833,0.1,1.6,0.2c0.733,0.1,1.417,0.233,2.05,0.4c1.833,0.566,3.434,1.566,4.8,3c1.066,1.066,1.933,2.767,2.6,5.1c0.367,1.2,0.617,2.284,0.75,3.25l0.4,4.25C84,20.45,84.15,23.567,84.15,26.4z M33.3,41.4L56,29.6L33.3,17.75V41.4z">
									</path>
									<polygon fill-rule="evenodd" clip-rule="evenodd" fill="#FFFFFF" points="33.3,41.4 33.3,17.75 56,29.6">
									</polygon>
								</svg>
							</div>
						</div>
						<div class="iframe-youtube"></div>
					</div>
				</div>
			</div>
		</div>

		<div class="modal about__modal" id="id2">
			<div class="content">
				<button class="modal__close"></button>
				<div class="youtube-lazy">
					<div class="youtube-lazy-container">
						<div class="youtube-lazy-image">
							<div class="youtube-lazy-button" data-url="vyD05zXOhgk">
								<svg>
									<path fill-rule="evenodd" clip-rule="evenodd" fill="#1F1F1F" class="ytp-large-play-button-svg"
										d="M84.15,26.4v6.35c0,2.833-0.15,5.967-0.45,9.4c-0.133,1.7-0.267,3.117-0.4,4.25l-0.15,0.95c-0.167,0.767-0.367,1.517-0.6,2.25c-0.667,2.367-1.533,4.083-2.6,5.15c-1.367,1.4-2.967,2.383-4.8,2.95c-0.633,0.2-1.316,0.333-2.05,0.4c-0.767,0.1-1.3,0.167-1.6,0.2c-4.9,0.367-11.283,0.617-19.15,0.75c-2.434,0.034-4.883,0.067-7.35,0.1h-2.95C38.417,59.117,34.5,59.067,30.3,59c-8.433-0.167-14.05-0.383-16.85-0.65c-0.067-0.033-0.667-0.117-1.8-0.25c-0.9-0.133-1.683-0.283-2.35-0.45c-2.066-0.533-3.783-1.5-5.15-2.9c-1.033-1.067-1.9-2.783-2.6-5.15C1.317,48.867,1.133,48.117,1,47.35L0.8,46.4c-0.133-1.133-0.267-2.55-0.4-4.25C0.133,38.717,0,35.583,0,32.75V26.4c0-2.833,0.133-5.95,0.4-9.35l0.4-4.25c0.167-0.966,0.417-2.05,0.75-3.25c0.7-2.333,1.567-4.033,2.6-5.1c1.367-1.434,2.967-2.434,4.8-3c0.633-0.167,1.333-0.3,2.1-0.4c0.4-0.066,0.917-0.133,1.55-0.2c4.9-0.333,11.283-0.567,19.15-0.7C35.65,0.05,39.083,0,42.05,0L45,0.05c2.467,0,4.933,0.034,7.4,0.1c7.833,0.133,14.2,0.367,19.1,0.7c0.3,0.033,0.833,0.1,1.6,0.2c0.733,0.1,1.417,0.233,2.05,0.4c1.833,0.566,3.434,1.566,4.8,3c1.066,1.066,1.933,2.767,2.6,5.1c0.367,1.2,0.617,2.284,0.75,3.25l0.4,4.25C84,20.45,84.15,23.567,84.15,26.4z M33.3,41.4L56,29.6L33.3,17.75V41.4z">
									</path>
									<polygon fill-rule="evenodd" clip-rule="evenodd" fill="#FFFFFF" points="33.3,41.4 33.3,17.75 56,29.6">
									</polygon>
								</svg>
							</div>
						</div>
						<div class="iframe-youtube"></div>
					</div>
				</div>
			</div>
		</div>

	
		<?php get_footer() ?>