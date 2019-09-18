<!-- INCLUDING NEEDED FILES (html meta and navbar) -->
<?php include('inc/header.php')?>
<?php include('inc/navbar.php')?>
<div class="container">
<!-- Gallery title with small description -->
<h3 class="gall-title">Gallery</h3>
<p class="gall-desc">See our professional staff in action!</p>

<div class="row" id="gall-row">
    <div class="col-sm">
      <!-- THIS IS A CARD: it has an image on top and a small title or text on the bottom -->
      <!-- also the image is triggering the modal window which is the pop-up that comes on after pressing the image -->
      <!-- DISCLAIMER it is not a link -->
      <!-- The card is surrounded by the Bootstrap GRID for more info go to bootstrap documention under section grid -->

        <div class="card">
          <button type="button" class="btn" data-toggle="modal" data-target="#modal-1">
            <!-- the image is considered a button when it is inside the button html tag -->
              <img class="card-img-top" src="img/Avon River/17.jpg" alt="Card image cap">
          </button>
        <div class="card-body">
          <!-- TITLE OF CARD -->
          <p class="card-text">Avon River</p>
          <!-- Everything in the card is previously styled so just adding a new card is simple -->
          <!-- just change "data-target=#modal-..." whichever number and make sure you make the modal window the same name as the card data-target -->
        </div>
      </div>

    </div>
    <div class="col-sm">
     <div class="card">
    <button type="button" class="btn" data-toggle="modal" data-target="#modal-2">
        <img class="card-img-top" src="img/Charity Bal/21.jpg" alt="Card image cap">
    </button>
  <div class="card-body">
    <p class="card-text">Charity Ball</p>
  </div>
</div>
    </div>
    <div class="col-sm">
        <div class="card">
    <button type="button" class="btn" data-toggle="modal" data-target="#modal-3">
        <img class="card-img-top" src="img/Cheltham Race Course/chel-5.JPG" alt="Card image cap">
    </button>
  <div class="card-body">
    <p class="card-text">Cheltenham Racecourse</p>
  </div>
</div>
    </div>
</div>

<div class="row">
    <div class="col-sm">
        <div class="card">
    <button type="button" class="btn" data-toggle="modal" data-target="#modal-4">
        <img class="card-img-top" src="img/Leicester Cathedral/16.JPG" alt="Card image cap">
    </button>
  <div class="card-body">
    <p class="card-text">Leicester Cathedral</p>
  </div>
</div>
    </div>
    <div class="col-sm">
     <div class="card">
    <button type="button" class="btn" data-toggle="modal" data-target="#modal-5">
        <img class="card-img-top" src="img/Summer Event/8.JPG" alt="Card image cap">
    </button>
  <div class="card-body">
    <p class="card-text">Summer Event</p>
  </div>
</div>
    </div>

    <!-- If you want to add another CARD to the website UNcomment the code underneath -->
    <!-- <div class="col-sm">
        <div class="card">
    <button type="button" class="btn" data-toggle="modal" data-target="#modal-6">
        <img class="card-img-top" src="img/" alt="Card image cap">
    </button>
  <div class="card-body">
    <p class="card-text">CARD TITLE</p>
  </div>
</div>
    </div> -->
</div>

</div>

<!-- THIS IS THE MODAL WINDOW SECTION -->
<!-- EVERYTHING DOWN FROM HERE IS MODAL WINDOWS  -->
<!-- MAKE SURE NAMES ARE CORRECT AND MATCHING WITH CARDS ON TOP -->

