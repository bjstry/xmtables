<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-06-05 14:29:26
         compiled from "Home/T/default/CreateSkList.html" */ ?>
<?php /*%%SmartyHeaderCode:1998723119557141c6a3a086-24274429%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd569306da27fb99149dcb2e62ebfb8ded62d0e8b' => 
    array (
      0 => 'Home/T/default/CreateSkList.html',
      1 => 1432529325,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1998723119557141c6a3a086-24274429',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'srow' => 0,
    'val' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_557141c6aa2d81_96415606',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_557141c6aa2d81_96415606')) {function content_557141c6aa2d81_96415606($_smarty_tpl) {?><body>
<div class='uk-grid'>
  <div class='uk-width-7-10 uk-container-center'>
	<table class='uk-table uk-table-hover'>
	  <tr>
	    <td>货款应到日期</td><td>货款实到日期</td><td>付款金额</td><td>应收账款</td><td>操作</td>
	  </tr>
	  <?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['srow']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value) {
$_smarty_tpl->tpl_vars['val']->_loop = true;
?>
	  <tr>
		  <td><?php echo $_smarty_tpl->tpl_vars['val']->value['gsdate'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['val']->value['godate'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['val']->value['gom'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['val']->value['shom'];?>
</td><td><a class='uk-button uk-button-mini' href="<?php echo @constant('R');?>
/Index/Edit.html?type=upd&e=<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
" onclick=''>编辑</a></td>
	  </tr>
	  <?php } ?>
	  <tr>
		  <td></td><td></td><td></td><td></td><td><a class='uk-button uk-button-primary uk-button-mini' href='<?php echo @constant('R');?>
/Index/Edit/type/add'>添加</a></td>
	  </tr>
	</table>
  </div>
</div>
</body>
<?php }} ?>
