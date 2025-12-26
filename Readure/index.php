

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>读见未来_精选好书(Readure)</title>
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

        .banner-section_01 {
    position: relative; /* 允许绝对定位 */
    width: 100%; /* 或者指定一个固定宽度，根据需求 */
    height: 300px; /* 确保高度与图片一致 */
    overflow: hidden; /* 防止内容溢出 */
}


        .banner-section_01 img {
            position: absolute;
            width: 1800px;
            height: 300px;
            object-fit: cover;

            left: 50%; /* 将图片向右移动50%的父容器宽度 */
    transform: translateX(-50%); /* 再将图片自身宽度的一半向左拉回，达到居中效果 */

            display: block;
            border-top: 6px solid #FFFFFF;

        }

        .banner-section {
            margin: 40px auto;
            overflow: hidden;
            box-shadow: 0 5px 15px var(--shadow);
            border-radius: 12px;
        }

        .banner-section img {
            width: 100%;
            height: 300px;
            object-fit: cover;
            object-position: center 70%;
            display: block;
        }


        section {
            margin-bottom: 40px; 
        }

        /* 好书推荐样式 */
        .book-recommend {
            background: var(--light-card);
            border-radius: 12px;
            box-shadow: 0 5px 15px var(--shadow);
            padding: 30px;
            position: relative;
            overflow: hidden;
        }

        .book-recommend::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 5px;
            height: 100%;
            background: linear-gradient(to bottom, var(--primary) 0%, #b9d7ea 100%);
        }

        .section-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 25px;
        }

        .section-header h2 {
            font-size: 26px;
            color: var(--secondary); /*好书推荐颜色 黑色*/
            position: relative;
            padding-left: 15px;
        }

        .section-header h2::before {
            content: "";
            position: absolute;
            left: 0;
            top: 50%;
            transform: translateY(-50%);
            width: 5px;
            height: 26px;
            background: var(--primary);
            border-radius: 3px;
        }

        .section-header a {
            color: var(--primary);
            font-size: 16px;
            transition: all 0.3s ease;
            padding: 8px 15px;
            border-radius: 20px;
            /*background: rgba(255, 159, 109, 0.1);*/
            background: rgba(52, 152, 219, 0.1);

        }

        .section-header a:hover {
            color: white;
            background: var(--primary);
            transform: translateX(3px);
        }

        .book-list {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 30px;
        }

        .book-item {
            display: flex;
            background: var(--light);
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 3px 10px var(--shadow);
            transition: all 0.3s ease;
            border: 1px solid var(--border);
        }

        .book-item:hover {
            transform: translateY(-8px);
            box-shadow: 0 12px 25px var(--shadow);
        }

        .book-cover {
            flex: 0 0 120px;
            margin-right: 15px;
            margin-bottom: 5px;
            
        }

        .book-cover img {
            width: 100%;
            height: 160px;
            object-fit: cover;
            display: block;
            transform: translate(15px, 30px);
            

        }

        .book-info {
            padding: 18px;
            flex: 1;
        }

        .book-title {
            font-size: 18px;
            color: var(--secondary);
            margin-bottom: 8px;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .book-author {
            color: var(--text-light);
            font-size: 14px;
            margin-bottom: 12px;
        }

        .book-desc {
            color: var(--text-light);
            font-size: 14px;
            line-height: 1.5;
            height: 60px;
            overflow: hidden;
            text-overflow: ellipsis;
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            margin-bottom: 18px;
        }

        .read-now {
            display: inline-block;
            background: var(--primary);
            color: white;
            padding: 8px 20px;
            border-radius: 20px;
            font-size: 14px;
            transition: all 0.3s ease;
            font-weight: 500;
            margin: auto;
        }

        .read-now:hover {
            background: var(--accent);
            transform: translateY(-3px);
           /* box-shadow: 0 3px 10px rgba(255, 127, 80, 0.4);*/
           box-shadow: 0 3px 10px rgba(255, 107, 107, 0.4);
        }

        /* 热门搜索和最新资讯区域 */
        .popular-and-news {
            display: flex;
            gap: 30px;
            margin-bottom: 40px;
        }

        .popular-books {
            flex: 2;
            background: var(--light-card);
            border-radius: 12px;
            box-shadow: 0 5px 15px var(--shadow);
            padding: 30px;

            position: relative; /* 添加相对定位 */
            overflow: hidden; /* 确保伪元素不会溢出 */
        }

        /* 新增：为热门搜索添加渐变左框 */
.popular-books::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 5px;
    height: 100%;
    background: linear-gradient(to bottom, var(--primary) 0%, #b9d7ea 100%);
}

        .book-grid ul {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 20px;
        }

        .book-grid li {
            background: var(--light);
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 3px 10px var(--shadow);
            transition: all 0.3s ease;
            display: flex;
            flex-direction: column;
            border: 1px solid var(--border);
        }

        .book-grid li:hover {
            transform: translateY(-8px);
            box-shadow: 0 12px 25px var(--shadow);
        }

        .book-grid a {
            display: block;
            height: 100%;
        }

        .book-grid img {
            width: 100%;
            height: 180px;
            object-fit: cover;
            display: block;
        }

        .book-grid span {
            display: block;
            padding: 14px;
            color: var(--secondary);
            font-size: 14px;
            text-align: center;
            background: var(--light-card);
            flex: 1;
        }

        .latest-news {
            flex: 1;
            background: var(--light-card);
            border-radius: 12px;
            box-shadow: 0 5px 15px var(--shadow);
            padding: 30px;
        }

        .latest-news h2 {
            font-size: 26px;
            color: var(--secondary);
            margin-bottom: 25px;
            padding-bottom: 15px;
            border-bottom: 2px solid var(--primary);
        }

        .latest-news ul {
            list-style: none;
        }

        .latest-news li {
            padding: 16px 0;
            border-bottom: 1px solid var(--border);
        }

        .latest-news li:last-child {
            border-bottom: none;
        }

        .latest-news a {
            display: flex;
            justify-content: space-between;
            color: var(--text-light);
            transition: all 0.3s ease;
            align-items: center;
        }

        .latest-news a:hover {
            color: var(--primary);
        }

        .latest-news .fr {
            color: var(--text-light);
            font-size: 13px;
            min-width: 90px; /* 增加时间宽度 */
            text-align: right;
            margin-left: 15px;
        }

        .latest-news .news-title {
            flex: 1;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
        }

        /* 排行榜样式 */
        .book-rankings {
            display: flex;
            gap: 30px;
            margin-bottom: 40px;
        }

        .ranking-column {
            flex: 1;
            background: var(--light-card);
            border-radius: 12px;
            box-shadow: 0 5px 15px var(--shadow);
            padding: 30px;
        }

        .ranking-column h3 {
            font-size: 22px;
            color: var(--secondary);
            margin-bottom: 25px;
            padding-bottom: 15px;
            border-bottom: 2px solid var(--primary);
        }

        .ranking-column ul {
            list-style: none;
        }

        .ranking-column li {
            padding: 14px 0;
            border-bottom: 1px solid var(--border);
            display: flex;
            align-items: center;
            position: relative;
            padding-left: 60px;
        }

        .ranking-column li:last-child {
            border-bottom: none;
        }

        .ranking-column li::before {
            content: attr(data-rank);
            position: absolute;
            left: 0;
            width: 28px;
            height: 28px;
           /* background: #FFEDE5;*//*颜色*/
             /*background: rgba(255, 107, 107, 0.1);*/
             background: var(--rank4); 
            border-radius: 50%;
            text-align: center;
            line-height: 28px;
            color: var(--primary);
            font-weight: bold;
            font-size: 15px;
        }

        .ranking-column li:nth-child(1)::before {
            background: var(--rank1);
            color: white;
        }

        .ranking-column li:nth-child(2)::before {
            /*background: #FFD5C2;*/
             background: var(--rank2);
        }

        .ranking-column li:nth-child(3)::before {
            /*background: #FFE4D8;*/
            background: var(--rank2);
        }

        .ranking-column a {
            color: var(--text);
            transition: all 0.3s ease;
        } 

        .ranking-column a:hover {
            color: var(--primary);
        }

        /* 关于我们样式 */
        .about-us {
            background: var(--light-card);
            border-radius: 12px;
            box-shadow: 0 5px 15px var(--shadow);
            padding: 35px;
            margin-bottom: 40px;
           position: relative; /* 添加相对定位 */
            overflow: hidden; /* 确保伪元素不会溢出 */
        }

        .about-us::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 5px;
    height: 100%;
    background: linear-gradient(to bottom, var(--primary) 0%, #b9d7ea 100%);
}

        .about-us h2 {
            font-size: 26px;
            color: var(--secondary);
            margin-bottom: 25px;
            padding-bottom: 15px;
            border-bottom: 2px solid var(--primary);
            text-align: center;
        }

        .about-us p {
            margin-bottom: 20px;
            color: var(--text-light);
            text-align: center;
            line-height: 1.8; 
            letter-spacing: 1px; 
        }

        .about-us ul {
            margin: 20px 0 20px 35px;
        }

        .about-us span {
            display: block;
            text-align: center;
            line-height: 1.7; 
            letter-spacing: 01px; 
        }

        .about-us li {
            margin-bottom: 12px;
            position: relative;
            padding-left: 30px;
            color: var(--text-light);
        }

        .about-us li::before {
            content: "•";
            position: absolute;
            left: 15px;
            color: var(--primary);
            font-size: 24px;
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
                <img src="images/banner02.png" alt="BANNER" >
            </section>
    </div>


    <main class="container">

        <section class="book-recommend">
            <div class="section-header">
                <h2>好书推荐</h2>
                <a href="#">查看全部 &gt;</a>
            </div>
            <div class="book-list">
                <?php
                   include("config.php");
                   $result = mysql_query("SELECT * FROM cases LIMIT 9");
                   while ($row = mysql_fetch_assoc($result)) {
                ?>
        <div class="book-item">
          <div class="book-cover">
            <img src="images/<?php echo $row['imagesrc']; ?>" width="120" height="160" alt="书封面">
          </div>
          <div class="book-info">
            <h3 class="book-title"><?php echo $row['casename']; ?></h3>
            <p class="book-author">作者：<?php echo $row['author']; ?></p>
            <p class="book-desc">
              <?php
                echo $row['synopsis'];
              ?>
            </p>
            <!-- <a class="read-now" href="#">立即阅读</a> -->
            <a class="read-now" href="xiangqing0.php?id=<?php echo $row['id']; ?>">立即阅读</a>
            
          </div>
        </div>
      <?php } ?>
    </div>
            </div>
        </section>


        




  <section class="popular-and-news">
    <aside class="popular-books">
      <div class="section-header">
        <h2>热门搜索</h2>
        <a href="#">查看全部 &gt;</a>
      </div>
      <div class="book-grid">
        <ul>
          <?php
            include("config.php");
            $result=mysql_query("select * from cases_hot limit 8");
            while($row=mysql_fetch_assoc($result)){
              echo "<li data-rank='{$row['rank']}'>
                      <a href='#'>
                        <img src='images/{$row['imagesrc']}' width='200' height='180' alt='热门书籍'>
                        <span>{$row['casename']} <br> {$row['author']}</span>
                      </a>
                    </li>";
            }
          ?>
        </ul>
      </div>
    </aside>

    <aside class="latest-news">
      <h2>最新资讯</h2>
      <ul>
        <?php
          $result=mysql_query("select * from news limit 0,6");
          while($row=mysql_fetch_assoc($result)){
            echo "<li>
                    <a href='content.php?id={$row['id']}'>
                      {$row['title']}
                      <span class='fr'>{$row['date']}</span>
                    </a>
                  </li>";
          }
        ?>
      </ul>
    </aside>
  </section>

  <section class="book-rankings">
    <div class="ranking-column">
      <h3>小说榜</h3>
      <ul>
        <?php
          $result=mysql_query("select * from list_novel limit 0,10");
          $rank = 1;
          while($row=mysql_fetch_assoc($result)){
            echo "<li data-rank='$rank'>
                    <a href='#{$row['id']}'>
                      {$row['book_name']}
                    </a>
                  </li>";
            $rank++;
          }
        ?>
      </ul>
    </div>
    <div class="ranking-column">
      <h3>新书榜</h3>
      <ul>
        <?php
          $result=mysql_query("select * from list_new limit 0,10");
          $rank = 1;
          while($row=mysql_fetch_assoc($result)){
            echo "<li data-rank='$rank'>
                    <a href='#{$row['id']}'>
                      {$row['book_name']}
                    </a>
                  </li>";
            $rank++;
          }
        ?>
      </ul>
    </div>
    <div class="ranking-column">
      <h3>神作榜</h3>
      <ul>
        <?php
          $result=mysql_query("select * from list_master limit 0,10");
          $rank = 1;
          while($row=mysql_fetch_assoc($result)){
            echo "<li data-rank='$rank'>
                    <a href='#{$row['id']}'>
                      {$row['book_name']}
                    </a>
                  </li>";
            $rank++;
          }
        ?>
      </ul>
    </div>
  </section>

  <section class="banner-section">
        <img src="images/banner05.png" alt="节日活动">
      </section>
      

  <section class="about-us">
    <h2>关于 Readure | 读见未来</h2>
    <?php
      function readfiles($filename){
        $fop=fopen($filename, 'r');
        $length=filesize($filename);
        $frd=fread($fop,$length);
        return $frd;
        fclose($fop);
      }
      $filename="files/guanyu.txt";
      $getstring=readfiles($filename);
      echo $getstring;
    ?>
  </section>
</main>

<footer>
  <p>Copyright &copy; 2025 www.readure.com</p>
</footer>

 <script>
        // 滚动时顶部栏变化
        window.addEventListener('scroll', function() {
            const topHeader = document.querySelector('.top-header');
            if (window.scrollY > 50) {
                topHeader.style.boxShadow = '0 2px 10px rgba(0,0,0,0.1)';
            } else {
                topHeader.style.boxShadow = '0 1px 3px var(--shadow)';
            }
        });
    </script>

</body>
</html>