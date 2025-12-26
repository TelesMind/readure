<?php
  session_start();
  include_once 'loginVerify.php';
?>

<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>书本详情- 读见未来 | Readure</title>
    <style>


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


        /* 详情页内容 */
        .book-detail-container {
            display: flex;
            margin: 10px 0;
            gap: 30px;
        }
        
        .book-cover-section {
            flex: 0 0 auto;
            background: white;
            border-radius: 8px;
            padding: 30px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
            text-align: center;
            height: 360px; 
            width: 250px;
        }

        .book-cover-section .book-title {
    font-size: 1.2rem;
    color: #333;
    margin-top: -160px;
}

.book-cover-section .book-author {
    font-size: 0.95rem;
    color: #666;
    /*margin-top: 0px;*/
}
        
        .book-cover-section img {
            max-width: 150px;
            height: auto;
            max-height: 400px;
            margin-bottom: 180px;
        }
        
        .book-info-section {
            flex: 0 0 65%;
            background: white;
            border-radius: 8px;
            padding: 50px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
        }
        
        .book-title {
            color: var(--dark);
            font-size: 2.5rem;

            white-space: nowrap;
        }
        
        
        .book-author {
            font-size: 1.1rem;
            color: var(--secondary);
        }

        .book-categories {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            margin-bottom: 30px;
        }
        
        .category-tag {
            background-color: var(--hover);
            color: var(--primary);
            padding: 5px 15px;
            border-radius: 20px;
            font-size: 0.9rem;
        }
        
        .section-title {
            font-size: 1.4rem;
            color: var(--dark);
            margin: 10px 0 15px;
            padding-bottom: 10px;
            border-bottom: 2px solid var(--accent);
            display: inline-block;
        }
        
        .book-description {
            margin-bottom: 25px;
            line-height: 1.8;
            color: var(--text);
        }
        
        .highlights {
            background-color: var(--light);
            padding: 25px;
            border-radius: 8px;
            margin-bottom: 30px;
            border-left: 4px solid var(--accent);
        }
        
        .highlights ul {
            list-style-type: none;
            padding-left: 0;
        }
        
        .highlights li {
            padding: 10px 0;
            padding-left: 30px;
            position: relative;
        }
        
        .highlights li::before {
            content: "★";
            color: var(--accent);
            position: absolute;
            left: 0;
            top: 10px;
        }
        
        .recommendation {
            font-style: italic;
            background-color: #fdf8e3;
            padding: 20px;
            border-radius: 8px;
            margin-bottom: 30px;
            border-left: 4px solid var(--accent);
        }
        
        .tags {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            margin-bottom: 50px;
        }
        
        .tag {
            background-color: var(--primary);
            color: white;
            padding: 5px 15px;
            border-radius: 20px;
            font-size: 0.9rem;
        }
        
        .action-buttons {
            display: flex;
            gap: 15px;
            margin-top: 30px;
        }
        
        .btn {
            padding: 12px 25px;
            border-radius: 4px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            border: none;
            font-size: 1rem;
            display: inline-flex;
            align-items: center;
            justify-content: center;
        }
        
        .btn-primary {
            background-color: var(--primary);
            color: white;
        }
        
        .btn-secondary {
            background-color: white;
            color: var(--primary);
            border: 1px solid var(--primary);
        }
        
        .btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }
        
        .btn-primary:hover {
            background-color: #3d5d8a;
        }
        
        .btn-secondary:hover {
            background-color: var(--hover);
        }
        
        
        /* 页脚样式 */
        footer {
            background-color: var(--dark);
            color: white;
            text-align: center;
            padding: 20px 0;
            margin-top: 50px;
        }
        
        /* 书籍封面占位样式 */
        .book-cover-placeholder {
            width: 100%;
            height: 400px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 2rem;
            font-weight: bold;
            text-align: center;
            padding: 20px;
            border-radius: 4px;
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

<?php
include("config.php");

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);
    $result = mysql_query("SELECT * FROM cases WHERE id = $id");

    if ($row = mysql_fetch_assoc($result)) {
        // 开始输出 HTML 内容
?>

    <main class="container">
        <div style="padding: 15px 0; font-size: 0.9rem; color: var(--light-text);">
            <a href="index.php">首页</a> &gt; 
            <span>好书推荐</span> &gt; 
            <span>《<?php echo $row['casename']; ?>》</span>
        </div>
        
        <!-- 书籍详情 -->
        <div class="book-detail-container">

 <!-- 书籍详情 -->
        <div class="book-detail-container">
            <div class="book-cover-section">
                <div class="book-cover-placeholder">
                    <img src="images/<?php echo $row['imagesrc']; ?>" width="240" height=100% alt="书封面">
                </div>

                <h1 class="book-title">《<?php echo $row['casename']; ?>》</h1>
                <p class="book-author"><?php echo $row['author']; ?></p>


            </div>

            <div class="book-info-section">
                <h3 class="section-title">内容简介</h3>
                <p class="book-description">
                    <?php echo $row['synopsis']; ?>
                </p>
                
                <h3 class="section-title">核心亮点</h3>
                <div class="highlights">
                    <ul>
                        <li><?php echo $row['highlight1']; ?></li>
                        <li><?php echo $row['highlight2']; ?></li>
                        <li><?php echo $row['highlight3']; ?></li>
                    </ul>
                </div>
                
                <h3 class="section-title">编辑推荐</h3>
                <div class="recommendation">
                    <p>"<?php echo $row['review']; ?>"</p>
                </div>
                
                <h3 class="section-title">书籍标签</h3>
                <div class="tags">
                    <span class="tag">#<?php echo $row['tag1']; ?></span>
                    <span class="tag">#<?php echo $row['tag2']; ?></span>
                    <span class="tag">#<?php echo $row['tag3']; ?></span>
                </div>
                
                <div class="action-buttons">
                    <button class="btn btn-primary">立即阅读</button>
                    <button class="btn btn-secondary">加入书架</button>
                    <button class="btn btn-secondary">分享书籍</button>
                </div>
            </div>
        </div>
        </div>
        </main>

   <?php
    } // end if ($row = ...)
} // end if (isset($_GET['id']))
?>

    <footer>
        <p>Copyright &copy; 2025 www.readure.com | 读见未来</p>
    </footer>
</body>
</html>