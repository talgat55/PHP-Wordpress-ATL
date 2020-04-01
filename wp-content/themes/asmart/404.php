<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>
    <div id="primary" class="content-area page-main  error-page ">
        <?php get_template_part('inc/hero'); ?>
        <h1 class="page__main-title">404</h1>
        <div class="container">
            <div class="row flex">

                <div class="col-sm-12 col-xs-12   ">
                    <div class="content">

                        <p class="error-text">
                            Добро пожаловать на страницу 404! Вы находитесь здесь, потому что ввели адрес страницы, которая уже не существует или была перемещена по другому адресу
                          </p>
                    </div>

                </div>


            </div>

        </div>
    </div>

<?php get_footer();
