<<<<<<< HEAD
<?php include('header.php'); ?>

<style>
  body {
    background-color: #0a0a0a;
  }

  @keyframes slideIn {
      0% {
          transform: translateX(-100%);
          opacity: 0;
      }
      100% {
          transform: translateX(0);
          opacity: 1;
      }
  }

  @keyframes zoomFade {
      0% {
          transform: scale(0.8);
          opacity: 0;
      }
      100% {
          transform: scale(1);
          opacity: 1;
      }
  }

  .map-card, .info-card {
      background: #1a1a1a;
      border-radius: 15px;
      padding: 30px;
      box-shadow: 0 0 20px rgba(0,0,0,0.4);
      opacity: 0;
      transform: scale(0.8);
      animation: zoomFade 1s ease forwards;
      transition: all 0.4s ease;
  }

  .map-card { animation-delay: 0.8s; }
  .info-card { animation-delay: 1s; }

  .map-card:hover, .info-card:hover {
      transform: scale(1.05);
      box-shadow: 0 0 30px rgba(255,77,77,0.6), 0 0 60px rgba(255,77,77,0.2);
  }

  .map-responsive {
      position: relative;
      padding-bottom: 75%;
      border-radius: 10px;
      overflow: hidden;
  }

  .map-responsive iframe {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      border: 0;
  }
</style>

<!-- Hero Section -->
<section class="hero-section" style="background: linear-gradient(45deg, #0a0a0a 30%, #1a1a1a 100%); min-height: 60vh; display: flex; align-items: center; overflow: hidden; position: relative;">
    <div class="container" style="width: 100%;">
        <div class="hero-content" style="position: relative; width: 100%; text-align: center; transform: translateY(-20px);">
            <div style="overflow: hidden; width: 100%; margin-bottom: 15px;">
                <h1 class="hero-title" 
                    style="color: #ff4d4d;
                           text-shadow: 0 0 15px rgba(255,77,77,0.6);
                           font-size: 3.5rem;
                           margin: 0 auto;
                           padding: 0 20px;
                           animation: slideIn 1s ease forwards;
                           animation-delay: 0.3s;
                           transform: translateX(-100%);
                           opacity: 0;
                           width: fit-content;">
                    Contatti
                </h1>
            </div>
            <div style="overflow: hidden; width: 100%;">
                <h2 class="hero-subtitle" 
                    style="color: #fff;
                           font-size: 1.8rem;
                           margin: 10px auto 0;
                           padding: 0 20px;
                           animation: slideIn 1s ease forwards;
                           animation-delay: 0.6s;
                           transform: translateX(-100%);
                           opacity: 0;
                           width: fit-content;">
                    TNI ARENA - Cecina (LI)
                </h2>
            </div>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section class="contact-section" style="padding: 80px 0; background-color: #141414;">
    <div class="container" style="max-width: 1200px; margin: 0 auto;">
        <div class="contact-grid" style="display: grid; grid-template-columns: 1fr 1fr; gap: 40px; align-items: start;">

            <!-- Mappa -->
            <div class="map-card">
                <h3 class="section-title" style="color: #ff4d4d; margin-bottom: 25px; font-size: 1.5rem;">
                    <i class="fas fa-map-marker-alt" style="margin-right: 10px;"></i>La nostra ubicazione
                </h3>
                <div class="map-responsive">
                    <iframe 
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2149.374958356135!2d10.51044631570033!3d43.30853187912236!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12d592dbc90b400f%3A0x79e7d8d4a4a558d0!2s58011%20Cecina%20LI!5e0!3m2!1sen!2sit!4v1623752689468!5m2!1sen!2sit" 
                        allowfullscreen="" 
                        loading="lazy">
                    </iframe>
                </div>
            </div>

            <!-- Info -->
            <div class="info-card">
                <h3 class="section-title" style="color: #ff4d4d; margin-bottom: 30px; font-size: 1.5rem;">
                    <i class="fas fa-info-circle" style="margin-right: 10px;"></i>Informazioni
                </h3>
                
                <div class="contact-info" style="margin-bottom: 25px;">
                    <div class="info-item" style="display: flex; align-items: center; margin-bottom: 20px;">
                        <i class="fas fa-map-pin" style="color: #ff4d4d; font-size: 1.2rem; width: 30px;"></i>
                        <p style="margin: 0; color: #fff; font-size: 1.1rem;">
                            57023 Cecina (LI)<br>
                            Toscana, Italia
                        </p>
                    </div>

                    <div class="info-item" style="display: flex; align-items: center; margin-bottom: 20px;">
                        <i class="fas fa-phone-alt" style="color: #ff4d4d; font-size: 1.2rem; width: 30px;"></i>
                        <p style="margin: 0; color: #fff; font-size: 1.1rem;">
                            <a href="tel:+391234567890" style="color: #fff; text-decoration: none;">
                                +39 123 456 7890
                            </a>
                        </p>
                    </div>

                    <div class="info-item" style="display: flex; align-items: center;">
                        <i class="fas fa-envelope" style="color: #ff4d4d; font-size: 1.2rem; width: 30px;"></i>
                        <p style="margin: 0; color: #fff; font-size: 1.1rem;">
                            <a href="mailto:info@tniarena.it" style="color: #ff4d4d; text-decoration: none;">
                                info@tniarena.it
                            </a>
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<?php include('footer.php'); ?>
=======
<?php include('header.php'); ?>

<style>
  body {
    background-color: #0a0a0a;
  }
</style>

