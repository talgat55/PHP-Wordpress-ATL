<?php

 $type = get_query_var('type-item');
?>

<li class="page-portfolio__item  col-md-4  col-sm-12">
    <a href="<?= wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), "full")[0]; ?>"
       class="page-portfolio__item-wrap" data-lightbox="gallery">
        <?php if($type): ?>
            <div class="page-portfolio__img-block" style="background: url(<?= wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), "portfolio-page-img")[0]; ?>)"></div>
        <?php else: ?>
            <div class="page-portfolio__img-block lazy"  data-src="<?= wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), "portfolio-page-img")[0]; ?>"></div>
        <?php endif; ?>
    </a>
</li>