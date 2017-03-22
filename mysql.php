<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/2/23
 * Time: 9:58
 */

$h='localhost';
$u='root';
$p='';

//连接数据库
$conn=@mysql_connect($h,$u,$p) or die("数据库连接失败！");

//选择数据库
$db=@mysql_select_db('bookshop') or die("数据库选择失败！");

//设置字符集
mysql_query("set names utf8");

//组装sql语句
$sql="select * from books";

//执行sql语句
$result=mysql_query($sql);

$arr=array();
while($row=mysql_fetch_assoc($result)){
    $arr[]=$row;
}

foreach($arr as $key=>$value){
    $arr_id[]=$arr[$key]['id'];                   //序号
    $arr_bookname[]=$arr[$key]['bookname'];       //书名
    $arr_author[]=$arr[$key]['author'];           //作者
    $arr_classify[]=$arr[$key]['classify'];       //归类
    $arr_price[]=$arr[$key]['price'];             //价格
    $arr_Original[]=$arr[$key]['Original'];       //原价
    $arr_discount[]=$arr[$key]['discount'];       //折扣
    $arr_sales[]=$arr[$key]['sales'];     //销量
    $arr_hot[]=$arr[$key]['hot'];     //访问量
    $arr_score[]=$arr[$key]['score'];     //好评量
    $arr_press[]=$arr[$key]['Press'];     //出版社
    $arr_imgurc[]=$arr[$key]['imgurc'];   //图片路径
    $arr_introduction[]=$arr[$key]['introduction'];     //内容介绍
}
/*
var_dump($arr);
var_dump($arr_id);
var_dump($arr_bookname);
var_dump($arr_author);
var_dump($arr_classify);
var_dump($arr_price);
var_dump($arr_Original);
var_dump($arr_discount);
var_dump($arr_sales);
var_dump($arr_press);
var_dump($arr_imgurc);
var_dump($arr_introduction);
*/
//对销量进行逆向排序
arsort($arr_sales);
//var_dump($arr_sales);


$sql2="select * from index_boutique_book";

//执行sql语句
$result2=mysql_query($sql2);

$arr2=array();
while($row2=mysql_fetch_assoc($result2)){
    $arr2[]=$row2;

}
foreach($arr2 as $key=>$value){
    $arr2_id[]=$arr2[$key]['id'];
    $arr2_booksname[]=$arr2[$key]['booksname'];       //书名
    $arr2_author[]=$arr2[$key]['author'];           //作者
    $arr2_price[]=$arr2[$key]['price'];             //价格
    $arr2_url[]=$arr2[$key]['url'];   //图片路径
    $arr2_introduction[]=$arr2[$key]['introduction'];     //内容介绍
}
//var_dump($arr2);


