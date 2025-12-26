<?php
   //header('content-type:text/html;charset=utf-8');
$username=$email="";
if($_GET){
   $username=trim($_GET['username']);
   $psw=trim($_GET['psw']);
   $repsw=trim($_GET['repsw']);
   $email=trim($_GET['email']);
   $yzm=trim(strtolower($_GET['yzm']));
   $accept=$_GET['accept'];
   }
   //开启session会话,获取验证码图片中的字符串并转为小写
   session_start();
   $h_yzm=strtolower($_SESSION['vCode']);

   // echo $username,"<br>",$psw,"<br>",$repsw,"<br>",$email,"<br>",$yzm,"<br>",$h_yzm,"<br>",$accept;

   function checkreg($username,$psw,$repsw,$email,$yzm,$accept){
            global $h_yzm;

      //设置各表单验证判定条件
       // $uchar=$username{0};
            $uchar = substr($username, 0, 1);
       //echo $uchar;
       //获取用户名及邮箱的首字母
       $ascii_uchar=ord($uchar);
       $ascii_email=ord($email);
          //分别设置用户名首字母是否是大小写字母、用户名的长度是否是位条件
       $yz_username_ascii_char=(($ascii_uchar>=65&&$ascii_uchar<=90)||($ascii_uchar>=97&&$ascii_uchar<=122));
       $yz_username_len=(strlen($username)>4&&strlen($username)<16);
      //分别设置邮箱首字母是否是大小写，是否包含@，是否是6-18位条件
       $yz_email_ascii_char=(($ascii_email>=65&&$ascii_email<=90)||($ascii_email>=97&&$ascii_email<=122));
           $yz_email=strpos($email, '@');
           $yz_email_len=(strlen($email)>5&&strlen($email)<18);
           //设置密码长度是否是6-16位长度条件
           $yz_psw_len=(strlen($psw)>=6&&strlen($psw)<=16);
       $err="";
           //验证用户名首字母、验证用户名长度
       if(!$yz_username_ascii_char){
            $err.="<p>用户名首字母不是以字母开头</p>";
       }
       if(!$yz_username_len){
            $err.="<p>用户名的长度不符合要求</p>"; 
       }
           //验证密码是否一致、验证密码长度
       if(!($psw==$repsw)){
            $err.="两次输入的密码不一样";
       }
       if(!$yz_psw_len){
            $err.="<p>密码的长度不符合要求</p>"; 
       }
          // 验证邮箱是否包含@、邮箱长度
       if($yz_email==false){
           $err.="<p>非法邮箱</p>";
       }
       if(!$yz_email_len){
            $err.="<p>邮箱的长度不符合要求</p>"; 
       }
           // 验证验证码是否正确
       if(!($yzm==$h_yzm)){
           $err.="<p>验证码错误</p>";           
       }
           //验证是否勾选协议
       if(!($accept=='on')){
           $err.="<p>请勾选服务条款</p>";
       }
       return $err;
   }
?>