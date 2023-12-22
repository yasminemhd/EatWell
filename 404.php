<?php get_header(); ?>

<div class="error-container">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/erreur404.jpg" alt="frigo-eatwell" class="img-fluid">
    <a href="<?php echo home_url('/'); ?>">
        <button class="btn btn-outline-dark" type="submit" style="position: absolute; bottom: 10px; left: 50%; transform: translateX(-50%);">
            Page d'accueil
        </button>
    </a>
</div>

<?php get_footer(); ?>
