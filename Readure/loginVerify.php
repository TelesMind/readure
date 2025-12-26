<?php
  include_once 'config.php';   //配置文件（数据库连接参数等）
  //判断用户是否已登录，或者满足免登录的条件，否则跳转至login.php页面
  if(!isset($_SESSION['loginUser'])){  //未登录
    //判断在cookie中是否存储有登录用户信息
    if(isset($_COOKIE['loginUserName']) && isset($_COOKIE['loginUserPassword'])){
      //根据cookie中的用户名查询用户信息
     $sqls="select * from uinfo where username='".$_COOKIE['loginUserName']."'";
       $res =mysql_query($sqls);
       $res_count=mysql_num_rows($res);
      $rentUser =mysql_fetch_array($res);//获取users表中满足条件的记录
      //判断用户是否存在
      if ($res_count!=0){
        //判断cookie中的密码是否与查询出来的密码一致
        if ($rentUser['password'] == $_COOKIE['loginUserPassword']){
          //使用session保存登录用户信息
          $_SESSION['loginUser'] = $rentUser; 
        }
        else{   //密码不一致
          //设置cookie过期
          setcookie("loginUserName", '', time()-1, '/');
          setcookie("loginUserPassword", '', time()-1, '/');          
          header("location: loginRD/login.php");   //跳转至login.php页面
          exit;
        }
      }else{   //用户不存在
        //设置cookie过期
        setcookie("loginUserName", '', time()-1, '/');
        setcookie("loginUserPassword", '', time()-1, '/');
        header("location: loginRD/login.php");   //跳转至login.php页面
        exit;
      }
    }else{   //cookie中无登录用户信息
      header("location: loginRD/login.php");   //跳转至login.php页面
      exit;
    }
  }
  $loginUser = $_SESSION["loginUser"];
  $loginUserName = $loginUser["username"];
?>
<!-- <table width="100%" border="0" cellspacing="0" cellpadding="3">
  <tr>
    <td width="50%">欢迎您：<b><?php echo $loginUserName;?></b></td>
    <td width="50%" align="right"><b><a href="doLogout.php">注销</a></b></td>
  </tr>
</table> 
 -->