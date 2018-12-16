var v;
$.get("php/getthisvideo.php" ,async =false,function (data) {
    var temp=data.split("\n");
    var temp1=temp[temp.length-1];
    var question=temp1.split("???");
    document.getElementById("name").innerText=question[1];
    document.getElementById("t").innerText=question[1];
    document.getElementById("daoyan").innerText="导演:"+question[3];
    document.getElementById("bianju").innerText="编剧:"+question[4];
    document.getElementById("area").innerText="制片地区:"+question[5];
    document.getElementById("word").innerText="语言:"+question[6];
    document.getElementById("len").innerText="片长:"+question[7];
    document.getElementById("image").src="../"+question[8];
    document.getElementById("brief").innerText=question[9];
    v=question[2];
})


function setthisquestion(){
    var thisquestion=v;
    $.post("php/setthisquestion.php" ,{thisquestion:thisquestion},function (data){

    })
}