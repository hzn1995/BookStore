<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>网上图书商城主页</title>
    <!--引入重置默认样式css文件-->
    <link rel="stylesheet" href="css/reset.css"/>
    <link rel="stylesheet" href="css/index_main.css">
    <link rel="icon" href="images/tb.ico">
</head>
<body>
<!--引入头部-->
<?php
    echo include("header.php");
?>
<?php
    include("mysql.php");
?>
<div id="container">
    <!--轮播部分-->
    <div class="Carousel clearflx">
        <div class="Carousel_small">
            <ul>
                <li><img src="images/lba.jpg" alt="图片"></li>
                <li><img src="images/lbb.jpg" alt="图片"></li>
                <li><img src="images/lbc.jpg" alt="图片"></li>
                <li><img src="images/lbd.jpg" alt="图片"></li>
            </ul>
        </div>
        <div class="Carousel_big" style="top: -1560px">
            <img src="images/lba.jpg" alt="图片">
            <img src="images/lbd.jpg" alt="图片">
            <img src="images/lbc.jpg" alt="图片">
            <img src="images/lbb.jpg" alt="图片">
            <img src="images/lba.jpg" alt="图片">
            <img src="images/lbd.jpg" alt="图片">
        </div>
        <div class="carousel_shadow" style="top: 0px"><img src="images/carousel_shadow.png" alt="阴影"></div>
    </div>
    <!--精品电子书-->
    <div class="Boutique clearflx">
        <!--精品电子书-->
        <div class="Boutique_book">
            <div class="Boutique_book_top">
                <h2>精品电子书</h2>
                <a href="books.php">查看更多</a>
            </div>
            <div class="Boutique_book_bottom">
                <?php
                        for($i=0;$i<3;$i++){
                            $q='';
                            switch($i){
                                case 1:
                                case 2: $q='style="display: none"';
                                break;
                            }
                            echo '<div class="Boutique_book_top_book" '.$q.'>';
                            for($j=0;$j<4;$j++){
                                $id=$j+4*$i;
                                echo <<<a
                            <dl class="clearflx">
                         <dt><img src="images/{$arr2[$j+4*$i]['url']}" alt="img"></dt>
                          <dd>
                            <h3><a href="shop.php?idbook={$id}">{$arr2[$j+4*$i]['booksname']}</a></h3>
                            <span><i>{$arr2[$j+4*$i]['author']}</i><b>￥{$arr2[$j+4*$i]['price']}</b></span>
                            <p>{$arr2[$j+4*$i]['introduction']}</p>
                        </dd>
                    </dl>
a;
                            }
                            echo '</div>';
                }
                ?>
            </div>
            <div class="Boutique_spot">
                <span>&lt;</span>
                <ul>
                    <li class="active"></li>
                    <li></li>
                    <li></li>
                </ul>
                <span>&gt;</span>
            </div>
        </div>
        <!--畅销榜-->
        <div class="Selling">
            <div class="Boutique_book_top">
                <h2>畅销书</h2>
                <a href="books.php">查看更多</a>
            </div>
            <div class="Selling_bottom">
                <?php
                //对销量进行逆向排序
                arsort($arr_sales);
                $num=1;
                foreach($arr_sales as $key=>$value){
                    if($num>12){
                        break;
                    }
                    else{
                         echo <<<s
                                <dl class="clearflx">
                    <dt>$num</dt>
                    <dd class="clearflx">
                        <h4><a href="shop.php?id={$key}">{$arr[$key]['bookname']}</a></h4>
                        <b>￥{$arr[$key]['price']}</b>
                    </dd>
                </dl>
s;
                        $num++;
                    }
                }
                ?>
            </div>
        </div>
    </div>
    <!--新书上架-->
    <div class="newbook">
        <div class="newbook_top">
            <h2>新书上架</h2>
            <a href="books.php">查看更多</a>
        </div>
        <div class="newbook_middle">

            <?php
                //获取随机数
            //第一种
            /*
            $Number=range(1,162);
            shuffle($Number);
            for($i=0;$i<4;$i++){
                $ranNumber[]=$Number[$i];
            }
            var_dump($ranNumber);
            */
            //第二种
            $Number = range(1,162);
            $ranNumber=array_rand($Number,8);

            foreach($ranNumber as $key=>$value){
                echo <<<TagName
                <dl>
                <dt><a href="shop.php?id={$value}"><img src="images/{$arr[$value]['imgurc']}" alt="new book"></a></dt>
                <dd>
                    <h3><a href="shop.php?id={$value}">{$arr[$value]['bookname']}</a></h3>
                    <span><del>￥{$arr[$value]['Original']}</del><b>￥{$arr[$value]['price']}</b></span>
                </dd>
            </dl>
TagName;

            }
            ?>
        </div>
    </div>
    <!--特价精选-->
    <div class="newbook">
        <div class="newbook_top">
            <h2>特价精选</h2>
            <a href="books.php">查看更多</a>
        </div>
        <div class="newbook_middle">

            <?php
            //对价格进行顺序排序
            asort($arr_price);
            $num=1;
            foreach($arr_price as $key=>$value){
            if($num>8){
                break;
            }
            else {
                echo <<<TagName
                <dl>
                <dt><a href="shop.php?id={$key}"><img src="images/{$arr[$key]['imgurc']}" alt="new book"></a></dt>
                <dd>
                    <h3><a href="shop.php?id={$key}">{$arr[$key]['bookname']}</a></h3>
                    <span><del>￥{$arr[$key]['Original']}</del><b>￥{$value}</b></span>
                </dd>
            </dl>
TagName;
                $num++;
            }
            }
            ?>
        </div>
        </div>

    <!--图书排行-->
    <div class="newbook">
        <div class="newbook_top">
            <h2>图书排行</h2>
            <?php
            ?>
            <div class="order">
                <a  href="javascript:void(0)" class="active">销量排行</a>
                <a  href="javascript:void(0)">热搜排行</a>
                <a  href="javascript:void(0)">好评排行</a>
            </div>
        </div>
        <div class="newbook_middle order_book">
            <?php
            array_order($arr_sales,$arr);
            ?>
        </div>
        <div class="newbook_middle order_book hide">
            <?php
            array_order($arr_hot,$arr);
            ?>
        </div>
        <div class="newbook_middle order_book hide">
            <?php
            array_order($arr_score,$arr);
            ?>
        </div>
        <?php
        function array_order($order,$arr){
            arsort($order);
            $num=1;
            foreach($order as $key=>$value){
                if($num<=8) {
                    echo <<<tagname1
                        <dl>
                <dt><a href="shop.php?id={$key}"><img src="images/{$arr[$key]['imgurc']}" alt="new book"></a></dt>
                <dd>
                    <h3><a href="shop.php?id={$key}">{$arr[$key]['bookname']}</a></h3>
                    <span><del>￥{$arr[$key]['Original']}</del><b>￥{$arr[$key]['price']}</b></span>
                </dd>
            </dl>
tagname1;
                    $num++;
                }else{
                    break;
                }
            }
        }
        ?>
    </div>
</div>

<!--引入尾部-->
<?php
    include "footer.html";
?>
<script src="js/jquery-2.2.4.js"></script>
<script src="js/Carousel.js"></script>
<script src="js/index_ajax.js"></script>
</body>
</html>