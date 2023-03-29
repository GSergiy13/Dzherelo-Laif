<?php
/**
 * Template Name: Блог
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


<section class="promo">
		<div class="promo__wrapper">
			<div class="vedeo">
				<img src="<?= bloginfo('template_url');?>/assets/img/blog_bg.jpg" alt="promo">
			</div>
			<div class="content">
				<div class="content__wrapper">
					<h1 class="content__title">
						Коли починати реабілітацію після інсульту?
					</h1>
					<a class="content__btn btn" href="#">Дізнатися більше</a>
				</div>

				<div class="social">
					<a class="social__link" href="https://www.facebook.com/rodnikzhizni/">Facebook</a>
					<a class="social__link" href="https://www.instagram.com/rodnikzhizni/">Instagram</a>
				</div>
			</div>
		</div>
	</section>

<section class="last-news">
		<div class="container">
			<div class="last-news__wrapper">
				<div class="news-title">
					<h2 class="news-title__title title">
            <?= the_field('last_news'); ?>
					</h2>
				</div>

				<div class="boxs-last">
					<div class="boxs-last__wrapper">



        <?php 
          $args = array(
            'posts_per_page'      => 3,
            'orderby'          => 'blog',
            'order'            => 'DESC',
            'post_type'        => 'post',
            'post_status'      => 'publish'
          ); 

          $query = new WP_Query( $args );
          if ( $query->have_posts() ) {
            while ( $query->have_posts() ) {
              $query->the_post(); ?>


           <div class="blog-box">
							<div class="blog-box__picture">
                <img class="blog-box__picture-img" src="<?php the_field('blog_img'); ?>" alt="blog">
							</div>
							<div class="blog-box__content">
								<div class="blog-box__content-dete">
                <?php the_time('d.m.Y'); ?>
								</div>
								<div class="blog-box__content-title">
                <?php the_title(); ?>
								</div>
								<p class="blog-box__content-desc">
                  <?php the_field('post_litle_desc')?>
								</p>
								<a class="blog-box__content-btn btn" href="<?php echo get_permalink( )?>">Дізнатися більше</a>
							</div>
						</div>


          <?php } 
            wp_reset_postdata();
          } 
          ?>

					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="expert-news">
		<div class="container">
			<h2 class="expert-news__title title">
				
        <?= the_field('expert_news'); ?>
			</h2>
			<div class="expert-news__wrapper">
				<div class="content-news">



        <?php 
					$posts = get_posts( array(
							'numberposts' => 3,
							'category_name'    => 'blog_expert',
							'orderby'     => 'date',
							'order'       => 'ASC',
							'post_type'   => 'post',
							'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
					) );

					foreach( $posts as $post ){
							setup_postdata($post);
							?>
            <div class="content-news__item">
						<div class="content-news__picture">
							<img class="content-news__picture-img" src="<?php the_field('blog_img'); ?>" alt="expert">
						</div>

						<div class="content-news__text">
							<div class="content-news__text-wrapper">
								<div class="content-news__text-date">
                <?php the_time('d.m.Y'); ?>
								</div>
								<h3 class="content-news__text-title">
                <?php echo the_title(); ?>
								</h3>
								<p class="content-news__text-desc">
                <?php echo the_field('post_litle_desc')?>
								</p>
								<a href="<?php echo get_permalink( )?>" class="content-news__text-btn btn-more">Читати далі</a>
							</div>
						</div>
					</div>

					<?php
					}

					wp_reset_postdata(); // сброс
			?>

				</div>

				<div class="picture-news">
					<img class="picture-news__img" src="<?= the_field('expert_img'); ?>" alt="pictture">
				</div>
			</div>
		</div>
	</section>


	<section class="all-articles">
		<div class="container">

			<h2 class="all-articles__title title">
				
        <?= the_field('all-articles'); ?>
			</h2>

			<div class="all-articles__wrapper" id="row_append">


        <?php 
					$posts = get_posts( array(
							'numberposts' => 4,
							'category_name'    => 0,
							'orderby'     => 'date',
							'order'       => 'DESC',
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
                <?php echo the_field('post_litle_desc')?>
								</div>
								<a class="blog-box__content-btn btn" href="<?php echo get_permalink( )?>">Дізнатися більше</a>
							</div>
						</div>
					<?php
					}
					wp_reset_postdata(); // сброс
			?>
			</div>
        </div>

			<button class="load-more" id="more_posts">
				<img class="load-more__icon" src="<?= bloginfo('template_url');?>/assets/img/load-more.svg" alt="load">
				<span>
          <?= the_field('btn_load'); ?>
				</span>
			</button>

		</div>
	</section>

  <img class="main-picture" src="<?= bloginfo('template_url');?>/assets/img/main-blog.jpg" alt="main-blog">


	
<?php get_footer() ?>