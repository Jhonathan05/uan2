<!DOCTYPE html>
<html lang="es">

<head>
    <?php
        include_once('./mod/head.php');
    ?>
    <link rel="stylesheet" href="css/homeb.css">
    <link rel="stylesheet" href="css/homec.css">
    <title> Bloque C </title>
</head>

<body>
    <header>
        <?php
            require_once ('./mod/header-nav.php');
        ?>
    </header>

    <section class="container-body ">
        <div class="content-body">
            <div id="card-sala1" class="card-sala ">
                <!--active-->
                <div class="card-content">
                    <div id="slide-card" class="card-title ">
                        B201
                        <span id="ico-desp" class="cruz ">
                            <span class="horizontal"></span>
                            <span class="vertical"></span>
                        </span>
                    </div>
                    <!--active-->
                    <div id="card-body1" class="card-body ">
                        <!--active-->
                        <div class="card-element">Capacidad: 00</div>
                        <div class="card-element">Equipos de Computo: 00</div>
                        <div class="card-element">Aire Acondicionado: Si</div>
                        <div class="card-element">Conexi&oacute;n TV: HDMI: 00 VGA: 00</div>
                        <div class="card-element">Tablero: Acr&iacute;lico, Tiza</div>
                    </div>
                    <div class="card-footer">
                        <div class="card-element enlace"><a href="b201.php">VER HORARIOS</a></div>
                    </div>
                </div>
            </div>

            <?php            
                for($i = 2; $i <= 7; $i++ )
                    {
                        echo('
                                <div id="card-sala'.$i.'" class="card-sala ">
                                    <!--active-->
                                    <div class="card-content">
                                        <div id="slide-card'.$i.'" class="card-title ">B201</div>
                                        <!--active-->
                                        <div id="card-body'.$i.'" class="card-body ">
                                            <!--active-->
                                            <div class="card-element">Capacidad: 00</div>
                                            <div class="card-element">Equipos de Computo: 00</div>
                                            <div class="card-element">Aire Acondicionado: Si</div>
                                            <div class="card-element">Conexi&oacute;n TV: HDMI: 00 VGA: 00</div>
                                            <div class="card-element">Tablero: Acr&iacute;lico, Tiza</div>
                                        </div>
                                        <div class="card-footer">
                                            <div class="card-element enlace"><a href="#">VER HORARIOS</a></div>
                                        </div>
                                    </div>
                                </div>
                            ');
                    }
            ?>

            <!-- <div class="card-sala">
                <div class="card-content">
                    <div class="card-title txt-center">Importante!</div>
                    <div class="card-body txt-justify">
                        <div class="card-element">Verifica si las salas están disponibles, en caso de que lo esté, se puede solicitar. Para cualquier información realizarla via email haciendo clic en: <a href="mailto:monitor.ibague@uan.edu.co">monitor.ibague@uan.edu.co</a>, o directamente con el monitor de turno</div>
                    </div>
                </div>
            </div>-->



        </div>
        <footer>
            <?php
                require_once('./mod/footer.php');
            ?>
        </footer>
    </section>


    <script src="js/slide.js"></script>
    <script src="js/soliOut.js"></script>
    <script src="js/cards.js"></script>
</body>

</html>
