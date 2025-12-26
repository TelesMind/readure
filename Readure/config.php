<?php
           $conn=mysql_connect("127.0.0.1", "root", '')or die("数据库链接失败");
            mysql_select_db("readure");
           // 第三步：指定字符集
            mysql_query("set names utf8",$conn);
 ?>