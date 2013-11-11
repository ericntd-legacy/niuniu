<?php /* Smarty version Smarty-3.1.14, created on 2013-10-27 10:27:29
         compiled from "/Applications/MAMP/htdocs/niuniu/themes/fashionbird/modules/paypal/views/templates/hook/column.tpl" */ ?>
<?php /*%%SmartyHeaderCode:673909303526c7a11d15672-26285992%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '28186c1243cc83a52fa49fe60a4e898d390ef7ef' => 
    array (
      0 => '/Applications/MAMP/htdocs/niuniu/themes/fashionbird/modules/paypal/views/templates/hook/column.tpl',
      1 => 1382764591,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '673909303526c7a11d15672-26285992',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'base_dir_ssl' => 0,
    'logo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_526c7a11d30562_31696436',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_526c7a11d30562_31696436')) {function content_526c7a11d30562_31696436($_smarty_tpl) {?>

<div id="paypal-column-block">
	<p><a href="<?php echo $_smarty_tpl->tpl_vars['base_dir_ssl']->value;?>
modules/paypal/about.php" rel="nofollow"><img src="<?php echo $_smarty_tpl->tpl_vars['logo']->value;?>
" alt="PayPal" title="<?php echo smartyTranslate(array('s'=>'Pay with PayPal','mod'=>'paypal'),$_smarty_tpl);?>
" style="max-width: 100%" /></a></p>
</div>
<?php }} ?>