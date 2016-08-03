<!-- *Autor: Eliobeth Ruiz* -->
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>AGAVE Industrial Properties</title>

    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="../css/freelancer.css" rel="stylesheet">
    <link href="../css/custom.css" rel="stylesheet">
    <link href="../css/estilo-formulario.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

     <!-- ------------------------------------------- Validaciones ------------------------------------------------- -->

            <script type="text/javascript" src="js/jquery.js"></script>
            <script type="text/javascript">
            function mostrar(id) {
                if (id == "type") {
                    $("#type").show();
                    $("#surface").hide();
                    $("#location").hide();
                }

                if (id == "surface") {
                    $("#type").hide();
                    $("#surface").show();
                    $("#location").hide();
                }

                if (id == "location") {
                    $("#type").hide();
                    $("#surface").hide();
                    $("#location").show();
                }
            }
            </script>

            <!-- VALIDACION DE CAJA DE TEXTO PARA ACEPTAR SOLO NUMEROS -->
            <script>
            function solonumeros(e)
            {    
                key=e.keyCode || e.which;
                teclado=String.fromCharCode(key);
                numeros="0123456789";
                especiales="8-37-38-46";
                teclado_especial=false;
                for(var i in especiales)
                {
                    if(key==especiales[i])
                    {
                        teclado_especial=true;
                    }
                }
                if(numeros.indexOf(teclado)==-1 && !teclado_especial) 
                {
                    return false;
                }
            }
            </script>

            <!-- ---------------------------------------- find de las validaciones ---------------------------------------------------------- -->

</head>

<body id="page-top" class="index">

    <!-- *Autor: Eliobeth Ruiz* -->    
    <section id="portafolio">
        <div class="container">
        <div class="row">
        <div class="col-md-6">

        <!------------------------- formulario de busqueda, aqui implemento los pequeños javascripts de validaciones ------------------------>
        <p>Send an Email:</p>
          <form action="enviarCorreo.php" method="post">
            <input type="text" name="nombre" placeholder="Name" autofocus required onkeypress="return sololetras(event)" onpaste="return false"><br /><br />
            <input type="text" name="company" placeholder="Company (optional)" onkeypress="return sololetras(event)" onpaste="return false"><br /><br />
            <input type="text" name="email" placeholder="Email" required onpaste="return false"><br /><br />
            <input type="text" name="telefono" placeholder="Phone" required onkeypress="return solonumeros(event)" onpaste="return false" maxlength="10"><br /><br />
            <textarea name="mensaje" placeholder="Message" required onpaste="return false"></textarea><br /><br />
            <!-- Captcha -->
            <div class="g-recaptcha" data-sitekey="6LdyXyYTAAAAAHBi3MS1ij9CjFHkj-dM7E76wQju"></div>
            <div class="mbr-buttons mbr-buttons--right"><button type="submit" class="mbr-buttons__btn btn btn-lg btn-success">ENVIAR</button></div>
          </form>    
<!----------------------------------------------------- fin de formulario de busqueda -------------------------------------------------------->
        </div>       
          <div class="col-md-3">
          </div>
          </div>
            </div>         
        </div>
    </section>

    <!-- Footer -->
    <footer class="text-center">
        
        <div class="footer-below">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        Copyright &copy; grupocrater.com
                    </div>
                </div>
            </div>
        </div>
    </footer>

            <!-- VALIDACION DE CAJA DE TEXTO PARA ACEPTAR SOLO LETRAS -->

            <script>

            function sololetras(e)
            {
                key=e.keyCode || e.which;
                teclado=String.fromCharCode(key).toLowerCase();
                letras=" abcdefghijklmnñopqrstuvwxyz";
                especiales="8-37-38-46-164";
                teclado_especial=false;
                
                for(var i in especiales)
                {
                    if(key==especiales[i])
                    {
                        teclado_especial=true;break;
                    }
                }
                if(letras.indexOf(teclado)==-1 && !teclado_especial)
                {
                    return false;
                }
            }
            </script>


    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="../js/jqBootstrapValidation.js"></script>
    <script src="../js/contact_me.js"></script>

    <!-- Theme JavaScript -->
    <script src="../js/freelancer.min.js"></script>
    <script>
    $(document).ready(function(){
        $('.myCarousel').carousel()
    });
</script>
<script src="http://code.jquery.com/jquery.js"></script>
<script src="../vendor/js/bootstrap.min.js"></script>

</body>

</html>
