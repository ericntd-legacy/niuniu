<?php /*%%SmartyHeaderCode:1102208781525a1ca842bed5-27221340%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '59a818593acae12a0a0fa0e065dd4200bb979ca5' => 
    array (
      0 => '/var/www/html/niuniu/themes/fashionbird/modules/productscategory/productscategory.tpl',
      1 => 1373170726,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1102208781525a1ca842bed5-27221340',
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5260acafa758a2_29035089',
  'has_nocache_code' => false,
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5260acafa758a2_29035089')) {function content_5260acafa758a2_29035089($_smarty_tpl) {?>	<section class="page_product_box blockproductscategory">
		<h3>2 other products in the same category:<span class="icon-toggle"></span></h3>
    	<div id="block-category-slider" class="carusel-inner responsive  toggle_content">
        	<ul id="carouselproduct" class="carousel-ul">
			                <li class="item">
                    <a href="http://beta.niuniuboutique.com/en/home/8-cheongsam-1.html" class="lnk_img" title="Cheongsam C"><img src="http://beta.niuniuboutique.com/27-medium_default/cheongsam-1.jpg" alt="Cheongsam C" /></a>
                        <a class="product_link" href="http://beta.niuniuboutique.com/en/home/8-cheongsam-1.html" title="Cheongsam C">Cheongsam C</a>
                                    </li>
			                <li class="item">
                    <a href="http://beta.niuniuboutique.com/en/home/10-cheongsam-b.html" class="lnk_img" title="Cheongsam B"><img src="http://beta.niuniuboutique.com/31-medium_default/cheongsam-b.jpg" alt="Cheongsam B" /></a>
                        <a class="product_link" href="http://beta.niuniuboutique.com/en/home/10-cheongsam-b.html" title="Cheongsam B">Cheongsam B</a>
                                    </li>
			        	</ul>

            	<a class="prev" id="cat_prev" href="#"></a>
				<a class="next" id="cat_next" href="#"></a>
            </div>
</section>
<script type="text/javascript">
	$("#carouselproduct").carouFredSel({
		debug: true,
		circular: true,
        infinite: true,
		responsive: true,
		align   : "center",
		width: '100%',
	    auto	: {
    		play	: 1,
	    	timeoutDuration :15000
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
			button	: "#cat_prev"
		},
		next	: {
			button	: "#cat_next"
		},
		swipe: {
					onMouse: true,
					onTouch: true
			   }
	}, 
	{
	    classnames		: {
		    selected		: "selected",
		    hidden			: "hidden",
		    disabled		: "disabled",
		    paused			: "paused",
		    stopped			: "stopped"
	    },

	});
	</script>
<?php }} ?>