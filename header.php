<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title(); ?></title>
    <?php wp_head(); ?>
</head>
<body>

 <!-- Start Header -->
    <div class="topbar bg-brand-3 pt-15 pb-15 font-md">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 align-self-center">
                    <span class="date text-muted">Today: 4 November, 2025</span>
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
                        <a href="index-2.html">
                            <img class="light-mode" src="assets/imgs/theme/logo.svg" alt="flow">
                            <img class="darrk-mode" src="assets/imgs/theme/logo-white.svg" alt="flow">
                        </a>
                    </div>
                    <div class="main-nav d-none d-lg-block">
                        <nav>
                            <!--Desktop menu-->
                            <ul class="main-menu d-none d-lg-inline">
                                <li class="menu-item-has-children">
                                    <a href="index-2.html">Home</a>
                                    <ul class="sub-menu">
                                        <li><a href="index-2.html">Home default</a></li>
                                        <li><a href="home-2.html">Homepage 2</a></li>
                                        <li><a href="home-3.html">Homepage 3</a></li>
                                    </ul>
                                </li>
                                <li> <a href="page-about.html">About</a> </li>
                                <li class="menu-item-has-children">
                                    <a href="category.html">Blog</a>
                                    <ul class="sub-menu font-small">
                                        <li><a href="category-big.html">Categories Big</a></li>
                                        <li><a href="category-grid.html">Categories Grid</a></li>
                                        <li><a href="category-list.html">Categories List</a></li>
                                        <li><a href="category-list-2.html">Categories List 2</a></li>
                                        <li><a href="single.html">Blog single 1</a></li>
                                        <li><a href="single-2.html">Blog single 2</a></li>
                                        <li><a href="single-3.html">Blog single 3</a></li>
                                    </ul>
                                </li>
                                <li> <a href="page-design.html">Design</a> </li>
                                <li> <a href="page-contact.html">Contact</a> </li>
                            </ul>
                            <!--Mobile menu-->
                            <ul id="mobile-menu" class="d-block d-lg-none text-muted">
                                <li class="menu-item-has-children">
                                    <a href="index-2.html">Home</a>
                                    <ul class="sub-menu font-small">
                                        <li><a href="index-2.html">Home default</a></li>
                                        <li><a href="home-2.html">Homepage 2</a></li>
                                        <li><a href="home-3.html">Homepage 3</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children"><a href="#">Pages</a>
                                    <ul class="sub-menu font-small">
                                        <li><a href="page-about.html">About</a></li>
                                        <li><a href="page-contact.html">Contact</a></li>
                                        <li><a href="page-design.html">Typography</a></li>
                                        <li><a href="page-register.html">Register</a></li>
                                        <li><a href="page-login.html">Login</a></li>
                                        <li><a href="page-search.html">Search</a></li>
                                        <li><a href="page-author.html">Author</a></li>
                                        <li><a href="page-404.html">404 page</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children"><a href="#">Category</a>
                                    <ul class="sub-menu font-small">
                                        <li><a href="category-list.html">List layout</a></li>
                                        <li><a href="category-grid.html">Grid layout</a></li>
                                        <li><a href="category-list-2.html">List 2 layout</a></li>
                                        <li><a href="category-big.html">Big layout</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children"><a href="#">Single post</a>
                                    <ul class="sub-menu font-small">
                                        <li><a href="single.html">Default</a></li>
                                        <li><a href="single-2.html">Big image</a></li>
                                        <li><a href="single-3.html">Right sidebar</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <!--end: main-nav-->
                    <div class="header-right d-none d-lg-flex">
                        <div class="dark-light-mode">
                            <label for="switch" class="toggle dark-light-switcher">
                                <input type="checkbox" class="input" id="switch" />
                                <div class="icon icon--moon">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" width="20" height="20">
                                        <path fill-rule="evenodd" d="M9.528 1.718a.75.75 0 01.162.819A8.97 8.97 0 009 6a9 9 0 009 9 8.97 8.97 0 003.463-.69.75.75 0 01.981.98 10.503 10.503 0 01-9.694 6.46c-5.799 0-10.5-4.701-10.5-10.5 0-4.368 2.667-8.112 6.46-9.694a.75.75 0 01.818.162z" clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                                <div class="icon icon--sun">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" width="28" height="28">
                                        <path d="M12 2.25a.75.75 0 01.75.75v2.25a.75.75 0 01-1.5 0V3a.75.75 0 01.75-.75zM7.5 12a4.5 4.5 0 119 0 4.5 4.5 0 01-9 0zM18.894 6.166a.75.75 0 00-1.06-1.06l-1.591 1.59a.75.75 0 101.06 1.061l1.591-1.59zM21.75 12a.75.75 0 01-.75.75h-2.25a.75.75 0 010-1.5H21a.75.75 0 01.75.75zM17.834 18.894a.75.75 0 001.06-1.06l-1.59-1.591a.75.75 0 10-1.061 1.06l1.59 1.591zM12 18a.75.75 0 01.75.75V21a.75.75 0 01-1.5 0v-2.25A.75.75 0 0112 18zM7.758 17.303a.75.75 0 00-1.061-1.06l-1.591 1.59a.75.75 0 001.06 1.061l1.591-1.59zM6 12a.75.75 0 01-.75.75H3a.75.75 0 010-1.5h2.25A.75.75 0 016 12zM6.697 7.757a.75.75 0 001.06-1.06l-1.59-1.591a.75.75 0 00-1.061 1.06l1.59 1.591z"></path>
                                    </svg>
                                </div>
                            </label>
                        </div>

                        <button class="search-icon d-md-inline">
                            <svg width="49" height="47" viewBox="0 0 49 47" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M22.532 37.2083C31.3685 37.2083 38.532 30.1941 38.532 21.5417C38.532 12.8892 31.3685 5.875 22.532 5.875C13.6954 5.875 6.53198 12.8892 6.53198 21.5417C6.53198 30.1941 13.6954 37.2083 22.532 37.2083Z" stroke="#111111" stroke-width="5" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M42.532 41.125L33.832 32.6062" stroke="#111111" stroke-width="5" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </button>
                        <button class="btn btn-md bg-dark text-white changeless ml-15 box-shadow d-none d-lg-inline"><a href="https://themeforest.net/item/flow-html-personal-blog-template/30381120">Buy Now</a></button>
                    </div>
                </div>
                <div class="mobile_menu d-lg-none d-block"></div>
            </div>

        </div>
    </header>

