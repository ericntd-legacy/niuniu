<?php /*%%SmartyHeaderCode:2093023827525a1a5a6aeb27-15177008%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '99ba859f89f5356943f5cdb2525e5269c877b10a' => 
    array (
      0 => '/var/www/html/niuniu/themes/fashionbird/modules/blockmanufacturer/blockmanufacturer.tpl',
      1 => 1373170726,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2093023827525a1a5a6aeb27-15177008',
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5260aca7b3e796_50665476',
  'has_nocache_code' => false,
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5260aca7b3e796_50665476')) {function content_5260aca7b3e796_50665476($_smarty_tpl) {?>
<!-- Block manufacturers module -->
<section id="manufacturers_block_left" class="block blockmanufacturer column_box">
	<h4 class="title_block"><span>Manufacturers</span><span class="column_icon_toggle"></span></h4>
	<div class="block_content toggle_content">
		<ul class="store_list">
					<li class="first_item"><a href="http://beta.niuniuboutique.com/en/1_apple-computer-inc" title="Learn more about Apple Computer, Inc"><i class="icon-ok"></i>Apple Computer, Inc</a></li>
							<li class="last_item"><a href="http://beta.niuniuboutique.com/en/2_shure-incorporated" title="Learn more about Shure Incorporated"><i class="icon-ok"></i>Shure Incorporated</a></li>
				</ul>
				<form action="/index.php" method="get">
			<p>
				<select id="manufacturer_list" onchange="autoUrl('manufacturer_list', '');">
					<option value="0">All manufacturers</option>
									<option value="http://beta.niuniuboutique.com/en/1_apple-computer-inc">Apple Computer, Inc</option>
									<option value="http://beta.niuniuboutique.com/en/2_shure-incorporated">Shure Incorporated</option>
								</select>
			</p>
		</form>
		</div>
</section>
<!-- /Block manufacturers module -->
<?php }} ?>