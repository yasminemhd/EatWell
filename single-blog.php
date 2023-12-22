<?php get_header(); ?>

<div class="container mt-5">
    <?php while (have_posts()) : the_post(); ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <h2><?php the_title(); ?></h2>
            <div class="post-content">
                <?php the_content(); ?>
            </div>
            <!-- Bouton de retour stylisé -->
            <a href="<?php echo home_url('blog'); ?>" class="btn btn-primary rounded-pill" style="background-color: #009245; color: #ffffff;">Retour au blog</a>
        </article>
    <?php endwhile; ?>
</div>

<?php get_footer(); ?>
