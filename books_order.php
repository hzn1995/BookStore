<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/2/27
 * Time: 22:19
 */
//分页
if(isset($_GET['classify'])){
    cookie('classify',$_GET['classify']);
    function classify($arr1,$value){
        $sql="select * from books where classify='{$value}'";
        $result=mysql_query($sql);
        $arr1=array();
        while($row=mysql_fetch_assoc($result)){
            $arr1[]=$row;
        }
        return $arr1;
    }
    switch($_GET['classify']){
        case 1:  $arr_new=classify($arr_new,'文学');break;
        case 2:  $arr_new=classify($arr_new,'青春文学');break;
        case 3:  $arr_new=classify($arr_new,'小说');break;
        case 4:  $arr_new=classify($arr_new,'童书');break;
        case 5:  $arr_new=classify($arr_new,'科普读物');break;
        case 6:  $arr_new=classify($arr_new,'历史');break;
        case 7:  $arr_new=classify($arr_new,'生活');break;
        case 8:  $arr_new=classify($arr_new,'心理');break;
        case 9:  $arr_new=classify($arr_new,'教育');break;
        case 10:  $arr_new=classify($arr_new,'经管');break;
        case 11:  $arr_new=classify($arr_new,'成功励志');break;
        case 12:  $arr_new=classify($arr_new,'军事');break;
        default:
            $arr_new=$arr;
            break;
    }
}else{
    cookie('classify','');
}
if(isset($_GET['page'])){
    cookie('page',$_GET['page']);
}else{
    cookie('page','');
}
//排序
if(isset($_GET['order'])){
    cookie('order',$_GET['order']);
    //点击排序时进入
    if(count($_GET)==2){
        if(isset($_COOKIE['sort'][$_GET['order']])){
            if($_COOKIE['sort'][$_GET['order']]=='asc'){
                cookie('sort['.$_GET["order"].']','desc');
            }else{
                cookie('sort['.$_GET["order"].']','asc');
            }
        }else {
            cookie('sort['.$_GET["order"].']', 'asc');
        }
    }
    //点击分页时进入
    else{
        if(isset($_COOKIE['sort'][$_GET['order']])){
            if($_COOKIE['sort'][$_GET['order']]=='asc'){
                cookie('sort['.$_GET["order"].']','asc');
            }else{
                cookie('sort['.$_GET["order"].']','desc');
            }
        }
    }
}else{
    cookie('order','');
}
function cookie($var, $value, $time = 0, $path = '', $domain = '', $s = false)
{
    $_COOKIE[$var] = $value;
    if (is_array($value)) {
        foreach ($value as $k => $v) {
            setcookie($var . '[' . $k . ']', $v, $time, $path, $domain, $s);
        }
    } else {
        setcookie($var, $value, $time, $path, $domain, $s);
    }
}