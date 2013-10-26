<?php /* Smarty version Smarty-3.1.14, created on 2013-10-24 22:32:45
         compiled from "/var/www/html/niuniu/themes/fashionbird/modules/paypal/views/templates/hook/column.tpl" */ ?>
<?php /*%%SmartyHeaderCode:67277225352692f8d90f874-05946505%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '75e4ee07dc7b15b9df5551d8dadcb94c8be974a8' => 
    array (
      0 => '/var/www/html/niuniu/themes/fashionbird/modules/paypal/views/templates/hook/column.tpl',
      1 => 1381625857,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '67277225352692f8d90f874-05946505',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'base_dir_ssl' => 0,
    'logo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52692f8d9bc8b9_63516441',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52692f8d9bc8b9_63516441')) {function content_52692f8d9bc8b9_63516441($_smarty_tpl) {?>

<div id="paypal-column-block">
	<p><a href="<?php echo $_smarty_tpl->tpl_vars['base_dir_ssl']->value;?>
modules/paypal/about.php" rel="nofollow"><img src="<?php echo $_smarty_tpl->tpl_vars['logo']->value;?>
" alt="PayPal" title="<?php echo smartyTranslate(array('s'=>'Pay with PayPal','mod'=>'paypal'),$_smarty_tpl);?>
" style="max-width: 100%" /></a></p>
</div>
<?php }} ?>