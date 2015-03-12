<?php /* Smarty version Smarty-3.0.7, created on 2015-03-12 09:44:14
         compiled from "Home/T/default/CreateHt.html" */ ?>
<?php /*%%SmartyHeaderCode:6243357675500ef6ec73063-38719630%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6de83be76169433df85306544d00655e8d7fb981' => 
    array (
      0 => 'Home/T/default/CreateHt.html',
      1 => 1425632202,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6243357675500ef6ec73063-38719630',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<body>
	<div class='uk-grid'>
		<div class='uk-width-7-10 uk-container-center'>
			<form class='uk-form uk-form-horizontal' action='<?php echo $_smarty_tpl->getVariable('url')->value;?>
' method='post'>
	<legend>合同</legend>
	<div class='uk-form-row'>
		<label class='uk-form-label' for='date' >建表日期</label>
		<div class='uk-form-controls'>
			<input type='text' name='date' id='date' value="<?php echo $_smarty_tpl->getVariable('row')->value['date'];?>
">
		</div>
	</div>
	<div class='uk-form-row'>
		<label class='uk-form-label' for='author' >填表人</label>
		<div class='uk-form-controls'>
			<input type='text' name='author' id='author' value="<?php echo $_smarty_tpl->getVariable('row')->value['author'];?>
">
		</div>
	</div>
	<div class='uk-form-row'>
		<label class='uk-form-label' for='customer_a' >客户单位</label>
		<div class='uk-form-controls'>
			<input type='text' name='customer_a' id='customer_a' value="<?php echo $_smarty_tpl->getVariable('row')->value['customer_a'];?>
">
		</div>
	</div>
	<div class='uk-form-row'>
		<label class='uk-form-label' for='customer_b' >客户姓名</label>
		<div class='uk-form-controls'>
			<input type='text' name='customer_b' id='customer_b' value="<?php echo $_smarty_tpl->getVariable('row')->value['customer_b'];?>
">
		</div>
	</div>
	<div class='uk-form-row'>
		<label class='uk-form-label' for='salesman' >业务负责人</label>
		<div class='uk-form-controls'>
			<input type='text' name='salesman' id='salesman' value="<?php echo $_smarty_tpl->getVariable('row')->value['salesman'];?>
">
		</div>
	</div>
	<div class='uk-form-row'>
		<label class='uk-form-label' for='aom' >合同金额</label>
		<div class='uk-form-controls'>
			<input type='text' name='aom' id='aom' value="<?php echo $_smarty_tpl->getVariable('row')->value['aom'];?>
">
		</div>
	</div>
	<div class='uk-form-row'>
		<label class='uk-form-label' for='mdate' >我方签字盖章日期</label>
		<div class='uk-form-controls'>
			<input type='text' name='mdate' id='mdate' value="<?php echo $_smarty_tpl->getVariable('row')->value['mdate'];?>
">
		</div>
	</div>
	<div class='uk-form-row'>
		<label class='uk-form-label' for='ydate' >客户签字盖章日期</label>
		<div class='uk-form-controls'>
			<input type='text' name='ydate' id='ydate' value="<?php echo $_smarty_tpl->getVariable('row')->value['ydate'];?>
">
		</div>
	</div>
	<div class='uk-form-row'>
		<label class='uk-form-label' for='cdate' >合同签订日期</label>
		<div class='uk-form-controls'>
			<input type='text' name='cdate' id='cdate' value="<?php echo $_smarty_tpl->getVariable('row')->value['cdate'];?>
">
		</div>
	</div>
	<div class='uk-form-row'>
		<label class='uk-form-label' for='paytype' >付款方式</label>
		<div class='uk-form-controls'>
			<input type='text' name='paytype' id='paytype' value="<?php echo $_smarty_tpl->getVariable('row')->value['paytype'];?>
">
		</div>
	</div>
	<div class='uk-form-row'>
		<label class='uk-form-label' for='cnum' >合同编号</label>
		<div class='uk-form-controls'>
			<input type='text' name='cnum' id='cnum' value="<?php echo $_smarty_tpl->getVariable('row')->value['cnum'];?>
">
		</div>
	</div>
	<div class='uk-form-row'>
		<label class='uk-form-label' for='prjman' >项目负责人</label>
		<div class='uk-form-controls'>
			<input type='text' name='prjman' id='prjman' value="<?php echo $_smarty_tpl->getVariable('row')->value['prjman'];?>
">
		</div>
	</div>
	<div class='uk-form-row'>
		<label class='uk-form-label' for='startom' >方案售价</label>
		<div class='uk-form-controls'>
			<input type='text' name='startom' id='startom' value="<?php echo $_smarty_tpl->getVariable('row')->value['startom'];?>
">
		</div>
	</div>
	<div class='uk-form-row'>
		<label class='uk-form-label' for='overom' >最终售价</label>
		<div class='uk-form-controls'>
			<input type='text' name='overom' id='overom' value="<?php echo $_smarty_tpl->getVariable('row')->value['overom'];?>
">
		</div>
	</div>
	<div class='uk-form-row'>
		<label class='uk-form-label' for='tman' >业务主要沟通人</label>
		<div class='uk-form-controls'>
			<input type='text' name='tman' id='tman' value="<?php echo $_smarty_tpl->getVariable('row')->value['tman'];?>
">
		</div>
	</div>
	<div class='uk-form-row'>
		<label class='uk-form-label' for='otman' >辅助人员</label>
		<div class='uk-form-controls'>
			<input type='text' name='otman' id='otman' value="<?php echo $_smarty_tpl->getVariable('row')->value['otman'];?>
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
	是否存为<abbr title="无法修改">最终</abbr>？<br>
	<input type="radio" id='no' name="htstatus" checked value=0 >否
	<input type="radio" id='yes' name="htstatus" value=1 >是<br>
	<input type='submit' name='create_ht' value='提交'><br>
	<input type="button" name="Submit" onclick="javascript:history.back(-1);" value="返回">
</form>
</div>
</div>
</body>
