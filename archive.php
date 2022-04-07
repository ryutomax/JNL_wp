<?php if(is_post_type_archive('recipe')):?>
    
<?php get_template_part( 'templates-archive/archive-recipe', $page->post_name ); ?>

<?php elseif(is_post_type_archive('news')):?>

<?php get_template_part( 'templates-archive/archive-news', $page->post_name ); ?>

<?php endif; ?>