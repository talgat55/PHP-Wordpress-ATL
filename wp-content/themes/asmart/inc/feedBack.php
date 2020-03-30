<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 10.02.20
 * Time: 12:49
 */
?>
<section id="feedback" class="feedback lazy"   data-src="<?php echo get_theme_file_uri('/assets/images/bg-feedback-2.png'); ?>">
    <div class="container">
        <div class="row">
            <div class="feedback__form-wrapper d-md-flex w-100" >
                <div class="feedback__first d-flex align-items-center  ">
                    <ul class="feedback__list-soc-links">
                        <li class="feedback__item-soc-link  d-flex align-items-center">
                            <div class="feedback__img-soc-link">
                                <img src="<?php echo get_theme_file_uri('/assets/images/marker.png'); ?>" alt="Иконка"/>
                            </div>
                            <p>
                                ул. Маркса, 18 к.10
                            </p>
                        </li>
                        <li class="feedback__item-soc-link  d-flex align-items-center">
                            <div class="feedback__img-soc-link">
                                <img src="<?php echo get_theme_file_uri('/assets/images/phone_soc.png'); ?>"
                                     alt="Иконка"/>
                            </div>
                            <a href="tel:+7 (3812) 49 49 49">
                                +7 (3812) 49 49 49
                            </a>
                        </li>
                        <li class="  d-flex align-items-center feedback__item-soc-link">
                            <div class="feedback__img-soc-link">
                                <img src="<?php echo get_theme_file_uri('/assets/images/mail.png'); ?>"
                                     alt="Иконка"/>
                            </div>
                            <a href="mailto:atlantida55@inbox.ru">
                                atlantida55@inbox.ru
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="feedback__second col ">
                    <h4 class="feedback__title">
                        Рекламная компания <span>"Атлантида"</span>
                    </h4>
                    <p class="feedback__text">
                        Оставьте свои контактные данные, и мы с Вами свяжемся
                    </p>
                    <?php echo  do_shortcode('[contact-form-7 id="74" title="Обратная связь"  html_class="form-feedback"]'); ?>
                </div>
            </div>
        </div>
    </div>
</section>
