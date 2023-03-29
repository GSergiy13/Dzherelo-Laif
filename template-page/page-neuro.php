<?php
/**
 * Template Name: Нейро реабілітація
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

<section class="neuro-desc">
		<div class="container">
			<div class="neuro-desc__wrapper">
				<img class="neuro-desc__picture" src="<?php the_field('neuro-desc_picture')?>" alt="neuro">

				<div class="content">
					<p class="content__text">
					  <?php the_field('neuro-desc_text')?>
					</p>

					<h2 class="content__title title"><?php the_field('neuro-desc_title')?></h2>

					<a class="btn-more neuro-btn" href="#" title="Закрити">Читати більше</a>
				</div>

			</div>
		</div>
	</section>


	<section class="neuro-method">
		<div class="container">
			<h2 class="neuro-method__title title"> <?php the_field('method_title')?></h2>
			<div class="neuro-method__wrapper">
        <?php
						if( have_rows('method-box') ):
								// перебираем данные
								while ( have_rows('method-box') ) : the_row();
										if( get_row_layout() == 'method-box_add' ):?>
                          <div class="method">
                          <div class="method__picture">
                            <img class="method__picture-img" src="<?php echo the_sub_field('method-box_img'); ?>" alt="method-neuro">
                          </div>
                          <div class="method__content">
                            <h3 class="method__content-title">
                            <?php echo the_sub_field('method-box_title'); ?>
                            </h3>

                            <div class="method__content-desc">
                              <p>
                              <?php echo the_sub_field('method-box_text'); ?>
                              </p>
                            </div>
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

<?php get_footer()?>