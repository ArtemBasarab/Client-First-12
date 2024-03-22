<?php get_header(); ?>
	<main class="policy">
		<div class="policy__wrapper">
			<div class="policy__container container">
				<h1 class="policy__title">
					<?php the_title(); ?>
				</h1>
				<span class="policy__subtitle">
					Last updated
					<?php 
						global $post;
						echo(substr( $post->post_date, 0, 10));
					?>
				</span>
			</div>
		</div>
		<div class="container">
		<div class="policy__content-container ">
			<?php the_content(); ?>
		<div>
		</div>
		
	</main><!-- #main -->

<?php get_footer(); ?>
