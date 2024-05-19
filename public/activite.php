<?php session_start();?>

<!DOCTYPE html>
<html style="font-size: 16px;" lang="fr"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="Activités du centre">
    <meta name="description" content="">
    <title>activite</title>
    <link rel="stylesheet" href="../css/nicepage.css" media="screen">
<link rel="stylesheet" href="../css/activite.css" media="screen">
    <script class="u-script" type="text/javascript" src="../js/jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="../js/nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 6.8.9, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    
    
    
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "",
		"logo": "images/logo-removebg-preview.png"
}</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="activite">
    <meta property="og:type" content="website">
  <meta data-intl-tel-input-cdn-path="intlTelInput/"></head>
  <body data-path-to-root="./" data-include-products="false" class="u-body u-xl-mode" data-lang="fr"><header class=" u-border-no-bottom u-border-no-left u-border-no-right u-border-no-top u-clearfix u-header u-section-row-container" id="sec-486b" style=""><div class="u-section-rows">
        <div class="u-black u-clearfix u-section-row" data-animation-name="" data-animation-duration="0" data-animation-delay="0" data-animation-direction="" id="sec-f88b">
          <div class="u-clearfix u-sheet u-sheet-1">
            <nav class="u-menu u-menu-one-level u-offcanvas u-menu-1">
              <div class="menu-collapse" style="font-size: 1rem; letter-spacing: 0px;">
                <a class="u-button-style u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-text-active-color u-custom-text-hover-color u-custom-top-bottom-menu-spacing u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="#">
                  <svg class="u-svg-link" viewBox="0 0 24 24"><use xlink:href="#menu-hamburger"></use></svg>
                  <svg class="u-svg-content" version="1.1" id="menu-hamburger" viewBox="0 0 16 16" x="0px" y="0px" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"><g><rect y="1" width="16" height="2"></rect><rect y="7" width="16" height="2"></rect><rect y="13" width="16" height="2"></rect>
</g></svg>
                </a>
              </div>
              <div class="u-custom-menu u-nav-container">
                <ul class="u-nav u-unstyled u-nav-1"><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-4-dark-1 u-text-hover-palette-4-dark-1" href="<?php if(isset($_SESSION['auth'])){?>Accueil.php<?php }else{?>index.php <?php }?>" style="padding: 10px 20px;">Accueil</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-4-dark-1 u-text-hover-palette-4-dark-1" href="Contact.php" style="padding: 10px 20px;">Contact</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-4-dark-1 u-text-hover-palette-4-dark-1" href="activite.php" style="padding: 10px 20px;">Activites</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-4-dark-1 u-text-hover-palette-4-dark-1" href="actualite.php" style="padding: 10px 20px;">Actualite</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-4-dark-1 u-text-hover-palette-4-dark-1" href="blog/blog.php" style="padding: 10px 20px;">Blog</a>
                    </li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-4-dark-1 u-text-hover-palette-4-dark-1" href="<?php if(isset($_SESSION['auth'])){echo 'disconnect.php';}else{?>inscription.php<?php }?>" style="padding: 10px 20px;"><?php if(isset($_SESSION['auth'])){echo "Deconnexion";}else{echo "Inscription";}?></a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-4-dark-1 u-text-hover-palette-4-dark-1" href="
<?php if(isset($_SESSION['auth'])){echo 'profil-'.$_SESSION['role'].'.php';}else{?>login.php <?php }?>" style="padding: 10px 20px;"><?php if(isset($_SESSION['auth'])){echo $_SESSION['name'];}else{echo "Connexion";} ;?></a>
</li></ul>
              </div>
              <div class="u-custom-menu u-nav-container-collapse">
                <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
                  <div class="u-inner-container-layout u-sidenav-overflow">
                    <div class="u-menu-close"></div>
                    <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Accueil.php">Accueil</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="#">Contact</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="activite.html">Activite</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="#">blog</a>
</li></ul>
                  </div>
                </div>
                <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
              </div>
            </nav>
            <a href="#" class="u-image u-logo u-image-1" data-image-width="294" data-image-height="358">
              <img src="assets/logo-removebg-preview.png" class="u-logo-image u-logo-image-1">
            </a>
            <h6 class="u-text u-text-palette-4-light-1 u-text-1">PoleITMER</h6>
          </div>
          
          
          
          
          
        </div>
        <div class="u-grey-75 u-section-row" id="sec-f9b8">
          <div class="u-clearfix u-sheet u-sheet-2">
            <nav class="u-menu u-menu-one-level u-offcanvas u-menu-2">
              <div class="menu-collapse" style="font-size: 1.125rem; font-weight: 700;">
                <a class="u-button-style u-custom-color u-custom-text-color u-custom-text-hover-color u-nav-link" href="#">
                  <svg class="u-svg-link" viewBox="0 0 24 24"><use xlink:href="#svg-02b7"></use></svg>
                  <svg class="u-svg-content" version="1.1" id="svg-02b7" viewBox="0 0 16 16" x="0px" y="0px" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"><g><rect y="1" width="16" height="2"></rect><rect y="7" width="16" height="2"></rect><rect y="13" width="16" height="2"></rect>
