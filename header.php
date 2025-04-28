<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TNI ARENA | Experience the Night</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css">
    <link href="https://fonts.googleapis.com/css2?family=Kumbh+Sans:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/generali.css">
    <link rel="stylesheet" href="css/mediaqueries.css">
    <link rel="stylesheet" href="css/content.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/footer.css">

    <style>
        /* Navbar */
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

        /* Animazioni */
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

        .section-spacing {
            padding: 0;
        }

        body, html {
            margin: 0;
            padding: 0;
            font-family: 'Kumbh Sans', sans-serif;
        }

        /* Logo navbar */
        .navbar__container img {
            cursor: default !important;
            transition: transform 0.3s ease-in-out;
            transform-origin: center;
        }

        .navbar__container img:hover {
            transform: scale(1.1);
        }

        /* Responsive Navbar */
        @media screen and (max-width: 960px) {
            .navbar__menu {
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

        /* Stile pulsanti */
        .btn-red {
            display: inline-block;
            padding: 15px 40px;
            background: #ff4d4d;
            color: white;
            text-decoration: none;
            border-radius: 25px;
            font-weight: bold;
            transition: all 0.3s ease;
            box-shadow: 0 5px 15px rgba(255,77,77,0.3);
        }

        .btn-red:hover {
            background: #e64444;
            box-shadow: 0 8px 20px rgba(255,77,77,0.4);
        }

        /* Sezione Next Event */
        .next-event {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            margin-top: -80px;
            background: #0a0a0a;
            padding: 50px 0;
        }

        .next-event h1 {
            margin-bottom: 20px;
            font-size: 2.5em;
            text-transform: uppercase;
            letter-spacing: 3px;
            text-align: center;
        }
    </style>
</head>
<body>
    <!-- Navbar Section -->
    <nav class="navbar">
        <div class="navbar__container">
            <div id="navbar__logo" style="display: flex; align-items: center;">
                <img src="images/logo.jpg" alt="TNI Logo" style="height: 50px; margin-right: 10px;">
            </div>
            <div class="navbar__toggle" id="mobile-menu">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>
            <ul class="navbar__menu">
    <li class="navbar__item">
        <a href="index.php" class="navbar__links">Home</a>
    </li>
    <li class="navbar__item">
    <a href="index.php#next-event" class="navbar__links">Eventi</a>
    </li>
    <li class="navbar__item">
        <a href="contatti.php" class="navbar__links">Contatti</a>
    </li>
</ul>
        </div>
    </nav>

