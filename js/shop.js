/**
 * Created by Administrator on 2017/3/8.
 */

//add
$(window).load(function () {
   var total=$('.price').html();
    total=total.substr(4);
    $(".total").html("￥"+total);
    $(".add").click(function () {
        var  num=$(".number").val();
            num++;
   //     $(".number").val(num);
        toalcPrice(num)
    });
    $(".reduce").click(function () {
        var  num=$(".number").val();
        if(num>1){
            num--;
   //         $(".number").val(num);
        }
        toalcPrice(num);
    });
    $(".number").change(function () {
        var  num=$(".number").val();
        toalcPrice(num);
    });

    //总价更新
    function toalcPrice(num){
        if(num>1 && num<10){
            $(".reduce").attr('disabled');
            $(".add").attr('disabled');
            $('.error').removeClass('show').addClass('hide');
        }else if(num>=10){
            num=10;
    //        $(".number").val(num);
            $('.error').removeClass('hide').addClass('show');
            $(this).attr({'disabled':'disabled'});
        }else{
            num=1;
            $(this).attr({'disabled':'disabled'});
        }
        var totalPrice=total*num;
        totalPrice=totalPrice.toFixed(2);
        $(".number").val(num);
        $(".total").html("￥"+totalPrice);
    }


    $(".love span.fa").click(function () {
        $(this).removeClass('fa-star-o').addClass('fa-star').css({'color':'#C53929'});
    })
});