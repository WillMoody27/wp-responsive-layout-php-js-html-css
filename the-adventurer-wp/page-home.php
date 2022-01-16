<?php get_header();?>
    <!-- Content -->
    <div class="content-area">
      <h1 class="section-title">Featured</h1>
      <main>
        <!-- Post Section -->
        <section class="post-home-featured">
            <!-- WP Query - Featured -->
           <!-- Method draws in featured content -> array-->
            <?php 
              $featured = new WP_Query('post_type=post&posts_per_page=1');
              // Show 1 post per page
              if($featured->have_posts()){
                while($featured->have_posts()){
                  $featured->the_post();
                  ;?>
                  <!-- HTML Content of Featurd Post -->
                  <div class="featured-post">
                    <?php get_template_part('template-parts/content', 'featured');
                    // featured content template in template dir
                    ;?>
                  </div>
                  <?php
                }
                wp_reset_postdata();
              }
            ;?>
        <!-- Post Section -->
          <!-- WP Query - Featured -->
      </section>
        <section class="post-home secondary-section">
          <!-- Dynamically Draw in this Content using WP Queries -->
          <!-- WP Query - Featured -->
           <!-- Method draws in featured content -> array-->
           <div class="secondary-content">

             <?php 
            $secondary_args = array(
              'post_type' => 'post', 
              'posts_per_page' => 4,
              'offset' => 1
              
            );
            $secondary = new WP_Query($secondary_args);
            // Show 1 post per page
            if($secondary->have_posts()){
              while($secondary->have_posts()){
                $secondary->the_post();
                ;?>
                  <!-- HTML Content of Featurd Post -->
                  <?php get_template_part('template-parts/content', 'secondary');
                    // featured content template in template dir
                    ;?>
                  <?php
                }
                wp_reset_postdata();
              }
              ;?>
            <!-- WP Query - Featured -->
            <!-- Dynamically Draw in this Content using WP Queries -->
            <!-- Post Section -->
          </div>
        <!-- Sidebar -->
        <aside class="sidebar-section">
          <?php get_template_part('template-parts/sidebar','about');?>
          <?php get_sidebar('sidebar-1');?>
        </aside>
        <!-- Sidebar -->
      </section>
    </div>
  </main>
    <!-- Content -->
    <?php get_footer();?>
    