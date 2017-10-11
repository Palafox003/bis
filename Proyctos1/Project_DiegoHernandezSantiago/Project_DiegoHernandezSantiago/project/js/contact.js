$(document).ready(function(){
	
	$("#btn1").click(function(){
		var sex=$("#sex").val();
		if (sex==0) {
			$("#alert1").removeClass("d-none");
		}else{
			$("#alert1").addClass("d-none");
		}

	});
});