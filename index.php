<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Log in Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
     integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
     <link rel="stylesheet" href="dali.css">
     <style>
        .img{
            width: 100;
            height: 100;
            position: absolute;
            top: calc(27% - 50px);
            left:calc(50% - 50px);
        }
        h1{
            margin: 0;
            padding: 0;
            text-align: center;
            font-size: 22px;
            font-family: 'Indin Flower',cursive;
            font-style: initial;  
            color: aqua;
        }
         input[type="email"],
         input[type="Password"]{
            border: none;
            border-bottom: 1px solid #fff;
            background: transparent;
            height: 40px;
            font-size: 16px;
            color: #ff267e;
            border-top:1px solid #fff ;
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
            background: aqua;
            color: #262626;
        }
     </style>
  </head>

  <body>
    <div class="d-flex align-items-center min-vh-100">
        <div class="container d-flex justify-content-center">
            <img src="login.png" class="img">
                <form method="post" action="dali.php" >
                <h1 class="text-center mb-3">Login</h1>
                <div class="mb-4">
                    <input type="email"  name="email" class="form-control" placeholder="Email"  required> 
                </div>
                <div class="mb-4">
                    <input type="password" id="pass" name="pass" class="form-control" placeholder="password" required> 
                </div>
                <div class="mb-3">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="register.php" style="font-size: 12px;" class="text-decoration=none">Create an account</a>
                </div>       
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button type="submit" name="submit" class="btn btn-success" >&nbsp;&nbsp;&nbsp;&nbsp; Login &nbsp;&nbsp;&nbsp;&nbsp;</button>                        
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
     integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
  </body>
</html>