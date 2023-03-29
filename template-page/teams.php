<?php
/**
 * Template Name: Команда
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

<section class="filter-doctors">
		<div class="container">
			<div class="accordions">
				<div class="accordions__nav">
					<?php
						if( have_rows('navigation_teams') ):
								while ( have_rows('navigation_teams') ) : the_row();
										if( get_row_layout() == 'navigation_teams-add' ):?>
												<div class="accordions__nav-item">
													<?php echo the_sub_field('navigation_teams-text'); ?>
												</div>
											<?php
										endif;
								endwhile;
						endif;
					?>
				</div>

				<div class="content-doctors content">
					<?php
						if( have_rows('doctors') ):
								while ( have_rows('doctors') ) : the_row();
										if( get_row_layout() == 'doctors-add' ):?>
												<div class="content__item">
												<div class="content__item-picture">
													<img class="content__item-img" src="<?php echo the_sub_field('doctors_photo'); ?>" alt="team">
												</div>

												<div class="content__item-text">
													<h3 class="content__item-title">
														<?php echo the_sub_field('doctors_name'); ?>
													</h3>
													<p class="content__item-desc">
														<?php echo the_sub_field('doctors_position'); ?>
													</p>
												</div>
											</div>
											<?php
										endif;
								endwhile;
						endif;
					?>
				</div>

				<div class="content-nurses content">
				<?php
						if( have_rows('nurses') ):
								while ( have_rows('nurses') ) : the_row();
										if( get_row_layout() == 'nurses-add' ):?>
												<div class="content__item">
												<div class="content__item-picture">
													<img class="content__item-img" src="<?php echo the_sub_field('nurses_photo'); ?>" alt="team">
												</div>

												<div class="content__item-text">
													<h3 class="content__item-title">
														<?php echo the_sub_field('nurses_name'); ?>
													</h3>
													<p class="content__item-desc">
														<?php echo the_sub_field('nurses_position'); ?>
													</p>
												</div>
											</div>
											<?php
										endif;
								endwhile;
						endif;
					?>
				</div>

				<div class="content-administration content">

				<?php
						if( have_rows('administration') ):
								while ( have_rows('administration') ) : the_row();
										if( get_row_layout() == 'administration-add' ):?>
												<div class="content__item">
												<div class="content__item-picture">
													<img class="content__item-img" src="<?php echo the_sub_field('administration_photo'); ?>" alt="team">
												</div>

												<div class="content__item-text">
													<h3 class="content__item-title">
														<?php echo the_sub_field('administration_name'); ?>
													</h3>
													<p class="content__item-desc">
														<?php echo the_sub_field('administration_position'); ?>
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

	


	
		<?php get_footer() ?>