;<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="keywords" content="footer, address, phone, icons" />

    <link rel="stylesheet" href="css/demo.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    

    <link rel="stylesheet" href="../css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="../css/animate.css">
    <link rel="stylesheet" type="text/css" href="../css/footer.css">
    <link rel="stylesheet" href="../css/magnific-popup.css">

    <link rel="stylesheet" href="../css/aos.css">

    <link rel="stylesheet" href="../css/ionicons.min.css">
    
    <link rel="stylesheet" href="../css/flaticon.css">
    <link rel="stylesheet" href="../css/icomoon.css">
    <link rel="stylesheet" href="../css/course.css">


        <title>Online Exam</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">  

        <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">

        <link href="https://fonts.googleapis.com/css?family=Fredericka+the+Great" rel="stylesheet">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

        <!-- Styles -->
        <style>

           body{
              margin: 0;
              padding: 0;
              font-family: "Work Sans", Arial, sans-serif ;
              background-color: #f1f1f1;
            }

            header{
              background-image: url(../images/wmain.jpg);
              height:80vh;
              background-size: cover;
              background-position: center;
              padding-top: 40px;
            }

           
          *,
            *::before,
            *::after {
              -webkit-box-sizing:border-box;
              box-sizing: border-box; }



            article, aside, figcaption, figure, footer, header, hgroup, main, nav, section {
              display: block; }


            .blur{
                z-index: 9999;
            }
            .coustm{
                background-color: #000000;
                height: 300px;
                width: 700px;
                margin-right: 745px;
                vertical-align: middle;
                border-radius: 0 20px 20px 0;
                
            }
            .coustm1{
                height: 250px;
                margin-top: 70px;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;}


body{
  margin: 0;
  padding: 0;
  font-family: "Work Sans", Arial, sans-serif ;
  background-color: #f1f1f1;
}
header{
  background-image: url(/images/wmain.jpg);
  height:80vh;
  background-size: cover;
  background-position: center;
  padding-top: 40px;
}

</style>
    </head>
    <body>
        <section>
        <div class="flex-center position-ref full-height blur">
            
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                   
                </div>

            @endif

        </div>
    </section>




    <section class="ftco-services ftco-no-pb">
      <div class="Courses" id="courses">
      <div class="container-wrap">
        <div class="row no-gutters">

          <div class="col-md-3 d-flex services align-self-stretch pb-4 px-4 ftco-animate bg-primary">
            <div class="media block-6 d-block text-center">
              <div class="icon d-flex justify-content-center align-items-center">
                <span class="flaticon-teacher"></span>
              </div>
              <div class="media-body p-2 mt-3">
                <h3 class="heading">Computational Thinking</h3>
                <p>Computational thinking describes the mental activity in formulating a problem to admit a computational solution. It allows one to understand how to interact with computers.</p>
              </div>
            </div>      
          </div>
    
          <div class="col-md-3 d-flex services align-self-stretch pb-4 px-4 ftco-animate bg-fifth">
            <div class="media block-6 d-block text-center">
              <div class="icon d-flex justify-content-center align-items-center">
                <span class="flaticon-books"></span>
              </div>
              <div class="media-body p-2 mt-3">
                <h3 class="heading">Design &amp; Visual Communication</h3>
                <p>Human brains are hardwired to process images quickly, and that means visuals work better than audio and words, when trying to get your message across.</p>
              </div>
            </div>      
          </div>

          <div class="col-md-3 d-flex services align-self-stretch pb-4 px-4 ftco-animate bg-quarternary">
            <div class="media block-6 d-block text-center">
              <div class="icon d-flex justify-content-center align-items-center">
                <span class="flaticon-diploma"></span>
              </div>
              <div class="media-body p-2 mt-3">
                <h3 class="heading">Digital Citizenship</h3>
                <p>Digital citizenship is important; to help students to learn, communicate and collaborate safely online. </p>
              </div>
            </div>      
          </div>
        </div>
      </div>
    </div>
    </section>




<footer class="footer-distributed">

   <div class="About" id="about">

      <div class="footer-left">

        <p class="footer-links">
          <a href="#">Home</a>
          ·
          <a href="#">About</a>
          ·
          <a href="#">Faq</a>
          ·
          <a href="#">Contact</a>
        </p>
        <p class="footer-company-name">Karkhana &copy; 2013</p>
      </div>

      <div class="footer-center">

        <div>
          <i class="fa fa-map-marker"></i>
          <p><span>Karkhana</span> Gyaneshwor, Kathmandu</p>
        </div>

        <div>
          <i class="fa fa-phone"></i>
          <p>+977-01-4429963 / +977-01-4412624
</p>
        </div>

        <div>
          <i class="fa fa-envelope"></i>
          <p><a href="mailto:info@karkhana.asia">support our orginazation</a></p>
        </div>

      </div>

      <div class="footer-right">

            <p class="footer-company-about">
              <span>About the organization</span>
          <p>
           Karkhana is an education company and makerspace with a unique approach to learning.
          </p>

          <div class="footer-icons">

            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-linkedin"></i></a>
            <a href="#"><i class="fa fa-github"></i></a>

          </div>
     </div>

    
  </footer>
  
  <script src="../js/jquery.min.js"></script>
  <script src="../js/jquery-migrate-3.0.1.min.js"></script>
  <script src="../js/popper.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script src="../js/jquery.easing.1.3.js"></script>
  <script src="../js/jquery.waypoints.min.js"></script>
  <script src="../js/jquery.stellar.min.js"></script>
  <script src="../js/owl.carousel.min.js"></script>
  <script src="../js/jquery.magnific-popup.min.js"></script>
  <script src="../js/aos.js"></script>
  <script src="../js/jquery.animateNumber.min.js"></script>
  <script src="../js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="../js/google-map.js"></script>
  <script src="../js/main.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 


    </body>
</html>

