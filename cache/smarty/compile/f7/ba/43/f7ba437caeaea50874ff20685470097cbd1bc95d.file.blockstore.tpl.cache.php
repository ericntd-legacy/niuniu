<?php /* Smarty version Smarty-3.1.14, created on 2013-10-26 20:53:15
         compiled from "/Applications/MAMP/htdocs/niuniu/themes/fashionbird/modules/blockstore/blockstore.tpl" */ ?>
<?php /*%%SmartyHeaderCode:830778288526bb6446b96d5-99405583%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f7ba437caeaea50874ff20685470097cbd1bc95d' => 
    array (
      0 => '/Applications/MAMP/htdocs/niuniu/themes/fashionbird/modules/blockstore/blockstore.tpl',
      1 => 1382791380,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '830778288526bb6446b96d5-99405583',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_526bb6446fb666_53210651',
  'variables' => 
  array (
    'link' => 0,
    'module_dir' => 0,
    'store_img' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_526bb6446fb666_53210651')) {function content_526bb6446fb666_53210651($_smarty_tpl) {?>

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