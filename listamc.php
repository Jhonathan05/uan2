<!DOCTYPE html>
<html lang="es">

<head>
    <?php
        include_once('./mod/head.php');
    ?>
    <link rel="stylesheet" href="css/tabla.css">
    <link rel="stylesheet" href="css/listamc.css">
    <title> Confirmados </title>
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
                <div class="table-title">Confirmados</div>
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre Solicitante</th>
                            <th>Docente</th>
                            <th>D&iacute;a Solicitado</th>
                            <th>Horario</th>
                            <th>Sala Solicitada</th>
                            <th>Sala Asignada</th>
                            <th>Monitor</th>
                            <th>Opci&oacute;n</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php  
                        
                            for ($i = 1; $i <= 20; $i++) { //el máximo número de registos a mostrar, si se cambia en este ciclo, igual se debe de hacer en el ciclo del archivo "formaAuxmc.js" más 1. Ejemplo: ciclo listamsc.php = 20 ; ciclo formAuxmc.js = 21 
                                
                                echo('
                                    <tr>
                                        <td>1</td>
                                        <td>Jhonathan Camargo</td>
                                        <td>Tortugu&iacute;n</td>
                                        <td>29/FEB</td>
                                        <td>14:00 - 16:00</td>
                                        <td><span class="b">B201</span></td>
                                        <td><span class="c">B203</span></td> <!--la Clase c puede tener uso si es una sala distinta a la que se está solicitando (por ejemplo) -->
                                        <td>Jhonathan Camargo</td>
                                        <td>
                                            <button id="btn-aux-'.$i.'" class="btn-base btn-pric">Cancelar</button>
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
            <div id="form-aux-mc" class="form-aux ">
                <div id="aux-close" class="close-ico">&#10006;</div>

                <form action="">
                    <div class="form-title">Formulario de Cancelaci&oacute;n</div>

                    <div class="aux-body">
                        <div class="info-solicitante">
                            <div class="form-subtitle">Informaci&oacute;n del solicitante</div>
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
                                <input list="l-cancel-opt" placeholder="Motivo" required>
                                <datalist id="l-cancel-opt">
                                    <option value="Fecha erronea"></option>
                                    <option value="Evento UAN"></option>
                                    <option value="Solicitud duplicada"></option>
                                    <option value="Cancelaci&oacute;n de clase"></option>
                                    <option value="Salas no disponibles"></option>
                                    <option value="M&aacute;s de 8 d&iacute;as"></option>
                                    <option value="Solicitud menor a 1 d&iacute;a"></option>
                                </datalist>
                            </div>

                        </div>
                    </div>

                    <button type="submit" class="btn-base btn-pric">Cancelar Solicitud</button>
                </form>

            </div>

        </div>

        <footer>
            <?php
                include_once('./mod/footer.php');
            ?>
        </footer>

    </section>
    <script src="js/slide.js"></script>
    <script src="js/soliOut.js"></script>
    <script src="js/formAuxmc.js"></script>
</body>

</html>
