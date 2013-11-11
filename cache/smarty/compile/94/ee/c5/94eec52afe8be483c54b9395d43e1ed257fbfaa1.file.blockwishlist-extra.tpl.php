<?php /* Smarty version Smarty-3.1.14, created on 2013-10-27 10:33:21
         compiled from "/Applications/MAMP/htdocs/niuniu/themes/fashionbird/modules/blockwishlist/blockwishlist-extra.tpl" */ ?>
<?php /*%%SmartyHeaderCode:676075817526c7b71cefa77-24273998%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '94eec52afe8be483c54b9395d43e1ed257fbfaa1' => 
    array (
      0 => '/Applications/MAMP/htdocs/niuniu/themes/fashionbird/modules/blockwishlist/blockwishlist-extra.tpl',
      1 => 1382764591,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '676075817526c7b71cefa77-24273998',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'id_product' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_526c7b71d0e994_69671624',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_526c7b71d0e994_69671624')) {function content_526c7b71d0e994_69671624($_smarty_tpl) {?>

<p class="buttons_bottom_block">
	<a href="#" id="wishlist_button" onclick="WishlistCart('wishlist_block_list', 'add', '<?php echo intval($_smarty_tpl->tpl_vars['id_product']->value);?>
', $('#idCombination').val(), document.getElementById('quantity_wanted').value); return false;"  title="<?php echo smartyTranslate(array('s'=>'Add to my wishlist','mod'=>'blockwishlist'),$_smarty_tpl);?>
" rel="nofollow">&raquo; <?php echo smartyTranslate(array('s'=>'Add to my wishlist','mod'=>'blockwishlist'),$_smarty_tpl);?>
</a>
</p>
<?php }} ?>