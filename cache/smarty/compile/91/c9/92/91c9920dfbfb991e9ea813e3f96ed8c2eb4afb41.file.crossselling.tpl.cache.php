<?php /* Smarty version Smarty-3.1.14, created on 2013-10-25 04:42:47
         compiled from "/var/www/html/niuniu/themes/fashionbird/modules/crossselling/crossselling.tpl" */ ?>
<?php /*%%SmartyHeaderCode:159504657552698647290400-18746101%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '91c9920dfbfb991e9ea813e3f96ed8c2eb4afb41' => 
    array (
      0 => '/var/www/html/niuniu/themes/fashionbird/modules/crossselling/crossselling.tpl',
      1 => 1377677663,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '159504657552698647290400-18746101',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'orderProducts' => 0,
    'middlePosition_crossselling' => 0,
    'orderProduct' => 0,
    'crossDisplayPrice' => 0,
    'restricted_country_mode' => 0,
    'PS_CATALOG_MODE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5269864737a772_81279537',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5269864737a772_81279537')) {function content_5269864737a772_81279537($_smarty_tpl) {?><?php if (!is_callable('smarty_function_math')) include '/var/www/html/niuniu/tools/smarty/plugins/function.math.php';
if (!is_callable('smarty_modifier_escape')) include '/var/www/html/niuniu/tools/smarty/plugins/modifier.escape.php';
?>

<?php if (isset($_smarty_tpl->tpl_vars['orderProducts']->value)&&count($_smarty_tpl->tpl_vars['orderProducts']->value)){?>
<div id="crossselling">
	<script type="text/javascript">var cs_middle = <?php echo $_smarty_tpl->tpl_vars['middlePosition_crossselling']->value;?>
;</script>
	<h2 class="productscategory_h2"><?php echo smartyTranslate(array('s'=>'Customers who bought this product also bought:','mod'=>'crossselling'),$_smarty_tpl);?>
</h2>
	<div id="<?php if (count($_smarty_tpl->tpl_vars['orderProducts']->value)>5){?>crossselling<?php }else{ ?>crossselling_noscroll<?php }?>">
		<?php if (count($_smarty_tpl->tpl_vars['orderProducts']->value)>5){?><a id="crossselling_scroll_left" title="<?php echo smartyTranslate(array('s'=>'Previous','mod'=>'crossselling'),$_smarty_tpl);?>
" href="javascript:{}"><?php echo smartyTranslate(array('s'=>'Previous','mod'=>'crossselling'),$_smarty_tpl);?>
</a><?php }?>
		<div id="crossselling_list">
			<ul class="clearfix" <?php if (count($_smarty_tpl->tpl_vars['orderProducts']->value)>5){?>style="width: <?php echo smarty_function_math(array('equation'=>"width * nbImages",'width'=>107,'nbImages'=>count($_smarty_tpl->tpl_vars['orderProducts']->value)),$_smarty_tpl);?>
px"<?php }?>>
				<?php  $_smarty_tpl->tpl_vars['orderProduct'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['orderProduct']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['orderProducts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['orderProduct']->key => $_smarty_tpl->tpl_vars['orderProduct']->value){
$_smarty_tpl->tpl_vars['orderProduct']->_loop = true;
?>
				<li>
					<a href="<?php echo $_smarty_tpl->tpl_vars['orderProduct']->value['link'];?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['orderProduct']->value['name']);?>
" class="lnk_img"><img src="<?php echo $_smarty_tpl->tpl_vars['orderProduct']->value['image'];?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['orderProduct']->value['name']);?>
" /></a>
					<p class="product_name"><a href="<?php echo $_smarty_tpl->tpl_vars['orderProduct']->value['link'];?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['orderProduct']->value['name']);?>
"><?php echo smarty_modifier_escape($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate($_smarty_tpl->tpl_vars['orderProduct']->value['name'],15,'...'), 'htmlall', 'UTF-8');?>
</a></p>
					<?php if ($_smarty_tpl->tpl_vars['crossDisplayPrice']->value&&$_smarty_tpl->tpl_vars['orderProduct']->value['show_price']==1&&!isset($_smarty_tpl->tpl_vars['restricted_country_mode']->value)&&!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value){?>
						<span class="price_display">
							<span class="price"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['orderProduct']->value['displayed_price']),$_smarty_tpl);?>
</span>
						</span><br />
					<?php }else{ ?>
						<br />
					<?php }?>
					<!-- <a title="<?php echo smartyTranslate(array('s'=>'View','mod'=>'crossselling'),$_smarty_tpl);?>
" href="<?php echo $_smarty_tpl->tpl_vars['orderProduct']->value['link'];?>
" class="button_small"><?php echo smartyTranslate(array('s'=>'View','mod'=>'crossselling'),$_smarty_tpl);?>
</a><br /> -->
				</li>
				<?php } ?>
			</ul>
		</div>
	<?php if (count($_smarty_tpl->tpl_vars['orderProducts']->value)>5){?><a id="crossselling_scroll_right" title="<?php echo smartyTranslate(array('s'=>'Next','mod'=>'crossselling'),$_smarty_tpl);?>
" href="javascript:{}"><?php echo smartyTranslate(array('s'=>'Next','mod'=>'crossselling'),$_smarty_tpl);?>
</a><?php }?>
	</div>
</div>
<?php }?>
<?php }} ?>