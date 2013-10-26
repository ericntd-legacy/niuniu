<?php /*%%SmartyHeaderCode:41567309052692f89237f81-24300807%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f809c5437ca076594e587de068db3186e7b94fac' => 
    array (
      0 => '/var/www/html/niuniu/themes/fashionbird/modules/blocksupplier/blocksupplier.tpl',
      1 => 1377677663,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '41567309052692f89237f81-24300807',
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5269e85bc1e1c7_74100711',
  'has_nocache_code' => false,
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5269e85bc1e1c7_74100711')) {function content_5269e85bc1e1c7_74100711($_smarty_tpl) {?>
<!-- Block suppliers module -->
<div id="suppliers_block_left" class="block blocksupplier">
	<h4 class="title_block"><a href="http://beta.niuniuboutique.com/en/supplier" title="Suppliers">Suppliers</a></h4>
	<div class="block_content">
		<ul class="bullet">
					<li class="first_item">
			<a href="http://beta.niuniuboutique.com/en/1__applestore" title="About AppleStore">AppleStore</a>
		</li>
							<li class="last_item">
			<a href="http://beta.niuniuboutique.com/en/2__shure-online-store" title="About Shure Online Store">Shure Online Store</a>
		</li>
				</ul>
				<form action="/index.php" method="get">
			<p>
				<select id="supplier_list" onchange="autoUrl('supplier_list', '');">
					<option value="0">All suppliers</option>
									<option value="http://beta.niuniuboutique.com/en/1__applestore">AppleStore</option>
									<option value="http://beta.niuniuboutique.com/en/2__shure-online-store">Shure Online Store</option>
								</select>
			</p>
		</form>
		</div>
</div>
<!-- /Block suppliers module -->
<?php }} ?>