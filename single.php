<?php
get_header();
?>



<section class="promo">
		<div class="promo__wrapper">
			<div class="vedeo">
				<img src="<?php echo the_field('blog_img')?>" alt="promo">
				
			</div>
			<div class="content">
				<div class="content__wrapper">
					<h1 class="content__title">
						<?php the_title()?>
					</h1>
				</div>

				<div class="social">
					<a class="social__link" href="https://www.facebook.com/rodnikzhizni/">Facebook</a>
					<a class="social__link" href="https://www.instagram.com/rodnikzhizni/">Instagram</a>
				</div>
			</div>
		</div>
	</section>



<section class="article">
		<div class="container">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );
		endwhile; 
		?>


<div class="article-autor">
				<img class="article-autor__photo" src="<?php echo the_field('post_autor_img')?>" alt="autor__photo">

				<div class="article-autor_content">
					<h3 class="article-autor__content-title">
						<?php echo the_field('post_autor')?>
					</h3>

					<div class="article-autor__content-profession">
					<?php echo the_field('post_autor_positon')?>
					</div>
				</div>
			</div>
	</div>
	</section>



	<section class="others-article">
		<div class="container">

			<h2 class="others-article__title title">
				
				<?php echo the_field('zagolovok_rekomendacziyi_v_postu', 191)?>
				
			</h2>

			<div class="others-article__wrapper">

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
	</section>




<?php
get_footer();