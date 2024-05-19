<?php session_start();?>
<?php require('../../action/blog.php');?>

<!DOCTYPE html>
<html style="font-size: 16px;" lang="fr"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>Blog</title>
    <link rel="stylesheet" href="../../css/nicepage.css" media="screen">
<link rel="stylesheet" href="../../css/Blog-Template.css" media="screen">
    <script class="u-script" type="text/javascript" src="../../js/jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="../../js/nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 6.8.9, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "",
		"logo": "images/logo-removebg-preview.png"
}</script>
    <meta name="theme-color" content="#478ac9">
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
            <ul class="u-nav u-unstyled u-nav-1"><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-4-dark-1 u-text-hover-palette-4-dark-1" href="<?php if(isset($_SESSION['auth'])){?>../Accueil.php<?php }else{?>../index.php <?php }?>" style="padding: 10px 20px;">Accueil</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-4-dark-1 u-text-hover-palette-4-dark-1" href="../Contact.php" style="padding: 10px 20px;">Contact</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-4-dark-1 u-text-hover-palette-4-dark-1" href="../activite.php" style="padding: 10px 20px;">Activites</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-4-dark-1 u-text-hover-palette-4-dark-1" href="../actualite.php" style="padding: 10px 20px;">Actualite</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-4-dark-1 u-text-hover-palette-4-dark-1" href="blog.php" style="padding: 10px 20px;">Blog</a>
                </li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-4-dark-1 u-text-hover-palette-4-dark-1" href="<?php if(isset($_SESSION['auth'])){echo '../disconnect.php';}else{?>../inscription.php<?php }?>" style="padding: 10px 20px;"><?php if(isset($_SESSION['auth'])){echo "Deconnexion";}else{echo "Inscription";}?></a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-4-dark-1 u-text-hover-palette-4-dark-1" href="
<?php if(isset($_SESSION['auth'])){echo '../profil-'.$_SESSION['role'].'.php';}else{?>../connexion.php <?php }?>" style="padding: 10px 20px;"><?php if(isset($_SESSION['auth'])){echo $_SESSION['name'];}else{echo "Connexion";} ;?></a>
</li></ul>
          </div>

        </nav>
        <a href="#" class="u-image u-logo u-image-1" data-image-width="294" data-image-height="358">
          <img src="../assets/logo-removebg-preview.png" class="u-logo-image u-logo-image-1">
        </a>
        <h6 class="u-text u-text-palette-4-light-1 u-text-1">PoleITMER</h6>
      </div></header>
    <section class="u-clearfix u-section-1" id="sec-4e18">
      <div class="u-clearfix u-sheet u-valign-middle u-sheet-1"><!--blog--><!--blog_options_json--><!--{"type":"Recent","source":"","tags":"","count":""}--><!--/blog_options_json-->
        <div class="u-blog u-expanded-width u-repeater u-repeater-1"><!--blog_post-->

            <?php 
              while($publicationContent = $getPublication->fetch()){
            ?>

          <div class="u-blog-post u-container-style u-repeater-item u-white u-repeater-item-1">
            <div class="u-container-layout u-similar-container u-valign-top u-container-layout-1"><!--blog_post_header-->
              <h4 class="u-blog-control u-text u-text-1">
                <a class="u-post-header-link" href="publication.php?id=<?php echo $publicationContent['ID'];?>"><?php echo $publicationContent['TITLE'];?></a>
              </h4><!--/blog_post_header--><!--blog_post_image-->
              <a class="u-post-header-link" href="publication.php?id=<?php echo $publicationContent['ID'];?>"><img alt="" class="u-blog-control u-expanded-width u-image u-image-default u-image-1" src="../<?php echo $publicationContent['PICTURE'];?>"></a><!--/blog_post_image--><!--blog_post_content-->
              <div class="u-blog-control u-post-content u-text u-text-2 fr-view"><?php echo $publicationContent['TEXT'];?></div><!--/blog_post_content--><!--blog_post_readmore-->
              <a href="publication.php?id=<?php echo $publicationContent['ID'];?>" class="u-blog-control u-border-2 u-border-palette-1-base u-btn u-btn-rectangle u-button-style u-none u-btn-1"><!--blog_post_readmore_content--><!--options_json--><!--{"content":"Read More","defaultValue":"Lire la suite"}--><!--/options_json-->Read More<!--/blog_post_readmore_content--></a><!--/blog_post_readmore-->
            </div>
          </div>
          
          <?php
              }
              ?>
          <!--/blog_post--><!--blog_post-->
          <!--/blog_post-->
        </div><!--/blog-->
      </div>
    </section>

    <footer class="u-align-center u-black u-clearfix u-footer u-footer" id="sec-4c29"><div class="u-clearfix u-sheet u-sheet-1">
        <p class="u-align-center u-custom-font u-heading-font u-text u-text-default u-text-1">
          <span style="font-weight: 700;" class="u-text-palette-4-dark-2">© 2024 par Pol<span style="font-weight: 700;"></span>eITmer
          </span>.
        </p>
      </div></footer>

  
</body></html>