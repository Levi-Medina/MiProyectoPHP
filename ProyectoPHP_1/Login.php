<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Compiled and minified CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

        <!--Css-->
        <style>
            body{
                background-image: url(img/login.jpg);
                background-size: cover;

            }
            .login{
                margin-top: 100px;
                width: 50%;
                height: 50%;
            }

            .login .card{
                background: rgba(0, 0, 0, 0.6);

            }
            .login label{
                font-size: 16px;
                color: #ccc;
            }
            .login input{
                font-size: 22px !important;
                color: #fff;
            }
            .login button:hover{
                padding: 0px 40px;
            }
            .login a{
                color: white;
            }

        </style>

        <title>Login</title>
    </head>
    <body>
        <div class="row login">
            <div class="col s12 14 offset-14">
                <div class="card">
                    <div class="card-action blue white-text">
                        <h3>Login Form</h3>
                    </div>

                    <div class="card-content">
    <!--                    <div class="form-field">
                            <label for="username">Username</label>
                            <input type="text" id="username" class="validate" required>
                        </div><br>

                        <div class="form-field">
                            <label for="password">Password</label>
                            <input type="password" id="password" class="validate" required>
                        </div><br>

                        <div class="form-field">
                            <label>
                                <input type="checkbox" required>
                                <span>Remember me</span>
                            </label>
                        </div><br>

                        <div class="form-field center-align">
                            <button class="btn-large blue"><a href="C:\Users\ledy0\Desktop\Levi\PaginaWeb\index.html">Login</a></button>
                        </div>-->
<?php include 'Views/Login.php';?>
                    </div>
                </div>
            </div> 
        </div> 
    </body>
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</html>
