<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 08.02.20
 * Time: 17:06
 */
?>
<section class="awards">
    <div class="container">
        <div class="row">
            <div class="awards__carousel w-100">
                <?php
                $arg = [
                    'posts_per_page' => -1,
                    'post_type' => 'awards',
//                    'meta_key' => 'sort',
//                    'orderby' => 'meta_value',
//                    'order' => 'ASC',
                    'status' => 'publish'
                ];
                $the_query = new WP_Query($arg);

                while ($the_query->have_posts()) :
                    $the_query->the_post();
                    $post_id = $the_query->post->ID;
                    $kinds = get_field('kind', $post_id);

                    ?>
                    <li class="awards__item  ">
                        <a data-lightbox="awards" href="<?= wp_get_attachment_image_src(get_post_thumbnail_id($post_id), "full")[0]; ?>"
                           class="awards__link">
                            <div class="awards__content">
                                <?php echo $kinds ;?>
                                <span>
                                    <?php echo get_the_title($post_id); ?>
                                </span>
                            </div>
                            <img src="<?php echo get_theme_file_uri('/assets/images/transpaernt.png'); ?>"
                                 data-lazy="<?= wp_get_attachment_image_src(get_post_thumbnail_id($post_id), "awards-img")[0]; ?>"
                                 alt="Изображение"
                            />
                        </a>
                    </li>
                <?php
                endwhile;
                wp_reset_query();
                ?>
            </div>
        </div>
    </div>
</section>
