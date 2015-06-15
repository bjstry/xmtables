<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-06-15 23:56:04
         compiled from "Home/T/default/IndexIndex.html" */ ?>
<?php /*%%SmartyHeaderCode:376048382557eed014cb2f5-22793565%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '554cfb1d67a8f8896d02b2a9dc657c6e0d01f9be' => 
    array (
      0 => 'Home/T/default/IndexIndex.html',
      1 => 1434383751,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '376048382557eed014cb2f5-22793565',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_557eed01548c76_95740028',
  'variables' => 
  array (
    'search' => 0,
    'user' => 0,
    'job' => 0,
    'change' => 0,
    'logout' => 0,
    'showdrow' => 0,
    'row' => 0,
    'val' => 0,
    'addht' => 0,
    'getpage' => 0,
    'drow' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_557eed01548c76_95740028')) {function content_557eed01548c76_95740028($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/home/jinsong/Project/web/Speek/Lib/Tpl/plugins/modifier.date_format.php';
?><div class='uk-grid'>
	<div class='uk-width-7-10 uk-container-center uk-margin'>
		<h1>Gentai-tables</h1>
	</div>
	<div class='uk-width-7-10 uk-container-center'>
		<nav class="uk-navbar">
			<div class='uk-navbar-content'>
				<span><?php echo $_smarty_tpl->tpl_vars['search']->value;?>
</span><span>用户 <?php echo $_smarty_tpl->tpl_vars['user']->value;?>
 你好，欢迎使用，你的身份是：<?php echo $_smarty_tpl->tpl_vars['job']->value;?>
</span>&nbsp;&nbsp;&nbsp;<span><?php echo $_smarty_tpl->tpl_vars['change']->value;?>
</span><span><?php echo $_smarty_tpl->tpl_vars['logout']->value;?>
</span>
			</div>
		<div class="uk-navbar-flip">
			<div class="uk-navbar-content">
				<form action='' method='post' class="uk-search" data-uk-search="{source:'my-results.json'}">
					<input class="uk-search-field" type="search" name='keywords' placeholder="输入客户单位或合同编号">
				</form>
			</div>
		</div>
		</nav>
	</div>
	<div class='uk-width-7-10 uk-container-center uk-margin'>
		<ul class="uk-tab" data-uk-tab="{connect:'#tab-content'}">
			<li class='uk-active'><a href='#'>进行中</a></li>
			<?php echo $_smarty_tpl->tpl_vars['showdrow']->value;?>

		</ul>
		<ul id="tab-content" class="uk-switcher uk-margin">
			<li class='uk-active'>
				<table class='uk-table uk-table-hover'>
					<tr><td class='uk-width-4-10'><i class='uk-icon-tag'></i> 项目名称</td><td><i class='uk-icon-folder-open'></i> 合同编号</td><td><i class='uk-icon-calendar'</i> 创建时间</td></tr>
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
</a></td><td><?php echo $_smarty_tpl->tpl_vars['val']->value['cnum'];?>
</td><td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['val']->value['subdate'],'%Y年%m月%d日');?>
</td>
					</tr>
					<?php } ?>
				</table>
				<?php echo $_smarty_tpl->tpl_vars['addht']->value;?>

				<?php echo $_smarty_tpl->tpl_vars['getpage']->value;?>

			</li>
			<li>
				<table class='uk-table uk-table-hover'>
					<tr><td class='uk-width-4-10'><i class='uk-icon-tag'></i> 项目名称</td><td><i class='uk-icon-folder-open'></i> 合同编号</td><td><i class='uk-icon-calendar'</i> 创建时间</td></tr>
					<?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['drow']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value) {
$_smarty_tpl->tpl_vars['val']->_loop = true;
?>
					<tr>
						<td><a href="<?php echo @constant('R');?>
/Index/View/vid/<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['val']->value['customer_a'];
echo $_smarty_tpl->tpl_vars['val']->value['customer_b'];?>
</a></td><td><?php echo $_smarty_tpl->tpl_vars['val']->value['cnum'];?>
</td><td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['val']->value['subdate'],'%Y年%m月%d日');?>
</td>
					</tr>
					<?php } ?>
				</table>
			<li>
		</ul>
    </div>
</div>
<?php }} ?>
