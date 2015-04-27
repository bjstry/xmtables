<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-04-02 12:57:33
         compiled from "Home/T/default/IndexIndex.html" */ ?>
<?php /*%%SmartyHeaderCode:811819681551d7201b2d7c2-46315743%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8fdd24a1300818c638437f2d307261a9edc06eb6' => 
    array (
      0 => 'Home/T/default/IndexIndex.html',
      1 => 1427993805,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '811819681551d7201b2d7c2-46315743',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_551d7201d0c311_71703316',
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
<?php if ($_valid && !is_callable('content_551d7201d0c311_71703316')) {function content_551d7201d0c311_71703316($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/home/jinsong/Project/www/Speek/Lib/Tpl/plugins/modifier.date_format.php';
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
			<tr><td><i class='uk-icon-tag'></i> 项目名称</td><td><i class='uk-icon-calendar'</i> 创建时间</td></tr>
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
