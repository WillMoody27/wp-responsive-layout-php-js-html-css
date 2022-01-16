 <!-- Post Section -->
                <!--  -->
                <div <?php post_class(array('class' => 'featured'));?>>
                    <!-- Post Thumbnails -->
                    <div class="post-image">
                        <a href="<?php the_permalink()?>"><?php the_post_thumbnail('full');?></a>
                    </div>
                    <!-- Post Thumbnails -->
                    <!-- Category and other content -->
                    <div class="post-details">
                        <p class="date"><?php echo get_the_date();?></p>
                        <p class="author-link"><?php the_author_posts_link();?></p>
                        <span class="comment-meta"><a href="<?php the_permalink();?>"><i class="fa fa-comment"></i> <?php comments_number();?></a></span>
                    </div>
                    <div class="post-meta">
                        <h2 class="post-title"><a href="<?php the_permalink()?>"><?php the_title();?></a></h2>
                        <!-- <?php the_excerpt();?> -->
                        <!-- <a class="read-more-btn" href="<?php the_permalink()?>">Read More &raquo;</a> -->
                        <p class="post-tag"><?php the_tags('Tags: ',' ');?></p>
                        <p class="category"><i class="fas fa-list"></i> <?php the_category(' ');?></p>
                    </div>
                </div>
                <!--  -->
<!-- Post Section -->