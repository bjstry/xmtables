<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-07-01 12:48:13
         compiled from "Home/T/default/UserChangepasswd.html" */ ?>
<?php /*%%SmartyHeaderCode:14142119515593710de0e318-36180151%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2df045e9598c0227b801ceff4fd93790e124c439' => 
    array (
      0 => 'Home/T/default/UserChangepasswd.html',
      1 => 1432529325,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14142119515593710de0e318-36180151',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5593710de918d9_69781326',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5593710de918d9_69781326')) {function content_5593710de918d9_69781326($_smarty_tpl) {?><body>
	<div class='uk-grid'>
		<div class='uk-width-4-10 uk-container-center'>
			<form class='uk-form' action='<?php echo @constant('R');?>
/User/ChangeCheck' method='post'>
				<input type='password' name='oldpasswd' placeholder='请输入旧密码'>
				<input type='password' name='newpasswd' placeholder='请输入新密码'>
				<input type='password' name='newpassv' placeholder='重复输入'>
				<input type='submit' class='uk-button uk-button-primary' name='chage' value='提交'>
				<a class='uk-button' onClick="history.back()">返回</a>
			</form>
		</div>
	</div>
</body>
<?php }} ?>
