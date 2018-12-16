$(function(){
    $('.close').click(function(){
        try {
            window.history.go(-1);
            // 此处是可能产生例外的语句
        } catch(error) {
            // 此处是负责例外处理的语句
            window.history.back();
        } finally {
            // 此处是出口语句
            window.location.go(-1);
        }
    })
})
$(function(){
		$(".zhulist:last-child").addClass("active");
//		$(".active").animate({top:"300px"},2000)
	})

