<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-06-16 11:27:48
         compiled from "Home/T/default/CreateFh.html" */ ?>
<?php /*%%SmartyHeaderCode:1423773672557f97b4843214-42200521%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '64a1accf65a002331c6342e85d1b0aea911aea82' => 
    array (
      0 => 'Home/T/default/CreateFh.html',
      1 => 1432529325,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1423773672557f97b4843214-42200521',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'row' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_557f97b48f8225_96165312',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_557f97b48f8225_96165312')) {function content_557f97b48f8225_96165312($_smarty_tpl) {?><body>
	<div class='uk-grid'>
		<div class='uk-width-7-10 uk-container-center'>
<h2>发货</h2>
<form class='uk-form' action='<?php echo @constant('R');?>
/Index/EditCheck' method='post'>
	发货日期:<input type='text' name='sdate' value="<?php echo $_smarty_tpl->tpl_vars['row']->value['sdate'];?>
"><br />
	发货方式/单号:<input type='text' name='stype'value="<?php echo $_smarty_tpl->tpl_vars['row']->value['stype'];?>
"><br>
	安装调试人:<input type='text' name='techman' value="<?php echo $_smarty_tpl->tpl_vars['row']->value['techman'];?>
"><br>
	安装调试日期:<input type='text' name='tdate' value="<?php echo $_smarty_tpl->tpl_vars['row']->value['tdate'];?>
"><br>
	验收日期:<input type='text' name='checkdate' value="<?php echo $_smarty_tpl->tpl_vars['row']->value['checkdate'];?>
"><br>
	验收人:<input type='text' name='checkman' value="<?php echo $_smarty_tpl->tpl_vars['row']->value['checkman'];?>
"><br>
	是否存为<abbr title="无法修改">最终</abbr>？<br>
    <input type="radio" name="fhstatus" checked value=0 >否
	<input type="radio" name="fhstatus" value=1 >是<br>
	<input type='submit' name='create_fh' value='提交'><br>
	<input type="button" name="Submit" onclick="javascript:history.back(-1);" value="返回">
</form>
</div>
</div>
</body>
<?php }} ?>
