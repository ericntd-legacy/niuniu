<?php /* Smarty version Smarty-3.1.14, created on 2013-10-13 11:58:18
         compiled from "/var/www/html/niuniu/modules/blockadvertising/blockadvertising.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1236726716525a1a5a9d3838-73994671%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a8b1326c2c577c1d0ae3c352456aacddffe8c9af' => 
    array (
      0 => '/var/www/html/niuniu/modules/blockadvertising/blockadvertising.tpl',
      1 => 1377677663,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1236726716525a1a5a9d3838-73994671',
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
  'unifunc' => 'content_525a1a5a9ebcf9_94462955',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_525a1a5a9ebcf9_94462955')) {function content_525a1a5a9ebcf9_94462955($_smarty_tpl) {?>

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