<?php if ( is_page('contact') ) :
    get_header('scd_header');   
else :
    get_header();
endif; ?>
<!-- //Template name: contact -->
<?php the_content(); ?>

<?php get_footer(); ?>