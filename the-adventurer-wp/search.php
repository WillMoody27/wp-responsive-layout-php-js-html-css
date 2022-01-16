<?php get_header();?>
    <!-- Content -->
    <div class="content-area">
      <main>
        <!-- Single Post Section -->
        <section class="post-home">
            <!-- Search Form -> Vide Header.php -->
            <!-- Search Results -->
            <h2>Results for: <?php echo get_search_query();?></h2>
            <?php get_search_form();?>
            <?php 
                while(have_posts()){ 
                    the_post();    
                    get_template_part('template-parts/content', 'search');
                    ;?>
              <!-- COMMENTS -->
                <section class="comments-section">
                    <?php
                if(comments_open() || get_comments_number()){
                    // Call comments form -> setup file comments.php
                    comments_template();
                } ;?>
                </section>
              <!-- COMMENTS -->
            </section>
              <?php 
                }
                the_posts_pagination(
                    array(
                        'prev_text' => 'Previous', 
                        'next_text' => 'Next', 
                        'mid_size' => ''
                    )
                );
                ;?>
      </main>
    </div>
    <!-- Content -->
    <?php get_footer();?>
    