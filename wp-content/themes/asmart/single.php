<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header();

$category = get_the_category(get_the_ID());
$date = get_field('date_upload', get_the_ID());
$photo = get_field('foto_dlya_skachivaniya', get_the_ID());
?>
    <div id="primary" class="  page-main  single-page-news">

        <div class="container">
            <div class="row">
                <?php dimox_breadcrumbs(); ?>
            </div>
            <div class="row  single-page-news_first-block">
                <div class="col-lg-6 col-md-6 col-sm-12 d-flex align-items-center">
                    <div class="single-page-news_first-block_date">
                        <?php echo get_the_date('d.m.y', get_the_ID()); ?>
                    </div>
                    <div class="single-page-news_first-block_category">
                        #<?php echo $category[0]->name; ?>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12"></div>
            </div>
            <div class="row ">
                <?php while (have_posts()) :
                    the_post(); ?>
                    <div class="single-page-news_content">
                        <div class="single-page-news_content_img">
                            <img src="<?php echo wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), "full")[0]; ?>"
                                 alt="Изображеие"/>
                        </div>
                        <h1 class="page-title-main">
                            <?php echo get_the_title(get_the_ID()); ?>
                        </h1>
                        <div class="single-page-news_content_text">
                            <?php echo get_the_content(get_the_ID()); ?>

                            <?php the_content(); ?>
                        </div>
                        <?php

                        if (!empty($date) && $date <= date('d.m.Y')) : ?>
                            <a target="_blank" href="<?php echo $photo; ?>"
                               class="single-page-news_content_link-download d-flex align-items-center">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none">
                                    <path d="M19.375 13.75C19.0299 13.75 18.75 14.03 18.75 14.375V18.75H1.25002V14.375C1.25002 14.03 0.969998 13.75 0.625036 13.75C0.280074 13.75 0 14.03 0 14.375V19.375C0 19.72 0.280022 19.9999 0.624984 19.9999H19.375C19.72 19.9999 19.9999 19.7199 19.9999 19.375V14.375C20 14.03 19.72 13.75 19.375 13.75Z"
                                          fill="#13273F"/>
                                    <path d="M9.54333 14.8168C9.78646 15.0575 10.1934 15.06 10.4364 14.8168L14.8108 10.5043C15.0577 10.26 15.0571 9.86435 14.8108 9.62059C14.5645 9.37621 14.1646 9.37621 13.9183 9.62059L10.6214 12.8706V0.624984C10.6214 0.27997 10.3389 0 9.99017 0C9.64141 0 9.3589 0.280022 9.3589 0.624984V12.8706L6.06202 9.62059C5.81514 9.37621 5.41579 9.37621 5.16953 9.62059C4.92266 9.86498 4.92266 10.2606 5.16953 10.5043L9.54333 14.8168Z"
                                          fill="#13273F"/>
                                </svg>
                                Скачать фото по ссылке (доступно до <?php echo $date; ?>)
                            </a>
                        <?php endif; ?>
                        <?php $galley = get_field('gallery', get_the_ID());

                        ?>
                        <?php if (!empty($galley)): ?>
                            <ul class="single-page-news_gallery row">
                                <?php foreach ($galley as $item) : ?>
                                    <li class="single-page-news_gallery_item  ">
                                        <a data-lightbox="example-set"  href="<?php echo $item['url']; ?>" >
                                            <img src="<?php echo $item['sizes']['news-single-img']; ?>"
                                                 alt="Изображеие"/>
                                        </a>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        <?php endif; ?>
                    </div>
                <?php endwhile; ?>
                <?php
                $args = array(
                    'post__not_in' => array($post->ID),
                    'posts_per_page' => 4, // Number of related posts that will be shown.
                    'orderby' => 'date',
                    'order' => 'DESC',
                    'caller_get_posts' => 1
                );

                $my_query = new wp_query($args);
                if ($my_query->have_posts()) {
                    ?>
                    <h3 class="title-third">
                        Читайте также
                    </h3>
                    <div class="single-page-news_related-list row">
                        <?php
                        while ($my_query->have_posts()) {
                            $my_query->the_post();
                            get_template_part('inc/post-item');
                        }
                        ?>
                    </div>
                    <?php
                }
                wp_reset_query(); ?>
            </div>
        </div>

    </div>
<?php get_footer();
