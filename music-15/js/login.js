document.getElementById("loginbutton").onclick=function() {
    var username=$("#username").val();
    var password=$("#password").val();
    $.post("php/login.php", { username:username,password:password} ,function (data){
        var result=data.substring(data.length-1);
        if(result=="1"){

            var storage=window.localStorage;
            storage['has']='yes';

            alert("登录成功");
            $.get("php/getzaixian.php",function (data) {
                var temp = data.split("\n");
                var temp1 = temp[temp.length - 1];
                var r=parseInt(temp1)+1;
                $.post("php/updatezaixian.php",{number:r},function (data) {

                })
                window.location.href="index_logined.html";
            })

        }
        else{
            alert("用户名不存在或密码错误！");
        }
    })
}