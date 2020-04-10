<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 06.02.20
 * Time: 14:05
 */
?>
<section class="home-portfolio">
    <div class="container">
        <div class="row">
            <h2 class="main-title w-100">
                Наши работы
            </h2>
            <p class="home-portfolio__sub-title">
                Реклама, которая работает
            </p>
        </div>
        <div class="row">
            <div class="home-portfolio__list-items d-flex w-100">
                <?php
                $arg = [
                    'posts_per_page' => 5,
                    'post_type' => 'portfolio',
                    'meta_key' => 'show_home_page',
                    'meta_value' => 'yes',
//                    'meta_key' => 'sort',
//                    'orderby' => 'meta_value',
//                    'order' => 'ASC',
                    'status' => 'publish'
                ];
                ?>
                <?php
                $the_query = new WP_Query($arg);
                $i = 0;
                while ($the_query->have_posts()) :
                    $the_query->the_post();
                    $post_id = $the_query->post->ID;
                    $tagNew = get_field('new', $post_id);
                    if ($i == '2') {
                        echo '<div class="wrapper-two-items">';
                    }
                    ?>
                    <div class="home-portfolio__item">
                        <a href="<?= wp_get_attachment_image_src(get_post_thumbnail_id($post_id), "full")[0]; ?>"
                           class="home-portfolio__link">
                            <div class="home-portfolio__title">
                                <h3><? echo get_the_title($post_id) ?></h3>
                            </div>
                            <div class="home-portfolio__img  lazy"
                                 data-src="<?= wp_get_attachment_image_src(get_post_thumbnail_id($post_id), "service-home-img")[0]; ?>"></div>
                        </a>
                        <?php  if ($i == '0') { ?>
                            <a href="/portfolio/" class="link  link-button">
                                Больше наших работ
                            </a>
                        <?php  } ?>
                    </div>
                    <?php
                    if ($i == '3') {
                        echo '</div>';
                    }
                    $i++;
                endwhile;
                wp_reset_query();
                ?>
            </div>
        </div>
    </div>
</section>
