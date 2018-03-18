<?php
//Header output
function siteHeader(){

  //Check if request for page is made else title is home.
  if(isset($_REQUEST['p'])){
    $title = $_REQUEST['p'];
  }else{
    $title = 'Exclusive T-Shirts';
  }

  //Echo header elements
  echo '<html>';
  echo '<head>';
  echo '<meta charset="UTF-8">';
  echo '<meta name="viewport" content="width=device-width, initial-scale=1.0">';
  echo '<meta http-equiv="X-UA-Compatible" content="ie=edge">';
  echo '<link rel="icon" type="image/gif" href="img/favicon.gif"/>';

  //Link css stylesheets.
  echo '<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">';
  echo '<link rel="stylesheet" href="css/style.css">';



  //Fonts
  echo'<link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i" rel="stylesheet">';

  //Output site title passing $title variable according to currentpage.
  echo '<title>Shirtify - ' . strtoupper($title) . '</title>';
  echo '</head>';
  echo '<body onload="checkLogin()" style="background: url(img/bg.gif) no-repeat; background-size: cover;">';
}

//Navigation output
function siteNavigation(){



  //Echo navigation bar elements/navigation section starts.
  echo '<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container" style="max-width: 1024px">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#"><img src="img/logo1.png" width="30px" style="margin-top: -1px;"></a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">';



        //Check if request for page is made else current page is Home.
        if(isset($_REQUEST['p'])){
          $currentPage = $_REQUEST['p'];
        }else{
          $currentPage = 'home';
        }

        //Store pages of site in $pages array and links of each page in $pageLink array.
        $pages = array("home", "about", "tshirts", "contact");
        $pageLink = array("?p=home", "?p=about","?p=tshirts", "?p=contact");

        //Check to see if registration page is active and change nav login text to 'register'.
        if($currentPage == 'register'){
          $pages['4'] = 'register';
        }

        //Loop through values in pages array, assigning pageLink to page.
        for ($i=0; $i < 5 ; $i++) {
          echo '<li><a ';

          //Check is current page is equal to $i and assign class 'active'.
          if($pages[$i] == $currentPage){
            echo 'class="active"';
          }

          echo 'href="' . $pageLink[$i] . '" id="' . $pages[$i] .'">' . $pages[$i] . '</a>';
        }



          echo'

        </ul>

        <ul class="nav navbar-nav navbar-right">
          <li style="margin-top: 2px;"><a href="#"><img src="img/icons/user.png"></a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><img src="img/icons/cart.png"> <span class="caret"></span></a>
            <ul class="dropdown-menu cart">
                <h4>Cart</h4>
                <br><br>
                <div class="row">
                  <div class="col-md-2 img"><img src="http://placehold.it/60x60"></div>
                  <div class="col-md-6 title"><h5>Product</h5><p>Product information</p></div>
                  <div class="col-md-4 price">£20.00 <span class="remove">Remove</span></div>
                </div>
                <div class="row">
                  <div class="col-md-2 img"><img src="http://placehold.it/60x60"></div>
                  <div class="col-md-6 title"><h5>Product</h5><p>Product information</p></div>
                  <div class="col-md-4 price">£20.00 <span class="remove">Remove</span></div>
                </div>
                <div class="row">
                  <div class="col-md-2 img"><img src="http://placehold.it/60x60"></div>
                  <div class="col-md-6 title"><h5>Product</h5><p>Product information</p></div>
                  <div class="col-md-4 price">£20.00 <span class="remove">Remove</span></div>
                </div>

                <div class="row total">
                  <div class="col-md-10">
                    Total
                  </div>
                  <div class="col-md-2">
                    £60.00
                  </div>
                </div>
            </ul>
          </li>
        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>';

  // echo '<a href="#"><img style="margin-top: -5px;" src="img/icons/cart.png"></a>';
  // echo '<a href="#"><img style="margin-top: -5px;" src="img/icons/user.png"></a>';

  echo '</section>';

  echo '<div class="logo"><img src="img/logo.png" alt=""></div>';
  //Navigation section ends
}

//Content Output
function siteContent(){

  //Site content section starts
  echo '<section id="content">';
  echo '<div class="content">';

  //Set page variable to the current page request.
  $page = $_REQUEST['p'];

  //Switch case function to identify which page request is made and include the relevant page to output.
  switch ($page) {
    case 'home':
      include('pages/home.html');
      break;

    case 'about':
      include('pages/about.html');
      break;

    case 'tshirts':
      include('pages/tshirts.html');
      break;

    case 'contact':
      include('pages/contact.html');
      break;

    case 'login':
      include('pages/login.html');
      break;

    case 'product':
      include('pages/product.html');
      break;
          
    case 'staff':
      include('staff/dashboard.html');
      break;

    default:
      include('pages/home.html');
      break;
  }

  echo '<div class="socialIcons">
    <a class="social"><img src="img/icons/facebook.png"></a>
    <a class="social"><img src="img/icons/twitter.png"></a>
    <a class="social"><img src="img/icons/instagram.png"></a>
  </div>';
  echo '</div>';
  echo '</section>';
  echo '<br>';
  echo '<br>';
  echo '<br>';
  echo '<br>';
  //Site content ends
}

//Footer output
function siteFooter() {
  //Echo footer elements


  echo '<section id="footer">';

  echo '<p>&copy 2018 - Shirtify</p>';
  echo '</section>';




  echo '</body>';

  echo '<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>';

  echo '<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>';

  //Indlude the main javascript file
  echo '<script type="text/javascript" src="js/main.js"></script>';


  echo '</html>';
  //Footer ends
}
?>
