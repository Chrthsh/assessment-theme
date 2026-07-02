<?php
$cta_section = get_field('cta_section');
?>

<section class="cta-container">
    <div class="cta-inner section-container">
        <h3><?= esc_html($cta_section['title']); ?></h3>
        <div class="section-description">
            <p><?= esc_html($cta_section['subtitle']); ?></p>
            <a class="button purple-button" href="<?= esc_html($cta_section['button']['url']); ?>"><?= esc_html($cta_section['button']['caption']); ?></a>
        </div>
    </div>
</section>