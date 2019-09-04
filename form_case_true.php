<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Php conditionals</title>
<link href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="css/estilo.css" type="text/css" media=screen>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>

<!-- Modal HTML -->

	<div class="modal-dialog modal-login">
		<div class="modal-content">
			<div class="modal-header">				
				<h4 class="modal-title">Member Login</h4>
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			</div>
									
			<div class="modal-body">
				<form action="" method="post" name="" id="login">
					<div class="form-group">
						<i class="fa fa-user"></i>
						<input type="text"  name= "name_usuario"   class="form-control" placeholder="Username" required="required">
					</div>
					<div class="form-group">
						<i class="fa fa-lock"></i>
						<input type="text" name ="edad_usuario"  class="form-control" placeholder="Edad" required="required">					
					</div>
					<div class="form-group">
						<input type="submit" name="enviando"  class="btn btn-primary btn-block btn-lg" value="Enviar">
					</div>
				</form>				
				
			</div>
			<div class="modal-footer">
				<a href="#">Forgot Password?</a>
			</div>
		</div>

</div>

</body>
</html>    

<?PHP
if(isset($_POST["enviando"])){
    
    $edad=$_POST["edad_usuario"];
    $name=$_POST["name_usuario"];
    
    switch(true){
        case $name == "Pep" && $edad >= 18 and $edad< 120:
            echo "Usuario autorizado.<br> Welcome!!! Pep";
            break;
          case $name == "Julia" && $edad >= 18  and $edad< 120:
            echo "Usuario autorizado.<br> Welcome!!! Julia";
            break;
        default:
            echo "Usuaio no autorizado";
    }
    
    
   
}

?>