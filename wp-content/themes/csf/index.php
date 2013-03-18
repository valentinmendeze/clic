<?php get_header() ?>

<?php $post_id =2; $queried_post = get_post($post_id); $content = $queried_post->post_content; ?>

<?php echo $content; ?>


<?php get_footer() ?>