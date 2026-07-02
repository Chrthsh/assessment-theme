<?php
$settings_page_id = 191;
$header = get_field('header', $settings_page_id);
$logo_id = $header['logo'] ?? null;
$banner = get_field('banner', $settings_page_id);
?>

<!DOCTYPE html><html <?php language_attributes(); ?>><head><meta charset='<?php bloginfo('charset'); ?>'><meta name='viewport' content='width=device-width, initial-scale=1'><?php wp_head(); ?></head>
<body <?php body_class(); ?>>
    <header class='site-header'>
        <div class="banner-header">
            <?php if ($banner): ?>
                <p><?= esc_html($banner['description']); ?></p>
                <a href="<?= esc_html($banner['cta']['url']); ?>"><?= esc_html($banner['cta']['caption']); ?></a>
            <?php endif; ?>
        </div>
        <div class='main-header'>
            <div class="section-container">
                <?php if ($logo_id): ?>
                    <?php echo wp_get_attachment_image($logo_id, 'full', false, ['class' => 'header-logo']); ?>
                <?php endif; ?>
                <?php wp_nav_menu(['theme_location'=>'primary']); ?><a href="#" class='menu-toggle'>☰</a>
            </div>            
        </div>
    </header>