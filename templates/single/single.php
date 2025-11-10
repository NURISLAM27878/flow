
<div class="entry-header entry-header-style-1 mb-50 pt-65">
    <div class="post-meta-1 mb-20">
        <?php
            $categories = get_the_category();
            if ( ! empty( $categories ) ) {
                $category = esc_html( $categories[0]->name );
                $category_link = esc_url( get_category_link( $categories[0]->term_id ) );
                echo '<a href="' . $category_link . '" class="tag-category bg-brand-1 shadown-1 text-dark button-shadow hover-up-3" tabindex="0">' . $category . '</a>';
            }
        ?>
        <span class="post-date text-muted font-md"><?php echo get_the_date(); ?></span>
    </div>
    <h1 class="entry-title mb-50 fw-700">
        <?php 
            echo the_title();
        ?>
    </h1>
    <div class="row align-self-center">
        <div class="col-md-6">
            <div class="post-meta-2 font-md d-flext align-self-center mb-md-30">
                <a href="page-author.html" tabindex="0">
                    <?php echo get_avatar( get_the_author_meta( 'ID' ), 32 ); ?>
                    <span class="author-namge"><?php the_author(); ?></span>
                </a>
                <span class="time-to-read has-dot">
                    <?php 
                     function reading_time() {
                        get_the_ID();
                        global $post;

                        $content = get_post_field( 'post_content', $post->ID );
                        $word_count = str_word_count( strip_tags( $content ) );
                        $readingtime = ceil($word_count / 200);

                        return $readingtime;
                        }

                        $readingtimeresult = reading_time();
                        echo $readingtimeresult . ' min read';
                    ?>
                </span>
            </div>
        </div>
        <div class="col-md-6 text-right d-none d-md-inline">
            <div class="single-social-share clearfix wow fadeIn animated font-sm">
                <div class="entry-meta meta-1 font-small color-grey float-left mt-10">
                    <span class="hit-count mr-15"><i class="elegant-icon icon_comment_alt mr-5"></i>182 comments</span>
                    <span class="hit-count mr-15"><i class="elegant-icon icon_like mr-5"></i>268 likes</span>
                    <span class="hit-count"><i class="elegant-icon icon_star-half_alt mr-5"></i>Rate: 9/10</span>
                </div>
            </div>
        </div>
    </div>
</div>
                        <figure class="image mb-30 m-auto text-center border-radius-10 hover-up-3">
                        
                            <?php 
                            the_post_thumbnail(
                                'full',
                                array(
                                    'class' => 'border-radius-10',
                                    'alt'   => get_the_title(),
                                )   
                            );
                            ?>
                        </figure>

                        <div class="border-radius-10 border bg-white mb-30 p-65 wow fadeIn animated text-center">
                            <h4 class="mb-0 mt-0">Become a member</h4>
                            <p class="font-md text-grey-400">Get the latest news right in your inbox. We never spam!</p>
                            <form class="mt-30 d-flex wow fadeIn  animated" style="visibility: visible; animation-name: fadeIn;">
                                <input type="email" class="form-control mr-15" placeholder="Enter your email">
                                <button type="submit" class="btn btn-lg bg-primary text-white d-inline-block">Subscribe</button>
                            </form>
                        </div>






                            <div class="entry-bottom mt-50 mb-30 wow fadeIn animated">
                                <div class="tags w-50 w-sm-100">
                                    <h5 class="mb-15">Tags: </h5>
                                    <?php
                                        $posttags = get_the_tags();
                                        if ($posttags) {
                                            foreach($posttags as $tag) {
                                                ?>
                                                    <a href="<?php echo get_tag_link( $tag->term_id ); ?>" rel="tag" class="hover-up-3"><?php echo $tag->name; ?></a>
                                                <?
                                                
                                            }
                                        }else {
                                            echo 'No tags found.';
                                        }
                                    ?>
                                </div>
                                <div class="single-social-share clearfix wow fadeIn animated mb-15 w-50 w-sm-100">
                                    <ul class="header-social-network d-inline-block list-inline float-md-right mt-md-0 mt-4">
                                        <li class="list-inline-item text-muted"><span>Share this: </span></li>
                                        <li class="list-inline-item"><a class="social-icon fb text-xs-center" target="_blank" href="#"><i class="elegant-icon social_facebook"></i></a></li>
                                        <li class="list-inline-item"><a class="social-icon tw text-xs-center" target="_blank" href="#"><i class="elegant-icon social_twitter "></i></a></li>
                                        <li class="list-inline-item"><a class="social-icon pt text-xs-center" target="_blank" href="#"><i class="elegant-icon social_pinterest "></i></a></li>
                                    </ul>
                                </div>
                            </div>

                                                        <div class="author-bio mt-50 border-radius-10 bg-white wow fadeIn animated">
                                <div class="author-image mb-md-30">
                                    <a href="#">
                                        <?php
