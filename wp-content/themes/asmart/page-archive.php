<?php
/*
 * Template Name: Страница архива
 */
get_header(); ?>
    <div id="primary" class="  page-main  page-archive">
        <?php get_template_part('inc/hero'); ?>
        <div class="container">
            <div class="row">


                <ul class="page-archive_list-years d-lg-flex w-100  align-items-center w-100">
                    <?php
                    $categories = [
                        '2009',
                        '2008',
                        '2007',
                        '2006',
                        '2005',
                    ]
                    ?>
                    <li class="page-archive_list-years_item  ">
                        <a
                                href="#"
                                class="page-archive_list-years_item_link  page-archive_list-years_item_link__active"
                                data-slug="all"
                        >
                            Все
                        </a>
                    </li>
                    <?php foreach ($categories as $category) : ?>
                        <li class="page-archive_list-years_item  ">
                            <a
                                    href="#"
                                    class="page-archive_list-years_item_link"
                                    data-slug="#"
                            >
                                <?php echo $category; ?>
                            </a>
                        </li>

                    <?php endforeach; ?>
                </ul>
                <h2 class="page-archive_sub-title w-100">
                    2010
                </h2>
                <ul class="page-archive_list-items  ">
                    <?php
                    $list = [
                        [
                            'title' => '№ 1 (83) январь-февраль',
                            'text' => 'ОАО «ОмскВодоканал» отмечает памятную дату<br>
                                        ОАО «Омскоблгаз»: Новые идеи – новые перспективы<br>
                                        ООО «Газпром трасгаз Томск»: Стандарты ответственности<br>
                                        ООО «ПФ «Октан» - локомотив газификации коммунального теплоснабжения Омской области<br>
                                        ЗАО «ПО «Аверс-Сервис»: Возможности безграничны!<br>
                                        Омское ПО «Иртыш»: Технологии, нацеленные на завтра<br>
                                        ЗАО «Номбус»: Качество, помноженное на опыт<br>
                                        ЗАО «Техстрой»: Неоспоримые преимущества<br>
                                        Омский филиал ФГУП «ФКЦ «Земля»: Романтика и ответственность<br>
                                        ООО «Земля и право»: Риск, основанный на уверенности',
                            'link' => '#',

                        ],
                        [
                            'title' => '№ 3 (83) январь-февраль',
                            'text' => 'ОАО «ОмскВодоканал» отмечает памятную дату<br>
                                        ОАО «Омскоблгаз»: Новые идеи – новые перспективы<br>
                                        ООО «Газпром трасгаз Томск»: Стандарты ответственности<br>
                                        ООО «ПФ «Октан» - локомотив газификации коммунального теплоснабжения Омской области<br>
                                        ЗАО «ПО «Аверс-Сервис»: Возможности безграничны!<br>
                                        Омское ПО «Иртыш»: Технологии, нацеленные на завтра<br>
                                        ЗАО «Номбус»: Качество, помноженное на опыт<br>
                                        ЗАО «Техстрой»: Неоспоримые преимущества<br>
                                        Омский филиал ФГУП «ФКЦ «Земля»: Романтика и ответственность<br>
                                        ООО «Земля и право»: Риск, основанный на уверенности',
                            'link' => '#',

                        ],
                        [
                            'title' => '№ 2 (83) январь-февраль',
                            'text' => 'ОАО «ОмскВодоканал» отмечает памятную дату<br>
                                        ОАО «Омскоблгаз»: Новые идеи – новые перспективы<br>
                                        ООО «Газпром трасгаз Томск»: Стандарты ответственности<br>
                                        ООО «ПФ «Октан» - локомотив газификации коммунального теплоснабжения Омской области<br>
                                        ЗАО «ПО «Аверс-Сервис»: Возможности безграничны!<br>
                                        Омское ПО «Иртыш»: Технологии, нацеленные на завтра<br>
                                        ЗАО «Номбус»: Качество, помноженное на опыт<br>
                                        ЗАО «Техстрой»: Неоспоримые преимущества<br>
                                        Омский филиал ФГУП «ФКЦ «Земля»: Романтика и ответственность<br>
                                        ООО «Земля и право»: Риск, основанный на уверенности',
                            'link' => '#',

                        ],


                    ];
                    ?>
                    <?php foreach ($list as $listItem) : ?>
                        <li class="page-archive_list-items_item">
                            <div class="page-archive_list-items_item_img-block">
                                <a href="<?php echo $listItem['link']; ?>">
                                    <img src="<?php  echo get_theme_file_uri('/assets/images/archive.jpg') ?>" alt="Изображение"/>
                                </a>
                            </div>
                            <div class="page-archive_list-items_item_content">
                                <h3 class="page-archive_list-items_item_content_title">
                                    <a href="<?php echo $listItem['link']; ?>">
                                        <?php echo $listItem['title']; ?>
                                    </a>
                                </h3>
                                <div class="page-archive_list-items_item_content_text">
                                    <?php echo $listItem['text']; ?>
                                </div>
                            </div>
                        </li>

                    <?php endforeach; ?>
                </ul>
                <div class="news-pagination d-flex justify-content-center w-100">
                    <a href="<?= $url; ?>" class="link link-main alt">
                        Показать ещё
                    </a>
                </div>
            </div>
        </div>
    </div>
<?php get_footer();
