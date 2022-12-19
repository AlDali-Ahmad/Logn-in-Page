<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <style>
        body{
            margin: 0px;
            padding: 0px;
            background-color: lavenderblush;
        }
        img{
            position:absolute ;
            width: 150px;
            height: 150px;
            top: 200px;
            right: 50%;
        }
        pre{
            position:absolute ;
            top: 350px;
            right:42%;
            text-shadow: 5px 5px 20px red;
            font-size: xx-large;
            color: hotpink;
            font-family: 'Courier New', Courier, monospace;
        }

    </style>
</head>
<body>
    <div>
    <img src="login.png" alt="">
  <pre>
    My Name : Ahmad Aldai
  </pre>
    </div>

        <a href="https://www.facebook.com/mustafabroky" class=""><i class="fa-brands fa-facebook" style="background-color: aqua;"></i></a>
        <a href="https://github.com/MustafaBR213" class=""><i class="fa-brands fa-github"></i></a>
        <a href="https://instagram.com/mustafa_brooky?igshid=YmMyMTA2M2Y=" class=""><i class="fa-brands fa-instagram"></i></a>
        <a href="https://www.linkedin.com/in/mustafa-brooky-325452222/" class=""><i class="fa-brands fa-linkedin"></i></a>
        </div>
</body>
</html>
<?php

$email = $pass = '';
if($_SERVER['REQUEST_METHOD']=='POST'){
    if (empty($_POST['email'])) {
        $email = 'Email is Required';
    } else {
        $email = $_POST['email'];
    }

}


?>