<?php /*%%SmartyHeaderCode:1686010104526bbb73766fd0-43249256%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3fc769b767cee05a48a76d2cde7c31339471c48c' => 
    array (
      0 => '/Applications/MAMP/htdocs/niuniu/themes/fashionbird/modules/crossselling/crossselling.tpl',
      1 => 1382845943,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1686010104526bbb73766fd0-43249256',
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_526cb770d8ac85_28220297',
  'has_nocache_code' => false,
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_526cb770d8ac85_28220297')) {function content_526cb770d8ac85_28220297($_smarty_tpl) {?><script type="text/javascript">
	$("#carouselproductcross").carouFredSel({
		debug: true,
		circular: true,
        infinite: true,
		responsive: true,
		align   : "center",
		width: '100%',
	    auto	: {
    		play	: 1,
	    	timeoutDuration :20000
	    },
		
	    items	: {
					
		visible: {
					min: 2,
					max: 6
					 },
					 width:167,
		
		},		
		scroll	: {
			items	: 1,
			pauseOnHover:false
		},
		prev	: {
			button	: "#cross_prev"
		},
		next	: {
			button	: "#cross_next"
		},
		swipe: {
					onMouse: true,
					onTouch: true
			   }
	});
</script><?php }} ?>