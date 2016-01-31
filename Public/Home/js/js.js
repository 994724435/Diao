$(function(){
	$('.toTop').click(function(){
		var scrollTop = $(window).scrollTop();
		var scrollTimer = setInterval(function(){
			var speed = Math.floor((0-$(window).scrollTop())/5);
			if(scrollTop <= 0){
				clearInterval(scrollTimer);
				scrollTop = 0;
			}else{
				scrollTop += speed;
			};
			$(window).scrollTop(scrollTop);
		},30);
	});
	$('.dropdown').each(function(i,e){
		var list = $(e).find('.dropdown_list');
		var li = $(e).find('.dropdown_list li');
		var val = $(e).find('.dropdown_val');
		$(e).click(function(){
			if(list.is(':visible')){
				list.slideUp('fast');
				val.css('backgroundImage','url(./images/icon7.png)');
			}else{
				list.finish().slideDown('fast');
				val.css('backgroundImage','url(./images/icon7.1.png)');
			};
		});
		li.click(function(){
			val.val($(this).text());
		});
	});
});
