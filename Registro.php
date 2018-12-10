<?php
session_start();
if(!$_SESSION["Active"]==true)
{
?>
<script type="text/javascript">
    location.href = "index.php";
</script>
<?php
}
$Registro=$_SESSION["Usuario"];
require "Tools/BD/PDO.php";
if(isset($_POST["Token"]))
{
    $name=$_POST["name"];
    $email=$_POST["email"];
    $phone=$_POST["phone"];
    $partner=$_POST["partner"];
    
    $Token=$_POST["Token"];

    if($Token=="6090adf5f08ee5d16a8f13c78e47415b82827a9c")
    {
        $Q="INSERT INTO `Participants` (`Id_Participant`, `Name`, `Email`, `Phone`, `Partner`, `Created_at`, `Code`, `Registro`) VALUES (NULL, '$name', '$email', '$phone', '$partner', CURRENT_TIMESTAMP, 'NO', '$Registro')";
        if($db->query($Q))
        {
            $Codigo=$db->lastInsertId();
            ?>
            <script type="text/javascript">
                window.alert("Se ha registrado satisfactoriamente, el código de usuario es: <?=$Codigo?>");
            </script>
            <?php
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
                            <input type="text" class="form-input" name="name" id="name" placeholder="Nombre completo" required/>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-input" name="email" id="email" placeholder="Correo electrónico" required/>
                        </div>
                        <div class="form-group">
                            <input type="number" class="form-input" name="phone" id="email" placeholder="Teléfono de contacto" required/>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-input" name="partner" id="email" placeholder="Nombre de acompañante"/>
                        </div>
                        <input type="hidden" value="6090adf5f08ee5d16a8f13c78e47415b82827a9c"  name="Token">
                        <!--<div class="form-group">
                            <input type="text" class="form-input" name="password" id="password" placeholder="Password"/>
                            <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-input" name="re_password" id="re_password" placeholder="Repeat your password"/>
                        </div>-->
                        <div class="form-group">
                            <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" required/>
                            <label for="agree-term" class="label-agree-term"><span><span></span></span>Acepto la <a href="/Terminos.html" class="term-service">mecánica de juego</a></label>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="submit" id="submit" class="form-submit" value="Continuar"/>
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