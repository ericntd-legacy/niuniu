<?php /* Smarty version Smarty-3.1.14, created on 2013-10-13 11:58:21
         compiled from "/var/www/html/niuniu/themes/fashionbird/footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:91862121525a1a5dc60398-67761510%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '77c3b5c11e2def81e73ed119f0b4b4ad1734a9a9' => 
    array (
      0 => '/var/www/html/niuniu/themes/fashionbird/footer.tpl',
      1 => 1381631908,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '91862121525a1a5dc60398-67761510',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content_only' => 0,
    'HOOK_RIGHT_COLUMN' => 0,
    'HOOK_FOOTER' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_525a1a5dc74117_98711522',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_525a1a5dc74117_98711522')) {function content_525a1a5dc74117_98711522($_smarty_tpl) {?>
		<?php if (!$_smarty_tpl->tpl_vars['content_only']->value){?>
				</div>

<!-- Right -->
<aside id="right_column"  class="span3 column right_home">   
              <?php echo $_smarty_tpl->tpl_vars['HOOK_RIGHT_COLUMN']->value;?>

</aside>
</div>
	</div>
    	</div>
<div>
<div class="fb-like-box" data-href="http://facebook.com/niuniuboutique" data-width="300" data-height="300" data-colorscheme="light" data-show-faces="true" data-header="true" data-stream="false" data-show-border="false"></div>
</div>

<div class="footer-bg-mob">
    <footer class="container ">
       <div class="row modules">
           <?php echo $_smarty_tpl->tpl_vars['HOOK_FOOTER']->value;?>

      </div>
    </footer> 
</div>          
	</div>
		</div>
			</div>
  <?php }?>
</body>
</html>
<?php }} ?>