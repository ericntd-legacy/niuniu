<?php /* Smarty version Smarty-3.1.14, created on 2013-10-13 12:09:20
         compiled from "/var/www/html/niuniu/themes/fashionbird/mobile/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1336091371525a1cf0c48877-40883113%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '327cafdd898b98cbcbcd4c58c2739312eeea092b' => 
    array (
      0 => '/var/www/html/niuniu/themes/fashionbird/mobile/index.tpl',
      1 => 1373170726,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1336091371525a1cf0c48877-40883113',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_525a1cf0d172f1_72829823',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_525a1cf0d172f1_72829823')) {function content_525a1cf0d172f1_72829823($_smarty_tpl) {?>
	<div data-role="content" id="content">
		<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"DisplayMobileIndex"),$_smarty_tpl);?>

		<?php echo $_smarty_tpl->getSubTemplate ('./sitemap.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	</div><!-- /content -->
<?php }} ?>