<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-06-05 14:29:28
         compiled from "Home/T/default/CreateSk.html" */ ?>
<?php /*%%SmartyHeaderCode:1028900494557141c8889758-46745120%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7f1a66d700c0d7cd59945ed046ccae1ef78e2953' => 
    array (
      0 => 'Home/T/default/CreateSk.html',
      1 => 1432529325,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1028900494557141c8889758-46745120',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'row' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_557141c88d1656_36281157',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_557141c88d1656_36281157')) {function content_557141c88d1656_36281157($_smarty_tpl) {?><body>
	<div class='uk-grid'>
		<div class='uk-width-7-10 uk-container-center'>
<h2>收款</h2>
<form class='uk-form' action='<?php echo @constant('R');?>
/Index/EditCheck' method='post'>
	付款应到日期:<input type='text' name='gsdate' value="<?php echo $_smarty_tpl->tpl_vars['row']->value['gsdate'];?>
"><br />
	实际付款日期:<input type='text' name='godate' value="<?php echo $_smarty_tpl->tpl_vars['row']->value['godate'];?>
"><br />
	付款金额:<input type='text' name='gom' value="<?php echo $_smarty_tpl->tpl_vars['row']->value['gom'];?>
"><br>
	应收账款:<input type='text' name='shom' value="<?php echo $_smarty_tpl->tpl_vars['row']->value['shom'];?>
"><br>
	是否存为<abbr title="无法修改">最终</abbr>？<br>
    <input type="radio" name="skstatus" checked value=0 >否
	<input type="radio" name="skstatus" value=1 >是<br>
	<input type='submit' name='create_sk' value='提交'>
	<input type="button" name="Submit" onclick="javascript:history.back(-1);" value="返回">
</form>
</div>
</div>
</body>
<?php }} ?>
