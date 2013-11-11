<?php /* Smarty version Smarty-3.1.14, created on 2013-10-27 11:54:13
         compiled from "/Applications/MAMP/htdocs/niuniu/themes/fashionbird/modules/blocksharefb/blocksharefb.tpl" */ ?>
<?php /*%%SmartyHeaderCode:969640139526bbb738a8402-43586372%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '45e5ce1f42f0a5410998c306e623716e052ab5f8' => 
    array (
      0 => '/Applications/MAMP/htdocs/niuniu/themes/fashionbird/modules/blocksharefb/blocksharefb.tpl',
      1 => 1382845943,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '969640139526bbb738a8402-43586372',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_526bbb738b67d5_91538258',
  'variables' => 
  array (
    'product_link' => 0,
    'product_title' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_526bbb738b67d5_91538258')) {function content_526bbb738b67d5_91538258($_smarty_tpl) {?>
<li id="left_share_fb">
	<a href="http://www.facebook.com/sharer.php?u=<?php echo $_smarty_tpl->tpl_vars['product_link']->value;?>
&amp;t=<?php echo $_smarty_tpl->tpl_vars['product_title']->value;?>
" class="js-new-window"><i class="icon-facebook-sign"></i><?php echo smartyTranslate(array('s'=>'Share on Facebook','mod'=>'blocksharefb'),$_smarty_tpl);?>
</a>
</li><?php }} ?>