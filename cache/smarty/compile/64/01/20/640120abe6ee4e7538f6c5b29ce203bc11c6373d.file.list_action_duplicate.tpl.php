<?php /* Smarty version Smarty-3.1.14, created on 2013-10-13 12:11:37
         compiled from "/var/www/html/niuniu/admin1/themes/default/template/helpers/list/list_action_duplicate.tpl" */ ?>
<?php /*%%SmartyHeaderCode:270047825525a1d79e26b81-11012862%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '640120abe6ee4e7538f6c5b29ce203bc11c6373d' => 
    array (
      0 => '/var/www/html/niuniu/admin1/themes/default/template/helpers/list/list_action_duplicate.tpl',
      1 => 1377677662,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '270047825525a1d79e26b81-11012862',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'action' => 0,
    'confirm' => 0,
    'location_ok' => 0,
    'location_ko' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_525a1d79e3f223_45084834',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_525a1d79e3f223_45084834')) {function content_525a1d79e3f223_45084834($_smarty_tpl) {?>
<a class="pointer" title="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" onclick="if (confirm('<?php echo $_smarty_tpl->tpl_vars['confirm']->value;?>
')) document.location = '<?php echo $_smarty_tpl->tpl_vars['location_ok']->value;?>
'; else document.location = '<?php echo $_smarty_tpl->tpl_vars['location_ko']->value;?>
';">
	<img src="../img/admin/duplicate.png" alt="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" />
</a><?php }} ?>