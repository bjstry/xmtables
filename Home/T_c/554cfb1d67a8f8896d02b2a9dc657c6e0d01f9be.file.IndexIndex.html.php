<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-03-18 11:59:22
         compiled from "Home/T/default/IndexIndex.html" */ ?>
<?php /*%%SmartyHeaderCode:18235215515508f58237e5f4-26688960%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '554cfb1d67a8f8896d02b2a9dc657c6e0d01f9be' => 
    array (
      0 => 'Home/T/default/IndexIndex.html',
      1 => 1426650821,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18235215515508f58237e5f4-26688960',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5508f5823e7216_98374392',
  'variables' => 
  array (
    'search' => 0,
    'user' => 0,
    'job' => 0,
    'change' => 0,
    'logout' => 0,
    'row' => 0,
    'val' => 0,
    'addht' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5508f5823e7216_98374392')) {function content_5508f5823e7216_98374392($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/home/jinsong/Project/web/lib/Speek/Lib/Tpl/plugins/modifier.date_format.php';
?><div class='uk-grid'>
	<div class='uk-width-7-10 uk-container-center'>
		<h2>GenTai-tables</h2>
		<nav class="uk-navbar">
		<div class="uk-navbar-flip">
			<div class="uk-navbar-content">
				<span><?php echo $_smarty_tpl->tpl_vars['search']->value;?>
</span><span>用户 <?php echo $_smarty_tpl->tpl_vars['user']->value;?>
 你好，欢迎使用，你的身份是：<?php echo $_smarty_tpl->tpl_vars['job']->value;?>
</span>&nbsp;&nbsp;&nbsp;<span><?php echo $_smarty_tpl->tpl_vars['change']->value;?>
</span><span><?php echo $_smarty_tpl->tpl_vars['logout']->value;?>
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
			<?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['row']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value) {
$_smarty_tpl->tpl_vars['val']->_loop = true;
?>
			<tr>
				<td><a href="<?php echo @constant('R');?>
/Index/View/vid/<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['val']->value['customer_a'];
echo $_smarty_tpl->tpl_vars['val']->value['customer_b'];?>
</a></td><td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['val']->value['subdate'],'%Y年%m月%d日-%R:%M');?>
</td>
			</tr>
			<?php } ?>
		</table>
		<?php echo $_smarty_tpl->tpl_vars['addht']->value;?>

	</div>
</div>
<?php }} ?>
