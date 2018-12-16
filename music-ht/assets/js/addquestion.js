document.getElementById("question").onclick=function() {
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
            alert("添加成功");
            window.location.href="question.html";
        }
    })
}