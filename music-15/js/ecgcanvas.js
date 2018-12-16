var maxV=715,VV=23;
function drawSmallGrid(c_canvas){
    var context = c_canvas.getContext("2d");
    context.strokeStyle = "transparent";
    context.strokeWidth=1;
    context.beginPath();
    for (var x = 0.5; x < maxV; x += 3) {
        context.moveTo(x, 0);
        context.lineTo(x, maxV);
        context.stroke();
    }




    for (var y = 0.5; y < maxV; y += 3) {
        context.moveTo(0, y);
        context.lineTo(maxV, y);
        context.stroke();
    }
    context.closePath();
    return;
}

function drawMediumGrid(c_canvas){
    var context = c_canvas.getContext("2d");
    context.strokeStyle = "transparent";
    context.strokeWidth=1;
    context.beginPath();
    for (var x = 0.5; x < maxV; x += 15) {
        context.moveTo(x, 0);
        context.lineTo(x, maxV);
        context.stroke();
    };



    for (var y = 0.5; y < maxV; y += 15) {
        context.moveTo(0, y);
        context.lineTo(maxV, y);


        context.stroke();
    };
    context.closePath();
    return;
}

function drawBigGrid(c_canvas){
    var context = c_canvas.getContext("2d");
    context.strokeStyle = "transparent";
    context.strokeWidth=1;
    context.beginPath();
    for (var x = 0.5; x < maxV; x += 75) {
        context.moveTo(x, 0);
        context.lineTo(x, maxV);
        context.stroke();
    };




    for (var y = 0.5; y < maxV; y += 75) {
        context.moveTo(0, y);
        context.lineTo(maxV, y);
        context.stroke();
    };
    context.closePath();
    return;
}
// 然后是绘制心电图的函数：
//function drawLine(c_canvas) {
//  var ctx = c_canvas.getContext('2d');
//  ctx.clearRect(0,0,500,500);
//  ctx.strokeStyle = "#fff";
//  ctx.strokeWidth = 1;
//  ctx.beginPath();
//  ctx.moveTo(0.5, 200);
//  ctx.lineTo(15, 200)
//  for(var x = 5; x < 117; x++) {
//      ctx.lineTo(x * 4.2, (Math.random() * 10 -5) *VV + 200)
//  }
//  ctx.lineTo(495, 200)
//  ctx.lineTo(550, 200)
//  ctx.stroke();
//  ctx.closePath();
//
//}

// 最后一起调用这些函数：
//(function draw(){
//  var c_canvas = document.getElementById("ecg");
//  setInterval(function(){
//      VV=(Math.random() * 10)*3;
//          drawLine(c_canvas)
//      },100);
//  return;
//})();
