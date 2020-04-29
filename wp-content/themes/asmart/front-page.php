<?php
/*
 * Template Name: Главная страница
 */
$firstBlock = get_field('show_first_block');
$serviceBlock = get_field('show_services');
$worksBlock = get_field('show_works');
$reviewBlock = get_field('show_review');
$advBlock = get_field('show_adw_block');
$clientsBlock = get_field('show_clients');
$feedbackBlock = get_field('show_feedback');
$mapBlock = get_field('show_map');

get_header(); ?>

    <h1 class="hide-title"><?= bloginfo('name'); ?></h1>
<?php get_template_part('inc/homeSlide'); ?>
<?php if ($firstBlock == 'yes'): ?>
    <?php get_template_part('inc/homeAbout'); ?>
<?php endif; ?>
<?php if ($serviceBlock == 'yes'): ?>
    <?php get_template_part('inc/homeService'); ?>
<?php endif; ?>
<?php if ($worksBlock == 'yes'): ?>
    <?php get_template_part('inc/homePortfolio'); ?>
<?php endif; ?>
<?php if ($reviewBlock == 'yes'): ?>
    <?php get_template_part('inc/homeReview'); ?>
<?php endif; ?>
<?php if ($advBlock == 'yes'): ?>
    <?php get_template_part('inc/homeAwards'); ?>
<?php endif; ?>
<?php if ($clientsBlock == 'yes'): ?>
    <?php get_template_part('inc/homePartners'); ?>
<?php endif; ?>
<?php if ($feedbackBlock == 'yes'): ?>
    <?php get_template_part('inc/feedBack'); ?>
<?php endif; ?>
<?php if ($mapBlock == 'yes'): ?>
    <?php get_template_part('inc/map'); ?>
<?php endif; ?>
<?php get_footer();
