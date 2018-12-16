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
require "Tools/BD/PDO.php";
if(isset($_POST["Token"]))
{
    $code=$_POST["code"];
    //$phone=$_POST["phone"];
    $Token=$_POST["Token"];

    if($Token=="6090adf5f08ee5d16a8f13c78e47415b82827a9c")
    {
        $cont=0;
        //$Q="SELECT * from Participants where Id_Participant = $code and Telefono = $phone";
        $Q="SELECT * from Participants where Id_Participant = $code";
        foreach ($db->query($Q) as $Row) {
            $cont++;
            break;
        }
        if($cont==1)
        {
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
                                <form method="POST" id="signup-form" class="signup-form" action="Cargando.php">
                                    <br>
                                    <h2 class="form-title">¡Vísita, registra y gana!</h2>
                                    <h2 class="form-title"><?=$Row["Nombre"]?></h2>
                                    <br>
                                    <div class="row">
                                        <center>
                                            <input type="hidden" name="Code" value="<?=$Row['Id_Participant']?>">
                                            <input style="font-size: 30px; text-align: center; color: #FBC02D;" onkeyup="mayus(this);" type="text" class="form-input2" name="C1" maxlength="1">
                                            <input style="font-size: 30px; text-align: center; color: #FBC02D;" onkeyup="mayus(this);" type="text" class="form-input2" name="C2" maxlength="1">
                                            <input style="font-size: 30px; text-align: center; color: #FBC02D;" onkeyup="mayus(this);" type="text" class="form-input2" name="C3" maxlength="1">
                                            <input style="font-size: 30px; text-align: center; color: #FBC02D;" onkeyup="mayus(this);" type="text" class="form-input2" name="C4" maxlength="1">
                                            <input style="font-size: 30px; text-align: center; color: #FBC02D;" onkeyup="mayus(this);" type="text" class="form-input2" name="C5" maxlength="1">
                                            <input style="font-size: 30px; text-align: center; color: #FBC02D;" onkeyup="mayus(this);" type="text" class="form-input2" name="C6" maxlength="1">
                                        </center>

                                        <script type="text/javascript">
                                            function mayus(e) {
                                                e.value = e.value.toUpperCase();
                                            }
                                        </script>
                                    </div>
                                    <br><br><br>
                                    <div class="form-group">
                                        <input type="submit" name="submit" id="submit" class="form-submit" value="Participar"/>
                                    </div>
                                    <br><br>
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
<?php
}
else
{
    ?>
    <script type="text/javascript">
        window.alert("Los datos proporcionados no coinciden con los de nuestra base de datos, por favor verifiquelos");
        location.href = "LoginCode.php";
    </script>
    <?php
}
}

}
?>