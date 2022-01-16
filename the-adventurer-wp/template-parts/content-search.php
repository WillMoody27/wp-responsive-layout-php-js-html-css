
<?php 
/*
 * Template for single post content
*/ 
;?>
<section id="post-<?php the_ID();?>" class="search-form-details">
        <div class="post-single">
        <div class="single-post-content">
        <h2 class="post-title"><a href="<?php the_permalink()?>"><?php the_title();?></a></h2>
            <div class="post-details">
            <p class="date"><?php echo get_the_date();?></p>
            <p class="author-link"><?php the_author_posts_link();?></p>
            <!-- Logic for if the seach result has the category -->
            <?php 
            if(has_category(' ')){ ;?>
                <p class="category"><?php the_category(' ');?></p>
            <?php } ;?>
            </div>
        <?php the_excerpt();?>
        </div>
    </div>
</section>
            

