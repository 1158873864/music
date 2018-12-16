var lastnumber;
$.get("assets/php/getthisquestion.php" ,async =false,function (data){
    var temp=data.split("\n");
    var temp1=temp[temp.length-1];
    var question=temp1.split(" ");
    document.getElementById("min").value=question[0];
    document.getElementById("max").value=question[2];
    document.getElementById("pressure").value=question[3];
    document.getElementById("game").value=question[4];
    document.getElementById("myue").innerText=question[5];
    lastnumber=question[1];
})
document.getElementById("addbutton").onclick=function() {
    $.post("assets/php/deleteqResult.php", {number:lastnumber} ,function (data){

    })
    var number=$("#number").val();
    var min=$("#min").val();
    var max=$("#max").val();
    var pressure=$("#pressure").val();
    var game=$("#game").val();
    var result=$("#myue").val();
    var myDate = new Date();
    var date=myDate.toLocaleDateString();
    $.post("assets/php/addqResult.php", {number:number,min:min,max:max,pressure:pressure,game:game,result:result,date:date} ,function (data){
        var result=data.substring(data.length-1);
        if(result=="1"){
            alert("修改成功");
            window.location.href="question-jieguo.html";
        }
    })
}