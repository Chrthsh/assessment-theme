<?php
$service_section = get_field('service_section');

$service_one = $service_section['service_one'] ?? [];
$service_two = $service_section['service_two'] ?? [];
$service_three = $service_section['service_three'] ?? [];
$service_four = $service_section['service_four'] ?? [];

$icon_id_one = $service_one['icon'];
$icon_id_two = $service_two['icon'];
$icon_id_three = $service_three['icon'];
$icon_id_four = $service_four['icon'];
?>

<section class='home-services-container'>
    <div class='home-services-item'>
        <a href="<?= esc_html($service_one['permalink']); ?>">
            <div class="arrow-icon"><img src="<?= get_template_directory_uri(); ?>/assets/icons/diag-arrow-up.svg" alt=""></div>
            <div class="home-services-media">
                <?php echo wp_get_attachment_image(
                    $icon_id_one,
                    'full',
                    false,
                    ['class' => 'home-services-image']
                ); ?>
            </div>
            <h5><?= esc_html($service_one['title']); ?></h5>
        </a>
    </div>
    <div class='home-services-item'>
        <a href="<?= esc_html($service_two['permalink']); ?>">
            <div class="arrow-icon"><img src="<?= get_template_directory_uri(); ?>/assets/icons/diag-arrow-up.svg" alt=""></div>
            <div class="home-services-media">
                <?php echo wp_get_attachment_image(
                    $icon_id_two,
                    'full',
                    false,
                    ['class' => 'home-services-image']
                ); ?>
            </div>
            <h5><?= esc_html($service_two['title']); ?></h5>
        </a>
    </div>
    <div class='home-services-item'>
        <a href="<?= esc_html($service_three['permalink']); ?>">
            <div class="arrow-icon"><img src="<?= get_template_directory_uri(); ?>/assets/icons/diag-arrow-up.svg" alt=""></div>
            <div class="home-services-media">
                <?php echo wp_get_attachment_image(
                    $icon_id_three,
                    'full',
                    false,
                    ['class' => 'home-services-image']
                ); ?>
            </div>
            <h5><?= esc_html($service_three['title']); ?></h5>
        </a>
    </div>
    <div class='home-services-item'>
        <a href="<?= esc_html($service_four['permalink']); ?>">
            <div class="arrow-icon"><img src="<?= get_template_directory_uri(); ?>/assets/icons/diag-arrow-up.svg" alt=""></div>
            <div class="home-services-media">
                <?php echo wp_get_attachment_image(
                    $icon_id_four,
                    'full',
                    false,
                    ['class' => 'home-services-image']
                ); ?>
            </div>
            <h5><?= esc_html($service_four['title']); ?></h5>
        </a>
    </div>

</section>