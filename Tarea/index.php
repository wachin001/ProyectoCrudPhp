
<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM usuario";
    $query=mysqli_query($con,$sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Motorepuestos</title>
    <link rel="stylesheet" href="./styles/styles.css">
</head>
<body>
    <header class="header">
        <h1 class="header--title">Moto Repuestos Plata</h1>
        <nav class="header__nav">
          <ul>
            <li><a href="index.php">Inicio</a></li>
            <li><a href="repuestos.php">Repuestos</a></li>
          </ul>
        </nav>
      </header>
    <main class="main">
        <section class="articles">
            <article class="articles__about-me">
                <img class="about-me--logo" src="img/logo.png" alt="">
                <div class="about-me__content">
                    <h2 class="content--title">Quienes somos</h2>
                    <p class="content--paragraph"> 
                        Somos una empresa dedicada a la distribuccion y comercializacion de accesorios
                        y respuestos para tu motocicleta, aqui puedes encontrar una exelente calidad
                        con los mejores precios del mercado contamos con gran variedad de productos y con 
                        personal altamente califido a la hora de atenderte.
                    </p>
                </div>
            </article> 
            <article class="articles__about-me">
                <div class="about-me__content">
                  <h2 class="content--title">Pedido</h2>
                  <p class="content--paragraph">
                    Compras seguras y al mejor precio, cuenta con nosotros para lo que
                    necesites, todo lo que tú y tu moto necesitan. Repuestos, llantas,
                    motopartes, accesorios y lubricantes, Encuentra partes del Motor,
                    Suspensión, Eléctricas, Transmisión, Filtros, Frenos, Llantas.
                    Contamos Con La Más Amplia Gama De Repuestos Para Motos.
                  </p>
                </div>
                <img class="about-me--logo" src="img/logo.png" alt="" />
              </article>
            <article>
                <div class="article__content">
                  <h2 class="content--title">Repuestos</h2>
                  <p>
                    Contamos con una amplia gama de productos importados, nacionales y
                    extranjeros de marcas de reconocido prestigio.
                  </p>
                </div>
                <div class="article__items">
                  <ul>
                    <li>Llanta en todos las marcas y para todo tipo de moto</li>
                    <li>Grasas y aceites</li>
                    <li>Repuestos en general.</li>
                    <li>Rodamientos.</li>
                    <li>Accesorios.</li>
                    <li>Mano de obra garantizada en nuestro taller.</li>
                  </ul>
                  <img class="imagenes" src="img/moto.png.jpg" alt="" />
                </div>
                <img class="logo" src="img/logo.png.png" alt="" />
            </article>
        </section>
        <section class="container">
            <h3 class="container--title">Registrate</h3>
            <form class="container__form" action="insertar.php" method="POST">
                
                <label for="Cedula" class="form--label">Cedula</label>
                <input class="form--input" type="text" id="Cedula" name="Cedula" placeholder="Exm:100159750" required/>

                <label for="Nombre" class="form--label">Nombres</label>
                <input class="form--input" type="text" id="Nombres" name="nombre" placeholder="Nombres" required/>

                <label for="Correo" class="form--label">Correo</label>
                <input class="form--input" type="email" id="Correo" name="correo" placeholder="Correo" required/>
                
                <label for="Repuesto" class="form--label">Repuesto</label>
                <input class="form--input" type="text" id="Repuesto" name="Repuesto" placeholder="Repuesto" required/>

                <label for="Cant" class="form--label">Cant</label>
                <input class="form--input" type="number" id="Cant" name="cantidad" placeholder="Cant" required/>
         
                   
                <input class="form--btn" type="submit" value="insertar"></input>    
            </form>
            <img class="container--img" src="img/moto11.png" alt="">           
        </section>
    </main>
    <footer class="footer">
        <h3 class="footer--title">Contactanos</h3>
        <div class="footer__content">
            <p><span>Facebook:</span> @Motorespuestosplata_oficcial </p>
            <p><span>Tel:</span> 3185960032 </p>
            <p><span>Correo:</span> Motorepla@gamil.com</p>
        </div>
    </footer>
</body>
</html> 
