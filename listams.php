<!DOCTYPE html>
<html lang="es">

<head>
    <?php
        include_once('./mod/head.php');
    ?>
    <link rel="stylesheet" href="css/tabla.css">
    <link rel="stylesheet" href="css/listams.css">
    <title> Pendientes </title>
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
                <div class="table-title">Pendientes</div>
                <table>
                    <thead>
                        <tr>
                            <th class="none">ID</th>
                            <th>Nombre Solicitante</th>
                            <th>Sala Solicitada</th>
                            <th class="none">Docente</th>
                            <th>D&iacute;a Solicitado</th>
                            <th>Horario</th>
                            <th>Opci&oacute;n</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php
                            for ($i = 1 ; $i <= 10 ; $i++)
                            {
                                echo('
                                        <tr>
                                            <td class="none">1</td>
                                            <td>Jhonathan Camargo</td>
                                            <td><span class="b">B201</span></td>
                                            <td class="none">Tortugu&iacute;n</td>
                                            <td>29/FEB</td>
                                            <td>14:00 - 16:00</td>
                                            <td>
                                                <button id="btn-aux-ms-'.$i.'" class="btn-base btn-pric">Asignar</button>
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

        <div id="form-aux-ms" class="form-aux ">
            <div id="aux-close-mcs" class="close-ico">&#10006;</div>

            <form action="">
                <div class="form-title">Formulario de Asignaci&oacute;n</div>

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
                            <label for="">Sal&oacute;n solicitado</label>
                            <input type="text" disabled placeholder="B201">
                        </div>
                        <div class="aux-element">
                            <label for="">Sal&oacute;n a asignar</label>
                            <input list="l-room" placeholder="Sala" required>
                            <datalist id="l-room">
                                <option value="Room 1"></option>
                                <option value="Room 2"></option>
                            </datalist>
                        </div>
                        <div class="aux-element">
                            <label for="">Docente</label>
                            <input type="text" disabled placeholder="Tortugu&iacute;n">
                        </div>
                        <div class="aux-element">
                            <label for="">D&iacute;a a separar</label>
                            <input list="l-day" placeholder="D&iacute;a" required>
                            <datalist id="l-day">
                                <option value="01">Viernes</option>
                                <option value="02">Sabado</option>
                                <option value="03">Domingo</option>
                                <option value="04">Lunes</option>
                            </datalist>
                        </div>


                        <div class="aux-element">
                            <div class="label-element">Hora de incio</div>
                                <input list="l-hour-ini" placeholder="Inicio" required>
                                <datalist id="l-hour-ini">
                                    <option value="08:00"></option>
                                    <option value="09:00"></option>
                                    <option value="10:00"></option>
                                    <option value="11:00"></option>
                                    <option value="12:00"></option>
                                    <option value="14:00"></option>
                                    <option value="15:00"></option>
                                    <option value="16:00"></option>
                                    <option value="17:00"></option>
                                    <option value="18:00"></option>
                                    <option value="19:00"></option>
                                    <option value="20:00"></option>
                                    <option value="21:00"></option>
                                    <option value="22:00"></option>
                                </datalist>
                        </div>
                        
                        <div class="aux-element">
                            <div class="label-element">Hora fin</div>
                                <input list="l-hour-fin" placeholder="Fin" required>
                                <datalist id="l-hour-fin">
                                    <option value="08:00"></option>
                                    <option value="09:00"></option>
                                    <option value="10:00"></option>
                                    <option value="11:00"></option>
                                    <option value="12:00"></option>
                                    <option value="14:00"></option>
                                    <option value="15:00"></option>
                                    <option value="16:00"></option>
                                    <option value="17:00"></option>
                                    <option value="18:00"></option>
                                    <option value="19:00"></option>
                                    <option value="20:00"></option>
                                    <option value="21:00"></option>
                                    <option value="22:00"></option>
                                </datalist>
                        </div>

                    </div>
                </div>

                <button type="submit" class="btn-base btn-pric" >Confirmar</button>
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
    <script src="js/formAuxms.js"></script>
</body>

</html>
