/**
 * Created by Administrator on 2017/2/25.
 */

//淡入淡出
$(".menu dt").click(function () {
    $(this).parent().siblings().children().removeClass('active');
    if($(this).hasClass('active')){
        $(this).removeClass('active');
    }else{
        $(this).addClass('active');
    }
    $(this).parent().siblings().children("dd").hide();
    $(this).siblings().toggle(1000);
    if($(this).children("i").hasClass('fa-chevron-circle-down')){
        $(this).children("i").removeClass("fa-chevron-circle-down");
        $(this).children("i").addClass('fa-chevron-circle-up');
    }else{
        $(this).children("i").removeClass("fa-chevron-circle-up");
        $(this).children("i").addClass('fa-chevron-circle-down');
    }
});


//点击事件
//
/*
$(".menu dd").click(function () {
    $books=$('.content_books');
    $p=$(this).parent().html();
    switch ($p){
        case $('.menu dl:eq(0)').html():
            ajax('post','books_check.php',{press:'letter'}, function (obj) {
                if(obj.status==200){
                    $books.html(obj.responseText);
                }else{
                    $books.html("系统原因，查询失败");
                }
            });
            break;
        case $('.menu dl:eq(1)').html():
            ajax('post','books_check.php',{press:'youth'}, function (obj) {
                if(obj.status==200){
                    $books.html(obj.responseText);
                }else{
                    $books.html("系统原因，查询失败");
                }
            });
            break;
        case $('.menu dl:eq(2)').html():
            ajax('post','books_check.php',{press:'story'}, function (obj) {
                if(obj.status==200){
                    $books.html(obj.responseText);
                }else{
                    $books.html("系统原因，查询失败");
                }
            });
            break;
        case $('.menu dl:eq(3)').html():
            ajax('post','books_check.php',{press:'children'}, function (obj) {
                if(obj.status==200){
                    $books.html(obj.responseText);
                }else{
                    $books.html("系统原因，查询失败");
                }
            });
            break;
        default :
            console.log(3);
            break;
    }
});

    */