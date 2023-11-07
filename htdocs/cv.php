<?php
// Inicia la sesión (debe hacerse en todas las páginas donde se usa sesiones)
session_start();

// Verifica si el usuario ha iniciado sesión
if (!isset($_SESSION["correo"])) {
    // Si el usuario no ha iniciado sesión, redirige a la página de inicio de sesión
    header("Location: iniciar.html");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="./CSS/style.css">

    <title>Subir CV</title>
</head>


<body>
<header>
    <div id="navprin">
        <nav id="nav" class="navbar bg-body-tertiary ">
          <div class="container-fluid">	
            
                <a class="navbar-brand" href="./index.html">
                  <img src="./IMG/logo-200.png" alt="Bootstrap" width="60" height="50">
                </a>
              
            <ul class="nav justify-content-center">
                <li class="nav-item">
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search"  aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Buscar</button>
                      </form>
                </li>
                
                </li>
              </ul>	
            
             
            
              
            
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
              aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
              <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasNavbarLabel">EgresadosTec</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
              </div>
              <hr>
              <div class="offcanvas-body">
                <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                    <li class="nav-item">
                        <a class="nav-link" href="./iniciar.html">Iniciar Sesion</a>
                      </li>
                      <hr>
                      <li class="nav-item">
                        <a class="nav-link" href="./cv.php">Subir Curriculum</a>
                      </li>
                      <hr>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                     Descripcion de las  Escuelas
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="./escuela1.html">E.E.S.T.N°1 Nicolas Avellaneda</a></li>
                      <li><a class="dropdown-item" href="./escuela2.html">E.E.S.T.N°2 DR. V. Alsina</a></li>
                      <li><a class="dropdown-item" href="./escuela3.html">E.E.S.T.N°3 Islas Malvinas</a></li>
                      <li><a class="dropdown-item" href="./escuela4.html">E.E.S.T.N°4 Martin Miguel de Güemes</a></li>
                      <li><a class="dropdown-item" href="./escuela5.html">E.E.S.T.N°5  "John F. Kennedy"</a></li>
                      <li><a class="dropdown-item" href="./escuela6.html">E.E.S.T.N°6 Ferrocarriles Argentinos</a></li>
                      <li><a class="dropdown-item" href="./escuela7.html">E.E.S.T.N°7 Republica de Panama</a></li>
                      <li><a class="dropdown-item" href="./escuela8.html">E.E.S.T.N°8 Almafuerte</a></li>
                      <li><a class="dropdown-item" href="./escuela9.html">E.E.S.T.N°9 Profesor Antonio J. Rodriguez</a></li>
                      <li><a class="dropdown-item" href="./401.html">C.F.P. N° 401</a></li>
                      <li><a class="dropdown-item" href="./402.html">C.F.P. N° 402</a></li>
                      <li><a class="dropdown-item" href="./403.html">C.F.P. N° 403</a></li>
                      
                    </ul>
                  </li>
                <hr>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                       Descripcion de las Profesiones
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="./electromecanica.html">Electromecanica</a></li>
                      <li><a class="dropdown-item" href="./admorganizacion.html">Administracion de la Organizacion</a></li>
                      <li><a class="dropdown-item" href="./alimentos.html">Tecnologia de los Alimentos</a></li>
                      <li><a class="dropdown-item" href="./informatica.html">Informatica</a></li>
                      <li><a class="dropdown-item" href="./mayorobras.html">Maestro mayor de Obras</a></li>
                      <li><a class="dropdown-item" href="./sturisticos.html">Servicios Turisticos</a></li>
                      <li><a class="dropdown-item" href="./automotores.html">Automotores</a></li>
                      <li><a class="dropdown-item" href="./programacion.html">Programacion</a></li>
                      <li><a class="dropdown-item" href="./energiasreno.html">Energias Renovables</a></li>
                      
                      
                    </ul>
                  </li>
                  <hr>
                  <li class="nav-item">
                    <a class="nav-link" href="./bolsa.php">Bolsa de Trabajo</a>
                  </li>
                  
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Escuelas
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="bolsae1.php">E.E.S.T.N°1 Nicolas Avellaneda</a></li>
                      <li><a class="dropdown-item" href="bolsae2.php">E.E.S.T.N°2 DR. V. Alsina</a></li>
                      <li><a class="dropdown-item" href="bolsae3.php">E.E.S.T.N°3 Islas Malvinas</a></li>
                      <li><a class="dropdown-item" href="bolsae4.php">E.E.S.T.N°4 Martin Miguel de Güemes</a></li>
                      <li><a class="dropdown-item" href="bolsae5.php">E.E.S.T.N°5 John F. Kennedy</a></li>
                      <li><a class="dropdown-item" href="bolsae6.php">E.E.S.T.N°6 Ferrocarriles Argentinos</a></li>
                      <li><a class="dropdown-item" href="bolsae7.php">E.E.S.T.N°7 Republica de Panama</a></li>
                      <li><a class="dropdown-item" href="bolsae8.php">E.E.S.T.N°8 Almafuerte</a></li>
                      <li><a class="dropdown-item" href="bolsae9.php">E.E.S.T.N°9 Profesor Antonio J. Rodriguez</a></li>
                      <li><a class="dropdown-item" href="bolsa401.php">C.F.P. N° 401</a></li>
                      <li><a class="dropdown-item" href="bolsa402.php">C.F.P. N° 402</a></li>
                      <li><a class="dropdown-item" href="bolsa403.php">C.F.P. N° 403</a></li>
                      
                    </ul>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle"  role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Profesiones
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="bolsaelectro.php">Electromecanica</a></li>
                      <li><a class="dropdown-item" href="bolsaorgani.php">Administracion de la Organizacion</a></li>
                      <li><a class="dropdown-item" href="bolsaalimentos.php">Tecnologia de los Alimentos</a></li>
                      <li><a class="dropdown-item" href="bolsainformatica.php">Informatica</a></li>
                      <li><a class="dropdown-item" href="bolsaobras.php">Maestro mayor de Obras</a></li>
                      <li><a class="dropdown-item" href="bolsaturisticos.php">Servicios Turisticos</a></li>
                      <li><a class="dropdown-item" href="bolsamotores.php">Automotores</a></li>
                      <li><a class="dropdown-item" href="bolsaprogramacion.php">Programacion</a></li>
                      <li><a class="dropdown-item" href="bolsarenovable.php">Energias Renovables</a></li>
                    </ul>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Promedios
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="bolsap10.php">Promedio 10</a></li>
                      <li><a class="dropdown-item" href="bolsap9.php">Promedio 9</a></li>
                      <li><a class="dropdown-item" href="bolsap8.php">Promedio 8</a></li>
                      <li><a class="dropdown-item" href="bolsap7.php">Promedio 7</a></li>
                      <li><a class="dropdown-item" href="bolsap6.php">Promedio 6</a></li>
                      <li><a class="dropdown-item" href="bolsap5.php">Promedio 5</a></li>
                      <li><a class="dropdown-item" href="bolsap4.php">Promedio 4</a></li>
                      <li><a class="dropdown-item" href="bolsap3.php">Promedio 3</a></li>
                      <li><a class="dropdown-item" href="bolsap2.php">Promedio 2</a></li>
                      <li><a class="dropdown-item" href="bolsap1.php">Promedio 1</a></li>
                    </ul>
                  </li>
                    
              
              </div>
              
            </div>
          </div>
        </nav>
      </div>
</header>
	  <br><br><br><br>
    <h1>Formulario del alumno</h1>
    <div class="formalumno">
        <div >
          <form action="procesar_formulario.php" method="POST" enctype="multipart/form-data">
			<div class="archivos"><div class="drop-area">
				<input type="file" name="imagen_alumno" accept="image/*">
				</div>
			</div>
				<div id="preview"></div>
            <label>Nombre del alumno<br><input class="cuadr" type="text" name="nombre" required
                    placeholder="Nombre del alumno"></label>
            <label>Apellido del alumno<br><input class="cuadr" type="text" name="apellido" required
                    placeholder="Apellido del alumno"></label><br>
            <label for="DNI">DNI <br> <input class="cuadr" type="number" name="DNI" placeholder="DNI" required></label>
            <label>Fecha de nacimiento <br><input class="cuadr" type="date" id="fechahora" name="fechahora" /></label><br>
            <label for="Numero de teléfono">Numero de teléfono <br> <input class="cuadr" name="telefono"
                    placeholder="Numero de teléfono" required></label>
            <label>Email <br><input class="cuadr" type="text" name="email" placeholder="ingrese su Email" required
                    class="email"></label><br>
            <label>Domicilio del alumno<br><input class="cuadr" type="text" name="domicilio" required placeholder="ingrese domicilio"></label>
            <label>Localidad<br><input class="cuadr" type="text" name="localidad" required placeholder="ingrese localidad"></label> <br>
            <label  for="Egresado de la secundaria:">Egresado de: <br>
                <select name="egresado_de" class="cuadr2"id="Egresados">
                    <option value="E.E.S.T.N°1 Nicolas Avellaneda">E.E.S.T.N°1 Nicolas Avellaneda</option>
                    <option value="E.E.S.T.N°2 DR. V. Alsina">E.E.S.T.N°2 DR. V. Alsina</option>
                    <option value="E.E.S.T.N°3 Islas Malvinas">E.E.S.T.N°3 Islas Malvinas</option>
                    <option value="E.E.S.T.N°4 Martin Miguel de Güemes">E.E.S.T.N°4 Martin Miguel de Güemes</option>
                    <option value="E.E.S.T.N°5 John F. Kennedy">E.E.S.T.N°5 "John F. Kennedy"</option>
                    <option value="E.E.S.T.N°6 Ferrocarriles Argentinos">E.E.S.T.N°6 Ferrocarriles Argentinos</option>
                    <option value="E.E.S.T.N°7 Republica de Panama">E.E.S.T.N°7 Republica de Panama</option>
                    <option value="E.E.S.T.N°8 Almafuerte">E.E.S.T.N°8 Almafuerte</option>
                    <option value="E.E.S.T.N°9 Profesor Antonio J. Rodriguez">E.E.S.T.N°9 Profesor Antonio J. Rodriguez</option>
                    <option value="E.E.S.T.N°9 Profesor Antonio J. Rodriguez">C.F.P. N° 401</option>
                    <option value="E.E.S.T.N°9 Profesor Antonio J. Rodriguez">C.F.P. N° 402</option>
                    <option value="E.E.S.T.N°9 Profesor Antonio J. Rodriguez">C.F.P. N° 403</option>
                
                
                
                  </select></label> 
            <label for="Promedio:">Promedio:<br>
                <select name="promedio" class="cuadr2"  id="Promedio">
                    <option value="10">10</option>
                    <option value="9">9</option>
                    <option value="8">8</option>
                    <option value="7">7</option>
                    <option value="6">6</option>
                    <option value="5">5</option>
                    <option value="4">4</option>
                    <option value="3">3</option>
                    <option value="2">2</option>
                    <option value="1">1</option>
                </select></label><br>
				<label  for="Profesiones">Profesiones<br>
					<select name="profesiones" class="cuadr2"id="Profesiones">
						<option value="Técnico en administración de la organización">Técnico en administración de la organización</option>
						<option value="Técnico en tecnología de los alimentos">Técnico en tecnología de los alimentos</option>
						<option value="Técnico en electromecánica">Técnico en electromecánica</option>
						<option value="Técnico en informática personal y profesional">Técnico en informática personal y profesional</option>
						<option value="Maestro mayor de obras">Maestro mayor de obras</option>
						<option value="Técnico en automotores">Técnico en automotores</option>
						<option value="Técnico en servicios turísticos">Técnico en servicios turísticos</option>
						<option value="Técnico en programación">Técnico en programación</option>
						<option value="Técnico en energías renovables">Técnico en energías renovables</option>
					</select></label>
          <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Descripcion del alumno:</label><br>
            <textarea class="cuadr" name="descripcion" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        
				<div class="archivos"><div class="drop-area">
					<input type="file" name="cv_alumno" accept=".pdf">
					</div>
				</div><hr>

				<button id="subircv">Subir archivo</button>
        </form>
    </div>
    </div>
    <br><br>

    <footer>
      <div id="footer1">
        <div class="container px-4 ">
          <div class="row gx-5">
            <div class="col">
             <div class="p-3">
            <a href="./cv.php">Subir Curriculum Alumno</a>
            </div>
            </div>
            <div class="col">
            <div class="p-3">
              <a href="./bolsa.php">Bolsa de Trabajo</a>
              </div>
            </div>
            <div class="col">
            <div class="p-3">
              <a href="./iniciar.html">Ingresar</a>
              </div>
            </div>
          </div>
          </div>
    
      </div>
      
        
        <div class="container px-4 text-center">
        <div class="row gx-5">
          <div class="col">
          <div class="expandir">
            <ul>
              <li><a ><img src="./IMG/copyright4.png"/><span>©2023 E.E.S.T N°2  Creados por Camila Ayuso ,Rodrigo Parafita y Facundo Frias..</span></a></li>
                </ul>
            </div>
  
           
          </div>
          <div class="col">
          <div class="expandir">
            <ul>
                    <li><a href="http://www.tecnica2lanus.edu.ar/" target="_blank" rel="noopener noreferrer"  ><img src="./IMG/TEC2.svg" /><span>Escuela Tecnica 2</span> </a></li>
                </ul>
            </div>
          
          </div>
          <div class="col">
          <div class="p-3">
            <p>Esta página fue creada por los Alumnos de E.E.S.T. N°2 para poder brindar a todas las Escuelas Técnicas y Centros de Formación Profesional de Lanús una página donde subir los curriculum de los alumnos egresados de dichas escuelas. Esto también permite brindar un espacio donde las empresas que están buscando nuevos empleados recién egresados puedan tener acceso a su información con más rapidez y eficacia.</p>
            </div>
          </div>	
    
          </div>
          
        </div>
        
        </div>
  
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>

</html>