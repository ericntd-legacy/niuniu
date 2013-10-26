<?php /*%%SmartyHeaderCode:19008389252692f89041149-52421920%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '99ba859f89f5356943f5cdb2525e5269c877b10a' => 
    array (
      0 => '/var/www/html/niuniu/themes/fashionbird/modules/blockmanufacturer/blockmanufacturer.tpl',
      1 => 1377677663,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19008389252692f89041149-52421920',
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5269f773844ab1_74299788',
  'has_nocache_code' => false,
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5269f773844ab1_74299788')) {function content_5269f773844ab1_74299788($_smarty_tpl) {?>
<!-- Block manufacturers module -->
<div id="manufacturers_block_left" class="block blockmanufacturer">
	<h4 class="title_block"><a href="http://beta.niuniuboutique.com/zh/manufacturers" title="制造商">制造商</a></h4>
	<div class="block_content">
		<ul class="bullet">
					<li class="first_item"><a href="http://beta.niuniuboutique.com/zh/1_apple-computer-inc" title="更多 Apple Computer, Inc">Apple Computer, Inc</a></li>
							<li class="last_item"><a href="http://beta.niuniuboutique.com/zh/2_shure-incorporated" title="更多 Shure Incorporated">Shure Incorporated</a></li>
				</ul>
				<form action="/index.php" method="get">
			<p>
				<select id="manufacturer_list" onchange="autoUrl('manufacturer_list', '');">
					<option value="0">所有制造商</option>
									<option value="http://beta.niuniuboutique.com/zh/1_apple-computer-inc">Apple Computer, Inc</option>
									<option value="http://beta.niuniuboutique.com/zh/2_shure-incorporated">Shure Incorporated</option>
								</select>
			</p>
		</form>
		</div>
</div>
<!-- /Block manufacturers module -->
<?php }} ?>