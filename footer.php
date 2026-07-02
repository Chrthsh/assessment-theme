<?php
$settings_page_id = 191;
$footer = get_field('footer', $settings_page_id);
$logo_id = $footer['logo'] ?? null;
?>

<footer class='site-footer'>
    <div class="main-footer section-container">
        <div class="main-footer-left">
            <?php if ($logo_id): ?>
                <?php echo wp_get_attachment_image($logo_id, 'full', false, ['class' => 'footer-logo']); ?>
            <?php endif; ?>
            <?= do_shortcode('[forminator_form id="200"]'); ?> 
        </div>
        <div class="main-footer-right">
                <div class="menus">
                    <div class="menu-container">
                        <p class="menu-title">Home</p>
                        <div class="menu-items"><ul><li><a href="#">Link 1</a></li><li><a href="#">Link 2</a></li><li><a href="#">Link 3</a></li></ul></div>
                    </div>
                    <div class="menu-container">
                        <p class="menu-title">About Us</p>
                        <div class="menu-items"><ul><li><a href="#">Link 1</a></li><li><a href="#">Link 2</a></li><li><a href="#">Link 3</a></li></ul></div>
                    </div>
                    <div class="menu-container">
                        <p class="menu-title">Properties</p>
                        <div class="menu-items"><ul><li><a href="#">Link 1</a></li><li><a href="#">Link 2</a></li><li><a href="#">Link 3</a></li></ul></div>
                    </div>
                    <div class="menu-container">
                        <p class="menu-title">Services</p>
                        <div class="menu-items"><ul><li><a href="#">Link 1</a></li><li><a href="#">Link 2</a></li><li><a href="#">Link 3</a></li></ul></div>
                    </div>
                    <div class="menu-container">
                        <p class="menu-title">Contact Us</p>
                        <div class="menu-items"><ul><li><a href="#">Link 1</a></li><li><a href="#">Link 2</a></li><li><a href="#">Link 3</a></li></ul></div>
                    </div>
                </div>
        </div>
    </div>
    <div class="copyright-footer section-container">
        <div class="copyright">
            <p>&copy; <?php echo date('Y'); ?> Estatein. All Rights Reserved.</p> 
            <?=  wp_nav_menu(['menu' => 4,]); ?>
        </div>
        <div class="copyright-social">

        </div>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>