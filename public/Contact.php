<?php session_start();?>

<!DOCTYPE html>
<html style="font-size: 16px;" lang="fr"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="localisation, FORmulaire de contact">
    <meta name="description" content="">
    <title>Contact</title>
    <link rel="stylesheet" href="../css/nicepage.css" media="screen">
<link rel="stylesheet" href="../css/Contact.css" media="screen">
    <script class="u-script" type="text/javascript" src="../js/jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="../js/nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 6.8.9, nicepage.com">
    <meta name="referrer" content="origin">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    
    
    
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "",
		"logo": "images/logo-removebg-preview.png"
}</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Contact">
    <meta property="og:type" content="website">
  <meta data-intl-tel-input-cdn-path="intlTelInput/"></head>
  <body data-path-to-root="./" data-include-products="false" class="u-body u-xl-mode" data-lang="fr"><header class="u-black u-clearfix u-header u-header" id="sec-486b"><div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
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
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-4-dark-1 u-text-hover-palette-4-dark-1" href="Contact.html" style="padding: 10px 20px;">Contact</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-4-dark-1 u-text-hover-palette-4-dark-1" href="activite.php" style="padding: 10px 20px;">Activites</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-4-dark-1 u-text-hover-palette-4-dark-1" href="actualite.php" style="padding: 10px 20px;">Actualite</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-4-dark-1 u-text-hover-palette-4-dark-1" href="./blog/blog.php" style="padding: 10px 20px;">Blog</a>
                </li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-4-dark-1 u-text-hover-palette-4-dark-1" href="<?php if(isset($_SESSION['auth'])){echo 'disconnect.php';}else{?>inscription.php<?php }?>" style="padding: 10px 20px;"><?php if(isset($_SESSION['auth'])){echo "Deconnexion";}else{echo "Inscription";}?></a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-4-dark-1 u-text-hover-palette-4-dark-1" href="<?php if(isset($_SESSION['auth'])){echo 'profil-'.$_SESSION['role'].'.php';}else{?>login.php <?php }?>" style="padding: 10px 20px;"><?php if(isset($_SESSION['auth'])){echo $_SESSION['name'].' ==>';}else{echo "Connexion";} ;?></a>
</li></ul>
          </div>
        </nav>
        <a href="#" class="u-image u-logo u-image-1" data-image-width="294" data-image-height="358">
          <img src="assets/logo-removebg-preview.png" class="u-logo-image u-logo-image-1">
        </a>
        <h6 class="u-text u-text-palette-4-light-1 u-text-1">PoleITMER</h6>
      </div></header>
    <section class="custom-expanded u-clearfix u-grey-80 u-section-1" id="carousel_f359">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-absolute-hcenter-md u-absolute-hcenter-sm u-absolute-hcenter-xs u-expanded-height-md u-expanded-height-sm u-expanded-height-xs u-palette-4-dark-2 u-shape u-shape-rectangle u-shape-1"></div>
        <div class="data-layout-selected u-clearfix u-expanded-width u-gutter-0 u-layout-wrap u-layout-wrap-1">
          <div class="u-gutter-0 u-layout">
            <div class="u-layout-row">
              <div class="u-size-27">
                <div class="u-layout-col">
                  <div class="u-container-style u-layout-cell u-left-cell u-size-30 u-layout-cell-1">
                    <div class="u-container-layout u-valign-middle u-container-layout-1">
                      <h2 class="u-text u-text-1">Localisation</h2>
                      <p class="u-text u-text-2">251 Rue Joseph-Louis Lagrange, 59300 Famars </p>
                    </div>
                  </div>
                  <div class="u-align-left u-container-style u-layout-cell u-left-cell u-size-30 u-layout-cell-2">
                    <div class="u-container-layout u-valign-middle u-container-layout-2"></div>
                  </div>
                </div>
              </div>
              <div class="u-size-33">
                <div class="u-layout-row">
                  <div class="u-container-style u-layout-cell u-right-cell u-size-60 u-layout-cell-3">
                    <div class="u-container-layout u-valign-bottom u-container-layout-3">
                      <h2 class="u-text u-text-3">CONTACTEZ-N0US</h2>
                      <div class="custom-expanded u-form u-form-1">
                        <form action="" method="POST" class="u-block-315d-21 u-clearfix u-form-spacing-25 u-form-vertical u-inner-form">
                          <div class="u-form-group u-form-name">
                            <label for="name-e4cc" class="u-form-control-hidden u-label">Name</label>
                            <input type="text" placeholder="Nom" id="name-e4cc" name="name" class="u-border-no-bottom u-border-no-left u-border-no-right u-border-no-top u-grey-5 u-input u-input-rectangle" required="">
                          </div>
                          <div class="u-form-email u-form-group">
                            <label for="email-e4cc" class="u-form-control-hidden u-label">Email</label>
                            <input type="email" placeholder="Adresse mail" id="email-e4cc" name="email" class="u-border-no-bottom u-border-no-left u-border-no-right u-border-no-top u-grey-5 u-input u-input-rectangle" required="">
                          </div>
                          <div class="u-form-group u-form-message">
                            <label for="message-e4cc" class="u-form-control-hidden u-label">Message</label>
                            <textarea placeholder="votre message" rows="4" cols="50" id="message-e4cc" name="message" class="u-border-no-bottom u-border-no-left u-border-no-right u-border-no-top u-grey-5 u-input u-input-rectangle" required=""></textarea>
                          </div>
                          <div class="u-form-group u-form-submit">
                            <a href="#" class="u-border-2 u-border-radius-0 u-border-white u-btn u-btn-rectangle u-btn-submit u-button-style u-btn-1">envoyer </a>
                            <input type="submit" value="submit" class="u-form-control-hidden u-grey-5">
                          </div>

                          <input type="hidden" value="" name="recaptchaResponse">
                          <input type="hidden" name="formServices" value="b9f65a1a-1c5a-d126-6951-6c1daf7eca5b">
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="u-clearfix u-grey-80 u-section-2" id="sec-362e">
      <div class="u-clearfix u-sheet u-sheet-1"></div>
    </section>
    
    
    
    <footer class="u-align-center u-black u-clearfix u-footer u-footer" id="sec-4c29"><div class="u-clearfix u-sheet u-sheet-1">
        <p class="u-align-center u-custom-font u-heading-font u-text u-text-default u-text-1">
          <span style="font-weight: 700;" class="u-text-palette-4-dark-2">© 2024 par Pol<span style="font-weight: 700;"></span>eITmer
          </span>.
        </p>
      </div></footer>

  
</body></html>