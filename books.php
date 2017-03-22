<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>图书专区</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/books_main.css">
    <link rel="icon" href="images/tb.ico">
    <script src="js/ajax.js"></script>
</head>
<body>
<?php
    include 'mysql.php';
    $arr_new=$arr;
    include 'books_order.php';
?>
<!-------------引进头部------------>
<?php
    include 'header.php';
?>

<div id="container" class="clearflx">
    <!---左侧栏-->
    <aside>
        <h2>图书分类</h2>
        <div class="menu">
            <dl>
                <dt>文学<i class="fa fa-chevron-circle-down"></i></dt>
                <dd onclick="location.href='books.php?classify=1'">论与鉴赏</dd>
                <dd onclick="location.href='books.php?classify=1'">文学理论</dd>
                <dd onclick="location.href='books.php?classify=1'">随笔</dd>
                <dd onclick="location.href='books.php?classify=1'">诗词歌赋</dd>
                <dd onclick="location.href='books.php?classify=1'">文学作品集</dd>
                <dd onclick="location.href='books.php?classify=1'">纪实文学</dd>
            </dl>
            <dl>
                <dt>青春文学<i class="fa fa-chevron-circle-down"></i></dt>
                <dd onclick="location.href='books.php?classify=2'"><a href="#">校园</a></dd>
                <dd onclick="location.href='books.php?classify=2'"><a href="#">成长</a></dd>
                <dd onclick="location.href='books.php?classify=2'"><a href="#">情感</a></dd>
                <dd onclick="location.href='books.php?classify=2'"><a href="#">娱乐</a></dd>
            </dl>
            <dl>
                <dt>小说<i class="fa fa-chevron-circle-down"></i></dt>
                <dd onclick="location.href='books.php?classify=3'"><a href="#">古典小说</a></dd>
                <dd onclick="location.href='books.php?classify=3'"><a href="#">武侠小说</a></dd>
                <dd onclick="location.href='books.php?classify=3'"><a href="#">国外小说</a></dd>
                <dd onclick="location.href='books.php?classify=3'"><a href="#">网络小说</a></dd>
                <dd onclick="location.href='books.php?classify=3'"><a href="#">影视小说</a></dd>
                <dd onclick="location.href='books.php?classify=3'"><a href="#">当代小说</a></dd>
            </dl>
            <dl>
                <dt>童书<i class="fa fa-chevron-circle-down"></i></dt>
                <dd onclick="location.href='books.php?classify=4'"><a href="#">少儿英语</a></dd>
                <dd onclick="location.href='books.php?classify=4'"><a href="#">启蒙读物</a></dd>
                <dd onclick="location.href='books.php?classify=4'"><a href="#">成长益智</a></dd>
                <dd onclick="location.href='books.php?classify=4'"><a href="#">儿童文学</a></dd>
            </dl>
            <dl>
                <dt>科普读物<i class="fa fa-chevron-circle-down"></i></dt>
                <dd onclick="location.href='books.php?classify=5'"><a href="#">文学评论与鉴赏</a></dd>
                <dd onclick="location.href='books.php?classify=5'"><a href="#">文学理论</a></dd>
                <dd onclick="location.href='books.php?classify=5'"><a href="#">随笔</a></dd>
                <dd onclick="location.href='books.php?classify=5'"><a href="#">诗词歌赋</a></dd>
                <dd onclick="location.href='books.php?classify=5'"><a href="#">文学作品集</a></dd>
                <dd onclick="location.href='books.php?classify=5'"><a href="#">纪实文学</a></dd>
            </dl>
            <dl>
                <dt>历史<i class="fa fa-chevron-circle-down"></i></dt>
                <dd onclick="location.href='books.php?classify=6'"><a href="#">中国史</a></dd>
                <dd onclick="location.href='books.php?classify=6'"><a href="#">世界史</a></dd>
                <dd onclick="location.href='books.php?classify=6'"><a href="#">专业史</a></dd>
                <dd onclick="location.href='books.php?classify=6'"><a href="#">野史</a></dd>
                <dd onclick="location.href='books.php?classify=6'"><a href="#">地方史</a></dd>
                <dd onclick="location.href='books.php?classify=6'"><a href="#">历史典籍</a></dd>
                <dd onclick="location.href='books.php?classify=6'"><a href="#">历史传记</a></dd>
                <dd onclick="location.href='books.php?classify=6'"><a href="#">历史随笔</a></dd>
            </dl>
            <dl>
                <dt>生活<i class="fa fa-chevron-circle-down"></i></dt>
                <dd onclick="location.href='books.php?classify=7'"><a href="#">育儿</a></dd>
                <dd onclick="location.href='books.php?classify=7'"><a href="#">胎教</a></dd>
                <dd onclick="location.href='books.php?classify=7'"><a href="#">养生</a></dd>
                <dd onclick="location.href='books.php?classify=7'"><a href="#">运动</a></dd>
                <dd onclick="location.href='books.php?classify=7'"><a href="#">旅游</a></dd>
                <dd onclick="location.href='books.php?classify=7'"><a href="#">烹饪</a></dd>
                <dd onclick="location.href='books.php?classify=7'"><a href="#">时尚</a></dd>
                <dd onclick="location.href='books.php?classify=7'"><a href="#">家庭</a></dd>
            </dl>
            <dl>
                <dt>心理<i class="fa fa-chevron-circle-down"></i></dt>
                <dd onclick="location.href='books.php?classify=8'"><a href="#">男性心理学</a></dd>
                <dd onclick="location.href='books.php?classify=8'"><a href="#">女性心理学</a></dd>
                <dd onclick="location.href='books.php?classify=8'"><a href="#">青少年心理学</a></dd>
                <dd onclick="location.href='books.php?classify=8'"><a href="#">儿童心理学</a></dd>
                <dd onclick="location.href='books.php?classify=8'"><a href="#">性格色彩心理学</a></dd>
                <dd onclick="location.href='books.php?classify=8'"><a href="#">心理学百科</a></dd>
                <dd onclick="location.href='books.php?classify=8'"><a href="#">历史传记</a></dd>
                <dd onclick="location.href='books.php?classify=8'"><a href="#">历史随笔</a></dd>
            </dl>
            <dl>
                <dt>教育<i class="fa fa-chevron-circle-down"></i></dt>
                <dd onclick="location.href='books.php?classify=9'"><a href="#">工具书</a></dd>
                <dd onclick="location.href='books.php?classify=9'"><a href="#">中小学教材</a></dd>
                <dd onclick="location.href='books.php?classify=9'"><a href="#">高校教材</a></dd>
                <dd onclick="location.href='books.php?classify=9'"><a href="#">外语</a></dd>
                <dd onclick="location.href='books.php?classify=9'"><a href="#">考试</a></dd>
            </dl>
            <dl>
                <dt>经管<i class="fa fa-chevron-circle-down"></i></dt>
                <dd onclick="location.href='books.php?classify=10'"><a href="#">商务沟通</a></dd>
                <dd onclick="location.href='books.php?classify=10'"><a href="#">投资理财</a></dd>
                <dd onclick="location.href='books.php?classify=10'"><a href="#">职场管理</a></dd>
                <dd onclick="location.href='books.php?classify=10'"><a href="#">经济</a></dd>
            </dl>
            <dl>
                <dt>成功励志<i class="fa fa-chevron-circle-down"></i></dt>
                <dd onclick="location.href='books.php?classify=11'"><a href="#">处世学</a></dd>
                <dd onclick="location.href='books.php?classify=11'"><a href="#">女性励志</a></dd>
                <dd onclick="location.href='books.php?classify=11'"><a href="#">青少年励志</a></dd>
                <dd onclick="location.href='books.php?classify=11'"><a href="#">演讲口才</a></dd>
                <dd onclick="location.href='books.php?classify=11'"><a href="#">名人励志</a></dd>
                <dd onclick="location.href='books.php?classify=11'"><a href="#">情商</a></dd>
                <dd onclick="location.href='books.php?classify=11'"><a href="#">社会礼仪</a></dd>
                <dd onclick="location.href='books.php?classify=11'"><a href="#">个人修养</a></dd>
            </dl>
            <dl>
                <dt>军事<i class="fa fa-chevron-circle-down"></i></dt>
                <dd onclick="location.href='books.php?classify=12'"><a href="#">军事小说</a></dd>
                <dd onclick="location.href='books.php?classify=12'"><a href="#">军事纪实</a></dd>
                <dd onclick="location.href='books.php?classify=12'"><a href="#">世界形式</a></dd>
            </dl>
        </div>
    </aside>
    <!--内容栏-->
    <?php
        if(isset($_COOKIE['order']) && ($_COOKIE['order']!=null) && ($_COOKIE['order']!='default')){
            $arr_new=@array_sort($arr_new,$_COOKIE['order'],$_COOKIE['sort['.$_GET["order"].']']);
        }
    function array_sort($arr,$type,$order){
        $temp_array=array();
        foreach($arr as $key=>$value ){
            $temp_array[$key]=$value[$type];
        }
        if($order=="asc"){
            //进行升序
            asort($temp_array);
        }else{
            //进行降序
            arsort($temp_array);
        }
        //最终排序
        $new_arr=array();
        foreach($temp_array as $key=>$value){
            $new_arr[$key]=$arr[$key];
        }
        return $new_arr;
    }
    ?>
    <div id="content" class="fr">
        <div class="content_top">
            <ul>
                <li><a href="books.php?classify=<?php echo $_COOKIE['classify'] ?>&order=default">默认</a></li>
                <li><a href="books.php?classify=<?php echo $_COOKIE['classify'] ?>&order=price">价格</a><i class="fa fa fa-arrow-up"></i><b class="fa fa-arrow-down"></b></li>
                <li><a href="books.php?classify=<?php echo $_COOKIE['classify'] ?>&order=sales">销量</a><i class="fa fa fa-arrow-up"></i><b class="fa fa-arrow-down"></b></li>
                <li><a href="books.php?classify=<?php echo $_COOKIE['classify'] ?>&order=discount">折扣</a><i class="fa fa fa-arrow-up"></i><b class="fa fa-arrow-down"></b></li>
                <li><a href="books.php?classify=<?php echo $_COOKIE['classify'] ?>&order=hot">人气</a><i class="fa fa fa-arrow-up"></i><b class="fa fa-arrow-down"></b></li>
                <li><a href="books.php?classify=<?php echo $_COOKIE['classify'] ?>&order=score">评价</a><i class="fa fa fa-arrow-up"></i><b class="fa fa-arrow-down"></b></li>
            </ul>
        </div>
        <div class="content_books">
            <?php
            $num=12;    //一页显示多少个
            $count=count($arr_new);     //总个数
            $pageCount=ceil($count/$num);      //总页数
            $page=1;                //当前页数
            if(isset($_GET['page'])){
                $page=(int)$_GET['page'];
            }
            $place=$num*($page-1);
            $page_arr=array_slice($arr_new,$place,$num);
            foreach($page_arr as $key=>$value){
                $id=$value['id']-1;
                echo <<<s
                        <dl>
                <dt><a href="shop.php?id={$id}"><img src="images/{$value['imgurc']}" alt="new book"></a></dt>
                <dd>
                    <h3><a href="shop.php?id={$id}">{$value['bookname']}</a></h3>
                    <p>销量:<span>{$value['sales']}</span>&nbsp;&nbsp;&nbsp;&nbsp;评分:<span>{$value['score']}</span>&nbsp;&nbsp;&nbsp;热搜:<span>{$value['hot']}</span></p>
                    <span><del>￥{$value['Original']}</del><b>￥{$value['price']}</b>&nbsp;&nbsp;&nbsp;折扣:{$value['discount']}</span>
                </dd>
            </dl>
s;
            }
            ?>
            <div class="pages">
                <?php
                //上上一页
                $lastBefore=$page-2;
                //上一页
                $lastPage=$page-1;
                //下一页
                $nextPage=$page+1;
                //下下一页
                $nextAfter=$page+2;
                if($pageCount>=9){
                    if($page==1){
                        echo <<<tagname1
            <a href="javascript:void(0)" class='active'>{$page}</a>
            <a href="books.php?classify={$_COOKIE['classify']}&order={$_COOKIE['order']}&page={$nextPage}">{$nextPage}</a>
            <a href="books.php?classify={$_COOKIE['classify']}&order={$_COOKIE['order']}&page={$nextAfter}">{$nextAfter}</a>
            <a href="books.php?classify={$_COOKIE['classify']}&order={$_COOKIE['order']}&page={$nextPage}">下一页</a>
            <a href="books.php?classify={$_COOKIE['classify']}&order={$_COOKIE['order']}&page={$pageCount}">最后一页</a>
tagname1;
                    }elseif($page==$pageCount){
                        echo <<<tagname1
            <a href="books.php?classify={$_COOKIE['classify']}&order={$_COOKIE['order']}&page=1">第一页</a>
            <a href="books.php?classify={$_COOKIE['classify']}&order={$_COOKIE['order']}&page={$lastPage}">上一页</a>
            <a href="books.php?classify={$_COOKIE['classify']}&order={$_COOKIE['order']}&page={$lastBefore}">{$lastBefore}</a>
            <a href="books.php?classify={$_COOKIE['classify']}&order={$_COOKIE['order']}&page={$lastPage}">$lastPage</a>
            <a href="javascript:void(0)" class='active'>{$page}</a>
tagname1;
                    }elseif($page==2){
                        echo <<<tagname1
            <a href="books.php?classify={$_COOKIE['classify']}&order={$_COOKIE['order']}&page=1">第一页</a>
            <a href="books.php?classify={$_COOKIE['classify']}&order={$_COOKIE['order']}&page={$lastPage}">上一页</a>
            <a href="books.php?classify={$_COOKIE['classify']}&order={$_COOKIE['order']}&page={$lastPage}">$lastPage</a>
            <a href="javascript:void(0)" class='active'>{$page}</a>
            <a href="books.php?classify={$_COOKIE['classify']}&order={$_COOKIE['order']}&page={$nextPage}">{$nextPage}</a>
            <a href="books.php?classify={$_COOKIE['classify']}&order={$_COOKIE['order']}&page={$nextAfter}">{$nextAfter}</a>
            <a href="books.php?classify={$_COOKIE['classify']}&order={$_COOKIE['order']}&page={$nextPage}">下一页</a>
            <a href="books.php?classify={$_COOKIE['classify']}&order={$_COOKIE['order']}&page={$pageCount}">最后一页</a>
tagname1;
                    }elseif($page==($pageCount-1)){
                        echo <<<tagname1
            <a href="books.php?classify={$_COOKIE['classify']}&order={$_COOKIE['order']}&page=1">第一页</a>
            <a href="books.php?classify={$_COOKIE['classify']}&order={$_COOKIE['order']}&page={$lastPage}">上一页</a>
            <a href="books.php?classify={$_COOKIE['classify']}&order={$_COOKIE['order']}&page={$lastBefore}">{$lastBefore}</a>
            <a href="books.php?classify={$_COOKIE['classify']}&order={$_COOKIE['order']}&page={$lastPage}">$lastPage</a>
            <a href="javascript:void(0)" class='active'>{$page}</a>
            <a href="books.php?classify={$_COOKIE['classify']}&order={$_COOKIE['order']}&page={$nextPage}">{$nextPage}</a>
            <a href="books.php?classify={$_COOKIE['classify']}&order={$_COOKIE['order']}&page={$nextPage}">下一页</a>
            <a href="books.php?classify={$_COOKIE['classify']}&order={$_COOKIE['order']}&page={$pageCount}">最后一页</a>
tagname1;
                    }else{
                        echo <<<tagname1
            <a href="books.php?classify={$_COOKIE['classify']}&order={$_COOKIE['order']}&page=1">第一页</a>
            <a href="books.php?classify={$_COOKIE['classify']}&order={$_COOKIE['order']}&page={$lastPage}">上一页</a>
            <a href="books.php?classify={$_COOKIE['classify']}&order={$_COOKIE['order']}&page={$lastBefore}">{$lastBefore}</a>
            <a href="books.php?classify={$_COOKIE['classify']}&order={$_COOKIE['order']}&page={$lastPage}">$lastPage</a>
            <a href="javascript:void(0)" class='active'>{$page}</a>
            <a href="books.php?classify={$_COOKIE['classify']}&order={$_COOKIE['order']}&page={$nextPage}">{$nextPage}</a>
            <a href="books.php?classify={$_COOKIE['classify']}&order={$_COOKIE['order']}&page={$nextAfter}">{$nextAfter}</a>
            <a href="books.php?classify={$_COOKIE['classify']}&order={$_COOKIE['order']}&page={$nextPage}">下一页</a>
            <a href="books.php?classify={$_COOKIE['classify']}&order={$_COOKIE['order']}&page={$pageCount}">最后一页</a>
tagname1;
                    }
                }else if($pageCount==2){
                    /*
                    for($i=1;$i<=$pageCount;$i++){*/
                    if($page==1){
                        echo <<<tagname4
            <a href="javascript:void(0)" class='active'>{$page}</a>
            <a href="books.php?classify={$_COOKIE['classify']}&order={$_COOKIE['order']}&page={$nextPage}">{$nextPage}</a>
tagname4;
                    }else{
                        echo <<<tagname4
            <a href="books.php?classify={$_COOKIE['classify']}&order={$_COOKIE['order']}&page={$lastPage}">{$lastPage}</a>
            <a href="javascript:void(0)" class='active'>{$page}</a>
tagname4;
                    }

                }else{
                    echo <<<tagname4
            <a href="javascript:void(0)" class='active'>{$page}</a>
tagname4;
                }
                ?>
            </div>
        </div>
    </div>
</div>

<!-------------引进尾部------------>
<?php
include 'footer.html';
?>

<script src="js/jquery-2.2.4.js"></script>
<script src="js/books.js"></script>
</body>
</html>