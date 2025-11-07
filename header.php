<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title(); ?></title>
    <?php wp_head(); ?>
</head>
<body>

       <div class="topbar bg-brand-3 pt-15 pb-15 font-md">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 align-self-center">
                    <!-- <span class="date text-muted">Today: 4 November, 2025</span> -->
                    <span class="date text-muted">Today: <?php echo esc_html(wp_date('d F Y', ));  ?></span>
                </div>
                <div class="col-sm-6 text-right align-self-center">
                    <ul class="social-network d-inline-block list-inline  mb-0 float-right">
                        <li class="list-inline-item"><a href="#" target="_blank" title="Facebook"><i class="elegant-icon social_facebook"></i></a></li>
                        <li class="list-inline-item"><a href="#" target="_blank" title="Tweet now"><i class="elegant-icon social_twitter"></i></a></li>
                        <li class="list-inline-item"><a href="#" target="_blank" title="Pin it"><i class="elegant-icon social_pinterest"></i></a></li>
                        <li class="list-inline-item"><a href="#" target="_blank" title="Pin it"><i class="elegant-icon social_skype"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

        <header class="main-header header-sticky header-fluid">
        <div class="position-relative">
            <div class="container-fluid align-self-center">
                <div class="header-style-1 header-style-2">
                    <div class="logo">
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                             <?php 
                                if ( function_exists( 'the_custom_logo' ) ) {
                                    the_custom_logo();
                                }
                             ?>
                            
                        </a>
                    </div>
                    <div class="main-nav d-none d-lg-block">
                        <nav>
                            <?php 
                             $args = [
                            'theme_location' => 'primary_menu',
                            'menu_class'     => 'main-menu d-none d-lg-inline',
                            'container'      => false,
                            'fallback_cb'    => false,
                            'depth'          => 3,
                       ];
                       
                       wp_nav_menu( $args ); ?>
                            <!--Desktop menu-->
                        </nav>
                    </div>
                    <!--end: main-nav-->
 

        </div>
    </header>