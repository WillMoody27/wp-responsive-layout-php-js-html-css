<!-- Post Section -->
<div <?php post_class(array('class' => 'post'));?>>
    <!-- Post Thumbnails -->
    <div class="post-image">
    <a href="<?php the_permalink()?>"><?php the_post_thumbnail('full');?></a>
        <!-- <?php the_post_thumbnail('full');?> -->
    </div>
    <!-- Post Thumbnails -->
    <!-- Category and other content -->
    <div class="post-details">
        <p class="post-format">
            <!-- Logic of Post Format Icon -->
            <?php 
            if(get_post_format() === 'image'){ ;?>
            <p class="post-format-icon"><i class="fas fa-image"></i></p>
           <?php } else if(get_post_format() === 'video'){ ;?>
            <p class="post-format-icon"><i class="fas fa-camera"></i></p>
           <?php } else { ;?>
            <!-- Standard Post Icon Is A Article -->
            <p class="post-format-icon"><i class="fab fa-readme"></i></p>
           <?php }
            ;?>
        </p>
        <p class="date"><?php echo get_the_date();?></p>
        <p class="author-link"><?php the_author_posts_link();?></p>
        <span class="comment-meta"><a href="<?php the_permalink();?>"><i class="fa fa-comment"></i> <?php comments_number();?></a></span>
    </div>

    <div class="post-meta">
        <h2 class="post-title"><a href="<?php the_permalink()?>"><?php the_title();?></a></h2>
        <!-- <?php the_excerpt();?> -->
        <p class="post-tag"><?php the_tags('Tags: ',' ');?></p>
        <p class="category"><?php the_category(' ');?></p>
    </div>
</div>
<!-- Post Section -->