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
            <ul class="home-portfolio__list-items row">
                <?php
                $arg = [
                    'posts_per_page' => 5,
                    'post_type' => 'portfolio',
                    'meta_key'		=> 'show_home_page',
                    'meta_value'	=> 'yes',
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
                    <li class="home-portfolio__item col">
                        <a href="<?= wp_get_attachment_image_src(get_post_thumbnail_id($post_id), "full")[0]; ?>" class="home-portfolio__link">
                            <div class="home-portfolio__title">
                                <h3><? echo get_the_title($post_id) ?></h3>
                            </div>
                            <div  class="home-portfolio__img" style="background: url(<?= wp_get_attachment_image_src(get_post_thumbnail_id($post_id), "service-home-img")[0]; ?>)"></div>
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
