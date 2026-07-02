<?php
$hero_section = get_field('hero_section');
$image_id = $hero_section['featured_image'];
?>

<section class='hero-section'>
    <div class='hero-content'>
        <div class="hero-content-inner">
            <h1><?= esc_html($hero_section['title']); ?></h1>
            <h2><?= esc_html($hero_section['subtitle']); ?></h2>
            <div class="hero-button-container">
                <a class="button" href="<?= esc_html($hero_section['buttons']['left_button']['url']); ?>"><?= esc_html($hero_section['buttons']['left_button']['caption']); ?></a>
                <a class="button purple-button" href="<?= esc_html($hero_section['buttons']['right_button']['url']); ?>"><?= esc_html($hero_section['buttons']['right_button']['caption']); ?></a>
            </div>
            <div class="hero-stats-container">
                <div class="hero-stats">
                    <h3 class="stats-number"><?= esc_html($hero_section['stats_section']['stats_one']['number']); ?></h3>
                    <span class="stats-description"><?= esc_html($hero_section['stats_section']['stats_one']['caption']); ?></span>
                </div>
                <div class="hero-stats">
                    <h3 class="stats-number"><?= esc_html($hero_section['stats_section']['stats_two']['number']); ?></h3>
                    <span class="stats-description"><?= esc_html($hero_section['stats_section']['stats_two']['caption']); ?></span>
                </div>
                <div class="hero-stats">
                    <h3 class="stats-number"><?= esc_html($hero_section['stats_section']['stats_three']['number']); ?></h3>
                    <span class="stats-description"><?= esc_html($hero_section['stats_section']['stats_three']['caption']); ?></span>
                </div>
            </div>
        </div>
    </div>
    <div class="hero-image">
        <?php echo wp_get_attachment_image(
            $image_id,
            'full',
            false,
            ['class' => 'hero-image']
        ); ?>
    </div>

</section>