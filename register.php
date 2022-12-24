<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
     integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
     <link rel="stylesheet" href="dali.css">
     <style>
        h1{
            margin: 0;
            padding: 0;
            text-align: center;
            font-size: 22px;
            font-family: 'Indin Flower',cursive;
            font-style: initial;  
            color: aqua;
        }
        body{
            margin: 0px;
            padding: 0px;
            background: url(bac.png);
            background-size: cover ;
            font-family: sans-serif;
        }
        input[type="email"],
        input[type="Password"],
        input[type="password"]{
            border: none;
            border-bottom: 1px solid #fff;
            border-top:1px solid #fff ;
            background: transparent;
            height: 40px;
            color: #ff267e;
            font-size: 16px;

        }
        button[type="submit"]{
            border: none;
            outline: none;
            height: 40px;
            color: #fff;
            font-size: 16px;
            background: #ff267e;
            border-radius: 20px;
        }
        button[type="submit"]:hover
        {
            background-color: aqua;
            color: #262626;
        }
        span{
            color: #ff267e;
            font-size: 15px;
            font-family: cursive;
        }
        ::placeholder{
            font-family: cursive;  
        }
     </style>
  </head>

  <body>
  <?php
        $email1 = $password1 = $password2 = '';
        $emailerr = $passworderr1 = $passworderr2 = '';

  if ($_SERVER["REQUEST_METHOD"] == "POST") {

      if (empty($_POST['email1'])) {
          $emailerr = "Please fill in this field";
      } else {
          $email1 = $_POST['email1'];
      }

      if (empty($_POST['pass1'])) {
          $passworderr1 = "Please fill in this field";
      } else {
          $password1 = $_POST['pass1'];
      }
      
      if (empty($_POST['pass2'])) {
          $passworderr2 = "Please fill in this field";
      } else {
            $password2 = $_POST['pass2']; 
      }
      if ($password1 != $password2) {
            $passworderr2 = "Verify that the password is correct";
      }

      if (!empty($_POST['email1']) && !empty($_POST['pass1']) && !empty($_POST['pass2'])) {
          header("Location:dali.php");
          exit;
      }
  }
?>
    <div class="d-flex align-items-center min-vh-100">
        <div class="container d-flex justify-content-center">
            <form method="post" col-md-6 col-lg-5 col-xl-4 action="register.php">
                <h1 class="text-center mb-4" style="color: aqua;">Register</h1>
                <div class="mb-3">
                    <input type="email" class="form-control" name="email1" placeholder="Email" value="<?php echo $email1 ?>" > 
                    <span><?php echo $emailerr ?></span>  
                </div>
                <div class="mb-4">
                    <input type="password"  class="form-control" name="pass1"  placeholder="password"> 
                    <span><?php echo $passworderr1 ?></span>
                </div>
                <div class="mb-4">
                    <input type="password"  class="form-control" name="pass2" placeholder="confirm password"> 
                    <span><?php echo $passworderr2 ?></span>
                </div>
                <div class="mb-4">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="index.php" style="font-size: 12px;" class="text-decoration=none">Return to the login page</a>
                </div>       
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button type="submit" name="submit" >&nbsp;&nbsp;&nbsp;&nbsp; Login &nbsp;&nbsp;&nbsp;&nbsp;</button>                        
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
     integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>
