<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <?php wp_head(); ?>
    <title><?php wp_title(); ?></title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/app.css">
</head>

<body <?php body_class(); ?>>

    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="<?php echo home_url('/'); ?>">
                <img
                    src="<?php echo get_template_directory_uri(); ?>/assets/img/logoeatwell.png"
                    alt="Logo"
                    width="140"
                    height="75"
                    class="d-inline-block align-text-top"
                />
            </a>
            <button
                class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarToggler"
                aria-controls="navbarToggler"
                aria-expanded="false"
                aria-label="Toggle navigation">

                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarToggler">
                <?php
                wp_nav_menu([
                    'theme_location' => 'header',
                    'container' => false,
                    'menu_class' => 'navbar-nav me-auto'
                ]);
                ?>

                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a href="<?php echo home_url('/login/'); ?>">
                            <button class="btn btn-outline-success" type="submit">
                                Mon compte
                            </button>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo home_url('/nous-contacter/'); ?>">
                            <button class="btn btn-outline-danger" type="submit">
                                Nous contacter
                            </button>
                        </a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>

    <?php wp_body_open(); ?>
