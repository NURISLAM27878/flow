<?php 
get_header();
?>
<main>

        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="container single-content">


                        <?php 
                            if(have_posts()){
                                while(have_posts()){
                                    the_post();
                                    get_template_part('templates/single/single', get_post_format());
                                }
                            }
                        ?>
                    </div>
                </div>
                <!--End: col-lg-8 -->
                <div class="col-lg-4 primary-sidebar sticky-sidebar">
                    <div class="widget-area pt-65">
                        <div class="sidebar-widget widget-latest-posts mb-50 wow fadeIn animated">
                            <div class="widget-header-1 position-relative mb-30">
                                <h5 class="mt-5 mb-30 font-heading">Most popular</h5>
                            </div>
                            <div class="post-block-list post-module-1">
                                <ul class="list-post">
                                    <li class="wow fadeIn animated">
                                        <div class="d-flex latest-small-thumb">
                                            <div class="post-thumb d-flex mr-15 border-radius-10 img-hover-scale overflow-hidden">
                                                <a class="color-white" href="single.html" tabindex="0">
                                                    <img src="assets/imgs/news/thumb-11.jpg" alt="flow">
                                                </a>
                                            </div>
                                            <div class="post-content media-body align-self-center">
                                                <h5 class="post-title mb-15 text-limit-3-row font-medium">
                                                    <a href="single.html" tabindex="0">9 Things I Love About Shaving My Head During Quarantine</a>
                                                </h5>
                                                <div class="entry-meta meta-1 float-left font-sm">
                                                    <span class="post-on has-dot">September 15, 2025</span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="wow fadeIn animated">
                                        <div class="d-flex latest-small-thumb">
                                            <div class="post-thumb d-flex mr-15 border-radius-10 img-hover-scale overflow-hidden">
                                                <a class="color-white" href="single.html" tabindex="0">
                                                    <img src="assets/imgs/news/thumb-12.jpg" alt="flow">
                                                </a>
                                            </div>
                                            <div class="post-content media-body align-self-center">
                                                <h5 class="post-title mb-15 text-limit-3-row font-medium">
                                                    <a href="single.html" tabindex="0">Where to Score the Best Travel Deals on Cyber Monday</a>
                                                </h5>
                                                <div class="entry-meta meta-1 float-left font-sm">
                                                    <span class="post-on has-dot">November 12, 2025</span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="wow fadeIn animated">
                                        <div class="d-flex latest-small-thumb">
                                            <div class="post-thumb d-flex mr-15 border-radius-10 img-hover-scale overflow-hidden">
                                                <a class="color-white" href="single.html" tabindex="0">
                                                    <img src="assets/imgs/news/thumb-13.jpg" alt="flow">
                                                </a>
                                            </div>
                                            <div class="post-content media-body align-self-center">
                                                <h5 class="post-title mb-15 text-limit-3-row font-medium">
                                                    <a href="single.html" tabindex="0">5 Kinds of Food-Shamers You Will Encounter (and How to Deal)</a>
                                                </h5>
                                                <div class="entry-meta meta-1 float-left font-sm">
                                                    <span class="post-on has-dot">April 10, 2025</span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="wow fadeIn animated">
                                        <div class="d-flex latest-small-thumb">
                                            <div class="post-thumb d-flex mr-15 border-radius-10 img-hover-scale overflow-hidden">
                                                <a class="color-white" href="single.html" tabindex="0">
                                                    <img src="assets/imgs/news/thumb-4.jpg" alt="flow">
                                                </a>
                                            </div>
                                            <div class="post-content media-body align-self-center">
                                                <h5 class="post-title mb-15 text-limit-3-row font-medium">
                                                    <a href="single.html" tabindex="0">12 Best Books to Read at the Beach (or Anywhere) This Summer</a>
                                                </h5>
                                                <div class="entry-meta meta-1 float-left font-sm">
                                                    <span class="post-on has-dot">June 15, 2025</span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="sidebar-widget widget_instagram wow fadeIn animated">
                            <div class="widget-header-1 position-relative mb-30">
                                <h5 class="mt-5 mb-30 font-heading">Gallery</h5>
                            </div>
                            <div class="instagram-gellay">
                                <ul class="insta-feed">
                                    <li>
                                        <a href="assets/imgs/thumbnail-3.html" class="play-video" data-animate="zoomIn" data-duration="1.5s" data-delay="0.1s"><img class="border-radius-10" src="assets/imgs/news/thumb-1.jpg" alt="flow"></a>
                                    </li>
                                    <li>
                                        <a href="assets/imgs/thumbnail-4.html" class="play-video" data-animate="zoomIn" data-duration="1.5s" data-delay="0.1s"><img class="border-radius-10" src="assets/imgs/news/thumb-2.jpg" alt="flow"></a>
                                    </li>
                                    <li>
                                        <a href="assets/imgs/thumbnail-5.html" class="play-video" data-animate="zoomIn" data-duration="1.5s" data-delay="0.1s"><img class="border-radius-10" src="assets/imgs/news/thumb-3.jpg" alt="flow"></a>
                                    </li>
                                    <li>
                                        <a href="assets/imgs/thumbnail-3.html" class="play-video" data-animate="zoomIn" data-duration="1.5s" data-delay="0.1s"><img class="border-radius-10" src="assets/imgs/news/thumb-4.jpg" alt="flow"></a>
                                    </li>
                                    <li>
                                        <a href="assets/imgs/thumbnail-4.html" class="play-video" data-animate="zoomIn" data-duration="1.5s" data-delay="0.1s"><img class="border-radius-10" src="assets/imgs/news/thumb-5.jpg" alt="flow"></a>
                                    </li>
                                    <li>
                                        <a href="assets/imgs/thumbnail-5.html" class="play-video" data-animate="zoomIn" data-duration="1.5s" data-delay="0.1s"><img class="border-radius-10" src="assets/imgs/news/thumb-6.jpg" alt="flow"></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

</main>



<?php 
get_footer();
?>