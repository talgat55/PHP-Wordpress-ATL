<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 05.02.20
 * Time: 18:47
 */
?>
<section class="service">
    <div class="container">
        <div class="row">
            <h2 class="main-title w-100">
                Наши услуги
            </h2>
            <ul class="service__list-items row">
                <?php
                $arg = [
                    'posts_per_page' => 6,
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
                            <div  class="service__img" style="background: url(<?= wp_get_attachment_image_src(get_post_thumbnail_id($post_id), "service-home-img")[0]; ?>)"></div>
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
</section>
