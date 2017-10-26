$(document).ready(function(){
	$("#submit").click(function(){
		var name=$("#name").val();
		var mail=$("#mail").val();
		var pass=$("#pass").val();
		var pass2=$("#pass2").val();
		var error=false;
		var msj="";

		if(name==""){
			error=true;
			msj=msj+" Please insert your Name. <br>";
		}
		if(mail==""){
			error=true;
			msj=msj+" Please insert your Mail. <br>";
		}
		if(pass=="" || pass2==""){
			error=true;
			msj=msj+" Please insert you Password. <br>";
		}
		if(pass==pass2){
			error=true;
			msj=msj+" Your password is incorect.<br>";
		}

		if(error){
			$("#alert").html(msj);
			$("#alert").removeClass("d-none");
			$("#alert").addClass("alert alert-danger");
			return false;
		}
	});
});