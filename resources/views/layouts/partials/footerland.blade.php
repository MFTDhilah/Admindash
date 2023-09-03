<section class="contact-details border-top" id="contact-details-section">
  <br>
  <br>
        <div class="row text-center text-md-left">
          <div class="col-12 col-md-6 col-lg-3 grid-margin">
            <img src="{{ asset('landingpage/images/Logo.png') }}" alt="" class="pb-2 image-responsive" width="auto" height="120px" >
            <div class="pt-2">
              <p class="text-muted m-0">WA Admin : 08115988858</p>
              <p class="text-muted m-0">Telp Kantor : 05428504271</p>
              {{-- <p class="text-muted m-0">Email : redfacialbodyandtreatment@gmail.com</p>
              <p class="text-muted m-0">Alamat : Strat 2 Gn.Smd RT.17 No.90 Gg.Mulyo</p>
              <p class="text-muted m-0">Balikpapan</p> --}}
            </div>
          </div>
          <div class="col-12 col-md-6 col-lg-3 grid-margin">
            <div class="mapouter"><div class="gmap_canvas"><iframe width="auto" height="100%" id="gmap_canvas" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.88882135063!2d116.8462795!3d-1.2367842999999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2df147cc54204ba5%3A0x868484965802b9ef!2sRed%20Facial%20and%20Body%20Treatment!5e0!3m2!1sen!2sid!4v1673670243956!5m2!1sen!2sid" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><br><style>.mapouter{position:relative;text-align:center;height:100%;width:auto;}</style><a href="https://www.embedgooglemap.net"></a><style>.gmap_canvas {overflow:hidden;background:none!important;height:100%;width:auto;}</style></div></div>
          </div>
          <div class="col-12 col-md-6 col-lg-3 grid-margin">
            <h5 class="pb-2">Shortlink</h5>
            <a href="\facial"><p class="m-0 pb-2">Facial Treatment</p></a>
            <a href="\body" ><p class="m-0 pt-1 pb-2">Body Treatment</p></a>
            <a href="\hair"><p class="m-0 pt-1 pb-2">Hair Treatment</p></a>
            <a href="\nail"><p class="m-0 pt-1 pb-2">Eyelash & Nail Treatment</p></a>
            <a href="\package"><p class="m-0 pt-1 pb-2">Package</p></a>
            <a href="#"><p class="m-0 pt-1">Product</p></a>
          </div>
          <div class="col-12 col-md-6 col-lg-3 grid-margin">
              <h5 class="pb-2">Our address</h5>
              <p class="text-muted">Jl. Strat 2 Gang Mulyo RT. 17 No. 90<br>Gunung Samarinda<br>Balikpapan Utara</p>
              <div class="d-flex justify-content-center justify-content-md-start">
                <a href="https://api.whatsapp.com/send?phone=628115988858&fbclid=IwAR0qxlJod4tMMzq7tzN0xJkhrB6oAfWTPtVl0rH37dOzvUgEhr6Ohe0zSS0"><span class="mdi mdi-whatsapp"></span></a>
                <a href="https://www.instagram.com/red_facialandbodytreatment"><span class="mdi mdi-instagram"></span></a>
                <a href="https://www.facebook.com/redfacialandbodytreatment/"><span class="mdi mdi-facebook"></span></a>
                <a href="https://www.tiktok.com/@redfacialnbodytreatment" class="fab fa-tiktok">
                </a>
              </div>
          </div>
        </div>
      </section>
      <footer class="border-top">
        <p class="text-center text-muted pt-4">Copyright © 2023<a href="#" class="px-1">Red Facial and Body Treatment.</a>All rights reserved.</p>
      </footer>
      <!-- Modal for Contact - us Button -->
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title" id="exampleModalLabel">Contact Us</h4>
            </div>
            <div class="modal-body">
              <form>
                <div class="form-group">
                  <label for="Name">Name</label>
                  <input type="text" class="form-control" id="Name" placeholder="Name">
                </div>
                <div class="form-group">
                  <label for="Email">Email</label>
                  <input type="email" class="form-control" id="Email-1" placeholder="Email">
                </div>
                <div class="form-group">
                  <label for="Message">Message</label>
                  <textarea class="form-control" id="Message" placeholder="Enter your Message"></textarea>
                </div>
              </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-success">Submit</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="{{ asset('landingpage/vendors/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('landingpage/vendors/bootstrap/bootstrap.min.js') }}"></script>
  <script src="{{ asset('landingpage/vendors/owl-carousel/js/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('landingpage/vendors/aos/js/aos.js') }}"></script>
  <script src="{{ asset('landingpage/js/landingpage.js') }}"></script>
  <script >
  var modal = document.getElementById("myModal");

  // Get the image and insert it inside the modal - use its "alt" text as a caption
  var img = document.getElementById("myImg");
  var modalImg = document.getElementById("img01");
  var captionText = document.getElementById("caption");
  img.onclick = function(){
    modal.style.display = "block";
    modalImg.src = this.src;
    captionText.innerHTML = this.alt;
  }

  // Get the <span> element that closes the modal
  var span = document.getElementsByClassName("close")[0];

  // When the user clicks on <span> (x), close the modal
  span.onclick = function() {
    modal.style.display = "none";
  }
  </script>