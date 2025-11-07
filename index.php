<?php 
get_header();
?>


<main>
    <section class="featured-grid pt-65 pb-65">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="position-relative mb-md-30">
                        <div class="carausel-post-1 hover-up border-radius-10 overflow-hidden transition-normal position-relative wow .img-fadeIn animated">
                            <div class="slide-fade-2">

                            <?php 
                            $args = [
                                'orderby' => 'title',
                                'order'   => 'DESC',
                                'posts_per_page' => 2,
                                'post__not_in'            => get_option( 'sticky_posts' )
                            ];
                            $query = new WP_Query( $args );
                            if ( $query->have_posts() ) {
                                while ( $query->have_posts() ) {
                                    $query->the_post();
                                    ?>
                                    <div class="position-relative post-thumb">
                                        <?php if ( has_post_thumbnail() ) : ?>
                                            <div class="thumb-overlay position-relative" style="background-image: url(<?php the_post_thumbnail_url( 'full' ); ?>)">
                                        <?php else : ?>
                                            <div class="thumb-overlay position-relative" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/imgs/news/news-13.jpg)">
                                        <?php endif; ?>
                                                <a class="img-link" href="<?php the_permalink(); ?>"></a>
                                                <span class="top-right-icon bg-white"><i class="elegant-icon icon_ribbon_alt "></i></span>
                                                <div class="post-content-overlay text-white ml-30 mr-30 pb-30">
                                                    <div class="post-meta-1 mb-20">
                                                        <?php
                                                        $categories = get_the_category();
                                                        if ( ! empty( $categories ) ) {
                                                            $category = esc_html( $categories[0]->name );
                                                            $category_link = esc_url( get_category_link( $categories[0]->term_id ) );
                                                            echo '<a href="' . $category_link . '" class="tag-category bg-brand-1 shadown-1 text-dark button-shadow hover-up-3" tabindex="0">' . $category . '</a>';
                                                        }
                                                        ?>
                                                        <span class="post-date text-white changeless font-md"><?php echo get_the_date(); ?></span>
                                                    </div>
                                                    <h3 class="post-title">
                                                        <a class="text-white changeless" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                                    </h3>       
                                                </div>
                                            </div>
                                    </div>
                                    <?php   
                                }
                                wp_reset_postdata();
                            } else {
                                // No posts found
                            }   
                            ?>

                                <!-- <div class="position-relative post-thumb">
                                    <div class="thumb-overlay position-relative" style="background-image: url(assets/imgs/news/news-13.jpg)">
                                        <a class="img-link" href="single.html"></a>
                                        <span class="top-right-icon bg-white"><i class="elegant-icon icon_ribbon_alt "></i></span>
                                        <div class="post-content-overlay text-white ml-30 mr-30 pb-30">
                                            <div class="post-meta-1 mb-20">
                                                <a href="category.html" class="tag-category bg-brand-1 shadown-1 text-dark button-shadow hover-up-3" tabindex="0">Lifestyle</a>
                                                <span class="post-date text-white changeless font-md">September 15, 2025</span>
                                            </div>
                                            <h3 class="post-title">
                                                <a class="text-white changeless" href="single.html"> 30 Best Lifestyle Blogs to Follow in 2025</a>
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="position-relative post-thumb">
                                    <div class="thumb-overlay position-relative" style="background-image: url(assets/imgs/news/news-14.jpg)">
                                        <a class="img-link" href="single.html"></a>
                                        <span class="top-right-icon bg-white"><i class="elegant-icon icon_ribbon_alt "></i></span>
                                        <div class="post-content-overlay text-white ml-30 mr-30 pb-30">
                                            <div class="post-meta-1 mb-20">
                                                <a href="category.html" class="tag-category bg-success shadown-1 text-dark button-shadow hover-up-3" tabindex="0">Home Decor</a>
                                                <span class="post-date text-white changeless font-md">August 15, 2025</span>
                                            </div>
                                            <h3 class="post-title">
                                                <a class="text-white changeless" href="single.html">9 Things I Love About Shaving My Head During Quarantine</a>
                                            </h3>
                                        </div>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                        <div class="slide-fade-arrow-cover-2"></div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="row">
                        <?php 
                         $args = [
                                'orderby' => 'title',
                                'order'   => 'ASC',
                                'posts_per_page' => 4,
                                'post__not_in'            => get_option( 'sticky_posts' )
                            ];
                        $query = new WP_Query( $args );

                        if($query->have_posts()){
                            while($query->have_posts()){
                                $query->the_post();
                                ?>
                                <article class="col-lg-6 mb-30  mb-md-30">
                                    <div class="position-relative post-thumb border-radius-10 overflow-hidden hover-up-3">
                                        <?php if ( has_post_thumbnail() ) : ?>
                                            <div class="thumb-overlay position-relative" style="background-image: url(<?php the_post_thumbnail_url( 'full' ); ?>)">
                                        <?php else : ?>
                                            <div class="thumb-overlay position-relative" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/imgs/news/news-2.jpg)">
                                        <?php endif; ?>
                                                <a class="img-link" href="<?php the_permalink(); ?>"></a>
                                                <div class="post-content-overlay text-white ml-30 mr-30 pb-30">
                                                    <div class="post-meta-1 mb-20">
                                                        <?php
                                                        $categories = get_the_category();
                                                        if ( ! empty( $categories ) ) {
                                                            $category = esc_html( $categories[0]->name );
                                                            $category_link = esc_url( get_category_link( $categories[0]->term_id ) );
                                                            echo '<a href="' . $category_link . '" class="tag-category bg-success shadown-1 text-dark button-shadow hover-up-3" tabindex="0">' . $category . '</a>';
                                                        }
                                                        ?>
                                                    </div>
                                                    <h5 class="post-title">
                                                        <a class="text-white changeless" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                                    </h5>           
                                                </div>
                                            </div>
                                    </div>
                                </article>      
                                <?php
                            } 
                        }

                        ?>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php
get_footer();
?>