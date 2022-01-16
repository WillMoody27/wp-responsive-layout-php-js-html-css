<?php 
/*
 Template Name: General Page Template - Form
 */ 
;?>

<?php get_header();?>
    <!-- Content -->
    <div class="content-area">
      <main>
          <!-- Page Content -->
<!-- Post Section -->
        <section class="top-page-setup">
            <div class="page-container">
                    <?php 
            if(have_posts()){
                while(have_posts()){ 
                    the_post();    
                    ;?>
                <div class="page-content">
                    <h2 class="page-title"><?php the_title();?></h2>
                    <?php the_content();?>
                </div>
                <?php }
            }
            ;?>
            </div>
        </section>
        <!-- Post Section -->
        <!-- Form -->
        <?php get_template_part('template-parts/content','form');?>
        <!-- Form -->
      </main>
    </div>
    <!-- Content -->
    <?php get_footer();?>
    