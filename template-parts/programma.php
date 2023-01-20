<?php
$programma = get_field('programma');
$title = $programma["title"];
$text = $programma["text"];
$image_before = $programma["image_top"];
$image_after = $programma["image_bottom"];
$btn_text = $programma["btn_text"];
$btn_url = $programma["btn_url"];
?>
<section class="programma" id="programma">
    <!-- <div class="dot"></div> -->
    <div class="programma__wrap">
        <div class="programma__img" data-stellar-ratio="1.2" data-stellar-vertical-offset="400" style="background-image: url(<?php echo $image_before; ?>)"></div>

        <div class="programma__content">
            <h2 class="programma__title"><?php echo $title ?></h2>
            <div class="programma__text text"><?php echo $text ?></div>
            <a class="programma__link link" href="<?php echo $btn_url ?>">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/i/static/link.svg" alt="<?php echo $text; ?>">
                <span><?php echo $btn_text ?></span>
            </a>
        </div>

        <div class="programma__after" style="background-image: url('<?php echo $image_after; ?>');"></div>
    </div>
</section>