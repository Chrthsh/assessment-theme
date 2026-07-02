<?php
$service_section = get_field('featured_section');

$properties = $service_section['properties'] ?? [];
?>

<section class="home-featured-container section-container">
    <h1><?= esc_html($service_section['title']); ?></h1>
    <div class="home-featured-inner section-description">
        <p><?= esc_html($service_section['subtitle']); ?></p>
        <a class="button" href="<?= esc_html($service_section['button']['url']); ?>"><?= esc_html($service_section['button']['caption']); ?></a>
    </div>
    <div class='home-featured-item'>
        <?php if ($properties) : ?>
            <div class="property-grid card-container">
                <?php foreach ($properties as $property_id) : 
                    $title = get_the_title($property_id);
                    $price = get_field('price', $property_id);
                    $bed = get_field('bedroom', $property_id);
                    $bath = get_field('bathroom', $property_id);
                    $type = get_field('property_type', $property_id);
                    $link = get_permalink($property_id);
                ?>
                    <div class="property-card card-item">
                        <a href="<?= esc_url($link); ?>">
                            <?= get_the_post_thumbnail(
                                $property_id,
                                'medium',
                                ['class' => 'property-image']
                            ); ?>
                        </a>
                        <h4><?= esc_html($title); ?></h4>
                        <div class="property-spec">
                            <span><?= esc_html($bed); ?>-Bedroom</span>
                            <span><?= esc_html($bath); ?>-Bathroom</span>
                            <span><?= esc_html($type); ?></span>
                        </div>
                        <div class="property-bottom-section">
                            <div class="property-price">
                            <span>Price</span>    
                            <h4><?= esc_html($price); ?></h4>
                            </div>
                            <a class="button" href="<?= esc_url($link); ?>">View Property Details</a>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
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