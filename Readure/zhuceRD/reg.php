<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<style>

    body {
      margin: 0;
      font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
      background: url('../images/bg0.jpg') no-repeat center center fixed;
      background-size: cover;
      color: #333;

      min-height: 100vh;

      display: flex;
      flex-direction: column;
      position: relative;

      overflow: hidden;
    }


    body::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: rgba(0, 0, 0, 0.4);
      z-index: -1;
    }

    .top-header {
      padding: 15px 0;
      /*box-shadow: 0 2px 5px rgba(0,0,0,0.1);*/
    }

    .top-header .container {
      max-width: 1200px;
      margin: 0 auto;
      padding: 0 20px;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .logo img {
      height: 60px;
    }



.user-links {
            display: flex;
            gap: 15px;
            color: white;
            font-weight: 500;
        }
        
.user-links a {
    text-decoration: none;
    color: inherit;
    transition: color 0.3s ease;
}

.user-links a:hover {
    color: #fce38a;
}

    .register-container {
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      padding-top: 30px;
      /*max-width: 400px;
      max-height: 400px;*/
      margin: 0 auto;
      width: 500px;
    }
/*            .register::before {
            content: "";
            position: absolute;
            top: 27px;
            left: 25px;

            width: 5px;
            height: 7%;
            background: linear-gradient(to bottom,  #7098da 0%, #b9d7ea 100%);
            border-top-left-radius: 10px;
            border-bottom-left-radius: 10px;
        }*/


    .register {
      position: relative;
       width: 420px;
    height: 580px;
     
      background: rgba(255, 255, 255, 0.95);
      padding: 40px;
      margin-top: -270px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }

    .register h2 {
      margin-bottom: 25px;
      font-size: 24px;
      color: #333;
      font-weight: bold;
    }

    .register label {
      display: block;
      margin: 8px 0 5px;
      font-size: 14px;
    }

    .register input {
      width: 95%;
      padding: 8px;
      border: 1px solid #ccc;
      border-radius: 6px;
    }

    .register input[type="submit"] {
  margin-top: 20px;
  width: 100%;
  padding: 8px;
  background-color: #4a6fa5;
  border: none;
  color: white;
  font-size: 16px;
  border-radius: 6px;
  cursor: pointer;
  transition: background 0.3s ease;
}

    .register button {
      margin-top: 20px;
      width: 100%;
      padding: 8px;
      background-color: #4a6fa5;
      border: none;
      color: white;
      font-size: 16px;
      border-radius: 6px;
      cursor: pointer;
      transition: background 0.3s ease;
    }

    .register button:hover {
      background-color: #2980b9;
    }

.register form {
    width: 100%;
    flex-direction: column;
    align-items: center; 
    margin-top: -20px;
}

.jswz {
  font-size: 12px;
  color: #666;
  margin-top: 5px;
}


.captcha-img {
  display: block;
  margin-top: 8px;
  cursor: pointer;
  height: 20px;
}

    .captcha-container {
      display: flex;
      gap: 10px;
      margin-bottom: 20px;
      max-height: 35px;
    }

    footer {
      text-align: center;
      padding: 20px;
      position: relative;
      bottom: 0;
      width: 100%;
      font-size: 14px;
      color: white;
      margin-top: -190px;
    }

    .accept {
  display: flex;
  align-items: center; 
  gap: 8px; 
  font-size: 14px;
}

  </style>
</head>
<body>
  <?php include "log.php"; ?>

  <header>
    <div class="top-header">
      <div class="container">
        <div class="logo">
          <a href="../index.php">
            <img src="../images/LOGO_1.PNG" alt="Readure Logo">
          </a>
        </div>

        <nav class="user-links">
          <a href="../index.php">主页</a> |
          <a href="../loginRD/login.php">登录</a>
        </nav>

      </div>
    </div>
  </header>

  <main>
    <div class="register-container">
      <div class="register">
        <form action="reg.php" method="get">
          <h2>模拟注册页面</h2>

          <label for="username">用户名：</label>
          <input type="text" id="username" name="username" value="<?php echo $username; ?>">
          <div class="jswz">5~15个字母、数字、点、减号或下划线，需以字母开头，不区分大小写</div>

          <label for="psw">密码：</label>
          <input type="password" id="psw" name="psw">
          <div class="jswz">6~16个字符，不区分大小写</div>

          <label for="repsw">确认密码：</label>
          <input type="password" id="repsw" name="repsw">
          <div class="jswz">请再次填写密码</div>

          <label for="email">邮箱：</label>
          <input type="text" id="email" name="email" value="<?php echo $email; ?>">
          <div class="jswz">6~18个字符，可使用字母、数字、下划线</div>

          <label for="yzm">验证码：</label>
<div class="captcha-container">
          <input type="text" id="yzm" name="yzm">
          <img src="yzm.php" class="captcha-img" onclick="this.src='yzm.php?rand='+Math.random();" title="点击，更换验证码">
          <div class="jswz">不区分大小写</div>
</div>

          <div class="accept">
            <div>
              <input type="checkbox" name="accept" checked="checked">
            </div>
            <div>
            同意 <a href="#">“服务条款”</a> 和 <a href="#">“隐私权相关政策”</a></div>
          </div>

          <div class="btn">
            <input type="submit" value="立即注册">
          </div>
        </form>

        <div class="jswz wbdq">
          <?php
            if (!empty($_GET)) {
              $r_err = checkreg($username, $psw, $repsw, $email, $yzm, $accept);
              if (!empty($r_err)) {
                echo $r_err;
              } else {
                $conn = mysql_connect("localhost", "root", '');
                mysql_select_db("readure");
                mysql_query("set names utf8", $conn);

                $sqls = "select * from uinfo where username = '$username'";
                $res = mysql_query($sqls, $conn);
                $num = mysql_num_rows($res);

                if (!$num) {
                  $sqlString = "insert into uinfo (username,password,email)values('$username','" . md5($psw) . "','$email')";
                  $result = mysql_query($sqlString, $conn);
                  if ($result) {
                    echo "<script>alert('注册成功')</script>";
                    echo "<script>window.location.href='../loginRD/login.php'</script>";
                  } else {
                    echo "<script>alert('注册失败')</script>";
                    echo "<script>window.location.href='../loginRD/login.php'</script>";
                  }
                } else {
                  echo "<script>alert('该用户已经注册')</script>";
                  echo "<script>window.location.href='../loginRD/login.php'</script>";
                }
              }
            }
          ?>
        </div>
      </div>
    </div>
  </main>

  <footer>
    Copyright &copy; 2025 www.readure.com
  </footer>
</body>

</html>