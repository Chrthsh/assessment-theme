<?php
$testimony_section = get_field('testimony_section');
$testimony_one = $testimony_section['testimony_one'] ?? []; 
$testimony_two = $testimony_section['testimony_two'] ?? []; 
$testimony_three = $testimony_section['testimony_three'] ?? [];

$photo_one = $testimony_one['photo'] ?? []; 
$photo_two = $testimony_two['photo'] ?? []; 
$photo_three = $testimony_three['photo'] ?? [];
?>

<section class="home-testimony-container section-container">
    <h1><?= esc_html($testimony_section['title']); ?></h1>
    <div class="home-testimony-inner section-description">
        <p><?= esc_html($testimony_section['subtitle']); ?></p>
        <a class="button" href="<?= esc_html($testimony_section['button']['url']); ?>"><?= esc_html($testimony_section['button']['caption']); ?></a>
    </div>
    <div class='home-testimony-item card-container'>
        <div class="testimony-container card-item">
            <div class="rating"><?php echo esc_html($testimony_one['rating']); ?></div>
            <div class="heading"><?php echo esc_html($testimony_one['heading']); ?></div>
            <div class="testimony"><?php echo esc_html($testimony_one['testimony']); ?></div>
            <div class="person-container">
                <div class="person-image">            
                    <?php echo wp_get_attachment_image(
                        $photo_one,
                        'thumbnail',
                        false,
                        ['class' => 'home-services-image']
                    ); ?>
                </div>
                <div class="person-info">
                    <h5 class="person-name"><?php echo esc_html($testimony_one['name']); ?></h5>
                    <span class="person-location"><?php echo esc_html($testimony_one['location']); ?></span>
                </div>
            </div>
        </div>
        <div class="testimony-container card-item">
            <div class="rating"><?php echo esc_html($testimony_two['rating']); ?></div>
            <div class="heading"><?php echo esc_html($testimony_two['heading']); ?></div>
            <div class="testimony"><?php echo esc_html($testimony_two['testimony']); ?></div>
            <div class="person-container">
                <div class="person-image">            
                    <?php echo wp_get_attachment_image(
                        $photo_two,
                        'thumbnail',
                        false,
                        ['class' => 'home-services-image']
                    ); ?>
                </div>
                <div class="person-info">
                    <h5 class="person-name"><?php echo esc_html($testimony_two['name']); ?></h5>
                    <span class="person-location"><?php echo esc_html($testimony_two['location']); ?></span>
                </div>
            </div>
        </div>
        <div class="testimony-container card-item">
            <div class="rating"><?php echo esc_html($testimony_three['rating']); ?></div>
            <div class="heading"><?php echo esc_html($testimony_three['heading']); ?></div>
            <div class="testimony"><?php echo esc_html($testimony_three['testimony']); ?></div>
            <div class="person-container">
                <div class="person-image">            
                    <?php echo wp_get_attachment_image(
                        $photo_three,
                        'thumbnail',
                        false,
                        ['class' => 'home-services-image']
                    ); ?>
                </div>
                <div class="person-info">
                    <h5 class="person-name"><?php echo esc_html($testimony_three['name']); ?></h5>
                    <span class="person-location"><?php echo esc_html($testimony_three['location']); ?></span>
                </div>
            </div>
        </div>

    </div>
    
    <div class="navigation">
        <div class="navigation-indicator">
            <span class="active-number">01</span>
            <span>of 60</span>
        </div>
        <div class="navigation-arrow">
            <span class="arrow-left">&larr;</span>
            <span class="arrow-right">&rarr;</span>
        </div>
    </div>
</section>