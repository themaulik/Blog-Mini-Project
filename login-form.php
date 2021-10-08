<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login-style.css">
    <title>Login-Form</title>
</head>

<body>

    <div class="container">
        <h1 class="label"> User Login</h1>


        <form action="result.php" class="login-form" method="POST">

            <!--Email Start-->
            <div class="font">Email</div>
            <input type="email" name="email" placeholder="Enter Email" required>
            <!--Email End-->

            <!--Password Start-->
            <div class="font font2">Password</div>
            <input type="password" name="password" placeholder="Enter password" required>
            <!--Password End-->

            <button class="submit ">Login</button>
        </form>

    </div>

</body>

</html>