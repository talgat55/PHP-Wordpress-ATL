<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <title>
        <?php
        if (is_home()) {
            bloginfo('name');
        } else {
            wp_title('');
        }
        ?>
    </title>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="shortcut icon" href="<?php echo get_theme_file_uri('/favicon.png?v=1.1') ?>"
          type="image/x-icon"/>

    <?php wp_head(); ?>
    <script type='text/javascript'>
        /* <![CDATA[ */
        var myajax = {"url": "<?=admin_url('admin-ajax.php'); ?>"};
        /* ]]> */
    </script>
    <!--    <script type="application/ld+json">-->
    <!--        {-->
    <!--            "@context": "http://schema.org",-->
    <!--            "@type": "Organization",-->
    <!--            "address": {-->
    <!--                "@type": "PostalAddress",-->
    <!--                "addressRegion": "г. Омск",-->
    <!--                "streetAddress": "ул. Почтовая, д. 33, каб. 9"-->
    <!--            },-->
    <!--            "description": "Дизель Групп доставляет дизельное топливо по Омску и Омской области, напрямую от Газпрома и ВПК-ОЙЛ",-->
    <!--            "name": "Дизель Групп - дизельное топливо с доставкой по омску и области",-->
    <!--            "telephone": "8 91314-82-031"-->
    <!--        }-->
    <!--    </script>-->
</head>

<body <?php body_class(); ?>>
<?php
$phone_number = get_field('number_phone', 'option');

?>
<div class="wrap ">
    <header class="header">
        <div class="container">
            <div class="row  justify-content-between">
                <a class="mobile-logo" href="<?php echo home_url(); ?>">
                    <img src="<?php echo get_theme_file_uri('/assets/images/footer-logo.png'); ?>" alt="Главная"/>
                </a>
                <div class="align-items-center justify-content-between">
                    <?php wp_nav_menu('container=nav&menu_id=menu-main&menu_class=main-main-container clearfix&theme_location=top_menu'); ?>
                </div>
                <div class="header-call_block">
                    <a href="tel:<?php echo strip_tags($phone_number); ?>">
                        <img src="<?php echo get_theme_file_uri('/assets/images/phone.png'); ?>"
                             alt="Иконка"/> <?php echo $phone_number; ?>
                    </a>
                </div>
                <a href="#" class="menu-icon-toggle"><span></span></a>
            </div>
        </div>
    </header>
    <div class="header_fixed"> </div>
    <div class="mobile-menu d-flex w-100   justify-content-center">
        <div>
            <?php wp_nav_menu('container=div&menu_id=menu-mobile&menu_class=mobile-main-container clearfix&theme_location=top_menu'); ?>

            <a href="tel:<?php echo strip_tags($phone_number); ?>">
                <img src="<?php echo get_theme_file_uri('/assets/images/phone.png'); ?>"
                     alt="Иконка"/> <?php echo $phone_number; ?>
            </a>
        </div>
    </div>


