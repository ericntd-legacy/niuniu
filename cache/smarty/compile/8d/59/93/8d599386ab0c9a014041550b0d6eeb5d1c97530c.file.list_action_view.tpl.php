<?php /* Smarty version Smarty-3.1.14, created on 2013-10-27 15:09:50
         compiled from "/Applications/MAMP/htdocs/niuniu/admin1/themes/default/template/helpers/list/list_action_view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1171944178526cbc3e8449a4-91823994%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8d599386ab0c9a014041550b0d6eeb5d1c97530c' => 
    array (
      0 => '/Applications/MAMP/htdocs/niuniu/admin1/themes/default/template/helpers/list/list_action_view.tpl',
      1 => 1382764589,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1171944178526cbc3e8449a4-91823994',
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
  'unifunc' => 'content_526cbc3e852154_04445727',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_526cbc3e852154_04445727')) {function content_526cbc3e852154_04445727($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" >
	<img src="../img/admin/details.gif" alt="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" />
</a><?php }} ?>