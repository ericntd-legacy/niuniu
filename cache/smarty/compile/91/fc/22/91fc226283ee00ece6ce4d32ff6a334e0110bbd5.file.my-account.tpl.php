<?php /* Smarty version Smarty-3.1.14, created on 2013-10-27 11:36:53
         compiled from "/Applications/MAMP/htdocs/niuniu/themes/fashionbird/modules/loyalty/views/templates/hook/my-account.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1801952903526c8a55be1115-20946853%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '91fc226283ee00ece6ce4d32ff6a334e0110bbd5' => 
    array (
      0 => '/Applications/MAMP/htdocs/niuniu/themes/fashionbird/modules/loyalty/views/templates/hook/my-account.tpl',
      1 => 1382764591,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1801952903526c8a55be1115-20946853',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'module_template_dir' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_526c8a55c12ff1_19352251',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_526c8a55c12ff1_19352251')) {function content_526c8a55c12ff1_19352251($_smarty_tpl) {?>

<!-- MODULE Loyalty -->
<li class="loyalty">
	<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getModuleLink('loyalty','default',array('process'=>'summary')), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'My loyalty points','mod'=>'loyalty'),$_smarty_tpl);?>
" rel="nofollow">
		<img src="<?php echo $_smarty_tpl->tpl_vars['module_template_dir']->value;?>
images/loyalty.gif" alt="<?php echo smartyTranslate(array('s'=>'My loyalty points','mod'=>'loyalty'),$_smarty_tpl);?>
" class="icon" /> <?php echo smartyTranslate(array('s'=>'My loyalty points','mod'=>'loyalty'),$_smarty_tpl);?>

	</a>
</li>
<!-- END : MODULE Loyalty --><?php }} ?>