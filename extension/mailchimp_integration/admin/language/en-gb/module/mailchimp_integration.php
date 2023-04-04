<?php
//==============================================================================
// MailChimp Integration (v4 installer)
// 
// Author: Clear Thinking, LLC
// E-mail: johnathan@getclearthinking.com
// Website: http://www.getclearthinking.com
// 
// All code within this file is copyright Clear Thinking, LLC.
// You may not copy or reuse code within this file without written permission.
//==============================================================================

$version = 'unlicensed';

//------------------------------------------------------------------------------
// Extension Text
//------------------------------------------------------------------------------
$_['heading_title']						= 'MailChimp Integration';

$_['text_help_info']					= 'Your license key is e-mailed to you after purchase. If you have an old order without a license key or have lost your license key, you can retrieve it at <a target="_blank" href="https://www.getclearthinking.com/downloads/license">www.getclearthinking.com/downloads/license</a><br><br>A license comes with 1 year of free updates, so you will have access to the last version available to you within that 1 year time period. If you are outside that period and are interested in renewing your license at a discount, please <a target="_blank" href="https://www.getclearthinking.com/contact">contact Clear Thinking</a> with your order number for details.';
$_['text_license_key']					= 'License Key:';
$_['button_verify']						= 'Verify';

$_['text_success']						= 'License key verified!';
$_['error_blank']						= '<i class="fa fa-exclamation-triangle"></i> &nbsp; Please fill in your License Key.';

//------------------------------------------------------------------------------
// Standard Text
//------------------------------------------------------------------------------
$_['copyright']							= '<hr /><div class="text-center" style="margin: 15px">' . $_['heading_title'] . ' (' . $version . ') &copy; <a target="_blank" href="https://www.getclearthinking.com/contact">Clear Thinking, LLC</a></div>';

$_['standard_autosaving_enabled']		= 'Auto-Saving Enabled';
$_['standard_confirm']					= 'This operation cannot be undone. Continue?';
$_['standard_error']					= '<strong>Error:</strong> You do not have permission to modify ' . $_['heading_title'] . '!';
$_['standard_max_input_vars']			= '<strong>Warning:</strong> The number of settings is close to your <code>max_input_vars</code> server value. You should enable auto-saving to avoid losing any data.';
$_['standard_please_wait']				= 'Please wait...';
$_['standard_saved']					= 'Saved!';
$_['standard_saving']					= 'Saving...';
$_['standard_select']					= '--- Select ---';
$_['standard_success']					= 'Success!';
$_['standard_testing_mode']				= "Your log is too large to open! If you need to archive it, you can download it using the button above.\n\nTo start a new log, (1) click the Clear Log button, (2) reload the admin panel page, then (3) run your test again.";

$_['standard_module']					= 'Modules';
$_['standard_shipping']					= 'Shipping';
$_['standard_payment']					= 'Payments';
$_['standard_total']					= 'Order Totals';
$_['standard_feed']						= 'Feeds';
?>