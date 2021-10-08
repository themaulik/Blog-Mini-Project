<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <style>
        .container {
            position: relative;
            margin-top: 50px;
            width: 500px;
            height: auto;
            background: #dedede;
            border-radius: 10px;
        }
        .form-group{
            margin: 10px;
        }
        h1{
            margin-top: 1cm; 
        }
        .btn{
            margin: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row ">
            <div class="panel panel-primary">
                <div class="panel-heading text-center">
                   <h1>Registration Form</h1>
                </div>
                <div class="panel-body">
                    <form action="connect.php" method="POST">
                        <div class="form-group">
                            <label for="firstName">First Name</label>
                            <input type="text" name="firstName" class="form-control" id="firstName">
                        </div>
                        <div class="form-group">
                            <label for="LastName">Last Name</label>
                            <input type="text" name="lastName" class="form-control" id="lastName">
                        </div>
                        <div class="form-group">
                            <label for="email">email</label>
                            <input type="email" name="email" class="form-control" id="email">
                        </div>
                        <div class="form-group">
                            <label for="gender">Gender</label>
                            <div>
                                <label for="male" class="radio-inline"><input type="radio" name="gender" id="male" value="m">Male</label>
                                <label for="female" class="radio-inline"><input type="radio" name="gender"  id="female" value="f">Female</label>
                                <label for="other" class="radio-inline"><input type="radio" name="gender"  id="other" value="o">Other</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" name="password" class="form-control" id="password">
                        </div>
                        <div class="form-group">
                            <label for="number">Number</label>
                            <input type="number" name="number" class="form-control" id="number">
                        </div>
                        <input type="submit" name="submit" class="btn btn-primary">
                    </form>
                </div>
                <div class="panel-footer text-right">
                <small> &copy; MaulikCodes </small>
                </div>
            </div>
        </div> 
    </div>
</body>
</html>