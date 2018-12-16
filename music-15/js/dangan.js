var number=document.getElementById("number");
var username = document.getElementById("username");
var na=document.getElementById("name");
var date=document.getElementById("dateinfo");
var sex=document.getElementById("sex");
var xueli=document.getElementById("xueli");
var minzu=document.getElementById("minzu");
var password=document.getElementById("password");
var head=document.getElementById("head");
$.get("php/getuser.php" ,function (data){
    var temp=data.split("\n");
    var temp1=temp[temp.length-1].split(" ");
    username.value=temp1[0];
    number.value=temp1[1];
    na.value=temp1[2];
    date.value=temp1[3];
    sex.value=temp1[4];
    xueli.value=temp1[5];
    minzu.value=temp1[6];
    password.value=temp1[7];
    if(temp1[8]==""){
        head.src="images/boy.jpg";
    }
    else {
        head.src = "../" + temp1[8];
    }
})


document.getElementById("changebutton").onclick=function() {
    var username=$("#username").val();
    var name=$("#name").val();
    var obj = document.getElementById("sex"); //定位id
    var index = obj.selectedIndex; // 选中索引
    var sex = obj.options[index].text; // 选中文本
    var xueli=$("#xueli").val();
    var minzu=$("#minzu").val();
    var pass=$("#password").val();
    var number =$("#number").val();
    var da=date.value;
    $.post("php/changeuser.php", { number:number,username: username, name:name,date:da,sex:sex,xueli:xueli,minzu:minzu,pass:pass } ,function (data){
        if(data.substr(0,1)=="1"){
            alert("修改成功");
            window.location.href="index_logined.html";
        }
    })



}