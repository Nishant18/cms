<div class="container overflow-auto" style="height:auto" >
<!--header-->
<?php
include('header.php');
?>

<!--carousel-->
<div class="container">
  <div class="row">
    <div class="col mt-2">
      <!-- Carousel wrapper -->
      <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        </div>
        <div class="carousel-inner rounded-5 shadow-4-strong">
          <div id="carousel-img" class="carousel-item active">
            <img src="images/Tarnetar-Fair-Banner.jpg" class="img d-block" width="100%" height="100%" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h4>Tarnetar Mela 2023 (18-Sept To 21-Sept 2023)</h4>

            </div>
          </div>
          <div id="carousel-img" class="carousel-item">
            <img src="images/rides.jpg" class="img d-block" width="100%" height="100%" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h4>Tarnetar Mela 2023 (18-Sept To 21-Sept 2023)</h4>
            </div>
          </div>

        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
  </div>
</div>






<!-- <div class="row">
        <div class="col md-8 mt-2">
        
        
        </div>  -->



<!--pg1 dynamic data with sidebar-->
<!--<div class="container" id="pg1-dydata">
        <div class="row">
            <div class="col-md-8 mt-2">          
              
              <div class="card">
                  <div class="row g-0">
                    <div class="col-md-9">
                      <div class="card-body">
                        <h4 class="card-title text-primary" data-sequence="300">Shri Bhupendrabhai Patel</h4>
                        <p class="card-text"><small class="text-body-secondary">Hon'ble Chief Minister, Gujarat</small></p>
                        <p class="card-text">The Tarnetar Fair is one such festival held at the Tarnetar village. This small and otherwise calm village is situated in the 'Panchal' region of Gujarat. The Tarnetar fair is an annual festival denoting colour, vivacity, ebullience, prayers and rituals.t</p>
                      </div>
                    </div>
                    <div class="col-md-3">
                      <img class="bd-placeholder-img img-fluid rounded float-end" src="images/cm.jpg"class="img-circle" width="auto" height="auto"  alt="Hon.CM Gujarat">
                     
                    </div>                
                  </div>
              </div>
              <div class="card">
                  <div class="row g-0">
                    <div class="col-md-9">
                      <div class="card-body">
                        <h4 class="card-title text-primary" data-sequence="300">Shri Bhupendrabhai Patel</h4>
                        <p class="card-text"><small class="text-body-secondary">Hon'ble Chief Minister, Gujarat</small></p>
                        <p class="card-text">The Tarnetar Fair is one such festival held at the Tarnetar village. This small and otherwise calm village is situated in the 'Panchal' region of Gujarat. The Tarnetar fair is an annual festival denoting colour, vivacity, ebullience, prayers and rituals.t</p>
                      </div>
                    </div>
                    <div class="col-md-3">
                      <img class="bd-placeholder-img img-fluid rounded float-end" src="images/cm.jpg"class="img-circle" width="auto" height="auto"  alt="Hon.CM Gujarat">
                    
                    </div>                
                  </div>
              </div>
              
              
            
            

                <div class="card mt-2">
                    <div class="card-header bg-primary text-white">
                      Welcome to Tarnetar Fair 2023
                    </div>
                    <div class="card-body">
                      <img src="image/cm.jpg"class="img-circle" width="200px" height="200px"  alt="Hon.CM Gujarat">
                      <h5 class="card-title">Special title treatment</h5>
                      <p class="card-text">Group Functionality-Groups can be created at three level
                      </p>
                      <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                  </div>
            </div>
                      
        </div>
</div> -->

<div class="container">
  <div class="row align-self-stretch">
    <div class="col-md-8 mt-2">
      <div class="card rounded-5">
        <div class="card-header bg-primary text-white text-center">
          <a href="details.php" class="text-white">All Events at Tarnetar Mela</a>

        </div>
        <div id="events">
          <?php
          include('events1.php');
          ?>
        </div>

      </div>
    </div>

    <div class="col-md-4 mt-2">
      <div class="card rounded-5 overflow-auto" style="height: 365px;">
        <?php
        include('sidebar.php');
        ?>
      </div>
    </div>
  </div>
</div>



<!-- <div class="card">
      <div class="row">
        <div class="col-md-7">
          <div class="card-body">
            <h7 class="card-title text-primary" data-sequence="300">Shri Bhupendrabhai Patel</h7>
            <p class="card-text"><small class="text-body-secondary">Hon'ble Chief Minister, Gujarat</small></p>
            <p class="card-text">Welcome to Tarnetar Fair</p>
          </div>
        </div>
        <div class="col-md-5">
          <img class="bd-placeholder-img img-fluid rounded float-end" src="images/cm.jpg" class="img-circle" width="auto" height="auto" alt="Hon.CM Gujarat">

        </div>
      </div>
    </div>
  </div>
</div>
</div> -->



<!--google map and cm photo-->
<div id="map" class="container">
  <div class="sidebar">
    <div class="row">
      <div class="col-md-8 mt-2">
        <div class="card rounded-5">
          <div class="card-header bg-primary text-white text-center">
            Location - Tarnetar Taluka - Than District - Surendranagar
          </div>
          <div class="card-body">

            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3682.281155411369!2d71.20906157443555!3d22.643303630376813!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395975b7dc606157%3A0x2bf262cd19cb24b0!2sTarnetar%20Mela%20ground!5e0!3m2!1sen!2sin!4v1691153265907!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
        </div>
      </div>
      <div class="col-md-4 mt-2">
        <div class="card rounded-5 overflow-auto" style="height: 555px;">
          <div class="card-header sticky-top bg-primary text-white text-center">
            Tweets
          </div>
          <div class="card-body">
            <?php
            include('twitterpg.php');
            ?>

          </div>


        </div>



      </div>


    </div>
  </div>
</div>
<!-- <button class="btn btn-primary btn-floating btn-lg" onclick="topFunction()" id="myBtn" title="Go to top">
<i class="fas fa-arrow-up"></i>
</button> -->
<?php
  include('scrolltop.php');
?>




<!-- <button type="button" class="btn btn-primary btn-floating btn-lg" id="btn-back-to-top">
  <i class="fas fa-arrow-up"></i>
</button> -->

<!--footer-->
<?php
include('footer.php');
?>
</div>