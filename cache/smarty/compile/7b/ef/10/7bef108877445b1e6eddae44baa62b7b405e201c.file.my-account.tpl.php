<?php /* Smarty version Smarty-3.1.14, created on 2013-10-27 11:36:53
         compiled from "/Applications/MAMP/htdocs/niuniu/themes/fashionbird/modules/blockwishlist/my-account.tpl" */ ?>
<?php /*%%SmartyHeaderCode:894327846526c8a55c190b6-00816723%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7bef108877445b1e6eddae44baa62b7b405e201c' => 
    array (
      0 => '/Applications/MAMP/htdocs/niuniu/themes/fashionbird/modules/blockwishlist/my-account.tpl',
      1 => 1382764591,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '894327846526c8a55c190b6-00816723',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'wishlist_link' => 0,
    'module_template_dir' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_526c8a55c31c92_05260795',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_526c8a55c31c92_05260795')) {function content_526c8a55c31c92_05260795($_smarty_tpl) {?>

<!-- MODULE WishList -->
<li class="lnk_wishlist">
	<a href="<?php echo $_smarty_tpl->tpl_vars['wishlist_link']->value;?>
" title="<?php echo smartyTranslate(array('s'=>'My wishlists','mod'=>'blockwishlist'),$_smarty_tpl);?>
">
		<img src="<?php echo $_smarty_tpl->tpl_vars['module_template_dir']->value;?>
img/gift.gif" alt="<?php echo smartyTranslate(array('s'=>'My wishlists','mod'=>'blockwishlist'),$_smarty_tpl);?>
" class="icon" />
		<?php echo smartyTranslate(array('s'=>'My wishlists','mod'=>'blockwishlist'),$_smarty_tpl);?>

	</a>
</li>
<!-- END : MODULE WishList --><?php }} ?>