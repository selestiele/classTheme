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
         'container' => 'nav',
         'container-class' => 'social-nav',
         'before' => '',
         'after' => '',
    )); ?>
    
    <h1>Welcome to my site!</h1>
     
    <?php wp_nav_menu( array(
          'container' => 'nav',
          'container-class' => 'main-nav',
          'before' => '',
          'after' => '',
     ));     ?>
<!--     <nav>
          <ul>
               <li><a href="<?php home_url(); ?>">Home</a></li>
               <li><a href="#">About</a></li>
               <li><a href="#">Class</a></li>
          </ul>
     </nav>-->

</header>

     
