<?php
/*
 * Template Name: Страница услуг
 */
get_header(); ?>
    <div id="primary" class="  page-main  page-service">
        <?php get_template_part('inc/hero'); ?>
        <h1 class="page__main-title">Услуги</h1>
        <div class="review-wrapper">
            <div class="container">
                <div class="row flex">
                    <div class="col-sm-12 col-xs-12   ">
                        <ul class="page-reviews__list-items row ">
                            <?php
                            $arg = [
                                'posts_per_page' => -1,
                                'post_type' => 'services',
//                    'meta_key' => 'sort',
//                    'orderby' => 'meta_value',
//                    'order' => 'ASC',
                                'status' => 'publish'
                            ];

                            ?>
                            <?php
                            $the_query = new WP_Query($arg);

                            while ($the_query->have_posts()) :
                                $the_query->the_post();
                                $post_id = $the_query->post->ID;
                                $tagNew = get_field('new', $post_id);

                                ?>
                                <li class="service__item col-lg-4 col-md-6 col-sm-12">
                                    <a href="<?php echo get_the_permalink($post_id); ?>" class="service__link">
                                        <div class="service__title">
                                            <h3><? echo get_the_title($post_id) ?></h3>
                                        </div>
                                        <?php if( $tagNew == 'yes'): ?>
                                            <div class="service__tag-new"></div>
                                        <?php endif; ?>
                                        <div  class="service__img lazy" data-src="<?= wp_get_attachment_image_src(get_post_thumbnail_id($post_id), "service-home-img")[0]; ?>"></div>
                                        <div class="service__text-more">
                                            Подробнее
                                        </div>
                                    </a>
                                </li>
                            <?php
                            endwhile;
                            wp_reset_query();
                            ?>
                        </ul>

                    </div>
                </div>
            </div>
        </div>
        <h2 class="main-title__alt">
            Благодарственные письма
        </h2>
        <?php get_template_part('inc/homeAwards'); ?>
        <?php get_template_part('inc/aboutAlt'); ?>
        <?php get_template_part('inc/clients'); ?>
        <?php get_template_part('inc/map'); ?>
    </div>
<?php get_footer();
