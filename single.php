<?php
the_post();
get_header();
?>

<section class="section single-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                <div class="page-wrapper">
                    <div class="blog-title-area text-center">

                        <span class="color-orange"><?php the_category(' '); ?></span>

                        <h3><?php the_title(); ?></h3>

                        <div class="blog-meta big-meta">
                            <small><?php echo get_the_date(); ?></small>
                            <small><?php the_author(); ?></small>
                        </div><!-- end meta -->
                        
                    </div><!-- end title -->

                    <div class="single-post-media">
                        <img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>"
                            class="img-fluid">
                    </div><!-- end media -->

                    <div class="blog-content">
                        <div class="pp">
                            <p>
                                <?php the_content(); ?>
                                <?php wp_link_pages(); ?>
                            </p>
                        </div><!-- end pp -->
                    </div><!-- end content -->

                    <div class="blog-title-area">
                        <?php

                        if (has_tag()) { ?>

                        <div class="tag-cloud-single">
                            <span><?php _e('Tags', 'bloggerx'); ?></span>
                            <small><?php the_tags(' '); ?></small>
                        </div><!-- end meta -->

                        <?php }

                        ?>

                    </div><!-- end title -->

                    <hr class="invis1">

                    <div class="custombox authorbox clearfix">
                        <h4 class="small-title"><?php __('About author', 'bloggerx'); ?></h4>
                        <div class="row">
                            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                <?php echo get_avatar(get_the_author_meta("ID")); ?>
                            </div><!-- end col -->

                            <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
                                <h4><?php the_author(); ?></h4>
                                <p><?php the_author_meta("description"); ?></p>

                            </div><!-- end col -->
                        </div><!-- end row -->
                    </div><!-- end author-box -->

                    <hr class="invis1">

                    <?php
                    if (!post_password_required()) {
                        comments_template();
                    }
                    ?>

                </div><!-- end page-wrapper -->
            </div><!-- end col -->

            <?php get_sidebar(); ?>
        </div><!-- end row -->
    </div><!-- end container -->
</section>
<?php get_footer();