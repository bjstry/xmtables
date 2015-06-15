<?php
function CheckLogin(){
	!is_null(session('user')) && !is_null(session('id')) or die('请先登录!');
}
function MakeValue($arr,$gid){
	if($gid!=1 && $gid!=0){
		if($gid!=4){
			$arr['aom'] =  "**";
		}
		$arr['mdate'] =  "**";
		$arr['ydate'] =  "**";
		$arr['paytype'] =  "**";
		$arr['prjman'] =  "**";
		$arr['startom'] =  "**";
		$arr['tman'] =  "**";
		$arr['otman'] =  "**";
	}
	return $arr;
}
?>
