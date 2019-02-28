<nav id="nav-header" class="">
    <ul id="ul-row">
        <li id="toggle-btn">&#9776;</li>
        <li>Ibagu&eacute;</li>
        <li>
            <i id="user-ico" class="fas fa-user-circle"></i>
        </li>
    </ul>
</nav>
<div id="login-header">
    <div id="content-login" class="">
        <form action="">
            <input type="text" placeholder="Usuario" class="input-base" required>
            <input type="password" placeholder="Contraseña" class="input-base" required>
            <button type="submit" class="btn-base">Iniciar Sesi&oacute;n</button>
            <div class="header-a-bloques">
                <a href="./homeb.php" class="color-a">Bloque B</a>
                <a href="#" class="color-a">Bloque C</a>
            </div>
        </form>
    </div>
</div>

<!--<div id="login-header">
    <div id="content-user" class="">
        <form action="">
           <a href="#">Mi Perfil</a>
           <a href="">Bloque B</a>
           <a href="">Bloque C</a>
           <button type="submit">Cerrar Sesi&oacute;n</button>
            
        </form>
    </div>
</div>-->


<div id="slide-menu">
    <ul>
        <li><a href="./index.php"><img src="./img/logoBlanco.png" alt="Logo" id="img-logo" class=""></a></li>
        <li><a href="./index.php"><i id="logo-university" class="fas fa-university"></i></a></li>
        <li>
            <a href="./listams.php">
                <div class="sidebar-elements">
                    <i class="fas fa-clock"></i>
                    <span>Pendientes</span>
                </div>
            </a>
        </li>

        <li>
            <a href="./listamc.php">
                <div class="sidebar-elements">
                    <i class="fas fa-check-circle"></i>
                    <span>Confirmados</span>
                </div>
            </a>
        </li>

        <li>
            <a href="./listamcs.php">
                <div class="sidebar-elements">
                    <i class="fas fa-times-circle"></i>
                    <span>Cancelados</span>
                </div>
            </a>
        </li>

        <li>
            <a href="mailto:jacireno@hotmail.com">
                <div class="sidebar-elements">
                    <i class="fas fa-exclamation-circle"></i>
                    <span>Mejorar App</span>
                </div>
            </a>
        </li>

        <li>
            <div class="sidebar-elements">
                <form action="">
                    <label for="">Mi estado de solicitud</label>
                    <input type="text" placeholder="Digitar Documento" id="input-dig-doc" class="input-base" required>
                    <button type="submit" class="btn-base">Ver Solicitudes</button>
                    <a id="a-solic">¿Nueva Solicitud?</a>
                </form>
            </div>

        </li>
        <li>
            <div id="soli-out-big" class="soli-out-big ">
                <div id="close" class="close-ico">&#10006;</div>
                <form action="" id="form-out">

                    <div class="form-title">Formulario de Solicitud</div>

                    <div id="form-soli-big-body">

                        <div class="form-subtitle">Informaci&oacute;n del Solicitante</div>

                        <div class="info-solicitante">
                            <div class="form-big-element">
                                <span class="label-element">Documento del Solicitante</span>
                                <input list="l-id-stu" placeholder="Documento Solicitante" spellcheck="false" autocomplete="off" required>
                                <datalist id="l-id-stu">
                                    <option value="1110541614">Jhonathan Camargo</option>
                                    <option value="1110533214">Diego Nieto</option>
                                </datalist>
                            </div>
                            <div class="form-big-element">
                                <label for="" class="label-element">Nombre del Solicitante</label>
                                <input type="text" placeholder="Nombre" disabled required>
                            </div>
                            <div class="form-big-element">
                                <label for="" class="label-element">Apellido Del solicitante</label>
                                <input type="text" placeholder="Apellido" disabled required>
                            </div>

                        </div>

                        <div class="form-subtitle">Informaci&oacute;n del Aula</div>

                        <div class="info-sala">
                            <div class="form-big-element">
                                <label for="" class="label-element">Sala a solicitar</label>
                                <input list="l-room" placeholder="Sala" required>
                                <datalist id="l-room">
                                    <option value="Room 1"></option>
                                    <option value="Room 2"></option>
                                </datalist>
                            </div>

                            <div class="form-big-element">

                                <div class="label-element">Docente</div>

                                <input list="l-doc" placeholder="Docente" required>
                                <datalist id="l-doc">
                                    <option value="Docente 1"></option>
                                    <option value="Docente 2"></option>
                                </datalist>
                            </div>

                            <div class="form-big-element">
                                <div class="label-element">Dia del m&eacute;s a apartar sala</div>
                                <input list="l-day" placeholder="D&iacute;a" required>
                                <datalist id="l-day">
                                    <option value="01">Viernes</option>
                                    <option value="02">Sabado</option>
                                    <option value="03">Domingo</option>
                                    <option value="04">Lunes</option>
                                </datalist>
                            </div>

                            <div class="form-big-element">
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

                            <div class="form-big-element">
                                <div class="label-element">Hora de fin</div>
                                <input list="l-hour-end" placeholder="Fin" required>
                                <datalist id="l-hour-end">
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

                    <button type="submit" class="btn-base btn-pric">Reservar</button>

                </form>
            </div>
        </li>

        <li>
            <div id="btn-soli" class="toggle-soli sidebar-elements">
                <i class="fas fa-search"></i>
                <span>Solicitudes</span>
            </div>
            <div id="soli-out" class="">
                <form action="">
                    <input type="text" placeholder="Digitar Documento" class="input-base" required>
                    <button type="submit" class="btn-base">Ver Solicitudes</button>
                    <a id="a-solic-out">¿Nueva Solicitud?</a>
                </form>
            </div>

        </li>
    </ul>
</div>
