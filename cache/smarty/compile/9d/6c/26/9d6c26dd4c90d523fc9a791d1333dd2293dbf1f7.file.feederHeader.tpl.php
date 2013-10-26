<?php /* Smarty version Smarty-3.1.14, created on 2013-10-25 11:39:49
         compiled from "/var/www/html/niuniu/modules/feeder/feederHeader.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9171797035269e80512f938-92815340%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9d6c26dd4c90d523fc9a791d1333dd2293dbf1f7' => 
    array (
      0 => '/var/www/html/niuniu/modules/feeder/feederHeader.tpl',
      1 => 1377677663,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9171797035269e80512f938-92815340',
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
  'unifunc' => 'content_5269e80522adb6_97739467',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5269e80522adb6_97739467')) {function content_5269e80522adb6_97739467($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include '/var/www/html/niuniu/tools/smarty/plugins/modifier.escape.php';
?>

<link rel="alternate" type="application/rss+xml" title="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['meta_title']->value, 'html', 'UTF-8');?>
" href="<?php echo $_smarty_tpl->tpl_vars['feedUrl']->value;?>
" /><?php }} ?>