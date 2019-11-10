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
        <img class="sm-none" src="http://hessh.no/cms/wp-content/uploads/2019/11/logo-white.png" alt="SurfGuru" >
        <img class="lg-none" src="http://hessh.no/cms/wp-content/uploads/2019/11/logo-kort-footer.png" alt="SurfGuru">
    <div id="footer-container">
        <div class="row">
            <div class="col-lg-4 col-sm-12">
                <p class="footer-text">SurfGuru is a website maintained by a digital marketing company that obtains deals with variouse surfingcamps around the world. Here you will have the opportunity to explore the various surf trips all in one place</p>
            </div>
            <div class="col-push-4 sm-none"></div>
            <div class="col-lg-4 col-sm-12 footer-content">
                <h3 class="bold footer-heading">Kontakt</h3>
                <a href="mailto:kontakt@surfguru.no" id="email" class="icon footer-text"><span class="material-icons">email</span>kontakt@surfguru.no</a>
                <a id="facebook" target="_blank" href="https://www.facebook.com"><img src="http://hessh.no/cms/wp-content/uploads/2019/11/facebook-e1573339657408.png" alt="Facebook">Nå oss på Facebook</a>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-sm-12">
                <?php wp_nav_menu('footer-menu')?>
            </div>
            <div class="col-lg-6 col-sm-12">
                <p id="footer-info">SurfGuru is maintained by Digital Marketing AS</p>
            </div>
        </div>
    </div>
</footer>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
