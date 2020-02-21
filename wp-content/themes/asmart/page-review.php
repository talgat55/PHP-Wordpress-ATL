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
                                'posts_per_page' => 4,
                                'post_type' => 'review',
//                    'meta_key' => 'sort',
//                    'orderby' => 'meta_value',
//                    'order' => 'ASC',
                                'status' => 'publish'
                            ];
                            $the_query = new WP_Query($arg);
                            while ($the_query->have_posts()) :
                                $the_query->the_post();
                                $post_id = $the_query->post->ID;
                                $author = get_field('avtor', $post_id);
                                $org = get_field('org', $post_id);
                                if (strlen(get_the_content($post_id)) > 781) {
                                    $class = true;
                                    $divClass = 'true';
                                } else {
                                    $class = false;
                                    $divClass = '';
                                }
                                ?>
                                <li class="review__item  page-reviews__item w-100">
                                    <div class="review__first-block d-flex w-100 align-items-center ">
                                        <div class="review__img-block">
                                            <img src="<?= wp_get_attachment_image_src(get_post_thumbnail_id($post_id), "review-img")[0]; ?>"
                                                 alt="Логотип"/>
                                        </div>
                                        <div class="review__info-block">
                                            <div class="review__author">
                                                <?php echo $author; ?>
                                            </div>
                                            <div class="review__org">
                                                <?php echo $org; ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="review__content  <?php echo $divClass; ?>">
                                        <div>
                                            <?php echo get_the_content($post_id); ?>
                                        </div>
                                    </div>
                                    <?php if ($class) { ?>
                                        <a href="#" class="page-reviews__expand">
                                            <img src="<?php echo get_theme_file_uri('/assets/images/down-arrow.png'); ?>"
                                                 alt="Иконка"/>
                                        </a>
                                    <?php } ?>
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
