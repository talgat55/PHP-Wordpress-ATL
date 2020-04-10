<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 01.04.20
 * Time: 18:07
 */

$author = get_field('avtor', get_the_ID());
$org = get_field('org',  get_the_ID());
if (strlen(get_the_content( get_the_ID())) > 781) {
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
            <img src="<?= wp_get_attachment_image_src(get_post_thumbnail_id( get_the_ID()), "review-img")[0]; ?>"
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
            <?php echo get_the_content( get_the_ID()); ?>
        </div>
    </div>
    <?php if ($class) { ?>
        <a href="#" class="page-reviews__expand">
            <img src="<?php echo get_theme_file_uri('/assets/images/down-arrow.png'); ?>"
                 alt="Иконка"/>
        </a>
    <?php } ?>
</li>
