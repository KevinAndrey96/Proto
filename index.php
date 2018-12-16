<?php
session_start();
if(@$_SESSION["Active"]==true)
{
?>
<script type="text/javascript">
    location.href = "Registro.php";
</script>
<?php
}
require "Tools/BD/PDO.php";
if(isset($_POST["Token"]))
{
    $user=$_POST["user"];
    $pass=sha1($_POST["pass"]);

    $Name="";

    $Token=$_POST["Token"];

    if($Token=="6090adf5f08ee5d16a8f13c78e47415b82827a9c")
    {
        $Q="SELECT * from Users where Document='$user' and Pass='$pass'";
        if($db->query($Q))
        {
            $cont=0;
            foreach ($db->query($Q) as $Row) {
                $Name=$Row["Name"];
                $cont++;
                break;
            }
            if($cont==1)
            {
                session_start();
                $_SESSION["Usuario"]=$user;
                $_SESSION["Nombre"]=$Name;
                $_SESSION["Active"]=true;
                ?>
                <script type="text/javascript">
                    location.href="Registro.php";
                </script>
                <?php
            }
            else
            {
            ?>
            <script type="text/javascript">
                window.alert("Por favor verifique usuario y clave");
            </script>
            <?php    
            }
            
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Vísita, registra y gana!</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <div class="main">

        <section class="signup">
            <!-- <img src="images/signup-bg.jpg" alt=""> -->
            <div class="container">
                <div class="signup-content">
                    <form method="POST" action="" id="signup-form" class="signup-form">
                        <h2 class="form-title">Vísita, registra y gana!</h2>
                        <div class="form-group">
                            <input type="text"  class="form-input" name="user"  placeholder="Código" required/>
                        </div>
                        <div class="form-group">
                            <input type="password"  class="form-input" name="pass" placeholder="Clave" required/>
                        </div>
                        
                        <input type="hidden" value="6090adf5f08ee5d16a8f13c78e47415b82827a9c" name="Token">
                        <!--<div class="form-group">
                            <input type="text" class="form-input" name="password" id="password" placeholder="Password"/>
                            <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-input" name="re_password" id="re_password" placeholder="Repeat your password"/>
                        </div>-->
                        
                        <div class="form-group">
                            <input type="submit" name="submit" id="submit" class="form-submit" value="Ingresar"/>
                        </div>
                    </form>
                    <!--<p class="loginhere">
                        Have already an account ? <a href="#" class="loginhere-link">Login here</a>
                    </p>-->
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>