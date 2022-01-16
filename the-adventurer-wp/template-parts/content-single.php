
<?php 
/*
 * Template for single post content 
*/ 
;?>
<section id="post-<?php the_ID();?>">
    <div class="post-single">
        <div class="single-post-content">
            <h2 class="post-title"><a href="<?php the_permalink()?>"><?php the_title();?></a></h2>
            <div class="post-details">
                <p class="date"><?php echo get_the_date();?></p>
                <p class="author-link"><?php the_author_posts_link();?></p>
            </div>
            <?php the_content();?>
            <p class="category single-category"><?php the_category(' ');?></p>
        </div>
    </div>
</section>
            