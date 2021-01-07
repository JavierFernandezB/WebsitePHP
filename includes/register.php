<div class="container">
    <div class="bg-warning">

    </div>
    <form method="POST" action="login.php">
        <h1>Register</h1>
        <div class="form-group">
            <?php echo isset($_SESSION['errores']['nombre']) ? $_SESSION['nombre'] : "\0"; ?>
            <label for="exampleInputEmail1">username</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Pon tu nombre" name="name">
        </div>
        <div class="form-group">
            <?php echo isset($_SESSION['errores']['password']) ? $_SESSION['password'] : "\0"; ?>
            <label for="exampleInputPassword1">Password</label>
            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
        </div>
        <div class="form-group">
            <?php echo isset($_SESSION['errores']['password2']) ? $_SESSION['password2'] : "\0"; ?>
            <label for="exampleInputPassword1">Password</label>
            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password2">
        </div>
        <input type="submit" class="btn btn-primary" name="submit">
    </form>

</div>
<?php borrarErrores(); ?>