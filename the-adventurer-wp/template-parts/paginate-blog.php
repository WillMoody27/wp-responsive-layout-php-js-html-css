      <!-- Paginate -->
        <div class="pagination-general">
            <?php 
                the_posts_pagination(
                    array(
                        'prev_text' => 'Previous', 
                        'next_text' => 'Next', 
                        'mid_size' => ''
                    )
                );
                ;?>
        </div>
    <!-- Paginate -->