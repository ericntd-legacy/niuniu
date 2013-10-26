<?php /*%%SmartyHeaderCode:14025113515269587082f5e6-30421668%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '88bb9d114319cdc1d2057860a2be809f210029e7' => 
    array (
      0 => '/var/www/html/niuniu/themes/fashionbird/modules/blockcustomerprivacy/blockcustomerprivacy.tpl',
      1 => 1377677663,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14025113515269587082f5e6-30421668',
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_526a37851f4aa0_97110521',
  'has_nocache_code' => false,
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_526a37851f4aa0_97110521')) {function content_526a37851f4aa0_97110521($_smarty_tpl) {?>
<div class="error_customerprivacy" style="color:red;"></div>
<fieldset class="account_creation customerprivacy">
	<h3>Customer data privacy</h3>
	<p class="required">
		<input type="checkbox" value="1" id="customer_privacy" name="customer_privacy" style="float:left;margin: 15px;" autocomplete="off"/>				
	</p>
	<label for="customer_privacy">The personal data you provide is used to answer queries, process orders or allow access to specific information. You have the right to modify and delete all the personal information found in the &quot;My Account&quot; page. </label>		
</fieldset><?php }} ?>