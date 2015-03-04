<?php
class IndexC extends C{
	protected $urow = null;
	function Index(){
		if(empty($this->urow)){
			$this->url('未登录，请返回');
		}else{
			if($session('user') == $this->urow['uname'] and session('id') == $this->urow['gid']){
				echo $_SERVER["SCRIPT_NAME"].'<br>';
				print_r($_SESSION);
			}
		}
	}
	function Login(){
		echo SYS_LOG;
		$this->display();
	}
	function LoginCheck(){
		if(isset($_POST['login'])){
			$user = M('users');
			$row = $user->where("uname='$_POST[uname]'")->find();
			if(empty($row)){
				!is_null(session('user'))?session('user','null'):'';
				$this->url('用户名不存在!');
			}else{
				if($row['upass'] == md5($_POST['upass'])){
					session('user',$row['uname']);
					session('id',$row['gid']);
					$this->urow = $row;
					$this->url('登录成功！','/Index/Index');
				}else{
					!is_null(session('user'))?session('user','null'):'';
					!is_null(session('id'))?session('id','null'):'';
					$this->url('密码错误!');
				}
			}
		}
	}
}
?>
