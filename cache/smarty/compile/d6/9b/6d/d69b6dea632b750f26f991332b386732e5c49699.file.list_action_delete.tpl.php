<?php /* Smarty version Smarty-3.1.14, created on 2013-10-26 20:40:34
         compiled from "/Applications/MAMP/htdocs/niuniu/admin1/themes/default/template/helpers/list/list_action_delete.tpl" */ ?>
<?php /*%%SmartyHeaderCode:643943135526bb8427284c9-72500788%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd69b6dea632b750f26f991332b386732e5c49699' => 
    array (
      0 => '/Applications/MAMP/htdocs/niuniu/admin1/themes/default/template/helpers/list/list_action_delete.tpl',
      1 => 1382764589,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '643943135526bb8427284c9-72500788',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'confirm' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_526bb8427438c6_49833289',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_526bb8427438c6_49833289')) {function content_526bb8427438c6_49833289($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
" class="delete" <?php if (isset($_smarty_tpl->tpl_vars['confirm']->value)){?>onclick="if (confirm('<?php echo $_smarty_tpl->tpl_vars['confirm']->value;?>
')){ return true; }else{ event.stopPropagation(); event.preventDefault();};"<?php }?> title="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
">
	<img src="../img/admin/delete.gif" alt="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" />
</a><?php }} ?>