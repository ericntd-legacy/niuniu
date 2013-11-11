<?php /* Smarty version Smarty-3.1.14, created on 2013-10-27 10:30:24
         compiled from "/Applications/MAMP/htdocs/niuniu/admin1/themes/default/template/helpers/list/list_action_enable.tpl" */ ?>
<?php /*%%SmartyHeaderCode:826051594526c7ac06f5082-71515983%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e64b137d6116fdb563cbc578449fda384bf83dfc' => 
    array (
      0 => '/Applications/MAMP/htdocs/niuniu/admin1/themes/default/template/helpers/list/list_action_enable.tpl',
      1 => 1382764589,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '826051594526c7ac06f5082-71515983',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'url_enable' => 0,
    'confirm' => 0,
    'enabled' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_526c7ac072c840_91133303',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_526c7ac072c840_91133303')) {function content_526c7ac072c840_91133303($_smarty_tpl) {?>

<a href="<?php echo $_smarty_tpl->tpl_vars['url_enable']->value;?>
" <?php if (isset($_smarty_tpl->tpl_vars['confirm']->value)){?>onclick="return confirm('<?php echo $_smarty_tpl->tpl_vars['confirm']->value;?>
');"<?php }?> title="<?php if ($_smarty_tpl->tpl_vars['enabled']->value){?><?php echo smartyTranslate(array('s'=>'Enabled'),$_smarty_tpl);?>
<?php }else{ ?><?php echo smartyTranslate(array('s'=>'Disabled'),$_smarty_tpl);?>
<?php }?>">
	<img src="../img/admin/<?php if ($_smarty_tpl->tpl_vars['enabled']->value){?>enabled.gif<?php }else{ ?>disabled.gif<?php }?>" alt="<?php if ($_smarty_tpl->tpl_vars['enabled']->value){?><?php echo smartyTranslate(array('s'=>'Enabled'),$_smarty_tpl);?>
<?php }else{ ?><?php echo smartyTranslate(array('s'=>'Disabled'),$_smarty_tpl);?>
<?php }?>" />
</a>
<?php }} ?>