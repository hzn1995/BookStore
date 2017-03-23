/**
 * Created by Administrator on 2017/2/26.
 */
function ajax(method,url,value,callback){
    //1.创建ajax对象
    var obj=null;
    if(window.XMLHttpRequest){
        obj=new XMLHttpRequest();
    }else if(window.ActiveXObject){
        obj=new ActiveXObject();
    }else{
        alert('你的浏览器不支持ajax对象,请升级或更换浏览器');
    }

    //2.判断传送方式
    var data=null;
    if(method=='post'){
        var str='';
        for(item in value){
            str+=item+"="+value[item]+"&";
        }
        str.substring(0,value.length-1);
        data=str;
    }else{
        data=true;
    }

    //3.打开操作
    obj.open(method,url,true);
    if(method=='post'){
        //设置头部
        obj.setRequestHeader("Content-type","application/x-www-form-urlencoded");
    }

    //4.绑定obj对象的状态改变事件
    obj.onreadystatechange=function(){
        if(obj.readyState==4) {
            callback(obj);
        }
    }

    //5.发送请求
    obj.send(data);
}
