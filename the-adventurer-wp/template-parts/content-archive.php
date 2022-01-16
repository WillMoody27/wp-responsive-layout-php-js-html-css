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
                          <p class="date"><?php echo get_the_date();?></p>
                          <p class="author-link"><?php the_author_posts_link();?></p>
                          <p class="category"><?php the_category(' ');?></p>
                      </div>

                        <div class="post-meta">
                          <h2 class="post-title"><a href="<?php the_permalink()?>"><?php the_title();?></a></h2>
                          <!-- <?php the_excerpt();?> -->
                          <p class="post-tag"><?php the_tags('Tags: ',' ');?></p>
                      </div>
                  </div>
              <!-- Post Section -->