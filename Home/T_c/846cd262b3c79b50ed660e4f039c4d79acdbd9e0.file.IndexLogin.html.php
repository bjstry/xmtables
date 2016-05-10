<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-06-05 10:43:22
         compiled from "Home/T/default/IndexLogin.html" */ ?>
<?php /*%%SmartyHeaderCode:183212604555710cca035439-51979115%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '846cd262b3c79b50ed660e4f039c4d79acdbd9e0' => 
    array (
      0 => 'Home/T/default/IndexLogin.html',
      1 => 1432529325,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '183212604555710cca035439-51979115',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55710cca05fe84_60768152',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55710cca05fe84_60768152')) {function content_55710cca05fe84_60768152($_smarty_tpl) {?><body>
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
