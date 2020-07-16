<?php
    get_header();
    global $post; ?>

<section class="p-detail content-wp">
    <header class="p-detail__header grid-middle" style="background-image: url(<?php echo the_post_thumbnail_url(); ?>)">
        <h1><?php echo the_title(); ?></h1>
    </header>

    <article class="p-detail__container content-wp">
        <?php echo $post->post_content; ?>

        <?php get_template_part( 'src/atom/button-top/button-top' ); ?>
    </article>
</section>

<?php get_footer(); ?>
