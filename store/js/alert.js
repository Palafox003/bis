$(document).ready(function(){
	$('#close').click(function(){
		$('#ModalAlert').modal('show');
	});
	$('#alert-yes').click(function(){
		location.href="login/close.php";
	});
});