<?php require('../action/register.php');?>

<!DOCTYPE html>
<html style="font-size: 16px;" lang="fr"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="CONNECTEZ-VOUS!!!​">
    <meta name="description" content="">
    <title>connexion</title>
    <link rel="stylesheet" href="../css/nicepage.css" media="screen">
<link rel="stylesheet" href="../css/connexion.css" media="screen">
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
    <meta property="og:title" content="connexion">
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
            <ul class="u-nav u-unstyled u-nav-1"><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-4-dark-1 u-text-hover-palette-4-dark-1" href="index.php" style="padding: 10px 20px;">Accueil</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-4-dark-1 u-text-hover-palette-4-dark-1" href="Contact.php" style="padding: 10px 20px;">Contact</a>
                </li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-4-dark-1 u-text-hover-palette-4-dark-1" href="activite.php" style="padding: 10px 20px;">Activites</a>
                </li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-4-dark-1 u-text-hover-palette-4-dark-1" href="actualite.php" style="padding: 10px 20px;">Actualite</a>
                </li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-4-dark-1 u-text-hover-palette-4-dark-1" href="./blog/blog.php" style="padding: 10px 20px;">Blog</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-4-dark-1 u-text-hover-palette-4-dark-1" href="inscription.php" style="padding: 10px 20px;">Inscription</a>
                </li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-4-dark-1 u-text-hover-palette-4-dark-1" href="connexion.php" style="padding: 10px 20px;">Connexion</a>
</li></ul>
          </div>

        </nav>
        <a href="#" class="u-image u-logo u-image-1" data-image-width="294" data-image-height="358">
          <img src="images/logo-removebg-preview.png" class="u-logo-image u-logo-image-1">
        </a>
        <h6 class="u-text u-text-palette-4-light-1 u-text-1">PoleITMER</h6>
      </div></header>
    <section class="u-clearfix u-grey-80 u-section-1" id="sec-68af">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-border-2 u-border-palette-4-dark-2 u-container-style u-group u-radius u-shape-round u-group-1">
          <div class="u-container-layout u-container-layout-1">
            <h2 class="u-align-center u-text u-text-default u-text-palette-4-dark-2 u-text-1">CONNECTEZ-VOUS!!! </h2>
              <p><?php if(isset($errorMSG)) echo $errorMSG;?></p>
            <div class="u-form u-form-1">
              <form action="" method="POST" class="u-clearfix u-form-spacing-10 u-form-vertical u-inner-form" style="padding: 10px;">
                <div class="u-form-email u-form-group">
                  <label for="email-58d3" class="u-custom-font u-heading-font u-label u-text-palette-4-light-2 u-label-1">Nom</label>
                  <input type="text" placeholder="Name" id="email-58d3" name="name" class="u-input u-input-rectangle" required="">
                </div>
                <div class="u-form-group u-form-input-layout-horizontal u-form-group-2">
                    <label for="name-58d3" class="u-custom-font u-heading-font u-label u-text-palette-4-light-2 u-label-2">Mot de pass</label>
                  <input type="password" id="text-3977" name="password" class="u-input u-input-rectangle" placeholder="Mot de passe">
                </div>
                <div class="u-align-left u-form-group u-form-submit">
                  <a href="#" class="u-border-none u-btn u-btn-submit u-button-style u-custom-font u-heading-font u-palette-4-dark-2 u-btn-1">Connecter </a>
                  <input type="submit" value="submit" name="send" class="u-form-control-hidden">
                </div>
              </form>
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