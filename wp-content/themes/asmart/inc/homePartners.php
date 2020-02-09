<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 09.02.20
 * Time: 22:06
 */
?>
<section class="partners">
    <div class="container">
        <div class="row">
            <div class="partners__slider w-100">
                <?php
                $arg = [
                    'posts_per_page' => -1,
                    'post_type' => 'partners',
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
                    <li class="partners__item d-flex align-items-center">
                            <img src="<?php echo get_theme_file_uri('/assets/images/transpaernt.png'); ?>"
                                 data-lazy="<?= wp_get_attachment_image_src(get_post_thumbnail_id($post_id), "partners-img")[0]; ?>"
                                 alt="Изображение"
                            />
                    </li>
                <?php
                endwhile;
                wp_reset_query();
                ?>
            </div>
        </div>
    </div>
</section>
