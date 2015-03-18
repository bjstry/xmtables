<?php /* Smarty version Smarty-3.0.7, created on 2015-03-18 10:59:40
         compiled from "Home/T/default/IndexIndex.html" */ ?>
<?php /*%%SmartyHeaderCode:14071089815508ea1c50ca11-95133339%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6cf7083ebc8827b36d56a7d75c28296f8f179457' => 
    array (
      0 => 'Home/T/default/IndexIndex.html',
      1 => 1426647578,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14071089815508ea1c50ca11-95133339',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div class='uk-grid'>
	<div class='uk-width-7-10 uk-container-center'>
		<h2>GenTai-tables</h2>
		<nav class="uk-navbar">
		<div class="uk-navbar-flip">
			<div class="uk-navbar-content">
				<span><?php echo $_smarty_tpl->getVariable('search')->value;?>
</span><span>用户 <?php echo $_smarty_tpl->getVariable('user')->value;?>
 你好，欢迎使用，你的身份是：<?php echo $_smarty_tpl->getVariable('job')->value;?>
</span>&nbsp;&nbsp;&nbsp;<span><?php echo $_smarty_tpl->getVariable('change')->value;?>
</span><span><?php echo $_smarty_tpl->getVariable('logout')->value;?>
</span>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<form action='' method='post' class="uk-search" data-uk-search="{source:'my-results.json'}">
					<input class="uk-search-field" type="search" name='keywords' placeholder="输入客户单位或合同编号">
				</form>
			</div>
		</div>
		</nav>
		<table class='uk-table uk-table-hover'>
			<tr><td>项目名称</td><td>创建时间</td></tr>
			<?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('row')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value){
?>
			<tr>
				<td><a href="<?php echo @R;?>
/Index/View/vid/<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['val']->value['customer_a'];?>
<?php echo $_smarty_tpl->tpl_vars['val']->value['customer_b'];?>
</a></td><td><?php echo $_smarty_tpl->tpl_vars['val']->value['subdate'];?>
--
					<?php echo date_format('1426470851','%y-%m-%d');?>

				
				</td>
			</tr>
			<?php }} ?>
		</table>
		<?php echo $_smarty_tpl->getVariable('addht')->value;?>

	</div>
</div>
