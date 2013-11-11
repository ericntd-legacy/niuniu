<?php /* Smarty version Smarty-3.1.14, created on 2013-10-27 11:54:12
         compiled from "/Applications/MAMP/htdocs/niuniu/themes/fashionbird/modules/blockpermanentlinks/blockpermanentlinks-header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:372630014526bb6419b2179-38046926%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8095348189378c7a6509ab055acb9ddd006653fd' => 
    array (
      0 => '/Applications/MAMP/htdocs/niuniu/themes/fashionbird/modules/blockpermanentlinks/blockpermanentlinks-header.tpl',
      1 => 1382845943,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '372630014526bb6419b2179-38046926',
  'function' => 
  array (
  ),
  'cache_lifetime' => 31536000,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_526bb6419e6eb3_21470094',
  'variables' => 
  array (
    'link' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_526bb6419e6eb3_21470094')) {function content_526bb6419e6eb3_21470094($_smarty_tpl) {?>

<!-- Block permanent links module HEADER -->
<section class="header-box blockpermanentlinks-header">
    <ul id="header_links">
        <li><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('index.php');?>
" class="header_links_home"><?php echo smartyTranslate(array('s'=>'home','mod'=>'blockpermanentlinks'),$_smarty_tpl);?>
</a></li>
        <li><a  href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('stores');?>
" class="header_links_store"><?php echo smartyTranslate(array('s'=>'Our stores'),$_smarty_tpl);?>
</a></li>
        <li ><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getCMSLink('4','About Us');?>
" class="header_links_about"><?php echo smartyTranslate(array('s'=>'About Us'),$_smarty_tpl);?>
</a></li>
        <li ><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getCMSLink('1','Delivery');?>
" class="header_links_delivery"><?php echo smartyTranslate(array('s'=>'Delivery'),$_smarty_tpl);?>
</a></li>
        <li><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('contact',true);?>
" class="header_links_contact"  title="<?php echo smartyTranslate(array('s'=>'Contact us','mod'=>'blockpermanentlinks'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'Contact us','mod'=>'blockpermanentlinks'),$_smarty_tpl);?>
</a></li>

        
    </ul>

    <div class="mobile-link-top">
        <h4>
             <span class="title-hed"></span><span class="arrow_header_top_menu"></span>
        </h4>
        <ul id="mobilelink" class="list_header">
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('index.php');?>
" class="header_links_home"><?php echo smartyTranslate(array('s'=>'home','mod'=>'blockpermanentlinks'),$_smarty_tpl);?>
</a></li>
        <li><a  href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('stores');?>
" class="header_links_store"><?php echo smartyTranslate(array('s'=>'Our stores'),$_smarty_tpl);?>
</a></li>
               <li ><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getCMSLink('4','About Us');?>
" class="header_links_about"><?php echo smartyTranslate(array('s'=>'About Us'),$_smarty_tpl);?>
</a></li>
    	    <li ><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getCMSLink('1','Delivery');?>
" class="header_links_delivery">Delivery</a></li>
        <li><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('contact',true);?>
" class="header_links_contact"  title="<?php echo smartyTranslate(array('s'=>'Contact us','mod'=>'blockpermanentlinks'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'Contact us','mod'=>'blockpermanentlinks'),$_smarty_tpl);?>
</a></li>

        </ul>
    </div>
</section>
<!-- /Block permanent links module HEADER -->


<?php }} ?>