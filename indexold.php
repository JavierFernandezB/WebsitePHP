<!DOCTYPE html>

<?php require_once './includes/conexion.php'; ?>
<?php require_once './includes/helpers.php'; ?>

<html>
<head>
	<title>MainPAge</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
	<?php if(isset($_SESSION['usuario'])): ?>
	
	<div class="container">
		<a href="cerrar.php"></a>
		<button>Cerrar Session</button>
	</div>
	<?php endif; ?>
	
	<div class="container">
		<?php echo isset($_SESSION['completado']) ? "<small class='form-text text-muted bg-success'>". $_SESSION['completado']. "</small>" : ""; ?>
		<?php echo isset($_SESSION['general']) ? "<small class='form-text text-muted bg-danger'>". $_SESSION['general']. "</small>". 'NO': ""; ?>
	<form method="POST" action="register.php">
		<h1>Registro</h1>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Pon tu nombre" name="nombre">
    <?php echo isset($_SESSION['errores']) ? mostrarerrores($_SESSION['errores'], 'nombre') : "";?>
    
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
    <?php echo isset($_SESSION['errores']) ? mostrarerrores($_SESSION['errores'],'password') : ""; ?>
    
  </div>
  <input type="submit" class="btn btn-primary" name="submit">
</form>

<?php echo isset($_SESSION['error_Login']) ? $_SESSION['error_Login'] : ""; ?>
<form method="POST" action="login.php">
		<h1>Registro</h1>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Pon tu nombre" name="name">
  
    
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
    
    
  </div>
  <input type="submit" class="btn btn-primary" name="submit">
</form>

<?php borrarErrores(); ?>
</div>
</body>
</html>
