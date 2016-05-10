<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-06-05 14:28:19
         compiled from "Home/T/default/CreateHt.html" */ ?>
<?php /*%%SmartyHeaderCode:53406780355714183de29e6-19111008%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7cd052da38267e767719a8e2fe516b5965778ce4' => 
    array (
      0 => 'Home/T/default/CreateHt.html',
      1 => 1432529325,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '53406780355714183de29e6-19111008',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'row' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55714183e68128_57337263',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55714183e68128_57337263')) {function content_55714183e68128_57337263($_smarty_tpl) {?><body>
	<div class='uk-grid'>
		<div class='uk-width-7-10 uk-container-center'>
			<form class='uk-form uk-form-horizontal' action='<?php echo @constant('R');?>
/Index/EditCheck' method='post'>
	<legend>合同</legend>
	<div class='uk-form-row'>
		<label class='uk-form-label' for='date' >建表日期</label>
		<div class='uk-form-controls'>
			<input type='text' name='date' id='date' value="<?php echo $_smarty_tpl->tpl_vars['row']->value['date'];?>
">
		</div>
	</div>
	<div class='uk-form-row'>
		<label class='uk-form-label' for='author' >填表人</label>
		<div class='uk-form-controls'>
			<input type='text' name='author' id='author' value="<?php echo $_smarty_tpl->tpl_vars['row']->value['author'];?>
">
		</div>
	</div>
	<div class='uk-form-row'>
		<label class='uk-form-label' for='customer_a' >客户单位</label>
		<div class='uk-form-controls'>
			<input type='text' name='customer_a' id='customer_a' value="<?php echo $_smarty_tpl->tpl_vars['row']->value['customer_a'];?>
">
		</div>
	</div>
	<div class='uk-form-row'>
		<label class='uk-form-label' for='customer_b' >客户姓名</label>
		<div class='uk-form-controls'>
			<input type='text' name='customer_b' id='customer_b' value="<?php echo $_smarty_tpl->tpl_vars['row']->value['customer_b'];?>
">
		</div>
	</div>
	<div class='uk-form-row'>
		<label class='uk-form-label' for='salesman' >业务负责人</label>
		<div class='uk-form-controls'>
			<input type='text' name='salesman' id='salesman' value="<?php echo $_smarty_tpl->tpl_vars['row']->value['salesman'];?>
">
		</div>
	</div>
	<div class='uk-form-row'>
		<label class='uk-form-label' for='aom' >合同金额</label>
		<div class='uk-form-controls'>
			<input type='text' name='aom' id='aom' value="<?php echo $_smarty_tpl->tpl_vars['row']->value['aom'];?>
">
		</div>
	</div>
	<div class='uk-form-row'>
		<label class='uk-form-label' for='mdate' >我方签字盖章日期</label>
		<div class='uk-form-controls'>
			<input type='text' name='mdate' id='mdate' value="<?php echo $_smarty_tpl->tpl_vars['row']->value['mdate'];?>
">
		</div>
	</div>
	<div class='uk-form-row'>
		<label class='uk-form-label' for='ydate' >客户签字盖章日期</label>
		<div class='uk-form-controls'>
			<input type='text' name='ydate' id='ydate' value="<?php echo $_smarty_tpl->tpl_vars['row']->value['ydate'];?>
">
		</div>
	</div>
	<div class='uk-form-row'>
		<label class='uk-form-label' for='cdate' >合同签订日期</label>
		<div class='uk-form-controls'>
			<input type='text' name='cdate' id='cdate' value="<?php echo $_smarty_tpl->tpl_vars['row']->value['cdate'];?>
">
		</div>
	</div>
	<div class='uk-form-row'>
		<label class='uk-form-label' for='paytype' >付款方式</label>
		<div class='uk-form-controls'>
			<input type='text' name='paytype' id='paytype' value="<?php echo $_smarty_tpl->tpl_vars['row']->value['paytype'];?>
">
		</div>
	</div>
	<div class='uk-form-row'>
		<label class='uk-form-label' for='cnum' >合同编号</label>
		<div class='uk-form-controls'>
			<input type='text' name='cnum' id='cnum' value="<?php echo $_smarty_tpl->tpl_vars['row']->value['cnum'];?>
">
		</div>
	</div>
	<div class='uk-form-row'>
		<label class='uk-form-label' for='prjman' >项目负责人</label>
		<div class='uk-form-controls'>
			<input type='text' name='prjman' id='prjman' value="<?php echo $_smarty_tpl->tpl_vars['row']->value['prjman'];?>
">
		</div>
	</div>
	<div class='uk-form-row'>
		<label class='uk-form-label' for='startom' >方案售价</label>
		<div class='uk-form-controls'>
			<input type='text' name='startom' id='startom' value="<?php echo $_smarty_tpl->tpl_vars['row']->value['startom'];?>
">
		</div>
	</div>
	<div class='uk-form-row'>
		<label class='uk-form-label' for='overom' >最终售价</label>
		<div class='uk-form-controls'>
			<input type='text' name='overom' id='overom' value="<?php echo $_smarty_tpl->tpl_vars['row']->value['overom'];?>
">
		</div>
	</div>
	<div class='uk-form-row'>
		<label class='uk-form-label' for='tman' >业务主要沟通人</label>
		<div class='uk-form-controls'>
			<input type='text' name='tman' id='tman' value="<?php echo $_smarty_tpl->tpl_vars['row']->value['tman'];?>
">
		</div>
	</div>
	<div class='uk-form-row'>
		<label class='uk-form-label' for='otman' >辅助人员</label>
		<div class='uk-form-controls'>
			<input type='text' name='otman' id='otman' value="<?php echo $_smarty_tpl->tpl_vars['row']->value['otman'];?>
">
		</div>
	</div>
	<div class='uk-form-row'>
		<label class='uk-form-label' for='htstatus' >是否存为<abbr title='无法修改'>最终</abbr></label>
		<div class='uk-form-controls'>
			<input type='radio' name='htstatus' id='htstatus' checked value=0>否
			<input type='radio' name='htstatus' id='htstatus' value=1>是
		</div>
	</div>
	<input class='uk-button' type='submit' name='create_ht' value='提交'>&nbsp;
	<input class='uk-button' type="button" name="Submit" onclick="javascript:history.back(-1);" value="返回">
</form>
</div>
</div>
</body>
<?php }} ?>
