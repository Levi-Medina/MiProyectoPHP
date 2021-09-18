<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie-edge"/>
        <title>Mi primera Aplicación</title>

        <!--Import Google Icon Font-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

        <link rel="shortcut icon" href="img/logo.jpg" type="image/x-icon">
        <link rel="stylesheet" type="text/css" href="css/estilo.css">

        <!-- Compiled and minified CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    </head>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var elems = document.querySelectorAll('.carousel');
            var instances = M.Carousel.init(elems);
        });
    </script>

    <body>

        <!--menu principal-->
        <!--
        <nav class="nav-wrapper blue">
            <div class="container">
                <a href="#" class="brand-logo">Mi primera pagina web</a>
                <a href="#" data-target="menu-responsive" class="sidenav-trigger">
                    <i class="material-icons">menu</i>
                </a>

                <ul class="right hide-on-med-and-down">
                    <li><a href="#" class="dropdown-trigger" data-target="acercade">Acerca de nosotros<i class="material-icons right">arrow_drop_down</i></a></li>
                    <li><a href="C:\Users\ledy0\Desktop\Levi\PaginaWeb\login.html" data-target="Salir">Salir</a></li>
                </ul>
            </div>
        </nav>-->
        
        <?php include 'Views/Header.php'; ?>
        
        <ul class="sidenav" id="menu-responsive">
            <li><a href="?Menu=Login">Login</a></li>
            <li><a href="?Menu=AcercadeNosotros">Acerca de nosotros</a></li>
            <li><a href="?Menu=Salir">Salir</a></li>
        </ul>
        <ul id="acercade" class="dropdown-content">
            <li><a href="?Menu=Login">Login</a></li>
            <li><a href="?Menu=AcercadeNosotros">Acerca de nosotros</a></li>
            <li class="divider"></li>
        </ul>

        <div class="contenedor-principal">
            
            <header>
                <section class="texto-header">
                    <h1>Hola mundo</h1>
                </section>
                <div class="ola" style="height: 150px; overflow: hidden;" ><svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;"><path d="M0.00,49.98 C149.99,150.00 351.77,-49.98 500.00,49.98 L500.00,150.00 L0.00,150.00 Z" style="stroke: none; fill: #fff;"><!--wave--></path></svg></div>
            </header>
            <main>
                <section class="contenedor sobre-mi"><!--contenedor sobre-nosotros-->
                    <h2 class="titulo">Mi nombre es Levi Daniel Alor Medina</h2>
                    <div class="contenedor-mas-informacion"><!--contenedor-sobre-nosotros-->
                        <img src="img/yo.jpg" alt="" class="imagen-sobre-mi"><!--imagen-about-us-->

                        <div class="contenido-texto"><!--contenido-textos-->

                            <h3><span>1</span>Tengo 22 años</h3>
                            <h4><span>2</span>Estudio nivel Licenciatura</h4>
                            <h5><span>3</span>Vivo en Concordia Campeche</h5>
                            <h6><span>4</span>En mi familia somos en total: 6</h6><br>
                        </div>
                        <div class="contenido-personalidad">
                            <form action="" method="post">
                                <h4>What is your brand personality?<br><br></42>
                                    <h6>Elite<input type="range" min="1" max="10"/>Atractivo para las personas</h6>
                            </form>
                            <form>
                                <br><h8>Serio<input type="range" min="1" max="10"/>Jugueton</h8>
                            </form>
                            <form>
                                <br><h9>Convencional<input type="range" min="1" max="10"/>Rebelde</h9>
                            </form>
                            <form>
                                <br><h10>Amigable<input type="range" min="1" max="10"/>Autoritario</h10>
                            </form>
                            <form>
                                <br><h11>Maduro y clasico<input type="range" min="1" max="10"/>Joven e inovador</h11>
                            </form>
                        </div>
                    </div>
                </section>
                <section class="portafolio">
                    <div class="contenedor">
                        <h2 class="titulo">Galeria</h2>

                        <div class="carousel carousel-slider">
                            <a href="" class="carousel-item">
                                <img src="img/levi (1).png">
                            </a>
                            <a href="" class="carousel-item">
                                <img src="img/Levi (2).png">
                            </a>
                            <a href="" class="carousel-item">
                                <img src="img/Levi (3).png">
                            </a>
                            <a href="" class="carousel-item">
                                <img src="img/Levi (4).jpg">
                            </a>
                            <a href="" class="carousel-item">
                                <img src="img/Levi (5).jpg">
                            </a>
                        </div>
                    </div>
                </section>
                <section>
                    <div class="informacionExtra contenedor"><!--clientes contenedor-->
                        <div class="cards">
                            <div class="card">
                                <img src="img/motivacion.jpg" alt="">
                                <div class="contenido-texto-card">
                                    <strong>Goal and Motivation</strong>
                                    <p>-Quiero lograr aprender a digitalizar los procesos de cualquier negocio para crear aplicaciones web que lo requieran.<br>
                                        -Me da energía poder lograr automatizar esos procesos que son pocos optimos y rapidos.<br>
                                        -Me daría temor no lograr entregar a tiempo y bien las aplicaciones.<br>
                                        -A veces el papeleo del trabajo y cuando hay clases las tareas.
                                    </p>
                                </div>
                            </div>
                            <div class="card">
                                <img src="img/caminar.jpg" alt="">
                                <div class="contenido-texto-card">
                                    <strong>A day in the life of...</strong>
                                    <p> Ver a mi familia y descansar Con amigos, familia y clientes del trabajo Computadora, libreta de notas y celular Me hace sentir satisfecho cumplir un trabajo o tarea Me fustra cuando estoy poco de tiempo o cambian algo, para añadir cosas.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--section about-services *me lo salto-->
            </main>
            
            <?php include 'Views/Footer.php'; ?>
            
            <!--<footer>
                <div class="contenedor-footer">
                    <div class="content-foot">
                        <a href="https://www.uacam.mx/">Pagina de la universidad: Facultad de ingeniería ISC</a>
                    </div>
                </div>
                <h2 class="titulo-final">&copy; Levi Daniel Alor Medina | Ing. Sistemas computacionales</h2>
            </footer>-->
        </div>

        <!-- Compiled and minified JavaScript -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
        <script>
                document.addEventListener('DOMContentLoaded', function () {
                    M.AutoInit();
                })
        </script>
    </body>
</html>
