<?php get_header(); ?>
    <div class="single-post__container container">
	    <div class="single-post__content">
            <div class="single-post__content-container">
                <div class="single-post__author-block">
                    <?php 
                        global $post;
                        $author_id = $post->post_author; 
                        $author_data = [
                            'avatar' => get_avatar( $author_id ),
                            'name'   => get_the_author_meta( 'nickname', $author_id ),
                            'url'    => get_the_author_meta( 'url', $author_id ),
                        ];
                    ?>
                    <div class="single-post__author-avatar">
                        <?php echo($author_data['avatar']) ?>
                    </div>
                    <a class="single-post__author-name-link" href="#" >
                        <h3 class="single-post__author-name">
                            <?php echo($author_data['name']) ?>
                        </h3>
                    </a>
                    <span class="single-post__publish-date">
                        Posted on
                        <?php 
                            
                            echo(substr( $post->post_date, 0, 10));
                            
                        ?>        
                    </span>
                </div>
                <h1 class="single-post__title">
                    <?php the_title();?>
                    </h1>
                <h4 class="single-post__category">
                    <?php the_category(); ?>
                </h4>
            </div>
            <div class="single-post__img">
                <?php the_post_thumbnail(); ?>
            </div>
            
            <div class="single-post__content-container">
                <?php
                    the_content();
                ?>
            </div>
            
        </div>
        <div class="single-post__read-next-block">
                            
        </div>
    </div>


<?php get_footer(); ?>
