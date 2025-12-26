<!DOCTYPE html>
<html>
  <head>
    <title>用户登录 - Readure</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style type="text/css">


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
     /* background-color: rgba(12, 28, 41, 0.6);*/
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

    .login-container {
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      padding: 20px;
      margin: 0 auto;
    }


    .login-box {
      position: relative;
       width: 420px;
       height: 420px;
     
      background: rgba(255, 255, 255, 0.95);
      padding: 40px;
      margin-top: -270px;
      border-radius: 10px;
      box-shadow: 0 10 30px rgba(0,0,0,0.2);
      backdrop-filter: blur(5px);
      animation: fadeIn 0.8s ease-out;
    }

    .login-box h2 {
      margin-bottom: 25px;
      font-size: 24px;
      color: #333;
      font-weight: bold;
    }

    .login-box label {
      display: block;
      margin: 8px 0 5px;
      font-size: 14px;
    }

    .login-box input {
      width: 95%;
      padding: 8px;
      border: 1px solid #ccc;
      border-radius: 6px;
    }

    .login-box button {
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

    .login-box button:hover {
      background-color: #2980b9;
    }

.login-box form {
    width: 100%;
    flex-direction: column;
    align-items: center; 
    margin-top: -20px;
}


    .captcha-container {
      display: flex;
      gap: 10px;
      margin-bottom: 10px;

    }

        .captcha-img {
      height: 30px;
    }


    /* 记住密码 */
    .remember-container {
      display: flex;
      align-items: center;
      margin: 10px 0 20px;
    }
    
    .remember-container input {
      margin-right: 10px;
      width: 18px;
      height: 18px;
      cursor: pointer;
    }
    
    .remember-container label {
      color: #555;
      font-size: 14px;
      cursor: pointer;
      user-select: none;
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

        /* 额外链接 */
    .extra-links {
      display: flex;
      justify-content: space-between;
      margin-top: 20px;
      font-size: 14px;
    }
    
    .extra-links a {
      color: #4a6fa5;
      text-decoration: none;
      transition: all 0.3s ease;
    }
    
    .extra-links a:hover {
      color: #f67280;
      text-decoration: underline;
    }


</style>

    <script language="JavaScript">
      //JavaScript脚本：表单提交前验证
      function formCheck() {
        if(document.form1.uName.value.trim() == ''){
          alert('[用户名]不能为空！');
          document.form1.uName.focus();
          return false;
        }
      }
    </script> 
  </head>

<body >

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
          <a href="../zhuceRD/reg.php">注册</a>
        </nav>


      </div>
    </div>
  </header>

  <main>
    <div class="login-container">
      <div class="login-box">
        <form name="form1" onSubmit="return formCheck();" method="post" action="doLogin.php">
  <h2 align="center">用户登录</h2>

  <div class="form-group">
    <label for="uName">用户名：</label>
    <input type="text" id="uName" name="uName" value="" />
  </div>

  <div class="form-group">
    <label for="uPassword">密码：</label>
    <input type="password" id="uPassword" name="uPassword" value="" />
  </div>

  <div class="form-group">
    <label for="vCode">验证码：</label>
    <div class="captcha-container">
      <input type="text" id="vCode" name="vCode" class="yzm" />
      <img src="vCode.php" class="captcha-img yzm1" title="点击，更换验证码"
           onclick="this.src='vCode.php?rand='+Math.random();" />
    </div>
  </div>

  <div class="remember-container">
    <input type="checkbox" id="ckRemember" name="ckRemember" />
    <label for="ckRemember">记住密码，一周内免登录</label>
  </div>

  <button type="submit" name="btnSubmit">登录</button>
  <button type="reset" name="btnReset" style="margin-top: 10px;">重置</button>

</form>


      </div>
    </div>
  </main>

  <footer>
    Copyright &copy; 2025 www.readure.com
  </footer>

</body>

</html>
