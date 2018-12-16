var date="";
function okdate(d){
    date=d;
}
document.getElementById("registerbutton").onclick=function() {
	if($("#pass").val()!=$("#passagain").val()){
		alert("请保持两次输入的密码一致！");
	}
	else{
	    $.post("php/gettj.php" ,{name:"number"},function (data) {
			   
                var temp = data.split("\n");
                var temp1 = temp[temp.length - 1];
                var q = temp1.split(" ");
                var m=new Array();
                m.push(q[0]);
                m.push(q[1]);
                m.push(q[2]);
                m.push(q[3]);
                m.push(q[4]);
                m.push(q[5]);
                m.push(q[6]);
                m.push(q[7]);
                m.push(q[8]);
                m.push(q[9]);
                m.push(q[10]);
                m.push(q[11]);
                var myDate = new Date();
                var date=myDate.toLocaleDateString();
                var list=date.split("/");
                for(var i=0;i<12;i++){
                    if(parseInt(list[1])==(i+1)){
                        m[i]=parseInt(m[i])+1;
                    }
                }
                $.post("php/updatetj.php" ,{name:"number",one:m[0],two:m[1],three:m[2],four:m[3],five:m[4],six:m[5],seven:m[6],eight:m[7],nine:m[8],ten:m[9],eleven:m[10],twelve:m[11]},function (data) {
                     
                }) 
            })

            var obj = document.getElementById("sex"); //定位id
            var index = obj.selectedIndex; // 选中索引
            var sex = obj.options[index].text; // 选中文本
           if(sex=="男"){
			   
               $.post("php/gettj.php" ,{name:"man"},function (data) {
                   var temp = data.split("\n");
                   var temp1 = temp[temp.length - 1];
                   var q = temp1.split(" ");
                   var m=new Array();
                   m.push(q[0]);
                   m.push(q[1]);
                   m.push(q[2]);
                   m.push(q[3]);
                   m.push(q[4]);
                   m.push(q[5]);
                   m.push(q[6]);
                   m.push(q[7]);
                   m.push(q[8]);
                   m.push(q[9]);
                   m.push(q[10]);
                   m.push(q[11]);
                   var myDate = new Date();
                   var date=myDate.toLocaleDateString();
                   var list=date.split("/");
                   for(var i=0;i<12;i++){
                       if(parseInt(list[1])==(i+1)){
                           m[i]=parseInt(m[i])+1;
                       }
                   }
                   $.post("php/updatetj.php" ,{name:"man",one:m[0],two:m[1],three:m[2],four:m[3],five:m[4],six:m[5],seven:m[6],eight:m[7],nine:m[8],ten:m[9],eleven:m[10],twelve:m[11]},function (data) {
                         
                   })
               })
           }
           else{
			   
               $.post("php/gettj.php" ,{name:"woman"},function (data) {
                   var temp = data.split("\n");
                   var temp1 = temp[temp.length - 1];
                   var q = temp1.split(" ");
                   var m=new Array();
                   m.push(q[0]);
                   m.push(q[1]);
                   m.push(q[2]);
                   m.push(q[3]);
                   m.push(q[4]);
                   m.push(q[5]);
                   m.push(q[6]);
                   m.push(q[7]);
                   m.push(q[8]);
                   m.push(q[9]);
                   m.push(q[10]);
                   m.push(q[11]);
                   var myDate = new Date();
                   var date=myDate.toLocaleDateString();
                   var list=date.split("/");
                   for(var i=0;i<12;i++){
                       if(parseInt(list[1])==(i+1)){
                           m[i]=parseInt(m[i])+1;
                       }
                   }
                   $.post("php/updatetj.php" ,{name:"woman",one:m[0],two:m[1],three:m[2],four:m[3],five:m[4],six:m[5],seven:m[6],eight:m[7],nine:m[8],ten:m[9],eleven:m[10],twelve:m[11]},function (data) {
                         
                   })
               })
           }
     var username=$("#username").val();
     var name=$("#name").val();
    var obj = document.getElementById("sex"); //定位id
    var index = obj.selectedIndex; // 选中索引
    var sex = obj.options[index].text; // 选中文本
    var xueli=$("#xueli").val();
    var minzu=$("#minzu").val();
    var pass=$("#pass").val();
    var passagain=$("#passagain").val();
    var myDate = new Date();
    var redate=myDate.toLocaleDateString();
    $.post("php/register.php", { username: username, name:name,date:date,sex:sex,xueli:xueli,minzu:minzu,pass:pass,redate:redate } ,function (data){
        if(data=="1"){
            alert("注册成功");
            window.location.href="login.html";
        }
    })
	}


}