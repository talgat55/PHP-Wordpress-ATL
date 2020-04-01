<?php
/*
 * Template Name: Страница отзывов
 */
get_header(); ?>
    <div id="primary" class="  page-main  page-reviews">
        <?php get_template_part('inc/hero'); ?>
        <h1 class="page__main-title">Отзывы</h1>
        <div class="review-wrapper">
            <div class="container">
                <div class="row flex">
                    <div class="col-sm-12 col-xs-12   ">
                        <ul class="page-reviews__list-items row ">
                            <?php
                            $arg = [
                                'posts_per_page' =>4,
                                'post_type' => 'review',
                                'orderby' => 'date',
                                'order' => 'DESC',
                                'status' => 'publish'
                            ];
                            $the_query = new WP_Query($arg);
                            while ($the_query->have_posts()) :
                                $the_query->the_post();
                                $post_id = $the_query->post->ID;
                                get_template_part('inc/review-item');
                                ?>

                            <?php
                            endwhile;
                            wp_reset_query();
                            ?>
                        </ul>
                        <div class="w-100  justify-content-center d-flex load-more-wrapper">
                            <a href="#" class="link link_medium link_alt load-more"  data-page="2">
                                Смотреть еще
                            </a>
                        </div>
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
