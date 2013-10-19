<?php /* Smarty version Smarty-3.1.14, created on 2013-10-13 12:08:08
         compiled from "/var/www/html/niuniu/modules/blockwishlist/blockwishlist-extra.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2046993087525a1ca8909601-80996563%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '916f8cf6fd8bf0aeda99b91e966f33a6e919437e' => 
    array (
      0 => '/var/www/html/niuniu/modules/blockwishlist/blockwishlist-extra.tpl',
      1 => 1377677663,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2046993087525a1ca8909601-80996563',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'id_product' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_525a1ca891add0_55596532',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_525a1ca891add0_55596532')) {function content_525a1ca891add0_55596532($_smarty_tpl) {?>

<p class="buttons_bottom_block">
	<a href="#" id="wishlist_button" onclick="WishlistCart('wishlist_block_list', 'add', '<?php echo intval($_smarty_tpl->tpl_vars['id_product']->value);?>
', $('#idCombination').val(), document.getElementById('quantity_wanted').value); return false;"  title="<?php echo smartyTranslate(array('s'=>'Add to my wishlist','mod'=>'blockwishlist'),$_smarty_tpl);?>
" rel="nofollow">&raquo; <?php echo smartyTranslate(array('s'=>'Add to my wishlist','mod'=>'blockwishlist'),$_smarty_tpl);?>
</a>
</p>
<?php }} ?>