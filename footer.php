<?php  ?>
<footer>
    <?php wp_nav_menu( array(
         'menu' => 'footer',
         'container' => 'nav',
         'container_class' => 'footer-nav',
         'before' => '',
    )); ?>
    
    <p>Copyright <?php echo date('Y') ?> Elizabeth Bank</p>
</footer>
</body>
</html>