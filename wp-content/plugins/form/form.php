<?php
/*
Plugin Name: Contact Form
Plugin URI:  https://hessh.no/cms/
Description: Contactform for emails
Author:      Håkon Hess
Author URI:  webpage relevant for author
Version:     plugin version
License:     GPL v2 - http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
*/

defined( 'ABSPATH' ) or die( 'Hey, you dont have access to this file!' );

/*
defined( 'ABSPATH' ) or die( 'Hey, you dont have access to this file!' );

require_once( __DIR__ . '/includes') '/includes/class-PHPFormBuilder.php' );
// Main plugin class
if ( ! class_exists('JMOForms ') ) {
    class JMOForms {
        public __construct() {
            
        }
        public function enqueue_scripts() {

        }
        public function form( $atts ) {
            global $post;

            $atts = shortcode_atts(
                array(
                    'add_honeypot' => false,
                ), $atts, 'jmoform');

            // Instantiate the form class
            $form = new PHPFormBBuilder();

            // Set form options
            $form->set_att()
        }
        public function form_handler() {

        }
    }
}

$jmoforms = new JMOForms;
*/


function html_form_code() {
    ?>
	<form action="' . esc_url( $_SERVER['REQUEST_URI'] ) . '" method="post">

	<p>Your Name (required)</p><br/>
	<input type="text" name="name" value="' . ( isset( $_POST["name"] ) ? esc_attr( $_POST["name"] ) : '' ) . '" size="40">
    
	<p>Your Email (required)</p><br/>
    <input type="email" name="email" value="' . ( isset( $_POST["email"] ) ? esc_attr( $_POST["email"] ) : '' ) . '" size="40">
    
	<p>	Subject (required)</p><br/>
	<input type="text" name="subject" pattern="[a-zA-Z ]+" value="' . ( isset( $_POST["subject"] ) ? esc_attr( $_POST["subject"] ) : '' ) . '" size="40" />;
	</p>;

	<p>Your Message (required)</p><br/>
    <textarea rows="10" cols="35" name="message">' . ( isset( $_POST["message"] ) ? esc_attr( $_POST["message"] ) : '' ) . '</textarea>';
    
	<button type="submit" name="submitted" value="Send">Send</button>
    </form>;
    <?php
}

function deliver_mail() {

	// if the submit button is clicked, send the email
	if ( isset( $_POST['submitted'] ) ) {

		// sanitize form values
		$name    = sanitize_text_field( $_POST["name"] );
		$email   = sanitize_email( $_POST["email"] );
		$subject = sanitize_text_field( $_POST["subject"] );
		$message = esc_textarea( $_POST["message"] );

		// get the blog administrator's email address
		$to = get_option( 'admin_email' );

		$headers = "From: $name <$email>" . "\r\n";

		// If email has been process for sending, display a success message
		if ( wp_mail( $to, $subject, $message, $headers ) ) {
			echo '<div>';
			echo '<p>Thanks for contacting me, expect a response soon.</p>';
			echo '</div>';
		} else {
			echo 'An unexpected error occurred';
		}
	}
}

function shortcode() {
	ob_start();
	deliver_mail();
	html_form_code();

	return ob_get_clean();
}

add_shortcode( 'sitepoint_contact_form', 'shortcode' );

?>