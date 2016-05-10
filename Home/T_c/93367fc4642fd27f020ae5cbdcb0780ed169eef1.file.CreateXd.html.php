<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-06-08 13:07:56
         compiled from "Home/T/default/CreateXd.html" */ ?>
<?php /*%%SmartyHeaderCode:6955417175575232c2765e0-64576709%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '93367fc4642fd27f020ae5cbdcb0780ed169eef1' => 
    array (
      0 => 'Home/T/default/CreateXd.html',
      1 => 1432529325,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6955417175575232c2765e0-64576709',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'row' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5575232c32fe03_83092647',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5575232c32fe03_83092647')) {function content_5575232c32fe03_83092647($_smarty_tpl) {?><body>
	<div class='uk-grid'>
		<div class='uk-width-7-10 uk-container-center'>
<h2>设备规格</h2>
<form class='uk-form' action='<?php echo @constant('R');?>
/Index/EditCheck' method='post'>
	下单日期:<input type='text' name='odate' value="<?php echo $_smarty_tpl->tpl_vars['row']->value['odate'];?>
"><br />
	下单编号:<input type='text' name='onum' value="<?php echo $_smarty_tpl->tpl_vars['row']->value['onum'];?>
"><br />
	cpu:<input type='text' name='cpu' value="<?php echo $_smarty_tpl->tpl_vars['row']->value['cpu'];?>
"><br />
	内存:<input type='text' name='memery'value="<?php echo $_smarty_tpl->tpl_vars['row']->value['memery'];?>
"><br>
	硬盘:<input type='text' name='harddisk' value="<?php echo $_smarty_tpl->tpl_vars['row']->value['harddisk'];?>
"><br>
	主板:<input type='text' name='board' value="<?php echo $_smarty_tpl->tpl_vars['row']->value['board'];?>
"><br>
	其他:<input type='text' name='other' value="<?php echo $_smarty_tpl->tpl_vars['row']->value['other'];?>
"><br>
	是否存为<abbr title="无法修改">最终</abbr>？<br>
    <input type="radio" name="xdstatus" checked value=0 >否
	<input type="radio" name="xdstatus" value=1 >是<br>
	<input type='submit' name='create_xd' value='提交'><br>
	<input type="button" name="Submit" onclick="javascript:history.back(-1);" value="返回">
</form>
</div>
</div>
</body>
<?php }} ?>
