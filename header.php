<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<!-- Basic -->
<meta charset="<?php bloginfo('charset'); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge">

<!-- Mobile Metas -->
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!-- Site Metas -->
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="author" content="">

<?php wp_head(); ?>

</head>
<?php wp_body_open(); ?>
<body <?php body_class(); ?>>

    <div id="wrapper">
        <header class="tech-header header">
            <div class="container-fluid">
                <nav class="navbar navbar-toggleable-md navbar-inverse fixed-top bg-inverse">
                    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <a class="navbar-brand" href="<?php echo site_url(); ?>">
                        <?php if(has_custom_logo()){
                                the_custom_logo();
                        }   
                        ?>
                    </a>
                    <div class="collapse navbar-collapse" id="navbarCollapse">
                        
                        <?php

                        wp_nav_menu(
                            array(
                                'theme_location'        => 'top-menu',
                                'menu_class'            => 'navbar-nav mr-auto',
                                'menu_id'               => ' ',
                                'container_class'       => '',
                                'fallback_cb'           => 'add menu here',
                                'walker'                => new Bloggerx_nav_walker(),
                            )
                        );

                        ?>
                    </div>

                </nav>


            </div><!-- end container-fluid -->
        </header><!-- end market-header -->