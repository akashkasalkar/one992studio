
<?php include "./header.php"; ?>
<style>
  /* Make the image fully responsive */
  .carousel-inner img {
    width: 100%;
    height: 100%;
  }
  .carousel-inner {
    width: 100%;
    height: 100%;
  }
  .carousel{
    width: 100%;
    height: 100%;
  }
 
  </style>
  <script>
     $(".animated").addClass("delay-2s");
  </script>
<div id="myCarousel" class="carousel slide" data-ride="carousel" style="background-position:cover;background-size:cover">

<!-- Indicators -->
<ul class="carousel-indicators">
  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
  <li data-target="#myCarousel" data-slide-to="1"></li>
  <li data-target="#myCarousel" data-slide-to="2"></li>
</ul>

<!-- The slideshow -->
<div class="carousel-inner" >
  <div class="carousel-item active">
    <img src="./img/banner/1.png" alt="Los Angeles" width="1100" height="500" class="animated fadeInDown">
    <div class="carousel-caption d-none d-md-block">
            <h3>We Design your space</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod tempor</p>
            <a href="#" class="boxed-btn2">See Our Projects</a>
    </div>
</div>
  <div class="carousel-item">
        <img src="./img/banner/1.png" alt="Los Angeles" width="1100" height="500" class="animated fadeInLeft">
        <div class="carousel-caption d-none d-md-block">
            <h3>We Design your space</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod tempor</p>
            <a href="#" class="boxed-btn2">See Our Projects</a>
        </div>
    </div>

  </div>
  <div class="carousel-item">
     <img src="./img/banner/1.png" alt="Los Angeles" width="1100" height="500">
     <div class="carousel-caption d-none d-md-block">
            <h3>We Design your space</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod tempor</p>
            <a href="#" class="boxed-btn2">See Our Projects</a>
            </div>
    </div>
  </div>
</div>

<!-- Left and right controls -->
<a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
  <span class="carousel-control-prev-icon"></span>
</a>
<a class="carousel-control-next" href="#myCarousel" data-slide="next">
  <span class="carousel-control-next-icon"></span>
</a>
</div>




    <!-- JS here -->
    <script src="js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/ajax-form.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/scrollIt.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/nice-select.min.js"></script>
    <script src="js/jquery.slicknav.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/plugins.js"></script>

    <!--contact js-->
    <script src="js/contact.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/jquery.form.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/mail-script.js"></script>

    <script src="js/main.js"></script>

</body>

</html>