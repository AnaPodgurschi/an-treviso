<?php
$contacts_title = get_field('contacts_title', 'option');
$contacts_subtitle = get_field('contacts_subtitle', 'option');
$contacts_text = get_field('contacts_text', 'option');
$email = get_field('email', 'option');
$member_title = get_field('member_title', 'option');
$member_text = get_field('member_text', 'option');
$member_email = get_field('member_email', 'option');
$form_title = get_field('form_title', 'option');
$link_text = get_field('link_text', 'option');
$link_url = get_field('link_url', 'option');
$short_company_name = get_field('short_company_name', 'option');
$full_company_name = get_field('full_company_name', 'option');
$vat = get_field('vat', 'option');
$opening_times = get_field('opening_times', 'option');
$full_address = get_field('full_address', 'option');
$phone_number = get_field('phone_number', 'option');
$watsup = get_field('watsup', 'option');
$social_links = get_field('social_links', 'option');
$client_by = get_field('client_by', 'option');
$partner_logo = get_field('parnter_logo', 'option');
$partner_url = get_field('partner_url', 'option');

?>
<footer class="main-footer">
    <section class="main-footer__top" id="contatti">
        <div class="main-footer__wrap">
            <div class="main-footer__contacts">
                <div class="main-footer__item">
                    <h3 class="main-footer__title">
                        <img src="<?php echo $contacts_title; ?>" alt="">
                    </h3>
                    <h4 class="main-footer__subtitle"><?php echo $contacts_subtitle; ?></h4>
                    <div class="main-footer__text"><?php echo $contacts_text; ?></div>
                    <a href="" class="main-footer__email"><?php echo $email; ?></a>
                </div>
                <h3 class="main-footer__title">
                    <img src="<?php echo $member_title; ?>" alt="">
                </h3>
                <div class="main-footer__text"><?php echo $member_text; ?></div>
                <a href="" class="main-footer__email"><?php echo $member_email; ?></a>
            </div>
            <div class="main-footer__right">
                <h3 class="main-footer__title">
                    <img src="<?php echo $form_title; ?>" alt="">
                </h3>
<!-- 
                <a class="main-footer__link link" href="<?php echo $link_url; ?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/i/static/link.svg" alt="">
                    <span><?php echo $link_text; ?></span>
                </a> -->
            </div>
        </div>
    </section>
    <div class="main-footer__socials">
        <?php foreach ($social_links as $link) : ?>
            <a href="<?php echo $link['url'] ?>" class="main-footer__social">
                <img src="<?php echo $link['immagine'] ?>" alt="">
            </a>
        <?php endforeach; ?>
    </div>
    <div class="main-footer__bottom">
        <div class="main-footer__col">
            <a class="privacy_link" href="/privacy-policy" target="_blank">Privacy &amp; Cookie Policy</a>
        </div>
        <div class="main-footer__col">
            Copyright &copy; 2022 Treviso Wine Club. Partita Iva: <?php echo $vat; ?>. Tutti i diritti riservati.
        </div>
        <div class="main-footer__col">
            <span>Treviso Wine Club ha scelto</span> <a href="<?php echo $partner_url; ?>" class="main-footer__partner" target="_blank">Bludelego</a>
        </div>
    </div>
</footer>
</div>
<?php wp_footer(); ?>
</body>

</html>