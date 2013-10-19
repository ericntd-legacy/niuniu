<?php /* Smarty version Smarty-3.1.14, created on 2013-10-13 12:08:08
         compiled from "/var/www/html/niuniu/modules/producttooltip/producttooltip.tpl" */ ?>
<?php /*%%SmartyHeaderCode:835814703525a1ca866c496-44627618%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '74a7e555deac4f6e91cc78c732827045c232d92c' => 
    array (
      0 => '/var/www/html/niuniu/modules/producttooltip/producttooltip.tpl',
      1 => 1377677663,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '835814703525a1ca866c496-44627618',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'nb_people' => 0,
    'date_last_order' => 0,
    'date_last_cart' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_525a1ca86c97b1_39500719',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_525a1ca86c97b1_39500719')) {function content_525a1ca86c97b1_39500719($_smarty_tpl) {?>

<script type="text/javascript">
$(document).ready(function() {
	<?php if (isset($_smarty_tpl->tpl_vars['nb_people']->value)){?>$.jGrowl('<?php if ($_smarty_tpl->tpl_vars['nb_people']->value==1){?><?php echo smartyTranslate(array('s'=>'%d person is currently watching this product','sprintf'=>$_smarty_tpl->tpl_vars['nb_people']->value,'mod'=>'producttooltip','js'=>1),$_smarty_tpl);?>
<?php }else{ ?><?php echo smartyTranslate(array('s'=>'%d people are currently watching this product','sprintf'=>$_smarty_tpl->tpl_vars['nb_people']->value,'mod'=>'producttooltip','js'=>1),$_smarty_tpl);?>
<?php }?>', { life: 3500 });<?php }?>
	<?php if (isset($_smarty_tpl->tpl_vars['date_last_order']->value)){?>$.jGrowl('<?php echo smartyTranslate(array('s'=>'This product was bought last','mod'=>'producttooltip','js'=>1),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['dateFormat'][0][0]->dateFormat(array('date'=>$_smarty_tpl->tpl_vars['date_last_order']->value,'full'=>1),$_smarty_tpl);?>
', { life: 3500 });<?php }?>
	<?php if (isset($_smarty_tpl->tpl_vars['date_last_cart']->value)){?>$.jGrowl('<?php echo smartyTranslate(array('s'=>'This product was added to cart last','mod'=>'producttooltip','js'=>1),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['dateFormat'][0][0]->dateFormat(array('date'=>$_smarty_tpl->tpl_vars['date_last_cart']->value,'full'=>1),$_smarty_tpl);?>
', { life: 3500 });<?php }?>
});
</script>
<?php }} ?>