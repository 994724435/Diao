$(function(){
    $(".newsT a").click(function(){
    	var ix = $(this).index();
    	$(this).addClass("curr").siblings("a").removeClass("curr")
    	$(".newsCv").eq(ix).addClass("currBx").siblings(".newsCv").removeClass("currBx");
    	return false
    })
   
})