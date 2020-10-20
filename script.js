$(function(){
	$('#point li').each(function(){
		$(this).click(function(){
			var idname = $(this).attr("id").substring(3).toLowerCase();
			var classname = '.';
			classname += idname;
			$('#hansoku div:not(classname)').css('display','none');
      $('#hansoku img:not(classname)').css('display','none');
			$(classname).fadeIn(200);
		});
	});
});
