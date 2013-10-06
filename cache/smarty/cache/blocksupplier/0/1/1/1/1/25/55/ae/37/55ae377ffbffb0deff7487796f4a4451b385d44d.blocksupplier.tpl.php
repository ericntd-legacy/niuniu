<?php /*%%SmartyHeaderCode:27221875252504109796d10-08382568%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '55ae377ffbffb0deff7487796f4a4451b385d44d' => 
    array (
      0 => '/var/www/html/niuniu/themes/default/modules/blocksupplier/blocksupplier.tpl',
      1 => 1377677663,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '27221875252504109796d10-08382568',
  'variables' => 
  array (
    'display_link_supplier' => 0,
    'link' => 0,
    'suppliers' => 0,
    'text_list' => 0,
    'text_list_nb' => 0,
    'supplier' => 0,
    'form_list' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52504109877360_42618322',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52504109877360_42618322')) {function content_52504109877360_42618322($_smarty_tpl) {?>
<!-- Block suppliers module -->
<div id="suppliers_block_left" class="block blocksupplier">
	<p class="title_block"><a href="http://54.254.153.152/niuniu/index.php?controller=supplier" title="Suppliers">Suppliers</a></p>
	<div class="block_content">
		<ul class="bullet">
					<li class="first_item">
			<a href="http://54.254.153.152/niuniu/index.php?id_supplier=1&amp;controller=supplier&amp;id_lang=1" title="About AppleStore">AppleStore</a>
		</li>
							<li class="last_item">
			<a href="http://54.254.153.152/niuniu/index.php?id_supplier=2&amp;controller=supplier&amp;id_lang=1" title="About Shure Online Store">Shure Online Store</a>
		</li>
				</ul>
				<form action="/niuniu/index.php" method="get">
			<p>
				<select id="supplier_list" onchange="autoUrl('supplier_list', '');">
					<option value="0">All suppliers</option>
									<option value="http://54.254.153.152/niuniu/index.php?id_supplier=1&amp;controller=supplier&amp;id_lang=1">AppleStore</option>
									<option value="http://54.254.153.152/niuniu/index.php?id_supplier=2&amp;controller=supplier&amp;id_lang=1">Shure Online Store</option>
								</select>
			</p>
		</form>
		</div>
</div>
<!-- /Block suppliers module -->
<?php }} ?>