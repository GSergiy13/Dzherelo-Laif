<?php
/**
 * Template Name: Фізична реабілітація
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

<?php get_header()?>

<?php get_template_part( 'template-parts/sections/promo-picture' );?>




<section class="programs">
		<div class="container">
			<h2 class="programs__title title">
			<?php the_field('programs_title')?>
			</h2>
			<p class="programs__subtitle">
			<?php the_field('programs_subtitle')?>
			</p>

			<div class="programs__wrapper">
				<div class="programs-boxs">


				<?php
	      	if( have_rows('programs_boxs') ):
								// перебираем данные
								while ( have_rows('programs_boxs') ) : the_row();
										if( get_row_layout() == 'programs_boxs_add' ):?>
	

					<div class="programs-box">
						<div class="programs-box__picture">
							<img class="programs-box__picture-img" src="<?php echo the_sub_field('programs_boxs_img'); ?>" alt="picture">
						</div>
						<div class="programs-box__content">
							<h3 class="programs-box__content-title">
							<?php echo the_sub_field('programs_boxs_title'); ?>
							</h3>
							<p class="programs-box__content-desc">
							<?php echo the_sub_field('programs_boxs_desc'); ?>
							</p>

							<h3 class="programs-box__content-subtitle">
							<?php echo the_sub_field('programs_boxs_subtitle'); ?>
							</h3>

							<ul class="programs-box__content-list">

								<?php
										if( have_rows('programs_list') ):
											// перебираем данные
											while ( have_rows('programs_list') ) : the_row();
													if( get_row_layout() == 'programs_list_add' ):?>
															<li class="programs-box__content-item">
															<?php echo the_sub_field('programs_list_item'); ?>
															</li>
														<?php
													endif;
											endwhile;
									endif;
								?>

						
							</ul>

									<a class="programs-box__content-btn btn-more" href="<?php echo the_sub_field('programs_btn_link'); ?>"><?php echo the_sub_field('programs_btn_text'); ?></a>
									</div>
								</div>
											<?php
										endif;
								endwhile;
						endif;
					?>
				</div>

				<p class="programs__desc">
				<?php the_field('programs_desc')?>
				</p>
			</div>
		</div>
	</section>


<?php get_footer()?>