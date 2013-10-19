<?php /* Smarty version Smarty-3.1.14, created on 2013-10-13 12:10:53
         compiled from "/var/www/html/niuniu/admin1/themes/default/template/helpers/list/list_action_view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:635535771525a1d4d0574a2-15100833%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4e60ebb1078b16a8884b339d11e1b4524960f074' => 
    array (
      0 => '/var/www/html/niuniu/admin1/themes/default/template/helpers/list/list_action_view.tpl',
      1 => 1377677662,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '635535771525a1d4d0574a2-15100833',
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
  'unifunc' => 'content_525a1d4d067456_32464153',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_525a1d4d067456_32464153')) {function content_525a1d4d067456_32464153($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" >
	<img src="../img/admin/details.gif" alt="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" />
</a><?php }} ?>