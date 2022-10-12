
<!-- Cabecera -->
<?php 
    include "cabecera.inc.php";
    require_once "conexion.inc.php";
    session_start();
?>

<!-- Cuerpo -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="#!">FCPN</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link" aria-current="page" href="informatica/index.php">INFORMATICA</a></li>
                        <li class="nav-item"><a class="nav-link" href="matematica/index.php">MATEMATICA</a></li>
                        <li class="nav-item"><a class="nav-link" href="fisica/index.php">FISICA</a></li>
                        
                    </ul>
                </div>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link disabled">Bienvenido <?php echo $_SESSION["idusuario"] ?></a></li>
                        <li class="nav-item"><a class="nav-link " aria-current="page" href="cerrarsesion.php">CERRAR SESION</a></li>
                    </ul>
                </div>
                
            </div>
        </nav>

        <header class="py-5 bg-image-full" style="background-image: url('imagenes/02FONDO FCPN.jpg')">
            <div class="text-center my-5">
                <img class="img-fluid rounded-circle mb-4" src="imagenes/01LOGOFCPN.JPG" alt="..." />
                <h1 class="text-white fs-3 fw-bolder">FACULTAD DE CIENCIAS PURAS Y NATURALES</h1>
                <p class="text-white-50 mb-0">UNIVERSIDAD MAYOR DE SAN ANDRES</p>
            </div>
        </header>

        <section class="py-5">
            <div class="container my-5">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <h2>FCPN</h2>
                        <p class="lead">Actualmente la FCPN con sus 6 carreras (Biología, Estadística, Física, Informática, Matemática y Cs. Químicas) se ha convertido en la institución académica de mayor desarrollo científico del país, cuyos resultados tienen un impacto significativo en los ámbitos académico, científico económico y social.</p>
                        
                    </div>
                </div>
            </div>
        </section>

<!-- Footer-->
<?php 
    include "footer.inc.php";
?>