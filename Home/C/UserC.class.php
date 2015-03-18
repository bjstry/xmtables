<?php
class UserC extends C{
	function ChangePasswd(){
		CheckLogin();
		$this->display();
	}
	function ChangeCheck(){
		CheckLogin();
		$Users = M('users');
		$uinfo = $Users->where("`uname`='".session('user')."'")->find();
		$pass = md5($_POST['oldpasswd']);
		$newpass = md5($_POST['newpasswd']);
		if($pass==$uinfo['upass']){
			$Users->where("`uname`='".session('user')."'")->update("`upass`='$newpass'");
			$this->url('修改成功！','/index/index');
		}else{
			$this->url('密码不正确!');
		}
	}
}
?>
