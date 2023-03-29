<?php
/**
 * Template Name: Ерготерапія
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




	<section class="therapy">
		<div class="container">

			<div class="therapy__desc">
				<p class="therapy__desc-text">
        <?php the_field('therapy_desc_start')?>
				</p>
			</div>

			<h2 class="therapy__title title">
      <?php the_field('therapy_title')?>
			</h2>
			<h3 class="therapy__subtitle">    <?php the_field('therapy_subtitle')?></h3>


			<div class="therapy-boxs">



<?php
	      	if( have_rows('therapy_boxs') ):
								// перебираем данные
								while ( have_rows('therapy_boxs') ) : the_row();
										if( get_row_layout() == 'therapy_boxs_add' ):?>
                      <div class="therapy-boxs__item">
                        <div class="therapy-boxs__item-top">
                          <div class="therapy-boxs__item-number">
                          <?php echo the_sub_field('therapy_boxs_num'); ?>
                          </div>
                          <img class="therapy-boxs__item-icon" src="<?php echo the_sub_field('therapy_boxs_icon'); ?>" alt="icons">
                        </div>
                        <div class="therapy-boxs__item-middle">
                          <h3 class="therapy-boxs__item-title">
                          <?php echo the_sub_field('therapy_boxs_desc'); ?>
                          </h3>
                        </div>
                      </div>
											<?php
										endif;
								endwhile;
						endif;
					?>
			</div>


			<div class="therapy__desc">
				<p class="therapy__desc-text">
        <?php the_field('therapy_desc_end')?>
				</p>
			</div>

		</div>
	</section>



<?php get_footer()?>