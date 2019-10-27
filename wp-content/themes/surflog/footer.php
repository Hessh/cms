<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Surflog
 */

?>

	</div><!-- #content -->
	<footer>
    <div id="footer-container">
        <div class="row">
            <div class="col-lg-4 col-sm-12">
                <div class="footer-logo-container">
                    <?php
                    $custom_logo_id = get_theme_mod('custom_logo');
                    $custom_logo_url = wp_get_attachment_image_url($custom_logo_id, 'full');
                    echo '<img class="footer-logo" src="' . esc_url($custom_logo_url) . '" alt="footer-logo">';
                    ?>
                    <span class="footer-logo-text"><span><?php echo bloginfo('name') ?></span><?php echo bloginfo('description') ?></span>
                </div>
                <p class="footer-text">Målet med VPNportalen är att vara den ledande sidan för nätsäkerhet och integritet i Sverige. Vi testar och recenserar VPN-tjänster, och publicerar nyheter inom VPN, säkerhet och personuppgiftsskydd.</p>
            </div>
            <div class="col-push-1 sm-none"></div>
            <div class="col-lg-3 col-sm-12 footer-content">
                <h3 class="bold footer-heading">Populära artiklar</h3>
                <?php wp_nav_menu(array(
                    'theme_location' => 'footer-articles',
                    'menu_id' => 'popular-articles',
                    'container' => 'ul',
                    'menu_class' => 'popular-articles'
                )); ?>
            </div>
            <div class="col-push-1 sm-none"></div>
            <div class="col-lg-3 col-sm-12 footer-content">
                <h3 class="bold footer-heading">Kontakt</h3>
                <a href="kontakt" id="email" class="icon footer-text"><span class="material-icons">email</span>kontakt@vpnportalen.se</a>
                <p id="location" class="icon footer-text"><span class="material-icons">location_on</span>Bogstadveien 27b,<br />0355 Oslo, Norge</p>
                <a id="facebook" target="_blank" href="https://www.facebook.com/vpnportalen.se">Nå oss på Facebook</a>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <?php wp_nav_menu(array(
                    'theme_location' => 'footer-menu',
                    'menu_id' => 'footer-menu',
                    'container' => 'ul',
                    'menu_class' => 'footer-menu'
                )); ?>
            </div>
            <div class="col-12">
                <p id="footer-info">VPNportalen drivs av företaget LWIM AS, organisationsnummer 915040004, adress Bogstadveien 27b, 0355 Oslo, Norge.</p>
            </div>
        </div>
    </div>
</footer>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
