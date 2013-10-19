<?php /* Smarty version Smarty-3.1.14, created on 2013-10-13 11:58:21
         compiled from "/var/www/html/niuniu/themes/fashionbird/modules/blockstore/blockstore.tpl" */ ?>
<?php /*%%SmartyHeaderCode:328791910525a1a5d4ae8a4-70370297%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3d617184f5bdd594987e6b5f2a4939ed4785534b' => 
    array (
      0 => '/var/www/html/niuniu/themes/fashionbird/modules/blockstore/blockstore.tpl',
      1 => 1373170726,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '328791910525a1a5d4ae8a4-70370297',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'module_dir' => 0,
    'store_img' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_525a1a5d52b2c8_38779459',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_525a1a5d52b2c8_38779459')) {function content_525a1a5d52b2c8_38779459($_smarty_tpl) {?>

<section id="stores_block_left" class="block  column_box">
	<h4><span><?php echo smartyTranslate(array('s'=>'Our store(s)!','mod'=>'blockstore'),$_smarty_tpl);?>
</span><span class="column_icon_toggle"></span></h4>
	<div class="block_content blockstore toggle_content">
		<p class="store_image"><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('stores');?>
" title="<?php echo smartyTranslate(array('s'=>'Our stores','mod'=>'blockstore'),$_smarty_tpl);?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['module_dir']->value;?>
<?php echo $_smarty_tpl->tpl_vars['store_img']->value;?>
" alt="<?php echo smartyTranslate(array('s'=>'Our stores','mod'=>'blockstore'),$_smarty_tpl);?>
"  /></a></p>
		<p>
			<a class="button" href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('stores');?>
" title="<?php echo smartyTranslate(array('s'=>'Our stores','mod'=>'blockstore'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'Discover our store(s)d!','mod'=>'blockstore'),$_smarty_tpl);?>
</a>
		</p>
	</div>
</section>
<!-- /Block stores module -->
<?php }} ?>