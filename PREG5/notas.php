<!-- Cabecera -->
<?php 
    include "cabecera.inc.php";
    require_once "conexion.inc.php";
    session_start();
    $query = mysqli_query($con, "SELECT * FROM persona WHERE ci=".$_SESSION["ciusuario"]);
    $datos = mysqli_fetch_array($query);
?>

<!-- Cuerpo -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="index2.php">FCPN</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link" aria-current="page" href="informatica/index.php">Informática</a></li>
                        <li class="nav-item"><a class="nav-link" href="matematica/index.php">Matemática</a></li>
                        <li class="nav-item"><a class="nav-link" href="fisica/index.php">Física</a></li>
                        
                    </ul>
                </div>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link disabled">Bienvenido <?php echo $_SESSION["idusuario"] ?></a></li>
                        <li class="nav-item"><a class="nav-link active" href="notas.php">Ver Notas</a></li>
                        <li class="nav-item"><a class="nav-link " aria-current="page" href="cerrarsesion.php">Cerrar Sesion</a></li>
                        
                    </ul>
                </div>
                
            </div>
        </nav>

        <header class="py-5 bg-image-full" style="background-image: url('imagenes/fcpn1280.jpg')">
            <div class="text-center my-5">
                <h1 class="text-white fs-1 fw-bolder">NOTAS</h1>
            </div>
        </header>

        <?php 
            $query = mysqli_query($con, "SELECT * FROM persona WHERE ci=".$_SESSION["ciusuario"]);
            $datos = mysqli_fetch_array($query);

            $sql="SELECT * FROM inscripcion WHERE ci=".$_SESSION["ciusuario"];
	        $notas=mysqli_query($con, $sql);

            if($_SESSION["ciusuario"]!=777)
            {
                ?>
                <section class="py-5">
                    <div class="container my-5">
                        <div class="row justify-content-center">
                            <div class="col-lg-6">
                                <h4>Notas del estudiante:  <?php echo $datos['nombre'] ?> </h4>
                            <table class="table">
                                <thead>
                                    <tr>
                                    <th scope="col">Sigla</th>
                                    <th scope="col">Nota 1</th>
                                    <th scope="col">Nota 2</th>
                                    <th scope="col">Nota 3</th>
                                    <th scope="col">Nota Final</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                    <?php
                                        while($fila=mysqli_fetch_array($notas)) {
                                            echo "<tr>";
                                            echo "<td>".$fila['Sigla']."</td>";
                                            echo "<td>".$fila['Nota1']."</td>";
                                            echo "<td>".$fila['Nota2']."</td>";
                                            echo "<td>".$fila['Nota3']."</td>";
                                            echo "<td>".$fila['Notafinal']."</td>";
                                            echo "</tr>";
                                        }
                                    ?>
                                </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </section>
               <?php
            }
            else
            {

                $cons="SELECT p.departamento, avg(i.notafinal) as prom". 
                    " FROM inscripcion i, persona p WHERE i.ci = p.ci".
                    " GROUP BY p.departamento". 
                    " ORDER BY p.departamento;";
                $res = mysqli_query($con, $cons);
                $res2 = mysqli_query($con, $cons);
                ?>
                <section class="py-5">
                    <div class="container my-5">
                        <div class="row justify-content-center">
                            <div class="col-lg-6">
                                <h3>Bienvenido señor director <?php echo $datos['nombre'] ?> </h3><br>
                                <h4 class="text-center">Tabla de notas por departamento: </h4>
                            <table class="table">
                                <thead>
                                    <tr>
                                    <?php
                                        while($fila=mysqli_fetch_array($res)) {
                                            echo "<td>".dep($fila['departamento'])."</td>";
                                        }
                                    ?>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                    <?php
                                        while($fila=mysqli_fetch_array($res2)) {
                                            echo "<td>".$fila['prom']."</td>";
                                        }
                                    ?>
                                </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </section>
                <?php
                
            }
        ?>


        

        
<!-- Footer-->
<?php 
    function dep($arg)
    {
        $res="";
        switch($arg) {
            case "02":
                $res="La Paz";
                break;
            case "03":
                $res="Cochabamba";
                break;
            case "07":
                $res="Santa Cruz";
                break;
            default:
                $res="ohla";
                break;
        }
        return $res;
    }
    include "footer.inc.php";
?>