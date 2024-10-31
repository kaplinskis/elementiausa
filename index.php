<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/plyr.min.css" />
    <link rel="stylesheet" href="./css/custom.min.css">
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
            padding: 90px 30px;
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

        .flex-img.great {
            display: flex;
            align-items: center;
            justify-content: flex-end;
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
            <div class="row">
                <div class="col-md-7">
                    <div class="content">
                        <img src="img/logos/logo-gris.png" alt="Allura" style="width:435px; height: 168px">
                        <p class="text-white mb-4">Elementia USA provides shared business consolidation services to U.S.-based subsidiaries of Elementia Materiales and Fortaleza Materiales.</p>

                    </div>
                </div>
                <div class="col-md-5 follow-div">
                    <a target="_blank" href="https://www.linkedin.com/company/elementia-usa-inc./">Follow us on <img width="40" src="img/logos/linkedin.png" alt="Allura"></a>
                </div>
            </div>

        </div>
    </section>

    <section id="about-us">
        <div class="container col-xxl-10 px-5">
            <div class="row">
                <div class="col-md-4 text-center">
                    <img class="mx-auto mb-3" src="./img/about-us/Who-We-Are.svg" alt="Who We Are">
                    <h6 class="fw-bold">What we do</h6>
                    <p class="p-3">Our sister companies manufacture and market high-quality building materials, including cement, fiber cement solutions, and metal products to meet the demands of modern construction and infrastructure. Additionally, we lead in sustainable environmental solutions by transforming industrial waste into energy through advanced technology and processes.</p>
                </div>
                <div class="col-md-4 text-center">
                    <img class="mx-auto mb-3" src="./img/about-us/Our-Philosophy.svg" alt="Our Philosophy">
                    <h6 class="fw-bold">How we do it</h6>
                    <p class="p-3">Driven by a commitment to quality, sustainability, and innovation, we strive to make a difference in our industries by creating value for our clients, communities, and stakeholders.</p>
                </div>
                <div class="col-md-4 text-center">
                    <img class="mx-auto mb-3" src="./img/about-us/Our-Mission.svg" alt="Our Mission">
                    <h6 class="fw-bold">Our Presence</h6>
                    <p class="p-3">Our U.S. headquarters are based in Houston, Texas, with additional locations across several states throughout the continental United States. We proudly conduct business in the majority of U.S. territories, extending our reach to serve clients and communities nationwide.</p>
                </div>

            </div>
        </div>
    </section>

    <section id="logos">
        <div class="container col-xxl-10 px-5">
            <div class="row">
                <h5 class="text-center fw-bold mb-4">Meet our group</h5>
                <div class="col-md-6">
                    <img src="img/sections/grupo1.png" alt="" usemap="#image-map" style="width:538px; height:352px">
                    <map name="image-map">
                        <area target="_blank" alt="Fortaleza Materiales" href="https://www.fortalezamateriales.com/en.html" coords="413,6,118,103" shape="rect">
                        <area target="_blank" alt="GCHI" href="https://www.gchi.com" coords="413,128,121,201" shape="rect">
                        <area target="_blank" alt="Giant cement" href="https://www.giantcement.us/" coords="16,223,128,337" shape="rect">
                        <area target="_blank" alt="Keystone Cement" href="https://www.keystonecement.us/" coords="145,224,257,338" shape="rect">
                        <area target="_blank" alt="Dragon cement" href="https://www.dragoncement.us/" coords="273,222,387,335" shape="rect">
                        <area target="_blank" alt="GRR" href="www.grr-gchi.us" coords="404,223,518,336" shape="rect">
                    </map>
                </div>
                <div class="col-md-6">
                    <img src="img/sections/grupo2.png" alt="" usemap="#image-map2" style="width:538px; height:352px">
                    <map name="image-map2">
                        <area shape="rect" href="https://www.elementiamateriales.com/en.html" alt="Elementia Materiales" coords="126,14,414,106" target="_blank" />
                        <area shape="rect" href="https://allurausa.com/" alt="Allura" coords="25,250,269,320" target="_blank" />
                        <area shape="rect" href="https://www.nacobreusa.com/" alt="Nacobre" coords="293,247,531,318" target="_blank" />
                    </map>
                </div>
            </div>

        </div>
    </section>

    <section id="ready-to-take">
        <div class="row d-flex justify-content-between margin-0">
            <div class="col-md-6 flex-img great">
                <img class="w-100px" src="img/logos/great-work.png" alt="">
            </div>
            <div class="col-md-6 flex-blue text-white d-flex justify-content-center">
                <div>
                    <h4 class="fw-semibold text-uppercase text-center fs-1-1-rem">READY TO TAKE THE NEXT STEP IN YOUR CAREER IN ONE OF OUR COMPANIES?</h4>
                    <p class="mb-4 text-center">We are currently seeking talented individuals to join our dynamic team.</p>
                    <div class="text-center">
                        <a href="https://workforcenow.adp.com/mascsr/default/mdf/recruitment/recruitment.html?cid=b5c5eb16-839b-46ec-a528-c40f4df252d0&ccId=9200448970359_2&lang=en_US" target="_blank" class="btn btn-red btn-lg">GCHI Careers</a>
                        <a href="https://workforcenow.adp.com/mascsr/default/mdf/recruitment/recruitment.html?cid=04fcfc06-f798-4da9-a459-049fe296684b&ccId=19000101_000001&lang=en_US" target="_blank" class="btn btn-azul-claro btn-lg">Allura Careers</a>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section id="what-we-do">
        <div class="container col-xxl-10 px-5">
            <div class="row text-center">
                <div class="col-md-6">
                    <h2 class="fw-semibold  text-uppercase">What can we do for you?</h2>

                </div>
                <div class="col-md-6 ">
                    <a href="#contacto_form" class="btn btn-amarillo btn-lg">Contact us</a>
                </div>
            </div>
        </div>
    </section>




    <section id="contact">
        <div class="container col-xxl-10 px-5">
            <div class="row">
                <div class="col-md-12">
                    <h6 class="fw-semibold text-center">Contact Us</h6>
                    <h5 class="text-center fw-bold mb-5">Get in touch by filling out the form below.</h5>
                </div>
                <div class="col-md-10 offset-md-1">
                    <?php
                    include('smtp.php');
                    if (isset($_POST['submit'])) {
                        $error = [];

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
                                $mail->addAddress('davidrm901503@gmail.com', 'IT'); // Cambia esto a la dirección y nombre del destinatario
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
                    ?>
                    <form class="row g-4 needs-validation " method="post" id="contacto_form">
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
            <div class="d-flex justify-content-between">
                <img width="150px" src="img/logos/logo-azul.png" alt="Allura">
                <nav class="navbar py-3 bg-azul-oscuro">
                    <div class="menu">
                        <a href="https://investorcloud.s3.us-east-1.amazonaws.com/elementia_usa/Terms-of-Use.pdf" target="_blank">Terms of Use</a>
                        <a href="https://investorcloud.s3.us-east-1.amazonaws.com/elementia_usa/Privacy-Policy.pdf" target="_blank">Privacy Policy</a>
                        <a class="cursor-normal" href="javascript:void(0)">© Copyright <script>
                                document.write(new Date().getFullYear())
                            </script>
                        </a>

                    </div>
                </nav>
            </div>
        </div>
    </footer>

    <script src="./js/bootstrap.bundle.min.js"></script>
    <script src="./js/plyr.min.js"></script>
    <script src="./js/jquery-3.7.1.min.js"></script>
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