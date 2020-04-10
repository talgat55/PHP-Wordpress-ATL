<?php

$textBanner = get_query_var('textBanner');
$imgBanner = get_query_var('imgBanner');
?>

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
                <img src="<?php echo $imgBanner; ?>" alt="Изображение"/>
            </div>
        </div>
    </div>
</section>
