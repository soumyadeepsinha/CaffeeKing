<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Actual M -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <!-- M Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!-- Google Fints -->
  <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
  <!-- Custom CSS -->
  <link rel="stylesheet" href="./assets/css/style.css">
  <title>CafeDayNight</title>
</head>

<body>
  <section class="mynav">
    <nav class="nav-fixed">
      <div class="nav-wrapper">
        <a href="#" class="brand-logo">CafeDayNight</a>
        <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
          <li><a href="index.php" onclick="toggleModal();">Home</a></li>
          <li><a href="#" onclick="toggleModal();">About</a></li>
          <li><a href="#" onclick="toggleModal();">Coffee</a></li>
          <li><a href="#" onclick="toggleModal();">Contact</a></li>
        </ul>
      </div>
    </nav>
    <ul class="sidenav" id="mobile-demo">
      <li><a href="index.php" onclick="toggleModal();">Home</a></li>
      <li><a href="#" onclick="toggleModal();">About</a></li>
      <li><a href="#" onclick="toggleModal();">Coffee</a></li>
      <li><a href="#" onclick="toggleModal();">Contact</a></li>
    </ul>
  </section>
  <section class="myslider">
    <div class="slider">
      <ul class="slides">
        <li>
          <img src="./assets/images/banner1.jpg" alt="Banner 1">
          <div class="caption center-align white-text">
            <h3>Cafe Day Night -- Quality Coffee</h3>
            <h5 class="light text-lighten-3">
              We are going to serve one of the Best Coffee around the World! </h5>
          </div>
        </li>
        <li>
          <img src="./assets/images/banner2.jpg" alt="Banner 2">
          <div class="caption center-align white-text">
            <h3>Cafe Day Night -- is working to serve you better than tomorrow</h3>
            <h5 class="light text-lighten-3">
              Taste our Coffee; You're never want to go back! </h5>
          </div>
        </li>
        <li>
          <img src="./assets/images/banner3.jpg" alt="Banner 3">
          <div class="caption center-align white-text">
            <h3>Hangouts, Business Meetings -- all in one Place!</h3>
            <h5 class="light text-lighten-3">
              Great Coffee is the Mood Changer for Human! </h5>
          </div>
        </li>
    </div>
    </li>
    </ul>
    </div>
  </section>
  <section class="descrip">
    <div class="description white center">
      <h2 class="header">
        CafeDayNight -- Ultimate Quality Coffee
      </h2>
      <div class="row container center">
        <div class="col center l8 s12 move">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet, provident veritatis pariatur dignissimos consequatur doloribus, mollitia nisi vel veniam, eveniet odit vero magnam dolorem ratione! Nam, beatae laborum ipsa non deserunt consequatur eius sed dolores cumque adipisci eveniet, ipsam dolor itaque pariatur maxime? Error quod, cum illum sint quaerat ipsa odio libero odit fugiat soluta itaque eum veniam, consectetur nostrum aperiam, porro animi? Provident, quasi delectus accusamus quisquam praesentium omnis deleniti recusandae, amet corporis, molestiae et dolorum maxime corrupti labore atque laboriosam accusantium reprehenderit temporibus eos. Labore ducimus distinctio consectetur modi magnam, sunt, id quia officiis totam facilis quis vel!
        </div>
        <div class="col center l4 s12 move">
          <img src="./assets/images/coffee1.jpg" style="object-fit: content" height="200" width="auto" alt="Coffee">
        </div>
      </div>
    </div>
  </section>
  <section class="mycards">
    <div class="row" style="padding-left: 50px; padding-right: 50px;">
      <div class="col l4 m12 s12" style="padding: 50px 5px;">
        <div class="card">
          <div class="card-image waves-effect waves-block waves-light">
            <img class="activator" src="./assets/images/card1.jpg">
          </div>
          <div class="card-content">
            <span class="card-title activator grey-text text-darken-4">Card Title<i class="material-icons right">more_vert</i></span>
          </div>
          <div class="card-reveal">
            <span class="card-title grey-text text-darken-4">Neo Coffee<i class="material-icons right">close</i></span>
            <p>Here is some more information about this product that is only revealed once clicked on.</p>
          </div>
        </div>
      </div>
      <div class="col l4 m12 s12" style="padding: 50px 5px;">
        <div class="card">
          <div class="card-image waves-effect waves-block waves-light">
            <img class="activator" src="./assets/images/card1.jpg">
          </div>
          <div class="card-content">
            <span class="card-title activator grey-text text-darken-4">Card Title<i class="material-icons right">more_vert</i></span>
          </div>
          <div class="card-reveal">
            <span class="card-title grey-text text-darken-4">Neo Coffee<i class="material-icons right">close</i></span>
            <p>Here is some more information about this product that is only revealed once clicked on.</p>
          </div>
        </div>
      </div>
      <div class="col l4 m12 s12" style="padding: 50px 5px;">
        <div class="card">
          <div class="card-image waves-effect waves-block waves-light">
            <img class="activator" src="./assets/images/card1.jpg">
          </div>
          <div class="card-content">
            <span class="card-title activator grey-text text-darken-4">Card Title<i class="material-icons right">more_vert</i></span>
          </div>
          <div class="card-reveal">
            <span class="card-title grey-text text-darken-4">Neo Coffee<i class="material-icons right">close</i></span>
            <p>Here is some more information about this product that is only revealed once clicked on.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="myparallax">
    <div class="parallax-container">
      <div class="parallax"><img src="./assets/images/banner4.jpg" alt="Parallax_Banner 4"></div>
    </div>
  </section>
  <section class="mymodal">
    <!-- Modal Structure -->
    <div id="modal1" class="modal">
      <div class="modal-content">
        <h4 id="info-modal-heading">Link Disabled</h4>
        <p id="info-modal-content">Sorry! All Links are Disabled</p>
      </div>
      <div class="modal-footer">
        <a href="#!" class="modal-close waves-effect waves-green btn-flat">Close</a>
      </div>
    </div>
  </section>
  <!-- JQuery -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js" integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>
  <!-- M Script -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  <!-- Custom JS -->
  <script src="app.js"></script>
</body>

</html>