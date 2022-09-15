<!DOCTYPE html>
<html lang="en">

<head>
    <title>Main Page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body style="color:rgb(136, 133, 133);">
    <br><br>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-primary">
                    <div class="panel-heading">Online Exam System</div>
                    <div class="panel-body">SignIn / SignUp Page</div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="panel panel-info">
                    <div class="panel-heading">
				        <div class="login100-form-title" style="background-image: url(bg-01.jpg); padding:80px;">
					        <span class="login100-form-title-1">
						        Sign In
					        </span>
				        </div>
                    </div>
                    <div class="panel-body">
                        <?php
                     if(isset($_GET['run']) && $_GET['run']=="failed")
                      {
                        function function_alert($message)
                         {
                            echo "<script>alert('$message');</script>";
                         
                         }
                         function_alert("Email and password not matched");
                      }
                      ?>
                        <form role="form" action="signin_sub.php" method="post">
                            <div class="form-group">
                                <label for="email">Email:</label>
                                <input type="email" class="form-control" name="e" id="email" placeholder="Enter email">
                            </div>
                            <div class="form-group">
                                <label for="pwd">Password:</label>
                                <input type="password" class="form-control" name="p" id="pwd" placeholder="Enter password">
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox"> Remember me</label>
                            </div>
                            <button type="submit" class="btn btn-default">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <div class="login100-form-title" style="background-image: url(bg-01.jpg); padding:80px;">
					        <span class="login100-form-title-1">
						        Sign Up
					        </span>
				        </div>
                    </div>
                    <div class="panel-body">
                    <?php
                     if(isset($_GET['run']) && $_GET['run']=="success")
                      {
                        function function_alert($message)
                         {
                            echo "<script>alert('$message');</script>";
                         
                         }
                         function_alert("your registreation is sucessfully done");
                      }
                    ?>   
                    <form role="form" method="post" action="signup_sub.php" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="name"> Name:</label>
                                <input type="text" class="form-control" name="n" id="fname" placeholder="Enter your name">
                            </div>
                            
                            <div class="form-group">
                                <label for="email">Email:</label>
                                <input type="email" class="form-control" name="e" id="email" placeholder="Enter email">
                            </div>
                            <div class="form-group">
                                <label for="file">Upload Image:</label>
                                <input type="file" class="form-control" name="img" id="file" placeholder="Upload your Image ">
                            </div>
                            <div class="form-group">
                                <label for="pwd">Password:</label>
                                <input type="password" class="form-control" name="p" id="pwd" placeholder="Enter password">
                            </div>
                            <button type="submit" class="btn btn-default">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>