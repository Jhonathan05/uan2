<nav id="nav-header" class="">
    <ul id="ul-row">
        <li id="toggle-btn">&#9776;</li>
        <li>Inicio</li>
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
            <a href="#">
                <div class="sidebar-elements">
                    <i class="fas fa-exclamation-circle"></i>
                    <span>Pendientes</span>
                </div>
            </a>
        </li>

        <li>
            <a href="">
                <div class="sidebar-elements">
                    <i class="fas fa-check-circle"></i>
                    <span>Confirmados</span>
                </div>
            </a>
        </li>

        <li>
            <a href="">
                <div class="sidebar-elements">
                    <i class="fas fa-times-circle"></i>
                    <span>Cancelados</span>
                </div>
            </a>
        </li>

        <li>
            <a href="">
                <div class="sidebar-elements">
                    <i class="fas fa-minus-circle"></i>
                    <span>Cerrar Sesi&oacute;n</span>
                </div>
            </a>
        </li>

        <li>
            <div class="sidebar-elements">
                <form action="">
                    <label for="">Mi estado de solicitud</label>
                    <input type="text" placeholder="Digitar Documento" id="input-dig-doc" class="input-base" required>
                    <button type="submit" class="btn-base">Ver Solicitudes</button>
                    <a href="#" id="a-solic">¿Nueva Solicitud?</a>
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
                    <button type="submit" class="btn-base" >Ver Solicitudes</button>
                    <a href="#" id="a-solic-out">¿Nueva Solicitud?</a>
                </form>
            </div>
        </li>
    </ul>
</div>
