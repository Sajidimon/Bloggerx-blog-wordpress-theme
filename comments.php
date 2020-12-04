<div class="section-title">
   <h3 class="title text-left">
      <?php
      $bloggerx_comments = get_comments_number();

      if (1 == $bloggerx_comments) {
         _e('1 Comment', 'bloggerx');
      } else {
         echo wp_kses_post($bloggerx_comments) . ' ' . __('Comments', 'bloggerx');
      }
      ?>
   </h3>
   <div class="post-comments">
      <?php wp_list_comments();

      if (!comments_open()) {
         _e('Comments are closed', 'bloggerx');
      }

      ?>
   </div>

   <div class="comments-pagination">
      <?php

      the_comments_pagination(array(
         'screen_reader_text'      => ' ',
         'Prev_text'               => __('Previous comments', 'bloggerx'),
         'next_text'               => __('Next comments', 'bloggerx'),
      ));
      ?>
   </div>

</div>



<!-- post reply -->
<div class="comment-form">

   <?php comment_form(); ?>

</div>
<!-- /post reply -->