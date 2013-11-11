<?php /* Smarty version Smarty-3.1.14, created on 2013-10-26 20:32:02
         compiled from "/Applications/MAMP/htdocs/niuniu/themes/fashionbird/modules/blockadvertising/blockadvertising.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1773209656526bb6425ea0f2-83038122%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '64c0b96e14ba2e77320d637fc1c101db82716fd1' => 
    array (
      0 => '/Applications/MAMP/htdocs/niuniu/themes/fashionbird/modules/blockadvertising/blockadvertising.tpl',
      1 => 1382764591,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1773209656526bb6425ea0f2-83038122',
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
  'unifunc' => 'content_526bb642600846_96918577',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_526bb642600846_96918577')) {function content_526bb642600846_96918577($_smarty_tpl) {?>

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