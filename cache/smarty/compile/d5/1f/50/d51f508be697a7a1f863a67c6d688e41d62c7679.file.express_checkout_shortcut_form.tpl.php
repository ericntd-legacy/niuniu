<?php /* Smarty version Smarty-3.1.14, created on 2013-10-27 10:33:21
         compiled from "/Applications/MAMP/htdocs/niuniu/themes/fashionbird/modules/paypal/views/templates/hook/express_checkout_shortcut_form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1080409310526c7b71adcd42-01973227%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd51f508be697a7a1f863a67c6d688e41d62c7679' => 
    array (
      0 => '/Applications/MAMP/htdocs/niuniu/themes/fashionbird/modules/paypal/views/templates/hook/express_checkout_shortcut_form.tpl',
      1 => 1382764591,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1080409310526c7b71adcd42-01973227',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'base_dir_ssl' => 0,
    'PayPal_payment_type' => 0,
    'PayPal_current_page' => 0,
    'PayPal_tracking_code' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_526c7b71b10ee8_69620056',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_526c7b71b10ee8_69620056')) {function content_526c7b71b10ee8_69620056($_smarty_tpl) {?><form id="paypal_payment_form" action="<?php echo $_smarty_tpl->tpl_vars['base_dir_ssl']->value;?>
modules/paypal/express_checkout/payment.php" data-ajax="false" title="<?php echo smartyTranslate(array('s'=>'Pay with PayPal','mod'=>'paypal'),$_smarty_tpl);?>
" method="post" data-ajax="false">
	<?php if (isset($_GET['id_product'])){?><input type="hidden" name="id_product" value="<?php echo $_GET['id_product'];?>
" /><?php }?>
	
	<!-- Change dynamicaly when the form is submitted -->
	<input type="hidden" name="quantity" value="1" />
	<input type="hidden" name="id_p_attr" value="" />
	<input type="hidden" name="express_checkout" value="<?php echo $_smarty_tpl->tpl_vars['PayPal_payment_type']->value;?>
"/>
	<input type="hidden" name="current_shop_url" value="<?php echo $_smarty_tpl->tpl_vars['PayPal_current_page']->value;?>
" />
	<input type="hidden" name="bn" value="<?php echo $_smarty_tpl->tpl_vars['PayPal_tracking_code']->value;?>
" />
</form>
<?php }} ?>