<?php /* Smarty version Smarty-3.0.7, created on 2015-03-02 15:38:24
         compiled from "Home/T/default/IndexLogin.html" */ ?>
<?php /*%%SmartyHeaderCode:115708880654f41370ab3c94-55289508%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7d92e6969ddcb4f82aa5fa1b8545cae2c30d4860' => 
    array (
      0 => 'Home/T/default/IndexLogin.html',
      1 => 1425281883,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '115708880654f41370ab3c94-55289508',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div class='uk-vertical-align uk-text-center uk-height-1-1'>
  <div class='uk-vertical-align-middle' style='width:250px;'> 
    <h2 style='margin-top:20px;'>Gentai-Tables</h2>
	<form class='uk-panel uk-panel-box uk-form' action='LoginCheck' method='post'>
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
