<!-- This class "back-to-top" is the back to top button that appears when you scroll down enough on a webpage -->
<div class="back-to-top"><i class="fas fa-angle-up"></i></div>
<div class="container">
  <br>
  <!-- <br> is a break line HTML tag (на нов ред) -->
  <hr>
  <!-- <hr> is the line that appears separating the 2 sections -->
</div>
    <section class="footer">
      <div class="container">
        <div class="row">
          <div class="col-sm">
            <!-- FOOTER LOGO AND HEADING -->
            <p class="foot-logo"><img src="img/logo-title.png" alt=""></p>
            <h3 class="foot-title">Executive Catering Solutions</h3>
          </div>
        </div>
        <div class="row">
          <div class="col-sm">
            <!-- EMAIL -->
            <p class="e-mail">
              E-mail: info@ecsevents.co.uk
            </p>
          </div>
          <div class="col-sm">
            <!-- MOBILE PHONE -->
            <p class="mobile-phone">
              Mobile: +44(0)7574113960
            </p>
          </div>
          <div class="col-sm">
            <div class="row" id="social-row">
              <!-- FACEBOOK LINK -->
              <div class="col" id="social-links">
                <a class="face-link foot-social-link" href="https://www.facebook.com/Executive-Catering-Solutions-Ltd-1320859754695382/"><i class="fab fa-facebook-square"></i></a>
              </div>
              <!-- INSTAGRAM LINK -->
              <div class="col" id="social-links1">
                <a class="insta-link foot-social-link" href="https://www.instagram.com/executivecateringsolutions/?hl=en"><i class="fab fa-instagram"></i></a>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm">
            <!-- ADDRESS -->
            <p class="address">
              Address: Unit 27, Mansley Business Centre<br>
                Timothy’s Bridge Road, Stratford Upon Avon<br>
                <strong>CV37 9NQ</strong>
            </p>
          </div>
        </div>
      </div>
    </section>
    <div class="copy">
      <!-- darker line on the bottom of the footer -->
      &copy 2018 ECS | <a class="privacy" href="privacy.php">PRIVACY POLICY</a>
    </div>

<!-- НАДОЛУ НЕ ТРИЙ НИЩО САМО ДОБАВЯЙ ПОД ВСИЧКО ДРУГО -->


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!--FORM VALIDATION-->

    <!-- <script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function() {
      'use strict';
      window.addEventListener('load', function() {
        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.getElementsByClassName('needs-validation');
        // Loop over them and prevent submission
        var validation = Array.prototype.filter.call(forms, function(form) {
          form.addEventListener('submit', function(event) {
            if (form.checkValidity() === false) {
              event.preventDefault();
              event.stopPropagation();
            }
            form.classList.add('was-validated');
          }, false);
        });
      }, false);
    })();
    </script> -->

    <script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
    <script>
      window.sr = ScrollReveal();
      sr.reveal('.ptext',{
        duration: 1500,
        origin: 'bottom',
        distance: '50px'
      });
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script>
      var $backToTop = $(".back-to-top");
          $backToTop.hide();


          $(window).on('scroll', function() {
            if ($(this).scrollTop() > 100) {
              $backToTop.fadeIn();
            } else {
              $backToTop.fadeOut();
            }
          });

          $backToTop.on('click', function() {
            $("html, body").animate({scrollTop: 0}, 500);
          });
    </script>
  </body>
</html>
