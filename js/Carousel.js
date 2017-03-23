/**
 * Created by Administrator on 2017/2/18.
 */
//获取class为Carousel的div
    var box=document.getElementsByClassName("Carousel")[0];
//获取class为Carousel_big的div
    var Carousel_div = document.getElementsByClassName("Carousel_big")[0];
//获取class为Carousel_big的div里面的img
    var Carousel_img = document.querySelectorAll(".Carousel_big img");
//获取Carousel_div的高度
    var divHeight = Carousel_div.offsetHeight;
//获取Carousel_img的高度
    var imgHeight = Carousel_img[0].height;
//获取class为carousel_shadow的div
    var shadow = document.getElementsByClassName("carousel_shadow")[0];
//获取shadow的高
    var shadoeHeight = shadow.offsetHeight;
//获取shadow距离顶部的高度
    var shadow_top = shadow.style.top;
//获取Carousel_div距离顶部的高度
    var Carousel_div_top = Carousel_div.style.top;
//设置周期时间函数变量
    var time1 = null;
//设置一次性时间函数变量
    var time2 = null;

//图片移动函数
    function move() {
        //设置位移次数
        var cs = 13;
        //设置每次位移距离
        var jl = imgHeight / cs;
        //设置位移总距离
        var zjl = 0;
        //图片滑动函数
        function go() {
            Carousel_div.style.top = parseInt(Carousel_div.style.top) + jl + 'px';
            zjl += jl;
            if (zjl == imgHeight) {
                clearTimeout(time2);
                time2 = null;
                zjl = 0;
            }
            else {
                time2 = setTimeout(go, 80);
            }
        }
        if(parseInt(Carousel_div.style.top)>-390)
        {
            Carousel_div.style.top=-1560+'px';
        }
        go();
        if(parseInt(shadow.style.top)<300){
            shadow.style.top=(parseInt(shadow.style.top)+100)+'px';
        }else{
            shadow.style.top=parseInt(shadow_top)+'px';
        }
    }

    //当鼠标进入图片时周期函数停止
    box.onmouseover=function() {
        if (time1 != null) {
            clearInterval(time1);
            time1=null;
        }
    };
    box.onmouseout=function(){
        time1=setInterval(move,3000);
    };
    time1 = setInterval(move, 3000);
//}
//Carousel();

//首页选项卡
//function Boutique(){
    var Boutique_books=document.getElementsByClassName("Boutique_book_top_book");
    var Boutique_li=document.querySelectorAll(".Boutique_spot li");
    var btn_left=document.querySelectorAll(".Boutique_spot span")[0];
    var btn_right=document.querySelectorAll(".Boutique_spot span")[1];
    var num=0;
    //点击li按钮时
    for(var i=0;i<Boutique_li.length;i++){
        Boutique_li[i].index=i;
        Boutique_li[i].onclick= function () {
            for(var j=0;j<Boutique_li.length;j++){
                Boutique_li[j].className="";
                Boutique_books[j].style.display="none";
            }
            Boutique_li[this.index].className="active";
            Boutique_books[this.index].style.display="flex";
            num=this.index;
        }
    }
    //点击左按钮时
    btn_left.onclick= function () {
        if(num==0){
            num=2;
        }
        else{
            num--
        }
        Boutique_li[num].onclick();
    };
    //点击右按钮时
    btn_right.onclick= function () {
        if(num==2){
            num=0;
        }
        else{
            num++
        }
        Boutique_li[num].onclick();
    };

