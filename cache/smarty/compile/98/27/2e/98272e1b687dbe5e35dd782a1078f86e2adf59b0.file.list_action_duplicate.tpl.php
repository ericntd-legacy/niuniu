<?php /* Smarty version Smarty-3.1.14, created on 2013-10-27 11:39:45
         compiled from "/Applications/MAMP/htdocs/niuniu/admin1/themes/default/template/helpers/list/list_action_duplicate.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1423118408526c8b01836a81-48701767%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '98272e1b687dbe5e35dd782a1078f86e2adf59b0' => 
    array (
      0 => '/Applications/MAMP/htdocs/niuniu/admin1/themes/default/template/helpers/list/list_action_duplicate.tpl',
      1 => 1382764589,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1423118408526c8b01836a81-48701767',
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
  'unifunc' => 'content_526c8b01848869_49484255',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_526c8b01848869_49484255')) {function content_526c8b01848869_49484255($_smarty_tpl) {?>
<a class="pointer" title="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" onclick="if (confirm('<?php echo $_smarty_tpl->tpl_vars['confirm']->value;?>
')) document.location = '<?php echo $_smarty_tpl->tpl_vars['location_ok']->value;?>
'; else document.location = '<?php echo $_smarty_tpl->tpl_vars['location_ko']->value;?>
';">
	<img src="../img/admin/duplicate.png" alt="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" />
</a><?php }} ?>