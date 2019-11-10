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

defined('ABSPATH') or die('Hey, you dont have access to this file!');

/*
function html_form_code() {
    ?>
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">

	<label for="name">Your Name (required)</label><br/>
	<input type="text" name="name"><br/>
	
	<label for="email">Your Email (required)</label><br/>
    <input type="email" name="email"><br/>
	
	<label for="subject">Subject (required)</label><br/>
	<input type="text" name="subject" required="required"><br/>

	<label for="message">Your Message (required)</label><br/>
    <textarea rows="10" cols="35" name="message"></textarea>
    
	<button type="submit" name="submitted" value="Send">Send</button>
	</form>

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
		$to = ( 'sofiegjonsson@gmail.com' );

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

add_shortcode( 'sitepoint_form', 'shortcode' );

?> */
/*
function html_form_code()
{
	echo '<form action="' . esc_url($_SERVER['REQUEST_URI']) . '" method="POST">';
	echo '<p>';
	echo 'Your Name (required) <br/>';
	echo '<input type="text" name="name" value="' . (isset($_POST["name"]) ? esc_attr($_POST["name"]) : '') . '" />';
	echo '</p>';
	echo '<p>';
	echo 'Your Email (required) <br/>';
	echo '<input type="email" name="email" value="' . (isset($_POST["email"]) ? esc_attr($_POST["email"]) : '') . '" />';
	echo '</p>';
	echo '<p>';
	echo 'Subject (required) <br/>';
	echo '<input type="text" name="subject" value="' . (isset($_POST["subject"]) ? esc_attr($_POST["subject"]) : '') . '" />';
	echo '</p>';
	echo '<p>';
	echo 'Your Message (required) <br/>';
	echo '<textarea rows="10" cols="35" name="message">' . (isset($_POST["message"]) ? esc_attr($_POST["message"]) : '') . '</textarea>';
	echo '</p>';
	echo '<p><input type="submit" name="submitted" value="Send"></p>';
	echo '</form>';
}

function deliver_mail()
{

	// if the submit button is clicked, send the email
	if (isset($_POST['submitted'])) {

		// sanitize form values
		$name    =  $_POST["name"];
		$email   =  $_POST["email"];
		$subject =  $_POST["subject"];
		$message =  $_POST["message"];

		// get the blog administrator's email address
		$to = get_option('sofiegjonsson@gmail.com');

		$headers = "From: $name <$email>" . "\r\n";

		// If email has been process for sending, display a success message
		if (wp_mail($to, $subject, $message, $headers)) {
			echo '<div>';
			echo '<p>Thanks for contacting me, expect a response soon.</p>';
			echo '</div>';
		} else {
			echo 'An unexpected error occurred';
		}
	}
}

function shortcode()
{
	ob_start();
	deliver_mail();
	html_form_code();

	return ob_get_clean();
}

add_shortcode('sitepoint_contact_form', 'shortcode');
*/
?>

<!-- Next try -->
<?php function html_form()
{ ?>
	<form id="form" action="form.php" method="POST">
		<input id="name" name="name" type="text" placeholder="Write your name here">
		<input id="email" name="email" type="email" placeholder="Write your email here">
		<textarea id="message" name="message" placeholder="Write your message here"></textarea>
		<button id="submit" type="submit">Send</button>
	</form>
<?php } ?>

<?php



function send_mail()
{
	alert("hei");
	$name = $_POST["name"];
	$email = $_POST["email"];
	$subject = "Message from domain";
	$message = $_POST["message"];

	echo $name;

	$to = "haakon.hess@gmail.com";

	$headers  =
		'MIME-Version: 1.0' . "\r\n" .
		'Content-type: text/html; charset=utf-8' . "\r\n" .
		'From: ' . $email . "\r\n";

	$msg =
		'Name: ' . $name . '<br><br>' .
		'Email: ' . $email . '<br><br>' .
		'Message: ' . $message;

	if ($email != "" && $message != "") {

		mail($to, $subject, $msg, $headers);

		?>
		<div class="container-fluid">
			<p>Thanks</p>
		</div>
	<?php

		} else {

			?>
		<div class="container-fluid">
			<p>Ooops</p>
		</div>
<?php
	}
}
?>

<?php 

function shortcode() 
{
	ob_start();
	html_form();
	send_mail();

	return ob_get_clean();
}

add_shortcode('form', 'shortcode')

?>

<?php 

/*add_action('wp_enqueue_scripts', 'form_enqueue_style');

function form_enqueue_style() {
	wp_enqueue_style('form', get_stylesheet_directory_uri() . '/form.css', false);
}

?>