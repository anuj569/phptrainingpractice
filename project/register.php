<body>
<?php require_once("header.php");?>
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4">
                <div class="login-form bg-light mt-4 p-4">
                    <form action="" method="" class="row g-3">
                        <h4>Welcome Guest</h4>
                        <div class="col-12">
                            <label>Username</label>
                            <input type="text" name="username" class="form-control" placeholder="Username">
        			<small id="passwordHelp" class="text-danger">
        			</small>      
                        </div>
                        <div class="col-12">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control" placeholder="Password">
        			<small id="passwordHelp" class="text-danger">
        			</small>      
                        </div>
                        <div class="col-12">
			    <a href="register.php" class="btn btn-primary" role="button">Sign Up</a>
                            <button type="submit" class="btn btn-dark float-end">Login</button>
                        </div>
                    </form>
                    <hr class="mt-4">
                </div>
            </div>
        </div>
    </div>
</body>
</html>
