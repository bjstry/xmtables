<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-03-18 11:59:31
         compiled from "Home/T/default/IndexLogin.html" */ ?>
<?php /*%%SmartyHeaderCode:15941669965508f823030408-84954733%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3b2015c941f3e9e6d4edc5b90e946c5e5e75b9cc' => 
    array (
      0 => 'Home/T/default/IndexLogin.html',
      1 => 1426644783,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15941669965508f823030408-84954733',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5508f823052290_24656238',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5508f823052290_24656238')) {function content_5508f823052290_24656238($_smarty_tpl) {?><body>
<div class='uk-vertical-align uk-text-center uk-height-1-1'>
  <div class='uk-vertical-align-middle' style='width:250px;'> 
    <h2 style='margin-top:20px;'>Gentai-Tables</h2>
	<form class='uk-panel uk-panel-box uk-form' action='<?php echo @constant('R');?>
/Index/LoginCheck' method='post'>
	  <div class='uk-form-row'>
		<input class='uk-width-1-1 uk-form-large' type='text' name='uname' placeholder='请输入帐号'>
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
