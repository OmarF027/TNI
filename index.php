<?php include('header.php'); ?>

<style>
  body {
    background-color: #0a0a0a;
  }

  @keyframes fadeSlideIn {
    from {
      opacity: 0;
      transform: translateY(20px);
    }
    to {
      opacity: 1;
      transform: translateY(0);
    }
  }

  @keyframes slideUp {
    from {
      opacity: 0;
      transform: translateY(30px);
    }
    to {
      opacity: 1;
      transform: translateY(0);
    }
  }
</style>

<!-- Hero Section -->
<div class="main section-spacing scroll-transition" style="background: linear-gradient(45deg, #0a0a0a 30%, #1a1a1a 100%);">
    <div class="main__container">
        <div class="main__content" style="animation: slideUp 1s ease-out;">
            <h1 style="color: #ff4d4d; text-shadow: 0 0 15px rgba(255,77,77,0.5);">TNI ARENA</h1>
            <h2 style="color: #ff4d4d; margin: 20px 0;">VIVI LA NOTTE</h2>
            <p style="font-size: 1.2em; letter-spacing: 2px;">Scopri l'esperienza TNI</p>
            <a href="/contatti.php" class="btn-red" style="margin-top: 20px;">Contattaci</a>
        </div>
        <div class="main__img--container hover-scale">
            <img id="main__img" src="images/tni_interni.jpg" alt="TNI Party Image" 
                 style="box-shadow: 0 10px 30px rgba(255,77,77,0.3); width: 100%; display: block;">
        </div>
    </div>
</div>

<!-- Next Event Section -->
<div class="next-event section-spacing scroll-transition" id="next-event">

    <h1 style="text-align: center; font-size: 3em; color: white; 
               animation: fadeSlideIn 1s ease forwards !important;">
        PROSSIMO EVENTO
    </h1>

    <div class="next-event__container" style="background: rgba(255,255,255,0.05); border-radius: 15px; padding: 30px; transition: background 0.3s ease, transform 0.3s ease;">
        <div class="next-event__image hover-scale" style="overflow: hidden; border-radius: 10px; transition: transform 0.5s ease;">
            <a href="images/analogichills21.jpg" target="_blank" style="display: block; transition: transform 0.3s ease;">
                <img src="images/analogichills21.jpg" alt="Analogic Hills 2025" 
                     style="transition: transform 0.6s ease, filter 0.4s ease; width: 100%; display: block;">
            </a>
        </div>
        <div class="next-event__description" 
             style="padding: 30px; transition: transform 0.4s ease, box-shadow 0.4s ease;"
             onmouseover="this.style.transform='scale(1.03)'; this.style.boxShadow='0 10px 25px rgba(0,0,0,0.3)';"
             onmouseout="this.style.transform='scale(1)'; this.style.boxShadow='none';">
            <h2 style="color: #ff4d4d; font-size: 2em; margin-bottom: 20px; transition: color 0.3s ease;">TNI OPENING</h2>
            <p style="line-height: 1.6; font-size: 1.1em; transition: color 0.3s ease, transform 0.3s ease;">L'evento più atteso dell'anno torna con una lineup esplosiva! Quest'anno i Resonance T4 saranno protagonisti alla consolle come ospiti d'eccezione!</p>
            <ul class="event-details" style="margin: 25px 0; padding: 0; list-style: none; transition: all 0.3s ease;">
                <li style="margin: 15px 0; font-size: 1.1em; transition: color 0.3s ease;">
                    <i class="fas fa-calendar-alt" style="margin-right: 10px; color: #ff4d4d;"></i>1° Maggio 2025
                </li>
                <li style="margin: 15px 0; font-size: 1.1em; transition: color 0.3s ease;">
                    <i class="fas fa-clock" style="margin-right: 10px; color: #ff4d4d;"></i>Ore 12:00 - 06:00
                </li>
                <li style="margin: 15px 0; font-size: 1.1em; transition: color 0.3s ease;">
                    <i class="fas fa-map-marker-alt" style="margin-right: 10px; color: #ff4d4d;"></i>TNI Arena, Cecina (LI)
                </li>
            </ul>
            <a href="https://www.dice.fm" target="_blank" class="btn-red" style="display: inline-block; padding: 12px 25px; background-color: #ff4d4d; color: white; border-radius: 5px; text-decoration: none; font-weight: bold; transition: background-color 0.3s ease, transform 0.3s ease;"
            onmouseover="this.style.transform='scale(1.05)'; this.style.backgroundColor='#e63b3b';"
            onmouseout="this.style.transform='scale(1)'; this.style.backgroundColor='#ff4d4d';">
            ACQUISTA BIGLIETTI
            </a>


        </div>
    </div>
</div>

<?php include('footer.php'); ?>



