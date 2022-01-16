<?php get_header();?>
    <!-- Content -->
    <div class="content-area">
      <main>
        <!-- Single Post Section -->
        <section class="post-home single-post">
            <?php 
            if(have_posts()){
                while(have_posts()){ 
                    the_post();    
                    get_template_part('template-parts/content', 'single');
                ;?>
                <!-- Single Post Pagination -->
                <div class="paginate-row">
                  <?php 
                    get_template_part('template-parts/paginate', 'single');
                  ?>
                </div>
                <!-- Single Post Pagination -->
              <!-- COMMENTS -->
                <section class="comments-section">
                    <?php
                if(comments_open() || get_comments_number()){
                    // Call comments form -> setup file comments.php
                    comments_template();
                } ;?>
                </section>
              <!-- COMMENTS -->
                <?php }
                } 
                ;?>
            </section>

        <!-- Single Post Section -->
      </main>
    </div>
    <!-- Content -->
    <?php get_footer();?>
    