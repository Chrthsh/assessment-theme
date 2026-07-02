<?php
$faq_section = get_field('faq_section');
$faq_one = $faq_section['item_one'] ?? []; 
$faq_two = $faq_section['item_two'] ?? []; 
$faq_three = $faq_section['item_three'] ?? [];
?>

<section class="home-faq-container section-container">
    <h1><?= esc_html($faq_section['title']); ?></h1>
    <div class="home-faq-inner section-description">
        <p><?= esc_html($faq_section['subtitle']); ?></p>
        <a class="button" href="<?= esc_html($faq_section['button']['url']); ?>"><?= esc_html($faq_section['button']['caption']); ?></a>
    </div>
    <div class='home-faq-item card-container'>
        <div class="faq-container card-item">
            <div class="heading"><?php echo esc_html($faq_one['heading']); ?></div>
            <div class="description"><?php echo esc_html($faq_one['description']); ?></div>
            <a class="button" href="<?= esc_html($faq_section['button']['url']); ?>"><?= esc_html($faq_section['button']['caption']); ?></a>
        </div>
        <div class="faq-container card-item">
            <div class="heading"><?php echo esc_html($faq_two['heading']); ?></div>
            <div class="description"><?php echo esc_html($faq_two['description']); ?></div>
            <a class="button" href="<?= esc_html($faq_section['button']['url']); ?>"><?= esc_html($faq_section['button']['caption']); ?></a>
        </div>
        <div class="faq-container card-item">
            <div class="heading"><?php echo esc_html($faq_three['heading']); ?></div>
            <div class="description"><?php echo esc_html($faq_three['description']); ?></div>
            <a class="button" href="<?= esc_html($faq_section['button']['url']); ?>"><?= esc_html($faq_section['button']['caption']); ?></a>
        </div>

    </div>
    
    <div class="navigation">
        <div class="navigation-indicator">
            <span class="active-number">01</span>
            <span>of 10</span>
        </div>
        <div class="navigation-arrow">
            <span class="arrow-left">&larr;</span>
            <span class="arrow-right">&rarr;</span>
        </div>
    </div>
</section>