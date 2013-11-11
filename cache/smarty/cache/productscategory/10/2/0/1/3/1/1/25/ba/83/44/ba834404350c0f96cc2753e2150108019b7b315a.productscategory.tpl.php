<?php /*%%SmartyHeaderCode:1295022799526bbb736b65c8-13171381%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ba834404350c0f96cc2753e2150108019b7b315a' => 
    array (
      0 => '/Applications/MAMP/htdocs/niuniu/themes/fashionbird/modules/productscategory/productscategory.tpl',
      1 => 1382845943,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1295022799526bbb736b65c8-13171381',
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_526cb770d36bc9_63878572',
  'has_nocache_code' => false,
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_526cb770d36bc9_63878572')) {function content_526cb770d36bc9_63878572($_smarty_tpl) {?>	<section class="page_product_box blockproductscategory">
		<h3>4 other products in the same category:<span class="icon-toggle"></span></h3>
    	<div id="block-category-slider" class="carusel-inner responsive  toggle_content">
        	<ul id="carouselproduct" class="carousel-ul">
			                <li class="item">
                    <a href="http://localhost:8888/niuniu/en/home/8-cheongsam-1.html" class="lnk_img" title="Cheongsam C"><img src="http://localhost:8888/niuniu/27-medium_default/cheongsam-1.jpg" alt="Cheongsam C" /></a>
                        <a class="product_link" href="http://localhost:8888/niuniu/en/home/8-cheongsam-1.html" title="Cheongsam C">Cheongsam C</a>
                                    </li>
			                <li class="item">
                    <a href="http://localhost:8888/niuniu/en/home/9-cheongsam-a.html" class="lnk_img" title="Cheongsam A"><img src="http://localhost:8888/niuniu/29-medium_default/cheongsam-a.jpg" alt="Cheongsam A" /></a>
                        <a class="product_link" href="http://localhost:8888/niuniu/en/home/9-cheongsam-a.html" title="Cheongsam A">Cheongsam A</a>
                                    </li>
			                <li class="item">
                    <a href="http://localhost:8888/niuniu/en/home/11-rabbit-doll.html" class="lnk_img" title="Rabbit doll"><img src="http://localhost:8888/niuniu/32-medium_default/rabbit-doll.jpg" alt="Rabbit doll" /></a>
                        <a class="product_link" href="http://localhost:8888/niuniu/en/home/11-rabbit-doll.html" title="Rabbit doll">Rabbit doll</a>
                                    </li>
			                <li class="item">
                    <a href="http://localhost:8888/niuniu/en/home/12-macaron-earings.html" class="lnk_img" title="Macaron Earings"><img src="http://localhost:8888/niuniu/36-medium_default/macaron-earings.jpg" alt="Macaron Earings" /></a>
                        <a class="product_link" href="http://localhost:8888/niuniu/en/home/12-macaron-earings.html" title="Macaron Earings">Macaron Earings</a>
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