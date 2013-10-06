<?php /*%%SmartyHeaderCode:173256014452504109889ba9-38597992%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2914b04b6cdf2634002e109d7bf18892d3b2b1a1' => 
    array (
      0 => '/var/www/html/niuniu/themes/default/modules/blockmanufacturer/blockmanufacturer.tpl',
      1 => 1377677663,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '173256014452504109889ba9-38597992',
  'variables' => 
  array (
    'display_link_manufacturer' => 0,
    'link' => 0,
    'manufacturers' => 0,
    'text_list' => 0,
    'text_list_nb' => 0,
    'manufacturer' => 0,
    'form_list' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_52504109963aa6_88497128',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52504109963aa6_88497128')) {function content_52504109963aa6_88497128($_smarty_tpl) {?>
<!-- Block manufacturers module -->
<div id="manufacturers_block_left" class="block blockmanufacturer">
	<p class="title_block"><a href="http://54.254.153.152/niuniu/index.php?controller=manufacturer" title="Manufacturers">Manufacturers</a></p>
	<div class="block_content">
		<ul class="bullet">
					<li class="first_item"><a href="http://54.254.153.152/niuniu/index.php?id_manufacturer=1&amp;controller=manufacturer&amp;id_lang=1" title="Learn more about Apple Computer, Inc">Apple Computer, Inc</a></li>
							<li class="last_item"><a href="http://54.254.153.152/niuniu/index.php?id_manufacturer=2&amp;controller=manufacturer&amp;id_lang=1" title="Learn more about Shure Incorporated">Shure Incorporated</a></li>
				</ul>
				<form action="/niuniu/index.php" method="get">
			<p>
				<select id="manufacturer_list" onchange="autoUrl('manufacturer_list', '');">
					<option value="0">All manufacturers</option>
									<option value="http://54.254.153.152/niuniu/index.php?id_manufacturer=1&amp;controller=manufacturer&amp;id_lang=1">Apple Computer, Inc</option>
									<option value="http://54.254.153.152/niuniu/index.php?id_manufacturer=2&amp;controller=manufacturer&amp;id_lang=1">Shure Incorporated</option>
								</select>
			</p>
		</form>
		</div>
</div>
<!-- /Block manufacturers module -->
<?php }} ?>