<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-06-12 10:43:35
         compiled from "Home/T/default/CreateKpList.html" */ ?>
<?php /*%%SmartyHeaderCode:1468197333557a4757484288-40327924%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '870aa8dc26b52cbc9ffe4918d1ec18ffd572e383' => 
    array (
      0 => 'Home/T/default/CreateKpList.html',
      1 => 1432529325,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1468197333557a4757484288-40327924',
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
  'unifunc' => 'content_557a47575a82e7_32807859',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_557a47575a82e7_32807859')) {function content_557a47575a82e7_32807859($_smarty_tpl) {?><body>
<div class='uk-grid'>
  <div class='uk-width-7-10 uk-container-center'>
	<table class='uk-table uk-table-hover'>
	  <tr>
	    <td>开票日期</td><td>开票金额</td><td>发票寄送日期</td><td>发票寄送方式</td><td>操作</td>
	  </tr>
	  <?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['srow']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value) {
$_smarty_tpl->tpl_vars['val']->_loop = true;
?>
	  <tr>
		  <td><?php echo $_smarty_tpl->tpl_vars['val']->value['kdate'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['val']->value['kom'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['val']->value['fsdate'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['val']->value['fstype'];?>
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