<!-- Hero Section -->
<section class="hero-section" style="background: linear-gradient(45deg, #0a0a0a 30%, #1a1a1a 100%); min-height: 60vh; display: flex; align-items: center; overflow: hidden; position: relative;">
    <div class="container" style="width: 100%;">
        <div class="hero-content" style="position: relative; width: 100%; text-align: center; transform: translateY(-20px);">
            
            <!-- Titolo -->
            <div style="overflow: hidden; width: 100%; margin-bottom: 15px;">
                <h1 class="hero-title" 
                    style="color: #ff4d4d;
                           text-shadow: 0 0 15px rgba(255,77,77,0.6);
                           font-size: 3.5rem;
                           margin: 0 auto;
                           padding: 0 20px;
                           animation: slideIn 1s ease forwards;
                           animation-delay: 0.3s;
                           transform: translateX(-100%);
                           opacity: 0;
                           width: fit-content;">
                    Contatti
                </h1>
            </div>
            
            <!-- Sottotitolo -->
            <div style="overflow: hidden; width: 100%;">
                <h2 class="hero-subtitle" 
                    style="color: #fff;
                           font-size: 1.8rem;
                           margin: 10px auto 0;
                           padding: 0 20px;
                           animation: slideIn 1s ease forwards;
                           animation-delay: 0.6s;
                           transform: translateX(-100%);
                           opacity: 0;
                           width: fit-content;">
                    TNI ARENA - Cecina (LI)
                </h2>
            </div>
        </div>
    </div>
</section>

<!-- CSS Animazioni -->
<style>
    @keyframes slideIn {
        0% {
            transform: translateX(-100%);
            opacity: 0;
        }
        100% {
            transform: translateX(0);
            opacity: 1;
        }
    }

    @keyframes zoomFade {
        0% {
            transform: scale(0.8);
            opacity: 0;
        }
        100% {
            transform: scale(1);
            opacity: 1;
        }
    }

    /* Stile cards moderno */
    .map-card, .info-card {
        background: #1a1a1a;
        border-radius: 15px;
        padding: 30px;
        box-shadow: 0 0 20px rgba(0,0,0,0.4);
        opacity: 0;
        transform: scale(0.8);
        animation: zoomFade 1s ease forwards;
        transition: all 0.4s ease;
    }

    /* Delay diverso per le cards */
    .map-card {
        animation-delay: 0.8s;
    }

    .info-card {
        animation-delay: 1s;
    }

    /* Effetto hover */
    .map-card:hover, .info-card:hover {
        transform: scale(1.05);
        box-shadow: 0 0 30px rgba(255,77,77,0.6), 0 0 60px rgba(255,77,77,0.2);
    }

    .map-responsive {
        position: relative;
        padding-bottom: 75%;
        border-radius: 10px;
        overflow: hidden;
    }

    .map-responsive iframe {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        border: 0;
    }
</style>

<!-- Contact Section -->
<section class="contact-section" style="padding: 80px 0; background-color: #141414;">
    <div class="container" style="max-width: 1200px; margin: 0 auto;">
        <div class="contact-grid" style="display: grid; grid-template-columns: 1fr 1fr; gap: 40px; align-items: start;">

            <!-- Mappa -->
            <div class="map-card">
                <h3 class="section-title" style="color: #ff4d4d; margin-bottom: 25px; font-size: 1.5rem;">
                    <i class="fas fa-map-marker-alt" style="margin-right: 10px;"></i>La nostra ubicazione
                </h3>
                <div class="map-responsive">
                    <iframe 
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2149.374958356135!2d10.51044631570033!3d43.30853187912236!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12d592dbc90b400f%3A0x79e7d8d4a4a558d0!2s58011%20Cecina%20LI!5e0!3m2!1sen!2sit!4v1623752689468!5m2!1sen!2sit" 
                        allowfullscreen="" 
                        loading="lazy">
                    </iframe>
                </div>
            </div>

            <!-- Info Card -->
            <div class="info-card">
                <h3 class="section-title" style="color: #ff4d4d; margin-bottom: 30px; font-size: 1.5rem;">
                    <i class="fas fa-info-circle" style="margin-right: 10px;"></i>Informazioni
                </h3>
                
                <div class="contact-info" style="margin-bottom: 25px;">
                    <div class="info-item" style="display: flex; align-items: center; margin-bottom: 20px;">
                        <i class="fas fa-map-pin" style="color: #ff4d4d; font-size: 1.2rem; width: 30px;"></i>
                        <p style="margin: 0; color: #fff; font-size: 1.1rem;">
                            57023 Cecina (LI)<br>
                            Toscana, Italia
                        </p>
                    </div>

                    <div class="info-item" style="display: flex; align-items: center; margin-bottom: 20px;">
                        <i class="fas fa-phone-alt" style="color: #ff4d4d; font-size: 1.2rem; width: 30px;"></i>
                        <p style="margin: 0; color: #fff; font-size: 1.1rem;">
                            <a href="tel:+391234567890" style="color: #fff; text-decoration: none;">
                                +39 123 456 7890
                            </a>
                        </p>
                    </div>

                    <div class="info-item" style="display: flex; align-items: center;">
                        <i class="fas fa-envelope" style="color: #ff4d4d; font-size: 1.2rem; width: 30px;"></i>
                        <p style="margin: 0; color: #fff; font-size: 1.1rem;">
                            <a href="mailto:info@tniarena.it" style="color: #ff4d4d; text-decoration: none;">
                                info@tniarena.it
                            </a>
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<?php include('footer.php'); ?>
>>>>>>> 96813632b0111aebef4fd22f23d3731018bc7974
