var username = document.getElementById("username");
var number = document.getElementById("num");
var head=document.getElementById("head");
$.get("php/getuser.php" ,function (data){
    var temp=data.split("\n");
    var temp1=temp[temp.length-1].split(" ");
    username.innerText=temp1[0];
    number.innerText=temp1[4];
    if(temp1[8]==""){
        head.src="images/boy.jpg";
    }
    else {
        head.src = "../" + temp1[8];
    }
})