<?php /* Smarty version Smarty-3.1.14, created on 2013-10-13 11:58:21
         compiled from "/var/www/html/niuniu/modules/welcome/welcome.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1481199992525a1a5d697b31-46925461%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd33922fab4618f64a1c78e54c1db904f68997526' => 
    array (
      0 => '/var/www/html/niuniu/modules/welcome/welcome.tpl',
      1 => 1381052406,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1481199992525a1a5d697b31-46925461',
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
  'unifunc' => 'content_525a1a5d6faed1_76878151',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_525a1a5d6faed1_76878151')) {function content_525a1a5d6faed1_76878151($_smarty_tpl) {?>

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