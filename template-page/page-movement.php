<?php
/**
 * Template Name: Терапія мови та мовлення
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

<section class="movement-desc">
    <div class="container">
      <div class="movement-desc__wrapper">
        <div class="content">
          <p class="content__text">
            <?php the_field('movement-desc_text')?>
          </p>
          <h2 class="content__title title"> <?php the_field('movement-desc_title')?> </h2>
        </div>

        <img class="movement-desc__picture" src="<?php the_field('movement-desc_img')?>" alt="neuro">
      </div>
    </div>
  </section>


  <section class="movement">
    <div class="container">
      <h2 class="movement__title title">
      <?php the_field('movement_title')?>
      </h2>

      <h3 class="movement__subtitle">
      <?php the_field('movement_subtitle')?>
      </h3>

      <div class="movement__wrapper">






				<?php
	      	if( have_rows('movement_box') ):
								// перебираем данные
								while ( have_rows('movement_box') ) : the_row();
										if( get_row_layout() == 'movement_box_add' ):?>

                      <div class="movement-box">
                        <div class="movement-box__picture">
                          <img class="movement-box__picture-img" src="<?php echo the_sub_field('movement_box_img'); ?>" alt="movement-picture">
                        </div>

                        <div class="movement-box__content">
                          <h3 class="movement-box__content-title">
                            <?php echo the_sub_field('movement_box_title'); ?>
                          </h3>

                          <p class="movement-box__content-desc">
                            <?php echo the_sub_field('movement_box_text'); ?>
                          </p>
                          <h3 class="movement-box__content-title">
                            <?php echo the_sub_field('movement_box_title2'); ?>
                          </h3>
                          <p class="movement-box__content-desc">
                            <?php echo the_sub_field('movement_box_text2'); ?>
                          </p>

                          <ul class="movement-box__content-list">
                          <?php
                            if( have_rows('movement_box_list') ):
                                  // перебираем данные
                                  while ( have_rows('movement_box_list') ) : the_row();
                                      if( get_row_layout() == 'movement_box_list_add' ):?>
                            <li class="movement-box__content-item">
                            <?php echo the_sub_field('movement_box_list_text'); ?>
                            </li>


                                          <?php
                                        endif;
                                    endwhile;
                                endif;
                              ?>
                          </ul>
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