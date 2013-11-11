<?php /* Smarty version Smarty-3.1.14, created on 2013-10-26 20:53:13
         compiled from "/Applications/MAMP/htdocs/niuniu/themes/fashionbird/modules/blocktags/blocktags.tpl" */ ?>
<?php /*%%SmartyHeaderCode:372868880526bb64224f7a1-86120167%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '95d481a9840534917ceba3e3238f3fc25a7ed829' => 
    array (
      0 => '/Applications/MAMP/htdocs/niuniu/themes/fashionbird/modules/blocktags/blocktags.tpl',
      1 => 1382791380,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '372868880526bb64224f7a1-86120167',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_526bb642299a69_60118552',
  'variables' => 
  array (
    'tags' => 0,
    'tag' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_526bb642299a69_60118552')) {function content_526bb642299a69_60118552($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include '/Applications/MAMP/htdocs/niuniu/tools/smarty/plugins/modifier.escape.php';
?>

<!-- Block tags module -->
<section id="tags_block_left" class="block tags_block column_box">
	<h4><span><?php echo smartyTranslate(array('s'=>'Tags','mod'=>'blocktags'),$_smarty_tpl);?>
</span><span class="column_icon_toggle"></span></h4>
        <p class="block_content toggle_content">
            <?php if ($_smarty_tpl->tpl_vars['tags']->value){?>
                <?php  $_smarty_tpl->tpl_vars['tag'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tag']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tags']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['tag']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['tag']->iteration=0;
 $_smarty_tpl->tpl_vars['tag']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['tag']->key => $_smarty_tpl->tpl_vars['tag']->value){
$_smarty_tpl->tpl_vars['tag']->_loop = true;
 $_smarty_tpl->tpl_vars['tag']->iteration++;
 $_smarty_tpl->tpl_vars['tag']->index++;
 $_smarty_tpl->tpl_vars['tag']->first = $_smarty_tpl->tpl_vars['tag']->index === 0;
 $_smarty_tpl->tpl_vars['tag']->last = $_smarty_tpl->tpl_vars['tag']->iteration === $_smarty_tpl->tpl_vars['tag']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['myLoop']['first'] = $_smarty_tpl->tpl_vars['tag']->first;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['myLoop']['last'] = $_smarty_tpl->tpl_vars['tag']->last;
?>
                    <a href="<?php ob_start();?><?php echo urlencode($_smarty_tpl->tpl_vars['tag']->value['name']);?>
<?php $_tmp1=ob_get_clean();?><?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('search',true,null,"tag=".$_tmp1);?>
" title="<?php echo smartyTranslate(array('s'=>'More about','mod'=>'blocktags'),$_smarty_tpl);?>
 <?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['tag']->value['name'], 'html', 'UTF-8');?>
" class="<?php echo $_smarty_tpl->tpl_vars['tag']->value['class'];?>
 <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['myLoop']['last']){?>last_item<?php }elseif($_smarty_tpl->getVariable('smarty')->value['foreach']['myLoop']['first']){?>first_item<?php }else{ ?>item<?php }?>"><i class="icon-tags"></i><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['tag']->value['name'], 'html', 'UTF-8');?>
</a>
                <?php } ?>
            <?php }else{ ?>
                <?php echo smartyTranslate(array('s'=>'No tags specified yet','mod'=>'blocktags'),$_smarty_tpl);?>

            <?php }?>
        </p>
</section>
<!-- /Block tags module -->
<?php }} ?>