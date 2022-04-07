
<?php if(is_page('contact')):?>

    <?php get_template_part( 'templates-page/page-contact', $page->post_name ); ?>

<?php elseif(is_page('confirm')):?>

    <?php get_template_part( 'templates-page/page-confirm', $page->post_name ); ?>

<?php elseif(is_page('thanks')):?>

    <?php get_template_part( 'templates-page/page-thanks', $page->post_name ); ?>

<?php elseif(is_page('company')):?>

    <?php get_template_part( 'templates-page/page-company', $page->post_name ); ?>

<?php elseif(is_page('privacypolicy')):?>

    <?php get_template_part( 'templates-page/page-privacypolicy', $page->post_name ); ?>

<?php elseif(is_page('sitemap')):?>

    <?php get_template_part( 'templates-page/page-sitemap', $page->post_name ); ?>

<?php endif; ?>