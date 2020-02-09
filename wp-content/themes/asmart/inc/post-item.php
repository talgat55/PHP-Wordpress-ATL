<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 14.01.20
 * Time: 14:06
 */

$category = get_the_category(get_the_ID());

?>
<div class="post-item col-lg-3 col-md-6 col-sm-12">
    <a href="<?php echo get_the_permalink($post_id); ?>">
    <div class="post-item_img-block">
        <div class="post-item_img-block_category">
            <?php echo $category[0]->name; ?>
        </div>
        <div href="<?php echo get_the_permalink($post_id); ?>" class="post-item_img-block_img"
             style="background-image: url(<?php echo wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), "full")[0]; ?>
                     )">
        </div>
        <div class="post-item_img-block_addition_date">
            <?php echo get_the_date('d F Y', get_the_ID()); ?>
        </div>

    </div>
    <div class="post-item_content-block">
        <h3 class="post-item_content-block_title">
                <?php echo get_the_title(get_the_ID()); ?>
        </h3>
        <div class="post-item_content-block_text">
            <?php echo mb_strimwidth(get_the_content(get_the_ID()), 0, 125, "..."); ?>
        </div>
            <div  class="post-item_content-block_link d-flex w-100 justify-content-center">
                Подробнее
            </div>
    </div>
    </a>
</div>
