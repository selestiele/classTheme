<?php
get_header();
?>
<main>

      <article>
            <?php 
            if (have_posts()) :
                  while (have_posts()) :
                        get_the_title();                  
                        the_post();
                        the_content();
                  endwhile;
            endif;  ?>
      </article>
        <div>
            <p>This is a div that's hard coded in the index.php file.</p>
            
          </div>
</main>
<?php
get_sidebar();
get_footer(); 
wp_footer();
?>