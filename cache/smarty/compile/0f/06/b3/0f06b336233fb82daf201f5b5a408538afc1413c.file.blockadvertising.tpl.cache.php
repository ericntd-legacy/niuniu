<?php /* Smarty version Smarty-3.1.14, created on 2013-10-27 11:47:59
         compiled from "/Applications/MAMP/htdocs/niuniu/modules/blockadvertising/blockadvertising.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1196987221526c8cef656db0-59010615%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0f06b336233fb82daf201f5b5a408538afc1413c' => 
    array (
      0 => '/Applications/MAMP/htdocs/niuniu/modules/blockadvertising/blockadvertising.tpl',
      1 => 1382764590,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1196987221526c8cef656db0-59010615',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'adv_link' => 0,
    'adv_title' => 0,
    'image' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_526c8cef67ac61_28875100',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_526c8cef67ac61_28875100')) {function content_526c8cef67ac61_28875100($_smarty_tpl) {?>

<!-- MODULE Block advertising -->
<div class="advertising_block">
	<a href="<?php echo $_smarty_tpl->tpl_vars['adv_link']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['adv_title']->value;?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['image']->value;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['adv_title']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['adv_title']->value;?>
" width="155"  height="163" /></a>
</div>
<!-- /MODULE Block advertising -->
<?php }} ?>