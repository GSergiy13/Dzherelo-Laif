<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package djerelo_life
 */

get_header();
?>

	<section class="no-page">
		<div class="container">
			<div class="no-page__wrapper">
				<div class="no-page__content">
					<h2 class="no-page__content-title">
						404
					</h2>
					<h3 class="no-page__content-subtitle">
						error
					</h3>
					<p class="no-page__content-desc">
						Сторінка не знайдена
					</p>
					<a class="no-page__content-btn btn" href="<?php echo site_url('') ?>">На головну</a>
				</div>

				<div class="no-page__picture">
					<img class="no-page__picture-img" src="<?= bloginfo('template_url');?>/assets/img/404.svg" alt="404">

				</div>
			</div>
		</div>
	</section>

<?php
get_footer();