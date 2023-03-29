<?php
/**
 * Template Name: Догляд 27/7
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

<section class="care">
    <div class="container">
      <div class="care-boxs">


        <?php
						if( have_rows('care_boxs') ):
								// перебираем данные
								while ( have_rows('care_boxs') ) : the_row();
										if( get_row_layout() == 'care_boxs_add' ):?>
										


                        <div class="care-boxs__item">
                        <div class="care-boxs__item-top">
                          <div class="care-boxs__item-number">
                            <?php echo the_sub_field('care_boxs_num'); ?>
                          </div>
                          <img class="care-boxs__item-icon" src="<?php echo the_sub_field('care_boxs_icon'); ?>" alt="icons">
                        </div>

                        <div class="care-boxs__item-middle">
                          <p class="care-boxs__item-desc">
                          <?php echo the_sub_field('care_boxs_desc'); ?>
                          </p>
                        </div>
                      </div>
											<?php
										endif;
								endwhile;
						endif;
					?>
      </div>

      <h2 class="care__title title">
        <?php the_field('care_title')?>
      </h2>

      <div class="care__wrapper">
        <div class="care__content">
          <ul class="care__content-list">
            <?php
						if( have_rows('care_list') ):
                    // перебираем данные
                    while ( have_rows('care_list') ) : the_row();
                        if( get_row_layout() == 'care_list_add' ):?>
                      
                          <li class="care__content-item">
                            <?php echo the_sub_field('care_list_item'); ?>
                          </li>

                          <?php
                        endif;
                    endwhile;
                endif;
              ?>

          </ul>
        </div>

        <div class="care__picture">
          <img class="care__picture-img care__picture-img--1" src="<?php the_field('care_picture_1')?>" alt="care">
          <img class="care__picture-img care__picture-img--2" src="<?php the_field('care_picture_2')?>" alt="care">
        </div>
      </div>
    </div>
  </section>

<?php get_footer()?>