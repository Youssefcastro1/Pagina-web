<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>


    <header class="header">
        <div class="menu container">
            <a href="#" class="logo"> logo</a>
            <input type="checkbox" id="menu"/>
            <label for="menu">
                <img src="DESAROLLO 5TO/menu" class="menu_icon" alt="menu">
            </label>
            <nav class="navbar">
                <ul>
                    <li><a href="#">Inicio</a></li>
                    <li><a href="#">Nosotros</a></li>
                    <li><a href="#">Servicio</a></li>
                    <li><a href="#">Contacto</a></li>
                </ul>
            </nav>
        </div> 
        <div class="header-content container">
            <div class="header-txt">
                <h1>Inmobiliaria MVTOYS</h1>
                <p>
                    La empresa inmobiliaria de carros es una compañía dedicada al negocio de la compra, venta, alquiler, financiamiento y servicio de mantenimiento.
                     Nuestro principal objetivo es satisfacer las necesidades de nuestros clientes en el ámbito automotriz, brindando un servicio integral y de calidad. Contamos con una amplia variedad de marcas y modelos de vehículos, precios competitivos en el mercado y una atención personalizada que nos distingue de la competencia. A lo largo de los años nos hemos consolidado como una empresa confiable y referente en el sector,
                     estableciendo alianzas estratégicas con diferentes fabricantes y entidades financieras para ofrecer las mejores opciones a nuestros clientes.
                </p>
                <a href="#" class="btn-1">informacion</a>
            </div>
        <div class="header-img">
            <img src="DESAROLLO 5TO/images.jpg" alt="">
        </div>
</div>
    </header>

    <section class="about container">
        <div class="about-ing">
            <img src="DESAROLLO 5TO/images (2).jpg" alt="">
        </div>
        <div class="about-txt">
            <h2>Nosotros</h2>
            <p>
                Compra y Venta de Automóviles: Nos especializamos en conectar a compradores y vendedores de vehículos de alta calidad. Nuestro equipo experto garantiza transacciones sin complicaciones, con inspecciones exhaustivas y documentación completa para una experiencia de compra o venta sin problemas.

Asesoramiento Personalizado: Entendemos que cada cliente tiene necesidades únicas. Nuestros asesores altamente capacitados trabajan uno a uno para comprender las preferencias, el presupuesto y las expectativas de cada cliente, proporcionando recomendaciones personalizadas y orientación experta en la selección del vehículo adecuado.

            </p>
</div>


    </section>



    <main class="servicios">
        <h2>Servicios</h2>
        <div class="servicios-content container">
            <div class="servicio-1"> 
                <i class="fa sharp fa-solid fa-globe"></i>
                <h3>financiamiento y seguros</h3>
            </div>
            
            <div class="Servicio-1">
                <i class="fa sharp fa-solid fa-money-bill"></i>
                <h3>Servicio de postventa</h3>
            </div>
            
            <div class="servicio-1">
                <i class="fa sharp fa-solid fa-tag"></i>
                <h3>Marketing y promocion</h3>
            </div>

            <div class="servicio-1">
                <i class="fa-sharp fa-solid fa-signal-bars"></i>
                <h3>Consultoria de inversion automotriz</h3>
            </div>

        </div>
    </main>

    <section class="formulario container">
        <form method="post" autocomplete="off">
            <h2>Agenda consulta</h2>

            <div class="input-group">

                <div class="input-container">
                    <imput type="text" name="name" placeholder="Nombre y apellido">
                     <i class="fa-solid fa-users"></i>
                </div>        
    
                <div class="input-container">
                    <imput type="tel" name="phone" placeholder="Telefono Celular">
                     <i class="fa-solid fa-phone"></i>
                </div>        

                <div class="input-container">
                    <imput type="email" name="email" placeholder="Correo">
                     <i class="fa-solid fa-envelope"></i>
                </div>

                <div class="input-container">
                    <textarea name="message" placeholder="Detalles de la consulta"></textarea>
                </div>
    
                 <input type="submit" name="send" class="btn" onclick="myFunction()">
            </div>    
        </form>
    </section>

    <footer class="footer">
        <div class="footer-content container">
        <div class="link">
            <a href="#" class="logo">logo</a>
        </div>

        <div class="link">
            <ul>
                <li><a href="#">Inicio</a></li>
                <li><a href="#">Nosotros</a></li>
                <li><a href="#">Servivios</a></li>
                <li><a href="#">Contacto</a></li>
             </ul>
        </div>
      </div>
    </footer>

    <?php 
         include ("send.php");
    ?>
    
    <script>
        function myFunction() {
            window.location.href = "http://localhost/Pagina web"
        }
    </script>    
    
</body>
</html>