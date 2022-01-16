<?php get_header();?>
    <!-- Content -->
    <div class="content-area">
      <main>

      
          <!-- Archive Title & Details EDIT -->
          <div class="archive-details">
              <h1 class="archive-title"><?php the_archive_title();?></h1>
              <p class="archive-desc"><?php the_archive_description();?></p>
            </div>
            <!-- Archive Title & Details -->


        <!-- Post Section -->
        <section class="post-home">
            <?php 
            if(have_posts()){
                while(have_posts()){ 
                    the_post(); 
                    get_template_part('template-parts/content', 'archive');   
                 }
                } 
                ;?>
        </section>
        <!-- Paginate -->
        <div class="pagination">
          <?php echo paginate_links();?>
        </div>
        <!-- Paginate -->
        <!-- Form -->
        <!-- <?php get_template_part('template-parts/content', 'form');?> -->
        <!-- Form -->
      </main>
    </div>
    <!-- Content -->
    <?php get_footer();?>
    