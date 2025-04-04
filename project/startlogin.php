<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="">
    <title>Login Page</title>
    <style>
body {
    font-family: 'Arial', sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f4f4f4;
}

.login-box {
    width: 390px;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background: #fff;
    padding: 20px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    text-align: center;
}

.login-box h1 {
    margin-bottom: 30px;
    color: #333;
}

.button-options {
    display: flex;
    flex-direction: column;
}

.button {
    display: block;
    width: 95%;
    padding: 10px;
    margin: 5px 0;
    text-decoration: none;
    color: #fff;
    background: #3498db;
    border: 1px solid #3498db;
    border-radius: 5px;
    cursor: pointer;
    transition: background 0.3s;
}

.button:hover {
    background: #2980b9;
}

/* Responsive styling */
@media (max-width: 600px) {
    .login-box {
        width: 80%;
    }
}

h1{
    position: absolute;
    top: 29%;
   right: 40%;
   font-size: larger;
   font-weight: bolder;
}


#secp{color: gray;
 /* position: absolute;
 left: 34%;
 top: 40.5%; */
 }


    </style>
</head>
<body>
    <br><br><br><br><br><br><br><br><br><br><br><br><br>
    <h1 align="center" style="color: black;"><u>Please Select Your Registration Type</u></h1>
    <form action="#" target="_blank">
        <div class="login-box">
            

            <div class="button-options">
                <a href="login.php" class="button">Login</a><br>
                <p id="secp"><b>Not registered?<b> </p><br>
                <a href="register.php" class="button">Register</a>
            </div>
        </div>
    </form>
    
</body>
</html>