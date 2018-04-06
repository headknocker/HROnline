<?php 

    require 'connect.php';

    //variable declaration
    $admin_email = '';

    if(isset($_POST['btnResetPassword'])){
        $admin_email = $_POST['txtAdminEmail'];
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
    
    <title> Email Reset Link </title>
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
                    <label for="email"> Reset Email</label>
                    <input type="email" class="form-control" id="admin_email" placeholder="Enter email" name="txtAdminEmail">
                </div>
                
                <button type="submit" class="btn btn-default" name="btnResetPassword">Submit</button>
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