<?php /* Smarty version Smarty-3.1.14, created on 2013-10-26 20:32:01
         compiled from "/Applications/MAMP/htdocs/niuniu/themes/fashionbird/modules/feeder/feederHeader.tpl" */ ?>
<?php /*%%SmartyHeaderCode:163272827526bb641537c60-87108233%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b81ab1a0bb0261a90c2fb9c0e3b19bcab0302b17' => 
    array (
      0 => '/Applications/MAMP/htdocs/niuniu/themes/fashionbird/modules/feeder/feederHeader.tpl',
      1 => 1382764591,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '163272827526bb641537c60-87108233',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'meta_title' => 0,
    'feedUrl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_526bb6416517f1_40710124',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_526bb6416517f1_40710124')) {function content_526bb6416517f1_40710124($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include '/Applications/MAMP/htdocs/niuniu/tools/smarty/plugins/modifier.escape.php';
?>

<link rel="alternate" type="application/rss+xml" title="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['meta_title']->value, 'html', 'UTF-8');?>
" href="<?php echo $_smarty_tpl->tpl_vars['feedUrl']->value;?>
" /><?php }} ?>