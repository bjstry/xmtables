<?php
function CheckLogin(){
	!is_null(session('user')) && !is_null(session('id')) or die('请先登录!');
}
?>
