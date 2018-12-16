var last;
$.get("assets/php/getthisrole.php" ,async =false,function (data){
    var temp=data.split("\n");
    var temp1=temp[temp.length-1];
    var question=temp1.split("---");
    document.getElementById("name").value=question[0];
    last=question[0];
    $.post("assets/php/getrolebyname.php" ,{name:question[0]},function (data){
        var temp=data.split("\n");
        var temp1=temp[temp.length-1];
        var question=temp1;
        var limit=question.split("...");
        for(var i=1;i<=14;i++){
            for(var j=0;j<limit.length;j++){
                if(parseInt(limit[j])==i){
                    document.getElementById("c"+i).checked=true;
                }
            }
        }
    })

})

document.getElementById("ad").onclick=function() {
    $.post("assets/php/deleterole.php", {name:last} ,function (data){

    })
    var name = $("#name").val();
    var limits = "";
    if (document.getElementById("c1").checked) {
        limits = limits + "1" + "...";
    }
    if (document.getElementById("c2").checked) {
        limits = limits + "2" + "...";
    }
    if (document.getElementById("c3").checked) {
        limits = limits + "3" + "...";
    }
    if (document.getElementById("c4").checked) {
        limits = limits + "4" + "...";
    }
    if (document.getElementById("c5").checked) {
        limits = limits + "5" + "...";
    }
    if (document.getElementById("c6").checked) {
        limits = limits + "6" + "...";
    }
    if (document.getElementById("c7").checked) {
        limits = limits + "7" + "...";
    }
    if (document.getElementById("c8").checked) {
        limits = limits + "8" + "...";
    }
    if (document.getElementById("c9").checked) {
        limits = limits + "9" + "...";
    }
    if (document.getElementById("c10").checked) {
        limits = limits + "10" + "...";
    }
    if (document.getElementById("c11").checked) {
        limits = limits + "11" + "...";
    }
    if (document.getElementById("c12").checked) {
        limits = limits + "12" + "...";
    }
    if (document.getElementById("c13").checked) {
        limits = limits + "13" + "...";
    }
    if (document.getElementById("c14").checked) {
        limits = limits + "14"+"...";
    }
    $.post("assets/php/addrole.php", {name: name,limits: limits}, function (data) {
        var result = data.substring(data.length - 1);
        if (result == "1") {
            alert("修改成功");
            window.location.href = "role.html";
        }
    })
}