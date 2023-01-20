<?php
$memberg = get_field('memberg');
$title = $memberg["title"];
$items = $memberg["items"];
$image = $memberg["image"];
?>
<section class="memberg" id="members_only">

    <div id="members-only"></div>
    <div class="memberg__wrap">
        <!-- <h2 class="memberg__title"><?php echo $title ?></h2> -->
        <h2 class="memberg__title">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/m.svg" alt="">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/e.svg" alt="">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/m.svg" alt="">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/b.svg" alt="">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/e.svg" alt="">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/r.svg" alt="">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/s.svg" alt="">
            <span> </span>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/o.svg" alt="">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/n.svg" alt="">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/l.svg" alt="">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/y.svg" alt="">
        </h2>
        <div class="memberg__content">
            <?php foreach ($items as $item) : ?>
                <div class="memberg__item">
                    <div class="memberg__item-img"> <img src="<?php echo $item["image"]; ?>" alt="<?php echo $item['text'] ?>"></div>
                    <div class="memberg__item-content">
                        <h2 class="memberg__item-title"><?php echo $item["title"]; ?></h2>
                        <div class="memberg__text text"><?php echo $item['text']; ?></div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>