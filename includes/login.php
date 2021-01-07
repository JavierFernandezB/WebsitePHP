<div class="container">
    <div class="bg-warning">
        <?php echo isset($_SESSION['error_Login']) ? $_SESSION['error_Login'] : "\0"; ?>
    </div>
    <form method="POST" action="login.php">
        <h1>Login</h1>
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

</div>
<?php borrarErrores(); ?>