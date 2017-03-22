<?php
ob_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>购物页面</title>
    <link rel="icon" href="images/tb.ico">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/shop_main.css">
    <script src="js/jquery-2.2.4.js"></script>
    <script src="js/shop.js"></script>
</head>
<body>
<?php
    include "header.php";
include "mysql.php";
?>
<?php
    if(isset($_GET['id'])||isset($_GET['idbook'])){
        if(isset($_GET['id']) && count($_GET['id'])>0){
            $arr_new=$arr[$_GET['id']];
        }else{
            switch($_GET['idbook']){
                case 0: $arr_new=$arr[1];
                    break;
                case 1: $arr_new=$arr[0];
                    break;
                case 2: $arr_new=$arr[2];
                    break;
                case 3: $arr_new=$arr[83];
                    break;
                case 4: $arr_new=$arr[99];
                    break;
                case 5: $arr_new=$arr[145];
                    break;
                default:$arr_new=$arr[105];
                    break;
            }
        }
    }else{
        exit;
    }
    $class=$arr_new['classify'];
    $name=$arr_new['bookname'];
    function classify($class){
        $cl=null;
        switch($class){
            case '文学': $cl=1;
                break;
            case '青春文学': $cl=2;
                break;
            case '小说': $cl=3;
                break;
            case '童书': $cl=4;
                break;
            case '科普读物': $cl=5;
                break;
            case '历史': $cl=6;
                break;
            case '生活': $cl=7;
                break;
            case '心理': $cl=8;
                break;
            case '教育': $cl=9;
                break;
            case '经管': $cl=10;
                break;
            case '成功励志': $cl=11;
                break;
            case '军事': $cl=12;
                break;
        }
        return $cl;
    }
    $cl=classify($class);
?>
<div id="container">
<!--    地址提示-->
    <div class="path_top">
        <p><a href="index.php">寻梦小屋</a>&gt;&gt;<a href="books.php">图书专区</a>&gt;&gt;<a href="books.php?classify=<?php echo $cl ?>"><?php echo $class ?></a>&gt;&gt;<span><?php echo $name ?></span></p>
    </div>
<!--    图书信息-->
    <div class="book_content clearflx">
        <div class="book_shop fl">
            <div class="book_img fl">
                <img src="images/<?php echo $arr_new['imgurc'] ?>" alt="寻梦小屋" title="<?php echo $arr_new['bookname'] ?>">
            </div>
            <div class="book_info fl">
                <h5><?php echo $arr_new['bookname'] ?></h5>
                <p class="price">价格：￥<?php echo $arr_new['price'] ?></p>
                <p><span>原价：<del>￥<?php echo $arr_new['Original'] ?></del></span>
                    <span>折扣：<?php echo $arr_new['discount'] ?></span>
                </p>
                <p><span>评分：<?php echo $arr_new['score'] ?> 分</span><span>销量：<?php echo $arr_new['sales'] ?></span></p>
                <p>作者：<?php echo $arr_new['author'] ?></p>
                <p>出版社：<?php echo $arr_new['Press'] ?></p>
<!--                购物车-->
                <div>
                    <p class="num">
                       数量：
                        <button class="reduce">-</button>
                        <input type="text" value="1" class="number">
                        <button class="add">+</button>
                        <span class="error hide">每个用户单个商品最多购买十件</span>
                    </p>
                    <p>总价：<span class="total"></span></p>
                    <p class="xd">
                        <button>下单</button>
                        <button>加入购物车</button>
                    </p>
                    <p class="love">收藏
                        <span class="fa fa-star-o"></span>
                    </p>
                </div>
            </div>
            <div class="book_js clear">
                <hr><hr><hr>
                <div>
                    <h1>内容介绍</h1>
                    <p>
                        <?php echo $arr_new['introduction']  ?>
                    </p>
                </div>
            </div>
        </div>
        <aside class="fr">
            <div class="groom">
                <h4>看过商品的还看过</h4>
                <div>
                    <?php
                    $class=$arr_new['classify'];
                    $sql="select * from books where classify='$class'";
                    $result=mysql_query($sql);
                    $class=array();
                    while($row=mysql_fetch_assoc($result)){
                        $class[]=$row;
                    }
                    $class_num=array_rand($class,4);
                    foreach($class_num as $key=>$value){
                         $a=$class[$value]['id']-1;
                        echo <<<tageName
                    <dl>
                         <dt><a href="shop.php?id={$a}"><img src="images/{$class[$value]['imgurc']}" alt="{$class[$value]['bookname']}"></a></dt>
                          <dd>
                            <h3><a href="shop.php?id={$a}">{$class[$value]['bookname']}</a></h3>
                            <span><i>{$class[$value]['author']}</i><b>￥{$class[$value]['price']}</b></span>
                        </dd>
                    </dl>
tageName;
                    }
                    ?>

                </div>
            </div>
        </aside>

    </div>
</div>
<?php
include "footer.html";
?>
</body>
</html>