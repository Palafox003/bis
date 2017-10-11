$(document).ready(function(){
	$(".img-gallery").click(function(){
		var img=$(this).attr("src");
		var title=$(this).attr("title");
		var desc=$(this).attr("desc");
		$("#gallery").show();
		$("#img-big").html('<img src="'+img+'" class="img-fluid img-big2">');
		$("#title").text(title);
		$("#desc").text(desc);
	});
	$("#gallery").click(function(){
		$(this).hide();
	});
});