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
		<img src="http://hessh.no/cms/wp-content/uploads/2019/10/logo-white.png" alt="Surf Guru" >
    <div id="footer-container">
        <div class="row">
            <div class="col-lg-4 col-sm-12">
                <p class="footer-text">Surf guru er en nettside opprettholdt av et digitalt markedsføringsfirma som skaffer avtaler med aktører innenfor surfeturer. Her vil du ha muligheten til å utforske de ulike surfeturene på en og samme nettside. </p>
            </div> 
            <div class="col-push-1 sm-none"></div>
           <!--<div class="col-lg-3 col-sm-12 footer-content">
                <h3 class="bold footer-heading">Populære artikler</h3> 
                <?php/* wp_nav_menu(array(
					'theme_location' => 'footer-articles',
					'menu_id' => 'popular-articles',
					'container' => 'ul',
                    'menu_class' => 'popular-articles'
                )); */?> 
            </div> -->
            <div class="col-push-1 sm-none"></div>
            <div class="col-lg-3 col-sm-12 footer-content">
                <h3 class="bold footer-heading">Kontakt</h3>
                <a href="kontakt" id="email" class="icon footer-text"><span class="material-icons">email</span>kontakt@surfguru.no</a>
                <p id="location" class="icon footer-text"><span class="material-icons">location_on</span>Bogstadveien 14b,<br />0355 Oslo, Norge</p>
                <a id="facebook" target="_blank" href="https://www.facebook.com">Nå oss på Facebook</a>
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
                <p id="footer-info">Surf Guru drives av marketing AS, organisationsnummer  123456789, adress Bogstadveien 14b, 0355 Oslo, Norge.</p>
            </div>
        </div>
    </div>
</footer>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
