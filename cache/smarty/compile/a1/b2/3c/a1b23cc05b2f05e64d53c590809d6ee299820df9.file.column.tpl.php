<?php /* Smarty version Smarty-3.1.14, created on 2013-10-13 11:58:21
         compiled from "/var/www/html/niuniu/modules/paypal/views/templates/hook/column.tpl" */ ?>
<?php /*%%SmartyHeaderCode:120934273525a1a5d53d537-93363739%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a1b23cc05b2f05e64d53c590809d6ee299820df9' => 
    array (
      0 => '/var/www/html/niuniu/modules/paypal/views/templates/hook/column.tpl',
      1 => 1381625857,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '120934273525a1a5d53d537-93363739',
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
  'unifunc' => 'content_525a1a5d54de37_35017316',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_525a1a5d54de37_35017316')) {function content_525a1a5d54de37_35017316($_smarty_tpl) {?>

<div id="paypal-column-block">
	<p><a href="<?php echo $_smarty_tpl->tpl_vars['base_dir_ssl']->value;?>
modules/paypal/about.php" rel="nofollow"><img src="<?php echo $_smarty_tpl->tpl_vars['logo']->value;?>
" alt="PayPal" title="<?php echo smartyTranslate(array('s'=>'Pay with PayPal','mod'=>'paypal'),$_smarty_tpl);?>
" style="max-width: 100%" /></a></p>
</div>
<?php }} ?>