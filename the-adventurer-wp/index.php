<?php get_header();?>
<!-- Content -->
<div class="content-area">
  <!-- Section Title -->
  <h1 class="section-title">Newest Post</h1>
  <!-- Section Title -->
  <main class="blog-posts">
    <!-- Post Section -->
    <section class="post-home">
      <?php 
            if(have_posts()){
                while(have_posts()){ 
                    the_post();   
                    get_template_part('template-parts/content');
                   }
                } ;?>
      <!-- Paginate -->
      <?php get_template_part('template-parts/paginate','blog');?>
      <!-- Paginate -->
    </section>
    <!-- // Post Section -->
    <!-- Sidebar -->
    <aside class="sidebar-section">
      <?php get_template_part('template-parts/sidebar','about');?>
      <?php get_sidebar('sidebar-1');?>
    </aside>
    <!-- Sidebar -->
  </main>
  <!-- Post Section -->
</div>
<!-- Content -->
<?php get_footer();?>
