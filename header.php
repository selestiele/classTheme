<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>
     <?php wp_head(); ?>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <title>Liz Bank - Web Technologies</title>
</head>
<body>
<header>
    <?php wp_nav_menu( array(
         'menu' => 'social',
         'container' => 'nav',
         'container_class' => 'social-nav',
         'before' => '',
         'link_before' => '<span class="sr-text">',
         'link_after' => '</span>'
    )); ?>
    
    <h1>Welcome to my site!</h1>
     
    <?php wp_nav_menu( array(
         'container' => 'nav',
         'container_class' => 'main-nav'
    ));     ?>


</header>

     
