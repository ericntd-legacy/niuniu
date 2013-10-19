<?php /*%%SmartyHeaderCode:431630942525a1a5a781925-40671140%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f809c5437ca076594e587de068db3186e7b94fac' => 
    array (
      0 => '/var/www/html/niuniu/themes/fashionbird/modules/blocksupplier/blocksupplier.tpl',
      1 => 1373170726,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '431630942525a1a5a781925-40671140',
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5260aca7b57583_81901496',
  'has_nocache_code' => false,
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5260aca7b57583_81901496')) {function content_5260aca7b57583_81901496($_smarty_tpl) {?>
<!-- Block suppliers module -->
<section id="suppliers_block_left" class="block blocksupplier column_box">
	<h4 class="title_block"><span>Suppliers</span><span class="column_icon_toggle"></span></h4>
	<div class="block_content toggle_content">
		<ul class="store_list">
					<li class="first_item">
			<a href="http://beta.niuniuboutique.com/en/1__applestore" title="About AppleStore"><i class="icon-ok"></i>AppleStore</a>
		</li>
							<li class="last_item">
			<a href="http://beta.niuniuboutique.com/en/2__shure-online-store" title="About Shure Online Store"><i class="icon-ok"></i>Shure Online Store</a>
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
</section>
<!-- /Block suppliers module -->
<?php }} ?>