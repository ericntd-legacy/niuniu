<?php /*%%SmartyHeaderCode:1883832694525041096c2929-95338757%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7f6e6f27ee73878bdc3bd2d26944848c14f92bc8' => 
    array (
      0 => '/var/www/html/niuniu/themes/default/modules/blockcategories/blockcategories.tpl',
      1 => 1377677663,
      2 => 'file',
    ),
    '1f676ed7a458deccd60d1829e39edd4a604f51f0' => 
    array (
      0 => '/var/www/html/niuniu/themes/default/modules/blockcategories/category-tree-branch.tpl',
      1 => 1377677663,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1883832694525041096c2929-95338757',
  'variables' => 
  array (
    'isDhtml' => 0,
    'blockCategTree' => 0,
    'child' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_525041097879b0_37712182',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_525041097879b0_37712182')) {function content_525041097879b0_37712182($_smarty_tpl) {?>
<!-- Block categories module -->
<div id="categories_block_left" class="block">
	<p class="title_block">Categories</p>
	<div class="block_content">
		<ul class="tree dhtml">
									
<li >
	<a href="http://54.254.153.152/niuniu/index.php?id_category=3&amp;controller=category&amp;id_lang=1" 		title="Now that you can buy movies from the iTunes Store and sync them to your iPod, the whole world is your theater.">iPods</a>
	</li>

												
<li >
	<a href="http://54.254.153.152/niuniu/index.php?id_category=4&amp;controller=category&amp;id_lang=1" 		title="Wonderful accessories for your iPod">Accessories</a>
	</li>

												
<li class="last">
	<a href="http://54.254.153.152/niuniu/index.php?id_category=5&amp;controller=category&amp;id_lang=1" 		title="The latest Intel processor, a bigger hard drive, plenty of memory, and even more new features all fit inside just one liberating inch. The new Mac laptops have the performance, power, and connectivity of a desktop computer. Without the desk part.">Laptops</a>
	</li>

							</ul>
		
		<script type="text/javascript">
		// <![CDATA[
			// we hide the tree only if JavaScript is activated
			$('div#categories_block_left ul.dhtml').hide();
		// ]]>
		</script>
	</div>
</div>
<!-- /Block categories module -->
<?php }} ?>