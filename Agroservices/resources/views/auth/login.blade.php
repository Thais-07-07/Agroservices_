<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Landing page para tu proyecto de software, llamativa y moderna.">
    <title>Agroservice - Proyecto de Software</title>

    <style>
        /* General Styles */
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #121212; /* Fondo oscuro */
            color: #e0e0e0; /* Texto claro */
        }

        h1, h2, h3 {
            margin: 0;
        }

        /* Header Styles */
        header {
            background-color:rgb(246, 246, 248);
            color: white;
            padding: 15px 30px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        header .logo-container img {
            max-width: 180px;
            height: auto;
        }

        header h1 {
            font-size: 2rem;
            letter-spacing: 1px;
        }

        header a {
            text-decoration: none;
            color: #66bb6a;
            background-color: #333;
            padding: 10px 20px;
            border-radius: 25px;
            font-weight: bold;
            transition: background-color 0.3s ease;
        }

        header a:hover {
            background-color: #388e3c;
        }

        /* Hero Section */
        .hero {
            background-color: #388e3c;
            color: white;
            text-align: center;
            padding: 300px 5px;
            background-image: url('https://img.freepik.com/foto-gratis/agronomo-agricultor-trabajador-senior-campo-soja-control-cultivos-antes-cosecha_342744-1260.jpg');
            background-size: cover; /* Asegura que la imagen cubra el contenedor */
            background-position: center; /* Centra la imagen */
            background-attachment: fixed; /* Para efecto de parallax */
            position: relative;
            box-shadow: inset 0 0 10px rgba(0, 0, 0, 0.5);
        }


        .hero h2 {
            font-size: 3.5rem;
            font-weight: bold;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.8);
            margin-bottom: 20px;
        }

        .hero p {
            font-size: 1.2rem;
            line-height: 1.8;
            margin-bottom: 30px;
        }

        .cta-button {
            padding: 14px 25px;
            background-color: #66bb6a;
            color: white;
            font-size: 1.1rem;
            border: none;
            cursor: pointer;
            border-radius: 50px;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }

        .cta-button:hover {
            background-color: #2c6e2f;
            transform: scale(1.05);
        }

        /* Section Styles */
        section {
            padding: 60px 20px;
            text-align: center;
            background-color: #1a1a1a;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            margin-top: 30px;
        }

        section h3 {
            font-size: 2.5rem;
            color: #66bb6a;
            font-weight: bold;
        }

        section p {
            font-size: 1.2rem;
            line-height: 1.6;
            margin-bottom: 40px;
        }

        /* Features Grid */
        .features {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 30px;
            margin-top: 40px;
        }

        .feature-item {
            background-color: #333;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s ease;
        }

        .feature-item:hover {
            transform: translateY(-10px);
        }

        .feature-item img {
            width: 100%;
            height: auto;
            border-radius: 10px;
            margin-bottom: 20px;
        }

        .feature-item p {
            font-size: 1.1rem;
            color: #ccc;
        }

        /* Footer */
        footer {
            background-color: #1a1a1a;
            color: white;
            text-align: center;
            padding: 20px;
            margin-top: 50px;
        }

        footer p {
            margin: 0;
        }

        /* Login Page */
        .login-box {
            width: 100%;
            max-width: 400px;
            margin: 50px auto;
            background-color: #333;
            padding: 40px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            border-radius: 15px;
        }

        .login-box .logo {
            text-align: center;
            margin-bottom: 20px;
        }

        .login-box .logo img {
            width: 120px;
        }

        .login-box .input-group {
            margin-bottom: 20px;
        }

        .login-box .input-group input {
            width: 100%;
            padding: 12px;
            border: 1px solid #666;
            border-radius: 5px;
            font-size: 1rem;
            transition: border-color 0.3s ease;
            background-color: #222;
            color: #e0e0e0;
        }

        .login-box .input-group input:focus {
            border-color: #66bb6a;
        }

        .login-box .btn {
            width: 100%;
            padding: 12px;
            background-color: #388e3c;
            color: white;
            font-size: 1.1rem;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .login-box .btn:hover {
            background-color: #2c6e2f;
        }

        .login-box .form-footer {
            text-align: center;
            font-size: 0.9rem;
        }

        .login-box .form-footer a {
            color: #66bb6a;
            text-decoration: none;
        }

        .login-box .form-footer a:hover {
            text-decoration: underline;
        }

        /* Contact Info */
        .contact-info {
            background-color: #1a1a1a;
            color: white;
            padding: 40px 20px;
            text-align: center;
        }

        .contact-info h3 {
            font-size: 2rem;
            margin-bottom: 15px;
        }

        .contact-info p {
            font-size: 1.1rem;
            line-height: 1.6;
            margin-bottom: 10px;
        }

        .contact-info a {
            color: white;
            text-decoration: none;
            font-weight: bold;
            transition: color 0.3s ease;
        }

        .contact-info a:hover {
            color: #ffeb3b;
        }
    </style>
</head>

<body>

    <!-- Landing Page -->
    <header>
        <div class="logo-container">
            <img src="{{ url('images/agro.jpg') }}" alt="logo" />
        </div>
        <div>
            <a href="#login-section">Iniciar sesión</a>
            <a href="{{ route('register') }}">¡Regístrate ahora!</a>
        </div>
    </header>

    <div class="hero">
        <h2>Transforma tu mundo digital</h2>
        <p>Impulsa tu negocio con nuestras soluciones innovadoras, optimizando procesos y mejorando la toma de decisiones.</p>
        <button class="cta-button" onclick="alert('Gracias por tu interés!')">¡Descúbrelo ahora!</button>
    </div>

    <section>
        <h3>¿Por qué elegirnos?</h3>
        <p>En Agroservice, nos especializamos en ofrecer soluciones innovadoras y totalmente personalizadas, diseñadas para adaptarse a las necesidades específicas de tu negocio. Nuestro software está creado con un enfoque práctico y fácil de usar, lo que permite que incluso los usuarios menos técnicos puedan sacar el máximo provecho de nuestras herramientas. A través de nuestra plataforma, buscamos no solo mejorar tu productividad, sino también optimizar tus recursos</p>
    </section>

    </section>

    <section class="features">
    <div class="feature-item">
    <img src="https://img.freepik.com/fotos-premium/granjero-tableta-frente-campo-lechugas-utilizando-soporte-digital-finca-al-atardecer_88235-681.jpg" alt="Velocidad">
    <p><strong>Velocidad:</strong> Nuestro software es ultra rápido y eficiente, optimizando tus procesos.</p>
</div>
<div class="feature-item">
    <img src="https://www.sena.edu.co/es-co/Noticias/NoticiasImg/Narino-18072023.jpg">
    <p><strong>Análisis:</strong> Obtén informes detallados y análisis precisos para tomar decisiones informadas.</p>
</div>
<div class="feature-item">
    <img src="https://img.freepik.com/fotos-premium/granjero-tableta-frente-campo-lechugas-utilizando-soporte-digital-finca-al-atardecer_88235-681.jpg">
    <p><strong>Facilidad de uso:</strong> Interfaz intuitiva y amigable, diseñada para simplificar tu trabajo diario.</p>
</div>
<div class="feature-item">
    <img src="https://static.vecteezy.com/system/resources/thumbnails/030/745/389/small/portrait-farmer-picking-vegetables-ai-generative-photo.jpg" alt="Sincronización">
    <p><strong>Sincronización:</strong> Accede a tus datos desde cualquier lugar y mantén todo sincronizado en tiempo real.</p>
</div>
<div class="feature-item">
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ9BHpVeoP3KjGEs8EDM4_hXscme4CvA4AwAA&s" alt="Seguridad">
    <p><strong>Seguridad:</strong> Protege tus datos con encriptación avanzada y medidas de seguridad robustas.</p>
</div>
<div class="feature-item">
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ2gQ5LaXkA-6BurXEdz3CwqGnOW1IAMKd3kg&s" alt="Soporte">
    <p><strong>Soporte:</strong> Nuestro equipo de soporte está listo para ayudarte en cada paso del camino.</p>
</div>
<div class="feature-item">
    <img src="https://media.istockphoto.com/id/1358202423/es/foto/agricultor-senior-de-pie-en-el-campo-de-soja-examinando-el-cultivo-al-atardecer.jpg?s=612x612&w=0&k=20&c=7JZiV-2SI-0RXXvYFcmquctPlq1zvm6HoQMLdOYst18=" alt="Automatización">
    <p><strong>Automatización:</strong> Automatiza tareas repetitivas y ahorra tiempo valioso para tu negocio.</p>
</div>
<div class="feature-item">
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRFJnO2M4zzSmHoj-mIVnPcBKEUTyok3MKebA&s" alt="Personalización">
    <p><strong>Personalización:</strong> Adapta el software a tus necesidades específicas con opciones de personalización flexibles.</p>
</div>
<div class="feature-item">
    <img src="https://media.gettyimages.com/id/144562742/es/foto/cuba-las-tunas-farmer-digging-in-field.jpg?s=612x612&w=gi&k=20&c=kQabpvpyeA32smgcNBinPEIlf8FvixIyD6Vmc7cbPtY=" alt="Colaboración">
    <p><strong>Colaboración:</strong> Facilita la colaboración entre equipos con herramientas de comunicación integradas.</p>
</div>
<div class="feature-item">
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTSCMZc2GprZ9UxGvIYI1sYzKG3rkBp-W9U3A&s" alt="Movilidad">
    <p><strong>Movilidad:</strong> Accede a tu software desde cualquier dispositivo móvil, en cualquier momento.</p>
</div>
<div class="feature-item">
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRfoAUElxck_9eVZoc8PWzT8b_M48Wfs5hkMA&s" alt="Escalabilidad">
    <p><strong>Escalabilidad:</strong> Nuestro software crece contigo, adaptándose a las necesidades de tu negocio en expansión.</p>
</div>
<div class="feature-item">
    <img src="https://www.shutterstock.com/image-photo/he-female-farmer-looks-out-600nw-2483613007.jpg" alt="Actualizaciones">
    <p><strong>Actualizaciones:</strong> Mantente siempre actualizado con las últimas funcionalidades y mejoras de nuestro software.</p>
</div>
        <!-- Más elementos de características... -->
    </section>

    <!-- Login Page -->
    <div id="login-section" class="login-box">
        <div class="logo">
            <img src="{{ url('images/agroser.jpg') }}" alt="logo" />
        </div>
        <form method="POST" action="{{ route('login') }}">
            {{ csrf_field() }}
            <div class="input-group">
                <input type="email" name="email" placeholder="Correo electrónico" required autofocus>
            </div>
            <div class="input-group">
                <input type="password" name="password" placeholder="Contraseña" required>
            </div>
            <button type="submit" class="btn">Ingresar</button>
            <div class="form-footer">
                <a href="{{ route('register') }}">¡Regístrate ahora!</a>
            </div>
        </form>
    </div>

    <!-- Contact Info -->
    <div class="contact-info">
        <h3>Contacto</h3>
        <p>¿Tienes alguna pregunta? Estamos aquí para ayudarte.</p>
        <p><strong>Teléfono:</strong> 3212666343</p>
        <p><strong>Email:</strong> contacto@agroservice.com</p>
        <p><strong>Dirección:</strong> Bogotá, Colombia</p>
    </div>

    <footer>
        <p>© 2025 Agroservice. Todos los derechos reservados.</p>
    </footer>

</body>

</html>
