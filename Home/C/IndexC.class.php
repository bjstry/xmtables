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
				$addht="<a class='uk-button uk-button-primary' href=".$_SERVER['SCRIPT_NAME']."/Index/Add/id/0>添加合同</a>";
				$this->assign('addht',$addht);
			}
	        $logout=" <a href='Logout.html'>注销</a>";
			$this->assign('title','Gentai-tables '.$well.'列表');
			$this->assign('url',$_SERVER['SCRIPT_NAME'].'/Index/View');
			$this->assign('job',$well);
			$this->assign('user',session('user'));
			$this->assign('logout',$logout);
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
	function Edit(){
		$protables = M('Protables');
		if(!$_GET['id']==0){
			session('gid',$_GET['id']);
			$row = $protables->where("id='$_GET[id]'")->find();
			$this->assign('row',$row);
			$this->assign('url',URL.'/Index/Add');
		}else{
			session('gid','null');
		}
		switch(session('id')){
			case 1:
				$this->display('CreateHt');
				break;
			case 2:
				$this->display('CreateXd');
				break;
			case 3:
				$this->display('CreateFh');
				break;
			case 4:
				$protablekp = M('Protablekp');
				$kprow = $protablekp->where("cid='$_GET[id]'")->select();
				if(is_array($kprow)){
					$this->assign('srow',$kprow);
					$this->display('CreateKpList');
				}else{
					if(isset($_GET['type'])){
						if($_GET['type']=='add'){
							session('kp',1);
							$this->display('CreateKp');
						}else if($_GET['type']=='upd'){
							session('kp_key',$_GET['e']);
							session('kp','null');
							$nrow = $protablekp->where("id=$_GET[e]")->find();
							$this->assign('row',$nrow);
							$this->display('CreateKp');
						}
					}
				}
				break;
			case 5:
				$protablesk = M('Protablesk');
				$skrow = $protablesk->where("cid='$_GET[id]'")->select();
				if(is_array($skrow)){
					$this->assign('srow',$skrow);
					$this->display('CreateSkList');	
				}else{
					if(isset($_GET['type'])){
						if($_GET['type']=='add'){
							session('sk',1);
							$this->display('CreateSk');
						}else if($_GET['type']=='upd'){
							session('sk_key',$_GET['e']);
							session('sk','null');
							$nskrow = $protablesk->where("id='$_GET[e]'")->find();
							$this->assign('row',$nskrow);
							$this->display('CreateSk');
						}
					}
				}
				break;
		}
	}
	function View(){
		if(isset($_GET['vid'])){
			$protables = M('Protables');
			$protablekp = M('Protablekp');
			$protablesk = M('Protablesk');
			$row = $protables->where("id='$_GET[vid]'")->find();
			if(is_null($row)){
				echo '<script>alert(\'非法访问\');</script>';	
			}else{
				$kprow = $protablekp->where("cid='$row[id]'")->select();
				$skrow = $protablesk->where("cid='$row[id]'")->select();
				is_array($kprow) and $this->assign('kprow',$kprow);
				is_array($skrow) and $this->assign('skrow',$skrow);
				$edit = ' ';
				if(session('id')!=0){
					$edit = "<a class='uk-button uk-button-primary' href=".URL."/Index/Edit/id/".$row['id'].">编辑</a>&nbsp;&nbsp;";
				}
				$this->assign('title','Gentai-Tables-添加');
				$this->assign('edit',$edit);
				$this->assign('row',$row);
				$this->display();
			}
		}else{
			echo '参数非法!';
		}
	}
	function Add(){
		$protables = M('Protables');
		if(is_null(session('user'))){
			die('非法访问!');
		}else{
			if(isset($_POST['create_ht']) and session('id')==1){
				if(!is_null(session('gid'))){
					$sql = "`date`='$_POST[date]',`author`='$_POST[author]',`customer_a`='$_POST[customer_a]',`customer_b`='$_POST[customer_b]',`salesman`='$_POST[salesman]',`aom`='$_POST[aom]',`mdate`='$_POST[mdate]',`ydate`='$_POST[ydate]',`cdate`='$_POST[cdate]',`paytype`='$_POST[paytype]',`cnum`='$_POST[cnum]',`prjman`='$_POST[prjman]',`startom`='$_POST[startom]',`overom`='$_POST[overom]',`tman`='$_POST[tman]',`otman`='$_POST[otman]',`htstatus`=$_POST[htstatus]";
					$resut = $protables->where("`id`='$_SESSION[gid]'")->update($sql);
					if($resut){
						session('gid','null');
						$this->url('提交成功！','/Index/Index.html');
					}
				}
			}
		}
		$this->display('CreateHt');
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
	function Logout(){
		session('user','null');
		session('id','null');
		echo "<script>alert('注销成功！');location.href='index';</script>";
	}
}
