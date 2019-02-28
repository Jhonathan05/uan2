<!DOCTYPE html>
<html lang="es">

<head>
    <?php
        include_once('./mod/head.php');
    ?>
    <link rel="stylesheet" href="css/tabla.css">
    <link rel="stylesheet" href="css/listamcs.css">
    <title> Cancelados </title>
</head>

<body>
    <header>
        <?php
            require_once ('./mod/header-nav.php');
        ?>
    </header>

    <section class="container-body ">
        <div class="content-body">
            <div class="table">
                <div class="table-title">Cancelados</div>
                <table>
                    <thead>
                        <tr>
                            <th class="none">ID</th>
                            <th>Nombre Solicitante</th>
                            <th class="none">Docente</th>
                            <th>D&iacute;a Solicitado</th>
                            <th>Horario</th>
                            <th>Sala Solicitada</th>
                            <th class="none">Monitor</th>
                            <th>Opci&oacute;n</th>
                        </tr>
                    </thead>

                    <tbody>

                        <?php
                        
                            for ($i = 1; $i <= 10; $i++)
                            {
                                echo ('
                                        <tr>
                                            <td class="none">1</td>
                                            <td>Jhonathan Camargo</td>
                                            <td class="none">Tortugu&iacute;n</td>
                                            <td>29/FEB</td>
                                            <td>14:00 - 16:00</td>
                                            <td><span class="b">B201</span></td>                            
                                            <td class="none">Jhonathan Camargo</td>
                                            <td>
                                                <button id="btn-aux-mcs-'.$i.'" class="btn-base btn-pric">Detalle</button>
                                            </td>
                                        </tr>
                                     ');
                            }
                        
                        ?>

                    </tbody>

                </table>

                <div class="table-find-id">
                    <form action="">
                        <input type="text" placeholder="Digitar ID de solicitud">
                        <button type="submit">Buscar</button>
                    </form>
                </div>

            </div>

        </div>

        <div id="form-aux-mcs" class="form-aux ">
            <div id="aux-close-mcs" class="close-ico">&#10006;</div>

            <form action="">
                <div class="form-title">Detalles de Cancelaci&oacute;n</div>

                <div class="aux-body">
                    <div class="info-solicitante">                        
                        <div class="form-subtitle">Informaci&oacute;n</div>
                        <div class="aux-element">
                            <label for="">N&uacute;mero de solicitud</label>
                            <input type="number" disabled placeholder="3280">
                        </div>
                        <div class="aux-element">
                            <label for="">Documento del Solicitante</label>
                            <input type="number" disabled placeholder="1110541614">
                        </div>
                        <div class="aux-element">
                            <label for="">Nombre del Solicitante</label>
                            <input type="text" disabled placeholder="Jhonathan">
                        </div>
                        <div class="aux-element">
                            <label for="">Apellido del Solicitante</label>
                            <input type="text" disabled placeholder="Camargo">
                        </div>
                    </div>

                    <div class="aux-section">
                        <div class="form-subtitle">Informaci&oacute;n del Aula</div>
                        <div class="aux-element">
                            <label for="">Sala a solicitar</label>
                            <input type="text" disabled placeholder="B201">
                        </div>
                        <div class="aux-element">
                            <label for="">Docente</label>
                            <input type="text" disabled placeholder="Tortugu&iacute;n">
                        </div>
                        <div class="aux-element">
                            <label for="">Fecha solicitada</label>
                            <input type="text" disabled placeholder="25/Feb 14:00 - 16:00">
                        </div>


                        <div class="aux-element">
                            <label for="">Motivo de cancelaci&oacute;n</label>
                            <input type="text" placeholder="Motivo" disabled>
                        </div>

                    </div>
                </div>

                <button type="submit" class="btn-base btn-pric" disabled>Cancelado</button>
            </form>

        </div>

        <footer>
            <?php
                include_once('./mod/footer.php');
            ?>
        </footer>

    </section>
    <script src="js/slide.js"></script>
    <script src="js/soliOut.js"></script>
    <script src="js/formAuxmcs.js"></script>
</body>

</html>
