<?php get_header(); ?>



<?php
$blog = new WP_Query([
    'post_type' => 'blog',
    'post_status' => 'publish',
    'posts_per_page' => 6,  
    'orderby' => 'date',
    'order' => 'ASC',  
]);

if ($blog->have_posts()):
?>

<div class="row">
<h1> BLOG </h1>
    <?php while ($blog->have_posts()) : $blog->the_post(); ?>
        <div class="col-lg-4 col-md-6">
            <div class="card">
                <a href="<?php the_permalink(); ?>">
                    <img src="<?php the_post_thumbnail_url(); ?>" class="card-img-top" alt="<?php the_title(); ?> | blog | <?php echo bloginfo('name'); ?>">
                </a>
                <div class="card-body">
                    <h3 class="card-title h5"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                    <p class="card-text"><?php the_excerpt(); ?></p>
                </div>
            </div>
        </div>
    <?php endwhile; ?>
</div>

<?php else: ?>
    <h5>Pas encore d'articles mais ça arrive ! !</h5>
<?php endif; ?>

<?php get_footer(); ?>