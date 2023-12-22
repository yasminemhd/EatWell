<?php get_header(); ?>

<a href="<?php the_permalink(); ?>"><?php the_title('<h2>', '</h2>'); ?></a>

<?php
while (have_posts()) : the_post();
?>
    <div>
        <h1><?php the_title(); ?></h1>
        <div><?php the_content(); ?></div>
    </div>
<?php endwhile; ?>

<?php get_footer(); ?>
