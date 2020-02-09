<?php


get_header(); ?>
<h1 class="hide-title"><?=   bloginfo('name'); ?></h1>
<?php get_template_part('inc/homeSlide'); ?>
<?php get_template_part('inc/homeAbout'); ?>
<?php get_template_part('inc/homeService'); ?>
<?php get_template_part('inc/homePortfolio'); ?>
<?php get_template_part('inc/homeReview'); ?>
<?php get_template_part('inc/homeAwards'); ?>
<?php get_template_part('inc/homePartners'); ?>
<?php get_footer();
