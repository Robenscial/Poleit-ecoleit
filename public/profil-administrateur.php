<?php session_start();?>
<?php require('../action/security.php');?>

<!DOCTYPE html>
<html style="font-size: 16px;" lang="fr"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="Profile">
    <meta name="description" content="">
    <title>profil</title>
    <link rel="stylesheet" href="../css/nicepage.css" media="screen">
<link rel="stylesheet" href="../css/profil-administrateur.css" media="screen">
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
    <meta property="og:title" content="profil administrateur">
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
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-4-dark-1 u-text-hover-palette-4-dark-1" href="activite.php" style="padding: 10px 20px;">Activites</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-4-dark-1 u-text-hover-palette-4-dark-1" href="actualite.php" style="padding: 10px 20px;">Actualite</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-4-dark-1 u-text-hover-palette-4-dark-1" href="./blog/blog.php" style="padding: 10px 20px;">Blog</a>
                    </li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-4-dark-1 u-text-hover-palette-4-dark-1" href="disconnect.php" style="padding: 10px 20px;">Deconnexion</a>
                    </li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-4-dark-1 u-text-hover-palette-4-dark-1" href="profil-administrateur.php" style="padding: 10px 20px;"><?php echo $_SESSION['name'];?></a>

</li></ul>
              </div>

            </nav>
            <a href="#" class="u-image u-logo u-image-1" data-image-width="294" data-image-height="358">
              <img src="images/logo-removebg-preview.png" class="u-logo-image u-logo-image-1">
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
              <div class="u-custom-menu u-nav-container">
                <ul class="u-custom-font u-heading-font u-nav u-unstyled u-nav-3"><li class="u-nav-item"><a href="gestion-utilisateurs.php" class="u-button-style u-nav-link u-text-hover-white u-text-palette-4-dark-1">Gestion utilisateurs</a>
