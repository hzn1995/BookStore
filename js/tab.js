/**
 * Created by Administrator on 2017/2/18.
 */
    window.onload= function () {
        

//头部选项卡
    var menu=document.querySelectorAll(".search_tab a");
    var search_top=document.getElementsByClassName("search_top")[0];
    var search_top_menu=document.getElementsByClassName("search_top_menu")[0];
    var search_form=document.getElementsByClassName("search_form")[0];
    var search_book_form=document.getElementsByClassName("search_book_form")[0];
    var index=0;
    for (var i=0;i<menu.length ;i++ )
    {
        menu[i].index=i;
        menu[i].onclick=function(){
            for (var j=0;j<menu.length;j++ )
            {
                menu[j].className="";
            }
            menu[this.index].className="active";
            switch (this.index){
                case 0:
                    search_form.style.display="block";
                    search_book_form.style.display="none";
                    search_top_menu.style.display="none";
                    break;
                case 1:
                    search_form.style.display="none";
                    search_book_form.style.display="block";
                    search_top_menu.style.display="block";
                    break;
                case 2:
                    search_form.style.display="none";
                    search_book_form.style.display="none";
                    search_top_menu.style.display="none";
            }
        }

    }

    };





