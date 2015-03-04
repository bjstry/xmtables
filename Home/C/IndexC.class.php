<?php
class IndexC extends C{
	protected $urow = null;
	function Index(){
		if(!is_null(session('user'))){
			switch (session('id')){
	            case 1:
	                $well = '合同';
	                break;
	            case 2:
	                $well = '下单';
	                break;
	            case 3:
	                $well = '发货';
	                break;
	            case 4:
	                $well = '开票';
	                break;
	            case 5:
	                $well = '收款';
	                break;
	            case 0:
	                $well = '管理员';
	                break;
	            default:
	                $well = "<script>alert('非法用户!');</script>";
	        }   
			$id=session('id');
			$protable = M('Protables');
			if($id==0){
				$val = "`htstatus`=1 and `xdstatus`=1 and `fhstatus`=1 and `kpstatus`=1 and `skstatus`=1 and `showstatus`=1";
			}else{
				$val = "(`htstatus`=0 || `xdstatus`=0 || `fhstatus`=0 || `kpstatus`=0 || `skstatus`=0 || `showstatus`=0) && `showstatus`=1";
			}
			$row=$protable->where($val)->order('id')->select();
			if(session('id')==1){
				 $addht="<a class='uk-button uk-button-primary' href='edit.php?id=0'>添加合同</a>";
			}
	        $logout=" <a href='logout.php'>注销</a>";
			$this->assign('title','Gentai-tables '.$well.'列表');
			$this->assign('url',$_SERVER[SCRIPT_NAME].'/Index/Add');
			$this->assign('job',$well);
			$this->assign('user',session('user'));
			$this->assign('logout',$logout);
			$this->assign('addht',$addht);
			$this->assign('row',$row);
			$this->display();
	    }else{
			echo '请先登录';
	    }   
	}
	function Login(){
		$this->assign('title','Gentai-Tables-登录');
		$this->display();
	}
	function Add(){
		$this->assign('title','Gentai-Tables-添加');
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
