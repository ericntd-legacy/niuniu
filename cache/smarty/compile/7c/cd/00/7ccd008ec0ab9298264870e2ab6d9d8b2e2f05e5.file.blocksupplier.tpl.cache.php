<?php /* Smarty version Smarty-3.1.14, created on 2013-10-26 20:53:13
         compiled from "/Applications/MAMP/htdocs/niuniu/themes/fashionbird/modules/blocksupplier/blocksupplier.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1957940992526bb6423a7599-78666175%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7ccd008ec0ab9298264870e2ab6d9d8b2e2f05e5' => 
    array (
      0 => '/Applications/MAMP/htdocs/niuniu/themes/fashionbird/modules/blocksupplier/blocksupplier.tpl',
      1 => 1382791380,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1957940992526bb6423a7599-78666175',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_526bb642443069_94189151',
  'variables' => 
  array (
    'display_link_supplier' => 0,
    'suppliers' => 0,
    'text_list' => 0,
    'text_list_nb' => 0,
    'supplier' => 0,
    'link' => 0,
    'form_list' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_526bb642443069_94189151')) {function content_526bb642443069_94189151($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include '/Applications/MAMP/htdocs/niuniu/tools/smarty/plugins/modifier.escape.php';
?>

<!-- Block suppliers module -->
<section id="suppliers_block_left" class="block blocksupplier column_box">
	<h4 class="title_block"><?php if ($_smarty_tpl->tpl_vars['display_link_supplier']->value){?><span><?php }?><?php echo smartyTranslate(array('s'=>'Suppliers','mod'=>'blocksupplier'),$_smarty_tpl);?>
<?php if ($_smarty_tpl->tpl_vars['display_link_supplier']->value){?></span><?php }?><span class="column_icon_toggle"></span></h4>
	<div class="block_content toggle_content">
<?php if ($_smarty_tpl->tpl_vars['suppliers']->value){?>
	<?php if ($_smarty_tpl->tpl_vars['text_list']->value){?>
	<ul class="store_list">
	<?php  $_smarty_tpl->tpl_vars['supplier'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['supplier']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['suppliers']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['supplier']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['supplier']->iteration=0;
 $_smarty_tpl->tpl_vars['supplier']->index=-1;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['supplier_list']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['supplier']->key => $_smarty_tpl->tpl_vars['supplier']->value){
$_smarty_tpl->tpl_vars['supplier']->_loop = true;
 $_smarty_tpl->tpl_vars['supplier']->iteration++;
 $_smarty_tpl->tpl_vars['supplier']->index++;
 $_smarty_tpl->tpl_vars['supplier']->first = $_smarty_tpl->tpl_vars['supplier']->index === 0;
 $_smarty_tpl->tpl_vars['supplier']->last = $_smarty_tpl->tpl_vars['supplier']->iteration === $_smarty_tpl->tpl_vars['supplier']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['supplier_list']['first'] = $_smarty_tpl->tpl_vars['supplier']->first;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['supplier_list']['iteration']++;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['supplier_list']['last'] = $_smarty_tpl->tpl_vars['supplier']->last;
?>
		<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['supplier_list']['iteration']<=$_smarty_tpl->tpl_vars['text_list_nb']->value){?>
		<li class="<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['supplier_list']['last']){?>last_item<?php }elseif($_smarty_tpl->getVariable('smarty')->value['foreach']['supplier_list']['first']){?>first_item<?php }else{ ?>item<?php }?>">
			<a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getsupplierLink($_smarty_tpl->tpl_vars['supplier']->value['id_supplier'],$_smarty_tpl->tpl_vars['supplier']->value['link_rewrite']);?>
" title="<?php echo smartyTranslate(array('s'=>'More about','mod'=>'blocksupplier'),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->tpl_vars['supplier']->value['name'];?>
"><i class="icon-ok"></i><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['supplier']->value['name'], 'htmlall', 'UTF-8');?>
</a>
		</li>
		<?php }?>
	<?php } ?>
	</ul>
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['form_list']->value){?>
		<form action="<?php echo smarty_modifier_escape($_SERVER['SCRIPT_NAME'], 'htmlall', 'UTF-8');?>
" method="get">
			<p>
				<select id="supplier_list" onchange="autoUrl('supplier_list', '');">
					<option value="0"><?php echo smartyTranslate(array('s'=>'All suppliers','mod'=>'blocksupplier'),$_smarty_tpl);?>
</option>
				<?php  $_smarty_tpl->tpl_vars['supplier'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['supplier']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['suppliers']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['supplier']->key => $_smarty_tpl->tpl_vars['supplier']->value){
$_smarty_tpl->tpl_vars['supplier']->_loop = true;
?>
					<option value="<?php echo $_smarty_tpl->tpl_vars['link']->value->getsupplierLink($_smarty_tpl->tpl_vars['supplier']->value['id_supplier'],$_smarty_tpl->tpl_vars['supplier']->value['link_rewrite']);?>
"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['supplier']->value['name'], 'htmlall', 'UTF-8');?>
</option>
				<?php } ?>
				</select>
			</p>
		</form>
	<?php }?>
<?php }else{ ?>
	<p><?php echo smartyTranslate(array('s'=>'No supplier','mod'=>'blocksupplier'),$_smarty_tpl);?>
</p>
<?php }?>
	</div>
</section>
<!-- /Block suppliers module -->
<?php }} ?>