</g></svg>
                </a>
              </div>
            </nav>
          </div>
          
          
          
          
          
        </div>
      </div></header>
    <section class="u-align-left u-clearfix u-grey-75 u-section-1" id="sec-8d74">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="fr-view u-align-center u-clearfix u-rich-text u-text u-text-1">
          <h1>
            <span style="line-height: 2.0;">
              <span class="u-text-palette-4-dark-1" style="font-size: 2.25rem;">Activités du centre</span>
            </span>
          </h1>
          <p>
            <span class="u-custom-font u-heading-font">Le centre d'astronomie PoleIt, situé à Orléans, est une porte ouverte sur l'univers. Nous offrons des soirées d'observation fascinantes, des conférences captivantes et des ateliers interactifs pour tous les âges. Notre équipe d'experts passionnés vous guide à travers les mystères du cosmos, de la découverte des planètes à l'exploration des galaxies lointaines. Rejoignez-nous pour élargir vos horizons et vivre l'aventure céleste à PoleIt.</span>
          </p>
        </div>
      </div>
    </section>
    <section class="u-clearfix u-container-align-center u-grey-75 u-section-2" id="sec-3937">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-expanded-width u-list u-list-1">
          <div class="u-repeater u-repeater-1">
            <div class="u-container-align-left u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-container-layout-1">
                <img alt="" class="u-expanded-width u-image u-image-default u-image-1" data-image-width="1366" data-image-height="911" src="assets/msum-planetarium.jpg">
                <h3 class="u-align-left u-text u-text-default u-text-1">Planétarium </h3>
                <p class="u-align-left u-custom-font u-heading-font u-text u-text-2">Venez visiter notre planétarium pour un voyage immersif à travers les étoiles et les planètes. </p>
              </div>
            </div>
            <div class="u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-container-layout-2">
                <img alt="" class="u-expanded-width u-image u-image-default u-image-2" data-image-width="2101" data-image-height="742" src="https://scmuseum.org/sites/default/files/styles/hero_image/public/2024-03/Solar%20Observing%20with%20Alvan%20Clark%20Telescope.jpg?h=23563b5a&amp;itok=3ZtWBJu7">
                <h3 class="u-align-left u-text u-text-default u-text-3"> observatoire </h3>
                <p class="u-align-left u-custom-font u-heading-font u-text u-text-4">Venez visiter l'observatoire et plongez dans l'univers fascinant des étoiles ! </p>
              </div>
            </div>
            <div class="u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-container-layout-3">
                <img alt="" class="u-expanded-width u-image u-image-default u-image-3" data-image-width="1585" data-image-height="792" src="assets/exposition.jpg">
                <h3 class="u-align-left u-text u-text-default u-text-5">Expositions en journée​ et nocturnes</h3>
                <p class="u-align-left u-custom-font u-heading-font u-text u-text-6"> Venez découvrir nos expositions passionnantes, disponibles en journée et en nocturne, pour une exploration complète de l'univers fascinant de l'astronomie à PoleIt.</p>
              </div>
            </div>
            <div class="u-container-style u-list-item u-repeater-item">
              <div class="u-container-layout u-similar-container u-container-layout-4">
                <img alt="" class="u-expanded-width u-image u-image-default u-image-4" data-image-width="800" data-image-height="533" src="assets/ativi.webp">
                <h3 class="u-align-left u-text u-text-default u-text-7"> Activités quotidiennes pour petits et grands</h3>
                <p class="u-align-left u-custom-font u-heading-font u-text u-text-8"> Explorez le cosmos avec des observations astronomiques, des ateliers ludiques et des conférences captivantes, adaptés à tous les âges, à PoleIt.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <footer class="u-align-center u-black u-clearfix u-footer u-footer" id="sec-4c29"><div class="u-clearfix u-sheet u-sheet-1">
        <p class="u-align-center u-custom-font u-heading-font u-text u-text-default u-text-1">
          <span style="font-weight: 700;" class="u-text-palette-4-dark-2">© 2024 par Pol<span style="font-weight: 700;"></span>eITmer
          </span>.
        </p>
      </div></footer>
</body></html>