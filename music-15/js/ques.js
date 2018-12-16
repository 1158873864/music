
var list=new Array();
var currentid=0;
var point=0;
var lastIs=0;
$.get("php/getquestion.php" ,async =false,function (data) {
    var temp = data.split("\n");
    var temp1 = temp[temp.length - 1];
    var questionlist = temp1.split(",");
    for (var i = 0; i < questionlist.length - 1; i++) {
        var question = questionlist[i].split(" ");
        list.push(question);
    }
    changepage(0);
})

function changepage(is) {
    if (is == 1) {
        lastIs=parseInt(list[currentid - 1][4]);
        point = point + parseInt(list[currentid - 1][4]);
    }
    else if (is == 2) {
        lastIs=parseInt(list[currentid - 1][5]);
        point = point + parseInt(list[currentid - 1][5]);
    }
    else if(is==3){

        point=point-lastIs;
        lastIs=0;
        if(currentid>1) {
            currentid--;
            currentid--;
        }
        document.getElementById("p").innerText = list[currentid][0];
        document.getElementById("topic").innerText = list[currentid][1];
        document.getElementById("A").innerText=list[currentid][2];
        document.getElementById("B").innerText = list[currentid][3];
    }
    if (currentid < list.length) {
		document.getElementById("p").innerText = list[currentid][0];
    document.getElementById("topic").innerText = list[currentid][1];
    document.getElementById("A").innerText=list[currentid][2];
    document.getElementById("B").innerText = list[currentid][3];
    currentid++;
    }
    else{
        $.post("php/calresult.php" ,{point:point},function (data) {

        })
        window.location.href="Pressure_result2.html";
    }
}