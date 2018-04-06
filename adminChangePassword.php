<?php 

    require 'connect.php';

    //variable declaration
    $new_password = '';
    $confirm_password = '';

    if(isset($_POST['btnChangePassword'])){
        
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    
    <title> Change Password </title>
</head>
<body>

    <div class="jumbotron">
        <h1 class="text-center"> Anderson Recruits </h1>
    </div>

    <div class="container"> 
        <div class="col-md-3">

        </div>

        <div class="col-md-6">
            <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
                <div class="form-group">
                    <label for="admin_new_password"> New Password </label>
                    <input type="text" class="form-control" placeholder="New Password" id="admin_new_password" name="txtNewPassword" required>
                </div>

                <div class="form-group">
                    <label for="admin_confirm_password"> Confirm Password </label>
                    <input type="text" class="form-control" id="admin_confirm_password" placeholder="Confirm Password" name="txtConfirmPassword" required>
                </div>
                
                <button type="submit" class="btn btn-default" name="btnChangePassword">Reset</button>
            </form>
        </div>

        <div class="col-md-3"> 
 
        </div>

    </div>

    <!-- JAVASCRIPT -->
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    
</body>
</html>