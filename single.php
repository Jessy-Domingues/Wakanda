<?php get_header();
?>

<main id="actu">

<!-- boucle wordpress -->
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>

<article>
<div class="titre">
<?php the_title()?>
</div>

<!-- affiche le contenu -->
<div class="contenu">
<?php the_content(); ?>
<!-- fin affiche le contenu -->

<span><?php the_author();?></span><br>
<span><?php the_time('j F, Y'); ?></span>
</div>
</article>
<?php endwhile; ?>
<?php endif; ?>

<!-- fin boucle wordpress -->

</main>

<?php get_footer(); ?>