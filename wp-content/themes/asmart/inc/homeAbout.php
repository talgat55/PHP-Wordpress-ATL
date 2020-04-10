<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 03.02.20
 * Time: 18:40
 */

$file_presentation = get_field('file_presentation', 'option');
?>
<section id="about" class="about">
    <div class="container">
        <div class="row">
            <h2 class="main-title w-100">
                О нас
            </h2>
        </div>
        <div class="row about-list ">
            <div class="about-list-item col-lg-4 col-md-6 col-md-12 text-center">
                <div class="about-list-item-img_blog">
                    <img src="<?php echo get_theme_file_uri('/assets/images/about_1.png'); ?>" alt="Изображение"/>
                </div>
                <div class="about-list-item-counter">
                    <span>500</span>
                </div>
                <h3 class="about-list-item-title">
                    рекламных поверхностей по городу
                </h3>
            </div>
            <div class="about-list-item col-lg-4 col-md-6 col-md-12 text-center">
                <div class="about-list-item-img_blog">
                    <img src="<?php echo get_theme_file_uri('/assets/images/about_2.png'); ?>" alt="Изображение"/>
                </div>
                <div class="about-list-item-counter">
                    <span>1000</span>
                </div>
                <h3 class="about-list-item-title">
                    довольных клиентов
                </h3>
            </div>
            <div class="about-list-item col-lg-4 col-md-6 col-md-12 text-center">
                <div class="about-list-item-img_blog">
                    <img src="<?php echo get_theme_file_uri('/assets/images/about_3.png'); ?>" alt="Изображение"/>
                </div>
                <div class="about-list-item-counter">
                    <span>7</span> лет
                </div>
                <h3 class="about-list-item-title">
                    продуктивной активности
                </h3>
            </div>
        </div>

        <div class="row d-flex   justify-content-center">

            <a href="<?php echo $file_presentation; ?> "  target="_blank" class="link-download">
                <div class="link-download_wrap">
                    <img src="<?php echo get_theme_file_uri('/assets/images/download.png'); ?>" alt="Изображение"/>
                    <p>
                        Скачать презентацию компании
                    </p>
                </div>
            </a>
        </div>

    </div>
</section>
