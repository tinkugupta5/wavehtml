<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    
    <link rel="stylesheet" type="text/css" href="css/5steps.css">
    

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
    <style type="text/css">
    
    .cards-list {
    z-index: 0;
    width: 100%;
    display: flex;
    justify-content: space-around;
    flex-wrap: wrap;
    }
    .card {
    margin: 30px auto;
    width: 300px;
    height: 300px;
    border-radius: 40px;
    box-shadow: 5px 5px 30px 7px rgba(0,0,0,0.25), -5px -5px 30px 7px rgba(0,0,0,0.22);
    cursor: pointer;
    transition: 0.4s;
    }
    .card .card_image {
    width: inherit;
    height: inherit;
    border-radius: 40px;
    }
    .card .card_image img {
    width: inherit;
    height: inherit;
    border-radius: 40px;
    object-fit: cover;
    }
    .card .card_title {
    text-align: center;
    border-radius: 0px 0px 40px 40px;
    font-family: sans-serif;
    font-weight: bold;
    font-size: 30px;
    margin-top: -80px;
    height: 40px;
    }
    .card:hover {
    transform: scale(0.9, 0.9);
    box-shadow: 5px 5px 30px 15px rgba(0,0,0,0.25),
    -5px -5px 30px 15px rgba(0,0,0,0.22);
    }
    .title-white {
    color: white;
    }
    .title-black {
    color: black;
    }
    @media all and (max-width: 500px) {
    .card-list {
    /* On small screens, we are no longer using row direction but column */
    flex-direction: column;
    }
    }
    /*
    .card {
    margin: 30px auto;
    width: 300px;
    height: 300px;
    border-radius: 40px;
    background-image: url('https://i.redd.it/b3esnz5ra34y.jpg');
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
    background-repeat: no-repeat;
    box-shadow: 5px 5px 30px 7px rgba(0,0,0,0.25), -5px -5px 30px 7px rgba(0,0,0,0.22);
    transition: 0.4s;
    }
    */
    </style>
    
    
  </head>
  <body>
    
    <section id="nav-bar">
      <nav class="navbar navbar-expand-sm bg-light ">
        <!-- Brand/logo -->
        <a class="navbar-brand" href="\educationwave\index.php">Educationwave</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fa fa-bars" aria-hidden="true"></i>
        </button>
        <!-- Links -->
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="\educationwave\index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About Us </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Testimonial</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contact Us</a>
            </li>
          </ul>
        </div>
      </nav>
      
    </section>
    <!-- BANNER  -->
    <section id="banner">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center ">
            <p class="promo-title">Learning Steps  </p>
            <h2>SCROLL DOWN 👇</h2>
            
          </div>
          
        </div>
      </div>
      <img src="image/wave1.png" style="width: 100%;" class="wave"/>
    </section>
    <!-- SERVICES  -->
    <br>
    <br><br><br>
    <section id="card_watch">
      <div class="cards-list">
        
        <a href="free-video-lession/all/biologylist.php" style="text-decoration: none;"><div class="card 1">
          <div class="card_image"> <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/75/YouTube_social_white_squircle_%282017%29.svg/768px-YouTube_social_white_squircle_%282017%29.svg.png" /> </div>
          <div class="card_title title-white">
            <p class="watchhg">Watch Videos</p>
          </div>
        </div></a>
        <div class="card 2">
          <div class="card_image">
            <img src="image/notes.png" />
          </div>
          <div class="card_title title-white">
            <p class="watchhg"> Refer Notes </p>
          </div>
        </div>
        <div class="card 3">
          <div class="card_image">
            <img class="ask" src="image/ask.png" />
          </div>
          <div class="card_title">
            <p class="watchhg">Ask Question</p>
          </div>
        </div>
        
        <div class="card 4">
          <div class="card_image">
            <img class="ask"  src="image/ncert.jpg" />
          </div>
          <div class="card_title title-black">
            <p class="watchhg">NCERT Solution</p>
          </div>
        </div>
      </div>
      
    </section>
    <!-----------------social media -------------------------->
    <section id="social-media">
      <div class="container text-center">
        <p>FIND US ON SOCIAL MEDIA</p>
        <div class="social-icon">
          
          
          
          <a href="#"><img src="image/fb.png"></a>
          <a href="#"><img src="image/twit.png"></a>
          <a href="#"><img src="image/linkdin.png"></a>
          <a href="#"><img src="image/snap.png"></a>
          <a href="#"><img src="image/whats.png"></a>
          
          
          
        </div>
      </div>
    </section >
    <!----------------Footer section  ------------------>
    
