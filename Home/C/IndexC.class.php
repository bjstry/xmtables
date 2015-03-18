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
			if(isset($_POST['keywords'])){
				session('keywords','null');
				session('keywords',$_POST['keywords']);
				$this->url('搜索成功');

			}
			if(isset($_GET['search']) && $_GET['search']=='clean'){
				session('keywords','null');
				$this->url('清楚搜索');
			}
			if(!is_null(session('keywords'))){
				$val.=" and customer_a LIKE '%".$_SESSION['keywords']."%' or onum LIKE '".$_SESSION['keywords']."'";
				$search = "<a href='/xmtables/ok.php/index/index/search/clean'>清除搜索结果</a>&nbsp;&nbsp;&nbsp;";
				$this->assign('search',$search);
			}
			$row=$protable->where($val)->order('id')->select();
			if(session('id')==1){
				$addht="<a class='uk-button uk-button-primary' href=".$_SERVER['SCRIPT_NAME']."/Index/Edit/id/0>添加合同</a>";
				$this->assign('addht',$addht);
			}
			$logout=" <a href='".R."/Index/Logout.html'>注销</a>";
			$change=" <a href='/xmtables/user/changepasswd.html'>修改密码</a>";
			$this->assign('title','Gentai-tables '.$well.'列表');
			$this->assign('job',$well);
			$this->assign('user',session('user'));
			$this->assign('logout',$logout);
			$this->assign('change',$change);
			$this->assign('row',$row);
			$this->display();
		}else{
			$this->url('请先登录','/index/login.html');
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
			if(isset($_GET['id'])){
				echo 'seesion git set null';
				session('gid','null');
			}
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
			if(isset($_GET['type'])){
				if($_GET['type']=='add'){
					session('kp',1);
				}else if($_GET['type']=='upd'){
					session('kp_key',$_GET['e']);
					session('kp','null');
					$nrow = $protablekp->where("id=$_GET[e]")->find();
					$this->assign('row',$nrow);
				}
				print_r($_SESSION);
				$this->display('CreateKp');
			}else{
				$kprow = $protablekp->where("cid='$_GET[id]'")->select();
				$this->assign('srow',$kprow);
				$this->display('CreateKpList');
			}
			break;
		case 5:
			$protablesk = M('Protablesk');
			if(isset($_GET['type'])){
				if($_GET['type']=='add'){
					session('sk',1);
				}else if($_GET['type']=='upd'){
					session('sk_key',$_GET['e']);
					session('sk','null');
					$nrow = $protablesk->where("id=$_GET[e]")->find();
					print_r($nrow);
					$this->assign('row',$nrow);
				}
				print_r($_SESSION);
				$this->display('CreateSk');
			}else{
				$skrow = $protablesk->where("cid='$_GET[id]'")->select();
				$this->assign('srow',$skrow);
				$this->display('CreateSkList');
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
	function EditCheck(){
		if(is_null(session('user'))){
			die('非法访问!');
		}else{
			$protables = M('Protables');
			$protablekp = M('Protablekp');
			$protablesk = M('Protablesk');
			if(isset($_POST['create_ht']) and session('id')==1){
				if(!is_null(session('gid'))){
					$sql = "`date`='$_POST[date]',`author`='$_POST[author]',`customer_a`='$_POST[customer_a]',`customer_b`='$_POST[customer_b]',`salesman`='$_POST[salesman]',`aom`='$_POST[aom]',`mdate`='$_POST[mdate]',`ydate`='$_POST[ydate]',`cdate`='$_POST[cdate]',`paytype`='$_POST[paytype]',`cnum`='$_POST[cnum]',`prjman`='$_POST[prjman]',`startom`='$_POST[startom]',`overom`='$_POST[overom]',`tman`='$_POST[tman]',`otman`='$_POST[otman]',`htstatus`=$_POST[htstatus]";
					$resut = $protables->where("`id`='$_SESSION[gid]'")->update($sql);
					if($resut){
						session('gid','null');
						$this->url('提交成功！','/Index/Index.html');
					}else{
						echo 'SQL-'.$sql.'<br>';
						die('操作错误:'.mysql_error());
					}
				}else{
					$qsql = "`id`,`date`,`author`,`customer_a`,`customer_b`,`salesman`,`aom`,`mdate`,`ydate`,`cdate`,`paytype`,`cnum`,`prjman`,`startom`,`overom`,`tman`,`otman`,`subdate`,`htstatus`,`showstatus`";
					$sql =	"'','$_POST[date]','$_POST[author]','$_POST[customer_a]','$_POST[customer_b]','$_POST[salesman]','$_POST[aom]','$_POST[mdate]','$_POST[ydate]','$_POST[cdate]','$_POST[paytype]','$_POST[cnum]','$_POST[prjman]',$_POST[startom],$_POST[overom],'$_POST[tman]','$_POST[otman]',".mktime().",$_POST[htstatus],1";	
					$resut = $protables->insert($qsql,$sql);
					if($resut){
						echo '添加成功';
						//$this->url('添加成功!','/Index/Index.html');
					}else{
						echo 'SQL-'.$sql.'<br>';
						die('操作错误:'.mysql_error());
					}
				}
			}else if(isset($_POST['create_xd']) and session('id')==2){
				$sql = "`odate`='$_POST[odate]',`onum`=$_POST[onum],`cpu`='$_POST[cpu]',`memery`='$_POST[memery]',`harddisk`='$_POST[harddisk]',`board`='$_POST[board]',`other`='$_POST[other]',`xdstatus`=$_POST[xdstatus]";
				$resut = $protables->where("`id`=$_SESSION[gid]")->update($sql);	
				if($resut){
					session('gid','null');
					$this->url('提交成功!','/Index/Index.html');
				}else{
					echo 'SQL-'.$sql.'<br>';
					die('操作错误:'.mysql_error());
				}
			}else if(isset($_POST['create_fh']) and session('id')==3){
				$sql = "`sdate`='$_POST[sdate]',`stype`='$_POST[stype]',`techman`='$_POST[techman]',`tdate`='$_POST[tdate]',`checkdate`='$_POST[checkdate]',`checkman`='$_POST[checkman]',`fhstatus`=$_POST[fhstatus]";	
				$resut = $protables->where("`id`=$_SESSION[gid]")->update($sql);	
				if($resut){
					session('gid','null');
					$this->url('提交成功!','/Index/Index.html');
				}else{
					echo 'SQL-'.$sql.'<br>';
					die('操作错误:'.mysql_error());
				}
			}else if(isset($_POST['create_kp']) and session('id')==4){
				if(!is_null(session('kp'))){
					print_r($_SESSION);
					$qsql = "`id`,`cid`,`kdate`,`kom`,`fsdate`,`fstype`";
					$sql = "'',$_SESSION[gid],'$_POST[kdate]',$_POST[kom],'$_POST[fsdate]','$_POST[fstype]'";
					$resut = $protablekp->insert($qsql,$sql);
					if($resut){
						session('kp','null');
						$this->url('添加成功!','/index/index.html');
					}else{
						echo 'SQL-'.$sql.'<br>';
						die('操作错误:'.mysql_error());
					}
				}else{
					$sql = "`kdate`='$_POST[kdate]',`kom`=$_POST[kom],`fsdate`='$_POST[fsdate]',`fstype`='$_POST[fstype]'";
					$msql = "`kpstatus`=$_POST[kpstatus]";
					$resut = $protablekp->where("`id`=$_SESSION[kp_key]")->update($sql);	
					if($resut){
						$mresut = $protables->where("`id`=$_SESSION[gid]")->update($msql);
						session('kp_key','null');
						$this->url('提交成功!','/Index/Index.html');
					}else{
						echo 'SQL-'.$sql.'<br>';
						die('操作错误:'.mysql_error());
					}

				}	
			}else if(isset($_POST['create_sk']) and session('id')==5){
				if(!is_null(session('sk'))){
					$qsql = "`id`,`cid`,`gsdate`,`godate`,`gom`,`shom`";
					$sql = "'',$_SESSION[gid],'$_POST[gsdate]',$_POST[godate],'$_POST[gom]','$_POST[shom]'";
					$resut = $protablesk->insert($qsql,$sql);
					if($resut){
						session('kp','null');
						$this->url('添加成功!','/index/index.html');
					}else{
						echo 'SQL-'.$sql.'<br>';
						die('操作错误:'.mysql_error());
					}
				}else{
					$sql = "`gsdate`='$_POST[gsdate]',`godate`=$_POST[godate],`gom`='$_POST[gom]',`shom`='$_POST[shom]'";
					$msql = "`skstatus`=$_POST[skstatus]";
					$resut = $protablesk->where("`id`=$_SESSION[sk_key]")->update($sql);	
					if($resut){
						$mresut = $protables->where("`id`='$_SESSION[gid]'")->update($msql);
						print_r($_SESSION);
						session('sk_key','null');
						$this->url('提交成功!','/Index/Index.html');
					}else{
						echo 'SQL-'.$sql.'<br>';
						die('操作错误:'.mysql_error());
					}

				}	
			}
		}
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
		echo "<script>alert('注销成功！');location.href='".R."/index/login.html';</script>";
	}
	function Abc(){
		print_r($_POST);
	}
}
