<!DOCTYPE html>
<html>
<head>
	<title>Serarch</title>
</head>
<body>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/gallery.css">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
<script type="text/javascript" src="js/gallery.js"></script>
<!--//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="index.php">Home </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="Products.php">Products <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">

        <a  class="nav-link" href="search.php"><img src="img2/search.png" width="25" height="25"></a>
      </li> 
    </ul>
  </div>
  <form class="form-inline my-2 my-lg-0">
    <img src="img/LOGO.png" width="50" height="50">
  </form>
</nav><br>
<br>
<br>
<br>
<!--//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

<!--//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
	<div class="container">
<form action="conect.php" method="POST" name="form">
<div class="row">
  <div class="col-lg-6">
    <div class="input-group">
      <input type="text" class="form-control" placeholder="Search By Name" name="x1">
      <span class="input-group-btn">
        <button class="btn btn-primary" type="submit">Go!</button>
      </span>
    </div>
  </div>
</div>
</form>
<br>

	</div>
<!--//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Confirm Actions</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        If You Want To Search The Product Click On Continue
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button href="index.php" type="button" class="btn btn-primary">Continue</button>

      </div>
    </div>
  </div>
</div>
<!--//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
 <div class="container">
   <div class="row-3">
     <div class="col">
       
     </div>
   </div>
   <div class="row-1">
        <ul class="nav justify-content-end">
  <li  class="nav-item">
    <a class="nav-link active" href="info.php">Information</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="register.php">Register</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Contact Us</a>
  </li>
</ul>    
   </div>
 </div>

</body>
</html>