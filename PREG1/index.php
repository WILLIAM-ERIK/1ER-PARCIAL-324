
<!-- Cabecera -->
<?php 
    include "cabecera.inc.php";
?>

<!-- Cuerpo -->
    <link href="styles.css" rel="stylesheet" />
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="#!">FCPN - INICIO</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="informatica/index.php">INFORMÁTICA</a></li>
                        <li class="nav-item"><a class="nav-link" href="matematica/index.php">MATEMÁTICA</a></li>
                        <li class="nav-item"><a class="nav-link" href="fisica/index.php">FÍSICA</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <header class="py-5 bg-image-full" style="background-image: url('imagenes/02FONDO FCPN.jpg')">
            <div class="text-center my-5">
                <img class="img-fluid rounded-circle mb-4" src="imagenes/01LOGOFCPN.JPG" alt="..." />
                <h1 class="text-white fs-1 fw-bolder">FACULTAD DE CIENCIAS PURAS Y NATURALES</h1>
                <p class="text-white-50 mb-1 fs-1">UNIVERSIDAD MAYOR DE SAN ANDRES</h2></p>
            </div>
        </header>

        <section class="py-5">
            <div class="container my-5">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                    <h1 class="text-white fs-1 fw-bolder">FACULTAD DE CIENCIAS PURAS Y NATURALES</h2>
                        <p class="lead" style="color:#1F618D">Actualmente la FCPN con sus 6 carreras (Biología, Estadística, Física, Informática, Matemática y Cs. Químicas) se ha convertido en la institución académica de mayor desarrollo científico del país, cuyos resultados tienen un impacto significativo en los ámbitos académico, científico económico y social.</p>
                    </div>
                </div>
            </div>
        </section>

<!-- Footer-->
<?php 
    include "footer.inc.php";
?>