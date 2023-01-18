<!DOCTYPE html>
<head <?php language_attributes(); ?>>
<meta charset="<?php bloginfo('charset'); ?>">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="icon" type="image/png" href="https://jessy-domingues.fr/wp-content/uploads/2023/01/icons8-masque-panthere-noire-32-1.png" />
<title><?php the_title(); ?> </title>

<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
<header>
    <!-- Template Name: 404 -->
</header>
<div class='top404'>
    <h1>Erreur 404</h1>
    <h2>La page que vous cherchez n'existe pas</h2>
</div>
<div class='home'>
<?php
wp_nav_menu(array(
'menu' => '404',
'container' => 'nav'
));
?>
</div>
</body>
</html>