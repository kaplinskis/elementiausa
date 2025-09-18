<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/plyr.min.css" />
    <link rel="stylesheet" href="./css/custom.min.css">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <style>
        #hero {
            background-image: linear-gradient(90deg, rgba(0, 0, 0, .7) 0, rgba(255, 255, 255, 0) 90%), url(img/hero/bg_elementia.png);
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            padding: 120px 0
        }

        .invalid-feedback {
            display: block;
        }

        .invalid-field {
            border-color: #dc3545 !important;
        }

        #about-us p {
            text-align: justify;
        }

        /* Estilos del contenedor del menú */
        .navbar {
            display: flex;
            align-items: center;
            justify-content: space-between;
            background-color: #333;
            padding: 15px;
            color: white;
        }

        /* Estilos del logo */
        .navbar .logo {
            font-size: 24px;
            font-weight: bold;
        }

        /* Contenedor de los elementos del menú */
        .navbar .menu {
            display: flex;
            gap: 20px;
            margin-left: auto;
        }

        /* Estilos de los enlaces del menú */
        .navbar .menu a {
            text-decoration: none;
            padding: 10px;
            font-size: 16px;
            color: #333;
        }

        /* Estilo del enlace al final a la derecha */
        .navbar .menu a:last-child {
            margin-left: auto;
        }

        .follow-div {
            display: flex;
            flex-direction: column;
            justify-content: flex-end;
            margin-left: auto;
            align-items: end;
        }

        .follow-div a {
            color: white;
            text-decoration: none;
        }

        .fs-1-1-rem {
            font-size: 1.1rem;
        }

        #ready-to-take .flex-blue {
            background-color: #0b4b86;
            padding: 35px 30px;
        }

        .btn-red,
        .btn-red:hover {
            background-color: #cd2636;
            border: 0;
            color: #fff;
        }

        .btn-azul-claro,
        .btn-azul-claro:hover {
            background-color: #4e88bd;
            border: 0;
            color: #fff;
        }

        .btn-amarillo,
        .btn-amarillo:hover {
            background-color: #e98723;
            border: 0;
            color: #fff;
        }

        footer {
            padding: 0;
            background-color: #17417d;
        }

        .bg-azul-oscuro {
            background-color: #17417d;
        }

        .navbar.bg-azul-oscuro .menu a {
            color: #fff;
        }

        .margin-0 {
            margin: 0;
        }

        #what-we-do {
            background-color: #fff;
        }

        .cursor-normal {
            cursor: default;
        }

        .w-100px {
            width: 100px;
        }
        .w-75px{
        width:75px
        }

        .flex-img.great {
            display: flex;
            align-items: center;
            justify-content: flex-end;
        }

        #logos img {
            display: block;
            margin: auto;
        }

        #ready-to-take .flex-img {
            background: none;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 0px;
        }
        
        .three-images-container {
            display: flex;
            gap: 15px;
            width: 100%;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
        }
        
        .three-images-container img {
            width: 270px;
            height: 270px;
            min-width: 150px;
            min-height: 150px;
            object-fit: cover;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            flex-shrink: 0;
        }

        .align-txt {
            padding-left: 80px;
        }

        /* Estilos para la sección Great Place to Work */
        #great-place-to-work {
            background-color: #f8f9fa;
            padding: 60px 0;
        }

        .gptw-column {
            padding: 20px;
            height: 100%;
            display: flex;
            flex-direction: column;
        }

        .gptw-data-section {
            background-color: #e3f2fd;
            padding: 25px;
            border-radius: 10px;
            height: 100%;
        }

        .gptw-title {
            color: #1565c0;
            font-weight: bold;
            font-size: 1.2rem;
            margin-bottom: 20px;
        }

        .gptw-badge-small {
            width: 60px;
            height: auto;
            margin-bottom: 15px;
        }

        .gptw-company-name {
            color: #1565c0;
            font-weight: bold;
            font-size: 1rem;
            margin-bottom: 20px;
        }

        .gptw-bar-chart {
            margin-bottom: 15px;
        }

        .gptw-bar {
            background-color: #bbdefb;
            height: 20px;
            border-radius: 10px;
            margin-bottom: 8px;
            position: relative;
            overflow: hidden;
        }

        .gptw-bar-fill {
            background-color: #1976d2;
            height: 100%;
            border-radius: 10px;
            transition: width 0.3s ease;
        }

        .gptw-bar-fill.dark {
            background-color: #0d47a1;
        }

        .gptw-bar-label {
            position: absolute;
            left: 10px;
            top: 50%;
            transform: translateY(-50%);
            color: #333;
            font-size: 0.85rem;
            font-weight: 500;
        }

        .gptw-bar-percentage {
            position: absolute;
            right: 10px;
            top: 50%;
            transform: translateY(-50%);
            color: #333;
            font-weight: bold;
            font-size: 0.9rem;
        }

        .gptw-main-title {
            color: #333;
            font-size: 1.8rem;
            font-weight: bold;
            margin-bottom: 20px;
            line-height: 1.3;
        }

        .gptw-icon {
            width: 20px;
            height: 20px;
            background-color: #ff4081;
            border-radius: 3px;
            display: inline-block;
            margin-right: 10px;
            vertical-align: top;
            margin-top: 5px;
        }

        .gptw-text {
            color: #666;
            font-size: 1rem;
            line-height: 1.6;
            margin-bottom: 15px;
        }

        .gptw-badge-large {
            width: 100%;
            max-width: 200px;
            height: auto;
            margin: 0 auto;
            display: block;
        }

        .gptw-company-logos {
            display: flex;
            flex-direction: column;
            gap: 15px;
            align-items: center;
            justify-content: center;
            height: 100%;
        }

        .gptw-logo-btn {
            padding: 12px 25px;
            border-radius: 25px;
            color: white;
            text-decoration: none;
            font-weight: bold;
            text-align: center;
            min-width: 150px;
            transition: transform 0.2s ease;
        }

        .gptw-logo-btn:hover {
            transform: translateY(-2px);
            color: white;
            text-decoration: none;
        }

        .gptw-logo-btn.allura {
            background-color: #1976d2;
        }

        .gptw-logo-btn.keystone {
            background-color: #d32f2f;
        }

        .gptw-logo-btn .company-name {
            font-size: 1.1rem;
            display: block;
        }

        .gptw-logo-btn .company-desc {
            font-size: 0.8rem;
            opacity: 0.9;
            display: block;
        }

        #contact h2 {
            font-size: 25px;
            color: #4f87bb;
        }

        #contact h2 {
            font-size: 25px;
            color: #4f87bb;
        }

        #what-we-do h2 {
            margin-bottom: 0;
        }

        .vertical-divider {
            width: 1px;
            height: 306px;
            background-color: #ee8902;
            display: inline-block;
            padding: 1px;
            position: relative;
            top: 20px;
        }

        .logo-gris {
            width: 435px;
            height: 168px;
            max-width: 100%;
            height: auto;
        }

        .img-grupo1 {
            width: 100%;
            height: auto;
            max-height: 400px;
            object-fit: contain;
            object-position: center;
        }

        .img-grupo2 {
            width: 100%;
            height: auto;
            max-height: 400px;
            object-fit: contain;
            object-position: center;
        }
        .menu2{
                display: none;
            }

        /* Breakpoints responsivos mejorados */
        @media (max-width: 1200px) {
            .align-txt {
                padding-left: 40px;
            }
            
            .img-grupo1,
            .img-grupo2 {
                max-height: 350px;
            }
        }

        @media (max-width: 768px) {
            .img-grupo1,
            .img-grupo2 {
                max-height: 280px;
            }
        }

        @media (max-width: 992px) {
            #ready-to-take .flex-img {
                min-height: 120px;
             }
             
             .three-images-container {
                 flex-direction: row;
                 gap: 10px;
                 justify-content: space-around;
             }
             
             /*.three-images-container img {
                 width: 120px;
                 height: 120px;
                 min-width: 100px;
                 min-height: 100px;
                 max-width: 120px;
                 max-height: 120px;
             }*/
             
            .vertical-divider {
                display: none;
                /* Oculta la línea en pantallas pequeñas */
            }
            
            .align-txt {
                padding-left: 0;
                text-align: center;
            }
            
            .logo-gris {
                width: 100%;
                max-width: 300px;
                height: auto;
            }
            
            .img-grupo1,
            .img-grupo2 {
                width: 100%;
                height: auto;
                max-height: 300px;
                object-fit: contain;
                object-position: center;
            }

            .grupos {
                flex-direction: column;
            }

            .foter {
                display: none;
            }

            .follow-div {
                display: block;
                text-align: center;
                margin-top: 20px;
            }

            .follow-div a {
                color: white;
                text-decoration: none;
                display: block;
                text-align: center;
                margin-bottom: 10px;
            }
            
            .menu2{
                display: block;
            }
            
            footer .menu2 a{
                color: white;
                text-decoration: none;
            }
            
            #ready-to-take .flex-blue {
                padding: 40px 15px;
            }
            
            #ready-to-take h4 {
                font-size: 1rem;
            }
            
            .three-images-container {
                flex-direction: row;
                gap: 5px;
                justify-content: center;
            }
            
            .three-images-container img {
                width: 32%;
                height: 100%;
            }
            
            .btn {
                padding: 15px 25px;
                font-size: 13px;
            }
            
            /* Responsive para Great Place to Work */
            .gptw-main-title {
                font-size: 1.4rem;
            }
            
            .gptw-text {
                font-size: 0.9rem;
            }
            
            .gptw-company-logos {
                flex-direction: row;
                justify-content: center;
                flex-wrap: wrap;
            }
            
            .gptw-logo-btn {
                min-width: 120px;
                padding: 10px 20px;
            }
        }


    </style>
    <title>Elementia USA</title>
