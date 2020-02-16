<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 06.02.20
 * Time: 18:29
 */
?>
<section class="review  lazy"  data-src="<?php echo get_theme_file_uri('/assets/images/bg-review.jpg'); ?>">
    <div class="container">
        <div class="row">
            <h2 class="main-title w-100">
                нам уже доверяют
            </h2>
            <div class="review__slider">
                <?php
                $arg = [
                    'posts_per_page' => 6,
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

                    ?>
                    <div class="review__item">
                        <div class="review__first-block d-flex w-100 align-items-center ">
                            <div class="review__img-block">
                                <img src="<?= wp_get_attachment_image_src(get_post_thumbnail_id($post_id), "review-img")[0]; ?>" alt="Логотип" />
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
                        <div class="review__content">
                            <?php echo get_the_content($post_id); ?>
                        </div>
                    </div>
                <?php
                endwhile;
                wp_reset_query();
                ?>
            </div>
            <div class="review__bottom w-100">
                <h3 class="review__bottom-title text-center">
                    Напиши отзыв сейчас - получи <span>скидку!</span>
                </h3>
                <img class="review__bottom-img" src="<?php echo get_theme_file_uri('/assets/images/border-review.png'); ?>" alt="Бордер" />
                <a  class="link link_white  link_medium" href="#">
                    Оставить отзыв
                </a>
            </div>
        </div>
    </div>
</section>
