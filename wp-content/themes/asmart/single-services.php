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
$advantagesAlt = get_field('advantages_adv_alt');
$advantagesAltText = get_field('text_advantages_adv_alt');
$imgBanner = get_field('img_you_banner');
$pricePicture = get_field('price_picture');
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

        <div class="service-wrapper   adv-blocks">
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

                <?php if (!empty($slider)):
                    set_query_var('slider', $slider);
                    get_template_part('inc/service-detail-slider');
                endif; ?>


            </div>


            <?php if (!empty($advantagesBlock) && $idDetail != '22') :
                set_query_var('advantagesBlock', $advantagesBlock);
                get_template_part('inc/service-detail-adv');
            endif; ?>
            <?php if (!empty($pricePicture)): ?>
                <section class="price_picture">
                    <div class="container">
                        <div class="row">
                            <h2 class="text-center w-100">
                                Наши цены под ключ
                            </h2>
                            <img class="lazy" src="<?php echo $pricePicture; ?>" alt="Изображение прайса"/>

                        </div>
                    </div>
                </section>
            <?php endif; ?>
            <?php if (!empty($textBanner)) :
                set_query_var('textBanner', $textBanner);
                set_query_var('imgBanner', $imgBanner);

                get_template_part('inc/service-detail-text-banner');
            endif; ?>
        </div>


        <?php if (!empty($advantagesAlt)) : ?>
            <div class="service-wrapper audio">
                <section class="advantages-alt">
                    <div class="container">
                        <div class="row">
                            <?php echo $advantagesAltText; ?>
                        </div>
                        <div class="row">
                            <?php foreach ($advantagesAlt as $advAltItem): ?>
                                <div class="advantages-alt__item d-lg-flex  col-lg-6 col-md-6 col-sm-12">
                                    <div class="advantages-alt__img-block">
                                        <img src="<?php echo $advAltItem['image']; ?>" alt="Изображение"/>
                                    </div>
                                    <div class="advantages-alt__content">
                                        <h3 class="advantages-alt__title">
                                            <?php echo $advAltItem['title']; ?>
                                        </h3>
                                        <div class="advantages-alt__text">
                                            <?php echo $advAltItem['text']; ?>
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
        <?php if (!empty($advantagesBlock) && $idDetail == '22') :
            set_query_var('advantagesBlock', $advantagesBlock);
            get_template_part('inc/service-detail-adv'); ?>
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


        <?php if ($idDetail == '22') :   //  page adv in underground ?>
            <!--    Audio -->
            <div class="service-wrapper  audio-blocks">
                <?php
                $bannerAudioImg = get_field('banner_audio');
                $titleAudio = get_field('title_audio');
                $descriptionAudio = get_field('description_audio');
                $imgBannerAudio = get_field('img_you_banner_audio');
                $textBannerAudio = get_field('text_you_banner_audio');
                $advantage_adv_audio = get_field('advantage_adv_audio');

                set_query_var('bg_image', $bannerAudioImg);
                ?>
                <?php get_template_part('inc/hero'); ?>
                <h2 class="page__main-title"><?php echo $titleAudio; ?></h2>
                <section>
                    <div class="container">
                        <div class="row">
                            <div class="page-firewall__description-block">
                                <?php echo $descriptionAudio; ?>
                            </div>
                        </div>
                    </div>
                </section>

                <?php if (!empty($textBannerAudio)) :
                    set_query_var('textBanner', $textBannerAudio);
                    set_query_var('imgBanner', $imgBannerAudio);

                    get_template_part('inc/service-detail-text-banner');
                endif; ?>
            </div>

            <?php if (!empty($advantage_adv_audio)) :
                set_query_var('advantagesBlock', $advantage_adv_audio);
                get_template_part('inc/service-detail-adv');
            endif; ?>

            <!--  Pillars  -->
            <div class="service-wrapper  pillars-blocks">
                <?php
                $bannerPillarsImg = get_field('banner_pillars');
                $titlePillars = get_field('title_pillars');
                $descriptionPillars = get_field('description_pillars');
                $imgBannerPillars = get_field('img_you_banner_pillars');
                $textBannerPillars = get_field('text_you_banner_pillars');
                $advantageAdvPillars = get_field('advantage_adv_pillars');
                $sliderPillars = get_field('slider_pillars');

                set_query_var('bg_image', $bannerPillarsImg);
                ?>
                <?php get_template_part('inc/hero'); ?>
                <h2 class="page__main-title"><?php echo $titlePillars; ?></h2>
                <section>
                    <div class="container">
                        <div class="row">
                            <div class="page-firewall__description-block">
                                <?php echo $descriptionPillars; ?>
                            </div>
                        </div>
                    </div>
                </section>
                <div class="container">
                    <?php if (!empty($sliderPillars)):
                        set_query_var('slider', $sliderPillars);
                        get_template_part('inc/service-detail-slider');
                    endif; ?>
                </div>

            </div>
            <?php if (!empty($advantageAdvPillars)) :
                set_query_var('advantagesBlock', $advantageAdvPillars);
                get_template_part('inc/service-detail-adv'); ?>
            <?php endif; ?>
            <?php if (!empty($textBannerPillars)) : ?>
                <div class="service-wrapper  pillars-block">
                    <?php
                    set_query_var('textBanner', $textBannerPillars);
                    set_query_var('imgBanner', $imgBannerPillars);

                    get_template_part('inc/service-detail-text-banner');
                    ?>
                </div>
            <?php endif; ?>
        <?php endif; ?>

    </div>
<?php get_footer();
