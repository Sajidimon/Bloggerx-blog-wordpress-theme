<?php get_header(); ?>

<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                <div class="page-wrapper">

                    <div class="blog-list clearfix">

                        <?php
                        while (have_posts()) :
                            the_post();

                        ?>

                        <div <?php post_class('blog-box row'); ?>>
                            <div class="col-md-4">
                                <div class="post-media">
                                    <a href="<?php the_permalink(); ?>" title="">
                                        <img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>"
                                            class="img-fluid">
                                        <div class="hovereffect"></div>
                                    </a>
                                </div><!-- end media -->
                            </div><!-- end col -->

                            <div class="blog-meta big-meta col-md-8">
                                <h4><a href="<?php the_permalink(); ?>" title=""><?php the_title(); ?></a></h4>
                                <p>
                                    <?php the_excerpt(); ?>
                                </p>
                                <small class="firstsmall"><?php the_category(' '); ?></small>
                                <small><?php echo get_the_date(); ?></small>
                                <small><?php the_author(); ?></small>
                            </div><!-- end meta -->
                        </div><!-- end blog-box -->

                        <hr class="invis">

                        <?php endwhile; ?>

                    </div><!-- end blog-list -->
                </div><!-- end page-wrapper -->

                <hr class="invis">

                <div class="row">
                    <div class="col-md-12">
                        <nav aria-label="Page navigation">

                            <?php bloggerx_pagination(); ?>

                        </nav>

                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end col -->

            <?php get_sidebar(); ?>
        </div><!-- end row -->
    </div><!-- end container -->
</section>

<?php get_footer(); ?>