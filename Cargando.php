<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>¡Vísita, registra y gana!</title>
    
    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    
</head>
<body onLoad="redireccionar()">

    <div class="main">

        <section class="signup">
            <!-- <img src="images/signup-bg.jpg" alt=""> -->
            <div class="container2">
                
                <div class="signup-content">
                    <h2 class="form-title">¡Vísita, registra y gana!</h2>
                    <center><p>Estamos procesando tu respuesa por favor espera...</p></center>
                    <center><img src="images/cargando.gif"></center>

                    <form method="POST" id="formulario" class="signup-form" action="Resultado.php">
                        
<input type="hidden" name="Code" value="<?=$_POST['Code']?>">
<input type="hidden" style="font-size: 30px; text-align: center; color: #FBC02D;" onkeyup="mayus(this);" type="text" class="form-input2" name="C1" maxlength="1" value="<?=$_POST['C1']?>">
<input type="hidden" style="font-size: 30px; text-align: center; color: #FBC02D;" onkeyup="mayus(this);" type="text" class="form-input2" name="C2" maxlength="1" value="<?=$_POST['C2']?>">
<input type="hidden" style="font-size: 30px; text-align: center; color: #FBC02D;" onkeyup="mayus(this);" type="text" class="form-input2" name="C3" maxlength="1" value="<?=$_POST['C3']?>">
<input type="hidden" style="font-size: 30px; text-align: center; color: #FBC02D;" onkeyup="mayus(this);" type="text" class="form-input2" name="C4" maxlength="1" value="<?=$_POST['C4']?>">
<input type="hidden" style="font-size: 30px; text-align: center; color: #FBC02D;" onkeyup="mayus(this);" type="text" class="form-input2" name="C5" maxlength="1" value="<?=$_POST['C5']?>">
<input type="hidden" style="font-size: 30px; text-align: center; color: #FBC02D;" onkeyup="mayus(this);" type="text" class="form-input2" name="C6" maxlength="1" value="<?=$_POST['C6']?>">
                            
                    </form>
                </div>
            </div>
        </section>

    </div>
<script language="JavaScript">
  function redireccionar() {
    setTimeout("document.getElementById('formulario').submit()", 5000);
  }
  </script>
    <!-- JS -->
    <!--<script src="vendor/jquery/jquery.min.js"></script>-->
    <script src="js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>