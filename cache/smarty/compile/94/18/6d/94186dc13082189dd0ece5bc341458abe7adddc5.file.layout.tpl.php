<?php /* Smarty version Smarty-3.1.14, created on 2013-10-27 11:54:14
         compiled from "/Applications/MAMP/htdocs/niuniu/themes/fashionbird/layout.tpl" */ ?>
<?php /*%%SmartyHeaderCode:385093548526bb644b70161-60078195%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '94186dc13082189dd0ece5bc341458abe7adddc5' => 
    array (
      0 => '/Applications/MAMP/htdocs/niuniu/themes/fashionbird/layout.tpl',
      1 => 1382845943,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '385093548526bb644b70161-60078195',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_526bb644bb1ac9_33092705',
  'variables' => 
  array (
    'display_header' => 0,
    'HOOK_HEADER' => 0,
    'template' => 0,
    'display_footer' => 0,
    'live_edit' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_526bb644bb1ac9_33092705')) {function content_526bb644bb1ac9_33092705($_smarty_tpl) {?>

<?php if (!empty($_smarty_tpl->tpl_vars['display_header']->value)){?>
	<?php echo $_smarty_tpl->getSubTemplate ('./header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('HOOK_HEADER'=>$_smarty_tpl->tpl_vars['HOOK_HEADER']->value), 0);?>

<?php }?>
<?php if (!empty($_smarty_tpl->tpl_vars['template']->value)){?>
	<?php echo $_smarty_tpl->tpl_vars['template']->value;?>

<?php }?>
<?php if (!empty($_smarty_tpl->tpl_vars['display_footer']->value)){?>
	<?php echo $_smarty_tpl->getSubTemplate ('./footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }?>
<?php if (!empty($_smarty_tpl->tpl_vars['live_edit']->value)){?>
	<?php echo $_smarty_tpl->tpl_vars['live_edit']->value;?>

<?php }?><?php }} ?>