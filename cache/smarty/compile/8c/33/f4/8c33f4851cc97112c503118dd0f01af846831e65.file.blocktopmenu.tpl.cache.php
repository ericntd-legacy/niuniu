<?php /* Smarty version Smarty-3.1.14, created on 2013-10-13 11:58:18
         compiled from "/var/www/html/niuniu/themes/fashionbird/modules/blocktopmenu/blocktopmenu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:271544760525a1a5a07b546-61781791%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8c33f4851cc97112c503118dd0f01af846831e65' => 
    array (
      0 => '/var/www/html/niuniu/themes/fashionbird/modules/blocktopmenu/blocktopmenu.tpl',
      1 => 1373170726,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '271544760525a1a5a07b546-61781791',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MENU' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_525a1a5a08e221_36412358',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_525a1a5a08e221_36412358')) {function content_525a1a5a08e221_36412358($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['MENU']->value!=''){?>
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