<?php get_header();?>
    <!-- Content -->
    <div class="content-area">
      <main>
        <!-- Post Section -->
        <section class="error-404">
            <h1>Page not found</h1>
            <p>Unfortunately, the page you tried to reach does not exist on this site...</p>
        </section>
        <!-- Searchform Assist -->
        <?php get_search_form();?>
        <!-- Post Section -->
        <?php the_widget('WP_Widget_Recent_Posts', 
            array(
              'title' => 'Latest Posts',
              'number' => 3
            ) 
          );
        ;?>
        
        <?php get_template_part('template-parts/content', 'form');?>
      </main>
    </div>
    <!-- Content -->
    <?php get_footer();?>
    