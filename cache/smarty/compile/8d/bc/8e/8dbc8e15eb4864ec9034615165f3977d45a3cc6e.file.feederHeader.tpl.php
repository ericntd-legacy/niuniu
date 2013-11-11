<?php /* Smarty version Smarty-3.1.14, created on 2013-10-27 11:47:59
         compiled from "/Applications/MAMP/htdocs/niuniu/modules/feeder/feederHeader.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1332461644526c8cef0d1a73-30982532%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8dbc8e15eb4864ec9034615165f3977d45a3cc6e' => 
    array (
      0 => '/Applications/MAMP/htdocs/niuniu/modules/feeder/feederHeader.tpl',
      1 => 1382764591,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1332461644526c8cef0d1a73-30982532',
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
  'unifunc' => 'content_526c8cef0e7cd5_23121549',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_526c8cef0e7cd5_23121549')) {function content_526c8cef0e7cd5_23121549($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include '/Applications/MAMP/htdocs/niuniu/tools/smarty/plugins/modifier.escape.php';
?>

<link rel="alternate" type="application/rss+xml" title="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['meta_title']->value, 'html', 'UTF-8');?>
" href="<?php echo $_smarty_tpl->tpl_vars['feedUrl']->value;?>
" /><?php }} ?>