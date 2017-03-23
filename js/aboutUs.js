/**
 * Created by Administrator on 2017/2/28.
 */
$(function () {
   $("aside li").click(function () {
      var index=$("aside li").index(this);
      var divs=$(".board").eq(index);
      divs.removeClass("hide").siblings(".board").addClass("hide");
      $(".help_board h2").html($(this).children("a").html());
      $(this).addClass("active").siblings().removeClass("active");
   })
});