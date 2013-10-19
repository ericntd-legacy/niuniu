<?php /* Smarty version Smarty-3.1.14, created on 2013-10-13 12:08:08
         compiled from "/var/www/html/niuniu/themes/fashionbird/modules/sendtoafriend/sendtoafriend-extra.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1268995845525a1ca87234b1-14370642%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2ff778c5877531c26a8b422e7e0db81549f77fc5' => 
    array (
      0 => '/var/www/html/niuniu/themes/fashionbird/modules/sendtoafriend/sendtoafriend-extra.tpl',
      1 => 1373170726,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1268995845525a1ca87234b1-14370642',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'module_dir' => 0,
    'stf_secure_key' => 0,
    'stf_product' => 0,
    'stf_product_cover' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_525a1ca878d2c0_68996159',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_525a1ca878d2c0_68996159')) {function content_525a1ca878d2c0_68996159($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include '/var/www/html/niuniu/tools/smarty/plugins/modifier.escape.php';
?>
<script text="javascript">

$('document').ready(function(){


	$('#sendEmail').click(function(){
		var datas = [];
		$('.send_friend_form_content').find('input').each(function(index){
			var o = {};
			o.key = $(this).attr('name');
			o.value = $(this).val();
			if (o.value != '')
				datas.push(o);
		});
		if (datas.length >= 3)
		{
			$.ajax({
				url: "<?php echo $_smarty_tpl->tpl_vars['module_dir']->value;?>
sendtoafriend_ajax.php",
				post: "POST",
				data: {action: 'sendToMyFriend', secure_key: '<?php echo $_smarty_tpl->tpl_vars['stf_secure_key']->value;?>
', friend: JSON.stringify(datas)},
				dataType: "json",
					success: function(result){
					$('#send_friend_form').modal('hide');
				}
			});
		}
		else
			$('#send_friend_form_error').text("<?php echo smartyTranslate(array('s'=>'You did not fill required fields','mod'=>'sendtoafriend','js'=>1),$_smarty_tpl);?>
");
	});
});

</script>
<li class="sendtofriend">
	<a  class="btn-send-friend" href="#send_friend_form"  role="button"  data-toggle="modal" ><i class="icon-envelope"></i><?php echo smartyTranslate(array('s'=>'Send to a friend','mod'=>'sendtoafriend'),$_smarty_tpl);?>
</a>
</li>

	<div id="send_friend_form" class="modal hide fade" tabindex="-1" data-width="760">
    <div class="modal-header">
     <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			<h1 id="myModalLabel"><span><?php echo smartyTranslate(array('s'=>'Send to a friend','mod'=>'sendtoafriend'),$_smarty_tpl);?>
</span></h1>
            </div>
            
             <div class="modal-body">
              <div class="row-fluid ">
<div class="span6 titled_box">
		
<h2><span><?php echo $_smarty_tpl->tpl_vars['stf_product']->value->name;?>
</span></h2>
				<img src="<?php echo $_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['stf_product']->value->link_rewrite,$_smarty_tpl->tpl_vars['stf_product_cover']->value,'small_default');?>
"  alt="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['stf_product']->value->name, 'html', 'UTF-8');?>
" />
				<div class="product_desc">
					
					<span class="send-desc"><?php echo $_smarty_tpl->tpl_vars['stf_product']->value->description_short;?>
</span>
				</div>

			</div>
			<div class="send_friend_form_content span6">
<div id="send_friend_form_error" ></div>
				<div class="form_container titled_box">
					<h2><span><?php echo smartyTranslate(array('s'=>'Recipient','mod'=>'sendtoafriend'),$_smarty_tpl);?>
 :</span></h2>
					<p class="text">
						<label for="friend_name"><?php echo smartyTranslate(array('s'=>'Name of your friend','mod'=>'sendtoafriend'),$_smarty_tpl);?>
 <sup class="required">*</sup> :</label>
						<input id="friend_name" name="friend_name" type="text" value=""/>
					</p>
					<p class="text">
						<label for="friend_email"><?php echo smartyTranslate(array('s'=>'E-mail address of your friend','mod'=>'sendtoafriend'),$_smarty_tpl);?>
 <sup class="required">*</sup> :</label>
						<input id="friend_email" name="friend_email" type="text" value=""/>
					</p>
					<p class="txt_required"><sup class="required">*</sup> <?php echo smartyTranslate(array('s'=>'Required fields','mod'=>'sendtoafriend'),$_smarty_tpl);?>
</p>
				</div>

			</div>
	</div></div>
    
    
 
		<div class="modal-footer">
					<input id="id_product_comment_send" name="id_product" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['stf_product']->value->id;?>
" />
				   <button class="btn btn-inverse" data-dismiss="modal" aria-hidden="true">Close</button>
					<input id="sendEmail" class="btn btn-inverse" name="sendEmail" type="submit" value="<?php echo smartyTranslate(array('s'=>'Send','mod'=>'sendtoafriend'),$_smarty_tpl);?>
" />
	</div>
</div><?php }} ?>