<?php /* Smarty version Smarty-3.1.14, created on 2013-10-27 11:48:00
         compiled from "/Applications/MAMP/htdocs/niuniu/themes/default/footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1107755958526c8cf005aaa0-72194671%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4d17d061781027e9b9a6e738049a388bf70fa657' => 
    array (
      0 => '/Applications/MAMP/htdocs/niuniu/themes/default/footer.tpl',
      1 => 1382764591,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1107755958526c8cf005aaa0-72194671',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content_only' => 0,
    'HOOK_RIGHT_COLUMN' => 0,
    'HOOK_FOOTER' => 0,
    'PS_ALLOW_MOBILE_DEVICE' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_526c8cf007a6f0_67365378',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_526c8cf007a6f0_67365378')) {function content_526c8cf007a6f0_67365378($_smarty_tpl) {?>

		<?php if (!$_smarty_tpl->tpl_vars['content_only']->value){?>
				</div>

<!-- Right -->
				<div id="right_column" class="column grid_2 omega">
					<?php echo $_smarty_tpl->tpl_vars['HOOK_RIGHT_COLUMN']->value;?>

				</div>
			</div>

<!-- Footer -->
			<div id="footer" class="grid_9 alpha omega clearfix">
				<?php echo $_smarty_tpl->tpl_vars['HOOK_FOOTER']->value;?>

				<?php if ($_smarty_tpl->tpl_vars['PS_ALLOW_MOBILE_DEVICE']->value){?>
					<p class="center clearBoth"><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('index',true);?>
?mobile_theme_ok"><?php echo smartyTranslate(array('s'=>'Browse the mobile site'),$_smarty_tpl);?>
</a></p>
				<?php }?>
			</div>
		</div>
	<?php }?>
	</body>
</html>
<?php }} ?>