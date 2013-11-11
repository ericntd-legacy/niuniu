<?php /* Smarty version Smarty-3.1.14, created on 2013-10-26 20:40:36
         compiled from "/Applications/MAMP/htdocs/niuniu/admin1/themes/default/template/helpers/help_access/button.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1627021559526bb8443517f6-65002622%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f84acc9340718cc9cdbdf027cce6c578f1b63d31' => 
    array (
      0 => '/Applications/MAMP/htdocs/niuniu/admin1/themes/default/template/helpers/help_access/button.tpl',
      1 => 1382764589,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1627021559526bb8443517f6-65002622',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'label' => 0,
    'help_base_url' => 0,
    'iso_lang' => 0,
    'version' => 0,
    'doc_version' => 0,
    'country' => 0,
    'tooltip' => 0,
    'button_class' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_526bb8443a64f7_62749655',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_526bb8443a64f7_62749655')) {function content_526bb8443a64f7_62749655($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include '/Applications/MAMP/htdocs/niuniu/tools/smarty/plugins/modifier.escape.php';
?><li class="help-context-<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['label']->value, 'htmlall', 'UTF-8');?>
" style="display:none">
    <a id="desc-<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['label']->value, 'htmlall', 'UTF-8');?>
-help"
       class="toolbar_btn"
       href="#"
       onclick="showHelp('<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['help_base_url']->value, 'htmlall', 'UTF-8');?>
',
                         '<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['label']->value, 'htmlall', 'UTF-8');?>
',
                         '<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['iso_lang']->value, 'htmlall', 'UTF-8');?>
',
                         '<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['version']->value, 'htmlall', 'UTF-8');?>
',
                         '<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['doc_version']->value, 'htmlall', 'UTF-8');?>
',
                         '<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['country']->value, 'htmlall', 'UTF-8');?>
');"
        title="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['tooltip']->value, 'htmlall', 'UTF-8');?>
">
        <span class="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['button_class']->value, 'htmlall', 'UTF-8');?>
"></span>
        <div><?php echo smartyTranslate(array('s'=>'Help'),$_smarty_tpl);?>
</div>
    </a>
</li>
<?php }} ?>