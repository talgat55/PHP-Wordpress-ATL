<?php
/**
 * The template for displaying all single service
 */

get_header();

$idDetail = get_the_ID();
?>
    <div id="primary" class="  page-main  page-firewall">
        <?php
        $firstImg = get_field('first_image');

        set_query_var('bg_image', $firstImg);
        ?>
        <?php get_template_part('inc/hero'); ?>

        <h1 class="page__main-title"><?php echo get_the_title(); ?></h1>

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
                <section class="slider-section">
                    <div class="row position-relative">
                        <div class="page-firewall__slider">
                            <?php $slider = get_field('slider'); ?>
                            <?php foreach ($slider as $value): ?>
                                <a class="page-firewall__item-link">
                                    <img src="<?php echo $value['sizes']['service-detail-img']; ?>" alt="Слайд"/>
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
            </div>
            <section class="banner-section">
                <div class="container">
                    <div class="row">
                        <div class="banner-section__first col-lg-6 col-md-12  d-flex align-items-center  justify-content-center">
                            <?php $textBanner = get_field('text_you_banner'); ?>
                            <div class="banner-section__wrapper_first">
                                <div class="banner-section__text">
                                    <?php echo $textBanner; ?>
                                </div>
                                <a class="link  link_alt-theme   link_medium" href="#">
                                    Оформить
                                </a>
                            </div>
                        </div>
                        <div class="banner-section__second col-lg-6 col-md-12">
                            <?php $imgBanner = get_field('img_you_banner'); ?>
                            <img src="<?php echo $imgBanner; ?>" alt="Изображение"/>
                        </div>
                    </div>
                </div>
            </section>
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
                            <a href="#" class="prev" >
                                <img class="main" src="<?php echo get_theme_file_uri('/assets/images/qa-left.png'); ?>"
                                     alt="Иконка"/>
                                <img  class="active"  src="<?php echo get_theme_file_uri('/assets/images/qa-left-active.png'); ?>"
                                     alt="Иконка"/>
                            </a>
                            <a href="#" class="next" >
                                <img class="main" src="<?php echo get_theme_file_uri('/assets/images/qa-right.png'); ?>"
                                     alt="Иконка"/>
                                <img  class="active"  src="<?php echo get_theme_file_uri('/assets/images/qa-right-active.png'); ?>"
                                      alt="Иконка"/>
                            </a>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <?php get_template_part('inc/aboutAlt'); ?>
        <?php
        $titleClientBlock = get_field('title_block_clients', $idDetail);
        if(!empty($titleClientBlock)){
            set_query_var('title_clients', $titleClientBlock);
        }
        ?>
        <?php get_template_part('inc/clients'); ?>
    </div>
<?php get_footer();