<!----------------Footer section  ------------------>
<section id="footer">
  <!-- Footer -->
  <footer class="page-footer font-small indigo">
    <!-- Footer Links -->
    <div class="container text-center text-md-left">
      
      <!-- Grid row -->
      <div class="row footer_row">
        
        <!-- Grid column -->
        <div class="col-md-3 mx-auto">
          
          <!-- Links -->
          <h5 class="font-weight-bold text-uppercase mt-3 mb-4">CLASSES</h5>
          
          <ul class="list-unstyled" >
            <li style="color: white;">
              <a href="#!">Class 12</a>
            </li>
            <li>
              <a href="#!">Class 11</a>
            </li>
            <li>
              <a href="#!">Class 10</a>
            </li>
            <li>
              <a href="#!">Class 9</a>
            </li>

            <li>
              <a href="#!">Msc Biology</a>
            </li>
          </ul>
          
        </div>
        <!-- Grid column -->
        
        <hr class="clearfix w-100 d-md-none">
        
        <!-- Grid column -->
        <div class="col-md-3 mx-auto">
          
          <!-- Links -->
          <h5 class="font-weight-bold text-uppercase mt-3 mb-4">SUBJECTS</h5>
          
          <ul class="list-unstyled">
            <li>
              <a href="#!">Biology</a>
            </li>
            <li>
              <a href="#!">Physics</a>
            </li>
            <li>
              <a href="#!">Chemistry</a>
            </li>
            <li>
              <a href="#!">Math</a>
            </li>
            <li>
              <a href="#!">Eng. Subjects</a>
            </li>
          </ul>
          
        </div>
        <!-- Grid column -->
        
        <hr class="clearfix w-100 d-md-none">
        
        <!-- Grid column -->
        <div class="col-md-3 mx-auto">
          
          <!-- Links -->
          <h5 class="font-weight-bold text-uppercase mt-3 mb-4">ABOUT US</h5>
          
          <ul class="list-unstyled">
            <li>
              <a href="#!">Notes</a>
            </li>
            <li>
              <a href="#!">Testimonial</a>
            </li>
            <li>
              <a href="#!">About us</a>
            </li>
            <li>
              <a href="#!">Privacy Policy</a>
            </li>

            <li>
              <a href="#!">Contact Us</a>
            </li>
          </ul>
          
        </div>
        <!-- Grid column -->
        
        <hr class="clearfix w-100 d-md-none">
        
        <!-- Grid column -->
        <div class="col-md-3 mx-auto">
          
          <!-- Links -->
          <h5 class="font-weight-bold white text-uppercase mt-3 mb-4" style="color: whiet;">LIKE & FOLLOW US</h5>
          
          <ul class="list-unstyled">
            <li>
              <a href="#!">You Tube</a>
            </li>
            <li>
              <a href="#!">Instagram</a>
            </li>
            <li>
              <a href="#!">Facebook</a>
            </li>
            <li>
              <a href="#!">Twitter</a>
            </li>
          </ul>
          
        </div>
        <!-- Grid column -->
        
      </div>
      <!-- Grid row -->
      
    </div>
    <!-- Footer Links -->
    
    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">© 2019 Copyright:
      <a href="#"> educationwave.in</a>
    </div>
    <div class="footer-copyright text-center py-3">Icons made by <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a></div>
    <!-- Copyright -->
    
  </footer>
  <!-- Footer -->
</section>
  </body>
</html>
<div>Icons made by <a href="https://www.flaticon.com/authors/smashicons" title="Smashicons">Smashicons</a> from <a href="https://www.flaticon.com/"                 title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/"                 title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a></div>