</li><li class="u-nav-item"><a href="gestion-publication.php" class="u-button-style u-nav-link u-text-hover-white u-text-palette-4-dark-1">Gestion des publications</a>
</li></ul>
            </nav>
          </div>
        </div>
      </div></header>
    <section class="u-align-center-lg u-align-center-md u-align-center-xl u-align-left-sm u-align-left-xs u-clearfix u-grey-80 u-section-1" id="carousel_029d">
      <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <h1 class="u-text u-text-1">Profile</h1>
        <p class="u-large-text u-text u-text-variant u-text-2">administrateur du site </p>
        <div class="data-layout-selected u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
          <div class="u-layout">
            <div class="u-layout-row">
              <div class="u-container-style u-layout-cell u-size-20 u-layout-cell-1">
                <div class="u-container-layout u-container-layout-1">
                  <h4 class="u-text u-text-3">About me</h4>
                  <p class="u-text u-text-default u-text-4">I am an allround web developer. I am a senior programmer with good knowledge of front-end techniques. Vitae sapien pellentesque habitant morbi tristique senectus et. Aenean sed adipiscing diam donec adipiscing tristique risus.&nbsp;</p>
                  </p>
                </div>
              </div>
              <div class="u-align-center-md u-align-left-sm u-align-left-xs u-container-style u-layout-cell u-size-20 u-layout-cell-2">
                <div class="u-container-layout u-valign-middle-lg u-valign-middle-xl u-valign-top-md u-valign-top-sm u-valign-top-xs u-container-layout-2">
                  <img src="<?php echo $_SESSION['profile'];?>" alt="" class="u-image u-image-circle u-image-1" data-image-width="700" data-image-height="700">
                </div>
              </div>
              <div class="u-container-style u-layout-cell u-size-20 u-layout-cell-3">
                <div class="u-container-layout u-container-layout-3">
                  <h4 class="u-text u-text-6">Details</h4>
                  <p class="u-text u-text-7">
                    <span style="font-weight: 700;">Name: </span>
                    <br><?php echo $_SESSION['name'];?><br>
                    <span style="font-weight: 700;">Email: </span>
                    <br><?php echo $_SESSION['email'];?><span style="font-weight: 700;">
                      <br>Role: 
                    </span>
                    <br><?php echo $_SESSION['role'];?>
                  </p>
                  <div class="u-social-icons u-spacing-10 u-social-icons-1">
                    <a class="u-social-url" title="facebook" target="_blank" href="https://facebook.com/name"><span class="u-icon u-icon-circle u-social-facebook u-social-icon u-text-black u-icon-1"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xlink:href="#svg-bc6b"></use></svg><svg class="u-svg-content" viewBox="0 0 112 112" x="0" y="0" id="svg-bc6b"><path fill="currentColor" d="M75.5,28.8H65.4c-1.5,0-4,0.9-4,4.3v9.4h13.9l-1.5,15.8H61.4v45.1H42.8V58.3h-8.8V42.4h8.8V32.2
	c0-7.4,3.4-18.8,18.8-18.8h13.8v15.4H75.5z"></path></svg></span>
                    </a>
                    <a class="u-social-url" title="twitter" target="_blank" href="https://twitter.com/name"><span class="u-icon u-icon-circle u-social-icon u-social-twitter u-text-black u-icon-2"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xlink:href="#svg-ed97"></use></svg><svg class="u-svg-content" viewBox="0 0 112 112" x="0" y="0" id="svg-ed97"><path fill="currentColor" d="M92.2,38.2c0,0.8,0,1.6,0,2.3c0,24.3-18.6,52.4-52.6,52.4c-10.6,0.1-20.2-2.9-28.5-8.2
	c1.4,0.2,2.9,0.2,4.4,0.2c8.7,0,16.7-2.9,23-7.9c-8.1-0.2-14.9-5.5-17.3-12.8c1.1,0.2,2.4,0.2,3.4,0.2c1.6,0,3.3-0.2,4.8-0.7
	c-8.4-1.6-14.9-9.2-14.9-18c0-0.2,0-0.2,0-0.2c2.5,1.4,5.4,2.2,8.4,2.3c-5-3.3-8.3-8.9-8.3-15.4c0-3.4,1-6.5,2.5-9.2
	c9.1,11.1,22.7,18.5,38,19.2c-0.2-1.4-0.4-2.8-0.4-4.3c0.1-10,8.3-18.2,18.5-18.2c5.4,0,10.1,2.2,13.5,5.7c4.3-0.8,8.1-2.3,11.7-4.5
	c-1.4,4.3-4.3,7.9-8.1,10.1c3.7-0.4,7.3-1.4,10.6-2.9C98.9,32.3,95.7,35.5,92.2,38.2z"></path></svg></span>
                    </a>
                    <a class="u-social-url" title="instagram" target="_blank" href="https://www.instagram.com/name"><span class="u-icon u-icon-circle u-social-icon u-social-instagram u-text-black u-icon-3"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xlink:href="#svg-ea73"></use></svg><svg class="u-svg-content" viewBox="0 0 112 112" x="0" y="0" id="svg-ea73"><path fill="currentColor" d="M55.9,32.9c-12.8,0-23.2,10.4-23.2,23.2s10.4,23.2,23.2,23.2s23.2-10.4,23.2-23.2S68.7,32.9,55.9,32.9z
	 M55.9,69.4c-7.4,0-13.3-6-13.3-13.3c-0.1-7.4,6-13.3,13.3-13.3s13.3,6,13.3,13.3C69.3,63.5,63.3,69.4,55.9,69.4z"></path><path fill="#FFFFFF" d="M79.7,26.8c-3,0-5.4,2.5-5.4,5.4s2.5,5.4,5.4,5.4c3,0,5.4-2.5,5.4-5.4S82.7,26.8,79.7,26.8z"></path><path fill="currentColor" d="M78.2,11H33.5C21,11,10.8,21.3,10.8,33.7v44.7c0,12.6,10.2,22.8,22.7,22.8h44.7c12.6,0,22.7-10.2,22.7-22.7
	V33.7C100.8,21.1,90.6,11,78.2,11z M91,78.4c0,7.1-5.8,12.8-12.8,12.8H33.5c-7.1,0-12.8-5.8-12.8-12.8V33.7
	c0-7.1,5.8-12.8,12.8-12.8h44.7c7.1,0,12.8,5.8,12.8,12.8V78.4z"></path></svg></span>
                    </a>
                  </div>
                </div>
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