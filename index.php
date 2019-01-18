<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0">
    <meta
      http-equiv="X-UA-Compatible"
      content="ie=edge">
    <meta property="og:url" content="<?php echo "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]" ?>" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Elise Laugaland: Salg" />
    <meta property="og:description" content="Salg" />
    <meta property="og:image" content="<?php echo "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]" ?>images/profile-picture.png" />
    <link href="https://fonts.googleapis.com/css?family=PT+Sans:400i|Roboto:400,500,700,900" rel="stylesheet">
    <link rel="stylesheet" href="./node_modules/normalize.css/normalize.css">
    <link rel="stylesheet" href="./css/fonts.css">
    <link rel="stylesheet" href="./css/loader.css">
    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="./css/left-column.css">
    <link rel="stylesheet" href="./css/btn-panel.css">
    <link rel="stylesheet" href="./css/icons-panel.css">
    <link rel="stylesheet" href="./css/modal.css">
    <link rel="stylesheet" href="./css/media.css">
    <title>Elise Laugaland</title>
  </head>
  <body>
    <div id="wrap" class="main row">
      <div class="col half">
        <div class="profile">
          <div class="header">
            <div class="header-image">
              <img
                class="background-img"
                src="./images/background.jpg"
                alt="Allkopi - header image">
            </div>
            <img 
            src="./images/logo.svg" 
            alt="Allkopi Logo" 
            class="logo">
            <img 
            src="./images/second-logo.png" 
            alt="Allkopi Logo"
            class="second-logo" 
            style="width: 120px;height: 200px;">
          </div>
          <div class="content">
            <div class="user-picture">
              <img
                src="./images/profile-picture.png" 
                alt="Allkopi proprofile_namfile-photo">
            </div>
            <div class="profile_name text-center">
              <span>Elise &nbsp;</span> Laugaland
            </div>
            <div class="profile_description text-center">
              <span>Salg</span>
            </div>
          </div>
        </div>
      </div>
      <div
        class="col half"
        id="rightCol">
        <div class="contact-menu">
          <ul>
            <li>
              <a
                target="_blank"
                href="http://www.allkopi.com">
                <img
                  src="./images/icons/webpage.svg"
                  alt="world wide web"
                  class="svg">
              </a>
            </li>
            <li>
              <a 
                target="_blank"
                href="tel:+4798108884">
                <img
                  src="./images/icons/phone.svg"
                  alt="Phone"
                  class="svg">
              </a>
            </li>
            <li>
              <a 
                target="_blank"
                href="sms:+4798108884">
                <img
                  src="./images/icons/sms.svg"
                  alt="sms"
                  class="svg">
              </a>
            </li>
            <li>
              <a 
                target="_blank"
                href="mailto:elise.laugaland@allkopi.com">
                <img
                  src="./images/icons/mail.svg"
                  alt="mail"
                  class="svg">
              </a>
            </li>
            <li>
              <a
                target="_blank"
                href="./files/elise.vcf">
                <img
                  src="./images/icons/download.svg"
                  alt="download"
                  class="svg">
              </a>
            </li>
          </ul>
        </div>
        <div class="social-media">
          <ul>
            <li>
              <a
                id="btn-instagram"
                onclick="openModal('instagram')">
                <img
                  src="./images/icons/instagram.svg"
                  alt="instagram"
                  class="svg">
              </a>
            </li>
            <li>
              <a
                id="btn-facebook"
                onclick="openModal('facebook')">
                <img
                  src="./images/icons/facebook.svg"
                  alt="facebook"
                  class="svg">
              </a>
            </li>
            <li>
              <a
                id="btn-google"
                target="_blank"
                href="https://bit.ly/2PBVBRB">
                <img
                  src="./images/icons/google-review.svg"
                  alt="google"
                  class="svg">
              </a>
            </li>
            <li>
              <a 
              style="background: #C8102E"
              target="_blank"
              href="https://goo.gl/maps/ZTYTMBTvZy32"
              id="btn-map">
                <img
                  src="./images/icons/map.svg"
                  alt="map"
                  class="svg">
              </a>
            </li>
            <li>
              <a
                id="btn-linkedin"
                target="_blank"
                href="https://www.linkedin.com/company/allkopi/about/">
                <img
                  src="./images/icons/linkedin.svg"
                  alt="linkedin"
                  class="svg">
              </a>
            </li>     
          </ul>
        </div>        
        <div class="btn-panel">
          <a href="https://bit.ly/2PBVBRB"
            class="btn"
            target="_blank"
            id="btn-google">
            <span>Google Review</span>
          </a>
          <a
            class="btn"
            href="https://shop.allkopi.no"
            target="_blank"
            id="btn-shop">
            <span>Nettbutikk/Webshop</span>
          </a>
          <span class="facebook-text" 
          style="font-size: 20px;
                 padding: 0 17px;
                 display: block;">
                 Gavekort - Gjelder storformat print på aluminium. Del gjerne med dine venner på Facebook.</span>
          <div style="display: flex;
                      justify-content: center;">
            <a
              class="btn"
              onclick="fbs_click()"
              data-js="facebook-share"
              target="_blank">
              <span>DELE GAVEKORT</span>
          </a>
          </div>
          <div class="gift-card" style="cursor:pointer">
            <img src="./images/gift-card.jpg"
              id="mama"
              onclick="fbs_click()"
              alt="gift-img"
              style="width:100%">
          </div>
        </div>
        <span style="color: white;
        display: flex;
        justify-content: center;
        margin: 7px;" >
        <a style="
        color: aliceblue;
          text-align: center;
          text-decoration: none;
          font-size: 14px;" href="https://reviewcard.com/">Innovation by ReviewCard</a></span>
      </div>
    </div>
    
    <div id="instagram" class="modal">

        <header>
          <div onclick="closeModal('instagram')" class="close-btn"></div>
        </header>

        <div class="modal__modal-content scrollable">

          <!-- InstaWidget -->
          <a href="https://instawidget.net/v/user/allkopi_netprint" id="link-457ba907fe20339e4f9b9f12f31dc104501fc3d5d0f148af8408c96761725ef7"></a>
          <script src="https://instawidget.net/js/instawidget.js?u=457ba907fe20339e4f9b9f12f31dc104501fc3d5d0f148af8408c96761725ef7&width=100%"></script>
        </div>
        <iframe width="320" height="440" src="https://instagram.com/p/qbq6fIJMVZ/embed" frameborder="0"></iframe>
      </div>

      <div id="facebook" class="modal">

        <header>
          <div onclick="closeModal('facebook')" class="close-btn"></div>
        </header>
        <div class="modal__modal-content scrollable">
          <script src="https://apps.elfsight.com/p/platform.js" defer></script>
          <div class="elfsight-app-6c047f82-a8f5-4e68-b43f-07e4e36e14d0"></div>
        </div>
      </div>

    <!-- Loader -->
    <div class="loader">
      <div class="loader_inner"></div>
    </div>

    <!-- Scripts -->
    <!-- Global site tag (gtag.js) - Google Analytics -->
  <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-96381125-10"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
      gtag('config', 'UA-96381125-10');
    </script>
    <script src="./node_modules/jquery/dist/jquery.min.js"></script>
    <script src="./js/svg-img.js"></script>
    <script src="./js/common.js"></script>
    <script src="./js/tools.js"></script>
    <script src="./js/modal.js"></script>
  </body>
</html>
