<?php include('header.php'); ?>

<style>
  body {
    background-color: #0a0a0a;
  }
</style>

<!-- Hero Section -->
<div class="main section-spacing scroll-transition" style="background: linear-gradient(45deg, #0a0a0a 30%, #1a1a1a 100%);">
    <div class="main__container">
        <div class="main__content" style="animation: slideUp 1s ease-out;">
        <h1 style="color: #ff4d4d; text-shadow: 0 0 15px rgba(255,77,77,0.5);">TNI ARENA</h1>
            <h2 style="color: #ff4d4d; margin: 20px 0;">VIVI LA NOTTE</h2>
            <p style="font-size: 1.2em; letter-spacing: 2px;">Scopri l'esperienza TNI</p>
            
            <!-- Ecco il tasto nella posizione originale -->
            <a href="/contatti.php" class="btn-red" style="margin-top: 20px;">Contattaci</a>

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
            <a href="#" class="btn-red">ACQUISTA BIGLIETTI</a>
        </div>
    </div>
</div>

<?php include('footer.php'); ?>


