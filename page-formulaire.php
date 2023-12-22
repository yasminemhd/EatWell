<?php get_header(); ?>

<div class="container">
    <?php while (have_posts()) : the_post(); ?>
        <div class="form-formulaire">
            <h1><?php the_title(); ?></h1>
            <div><?php the_content(); ?></div>
        </div>
    <?php endwhile; ?>
</div>

<?php get_footer(); ?>
