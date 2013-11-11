<?php /* Smarty version Smarty-3.1.14, created on 2013-10-27 11:36:31
         compiled from "/Applications/MAMP/htdocs/niuniu/themes/fashionbird/modules/blockcustomerprivacy/blockcustomerprivacy.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1247746183526c8a3f7d6b23-57604867%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6ece63cf93ea5a69124e205965850125a0ac6d4e' => 
    array (
      0 => '/Applications/MAMP/htdocs/niuniu/themes/fashionbird/modules/blockcustomerprivacy/blockcustomerprivacy.tpl',
      1 => 1382791380,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1247746183526c8a3f7d6b23-57604867',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'privacy_message' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_526c8a3f7ec573_82604330',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_526c8a3f7ec573_82604330')) {function content_526c8a3f7ec573_82604330($_smarty_tpl) {?>

<div class="error_customerprivacy" style="color:red;"></div>
<fieldset class="account_creation customerprivacy titled_box">
	<h2><span><?php echo smartyTranslate(array('s'=>'Customer data privacy','mod'=>'blockcustomerprivacy'),$_smarty_tpl);?>
</span></h2>
	<p class="required">
		<input type="checkbox" value="1" id="customer_privacy" name="customer_privacy" style="float:left;margin: 15px;" />				
	</p>
	<label for="customer_privacy"><?php echo $_smarty_tpl->tpl_vars['privacy_message']->value;?>
</label>		
</fieldset><?php }} ?>