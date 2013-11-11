<?php /* Smarty version Smarty-3.1.14, created on 2013-10-26 20:32:04
         compiled from "/Applications/MAMP/htdocs/niuniu/themes/fashionbird/modules/welcome/welcome.tpl" */ ?>
<?php /*%%SmartyHeaderCode:51441586526bb64470f5d9-90297245%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '69414334c895480f734ff2beafb1daa8d1aa20ea' => 
    array (
      0 => '/Applications/MAMP/htdocs/niuniu/themes/fashionbird/modules/welcome/welcome.tpl',
      1 => 1382764592,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '51441586526bb64470f5d9-90297245',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'homepage_logo_wel' => 0,
    'welcome' => 0,
    'image_path_wel' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_526bb6447398f1_00389670',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_526bb6447398f1_00389670')) {function content_526bb6447398f1_00389670($_smarty_tpl) {?>

<!-- Module welcome -->
<div id="welcome_block_center" class="welcome_block">
<div class="container">
<div class="sixteen columns">

	<?php if ($_smarty_tpl->tpl_vars['homepage_logo_wel']->value){?><a href="<?php echo $_smarty_tpl->tpl_vars['welcome']->value->body_home_logo_link;?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['link']->value->getMediaLink($_smarty_tpl->tpl_vars['image_path_wel']->value);?>
" /></a> <?php }?>
	<?php if ($_smarty_tpl->tpl_vars['welcome']->value->body_paragraph){?><div class="rte"><?php echo stripslashes($_smarty_tpl->tpl_vars['welcome']->value->body_paragraph);?>
</div><?php }?>
	
	
</div>
</div>
</div>
<!-- /Module welcome -->
<?php }} ?>