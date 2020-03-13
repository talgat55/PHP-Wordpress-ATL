<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 16.02.20
 * Time: 21:37
 */

$titleBlock = get_query_var('title_clients');
if (!empty($titleBlock)) {
    $redyTitle = $titleBlock;
} else {
    $redyTitle ='Наши клиенты';
}
?>

<section class="client lazy"     data-src="<?php echo get_theme_file_uri('/assets/images/client-bg.png'); ?>">
    <div class="container">
        <div class="row">
            <h2 class="main-title w-100">

                <?php echo $redyTitle ?>
            </h2>
        </div>
        <div class="client__items-list">
            <?php
            $arg = [
                'posts_per_page' => -1,
                'post_type' => 'clients',
                'status' => 'publish'
            ];
            ?>
            <?php
            $the_query = new WP_Query($arg);

            while ($the_query->have_posts()) :
                $the_query->the_post();
                $post_id = $the_query->post->ID;

                ?>
                <div class="client__item ">
                    <div class="client__item-wrap d-flex align-items-center justify-content-center">
                        <img  src="<?php echo get_theme_file_uri('/assets/images/transpaernt.png'); ?>" class="lazy" data-src="<?= wp_get_attachment_image_src(get_post_thumbnail_id($post_id), "client-img")[0]; ?>" alt="Изображение" />
                    </div>
                </div>
            <?php

            endwhile;
            wp_reset_query();
            ?>
        </div>
    </div>
</section>
