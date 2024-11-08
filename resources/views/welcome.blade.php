<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SGI  SUGUS</title>

    <link rel="icon" href="Assets/Home/Logogym.jpg" type="img/jpg">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;1,300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href={{asset("css/estilos-home.css") }}>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

</head>

<body>

<header id="inicio" >
    <input type="checkbox" id="menu">
        <label for="menu" class="hamburger">
            <span class="barras">≡</span>
            <span class="equis">x</span>
        </label>
    <section class="contenedor-nav">
        <div class="logo">
          <img src={{asset('Assets/Home/Logogym.jpg')}} alt="logo">
          <span>S U G U S</span>
        </div>
        <nav>
         <ul>
             <li><a href="#inicio">Inicio</a></li>
             <li><a href="#conocenos">Ventajas</a></li>
             <li><a href="#ubicacion">Descubre más</a></li>
             <li><a href="#valores">Conócenos</a></li>
             @if (Route::has('login'))
                            <nav class="-mx-3 flex flex-1 justify-end">
                                @auth
                                    
                                @else
                                <li class="login"><a href="{{ route('login') }}">Iniciar Sesión</a></li> <!-- Nuevo item -->
                                    @endif
                                @endauth
         </ul>
        </nav>
     </section>
     <section class="hero-section">
        <div class="content">
            <h5 class="section-title">S U G U S</h5>
            <h1 class="main-title">Sistema de Gestion Web para Gimnasios</h1>
            <p class="description">Aplicación web diseñada para gestionar de forma eficiente la administración de un gimnasio, incluyendo la organización de clases, instructores, clientes, usuarios y proveedores.</p>
            <a href="#" class="cta-button">Descrubre más →</a>
        </div>
        <div class="image-container">
            <img src={{asset('Assets/Home/SGI2.jpg')}} alt="Imagen" class="hero-image">
        </div>
    </section>
</header>

<section id="conocenos" class="features">
    <div class="feature-item">
        <div class="icon">
            <i class="fas fa-paper-plane"></i>
        </div>
        <h3>Gestión Centralizada</h3>
        <p> Permite administrar clases, instructores, clientes y proveedores desde un solo lugar, simplificando el flujo de trabajo y reduciendo errores.</p>
    </div>

    <div class="feature-item">
        <div class="icon">
            <i class="fas fa-comment"></i>
        </div>
        <h3>Visualización de Datos</h3>
        <p>Incluye gráficos y reportes PDF que reflejan los datos actuales, brindando información clara para la toma de decisiones rápidas y efectivas.</p>
    </div>

    <div class="feature-item">
        <div class="icon">
            <i class="fas fa-home"></i>
        </div>
        <h3>Escalabilidad y Modularidad</h3>
        <p>Facilita la expansión y el mantenimiento del sistema, adaptándose a las necesidades crecientes del gimnasio.</p>
    </div>

    <div class="feature-item">
        <div class="icon">
            <i class="fas fa-globe"></i>
        </div>
        <h3>Interfaz Intuitiva y Accesible</h3>
        <p>Diseñada para ser fácil de usar, la aplicación optimiza la experiencia de usuario y permite a los administradores interactuar eficientemente con el sistema.</p>
    </div>
</section>  

<section id="ubicacion" class="feature-section">
    <h5>En este sistema encotrarás...</h5>
    <h1>Principales funcionalidades.</h1>
    <p>Estas son algunas de nuestras principales funcionalidades que puedes encontrar aqui con nuestro sistema.</p>

    <div class="feature-grid">
        <div class="feature-nav">
            <img src={{asset('Assets/img1.PNG')}} alt="Feature 1">
            <h3>Gestión de Clientes Eficiente</h3>
            <p>Accede fácilmente a toda la información de tus clientes en un solo lugar.</p>
        </div>
        <div class="feature-nav">
            <img src={{asset('Assets/img2.PNG')}} alt="Feature 2">
            <h3>Control de Instructores y Clases</h3>
            <p>Organiza y asigna clases de manera rápida, nuestro sistema te permite gestionar mantener un calendario ordenado y eficiente.</p>
        </div>
        <div class="feature-nav">
            <img src={{asset('Assets/img3.PNG')}} alt="Feature 3">
            <h3>Administración de Proveedores Simplificada</h3>
            <p>Gestiona y consulta la información de todos tus proveedores de forma centralizada.</p>
        </div>
    </div>
</section>


 <section id="valores" class="valores">
    <div class="section">
        <h3>Nuestros compromisos</h3>
        <h1>Conócenos</h1>
        <p>
            Estos compromisos enfatizan la utilidad del sistema y la filosofía de atención al usuario, alineándose con el propósito de la herramienta.
        </p>
        <ul>
            <li>Compromiso con la Calidad.</li>
            <li>Facilidad de Uso.</li>
            <li>Innovación Continua.</li>
            <li>Soporte y Seguridad.</li>
        </ul>
 </section>

 <footer class="footer">
    <div class="social-icons">
        <a href="https://www.instagram.com" target="_blank"><i class="fab fa-instagram"></i></a>
        <a href="https://www.facebook.com" target="_blank"><i class="fab fa-facebook-f"></i></a>
        <a href="https://www.linkedin.com" target="_blank"><i class="fab fa-linkedin-in"></i></a>
        <a href="mailto:email@example.com"><i class="fas fa-envelope"></i></a>

    </div>
    <p>&copy; Untitled. All rights reserved.</p>
</footer>

</body>
</html>


{{-- KKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKKK --}}
