<?php
	session_start();	//启动Session

	//清除所有Session变量
   	session_unset();
   	//删除包含Session ID的Cookie
   	if (isset($_COOKIE[session_name()])) {
   		setCookie(session_name(), '', time()-1, '/');
   	}
	//销毁Session
   	session_destroy();
    
  	header("location: loginRD/login.php");   //注销后跳转至login.php页面

