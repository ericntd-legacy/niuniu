<?php /* Smarty version Smarty-3.1.14, created on 2013-10-24 22:32:39
         compiled from "/var/www/html/niuniu/themes/fashionbird/modules/feeder/feederHeader.tpl" */ ?>
<?php /*%%SmartyHeaderCode:51461410052692f87d1d876-68070332%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7d8d56f687332f391bcbef6ff1528bde2b3df3b5' => 
    array (
      0 => '/var/www/html/niuniu/themes/fashionbird/modules/feeder/feederHeader.tpl',
      1 => 1377677663,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '51461410052692f87d1d876-68070332',
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
  'unifunc' => 'content_52692f87d6ebb9_30680166',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52692f87d6ebb9_30680166')) {function content_52692f87d6ebb9_30680166($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include '/var/www/html/niuniu/tools/smarty/plugins/modifier.escape.php';
?>

<link rel="alternate" type="application/rss+xml" title="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['meta_title']->value, 'html', 'UTF-8');?>
" href="<?php echo $_smarty_tpl->tpl_vars['feedUrl']->value;?>
" /><?php }} ?>