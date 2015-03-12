<?php /* Smarty version Smarty-3.0.7, created on 2015-03-12 10:02:58
         compiled from "Home/T/default/CreateFh.html" */ ?>
<?php /*%%SmartyHeaderCode:7633592135500f3d2ae5914-51952696%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '62f7f393797f56f4ad3b9155e4490f6d39a0fd22' => 
    array (
      0 => 'Home/T/default/CreateFh.html',
      1 => 1426124969,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7633592135500f3d2ae5914-51952696',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<body>
	<div class='uk-grid'>
		<div class='uk-width-7-10 uk-container-center'>
<h2>发货</h2>
<form class='uk-form' action='create.php' method='post'>
	发货日期:<input type='text' name='sdate' value="<?php echo $_smarty_tpl->getVariable('row')->value['sdate'];?>
"><br />
	发货方式/单号:<input type='text' name='stype'value="<?php echo $_smarty_tpl->getVariable('row')->value['stype'];?>
"><br>
	安装调试人:<input type='text' name='techman' value="<?php echo $_smarty_tpl->getVariable('row')->value['techman'];?>
"><br>
	安装调试日期:<input type='text' name='tdate' value="<?php echo $_smarty_tpl->getVariable('row')->value['tdate'];?>
"><br>
	验收日期:<input type='text' name='checkdate' value="<?php echo $_smarty_tpl->getVariable('row')->value['checkdate'];?>
"><br>
	验收人:<input type='text' name='checkman' value="<?php echo $_smarty_tpl->getVariable('row')->value['checkman'];?>
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
