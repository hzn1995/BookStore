/**
 * Created by Administrator on 2017/2/24.
 */
//获取DOM元素
window.onload=function(){
        //销量滑动事件
        $(".order a:eq(0)").mouseover(function () {
            $(this).addClass('active').siblings().removeClass('active');
            $(".order_book").eq(0).removeClass("hide").siblings(".order_book").addClass("hide");
        });

        //热搜滑动事件
        $(".order a:eq(1)").mouseover(function () {
            $(this).addClass('active').siblings().removeClass('active');
            $(".order_book").eq(1).removeClass("hide").siblings(".order_book").addClass("hide");
        });

        //好评滑动事件
        $(".order a:eq(2)").mouseover(function () {
            $(this).addClass('active').siblings().removeClass('active');
            $(".order_book").eq(2).removeClass("hide").siblings(".order_book").addClass("hide");
        });


};