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
                    <form method="POST" action="Codigo.php" id="signup-form" class="signup-form">
                        <h2 class="form-title">¡Vísita, registra y gana!</h2>
                        <div class="form-group">
                            <input type="number" maxlength="5" class="form-input" name="code" id="name" placeholder="Codigo de usuario" required/>
                        </div>
                        <!--<div class="form-group">
                            <input type="number" maxlength="10" class="form-input" name="phone" id="email" placeholder="Teléfono de contacto" />
                        </div>-->
                        
                        <input type="hidden" value="6090adf5f08ee5d16a8f13c78e47415b82827a9c"  name="Token">
                        
                        <div class="form-group">
                            <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" required/>
                            <label for="agree-term" class="label-agree-term"><span><span></span></span>Acepto <a href="Terminos.html" class="term-service">terminos y condiciones</a></label>
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