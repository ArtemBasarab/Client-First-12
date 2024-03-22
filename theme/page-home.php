<?php 
$latest_post = get_posts(['numberposts' => 1, 'post_type'   => 'post',]);


$latest_post_category = get_the_category($latest_post[0]->ID);


get_header(); ?>
	<main class="homepage">
		
		<div class="homepage__latest-post" style="background: url(<?php echo get_the_post_thumbnail_url($latest_post[0]->ID) ?>) no-repeat; background-size: cover; background-position: center center">
			<div class="homepage__container container">
				<span class="homepage__latest-post-category">
					posted on <i><?php echo $latest_post_category[0]->name ?></i>
				</span>
				<h1 class="homepage__latest-post-title">
					<?php echo get_the_title($latest_post[0]->ID) ?>
				</h1>
				<div class="homepage__latest-post-meta">
					<span class="homepage__latest-post-author">
						By <i><?php echo get_the_author_meta('display_name', $latest_post[0]->post_author) ?></i>
					</span>
					<span class="homepage__latest-post-date">
						<?php echo substr($latest_post[0]->post_date, 0, 10) ?>
					</span>
				</div>
				<div class="homepage__latest-post-desc">
					<?php echo substr($latest_post[0]->post_content, 0, 200) ?>
				</div>
				<a class="homepage__latest-post-link" href="<?php echo $latest_post[0]->guid ?>">
					Read More >
				</a>
				
			</div>
			
		</div>
		
	</main><!-- #main -->

<?php get_footer(); ?>
