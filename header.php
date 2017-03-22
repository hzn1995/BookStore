<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>网上图书商城头部</title>
    <!--引入重置默认样式css文件-->
    <link rel="stylesheet" href="css/reset.css"/>
    <link rel="stylesheet" href="font-awesome/css/font-awesome.css"/>
    <!--引入头部样式文件-->
    <link rel="stylesheet" href="css/header_main.css"/>
    <link rel="icon" href="images/tb.ico">

</head>
<body>
<header class="header">
    <div class="logo">
        <img alt="寻梦小屋" src="images/dream.png">
    </div>
    <div class="right">
        <div class="topBar">
            <div class="login" id="logininnerhtmlcommon">
                欢迎来到寻梦小屋，<a href="login.html">[请登录]</a>
                <a href="#">[免费注册]</a>
            </div>
            <div class="top_menu">
                <a href="#">购物车</a>
                <a href="#">收藏夹</a>
                <a href="#">我的订单</a>
                <a href="#">我的账户</a>
                <a href="#">帮助</a>
            </div>
        </div>
        <?php
        //var_dump(__FILE__);
        //var_dump($_SERVER['PHP_SELF']);
        //获取当前页面的URL路径的basename

        $path= basename($_SERVER['PHP_SELF']);

        $index=$path=="index.php" ? "class='active'":'';
        $books=$path=="books.php"?"class='active'":"";
        $aboutUs=$path=="aboutUs.php"?"class='active'":"";
        $sea1=$path=="index.php"? "":"hide";
        $sea2=$path!="index.php"&&$path!="aboutUs.php"? "":"hide";
        $sea3=$path=="aboutUs.php"? "":"hide";
        ?>
        <div class="menu_bar">
            <div class="search_tab clearflx">
                <a <?php echo $index ?> href="index.php">网站首页</a>
                <a <?php echo $books ?> href="books.php">图书专区</a>
                <a <?php echo $aboutUs ?> href="aboutUs.php">关于我们</a>
            </div>
            <div class="slogan">
                <b>来寻梦小屋，寻找属于你的梦想！</b>
            </div>
        </div>
    </div>
    <div class="search_div clear">
        <div class="search_top ">
            <nav class="search_top_menu <?php echo $sea2 ?> ">
                <a href="#">文学</a>
                <a href="">青春文学</a>
                <a href="">小说</a>
                <a href="">童书</a>
                <a href="">科普读物</a>
                <a href="">历史</a>
                <a href="">生活</a>
                <a href="">心理</a>
                <a href="">教育</a>
                <a href="">经管</a>
                <a href="">成功励志</a>
                <a href="">军事</a>
            </nav>
        </div>
        <div class="search_form  <?php echo $sea1 ?> ">
            <form action="#" method="post">
                <b class="fa fa-search"></b>
                <input type="search" name="book" placeholder="请输入书名或作者进行查询"/>
                <input type="submit" name="search" value="搜 索"/>
            </form>
        </div>
        <div class="search_book_form <?php echo $sea2 ?> ">
            <form action="#" method="post">
                <b class="fa fa-search"></b>
                <input type="search" name="books" placeholder="请输入查询内容"/>
                <select name="query">
                    <option value="all">全部分类</option>
                    <option value="书名">书名</option>
                    <option value="作者">作者</option>
                    <option value="文学">文学</option>
                    <option value="青春文学">青春文学</option>
                    <option value="小说">小说</option>
                    <option value="童书">童书</option>
                    <option value="科普读物">科普读物</option>
                    <option value="历史">历史</option>
                    <option value="生活">生活</option>
                    <option value="教育">教育</option>
                    <option value="经管">经管</option>
                    <option value="成功励志">成功励志</option>
                    <option value="军事">军事</option>
                </select>
                <input type="submit" name="search" value="搜 索"/>
            </form>
        </div>
        <div class="about <?php echo $sea3 ?>">

        </div>
    </div>
</header>
<script src="js/tab.js"></script>

</body>
</html>