<div class="modal fade bd-example-modal-lg" id="modal-1" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
<!-- INSIDE THE modal-content is where all the content is placed -->
<!-- In this case its image slider -->
      <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <!-- THESE are the images in the image slider -->
    <!-- the class active makes sure that this image loads first -->
    <!-- the image class w-100 makes sure the image is 100% width -->
    <!-- IMAGE N1 -->
    <div class="carousel-item active">
      <img class="d-block w-100" src="img/Avon River/17.jpg" alt="First slide">
    </div>
    <!-- IMAGE N2 -->
    <div class="carousel-item">
      <img class="d-block w-100" src="img/Avon River/18.jpg" alt="Second slide">
    </div>
    <!-- IMAGE N3 -->
    <div class="carousel-item">
      <img class="d-block w-100" src="img/Avon River/19.jpg" alt="Second slide">
    </div>
    <!-- IMAGE N4 -->
    <div class="carousel-item">
      <img class="d-block w-100" src="img/Avon River/20.jpg" alt="Second slide">
    </div>
  </div>
  <!-- THIS ENDS the inside of the slider and underneath are the controls -->
  <!-- you can use different images or styling for the arrows if you want -->
  <!-- MAKE SURE WHEN ADDING NEW CARDS AND MODAL WINDOWS THAT YOU CHANGE THE href OF THE LINK TO MATCH THE MODAL -->
  <!-- LEFT ARROW -->
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <!-- RIGHT ARROW -->
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<!-- ALSO YOU CAN ADD AS MANY PHOTOS AS YOU WANT JUST MAKE SURE AGAIN THAT YOU CHANGE THE href OF THE ARROWS AND the id OF THE MODAL -->
    </div>
  </div>
</div>



<div class="modal fade bd-example-modal-lg" id="modal-2" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div id="carouselExampleControls1" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="img/Charity Bal/21.jpg" alt="Executive Catering Solutions">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/Charity Bal/22.jpg" alt="Executive Catering Solutions">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/Charity Bal/23.jpg" alt="Executive Catering Solutions">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/Charity Bal/24.jpg" alt="Executive Catering Solutions">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/Charity Bal/25.jpg" alt="Executive Catering Solutions">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/Charity Bal/26.jpg" alt="Executive Catering Solutions">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/Charity Bal/27.jpg" alt="Executive Catering Solutions">
    </div>

  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls1" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls1" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
    </div>
  </div>
</div>


<div class="modal fade bd-example-modal-lg" id="modal-3" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div id="carouselExampleControls2" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="img/Cheltham Race Course/chel-1.JPG" alt="ECS">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/Cheltham Race Course/chel-2.JPG" alt="ECS">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/Cheltham Race Course/chel-3.JPG" alt="ECS">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/Cheltham Race Course/chel-4.JPG" alt="ECS">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/Cheltham Race Course/chel-5.JPG" alt="ECS">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls2" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls2" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
    </div>
  </div>
</div>





<div class="modal fade bd-example-modal-lg" id="modal-4" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div id="carouselExampleControls3" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="img/Leicester Cathedral/3.JPG" alt="ECS">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/Leicester Cathedral/4.JPG" alt="ECS">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/Leicester Cathedral/5.JPG" alt="ECS">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/Leicester Cathedral/6.JPG" alt="ECS">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/Leicester Cathedral/7.JPG" alt="ECS">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/Leicester Cathedral/13.JPG" alt="ECS">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/Leicester Cathedral/14.JPG" alt="ECS">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/Leicester Cathedral/15.JPG" alt="ECS">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/Leicester Cathedral/16.JPG" alt="ECS">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls3" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls3" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
    </div>
  </div>
</div>



<div class="modal fade bd-example-modal-lg" id="modal-5" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div id="carouselExampleControls4" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="img/Summer Event/8.JPG" alt="ECS">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/Summer Event/9.JPG" alt="ECS">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/Summer Event/10.JPG" alt="ECS">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/Summer Event/11.JPG" alt="ECS">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/Summer Event/12.JPG" alt="ECS">
    </div>

  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls4" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls4" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
    </div>
  </div>
</div>



<!--
<div class="modal fade bd-example-modal-lg" id="modal-6" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div id="carouselExampleControls5" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="img/" alt="Executive Catering Solutions">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/" alt="Executive Catering Solutions">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls5" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls5" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
    </div>
  </div>
</div>
 -->







<!-- includes the footer -->
<?php include('inc/footer.php')?>
