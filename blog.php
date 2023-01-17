<?php get_header();
//Template Name: Blog
?>

<main id="blog">

<div class="container">
<h2><?php the_title()?></h2>

<section id="allarticles">
<!-- affiche extraits d'article -->

<?php the_content(); ?>
</section>

</div>
</main>



<?php get_footer(); ?>