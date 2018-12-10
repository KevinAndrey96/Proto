<?php
require "Tools/BD/PDO.php";
if(isset($_POST["Code"]))
{
    $U=$_POST["Code"];
    $Ganador=false;
    $Secret="f0ff229d5a0ddd0bf28867ffbc45cfe29b4d7959";

    $C1=$_POST["C1"];
    $C2=$_POST["C2"];
    $C3=$_POST["C3"];
    $C4=$_POST["C4"];
    $C5=$_POST["C5"];
    $C6=$_POST["C6"];

    $Codigo=sha1($C1."-".$C2."-".$C3."-".$C4."-".$C5."-".$C6);
    $Codigo2=$C1.$C2.$C3.$C4.$C5.$C6;

    if($Codigo==$Secret)
    {
        $Ganador=true;
    }
    $Q="SELECT * from Participants where Id_Participant='$U'";
    foreach ($db->query($Q) as $Row) {
        if($Row["Code"]!="NO")
        {
            ?>
            <script type="text/javascript">
                window.alert("El participante ya realizo un intento previamente")
                location.href("LoginCode.php")
            </script>
            <?php
        }
        else
        {
            $Q="UPDATE Participants set Code = '$Codigo2' where Id_Participant='$U' and Code='NO'";
            if($db->query($Q))
            {
                if($db->query($Q))
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
                                        <?php
                                        if($Ganador==true)
                                        {
                                            ?>
                                            <h2 class="form-title">¡Felicitaciones!</h2>
                                            <h2 class="form-title">Has sido el afortunado ganador del concurso ¡vísita, registra y gana!...</h2>

                                            <?php
                                        }
                                        else
                                        {
                                            ?>
                                            <h2 class="form-title">¡Lo sentimos!</h2>
                                            <h2 class="form-title">No has sido el ganador del concurso ¡vísita, registra y gana!...</h2>
                                            <?php
                                        }
                                        ?>
                                        <button onclick="location.href = 'LoginCode.php';"  class="form-submit" >Regresar</button>
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
                }else
                {
                    ?>
                    <script type="text/javascript">
                        window.alert("Ha ocurrido un error, por favor intentelo de nuevo");
                    </script>
                    <?php
                }
            }
            else
            {
                ?>
                <script type="text/javascript">
                    window.alert("Ha ocurrido un error, por favor intentelo de nuevo");
                </script>
                <?php
            }
        }
    }

    
}
?>
