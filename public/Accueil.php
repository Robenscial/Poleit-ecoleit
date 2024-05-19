<?php session_start();?>
<?php require("../action/index.php");?>

<!DOCTYPE html>
<html style="font-size: 16px;" lang="fr"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="Dernier posts​">
    <meta name="description" content="">
    <title>Accueil</title>
    <link rel="stylesheet" href="../css/nicepage.css" media="screen">
<link rel="stylesheet" href="../css/Accueil.css" media="screen">
    <script class="u-script" type="text/javascript" src="../js/jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="../js/nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 6.8.9, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">
    
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "",
		"logo": "images/logo-removebg-preview.png"
}</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Accueil">
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
          </li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-4-dark-1 u-text-hover-palette-4-dark-1" href="<?php if(isset($_SESSION['auth'])){?>Accueil.php<?php }else{?>index.php <?php }?>" style="padding: 10px 20px;">Accueil</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-4-dark-1 u-text-hover-palette-4-dark-1" href="Contact.php" style="padding: 10px 20px;">Contact</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-4-dark-1 u-text-hover-palette-4-dark-1" href="activite.php" style="padding: 10px 20px;">Activites</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-4-dark-1 u-text-hover-palette-4-dark-1" href="actualite.php" style="padding: 10px 20px;">Actualite</a>
 </li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-4-dark-1 u-text-hover-palette-4-dark-1" href="blog/blog.php" style="padding: 10px 20px;">Blog</a>
              </li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-4-dark-1 u-text-hover-palette-4-dark-1" href="<?php if(isset($_SESSION['auth'])){echo 'disconnect.php';}else{?>inscription.php<?php }?>" style="padding: 10px 20px;"><?php if(isset($_SESSION['auth'])){echo "Deconnexion";}else{echo "Inscription";}?></a>
 </li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-4-dark-1 u-text-hover-palette-4-dark-1" href="profil-<?php echo $_SESSION['role'];?>.php" style="padding: 10px 20px;"><?php echo $_SESSION['name'];?></a>
</li></ul>
          </div>
          <div class="u-custom-menu u-nav-container-collapse">
            <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
              <div class="u-inner-container-layout u-sidenav-overflow">
                <div class="u-menu-close"></div>
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
      </div></header>
    <section class="u-clearfix u-grey-80 u-section-1" id="sec-e20b">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="data-layout-selected u-clearfix u-expanded-width u-gutter-0 u-layout-wrap u-layout-wrap-1">
          <div class="u-layout" style="">
            <div class="u-layout-row" style="">
              <div class="u-align-center u-container-style u-image u-layout-cell u-left-cell u-size-30 u-size-xs-60 u-image-1" src="" data-image-width="1514" data-image-height="1514">
                <div class="u-container-layout u-container-layout-1" src=""></div>
              </div>
              <div class="u-align-center u-black u-container-style u-layout-cell u-right-cell u-size-30 u-size-xs-60 u-layout-cell-2" src="">
                <div class="u-container-layout u-valign-top u-container-layout-2">
                  <p class="u-custom-font u-font-playfair-display u-text u-text-default u-text-palette-4-dark-1 u-text-1">Découvrez PoleITmer</p>
                  <p class="u-custom-font u-font-playfair-display u-text u-text-default u-text-2">Divertissant et passionnant</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="u-align-center u-clearfix u-grey-5 u-section-2" id="carousel_46ef">
      <div class="u-align-center-lg u-align-center-md u-align-center-sm u-align-center-xl u-container-style u-expanded-width u-grey-80 u-group u-group-1">
        <div class="u-container-layout u-valign-top u-container-layout-1">
          <h1 class="u-align-center-xs u-custom-font u-font-playfair-display u-text u-text-1">Derniers posts </h1>
        </div>
      </div><!--blog--><!--blog_options_json--><!--{"type":"Recent","source":"","tags":"","count":""}--><!--/blog_options_json-->
      <div class="u-blog u-blog-1">
        <div class="u-list-control"></div>
        <div class="u-repeater u-repeater-1"><!--blog_post-->

        <?php
          while ($infoPublication = $publication->fetch()){
        ?> 
          <div class="u-align-center u-blog-post u-repeater-item u-white u-repeater-item-1">
            <div class="u-container-layout u-similar-container u-valign-top u-container-layout-2">
              <a class="u-post-header-link" href="./blog/publication.php?id=<?php echo $infoPublication['ID'];?>"><!--blog_post_image-->      
                <img alt="" class="u-blog-control u-expanded-width u-image u-image-default u-image-1" src=" <?php echo $infoPublication['PICTURE'];?>"><!--/blog_post_image-->
              </a>
              <div class="u-align-center u-container-style u-group u-palette-4-base u-group-2">
                <div class="u-container-layout u-valign-middle u-container-layout-3"><!--blog_post_metadata-->
                  <div class="u-blog-control u-metadata u-metadata-1"><!--blog_post_metadata_category-->
                    <!--/blog_post_metadata_category-->
                  </div><!--/blog_post_metadata-->
                </div>
              </div><!--blog_post_header-->
              <h3 class="u-blog-control u-custom-font u-font-playfair-display u-text u-text-2">
                <a class="u-post-header-link" href="./blog/publication.php?id=<?php echo $infoPublication['ID'];?>"><?php echo $infoPublication['TITLE'];?></a>
              </h3><!--/blog_post_header--><!--blog_post_content-->
              <div class="u-blog-control u-post-content u-text u-text-3 fr-view"><?php echo $infoPublication['TEXT'];?></div><!--/blog_post_content--><!--blog_post_readmore-->
              <a href="./blog/publication.php?id=<?php echo $infoPublication['ID'];?>" class="u-blog-control u-border-active-none u-border-hover-none u-btn u-btn-rectangle u-button-style u-none u-text-body-color u-btn-1"><!--blog_post_readmore_content--><!--options_json--><!--{"content":"Read More","defaultValue":"Lire la suite"}--><!--/options_json-->Read More<!--/blog_post_readmore_content--></a><!--/blog_post_readmore-->
            </div>
          </div>
          <?php
            }
          ?>
          <!--/blog_post--><!--blog_post-->
          <!--/blog_post-->
        </div>
        <div class="u-list-control"></div>
      </div><!--/blog-->
    </section>
    
    
    
    <footer class="u-align-center u-black u-clearfix u-footer u-footer" id="sec-4c29"><div class="u-clearfix u-sheet u-sheet-1">
        <p class="u-align-center u-custom-font u-heading-font u-text u-text-default u-text-1">
          <span style="font-weight: 700;" class="u-text-palette-4-dark-2">© 2024 par Pol<span style="font-weight: 700;"></span>eIT-VAL
          </span>.
        </p>
      </div></footer>

  
</body></html>