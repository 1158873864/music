var lastnumber;
$.get("assets/php/getthisquestion.php" ,async =false,function (data){
    var temp=data.split("\n");
    var temp1=temp[temp.length-1];
    var question=temp1.split(" ");
    document.getElementById("number").value=question[0];
    document.getElementById("name").value=question[1];
    document.getElementById("Acontent").value=question[2];
    document.getElementById("Bcontent").value=question[3];
    document.getElementById("A").value=question[4];
    document.getElementById("B").value=question[5];
    lastnumber=question[0];
})
document.getElementById("question").onclick=function() {
    $.post("assets/php/deletequestion.php", {number:lastnumber} ,function (data){

    })
    var name=$("#name").val();
    var number=$("#number").val();
    var Acontent=$("#Acontent").val();
    var Bcontent=$("#Bcontent").val();
    var A=$("#A").val();
    var B=$("#B").val();
    var myDate = new Date();
    var date=myDate.toLocaleDateString();
    $.post("assets/php/addquestion.php", {name:name,number:number,Acontent:Acontent,Bcontent:Bcontent,A:A,B:B,date:date} ,function (data){
        var result=data.substring(data.length-1);
        if(result=="1"){
            alert("修改成功");
            window.location.href="question.html";
        }
    })
}