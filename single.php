<?php if(is_singular('recipe')):?>

<?php get_template_part( 'templates-single/single-recipe', $page->post_name ); ?>

<?php elseif(is_singular('news')):?>

<?php get_template_part( 'templates-single/single-news', $page->post_name ); ?>

<?php endif; ?>