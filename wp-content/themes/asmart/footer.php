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
                <div class="footer__second d-md-flex w-100 align-items-center  justify-content-center ">
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

<!-- Modal  Promo -->
<div class="modal fade" id="promo-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="exampleModalLabel">Получить скидку</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?php echo do_shortcode('[contact-form-7 id="238"  html_class="form-custom" title="Получить скидку"]'); ?>
            </div>
        </div>
    </div>
</div>

<!-- Modal  Service -->
<div class="modal fade " id="service-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <p class="title">
                    Заполните поля с данными, чтобы  мы могли с Вами связаться
                </p>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?php echo do_shortcode('[contact-form-7 id="239"   html_class="form-service" title="Заказать услугу"]'); ?>
            </div>
        </div>
    </div>
</div>

<!-- Modal  Review -->
<div class="modal fade" id="review-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="exampleModalLabel">Отправить отзыв</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?php echo do_shortcode('[contact-form-7  html_class="form-review"  id="242" title="Отзыв"]'); ?>
            </div>
        </div>
    </div>
</div>

<!-- Modal  Success -->
<div class="modal fade" id="success-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
               <h3>
                   Спасибо, ваше письмо получено
               </h3>
            </div>
        </div>
    </div>
</div>









<div class="overlay-layer"></div>


<?php wp_footer(); ?>
</div>
</body>
</html>
