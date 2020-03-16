<?php
/**
 * The template for displaying all single service
 */

get_header();

$idDetail = get_the_ID();


$customTitle = get_field('title_custom');
$showQA = get_field('show_qa');
$showAbout = get_field('show_about');
$showClients = get_field('show_clients');
$textBanner = get_field('text_you_banner');
$slider = get_field('slider');
$advantagesAlt = get_field('advantages_adv_alt');
$advantagesBlock = get_field('advantage_adv');
$advantagesAltText = get_field('text_advantages_adv_alt');

if (!empty($customTitle)) {
    $redyTitle = $customTitle;
} else {
    $redyTitle = get_the_title();
}
?>
    <div id="primary" class="  page-main  page-firewall">
        <?php
        $firstImg = get_field('first_image');

        set_query_var('bg_image', $firstImg);
        ?>
        <?php get_template_part('inc/hero'); ?>

        <h1 class="page__main-title"><?php echo $redyTitle; ?></h1>

        <div class="service-wrapper">
            <div class="container">
                <section>
                    <div class="row">
                        <div class="page-firewall__description-block">
                            <?php while (have_posts()) : the_post();
                                the_content();
                            endwhile; ?>
                        </div>
                    </div>
                </section>
                <?php if (!empty($slider)): ?>
                    <section class="slider-section">
                        <div class="row position-relative">
                            <div class="page-firewall__slider">

                                <?php foreach ($slider as $value): ?>
                                    <a class="page-firewall__item-link">
                                        <div>
                                            <img src="<?php echo $value['sizes']['service-detail-img']; ?>" alt="Слайд"/>
                                        </div>
                                    </a>
                                <?php endforeach; ?>
                            </div>
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
                        </div>
                    </section>
                <?php endif; ?>

            </div>
            <?php if (!empty($advantagesBlock)) : ?>
                <div class="service-wrapper">
                    <section class="advantages">
                        <div class="container">
                            <div class="row">
                             <h2>
                                 Преимущества рекламы
                             </h2>
                            </div>
                            <div class="row">
                                <?php foreach ($advantagesBlock as $advItem): ?>
                                    <div class="advantages__item d-lg-flex  col-lg-3 col-md-3 col-sm-12">
                                        <div class="advantages__img-block">
                                            <img src="<?php echo $advItem['img']; ?>" alt="Изображение" />
                                        </div>
                                        <div class="advantages__content">
                                            <div class="advantages__text">
                                                <?php echo $advItem['text'] ;?>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </section>
                </div>
            <?php endif; ?>
            <?php if (!empty($textBanner)) : ?>
                <section class="banner-section">
                    <div class="container">
                        <div class="row">
                            <div class="banner-section__first col-lg-6 col-md-12  d-flex align-items-center  justify-content-center">

                                <div class="banner-section__wrapper_first">
                                    <div class="banner-section__text">
                                        <?php echo $textBanner; ?>
                                    </div>
                                    <a class="link  link_alt-theme   link_medium" href="#">
                                        Оформить
                                    </a>
                                </div>
                            </div>
                            <div class="banner-section__second col-lg-6 col-md-12  d-flex justify-content-center">
                                <?php $imgBanner = get_field('img_you_banner'); ?>
                                <img src="<?php echo $imgBanner; ?>" alt="Изображение"/>
                            </div>
                        </div>
                    </div>
                </section>
            <?php endif; ?>
        </div>


        <?php if (!empty($advantagesAlt)) : ?>
            <div class="service-wrapper">
                <section class="advantages-alt">
                    <div class="container">
                        <div class="row">
                            <?php echo $advantagesAltText; ?>
                        </div>
                        <div class="row">
                            <?php foreach ($advantagesAlt as $advAltItem): ?>
                                <div class="advantages-alt__item d-lg-flex  col-lg-6 col-md-6 col-sm-12">
                                    <div class="advantages-alt__img-block">
                                        <img src="<?php echo $advAltItem['image']; ?>" alt="Изображение" />
                                    </div>
                                    <div class="advantages-alt__content">
                                        <h3 class="advantages-alt__title">
                                            <?php echo $advAltItem['title'] ;?>
                                        </h3>
                                        <div class="advantages-alt__text">
                                            <?php echo $advAltItem['text'] ;?>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                        <div class="row w-100  justify-content-center">
                            <a class="link  link_alt-theme   link_medium" href="#">
                                Оформить
                            </a>
                        </div>

                    </div>
                </section>
            </div>
        <?php endif; ?>
        <?php if ($showQA != 'no') : ?>
            <div class="service-wrapper">

                <section class="qa-section">
                    <div class="container">
                        <div class="row">
                            <h2>
                                Часто задаваемые вопросы
                            </h2>
                        </div>
                        <div class="row">
                            <div class="page-firewall__list-qa row ">
                                <?php
                                $arg = [
                                    'posts_per_page' => -1,
                                    'post_type' => 'qa',
                                    'orderby' => 'date',
                                    'order' => 'DESC',
                                    'meta_key' => 'services',
                                    'meta_value' => $idDetail,
                                    'status' => 'publish',

                                ];


                                $the_query = new WP_Query($arg);
                                $numPosts = $the_query->post_count;

                                while ($the_query->have_posts()) :
                                    $the_query->the_post();
                                    $post_id = $the_query->post->ID;
//                                    $org = get_field('org', $post_id);

                                    ?>
                                    <div class="list-qa__item">
                                        <div class="list-qa__item_wrap">
                                            <div class="list-qa__title">
                                                <?php echo get_the_title($post_id); ?>
                                            </div>
                                            <div class="list-qa__text">
                                                <?php echo get_the_content($post_id); ?>
                                            </div>

                                        </div>
                                    </div>
                                <?php
                                endwhile;
                                wp_reset_query();


                                ?>
                            </div>
                            <div class="arrow-qa d-flex w-100  justify-content-between">
                                <?php if ($numPosts > 3) { ?>
                                    <a href="#" class="prev">
                                        <img class="main"
                                             src="<?php echo get_theme_file_uri('/assets/images/qa-left.png'); ?>"
                                             alt="Иконка"/>
                                        <img class="active"
                                             src="<?php echo get_theme_file_uri('/assets/images/qa-left-active.png'); ?>"
                                             alt="Иконка"/>
                                    </a>
                                    <a href="#" class="next">
                                        <img class="main"
                                             src="<?php echo get_theme_file_uri('/assets/images/qa-right.png'); ?>"
                                             alt="Иконка"/>
                                        <img class="active"
                                             src="<?php echo get_theme_file_uri('/assets/images/qa-right-active.png'); ?>"
                                             alt="Иконка"/>
                                    </a>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        <?php endif; ?>
        <?php if ($showAbout != "no") : ?>
            <div class="service-wrapper">
                <?php get_template_part('inc/aboutAlt'); ?>
            </div>
        <?php endif; ?>
        <?php if ($showClients != "no") : ?>
            <div class="service-wrapper">
                <?php
                $titleClientBlock = get_field('title_block_clients', $idDetail);
                if (!empty($titleClientBlock)) {
                    set_query_var('title_clients', $titleClientBlock);
                }
                ?>
                <?php get_template_part('inc/clients'); ?>
            </div>
        <?php endif; ?>
    </div>
<?php get_footer();
