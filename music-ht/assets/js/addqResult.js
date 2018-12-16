document.getElementById("addbutton").onclick=function() {
    var min=$("#min").val();
    var max=$("#max").val();
    var obj1= document.getElementById("pressure"); //定位id
    var index1 = obj1.selectedIndex; // 选中索引
    var pressure = obj1.options[index1].text; // 选中文本
    var obj2= document.getElementById("game"); //定位id
    var index2 = obj2.selectedIndex; // 选中索引
    var game = obj2.options[index2].text; // 选中文本
    var result=$("#myue").val();
    var myDate = new Date();
    var date=myDate.toLocaleDateString();

    $.post("assets/php/addqResult.php", {min:min,max:max,pressure:pressure,game:game,result:result,date:date} ,function (data){
        alert("添加成功");
        window.location.href="question-jieguo.html";
    })
}