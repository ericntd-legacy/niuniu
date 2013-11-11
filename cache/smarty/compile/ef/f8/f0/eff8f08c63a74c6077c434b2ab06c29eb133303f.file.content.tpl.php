<?php /* Smarty version Smarty-3.1.14, created on 2013-10-26 20:41:17
         compiled from "/Applications/MAMP/htdocs/niuniu/admin1/themes/default/template/controllers/modules/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:430410786526bb86d0cf708-78822923%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eff8f08c63a74c6077c434b2ab06c29eb133303f' => 
    array (
      0 => '/Applications/MAMP/htdocs/niuniu/admin1/themes/default/template/controllers/modules/content.tpl',
      1 => 1382764589,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '430410786526bb86d0cf708-78822923',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'module_content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_526bb86d10deb8_03957006',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_526bb86d10deb8_03957006')) {function content_526bb86d10deb8_03957006($_smarty_tpl) {?>

<?php if (isset($_smarty_tpl->tpl_vars['module_content']->value)){?>
	<?php echo $_smarty_tpl->tpl_vars['module_content']->value;?>

<?php }else{ ?>
	<?php if (!isset($_GET['configure'])){?>
		<?php echo $_smarty_tpl->getSubTemplate ('controllers/modules/js.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		<?php if (isset($_GET['select'])&&$_GET['select']=='favorites'){?>
			<?php echo $_smarty_tpl->getSubTemplate ('controllers/modules/favorites.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		<?php }else{ ?>
			<?php echo $_smarty_tpl->getSubTemplate ('controllers/modules/page.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		<?php }?>
	<?php }?>
<?php }?>
<?php }} ?>