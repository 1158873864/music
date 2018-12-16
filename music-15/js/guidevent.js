$("#your-alert-1").hide();
$("#your-alert-2").hide();
$("#your-alert-3").hide();
$("#your-alert-4").hide();
$("#your-alert-5").hide();
$("#your-alert-6").hide();
$("#your-alert-7").hide();
$("#your-alert-8").hide();
$("#page1").hide();
$("#page2").hide();
$("#page3").hide();
$("#page4").hide();
$("#page5").hide();
var list=new Array();
var firstID=0;
var theGroup=0;
$.get("php/getquestiontype.php" ,async =false,function (data){
    var temp=data.split("\n");
    var temp1=temp[temp.length-1];
    var questionlist=temp1.split(",");
    for(var i=0;i<questionlist.length-1;i++){
        var question=questionlist[i].split(" ");
        list.push(question);
    }
    changepage(1);
})
function setthisquestion(n){
    var q=list[firstID+n];
    var thisquestion=q[0]+" "+q[1]+" "+q[2];
    $.post("php/setthisarticletype.php" ,{thisquestion:thisquestion},function (data){

    })
}



function changegroup(to){
    $("#page1").show();
    $("#page2").show();
    $("#page3").show();
    $("#page4").show();
    $("#page5").show();
    if(to==1){
        if(theGroup!=0){
            theGroup=theGroup-1;
        }
    }
    else{
        theGroup=theGroup+1;

    }
    document.getElementById("page1").innerText=theGroup*5+1;
    document.getElementById("page2").innerText=theGroup*5+2;
    document.getElementById("page3").innerText=theGroup*5+3;
    document.getElementById("page4").innerText=theGroup*5+4;
    document.getElementById("page5").innerText=theGroup*5+5;


    changepage(1);
}
function changepage(page){
    $("#page1").show();
    $("#page2").show();
    $("#page3").show();
    $("#page4").show();
    $("#page5").show();
    firstID=(theGroup*5+page-1)*8;
    if(list.length<(theGroup*40+33)){
        $("#page5").hide();
        if(list.length<(theGroup*40+25)){
            $("#page4").hide();
            if(list.length<(theGroup*40+17)){
                $("#page3").hide();
                if(list.length<(theGroup*40+9)){
                    $("#page2").hide();
                    if(list.length<(theGroup*40+1)){
                        $("#page1").hide();
                    }
                }
            }
        }

    }
    if(list.length<(firstID+1)){
        $("#your-alert-1").hide();
        $("#your-alert-2").hide();
        $("#your-alert-3").hide();
        $("#your-alert-4").hide();
        $("#your-alert-5").hide();
        $("#your-alert-6").hide();
        $("#your-alert-7").hide();
        $("#your-alert-8").hide();
    }
    else if(list.length<(firstID+2)){
        $("#your-alert-1").show();
        document.getElementById("name"+(firstID%8+1)).innerText=list[firstID][1];
        document.getElementById("date"+(firstID%8+1)).src="../"+list[firstID][2];
        $("#your-alert-2").hide();
        $("#your-alert-3").hide();
        $("#your-alert-4").hide();
        $("#your-alert-5").hide();
        $("#your-alert-6").hide();
        $("#your-alert-7").hide();
        $("#your-alert-8").hide();
    }
    else if(list.length<(firstID+3)){
        $("#your-alert-1").show();
        $("#your-alert-2").show();
        document.getElementById("name"+(firstID%8+1)).innerText=list[firstID][1];
        document.getElementById("date"+(firstID%8+1)).src="../"+list[firstID][2];
        document.getElementById("name"+(firstID%8+2)).innerText=list[firstID+1][1];
        document.getElementById("date"+(firstID%8+2)).src="../"+list[firstID+1][2];
        $("#your-alert-3").hide();
        $("#your-alert-4").hide();
        $("#your-alert-5").hide();
        $("#your-alert-6").hide();
        $("#your-alert-7").hide();
        $("#your-alert-8").hide();
    }
    else if(list.length<(firstID+4)){
        $("#your-alert-1").show();
        $("#your-alert-2").show();
        $("#your-alert-3").show();
        document.getElementById("name"+(firstID%8+1)).innerText=list[firstID][1];
        document.getElementById("date"+(firstID%8+1)).src="../"+list[firstID][2];
        document.getElementById("name"+(firstID%8+2)).innerText=list[firstID+1][1];
        document.getElementById("date"+(firstID%8+2)).src="../"+list[firstID+1][2];
        document.getElementById("name"+(firstID%8+3)).innerText=list[firstID+2][1];
        document.getElementById("date"+(firstID%8+3)).src="../"+list[firstID+2][2];
        $("#your-alert-4").hide();
        $("#your-alert-5").hide();
        $("#your-alert-6").hide();
        $("#your-alert-7").hide();
        $("#your-alert-8").hide();
    }
    else if(list.length<(firstID+5)){
        $("#your-alert-1").show();
        $("#your-alert-2").show();
        $("#your-alert-3").show();
        $("#your-alert-4").show();
        document.getElementById("name"+(firstID%8+1)).innerText=list[firstID][1];
        document.getElementById("date"+(firstID%8+1)).src="../"+list[firstID][2];
        document.getElementById("name"+(firstID%8+2)).innerText=list[firstID+1][1];
        document.getElementById("date"+(firstID%8+2)).src="../"+list[firstID+1][2];
        document.getElementById("name"+(firstID%8+3)).innerText=list[firstID+2][1];
        document.getElementById("date"+(firstID%8+3)).src="../"+list[firstID+2][2];
        document.getElementById("name"+(firstID%8+4)).innerText=list[firstID+3][1];
        document.getElementById("date"+(firstID%8+4)).src="../"+list[firstID+3][2];
        $("#your-alert-5").hide();
        $("#your-alert-6").hide();
        $("#your-alert-7").hide();
        $("#your-alert-8").hide();
    }
    else if(list.length<(firstID+6)){
        $("#your-alert-1").show();
        $("#your-alert-2").show();
        $("#your-alert-3").show();
        $("#your-alert-4").show();
        $("#your-alert-5").show();
        document.getElementById("name"+(firstID%8+1)).innerText=list[firstID][1];
        document.getElementById("date"+(firstID%8+1)).src="../"+list[firstID][2];
        document.getElementById("name"+(firstID%8+2)).innerText=list[firstID+1][1];
        document.getElementById("date"+(firstID%8+2)).src="../"+list[firstID+1][2];
        document.getElementById("name"+(firstID%8+3)).innerText=list[firstID+2][1];
        document.getElementById("date"+(firstID%8+3)).src="../"+list[firstID+2][2];
        document.getElementById("name"+(firstID%8+4)).innerText=list[firstID+3][1];
        document.getElementById("date"+(firstID%8+4)).src="../"+list[firstID+3][2];
        document.getElementById("name"+(firstID%8+5)).innerText=list[firstID+4][1];
        document.getElementById("date"+(firstID%8+5)).src="../"+list[firstID+4][2];
        $("#your-alert-6").hide();
        $("#your-alert-7").hide();
        $("#your-alert-8").hide();
    }
    else if(list.length<(firstID+7)){
        $("#your-alert-1").show();
        $("#your-alert-2").show();
        $("#your-alert-3").show();
        $("#your-alert-4").show();
        $("#your-alert-5").show();
        $("#your-alert-6").show();
        document.getElementById("name"+(firstID%8+1)).innerText=list[firstID][1];
        document.getElementById("date"+(firstID%8+1)).src="../"+list[firstID][2];

        document.getElementById("name"+(firstID%8+2)).innerText=list[firstID+1][1];
        document.getElementById("date"+(firstID%8+2)).src="../"+list[firstID+1][2];

        document.getElementById("name"+(firstID%8+3)).innerText=list[firstID+2][1];
        document.getElementById("date"+(firstID%8+3)).src="../"+list[firstID+2][2];

        document.getElementById("name"+(firstID%8+4)).innerText=list[firstID+3][1];
        document.getElementById("date"+(firstID%8+4)).src="../"+list[firstID+3][2];

        document.getElementById("name"+(firstID%8+5)).innerText=list[firstID+4][1];
        document.getElementById("date"+(firstID%8+5)).src="../"+list[firstID+4][2];

        document.getElementById("name"+(firstID%8+6)).innerText=list[firstID+5][1];
        document.getElementById("date"+(firstID%8+6)).src="../"+list[firstID+5][2];
        $("#your-alert-7").hide();
        $("#your-alert-8").hide();
    }
    else if(list.length<(firstID+8)){
        $("#your-alert-1").show();
        $("#your-alert-2").show();
        $("#your-alert-3").show();
        $("#your-alert-4").show();
        $("#your-alert-5").show();
        $("#your-alert-6").show();
        $("#your-alert-7").show();
        document.getElementById("name"+(firstID%8+1)).innerText=list[firstID][1];
        document.getElementById("date"+(firstID%8+1)).src="../"+list[firstID][2];

        document.getElementById("name"+(firstID%8+2)).innerText=list[firstID+1][1];
        document.getElementById("date"+(firstID%8+2)).src="../"+list[firstID+1][2];

        document.getElementById("name"+(firstID%8+3)).innerText=list[firstID+2][1];
        document.getElementById("date"+(firstID%8+3)).src="../"+list[firstID+2][2];

        document.getElementById("name"+(firstID%8+4)).innerText=list[firstID+3][1];
        document.getElementById("date"+(firstID%8+4)).src="../"+list[firstID+3][2];

        document.getElementById("name"+(firstID%8+5)).innerText=list[firstID+4][1];
        document.getElementById("date"+(firstID%8+5)).src="../"+list[firstID+4][2];

        document.getElementById("name"+(firstID%8+6)).innerText=list[firstID+5][1];
        document.getElementById("date"+(firstID%8+6)).src="../"+list[firstID+5][2];

        document.getElementById("name"+(firstID%8+7)).innerText=list[firstID+6][1];
        document.getElementById("date"+(firstID%8+7)).src="../"+list[firstID+6][2];
        $("#your-alert-8").hide();
    }
    else{
        $("#your-alert-1").show();
        $("#your-alert-2").show();
        $("#your-alert-3").show();
        $("#your-alert-4").show();
        $("#your-alert-5").show();
        $("#your-alert-6").show();
        $("#your-alert-7").show();
        $("#your-alert-8").show();
        document.getElementById("name"+(firstID%8+1)).innerText=list[firstID][1];
        document.getElementById("date"+(firstID%8+1)).src="../"+list[firstID][2];

        document.getElementById("name"+(firstID%8+2)).innerText=list[firstID+1][1];
        document.getElementById("date"+(firstID%8+2)).src="../"+list[firstID+1][2];

        document.getElementById("name"+(firstID%8+3)).innerText=list[firstID+2][1];
        document.getElementById("date"+(firstID%8+3)).src="../"+list[firstID+2][2];

        document.getElementById("name"+(firstID%8+4)).innerText=list[firstID+3][1];
        document.getElementById("date"+(firstID%8+4)).src="../"+list[firstID+3][2];

        document.getElementById("name"+(firstID%8+5)).innerText=list[firstID+4][1];
        document.getElementById("date"+(firstID%8+5)).src="../"+list[firstID+4][2];

        document.getElementById("name"+(firstID%8+6)).innerText=list[firstID+5][1];
        document.getElementById("date"+(firstID%8+6)).src="../"+list[firstID+5][2];

        document.getElementById("name"+(firstID%8+7)).innerText=list[firstID+6][1];
        document.getElementById("date"+(firstID%8+7)).src="../"+list[firstID+6][2];

        document.getElementById("name"+(firstID%8+8)).innerText=list[firstID+7][1];
        document.getElementById("date"+(firstID%8+8)).src="../"+list[firstID+7][2];
    }


}
