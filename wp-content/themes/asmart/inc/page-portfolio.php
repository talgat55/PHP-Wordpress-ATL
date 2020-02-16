<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 13.02.20
 * Time: 17:55
 */
?>
<div id="primary" class="content-area page-portfolio ">
    <?php get_template_part('inc/hero'); ?>
    <h1 class="page__main-title">Портфолио</h1>
    <div class="container">
        <div class="row flex">

            <div class="col-sm-12 col-xs-12   ">
                <ul class="page-portfolio__list-items row ">
                    <?php
                    $arg = [
                        'posts_per_page' => 12,
                        'post_type' => 'portfolio',
//                    'meta_key' => 'sort',
//                    'orderby' => 'meta_value',
//                    'order' => 'ASC',
                        'status' => 'publish'
                    ];
                    $the_query = new WP_Query($arg);
                    while ($the_query->have_posts()) :
                        $the_query->the_post();
                        $post_id = $the_query->post->ID;

                        ?>
                        <li class="page-portfolio__item  col-md-4  col-sm-12">
                            <a href="<?= wp_get_attachment_image_src(get_post_thumbnail_id($post_id), "full")[0]; ?>"
                               class="page-portfolio__item-wrap" data-lightbox="gallery">
                                <div class="page-portfolio__img-block lazy"
                                     data-src="<?= wp_get_attachment_image_src(get_post_thumbnail_id($post_id), "portfolio-page-img")[0]; ?>"></div>
                            </a>
                        </li>
                    <?php
                    endwhile;
                    wp_reset_query();
                    ?>
                </ul>
                <div class="w-100  justify-content-center d-flex load-more-wrapper">
                    <a href="#" class="link link_medium link_alt load-more">
                        Смотреть еще
                    </a>
                </div>
            </div>
        </div>
    </div>
    <?php get_template_part('inc/clients'); ?>
    <?php get_template_part('inc/map'); ?>
</div>
