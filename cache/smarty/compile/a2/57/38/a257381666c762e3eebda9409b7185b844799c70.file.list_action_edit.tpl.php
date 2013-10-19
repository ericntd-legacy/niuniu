<?php /* Smarty version Smarty-3.1.14, created on 2013-10-13 12:10:52
         compiled from "/var/www/html/niuniu/admin1/themes/default/template/helpers/list/list_action_edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1799507887525a1d4cf13588-49942770%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a257381666c762e3eebda9409b7185b844799c70' => 
    array (
      0 => '/var/www/html/niuniu/admin1/themes/default/template/helpers/list/list_action_edit.tpl',
      1 => 1377677662,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1799507887525a1d4cf13588-49942770',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_525a1d4cf238d7_80022065',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_525a1d4cf238d7_80022065')) {function content_525a1d4cf238d7_80022065($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
" class="edit" title="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
">
	<img src="../img/admin/edit.gif" alt="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" />
</a><?php }} ?>