    <?php
    $home_intro = get_field('home_intro');
    $title = $home_intro['title'];
    $image = $home_intro['image'];
    ?>
    <section class="home-intro" id="benvenuto">
        <div class="home-intro__img" data-stellar-background-ratio="0.5" style="background-image: url('<?php echo $image; ?>');"> </div>
        <!-- <img class="home-intro__img" src="<?php echo $image; ?>" alt=""> -->
        <div class="home-intro__content">
            <h1 class="home-intro__title"><?php echo $title; ?></h1>
        </div>
        <a href="#" class="home-intro__down" id="js-down">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/i/static/arrow-intro.svg" alt="">
        </a>
    </section>