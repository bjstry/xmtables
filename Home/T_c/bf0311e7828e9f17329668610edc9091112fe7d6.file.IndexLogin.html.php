<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-04-03 09:20:32
         compiled from "Home/T/default/IndexLogin.html" */ ?>
<?php /*%%SmartyHeaderCode:1379994086551d71f45693c3-79867490%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bf0311e7828e9f17329668610edc9091112fe7d6' => 
    array (
      0 => 'Home/T/default/IndexLogin.html',
      1 => 1428067219,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1379994086551d71f45693c3-79867490',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_551d71f45b8558_57953000',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_551d71f45b8558_57953000')) {function content_551d71f45b8558_57953000($_smarty_tpl) {?><body>
<div class='uk-vertical-align uk-text-center uk-height-1-1'>
  <div class='uk-vertical-align-middle' style='width:250px;'> 
    <h2 style='margin-top:20px;'>Gentai-Tables</h2>
	<form class='uk-panel uk-panel-box uk-form' action='<?php echo @constant('R');?>
/Index/LoginCheck' method='post'>
	  <div class='uk-form-row'>
		<input id='nname' class='uk-width-1-1 uk-form-large' type='text' name='uname' placeholder='请输入帐号'>
	  </div>
	  <div class='uk-form-row'>
		<input class='uk-width-1-1 uk-form-large ' type='password' name='upass' placeholder='请输入密码'>
	  </div>
	  <div class='uk-form-row'>
	  
	    <input class='uk-width-1-1 uk-button uk-button-primary uk-button-large' type='submit' name='login' value='登录'>
	  </div>
	</form>
  </div>
</div>
</body>
<?php }} ?>
