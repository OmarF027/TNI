<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TNI ARENA | Experience the Night</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css">
    <link href="https://fonts.googleapis.com/css2?family=Kumbh+Sans:wght@400;700&display=swap" rel="stylesheet">
    <style>
        /* Fix Navbar */
        .navbar {
            background: #131313;
            transform: translateY(0) !important;
            opacity: 1 !important;
        }

        .navbar__menu {
            display: flex !important;
            transform: translateY(0) !important;
            opacity: 1 !important;
            flex-direction: row;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        @keyframes slideUp {
            from { transform: translateY(50px); opacity: 0; }
            to { transform: translateY(0); opacity: 1; }
        }

        .scroll-transition {
            opacity: 0;
            transition: all 0.8s ease-out;
        }

        .visible {
            opacity: 1;
            transform: translateY(0) !important;
        }

        .hover-scale {
            transition: transform 0.3s ease-in-out;
        }

        .hover-scale:hover {
            transform: scale(1.03);
        }

        .section-spacing {
            padding: 0;
        }

        body, html {
            margin: 0;
            padding: 0;
            font-family: 'Kumbh Sans', sans-serif;
        }

        @media screen and (max-width: 960px) {
            .navbar__menu {
                display: flex;
                flex-direction: column;
                width: 100%;
                height: 90vh;
                position: absolute;
                top: 80px;
                left: -100%;
                opacity: 1;
                transition: all 0.5s ease;
            }

            .navbar__menu.active {
                background: #131313;
                left: 0;
                opacity: 1;
                transition: all 0.5s ease;
                z-index: 1;
            }

            .navbar__toggle.is-active .bar:nth-child(1) {
                transform: rotate(45deg) translate(5px, 5px);
            }

            .navbar__toggle.is-active .bar:nth-child(2) {
                opacity: 0;
            }

            .navbar__toggle.is-active .bar:nth-child(3) {
                transform: rotate(-45deg) translate(5px, -5px);
            }
        }

        /* Modifica per centrato titolo NEXT EVENT */
        .next-event {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            margin-top: -80px; /* Aggiunto per avvicinare al Hero */
            background: #0a0a0a;
            padding: 50px 0; /* Per dare spazio sopra e sotto il titolo */
        }

        .next-event h1 {
            margin-bottom: 20px;
            font-size: 2.5em;
            text-transform: uppercase;
            letter-spacing: 3px;
            text-align: center;
        }
    </style>
    <link rel="stylesheet" href="css/generali.css">
    <link rel="stylesheet" href="css/mediaqueries.css">
    <link rel="stylesheet" href="css/content.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/footer.css">
</head>
<body>
    <!-- Navbar Section -->
    <nav class="navbar">
        <div class="navbar__container">
            <a href="/" id="navbar__logo" style="display: flex; align-items: center;">
                <img src="images/logo.jpg" alt="TNI Logo" class="hover-scale" style="height: 50px; margin-right: 10px;">
            </a>
            <div class="navbar__toggle" id="mobile-menu">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>
            <ul class="navbar__menu">
                <li class="navbar__item">
                    <a href="/" class="navbar__links">Home</a>
                </li>
                <li class="navbar__item">
                    <a href="#next-event" class="navbar__links">Eventi</a>
                </li>
                <li class="navbar__btn">
<<<<<<< HEAD
                    <a href="/contatti.php" class="button">Contatti</a>
=======
                    <a href="/signup.php" class="button" style="transition: all 0.3s ease;">Contatti</a>
>>>>>>> 8cc9a0c3a5cd39668b0005119a7e114e0b06caee
                </li>
            </ul>
        </div>
    </nav>

<<<<<<< HEAD
<!-- Hero Section -->
<div class="main section-spacing scroll-transition" style="background: linear-gradient(45deg, #0a0a0a 30%, #1a1a1a 100%);">
    <div class="main__container">
        <div class="main__content" style="animation: slideUp 1s ease-out; transform: translateY(20px);">
            <h1 style="text-shadow: 0 0 15px rgba(255,255,255,0.5);">TNI ARENA</h1>
            <h2 style="color: #ff4d4d; margin: 20px 0;">VIVI LA NOTTE</h2>
            <p style="font-size: 1.2em; letter-spacing: 2px;">Scopri l'esperienza TNI</p>
            <button class="main__btn" style="transition: all 0.3s ease; background: #ff4d4d;">
                <a href="#" style="text-decoration: none; color: white;">Contattaci</a>
            </button>
        </div>
        <div class="main__img--container hover-scale">
            <img id="main__img" src="images/tni_interni.jpg" alt="TNI Party Image" 
                 style="box-shadow: 0 10px 30px rgba(255,77,77,0.3);">
        </div>
    </div>
</div>

    <!-- Next Event Section -->
    <div class="next-event section-spacing scroll-transition" id="next-event">
        <h1>NEXT EVENT</h1>
=======
    <!-- Hero Section -->
    <div class="main section-spacing scroll-transition" style="transform: translateY(20px); background: linear-gradient(45deg, #0a0a0a 30%, #1a1a1a 100%);">
        <div class="main__container">
            <div class="main__content" style="animation: slideUp 1s ease-out;">
                <h1 style="text-shadow: 0 0 15px rgba(255,255,255,0.5);">TNI ARENA</h1>
                <h2 style="color: #ff4d4d; margin: 20px 0;">VIVI LA NOTTE</h2>
                <p style="font-size: 1.2em; letter-spacing: 2px;">Scopri l'esperienza TNI</p>
                <button class="main__btn" style="transition: all 0.3s ease; background: #ff4d4d;">
                    <a href="#" style="text-decoration: none; color: white;">Contattaci</a>
                </button>
            </div>
            <div class="main__img--container hover-scale">
                <img id="main__img" src="images/tni_interni.jpg" alt="TNI Party Image" 
                     style="border-radius: 10px; box-shadow: 0 10px 30px rgba(255,77,77,0.3);">
            </div>
        </div>
    </div>

    <!-- Next Event Section -->
    <div class="next-event section-spacing scroll-transition" id="next-event" style="transform: translateY(30px); background: #0a0a0a;">
        <h1 style="text-align: center; margin-bottom: 40px; font-size: 2.5em; text-transform: uppercase; letter-spacing: 3px;">NEXT EVENT</h1>
>>>>>>> 8cc9a0c3a5cd39668b0005119a7e114e0b06caee
        <div class="next-event__container" style="background: rgba(255,255,255,0.05); border-radius: 15px; padding: 30px;">
            <div class="next-event__image hover-scale" style="overflow: hidden; border-radius: 10px;">
                <a href="images/analogichills21.jpg" target="_blank">
                    <img src="images/analogichills21.jpg" alt="Analogic Hills 2025" 
                         style="transition: transform 0.3s ease; width: 100%;">
                </a>
            </div>
            <div class="next-event__description" style="padding: 30px;">
                <h2 style="color: #ff4d4d; font-size: 2em; margin-bottom: 20px;">TNI OPENING</h2>
                <p style="line-height: 1.6; font-size: 1.1em;">L'evento più atteso dell'anno torna con una lineup esplosiva! Quest'anno i Resonance T4 saranno protagonisti alla consolle come ospiti d'eccezione!</p>
                <ul class="event-details" style="margin: 25px 0; padding: 0; list-style: none;">
                    <li style="margin: 15px 0; font-size: 1.1em;"><i class="fas fa-calendar-alt" style="margin-right: 10px; color: #ff4d4d;"></i>1° Maggio 2025</li>
                    <li style="margin: 15px 0; font-size: 1.1em;"><i class="fas fa-clock" style="margin-right: 10px; color: #ff4d4d;"></i>Ore 12:00 - 06:00</li>
                    <li style="margin: 15px 0; font-size: 1.1em;"><i class="fas fa-map-marker-alt" style="margin-right: 10px; color: #ff4d4d;"></i>TNI Arena, Cecina (LI)</li>
                </ul>
                <a href="#" class="ticket-btn" 
                   style="display: inline-block; padding: 15px 40px; background: #ff4d4d; color: white; 
                          text-decoration: none; border-radius: 25px; font-weight: bold; transition: all 0.3s ease;
                          box-shadow: 0 5px 15px rgba(255,77,77,0.3);">
                    ACQUISTA BIGLIETTI
                </a>
            </div>
        </div>
    </div>

    <!-- Footer Section -->
    <div class="footer__container scroll-transition" style="transform: translateY(20px); background: #000; padding: 50px 0;">
        <section class="social__media">
            <div class="social__media--wrap">
                <div class="footer__logo">
                    <p class="website__rights" style="color: #888; margin: 20px 0;">57023 Cecina (LI)</p>
                </div>
                <p class="website__rights" style="color: #666;">© TNI 2025. Tutti i diritti riservati</p>
                <div class="social__icons">
<<<<<<< HEAD
=======
                    <!-- Icone social con effetto hover -->
>>>>>>> 8cc9a0c3a5cd39668b0005119a7e114e0b06caee
                    <a class="social__icon--link" href="/" target="_blank" aria-label="Facebook"
                       style="margin: 0 10px; transition: all 0.3s ease;">
                        <i class="fab fa-facebook" style="color: #fff; font-size: 1.5em;"></i>
                    </a>
                    <a class="social__icon--link" href="/" target="_blank" aria-label="Instagram"
                       style="margin: 0 10px; transition: all 0.3s ease;">
                        <i class="fab fa-instagram" style="color: #fff; font-size: 1.5em;"></i>
                    </a>
                    <a class="social__icon--link" href="/" target="_blank" aria-label="Youtube"
                       style="margin: 0 10px; transition: all 0.3s ease;">
                        <i class="fab fa-youtube" style="color: #fff; font-size: 1.5em;"></i>
                    </a>
                </div>
            </div>
        </section>
    </div>

    <script src="app.js"></script>
</body>
</html>

