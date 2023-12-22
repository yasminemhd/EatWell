<?php get_header(); ?>

<body>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6 mb-4">
                <div class="text-center">
                    <div class="main-title">OBTENIR UNE CANTINE 2.0</div>
                    <div class="image-container">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Image 16.png" alt="Image 1" class="img-fluid">
                    </div>
                    <div class="button-overlay mt-3">
                        <a href="<?php echo home_url('/devis/'); ?>" class="custom-button btn btn-success">DEMANDE DE DEVIS</a>
                    </div>
                </div>
            </div>

            <div class="col-md-6 mb-4">
                <div class="text-center">
                    <div class="main-title">DES QUESTIONS ?</div>
                    <div class="image-container">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Image 89.png" alt="Image 2" class="img-fluid">
                    </div>
                    <div class="button-overlay mt-3">
                        <a href="<?php echo home_url('/formulaire/'); ?>" class="custom-button btn btn-success">CONTACTEZ-NOUS</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

<?php get_footer(); ?>
