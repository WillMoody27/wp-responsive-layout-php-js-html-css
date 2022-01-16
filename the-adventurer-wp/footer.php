<!-- Footer -->
    <!-- Recent Post After Post Displayed -->
    <h1 class="section-title">Other Great Posts</h1>
    <section class="post-home additional-posts">
      <?php 
      $other_posts = array(
        'posts_per_page' => 3,
        'offset' => 5 );


        $additional_posts = new WP_Query($other_posts);
        // Show 1 post per page
        if($additional_posts->have_posts()){
          while($additional_posts->have_posts()){
            $additional_posts->the_post();
            ;?>
              <!-- HTML Content of Featurd Post -->
              <?php get_template_part('template-parts/content', 'additional');
                // featured content template in template dir
                ;?>
              <?php
            }
            wp_reset_postdata();
          }
        ;?>
        </section>
      <footer>
        
        <!-- Social Widget -->
          <?php 
          if(get_theme_mod('set_social_feed_title-display') == 'Yes') { ;?>
           <h2 class="social-feed-title"><?php echo get_theme_mod('set_social_feed_title_text');?></h2>
         <?php };?>
        <div class="social-section">

          <div class="social-feed">
            <?php 
            if(is_active_sidebar('social-feed-1')){
              dynamic_sidebar( 'social-feed-1' );
            }
            ;?>
        </div>
      </div>
        <!-- Social Widget -->
        <!-- Recent Post After Post Displayed -->  
    </footer>
    <!-- Footer -->
    <!-- Copyright Section -->
    <div class="copyright-section">
      <!-- Dynamic Input -->
      <h5 class="copyright">&copy; <?php echo get_theme_mod('set_copyright');?></h5>
      <h5 class="created-by">Theme By WM Themes</h5>
    </div>
    <!-- Copyright Section -->
    <script src="./app.js"></script>
    <!-- Call Footer -->
    <?php wp_footer(); ?>
  </body>
</html>
