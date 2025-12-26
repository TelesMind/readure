<?php
 header("content-type:text/html;charset=utf-8");
 session_start();
 $db_sever="localhost";
 $db_user="root";
 $db_pw="";
 $db_name="readure";
 @$conn=mysql_connect($db_sever,$db_user,$db_pw)or die("数据库服务器无法连接");
 mysql_query("set names utf8");
 $db_selected=mysql_select_db($db_name);
 
  $uName = $_POST['uName'];
  $uPassWord = $_POST['uPassword'];
  $vCode = $_POST['vCode'];
  //判断验证码是否输入正确   
  if (strtolower($vCode) == strtolower($_SESSION['vCode'])){
    $sqls="select * from uinfo where username='".$uName."'";
    $res =mysql_query($sqls);
    $res_count=mysql_num_rows($res);
    $data =mysql_fetch_array($res);//获取users表中满足条件的记录
    //判断用户是否存在
    if ($res_count!=0){
      $rentUser = $data;   //获取第一条记录
      //判断密码是否正确（对密码进行MD5加密后进行比较）
      // echo $rentUser['uPassword'];
      if (md5($uPassWord) == $rentUser['password']){    
        $_SESSION['loginUser'] = $rentUser;   //使用会话保存当前登录用户信息
        //如果选择记住密码
        if (!empty($_POST['ckRemember'])) { 
          //设置cookie保存用户名和密码
          setcookie("loginUserName", $rentUser['username'], time()+60*60*24*7, '/');
          setcookie("loginUserPassword", $rentUser['password'], time()+60*60*24*7, '/');
        }
        else{
          //设置cookie过期
          setcookie("loginUserName", '', time()-1, '/');
          setcookie("loginUserPassword", '', time()-1, '/');

        }
        header("location: ../index.php");   //登录成功后跳转至index.php页面
      }
      else{  
        echo '<script language="JavaScript">alert("密码输入错误！");JavaScript:history.back();</script>';
        exit;
      }
    }
    else{
      echo '<script language="JavaScript">alert("用户不存在！");JavaScript:history.back();</script>';
      // echo "<script>location.href='../zhuce/reg.php'</script>";
      exit;
    }
  }
  else{
      echo '<script language="JavaScript">alert("验证码错误！");JavaScript:history.back();</script>';
      exit;
  }
?>