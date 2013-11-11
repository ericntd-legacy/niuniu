<?php /* Smarty version Smarty-3.1.14, created on 2013-10-27 11:54:12
         compiled from "/Applications/MAMP/htdocs/niuniu/themes/fashionbird/modules/blocktopmenu/blocktopmenu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:783896518526bb641c6d5a9-51811865%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '22a6a093787251807c15e8efebb199b7af56fd5e' => 
    array (
      0 => '/Applications/MAMP/htdocs/niuniu/themes/fashionbird/modules/blocktopmenu/blocktopmenu.tpl',
      1 => 1382845943,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '783896518526bb641c6d5a9-51811865',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_526bb641c97768_30165959',
  'variables' => 
  array (
    'MENU' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_526bb641c97768_30165959')) {function content_526bb641c97768_30165959($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['MENU']->value!=''){?>
<div class="navbar">
<div class="navbar-inner">
<div class="container">  
	<ul class="nav">
			<?php echo $_smarty_tpl->tpl_vars['MENU']->value;?>

			
		</ul>
	</div>
</div>
</div>
<?php }?><?php }} ?>