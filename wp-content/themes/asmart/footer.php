<footer class="footer">

    <div class="container">
        <div class="row  align-items-center">
            <div class="col-lg-3 col-sm-12">
                <a class="footer-logo" href="<?php echo home_url(); ?>">
                    <img src="<?php echo get_theme_file_uri('/assets/images/footer-logo.png'); ?>" alt="Главная"/>
                </a>
            </div>
            <div class="col-lg-9 col-sm-12">
                <div class="footer__first">
                    <?php wp_nav_menu('container=div&menu_id=footer-main&menu_class=footer-main-container clearfix&theme_location=top_menu'); ?>
                </div>
                <div class="footer__second d-flex w-100 align-items-center  justify-content-center ">
                                            <a target="_blank" class="bottom-copyright" title="Перейти на сайт разработчика"
                                               href="https://asmart-group.ru/">Cайт создан в IT-company <span>ASMART</span></a>
                    <a href="/policy" class="link-to-policy">
                        Политика обработки персональных данных
                    </a>
                </div>
            </div>
        </div>
    </div>


</footer>
<?php
//if (is_page_template('page-partners.php')) {
//    get_template_part('inc/partners-modal');
//}else{
//    get_template_part('inc/feedback-modal');
//}
?>
<?php //get_template_part('inc/success-modal'); ?>
<!--<a id="back_to_top" href="#">-->
<!--    <div class="ba-block">-->
<!--        <img src="--><?php //echo get_theme_file_uri('/assets/images/arrow-up.png') ?><!--" alt="Стрелка верх">-->
<!--    </div>-->
<!--</a>-->
<div class="overlay-layer"></div>


<?php wp_footer(); ?>
</div>
</body>
</html>
