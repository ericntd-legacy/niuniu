<?php /* Smarty version Smarty-3.1.14, created on 2013-10-27 11:54:14
         compiled from "/Applications/MAMP/htdocs/niuniu/themes/fashionbird/footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1628534337526bb644d05881-72062640%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '96e50c2ef2b19997e6e1cf8be84d1cdc4bfb6a79' => 
    array (
      0 => '/Applications/MAMP/htdocs/niuniu/themes/fashionbird/footer.tpl',
      1 => 1382845943,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1628534337526bb644d05881-72062640',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_526bb644d17851_56624121',
  'variables' => 
  array (
    'content_only' => 0,
    'HOOK_RIGHT_COLUMN' => 0,
    'HOOK_FOOTER' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_526bb644d17851_56624121')) {function content_526bb644d17851_56624121($_smarty_tpl) {?>

		<?php if (!$_smarty_tpl->tpl_vars['content_only']->value){?>
				</div>

<!-- Right -->
<aside id="right_column"  class="span3 column right_home">   
              <?php echo $_smarty_tpl->tpl_vars['HOOK_RIGHT_COLUMN']->value;?>

</aside>
</div>
	</div>
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