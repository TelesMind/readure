<?php
  session_start();
  include_once 'loginVerify.php';
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>咨询详情</title>
<style type="text/css">
  :root {
  --primary: #7098da; /* 主要蓝色 */
  --primary2: #4a6fa5;/* 深蓝色（用于导航栏） */
  --primary3: #a8d8ea;
  
  --secondary: #2c3e50; /* 黑蓝色（用于标题和文本） */
  --accent: #f67280; /* 强调色（红色/橙色） */
  --light: #f4f4f7;/*浅灰背景*/
  --dark: #333;/* 深文本色 */
  --gray: #7f8c8d;/* 灰色（未使用） */
  --border: #e0e0e0;/* 边框颜色 */
   --text: #333; /* 主要文本颜色 */
  --text-light: #7f8c8d; /* 浅文本颜色 */
  --light-card: #ffffff;  /* 卡片背景色 */
  --shadow: rgba(0, 0, 0, 0.1);/* 阴影颜色 */
  --rank1:#f67280;/*#f08a5d*/
  --rank2:#ffde7d;
  --rank3:#fce38a;
  --rank4:rgba(253, 255, 171, 0.5);
  /*--rank4:#ffe2e2;*/
  --top1:#4a6fa5;
  --yellow1:#ffc93c;

}

                * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'PingFang SC', 'Microsoft YaHei', sans-serif;
        }

        body {
            background-color: var(--light);
            color: var(--text);
            line-height: 1.6;
            padding-top:78px; /* 为固定顶部栏预留空间 */
        }

        a {
            text-decoration: none;
            color: inherit;
            transition: all 0.3s ease;
        }

        ul {
            list-style: none;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 10px;
        }

        /* 顶部导航栏样式 */
        .top-header {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 1000;
            background-color: var(--top1);
           /* box-shadow: 0 1px 2px var(--shadow);*/
            border-bottom: 1px solid var(--border);
            transition: all 0.3s ease;
        }

        .topCen {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 5px 0;
        }/*改1*/

        .logo img {
            /*height: 50px;*/
            transition: transform 0.3s ease;
        }

        .logo img:hover {
            transform: scale(1.05);
        }

        .search-bar {
            display: flex;
            flex: 0 0 40%;
            position: relative;
        }

        .search-bar input {
            width: 100%;
            padding: 9px 20px;
            border: 2px solid var(--primary);
            border-radius: 30px;
            font-size: 16px;
            background: rgba(255, 255, 255, 0.8);
            transition: all 0.3s ease;
        }

        .search-bar input:focus {
            outline: none;
            box-shadow: 0 0 10px rgba(255, 127, 80, 0.3);
        }

        .search-bar button {
            position: absolute;
            right: 7px;
            top: 6px;
            background: var(--primary2);
            color: white;
            border: none;
            border-radius: 30px;
            padding: 7px 15px;
            cursor: pointer;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .search-bar button:hover {
            background: var(--accent);
            transform: translateY(-1px);
        }

        .user-links {
            display: flex;
            gap: 15px;
            color: white;
            font-weight: 500;
        }

        .user-links a {
            transition: color 0.3s ease;
        }

        .user-links a:hover {
            color: var(--rank3);
        }

        /* 主导航样式 */
        .main-nav {
            /*background: linear-gradient(135deg, var(--primary) 0%, var(--accent) 100%);*/
            background: var(--yellow1);
            padding: 9px 0;
        }

        .main-nav ul {
            display: flex;
            justify-content: center;
            gap: 10px;
        }

        .main-nav li {
            margin: 0 10px;
        }

        .main-nav a { /*导航字*/
            color: var(--top1);
            font-size: 16px;
            font-weight: 700;
            padding: 10px 30px;
            border-radius: 30px;
            transition: all 0.3s ease;
            position: relative;
        }

        .main-nav a:hover {
            background: rgba(255, 255, 255, 0.2);
        }
 
        .main-nav a::after { 
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            width: 0;
            height: 2px;
            background: var(--top1);
            transition: all 0.3s ease;
            transform: translateX(-50%);
        }

        .main-nav a:hover::after {
            width: 70%;
        }



        .banner-section {
            margin: 60px auto;
            overflow: hidden;
            box-shadow: 0 5px 15px var(--shadow);
        }

        .banner-section img {
            width: 100%;
            height: 300px;
            object-fit: cover;
            display: block;
        }

        .banner-section_01 img {
            width: 100%;
            height: 400px;
            object-fit: cover;
            display: block;
            border-top: 6px solid #FFFFFF;

        }

                /* 页脚样式 */
        footer {
            background: var(--secondary);
            color: white;
            text-align: center;
            padding: 30px;
            margin-top: 50px;
        }

        footer p {
            font-size: 15px;
            letter-spacing: 0.5px;
        }


         /* 新增样式 - 内容区域布局 */
        .icompany {
            display: flex;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
            gap: 30px;
        }

        .wfixed {
            width: 100%;
            max-width: 1200px;
            margin: 40px auto;
        }

        .clearfix:after {
            content: "";
            display: table;
            clear: both;
        }

        .fl {
            float: left;
        }

        .fr {
            float: right;
        }

        /* 新增样式 - 左侧导航 */
        .insLeft {
            width: 25%;
            height: 50%;
            background: white;
            border-radius: 12px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
            padding: 20px;
            position: sticky;
            top: 130px;
        }

        .pro_tit {
            font-size: 22px;
            font-weight: 700;
            color: var(--primary2);
            padding-bottom: 15px;
            margin-bottom: 15px;
            border-bottom: 2px solid var(--primary3);
        }

        .pro_tit span {
            position: relative;
            padding-left: 10px;
        }

        .pro_tit span:before {
            content: "";
            position: absolute;
            left: 0;
            top: 50%;
            transform: translateY(-50%);
            width: 4px;
            height: 22px;
            background: var(--accent);
            border-radius: 2px;
        }

        .insLeft ul {
            display: flex;
            flex-direction: column;
            gap: 8px;
        }

        .insLeft li a {
            display: block;
            padding: 12px 15px;
            border-radius: 8px;
            color: var(--secondary);
            font-weight: 500;
            transition: all 0.3s ease;
        }

        .insLeft li a:hover {
            background: var(--primary3);
            color: var(--primary2);
            transform: translateX(5px);
        }

        /* 新增样式 - 右侧内容区域 */
        .insRight {
            width: 72%;
            background: white;
            border-radius: 12px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
            padding: 30px;
        }

        .crumb {
            padding-bottom: 20px;
            margin-bottom: 25px;
            border-bottom: 1px solid var(--border);
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .crumb span {
            font-size: 25px;
            color: var(--primary2);
            font-weight: 600;
        }

        .crumb b {
            display: block;
            font-size: 14px;
            color: var(--text-light);
            font-weight: normal;
            margin-top: 5px;
        }

        /* 新增样式 - 文章内容 */
        .insNewsArti h1.tac {
            text-align: center;
            font-size: 28px;
            line-height: 1.4;
            margin-bottom: 20px;
            color: var(--secondary);
            padding-bottom: 20px;
            border-bottom: 1px solid var(--border);
        }

        h3 {
            display: flex;
            justify-content: center;
            gap: 30px;
            margin-bottom: 25px;
            font-size: 14px;
            color: var(--text-light);
            font-weight: normal;
        }

        .Newscont {
            line-height: 1.8;
            font-size: 16px;
            color: #444;
            padding-bottom: 30px;
            border-bottom: 1px solid var(--border);
        }

        .Newscont p {
            margin-bottom: 20px;
            text-indent: 2em;
        }

        .Newscont img {
            max-width: 100%;
            border-radius: 8px;
            margin: 15px 0;
            box-shadow: 0 3px 10px rgba(0,0,0,0.1);
        }

        /* 新增样式 - 下一条和标签 */
        .newArtiNext {
            margin-top: 30px;
            padding-top: 20px;
        }

        .newArtiNext div {
            margin-bottom: 15px;
            font-size: 16px;
        }

        .newArtiNext div:first-child {
            font-weight: 500;
            color: var(--primary2);
        }

        .newArtiNext div:first-child a {
            color: var(--accent);
            margin-left: 10px;
            transition: all 0.3s;
        }

        .newArtiNext div:first-child a:hover {
            color: var(--primary2);
            text-decoration: underline;
        }

        .tag {
            display: flex;
            align-items: center;
            flex-wrap: wrap;
            gap: 10px;
            margin-top: 40px;
        }

        .tag a {
            background: rgba(52, 152, 219, 0.1);
            color: var(--primary2);
            padding: 5px 12px;
            border-radius: 20px;
            font-size: 14px;
            transition: all 0.3s;
        }

        .tag a:hover {
            background: var(--accent);
            color: white;
            transform: translateY(-2px);
        }

</style>
</head>

<body>
<header>
      <!-- 顶部固定栏 -->
    <div class="top-header">
        <div class="container topCen">
            <div class="logo"> 
              <a href="index.php">
                <img src="images/LOGO_1.PNG" width=100% height="55" alt="Readure Logo"> 
              </a>
                
            </div>
            <div class="search-bar">
                <input type="text" placeholder="搜索好书、作者、标签..." />
                <button type="submit">搜索</button>
            </div>
            
            <div class="user-links">
  <?php if (isset($_SESSION["loginUser"])): ?>
    欢迎您，<b><?php echo $_SESSION["loginUser"]["username"]; ?></b>
    |
    <a href="index.php">主页</a> |
    <a href="doLogout.php">登出</a>
  <?php else: ?>
    <a href="loginRD/login.php">登录</a> |
    <a href="zhuceRD/reg.php">注册</a>
  <?php endif; ?>
</div>

        </div>
    </div>

  <!--导航-->
  <nav class="main-nav">
    <div class="container">
      <ul>
        <li><a href="#" class="active">分类</a></li>
        <li><a href="#">小说</a></li>
        <li><a href="#">非小说</a></li>
        <li><a href="#">有声读物</a></li>
        <li><a href="#">儿童读物</a></li>
        <li><a href="#">技术支持</a></li>
        <li><a href="#">联系我们</a></li>
        <li><a href="#">我的书架</a></li>
      </ul>
    </div>
  </nav>
</header>

    <!-- 全宽Banner -->
    <div class="full-banner">
            <section class="banner-section_01">
                <img src="images/banner02.png" alt="BANNER" width="242" height="62">
            </section>
    </div>



<div class="icompany wfixed clearfix">
  <div class="insLeft fl">
    <div class="pro_tit"><span>资讯列表</span></div>
    <ul>
      <?php
      include("config.php");
          $result=mysql_query("select * from news limit 0,6");
          while($row=mysql_fetch_assoc($result)){
            echo "<li>
                    <a href='content.php?id={$row['id']}'>
                      {$row['title']}
                      
                    </a>
                  </li>";
          }
        ?>
    </ul>
  </div>

   <?php
        $id=$_GET["id"];
          include("config.php");
              $result=mysql_query("select * from news where id=$id");
             $row=mysql_fetch_assoc($result);
               
              ?>
  <div class="insRight fr">
    <div class="crumb"> <span>资讯详情<b>NEWS DETAILS</b></span> </div>
    <div class="insNewsArti clearfix">
      <h1 class="tac fs20">
      <?php
        echo $row["title"];
      ?>
    </h1>
      <h3><span>作者：TSH</span><span>
      发布时间：
      <?php
        echo $row["date"];
      ?>
    </span></h3>
      <div class="Newscont">

      <?php
        echo $row["content"];
      ?>
      </div>
      <div class="tag">相关标签：<a href="#">阅读</a>,<a href="#">好习惯</a>,<a href="#">世界读书日</a></div>
      </div>
    </div>
  </div>
</div>


<footer>
  <p>Copyright &copy; 2025 www.readure.com</p>
</footer>

</div>
</body>
</html>
