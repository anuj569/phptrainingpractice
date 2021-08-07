<?php require_once("header.php");?>
<body>
<?php
if(!empty($_REQUEST)){
     //print "<PRE>";
    //print_r($_REQUEST);
    $error = array();
    if(!empty($_REQUEST['username'])){
        if(strlen($_REQUEST['username']) <=5){
            $error['username'] = "Username can not be less than 6";               
        }
    }
    else{
        $error['username'] = "Username can not be blank";               
    }

    if(!empty($_REQUEST['password'])){
        if(strlen($_REQUEST['password']) <=8){
            $error['password'] = "Password can not be less than 9";               
        }
    }
    else{
        $error['password'] = "Password can not be blank";               
    }
    
    if(empty($error)){
        //$login = validate_login($_REQUEST['username'],$_REQUEST['password']);
        $login = true;
        if($login){
            //set the session
            $_SESSION['name'] = $_REQUEST['username'];
            header("location: home.php");
            exit;
        }
        else{
            $error['username'] = "Username is wrong";                
            $error['password'] = "Password is wrong";
        }
    }

}
?>    
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4">
                <div class="login-form bg-light mt-4 p-4">
                    <form method="GET" class="row g-3">
                        <h4>Welcome Guest</h4>
                        <div class="col-12">
                            <label>Username</label>
                            <input type="text" name="username" class="form-control" placeholder="Username" value="<?php if(!empty($_REQUEST['username'])) echo $_REQUEST['username'];?>">
        			<small id="passwordHelp" class="text-danger">
                        <?php if(!empty($error['username'])) echo $error['username'];?>
        			</small>      
                        </div>
                        <div class="col-12">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control" placeholder="Password">
        			<small id="passwordHelp" class="text-danger">
                        <?php if(!empty($error['password'])) echo $error['password'];?>   
        			</small>      
                        </div>
                        <div class="col-12">
			    <button type="reset" class="btn bg-secondary">Reset</a>
                            <button type="submit" class="btn btn-primary float-end">Login</button>
                        </div>
                    </form>
                    <hr class="mt-4">
                    <div class="col-12">
                            If you don't have account, then click below
                            <a href="register.php" class="btn btn-dark" role="button">Sign Up</a>
                        </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
