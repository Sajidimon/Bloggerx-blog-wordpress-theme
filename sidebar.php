<div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
    <div class="sidebar">

        
        <?php 

            if (is_active_sidebar('right_sidebar')) {
                dynamic_sidebar('right_sidebar');
            }

        ?>

        
    </div><!-- end sidebar -->
</div><!-- end col -->