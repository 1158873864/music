$.get("assets/php/getthisquestion.php" ,async =false,function (data){
    var temp=data.split("\n");
    var temp1=temp[temp.length-1];
    var question=temp1.split(" ");
    document.getElementById("looknumber").innerText=question[0];
    document.getElementById("lookname").innerText=question[1];
    document.getElementById("lookAcontent").innerText=question[2];
    document.getElementById("lookBcontent").innerText=question[3];
    document.getElementById("lookA").innerText="选A:"+question[4];
    document.getElementById("lookB").innerText="选B:"+question[5];
})