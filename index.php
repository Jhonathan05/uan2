<!DOCTYPE html>
<html lang="es">

<head>
    <?php
        include_once('./mod/head.php');
    ?>
    <link rel="stylesheet" href="css/index.css">
    <title>Uan</title>
</head>

<body>
    <div id="container-index" class="container-index">
        <div class="content-index">

            <div class="content-index-header">
                <img src="img/logoBlanco.png" alt="Uan Logo">
            </div>
            <div class="content-index-body"></div>
            <div class="index-login">
                <form action="">
                   <div class="login-element">
                       <input type="text" class="i-base" placeholder="Usuario" required>
                       <span><a href="#">Forgot?</a></span>
                   </div>
                   <div class="login-element">
                       <input type="password" class="i-base" placeholder="Contraseña" required>
                       <span><a href="#">Forgot?</a></span>
                   </div>
                   <div class="problem"> <a href="#">Problemas al iniciar sesi&oacute;n?</a></div>
                   <button type="submit">Iniciar Sesi&oacute;n</button>
                </form>
            </div>
            <div class="divisor"></div>
            <div class="index-section">
                <div class="index-soli">
                    <form action="">
                        <input type="text" class="i-base" placeholder="Digitar Documento">
                        <button type="submit" onclick="alerta()">Estado de Solicitud</button>
                    </form>
                </div>
              <!--  <div class="index-links">
                    <a href="">Bloque B</a>
                    <a href="">Bloque C</a>
                </div>-->
            </div>

        </div>
        <div id="arrow-down" class="arrow active"><a href="#footer-index"><i class="fas fa-angle-down"></i></a></div>
        <div id="arrow-up" class="arrow"><a href="#container-index"><i class="fas fa-angle-up"></i></a></div>
    </div>
    <footer id="footer-index">
            <?php
                include_once('./mod/footer.php');
            ?>
        </footer>
    <script>
        function alerta() {
            alert("No existe solicitud alguna.");
        }

    </script>
    <script src="js/arrowIndex.js"></script>

</body>

</html>
