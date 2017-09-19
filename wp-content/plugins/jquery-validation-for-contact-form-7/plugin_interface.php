<?php
// create custom plugin settings menu
add_action('admin_menu', 'jvcf7_create_menu');
add_action('admin_notices', 'jvcf7_pro_notification');

if (isset($_GET['hidemsg']) == 1){
	update_option('jvcf7_hide_pro_notice','yes_6');
}

if (isset($_GET['hidemsg_emailchecker']) == 1){
	update_option('jvcf7_hide_email_checker_notice','yes_6');
}


function jvcf7_pro_notification(){
	if (get_option('jvcf7_hide_email_checker_notice') != 'yes_6'){
		 echo '<div class="updated">
       <p><b>Real Email Validation Plugin</b></p>
	   <p>
	   Allow only real email address to pass the validation. Email checker is advance email validation rules that can detect only genuine and deliverable email addresses. No more spam email submission.</p><p>
	   Click <a href="http://dnesscarkey.com/email-checker/demo/contact-form-7/" target="_blank"><strong>HERE</strong></a> for demo<br/><a style="display:block;text-align:right;" href="admin.php?page=jvcf7_settings_page&hidemsg_emailchecker=1">Hide This Message</a></p>
	   </div>';
	}
	
	if (get_option('jvcf7_hide_pro_notice') != 'yes_6'){
		 echo '<div class="updated">
       <p><b>Jquery Validation for Contact Form 7 Pro</b> now has<br/>
	   <ol>
	   <li>Additional validation methods like Alphanumeric, Bank or Giro account number, BIC code, Integer, IPv4, IPv6, UK Mobile, UK Phone, US state, Minimum Number, Maximum Number, Minimum Length, Maximum Length, Range Length, Range, Equal To, Extension, Require Group and <strong>Custom Code</strong>.</li>
	   <li>4 different <a href="http://dnesscarkey.com/jquery-validation/validation-error-theme/" target="_blank">validation error theme</a> to choose from.</li>
	   <li>Option to change <a href="http://dnesscarkey.com/jquery-validation/change-error-message/" target="_blank">default error message</a>.</li>
	   </ol>
	   Click <a href="http://dnesscarkey.com/jquery-validation/pro-version-demo/" target="_blank"><strong>HERE</strong></a> for demo<br/><a style="display:block;text-align:right;" href="admin.php?page=jvcf7_settings_page&hidemsg=1">Hide This Message</a></p>
	   </div>';
	}
}

function jvcf7_create_menu() {
	add_menu_page( 'Jquery Validation For Contact Form 7', 'jQuery Validation For Contact Form', 'manage_options', 'jvcf7_settings_page', 'jvcf7_settings_page', '');
	add_action('admin_init', 'register_jvcf7settings');
}
 
function register_jvcf7settings() {
	register_setting('jvcf7-settings-group', 'jvcf7_show_label_error');
	register_setting('jvcf7-settings-group', 'jvcf7_highlight_error_field');
	register_setting('jvcf7-settings-group', 'jvcf7_invalid_field_design');
	
} 

function jvcf7_settings_page() {	
	global $optionValues;
	$jvcf7_show_label_error 						= $optionValues['jvcf7_show_label_error'];
	@$jvcf7_highlight_error_field 					= $optionValues['jvcf7_highlight_error_field'];
	include('includes/jvcf7_header.php');
	include('includes/jvcf7_settings.php');
	include('includes/jvcf7_instructions.php');
	include('includes/jvcf7_footer.php');	
}