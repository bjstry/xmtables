<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-06-12 10:43:37
         compiled from "Home/T/default/CreateKp.html" */ ?>
<?php /*%%SmartyHeaderCode:1507560312557a4759a0fe27-52291108%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '32e3b12bbd645b03710911415b9493ff0ca77392' => 
    array (
      0 => 'Home/T/default/CreateKp.html',
      1 => 1432529325,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1507560312557a4759a0fe27-52291108',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'row' => 0,
    'obj' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_557a4759a7de64_96631634',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_557a4759a7de64_96631634')) {function content_557a4759a7de64_96631634($_smarty_tpl) {?><body>
	<div class='uk-grid'>
		<div class='uk-widht-7-10 uk-container-center'>
<h2>开票</h2>
<form class='uk-form' action='<?php echo @constant('R');?>
/Index/EditCheck' method='post'>
	开票日期:<input type='text' name='kdate' value="<?php echo $_smarty_tpl->tpl_vars['row']->value['kdate'];?>
"><br />
	开票金额:<input type='text' name='kom'value="<?php echo $_smarty_tpl->tpl_vars['row']->value['kom'];?>
"><br>
	发票寄送日期:<input type='text' name='fsdate'value="<?php echo $_smarty_tpl->tpl_vars['row']->value['fsdate'];?>
"><br>
	发票寄送方式:<input type='text' name='fstype'value="<?php echo $_smarty_tpl->tpl_vars['row']->value['fstype'];?>
"><br>
	<!--增值税额:<input type='text' name='vtax' value="<?php echo $_smarty_tpl->tpl_vars['obj']->value['vtax'];?>
"><br>
	其他税额:<input type='text' name='othertax' value="<?php echo $_smarty_tpl->tpl_vars['obj']->value['othertax'];?>
"><br>
	售前成本:<input type='text' name='salescost' value="<?php echo $_smarty_tpl->tpl_vars['obj']->value['salescost'];?>
"><br>
	配件成本:<input type='text' name='accost' value="<?php echo $_smarty_tpl->tpl_vars['obj']->value['accost'];?>
"><br>
	送货及安装成本:<input type='text' name='sentcost' value="<?php echo $_smarty_tpl->tpl_vars['obj']->value['sentcost'];?>
"><br>
	相关人力成本:<input type='text' name='mancost' value="<?php echo $_smarty_tpl->tpl_vars['obj']->value['mancost'];?>
"><br>
	总成本:<input type='text' name='cost' value="<?php echo $_smarty_tpl->tpl_vars['obj']->value['cost'];?>
"><br>-->
	是否存为<abbr title="无法修改">最终</abbr>？<br>
    <input type="radio" name="kpstatus" checked value=0 >否
	<input type="radio" name="kpstatus" value=1 >是<br>
	<input type='submit' name='create_kp' value='提交'><br>
	<input type="button" name="Submit" onclick="javascript:history.back(-1);" value="返回">
</form>
</div>
</div>
</body>
<?php }} ?>
