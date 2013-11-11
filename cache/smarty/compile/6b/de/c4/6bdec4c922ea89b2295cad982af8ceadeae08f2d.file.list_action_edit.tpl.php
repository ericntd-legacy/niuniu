<?php /* Smarty version Smarty-3.1.14, created on 2013-10-26 20:40:34
         compiled from "/Applications/MAMP/htdocs/niuniu/admin1/themes/default/template/helpers/list/list_action_edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2121909069526bb842716524-22875306%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6bdec4c922ea89b2295cad982af8ceadeae08f2d' => 
    array (
      0 => '/Applications/MAMP/htdocs/niuniu/admin1/themes/default/template/helpers/list/list_action_edit.tpl',
      1 => 1382764589,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2121909069526bb842716524-22875306',
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
  'unifunc' => 'content_526bb842723e20_95503037',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_526bb842723e20_95503037')) {function content_526bb842723e20_95503037($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
" class="edit" title="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
">
	<img src="../img/admin/edit.gif" alt="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" />
</a><?php }} ?>