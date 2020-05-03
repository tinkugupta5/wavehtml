<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    
    <link rel="stylesheet" type="text/css" href="../../css/biologylist.css">

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   
    <style type="text/css">

    
    
    .cards-list {
    z-index: 0;
    width: 100%;.
    
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
    #customers {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
    }
    #customers td, #customers th {
    border: 1px solid #ddd;
    padding: 8px;
    }
    #customers tr:nth-child(even){background-color: #f2f2f2;}
    #customers tr:hover {background-color: #ddd;}
    #customers th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #781796;
    color: white;
    }
    </style>
    
    
  </head>
  <body>
    
    
    
    <section id="nav-bar">
      <nav class="navbar navbar-expand-sm bg-light ">
        <!-- Brand/logo -->
        <a class="navbar-brand" href="\educationwave\index.php">Educationwave</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle-navigation">
        <i class="fa fa-bars" aria-hidden="true"></i>
        </button>
        <!-- Links -->
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="\educationwave\index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Class 12 </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Class 11 </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#"> Class 10</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About Us </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="#">Contact-us</a>
            </li>
          </ul>
        </div>
      </nav>
      
    </section>
    <!-- BANNER  -->
    <section id="banner">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
           <!--  <p class="promo-title"> EDUCATION WAVE</p>
            <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere natus repellat omnis incidunt consectetur aspernatur ipsam architecto, ex dignissimos accusamus aut nam quibusdam deserunt. Deleniti hic aperiam sit suscipit assumenda.</p> -->
            <!-- <a class="btn-ani watch text-center" href="class.php" style="margin-left: 80px">
          <span></span>
          <span></span>
          <span></span>
          <span></span>
          Educationwave
        </a>  -->

        <div class="col-md-12">
            <p class="promo-title text-center"> EDUCATION WAVE</p>
            
          </div>
            
          </div>
          <!-- <div class="col-md-4" text-centre>
            <img src="image/10.png" class="img10"/>
          </div> -->
        </div>
      </div>
      <img src="/educationwave/image/wave1.png" style="width: 100%;" class="wave"/>
    </section>

     <!-- SERVICES  -->
     <section id="services">
      <div class="container text-center" >
        <h2 class="title" text-center>Class 12 Biology Chapters</h2>
        
      </div>
    </section>
    <!-- VIDEO CARD -->
    <br><br><br><br><br>
    <section>
      <table id="customers">
        <tr>
          <th>Class 12 - Chapters</th>
          <th>Links to View</th>
          
        </tr>
        <tr>
          <td> ⚫ Chapter 1 - Reproduction in Organisms</td>
          <td><a href="/educationwave/free-video-lession/class-12/Biology/Reproduction-In-Organisms/video1.php">Click Me </a></td>
          
        </tr>
        <tr>
          <td>⚫ Chapter 2 - Sexual Reproduction in Flowering Plants</td>
          <td><a href="/educationwave/free-video-lession/class-12/Biology/Sexual-Reproduction-In-Plants/part1.php">Click Me </a></td>
          
        </tr>

         <tr>
          <td>⚫ Chapter 3 -Human Reproduction</td>
          <td><a href="/educationwave/free-video-lession/class-12/Biology/Human%20Reproduction/part1.php">Click Me </a></td>
          
        </tr>

       


         <tr>
          <td>⚫ Chapter 3 -Human Reproduction</td>
          <td><a href="/educationwave/ free-video-lession/class-12/Biology/Reproductive%20Health/part1.php">Click Me </a></td>
          
        </tr>


       

        <tr>
          <td>⚫ Chapter 4 - Reproductive Health</td>
          <a href="#"><td><a href="#">Click Me </a></td></a>
          
        </tr>
        <tr>
          <td>⚫ Chapter 5 - Principles of Inheritance and Variation</td>
          <a href="#"><td><a href="#">Click Me </a></td></a>
          
        </tr>
        <tr>
          <td>⚫ Chapter 6 - Molecular Basis of Inheritance</td>
          <a href="#"><td><a href="#">Click Me </a></td></a>
          
        </tr>
        <tr>
          <td>⚫ Chapter 7 - Evolution</td>
          <a href="#"><td><a href="#">Click Me </a></td></a>
          
        </tr>
        <tr>
          <td>⚫ Chapter 8 - Human Health And Diseases</td>
          <a href="#"><td><a href="#">Click Me </a></td></a>
          
        </tr>
        <tr>
          <td>⚫ Chapter 9 - Strategies for Enhancement in Food Production </td>
          <a href="#"><td><a href="#">Click Me </a></td></a>
          
        </tr>
        <tr>
          <td>⚫ Chapter 10 - Microbes in Human Welfare</td>
          <a href="#"><td><a href="#">Click Me </a></td></a>
          
        </tr>
        <tr>
          <td>⚫ Chapter 11 -Biotechnology: Principles and processes </td>
          <a href="#"><td><a href="#">Click Me </a></td></a>
          
        </tr>
        <tr>
          <td>⚫ Chapter 12 - Biotechnology and its Application</td>
          <a href="#"><td><a href="#">Click Me </a></td></a>
          
        </tr>
        <tr>
          <td>⚫ Chapter 13 - Organisms And Populations</td>
          <a href="#"><td><a href="#">Click Me </a></td></a>
          
        </tr>
        <tr>
          <td>⚫ Chapter 14 - Ecosystem</td>
          <a href="#"><td><a href="#">Click Me </a></td></a>
          
        </tr>
        <tr>
          <td>⚫ Chapter 15 - Biodiversity and conservation</td>
          <a href="#"><td><a href="#">Click Me </a></td></a>
          
        </tr>
        <tr>
          <td>⚫ Chapter 16 - Environmental Issues</td>
          <a href="#"><td>Click Me</td></a>
          
        </tr>
      </table>
    </section>
    <!----------------------------ABOUT US---------------------->
    <!-----------------social media -------------------------->
    <section id="social-media">
      <div class="container text-center">
        <p>FIND US ON SOCIAL MEDIA</p>
        <div class="social-icon">
          
          
          
          <a href="#"><img src="/educationwave/image/fb.png"></a>
          <a href="#"><img src="/educationwave/image/twit.png"></a>
          <a href="#"><img src="/educationwave/image/linkdin.png"></a>
          <a href="#"><img src="/educationwave/image/snap.png"></a>
          <a href="#"><img src="/educationwave/image/whats.png"></a>
          
          
          
        </div>
      </div>
    </section >
    <!----------------Footer section  ------------------>
    <section id="footer">
      <!-- Footer -->
      <footer class="page-footer font-small indigo">
        <!-- Footer Links -->
        <div class="container text-center text-md-left">
          
          <!-- Grid row -->
          <div class="row">
            
            <!-- Grid column -->
            <div class="col-md-3 mx-auto">
              
              <!-- Links -->
              <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Links</h5>
              
              <ul class="list-unstyled">
                <li>
                  <a href="#!">Very long link 1</a>
                </li>
                <li>
                  <a href="#!">Very long link 2</a>
                </li>
                <li>
                  <a href="#!">Very long link 3</a>
                </li>
                <li>
                  <a href="#!">Very long link 4</a>
                </li>
              </ul>
              
            </div>
            <!-- Grid column -->
            
            <hr class="clearfix w-100 d-md-none">
            
            <!-- Grid column -->
            <div class="col-md-3 mx-auto">
              
              <!-- Links -->
              <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Links</h5>
              
              <ul class="list-unstyled">
                <li>
                  <a href="#!">Link 1</a>
                </li>
                <li>
                  <a href="#!">Link 2</a>
                </li>
                <li>
                  <a href="#!">Link 3</a>
                </li>
                <li>
                  <a href="#!">Link 4</a>
                </li>
              </ul>
              
            </div>
            <!-- Grid column -->
            
            <hr class="clearfix w-100 d-md-none">
            
            <!-- Grid column -->
            <div class="col-md-3 mx-auto">
              
              <!-- Links -->
              <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Links</h5>
              
              <ul class="list-unstyled">
                <li>
                  <a href="#!">Link 1</a>
                </li>
                <li>
                  <a href="#!">Link 2</a>
                </li>
                <li>
                  <a href="#!">Link 3</a>
                </li>
                <li>
                  <a href="#!">Link 4</a>
                </li>
              </ul>
              
            </div>
            <!-- Grid column -->
            
            <hr class="clearfix w-100 d-md-none">
            
            <!-- Grid column -->
            <div class="col-md-3 mx-auto">
              
              <!-- Links -->
              <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Links</h5>
              
              <ul class="list-unstyled">
                <li>
                  <a href="#!">Link 1</a>
                </li>
                <li>
                  <a href="#!">Link 2</a>
                </li>
                <li>
                  <a href="#!">Link 3</a>
                </li>
                <li>
                  <a href="#!">Link 4</a>
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
        <!-- Copyright -->
        
      </footer>
      <!-- Footer -->
    </section>
  </body>
</html>