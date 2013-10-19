<?php /*%%SmartyHeaderCode:2028484308525a1a59df2417-82644136%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd59098dc80f5e37d56cc1de87bf35cc2d2fb39f6' => 
    array (
      0 => '/var/www/html/niuniu/themes/fashionbird/modules/blocksearch/blocksearch-top.tpl',
      1 => 1373170726,
      2 => 'file',
    ),
    'f4e538cb03421a0b6c58f1e47a589e4a05e2a56a' => 
    array (
      0 => '/var/www/html/niuniu/themes/fashionbird/modules/blocksearch/blocksearch-instantsearch.tpl',
      1 => 1373170726,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2028484308525a1a59df2417-82644136',
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5260aca7a98a47_74758391',
  'has_nocache_code' => false,
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5260aca7a98a47_74758391')) {function content_5260aca7a98a47_74758391($_smarty_tpl) {?><!-- block seach mobile -->
<!-- Block search module TOP -->
<section id="search_block_top" class="header-box">
	<form method="get" action="http://beta.niuniuboutique.com/en/search" id="searchbox">
		<p>
			<label for="search_query_top">Search</label>
			<input type="hidden" name="controller" value="search" />
			<input type="hidden" name="orderby" value="position" />
			<input type="hidden" name="orderway" value="desc" />
			<input class="search_query" type="text" id="search_query_top" name="search_query" value="" />
            <a href="javascript:document.getElementById('searchbox').submit();"></a>
			
	    </p>
	</form>
</section>
	<script type="text/javascript">
	// <![CDATA[
		$('document').ready( function() {
			$("#search_query_top")
				.autocomplete(
					'http://beta.niuniuboutique.com/en/search', {
						minChars: 3,
						max: 10,
						width: 300,
						selectFirst: false,
						scroll: false,
						dataType: "json",
						formatItem: function(data, i, max, value, term) {
							return value;
						},
							parse: function(data) {
							var mytab = new Array();
							for (var i = 0; i < data.length; i++)
								mytab[mytab.length] = { data: data[i], value: data[i].cname + ' > ' + data[i].pname };
							return mytab;
						},
						extraParams: {
							ajaxSearch: 1,
							id_lang: 1
						}
					}
				)
				.result(function(event, data, formatted) {
					$('#search_query_top').val(data.pname);
					document.location.href = data.product_link;
						})
		});
	// ]]>
	</script>

<!-- /Block search module TOP -->
<?php }} ?>