<?php /*%%SmartyHeaderCode:1312582499525a1ca8547193-48807604%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '91c9920dfbfb991e9ea813e3f96ed8c2eb4afb41' => 
    array (
      0 => '/var/www/html/niuniu/themes/fashionbird/modules/crossselling/crossselling.tpl',
      1 => 1373170726,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1312582499525a1ca8547193-48807604',
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5260acafa7f645_27083305',
  'has_nocache_code' => false,
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5260acafa7f645_27083305')) {function content_5260acafa7f645_27083305($_smarty_tpl) {?><script type="text/javascript">
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