echo get_avatar( get_the_author_meta( 'ID' ), $size = '60', $default = '', $alt = '', $args = array( 'class' => 'avater' ) ); 
?>
                                    </a>
                                </div>
                                <div class="author-info">
                                    <h4 class="font-weight-bold mb-20"><span class="vcard author"><span class="fn"><a href="#" title="Posted by Barbara Cartland" rel="author"><?php the_author(); ?></a></span></span>
                                    </h4>
                                    <div class="author-description text-muted">You should write because you love the shape of Flow and sentences and the creation of different words on a page. </div>
                                    <h6 class="text-grey-400">Social Media</h6>
                                    <div class="author-social-small">
                                        <ul class="author-social-icons">
                                            <li class="author-social-link-facebook"><a href="#" target="_blank"><i class="elegant-icon social_facebook"></i></a></li>
                                            <li class="author-social-link-twitter"><a href="#" target="_blank"><i class="elegant-icon social_twitter "></i></a></li>
                                            <li class="author-social-link-pinterest"><a href="#" target="_blank"><i class="elegant-icon  social_pinterest "></i></a></li>
                                            <li class="author-social-link-instagram"><a href="#" target="_blank"><i class="elegant-icon social_instagram "></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                                                        <div class="comments-area wow fadeIn animated">
                                <div class="widget-header-2 position-relative mb-30">
                                    <h3 class="mt-5 mb-30 font-heading">Comments</h3>
                                </div>
                                <div class="comment-list wow fadeIn animated">
                                    <div class="single-comment justify-content-between d-flex">
                                        <div class="user justify-content-between d-flex">
                                            <div class="thumb">
                                                <img src="assets/imgs/authors/author-4.jpg" alt="flow">
                                            </div>
                                            <div class="desc">
                                                <p class="comment">
                                                    Vestibulum euismod, leo eget varius gravida, eros enim interdum urna, non rutrum enim ante quis metus. Duis porta ornare nulla ut bibendum
                                                </p>
                                                <div class="d-flex justify-content-between">
                                                    <div class="d-flex align-items-center">
                                                        <h5>
                                                            <a href="#">Rosie</a>
                                                        </h5>
                                                        <p class="date">6 minutes ago </p>
                                                    </div>
                                                    <div class="reply-btn">
                                                        <a href="#" class="btn-reply">Reply</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="comment-list wow fadeIn animated">
                                    <div class="single-comment justify-content-between d-flex">
                                        <div class="user justify-content-between d-flex">
                                            <div class="thumb">
                                                <img src="assets/imgs/authors/author-2.jpg" alt="flow">
                                            </div>
                                            <div class="desc">
                                                <p class="comment">
                                                    Sed ac lorem felis. Ut in odio lorem. Quisque magna dui, maximus ut commodo sed, vestibulum ac nibh. Aenean a tortor in sem tempus auctor
                                                </p>
                                                <div class="d-flex justify-content-between">
                                                    <div class="d-flex align-items-center">
                                                        <h5>
                                                            <a href="#">Agatha Christie</a>
                                                        </h5>
                                                        <p class="date">December 4, 2020 at 3:12 pm </p>
                                                    </div>
                                                    <div class="reply-btn">
                                                        <a href="#" class="btn-reply">Reply</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single-comment depth-2 justify-content-between d-flex mt-50">
                                        <div class="user justify-content-between d-flex">
                                            <div class="thumb">
                                                <img src="assets/imgs/authors/author.jpg" alt="flow">
                                            </div>
                                            <div class="desc">
                                                <p class="comment">
                                                    Sed ac lorem felis. Ut in odio lorem. Quisque magna dui, maximus ut commodo sed, vestibulum ac nibh. Aenean a tortor in sem tempus auctor
                                                </p>
                                                <div class="d-flex justify-content-between">
                                                    <div class="d-flex align-items-center">
                                                        <h5>
                                                            <a href="#">Steven</a>
                                                        </h5>
                                                        <p class="date">December 4, 2020 at 3:12 pm </p>
                                                    </div>
                                                    <div class="reply-btn">
                                                        <a href="#" class="btn-reply">Reply</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="comment-list wow fadeIn animated">
                                    <div class="single-comment justify-content-between d-flex">
                                        <div class="user justify-content-between d-flex">
                                            <div class="thumb">
                                                <img src="assets/imgs/authors/author-3.jpg" alt="flow">
                                            </div>
                                            <div class="desc">
                                                <p class="comment">
                                                    Donec in ullamcorper quam. Aenean vel nibh eu magna gravida fermentum. Praesent eget nisi pulvinar, sollicitudin eros vitae, tristique odio.
                                                </p>
                                                <div class="d-flex justify-content-between">
                                                    <div class="d-flex align-items-center">
                                                        <h5>
                                                            <a href="#">Danielle Steel</a>
                                                        </h5>
                                                        <p class="date">December 4, 2020 at 3:12 pm </p>
                                                    </div>
                                                    <div class="reply-btn">
                                                        <a href="#" class="btn-reply">Reply</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>