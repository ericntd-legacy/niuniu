<?php /*%%SmartyHeaderCode:15203133335250410a83f0a8-90481455%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b5875997052d61e081b2c24e1034b5856714ae64' => 
    array (
      0 => '/var/www/html/niuniu/themes/default/modules/blocksocial/blocksocial.tpl',
      1 => 1377677663,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15203133335250410a83f0a8-90481455',
  'variables' => 
  array (
    'facebook_url' => 0,
    'twitter_url' => 0,
    'rss_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5250410a890564_49260521',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5250410a890564_49260521')) {function content_5250410a890564_49260521($_smarty_tpl) {?>
<div id="social_block">
	<p class="title_block">Follow us</p>
	<ul>
		<li class="facebook"><a href="http://www.facebook.com/prestashop">Facebook</a></li>		<li class="twitter"><a href="http://www.twitter.com/prestashop">Twitter</a></li>		<li class="rss"><a href="http://www.prestashop.com/blog/en/feed/">RSS</a></li>	</ul>
</div>
<?php }} ?>