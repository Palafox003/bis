$(document).ready(function(){
	$(".hand").click(function(){
		var id=$(this).attr("id");

		$.ajax({
			  type: "POST",
			  url: "delete/delete.php",
			  data: {'id':id},
			  success: function(data){
			  	$("#resultado").html(data);
			  }
			});
		});
});