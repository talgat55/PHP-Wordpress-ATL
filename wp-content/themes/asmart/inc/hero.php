<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 13.02.20
 * Time: 18:23
 */

$bgImage = get_query_var('bg_image');
if (!empty($bgImage)) {
    $redyUrl = $bgImage;
} else {
    $redyUrl = get_theme_file_uri('/assets/images/hero.png');
}
?>
<section class="hero  lazy" data-src="<?php echo $redyUrl; ?>"></section>
