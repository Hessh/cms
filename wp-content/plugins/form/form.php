<?php
/*
Plugin Name: Contact Form
Description: Contact form for emails
Author:      Håkon Hess
Version:     1.0
*/

wp_enqueue_style("form", plugin_dir_url('__FILE__') . "form/form.css");

function html_form()
{

	echo '<form id="form" action="" method="POST">
				<label for="customer-name">Your name</label>
				<input id="customer-name" name="customer-name" type="text" placeholder="Name" autocomplete required>
				<label for="customer-email">Your email</label>
				<input id="customer-email" name="customer-email" type="email" placeholder="Email" autocomplete required>
				<label for="customer-message">Your message</label>
				<textarea id="customer-message" name="customer-message" type="text" placeholder="Write here..." required></textarea>
				<button id="submit" name="submit" type="submit">Send</button>
			</form>';
}


function send_mail()
{
	if (isset($_POST["submit"])) {
		$name = htmlspecialchars($_POST["customer-name"]);
		$email = htmlspecialchars($_POST["customer-email"]);
		$subject = "Message from Contact Form";
		$message = htmlspecialchars($_POST["customer-message"]);

		$to = get_option('admin_email');

		$headers  =
			'MIME-Version: 1.0' . "\r\n" .
			'Content-type: text/html; charset=utf-8' . "\r\n" .
			'From: ' . "Contact Form" . "\r\n";

		$msg =
			'Name: ' . $name . '<br><br>' .
			'Email: ' . $email . '<br><br>' .
			'Message: ' . $message;

		if ($name != "" && $email != "" && $message != "") {

			mail($to, $subject, $msg, $headers);

			echo
				'<h3 style="color: #32AD36">Your message was successfully sent</h3>
				<h4>You will get a response shortly</h4>';
		} else {
			echo
				'<h3 style="color: #F15E5D">Ooops, there was an error</h3>
				<h4>Please try again</h4>';
		}
	}
}

function shortcode()
{
	ob_start();
	send_mail();
	html_form();

	return ob_get_clean();
}

add_shortcode('form', 'shortcode');
