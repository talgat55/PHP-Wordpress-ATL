<?php $slider = get_query_var('slider'); ?>
<section class="slider-section">
    <div class="row position-relative">
        <div class="page-firewall__slider">

            <?php foreach ($slider as $value): ?>
                <a class="page-firewall__item-link">
                    <div>
                        <img src="<?php echo $value['sizes']['service-detail-img']; ?>"
                             alt="Слайд"/>
                    </div>
                </a>
            <?php endforeach; ?>
        </div>
        <?php if (count($slider) > 3) : ?>
            <div class="page-firewall__arrows-slider">
                <a href="#" class="left">
                    <img src="<?php echo get_theme_file_uri('/assets/images/service-left.png'); ?>"
                         alt="Иконка"/>
                </a>
                <a href="#" class="right">
                    <img src="<?php echo get_theme_file_uri('/assets/images/service-right.png'); ?>"
                         alt="Иконка"/>
                </a>
            </div>
        <?php endif; ?>
    </div>
</section>
