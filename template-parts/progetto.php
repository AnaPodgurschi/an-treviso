<section class="progetto" id="js-progetto">
    <div id="progetto"></div>
    <?php $progetto = get_field('progetto'); ?>
    <?php if ($progetto) : ?>
        <div class="progetto__wrap" >
            <div class="progetto__img">
                <!-- data-stellar-ratio="1.3" data-stellar-vertical-offset="900" -->
                <div class="progetto__image"  style="background-image: url('<?php echo $progetto['image']; ?>');"></div>
                <h2 class="progetto__title"><?php echo $progetto['title']; ?></h2>
            </div>
            <div class="progetto__content">
                <div class="progetto__text text"><?php echo $progetto['text']; ?></div>
            </div>
        </div>
    <?php endif; ?>
</section>