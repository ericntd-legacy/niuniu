<?php /* Smarty version Smarty-3.1.14, created on 2013-10-27 11:47:59
         compiled from "/Applications/MAMP/htdocs/niuniu/modules/paypal/views/templates/hook/column.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1743168589526c8cef8722c8-46072228%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5c82cece69532d63cbf4cabda3794cc12cfb8436' => 
    array (
      0 => '/Applications/MAMP/htdocs/niuniu/modules/paypal/views/templates/hook/column.tpl',
      1 => 1382764591,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1743168589526c8cef8722c8-46072228',
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
  'unifunc' => 'content_526c8cef88b8a3_21125278',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_526c8cef88b8a3_21125278')) {function content_526c8cef88b8a3_21125278($_smarty_tpl) {?>

<div id="paypal-column-block">
	<p><a href="<?php echo $_smarty_tpl->tpl_vars['base_dir_ssl']->value;?>
modules/paypal/about.php" rel="nofollow"><img src="<?php echo $_smarty_tpl->tpl_vars['logo']->value;?>
" alt="PayPal" title="<?php echo smartyTranslate(array('s'=>'Pay with PayPal','mod'=>'paypal'),$_smarty_tpl);?>
" style="max-width: 100%" /></a></p>
</div>
<?php }} ?>