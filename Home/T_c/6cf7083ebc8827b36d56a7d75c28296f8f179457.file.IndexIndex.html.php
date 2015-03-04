<?php /* Smarty version Smarty-3.0.7, created on 2015-03-04 13:27:39
         compiled from "Home/T/default/IndexIndex.html" */ ?>
<?php /*%%SmartyHeaderCode:73285954954f697cb68c872-17773762%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6cf7083ebc8827b36d56a7d75c28296f8f179457' => 
    array (
      0 => 'Home/T/default/IndexIndex.html',
      1 => 1425446857,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '73285954954f697cb68c872-17773762',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div class='uk-grid'>
  <div class='uk-width-7-10 uk-container-center'>
    <h2>GenTai-tables</h2>
	<span>用户 <?php echo $_smarty_tpl->getVariable('user')->value;?>
 你好，欢迎使用，你的身份是：<?php echo $_smarty_tpl->getVariable('job')->value;?>
</span>&nbsp;&nbsp&nbsp<span><?php echo $_smarty_tpl->getVariable('logout')->value;?>
</span>
	<table class='uk-table uk-table-hover'>
	<?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('row')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value){
?>
	  <tr>
	    <td><a href="index.php?vid=<?php echo $_smarty_tpl->tpl_vars['val']->value[$_smarty_tpl->getVariable('smarty')->value['section']['id']['index']];?>
"><?php echo $_smarty_tpl->tpl_vars['val']->value['customer_a'];?>
<?php echo $_smarty_tpl->tpl_vars['val']->value['customer_b'];?>
</a></td>
	  </tr>
	<?php }} ?>
	</table>
	<?php echo $_smarty_tpl->getVariable('addht')->value;?>

  </div>
</div>
