<?php
	include_once('./lib/config.php');
	if(!$_POST or !$_SESSION['user']){
		die('非法访问！');
		exit();
	}else{
		if(isset($_POST['create_ht']) and $_SESSION['id']==1){
			if(isset($_SESSION['gid'])){
				$sql = "update `gt_protables` set `date`='$_POST[date]',`author`='$_POST[author]',`customer_a`='$_POST[customer_a]',`customer_b`='$_POST[customer_b]',`salesman`='$_POST[salesman]',`aom`='$_POST[aom]',`mdate`='$_POST[mdate]',`ydate`='$_POST[ydate]',`cdate`='$_POST[cdate]',`paytype`='$_POST[paytype]',`cnum`='$_POST[cnum]',`prjman`='$_POST[prjman]',`startom`='$_POST[startom]',`overom`='$_POST[overom]',`tman`='$_POST[tman]',`otman`='$_POST[otman]',`htstatus`=$_POST[htstatus] where `id`=$_SESSION[gid]";
				$resut = mysql_query($sql);
				if($resut){
					unset($_SESSION['gid']);
					$view->display('url','success','提交成功！');
					//die('提交成功,<a href=\'index.php\'>返回</a>');
				}else{
					echo 'SQL - '.$sql.'<br>';
					die('操作错误: '.mysql_error());
				}
			}else{
				$sql = "insert into `gt_protables` (`id`,`date`,`author`,`customer_a`,`customer_b`,`salesman`,`aom`,`mdate`,`ydate`,`cdate`,`paytype`,`cnum`,`prjman`,`startom`,`overom`,`tman`,`otman`,`subdate`,`htstatus`,`showstatus`) values ('','$_POST[date]','$_POST[author]','$_POST[customer_a]','$_POST[customer_b]','$_POST[salesman]','$_POST[aom]','$_POST[mdate]','$_POST[ydate]','$_POST[cdate]','$_POST[paytype]','$_POST[cnum]','$_POST[prjman]',$_POST[startom],$_POST[overom],'$_POST[tman]','$_POST[otman]',".mktime().",$_POST[htstatus],1)";
				$resut = mysql_query($sql);
				if($resut){
					$view->display('url','success','提交成功！');
					//die('添加成功,<a href=\'index.php\'>返回</a>');
				}else{
					echo 'SQL - '.$sql.'<br>';
					die('操作错误: '.mysql_error());
				}
			}
		}else if(isset($_POST['create_xd']) and $_SESSION['id']==2){
			$sql = "update `gt_protables` set `odate`='$_POST[odate]',`onum`=$_POST[onum],`cpu`='$_POST[cpu]',`memery`='$_POST[memery]',`harddisk`='$_POST[harddisk]',`board`='$_POST[board]',`other`='$_POST[other]',`xdstatus`=$_POST[xdstatus]  where `id`=$_SESSION[gid]";
			$resut = mysql_query($sql);
			if($resut){
				$view->display('url','success','提交成功！');
				//die("提交成功,<a href='index.php'>返回</a>");
			}else {
				die('操作错误： '.mysql_error());
			}
		}else if(isset($_POST['create_fh']) and $_SESSION['id']==3){
			$sql = "update `gt_protables` set `sdate`='$_POST[sdate]',`stype`='$_POST[stype]',`techman`='$_POST[techman]',`tdate`='$_POST[tdate]',`checkdate`='$_POST[checkdate]',`checkman`='$_POST[checkman]',`fhstatus`=$_POST[fhstatus] where `id`=$_SESSION[gid]";
			$resut = mysql_query($sql);
			if($resut){
				$view->display('url','success','提交成功！');
				//die("提交成功,<a href='index.php'>返回</a>");
			}else{
				die('操作错误： '.mysql_error());
			}
		}else if(isset($_POST['create_kp']) and $_SESSION['id']==4){
			if(isset($_SESSION['kp'])){
				//$sql = "insert into `gt_protablekp` (`id`,`cid`,`kdate`,`kom`,`fsdate`,`fstype`,`vtax`,`othertax`,`salescost`,`thingcost`,`sentcost`,`mancost`,`cost`) values ('',$_SESSION[gid],'$_POST[kdate]',$_POST[kom],'$_POST[fsdate]','$_POST[fstype]',$_POST[vtax],$_POST[othertax],$_POST[salescost],$_POST[thingcost],$_POST[sentcost],$_POST[mancost],$_POST[cost])";
				$sql = "insert into `gt_protablekp` (`id`,`cid`,`kdate`,`kom`,`fsdate`,`fstype`) values ('',$_SESSION[gid],'$_POST[kdate]',$_POST[kom],'$_POST[fsdate]','$_POST[fstype]')";
				$resut = mysql_query($sql);
				if($resut){
					unset($_SESSION['kp']);
					$view->display('url','success','添加成功！');
					//die('添加成功,<a href=\'index.php\'>返回</a>');
				}else{
					die('操作错误: '.mysql_error());
				}
			}else{
				//$usql = "update `gt_protablekp` set `kdate`='$_POST[kdate]',`kom`=$_POST[kom],`fsdate`='$_POST[fsdate]',`fstype`='$_POST[fstype]',`vtax`=$_POST[vtax],`othertax`=$_POST[othertax],`salescost`=$_POST[salescost],`thingcost`=$_POST[thingcost],`sentcost`=$_POST[sentcost],`mancost`=$_POST[mancost],`cost`=$_POST[cost],`kpstatus`=$_POST[kpstatus] where `id`=$_SESSION[kp_key]";
				$upsql = "update `gt_protablekp` set `kdate`='$_POST[kdate]',`kom`=$_POST[kom],`fsdate`='$_POST[fsdate]',`fstype`='$_POST[fstype]' where `id`=$_SESSION[kp_key]";
				$sql = "update `gt_protables` set `kpstatus`=$_POST[kpstatus] where `id`=$_SESSION[gid]";
				$resut = mysql_query($upsql);
				if($resut){
					mysql_query($sql);
					unset($_SESSION['kp_key']);
					$view->display('url','success','提交成功！');
				}else{
					die('操作错误： '.mysql_error());
				}
			}
		}else if(isset($_POST['create_sk']) and $_SESSION['id']==5){
			if(isset($_SESSION['sk'])){
				$sql = "insert into `gt_protablesk` (`id`,`cid`,`gsdate`,`godate`,`gom`,`shom`) values ('',$_SESSION[gid],'$_POST[gsdate]',$_POST[godate],'$_POST[gom]','$_POST[shom]')";
				$resut = mysql_query($sql);
				if($resut){
					$view->display('url','success','添加成功！');
					//die("提交成功,<a href='index.php'>返回</a>");
				}else{
					die('操作错误： '.mysql_error());
				}
			}else{
				$upsql = "update `gt_protablesk` set `gsdate`='$_POST[gsdate]',`godate`=$_POST[godate],`gom`='$_POST[gom]',`shom`='$_POST[shom]' where `id`=$_SESSION[sk_key]";
				$sql = "update `gt_protables` set `skstatus`=$_POST[skstatus] where `id`=$_SESSION[gid]";
				$resut = mysql_query($upsql);
				if($resut){
					mysql_query($sql);
					unset($_SESSION['sk_key']);
					$view->display('url','success','提交成功！');
					//die("提交成功,<a href='index.php'>返回</a>");
				}else{
					die('操作错误： '.mysql_error());
				} 
			}
		}else{
			die('非法访问，请<a href=\'index.php\'>返回</a>');
		}
	}
?>
