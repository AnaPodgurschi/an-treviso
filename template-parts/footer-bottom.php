<div class="main-footer__bottom">
    <div class="copyright">
        <?php
        $full_company_name = get_field('full_company_name', 'option') ? get_field('full_company_name', 'option') : '<h3>Add full_company_name from Admin -> Acf Settings</h3>';
        $vat = get_field('vat', 'option') ? get_field('vat', 'option') : '<h3>Add vat from Admin -> Acf Settings</h3>';
        ?>
        Copyright <?php echo date('Y'); ?> <?php echo $full_company_name; ?> Partita Iva : <?php echo $vat; ?>. Tutti i diritti riservati.
        <a target="_blank" href="/privacy-policy/">Privacy Policy</a>.
    </div>
    <div class="partner">
        <?php
        $short_company_name = get_field('short_company_name', 'option') ? get_field('short_company_name', 'option') : '<h3>Add short company name from Admin -> Acf Settings</h3>';
        $client_by = get_field('client_by', 'option');
        $parnter_logo = get_field('parnter_logo', 'option') ? get_field('parnter_logo', 'option') : '';
        $partner_url = get_field('partner_url', 'option') ? get_field('partner_url', 'option') : '';
        ?>
        <div class="partner__text">
            <?php echo $short_company_name; ?> ha scelto <?php echo $client_by; ?>
        </div>
        <?php if (!$parnter_logo): ?>
            <h3>Add partner logo and url from Admin -> Acf Settings</h3>
        <?php endif; ?>
        <a target="_blank" href="<?php echo $partner_url; ?>">
            <img src="<?php echo $parnter_logo; ?>" alt="">
        </a>
    </div>
</div>
