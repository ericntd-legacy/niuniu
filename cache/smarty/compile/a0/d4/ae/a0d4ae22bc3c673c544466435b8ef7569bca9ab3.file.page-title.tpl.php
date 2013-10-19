<?php /* Smarty version Smarty-3.1.14, created on 2013-10-13 12:09:48
         compiled from "/var/www/html/niuniu/themes/fashionbird/mobile/page-title.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1947266239525a1d0c3f91c1-91000891%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a0d4ae22bc3c673c544466435b8ef7569bca9ab3' => 
    array (
      0 => '/var/www/html/niuniu/themes/fashionbird/mobile/page-title.tpl',
      1 => 1373170726,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1947266239525a1d0c3f91c1-91000891',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page_title' => 0,
    'meta_title' => 0,
    'shop_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_525a1d0c42e615_34532603',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_525a1d0c42e615_34532603')) {function content_525a1d0c42e615_34532603($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include '/var/www/html/niuniu/tools/smarty/plugins/modifier.escape.php';
?><?php if (!isset($_smarty_tpl->tpl_vars['page_title']->value)&&isset($_smarty_tpl->tpl_vars['meta_title']->value)&&$_smarty_tpl->tpl_vars['meta_title']->value!=$_smarty_tpl->tpl_vars['shop_name']->value){?>
	<?php $_smarty_tpl->tpl_vars['page_title'] = new Smarty_variable(smarty_modifier_escape($_smarty_tpl->tpl_vars['meta_title']->value, 'htmlall', 'UTF-8'), null, 0);?>
<?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['page_title']->value)){?>
	<div data-role="header" class="clearfix navbartop" data-position="inline">
		<h1><?php echo $_smarty_tpl->tpl_vars['page_title']->value;?>
</h1>
	</div><!-- /navbartop -->
<?php }?><?php }} ?>