</head>

<body>
    <header class="sticky-top">
        <div class="container-fluid pd-0" style="padding-right: 0;padding-left: 0;">
            <nav class="navbar py-3 bg-white border-bottom border-dark">
                <div class="logo"> <a class="navbar-brand" href="/">
                        <img width="150px" src="img/logos/logo.png" alt="Allura">
                    </a></div>
                <div class="menu">
                    <a href="#contacto_form">Contact us</a>
                </div>
            </nav>
        </div>

    </header>
    <section id="hero">
        <div class="container col-xxl-10 px-5">
            <div class="row align-items-center">
                <div class="col-lg-7 col-md-6">
                    <div class="content">
                        <img class="logo-gris mb-3" src="img/logos/logo-gris.png" alt="Elementia USA">
                        <p class="text-white mb-4 align-txt">Elementia USA provides shared business consolidation services to U.S.-based subsidiaries of Elementia Materiales and Fortaleza Materiales.</p>
                    </div>
                </div>
                <div class="col-lg-5 col-md-6 follow-div">
                  <!---  <a href="https://www.greatplacetowork.com/certified-company/7005415" target="_blank" class="d-block mb-3">
                        <img class="w-75px" src="img/logos/great-work.png" alt="Great Place to Work">
                    </a>-->
                    <a target="_blank" href="https://www.linkedin.com/company/elementia-usa-inc./" class="d-block">
                        Follow us on <img width="40" src="img/logos/linkedin.png" alt="LinkedIn">
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section id="about-us">
        <div class="container col-xxl-10 px-5">
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 text-center">
                    <img class="mx-auto mb-3" src="./img/about-us/Who-We-Are.svg" alt="Who We Are" style="max-width: 80px; height: auto;">
                    <h6 class="fw-bold">What we do</h6>
                    <p class="p-3">Our sister companies manufacture and market high-quality building materials, including cement, fiber cement solutions, and metal products to meet the demands of modern construction and infrastructure. Additionally, we lead in sustainable environmental solutions by transforming industrial waste into energy through advanced technology and processes.</p>
                </div>
                <div class="col-lg-4 col-md-6 text-center">
                    <img class="mx-auto mb-3" src="./img/about-us/Our-Philosophy.svg" alt="Our Philosophy" style="max-width: 80px; height: auto;">
                    <h6 class="fw-bold">How we do it</h6>
                    <p class="p-3">Driven by a commitment to quality, sustainability, and innovation, we strive to make a difference in our industries by creating value for our clients, communities, and stakeholders.</p>
                </div>
                <div class="col-lg-4 col-md-12 text-center">
                    <img class="mx-auto mb-3" src="./img/about-us/Our-Mission.svg" alt="Our Mission" style="max-width: 80px; height: auto;">
                    <h6 class="fw-bold">Our Presence</h6>
                    <p class="p-3">Our U.S. headquarters are based in Houston, Texas, with additional locations across several states throughout the continental United States. We proudly conduct business in the majority of U.S. territories, extending our reach to serve clients and communities nationwide.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="logos">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="text-center fw-bold text-uppercase mb-5">Meet our group</h2>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12 mb-4 mb-lg-0">
                    <div class="position-relative">
                        <img class="img-grupo1 w-100" src="img/sections/keystone-g1.png" alt="Keystone Group" usemap="#image-map">
                        <map name="image-map">
                            <area target="_blank" alt="fortaleza" title="fortaleza" href="https://www.fortalezamateriales.com/en.html" coords="31,6,402,134" shape="rect">
                            <area target="_blank" alt="" title="" href="https://www.keystonecement.us/" coords="63,278,371,370" shape="rect">
                         </map>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="position-relative">
                        <img class="img-grupo2 w-100" src="img/sections/allura-g2.png" alt="Allura Group" usemap="#image-map2">
                        <map name="image-map2">
                            <area target="_blank" alt="elementiamateriales" title="elementiamateriales" href="https://www.elementiamateriales.com/en.html" coords="32,10,406,134" shape="rect">
                            <area target="_blank" alt="allurausa" title="allurausa" href="https://allurausa.com/" coords="63,278,370,365" shape="rect">
                        </map>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="ready-to-take">
        <div class="row margin-0">
            <div class="col-lg-7 col-md-12 flex-img great order-2 order-lg-1">
                <div class="three-images-container">
                    <img src="img/sections/hombre1.jpg" alt="">
                    <img src="img/sections/mujer1.jpg" alt="">
                    <img src="img/sections/hombre2.jpg" alt="">
                    
                </div>
            </div>
            <div class="col-lg-5 col-md-12 flex-blue text-white d-flex justify-content-center align-items-center order-1 order-lg-2">
                <div class="p-4">
                    <h4 class="fw-semibold text-uppercase text-center fs-1-1-rem">READY TO TAKE THE NEXT STEP IN YOUR CAREER IN ONE OF OUR COMPANIES?</h4>
                    <p class="mb-4 text-center">We are currently seeking talented individuals to join our dynamic team.</p>
                    <div class="text-center">
                        <a href="https://workforcenow.adp.com/mascsr/default/mdf/recruitment/recruitment.html?cid=20bed66c-821a-479c-aab7-531b6941a26e&ccId=9200775418314_2&lang=en_US" target="_blank" class="btn btn-red btn-lg">Keystone Careers</a>
                        <a href="https://workforcenow.adp.com/mascsr/default/mdf/recruitment/recruitment.html?cid=b5c5eb16-839b-46ec-a528-c40f4df252d0&ccId=9200448970359_2&lang=en_US" target="_blank" class="btn btn-azul-claro btn-lg">Allura Careers</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="great-place-to-work">
            <div class="row">
                <!-- Columna 1: Great Place to Work Certified con datos -->
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="gptw-column">
                        <div class="gptw-data-section">
                            <h3 class="gptw-title">We're Great Place to Work-Certified</h3>
                            <img src="img/logos/great-work.png" alt="Great Place to Work Certified" class="gptw-badge-small">
                            <div class="gptw-company-name">ELEMENTIA MATERIALES</div>
                            
                            <div class="gptw-bar-chart">
                                <div class="gptw-bar">
                                    <div class="gptw-bar-fill" style="width: 76%"></div>
                                    <span class="gptw-bar-label">EL MEJOR LUGAR PARA TRABAJAR</span>
                                    <span class="gptw-bar-percentage">76%</span>
                                </div>
                                <div class="gptw-bar">
                                    <div class="gptw-bar-fill dark" style="width: 57%"></div>
                                    <span class="gptw-bar-label">Toda la empresa</span>
                                    <span class="gptw-bar-percentage">57%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Columna 2: Texto principal -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="gptw-column">
                        <h2 class="gptw-main-title">
                            <span class="gptw-icon"></span>Our Culture and our people make us Strong
                        </h2>
                        <p class="gptw-text">
                           For the third consecutive year, we’ve been proudly certified as a Great Place to Work.
                           This achievement reflects our vibrant culture, our unwavering commitment, and—above all—the passion of every individual in our incredible family.

                        </p>
                        <p class="gptw-text">
                            Together, we continue to build a workplace where people thrive, grow, and feel truly valued.
                        </p>
                    </div>
                </div>

                <!-- Columna 3: Badge grande de certificación -->
                <div class="col-lg-2 col-md-6 mb-4">
                    <div class="gptw-column d-flex align-items-center justify-content-center">
                        <img src="img/logos/great-work.png" alt="Great Place to Work Certified" class="gptw-badge-large">
                    </div>
                </div>

                <!-- Columna 4: Logos de empresas -->
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="gptw-column d-flex align-items-center justify-content-center">
                        <div class="gptw-company-logos">
                            <a href="https://allurausa.com/" target="_blank" class="gptw-logo-btn allura">
                                <span class="company-name">ALLURA</span>
                            </a>
                            <a href="https://www.keystonecement.us/" target="_blank" class="gptw-logo-btn keystone">
                                <span class="company-name">KEYSTONE</span>
                                <span class="company-desc">CEMENT COMPANY</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    <section id="what-we-do">
        <div class="container col-xxl-10 px-5">
            <div class="row text-center">
                <div class="col-md-12">
                    <h2 class="fw-semibold  text-uppercase">What can we do for you?</h2>
                </div>
            </div>
        </div>
    </section>




    <section id="contact">
        <div class="container col-xxl-10 px-5">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="fw-semibold text-center">Contact Us</h6>
                        <p class="text-center fw-bold mb-5">Get in touch by filling out the form below.</p>
                </div>
                <div class="col-lg-10 col-md-12 offset-lg-1">
                    <?php
                    include('smtp.php');
                    if (isset($_POST['submit'])) {
                       $error = [];


                       if (!empty($_POST['website'])) {
                            exit;
                        }


                       // reCAPTCHA validation
                       $recaptcha_secret =  getenv('RECAPTCHA_SECRET_KEY');

                       $recaptcha_response = $_POST['g-recaptcha-response'] ?? '';

                       $verify = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$recaptcha_secret&response=$recaptcha_response");
                       $captcha_success = json_decode($verify);

                       if (!$captcha_success->success) {
                            echo '<p style="color:red;">Captcha verification failed. Please try again.</p>';
                       }
                       else {

                            $emailSanitized = filter_var(trim($_POST['email'], FILTER_SANITIZE_EMAIL));

                            $name = htmlspecialchars(stripslashes(trim($_POST['first-name'])));
                            $phone = htmlspecialchars(stripslashes(trim($_POST['phone'])));
                            $company = htmlspecialchars(stripslashes(trim($_POST['company'])));
                            $email = htmlspecialchars(stripslashes($emailSanitized));
                            $message = htmlspecialchars(stripslashes(trim($_POST['message'])));

                            if (!preg_match("/^[A-Za-zñÑáéíóúÁÉÍÓÚ.-]+(?:[-\s][A-Za-zñÑáéíóúÁÉÍÓÚ.-]+)*$/", $name)) {
                                $error['name'] = 'Invalid name';
                            }
                            if (!preg_match("/^\+?[0-9\s.-]{7,15}$/", $phone)) {
                                $error['phone'] = 'Invalid phone number';
                            }
                            if (!preg_match("/[A-Za-zñÑáéíóúÁÉÍÓÚ.-]+(?:[-\s][A-Za-zñÑáéíóúÁÉÍÓÚ.-]+)*$/", $company)) {
                                $error['company'] = 'Invalid company';
                            }
                            if (!preg_match("/^\w+([.-_+]?\w+)*@\w+([.-]?\w+)*(\.\w{2,10})+$/", $email)) {
                                $error['email'] = 'Invalid email';
                            }
                            if (strlen($message) === 0) {
                                $error['message'] = 'Your message should not be empty';
                            }

                            if (empty($error)) {
                                try {

                                    $body_text = "Name: " . $name . "\r\n Phone: " . $phone . "\r\n Email: " . $email . "\r\n Company: " . $company . "\r\n Message: " . $message;
                                    $bodyhtml = "Name: " . $name . "<br>Phone: " . $phone . "<br> Email: " . $email . "<br> Company: " . $company . "<br> Message: " . $message;
                                    $mail->setFrom('it@investorcloud.net', 'no-reply'); // Cambia esto a tu dirección y nombre de remitente
                                    $mail->addAddress('it@kaplinski.ca', 'IT'); // Cambia esto a la dirección y nombre del destinatario
                                    $mail->addCC('sgutierrez@elementia.com', 'Sergio'); // Cambia esto a la dirección y nombre del destinatario
                                    $mail->addCC('cnofrieta@elementia.com', 'cnofrieta');
                                    $mail->addCC('amcbride@elementia.com', 'amcbride');
                                    $mail->Subject = 'Usuario anonimo desea contactar con elementia USA';
                                    $mail->Body    = $bodyhtml;
                                    $mail->AltBody    = $body_text;
                                    // Enviar el correo electrónico
                                    $mail->send();
                                    echo '<p style="color: green">Message sent</p>';
                                    $email = $company = $phone = $name = '';
                                } catch (Exception $e) {
                                    echo "Error al enviar el correo: {$mail->ErrorInfo}";
                                }
                            }
                      }
                    }
                    ?>
                    <form class="row g-4 needs-validation " method="post" id="contacto_form">
                        <input type="text" name="website" style="display:none">
                        <div class="col-md-6">
                            <input value="<?php if (isset($name)) echo $name; ?>" class="form-control form-control-lg <?php if (isset($$error['name'])) echo 'invalid-field '; ?>" name="first-name" placeholder="First Name">
                            <?php
                            if (isset($error['name'])) { ?>
                                <div class="invalid-feedback">
                                    Insert a valid First Name
                                </div>
                            <?php } ?>
                        </div>
                        <div class="col-md-6">

                            <input value="<?php if (isset($company)) echo $company; ?>" type="text" class="form-control form-control-lg" name="company" placeholder="Company Name">
                            <?php
                            if (isset($error['company'])) { ?>
                                <div class="invalid-feedback">
                                    Insert a valid Company Name
                                </div>
                            <?php } ?>
                        </div>
                        <div class="col-12">

                            <input value="<?php if (isset($phone)) echo $phone; ?>" type="text" class="form-control form-control-lg" name="phone" placeholder="Phone">
                            <?php
                            if (isset($error['phone'])) { ?>
                                <div class="invalid-feedback">
                                    Insert a valid Phone
                                </div>
                            <?php } ?>
                        </div>
                        <div class="col-12">
                            <input value="<?php if (isset($email)) echo $email; ?>" type="email" class="form-control form-control-lg" name="email" placeholder="Email">
                            <?php
                            if (isset($error['email'])) { ?>
                                <div class="invalid-feedback">
                                    Insert a valid Email
                                </div>
                            <?php } ?>
                        </div>
                        <div class="col-12">
                            <textarea type="text" rows="5" cols="50" class="form-control form-control-lg" name="message" placeholder="Message"></textarea>
                            <?php
                            if (isset($error['message'])) { ?>
                                <div class="invalid-feedback">
                                    Your message should not be empty
                                </div>
                            <?php } ?>
                        </div>
                        <div class="col-12">
                            <div class="g-recaptcha" data-sitekey="6Lfmy34rAAAAAANXgrkWJeLrjKyJrRgF9kAoJSoC"></div>
                        </div>
                        <div class="col-12 text-center">
                            <input class="btn btn-primary" type="submit" name="submit" value="Submit">

                            <!-- <button type="submit" class="btn btn-primary">Submit</button> -->
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="container col-xxl-10 px-5">
            <div class="row align-items-center">
                <div class="col-lg-4 col-md-6 text-center text-lg-start mb-3 mb-lg-0">
                    <img width="150px" src="img/logos/logo-azul.png" alt="Elementia USA" class="img-fluid">
                </div>
                <div class="col-lg-8 col-md-6">
                    <nav class="navbar py-3 bg-azul-oscuro foter">
                        <div class="menu">
                            <a href="https://investorcloud.s3.us-east-1.amazonaws.com/elementia_usa/Terms-of-Use.pdf" target="_blank">Terms of Use</a>
                            <a href="https://investorcloud.s3.us-east-1.amazonaws.com/elementia_usa/Privacy-Policy.pdf" target="_blank">Privacy Policy</a>
                            <a class="cursor-normal" href="javascript:void(0)">© Copyright <script>
                                    document.write(new Date().getFullYear())
                                </script>
                            </a>
                        </div>
                    </nav>
                    <div class="menu2 text-center">
                        <p><a href="https://investorcloud.s3.us-east-1.amazonaws.com/elementia_usa/Terms-of-Use.pdf" target="_blank">Terms of Use</a></p>
                        <p><a href="https://investorcloud.s3.us-east-1.amazonaws.com/elementia_usa/Privacy-Policy.pdf" target="_blank">Privacy Policy</a></p>
                        <p><a class="cursor-normal" href="javascript:void(0)">© Copyright <script>
                                document.write(new Date().getFullYear())
                            </script>
                        </a></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="./js/bootstrap.bundle.min.js"></script>
    <script src="./js/plyr.min.js"></script>
    <script src="./js/jquery-3.7.1.min.js"></script>
    <script src="https://unpkg.com/image-map-resizer@1.0.10/js/imageMapResizer.min.js"></script>
      <script>
        window.onload = () => {
          imageMapResize();
        };
      </script>
    <script src="./js/custom.min.js"></script>

    <?php

    if (isset($_POST['submit'])) {
    ?>
        <script>
            $(function() {
                $('html, body').animate({
                    scrollTop: $("#contacto_form").offset().top
                }, 10);
            });
        </script>
    <?php
    }
    ?>

    <?php

    if (empty($error)) {
    ?>
        <script>
            document.getElementById("contacto_form").reset();
        </script>
    <?php
    }
    ?>
</body>

</html>