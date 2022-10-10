<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Provisio Resort -HOME</title>
<?php require('inc/links.php'); ?>
<link rel="stylesheet"   href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css">

<style>
    .availability-form{
        margin-top: -50px;
        z-index: 2;
        position: relative;
    }

    @media screen and (max-width: 575px){
        .availability-form{
            margin-top: 25px;
            padding: 0 35px;
        }
    }
</style>

</head>
<body class="bg-light">

<?php require('inc/header.php'); ?>

    <!-- Carousel -->

    <div class="container-fluid px-lg-4 mt-4">
            <!-- Swiper -->
            <div class="swiper swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                <img src="images/carousel/1.png" class="w-100 d-block">
                </div>
                <div class="swiper-slide">
                <img src="images/carousel/2.png" class="w-100 d-block">
                </div>
                <div class="swiper-slide">
                <img src="images/carousel/3.png" class="w-100 d-block">
                </div>
                <div class="swiper-slide">
                <img src="images/carousel/4.png" class="w-100 d-block">
                </div>
                <div class="swiper-slide">
                <img src="images/carousel/5.png" class="w-100 d-block">
                </div>
                <div class="swiper-slide">
                <img src="images/carousel/6.png" class="w-100 d-block">
                </div>
            </div>
        </div>
    </div>

<!--  Check Availability of Rooms Form -->

<div class="container availability-form">
    <div class="row">
       <div class="col-lg-12 bg-white shadow p-4 rounded">
           <h5 class="mb-4">Check Booking Availability</h5>
           <form>
               <div class="row align-items-end">
                  <div class="col-lg-3 mb-3">
                  <label class="form-label" style="font-weight: 500; ">Check-in</label>
                  <input type="date" class="form-control shadow-none ">
                  </div> 
                  <div class="col-lg-3 mb-3">
                  <label class="form-label" style="font-weight: 500; ">Check-out</label>
                  <input type="date" class="form-control shadow-none ">
                  </div> 
                  <div class="col-lg-3 mb-3">
                  <label class="form-label" style="font-weight: 500; ">Adult</label>
                    <select class="form-select shadow-none">
                        <option value="select">Select</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option> 
                        <option value="4">Four</option>
                    </select>
                  </div>
                  <div class="col-lg-2 mb-3">
                  <label class="form-label" style="font-weight: 500; ">Children</label>
                    <select class="form-select shadow-none">
                        <option value="select">Select</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                        <option value="4">Four</option>
                        <option value="5">Five</option>
                        <option value="6">Six</option>
                    </select>
                  </div>
                  <div class="col-lg-1 mb-lg-3 mt-2">
                      <button type="submit" class="btn text-white shadow-none custom-bg">Submit</button>
                  </div>
               </div>
           </form>
       </div> 
    </div>
</div>
    <!-- Our Rooms -->
<h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">OUR ROOMS</h2>
<div class="container">
    <div class="row">
     <div class="col-lg-4 col-md-6 my-3">

        <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
            <img src="images/rooms/3.png" class="card-img-top">
            <div class="card-body">
              <h5>Basic Room</h5>
              <h6 class="mb-4">$200 per Night</h6>
              <div class="features mb-4"> 
                <h6 class="mb-1">Features</h6>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                    2 Rooms
                </span>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                 1 Bathrooms
                </span>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                    1 Balcony
                </span>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                 3 Sofas 
                </span>
             </div>
             <div class="facilities mb-4">
                 <h6 class="mb-1">Facilities</h6>
                 <span class="badge rounded-pill bg-light text-dark text-wrap">
                  Wifi
                </span>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                HD TV
                </span>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                AC
                </span>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                Gym
                </span>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                    Heated Pool
                    </span>
              </div>
              <div class="rating mb-4">
                <h6 class="mb-1">Rating</h6>
                <span class="badge rounded-pill bg-light">
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>

                </span>
              </div>
              <div class="d-flex justify-content-evenly mb-2">
                <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
                <a href="#" class="btn btn-sm  btn-outline-dark shadow-none">More Details</a>
              </div>
            </div>
          </div>
        </div> 
        <div class="col-lg-4 col-md-6 my-3">
            <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
                <img src="images/rooms/mlr.jpeg" class="card-img-top">
                <div class="card-body">
                  <h5>State Room</h5>
                  <h6 class="mb-4">$300 per Night</h6>
                  <div class="features mb-4"> 
                    <h6 class="mb-1">Features</h6>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                        2 Rooms
                    </span>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                     1 Bathrooms
                    </span>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                        1 Balcony
                    </span>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                     3 Sofas 
                    </span>
                 </div>
                 <div class="facilities mb-4">
                     <h6 class="mb-1">Facilities</h6>
                     <span class="badge rounded-pill bg-light text-dark text-wrap">
                      Wifi
                    </span>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                    HD TV
                    </span>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                    AC
                    </span>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                    Gym
                    </span>
                    <span class="badge rounded-pill bg-light text-dark text-wrap">
                        Heated Pool
                        </span>
                  </div>
                  <div class="rating mb-4">
                    <h6 class="mb-1">Rating</h6>
                    <span class="badge rounded-pill bg-light">
                      <i class="bi bi-star-fill text-warning"></i>
                      <i class="bi bi-star-fill text-warning"></i>
                      <i class="bi bi-star-fill text-warning"></i>
                      <i class="bi bi-star-fill text-warning"></i>
                    </span>
                  </div>
                  <div class="d-flex justify-content-evenly mb-2">
                    <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
                    <a href="#" class="btn btn-sm  btn-outline-dark shadow-none">More Details</a>
                  </div>
                </div>
              </div>
             </div> 
             <div class="col-lg-4 col-md-6 my-3">
                <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
                    <img src="images/rooms/1.jpg" class="card-img-top">
                    <div class="card-body">
                      <h5>Suites</h5>
                      <h6 class="mb-4">$600 per Night</h6>
                      <div class="features mb-4"> 
                        <h6 class="mb-1">Features</h6>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">
                            2 Rooms
                        </span>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">
                         1 Bathrooms
                        </span>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">
                            1 Balcony
                        </span>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">
                         3 Sofas 
                        </span>
                     </div>
                     <div class="facilities mb-4">
                         <h6 class="mb-1">Facilities</h6>
                         <span class="badge rounded-pill bg-light text-dark text-wrap">
                          Wifi
                        </span>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">
                        HD TV
                        </span>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">
                        AC
                        </span>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">
                        Gym
                        </span>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">
                            Heated Pool
                            </span>
                      </div>
                      <div class="rating mb-4">
                        <h6 class="mb-1">Rating</h6>
                        <span class="badge rounded-pill bg-light">
                          <i class="bi bi-star-fill text-warning"></i>
                          <i class="bi bi-star-fill text-warning"></i>
                          <i class="bi bi-star-fill text-warning"></i>
                          <i class="bi bi-star-fill text-warning"></i>
                        </span>
                      </div>
                      <div class="d-flex justify-content-evenly mb-2">
                        <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
                        <a href="#" class="btn btn-sm  btn-outline-dark shadow-none">More Details</a>
                      </div>
                    </div>
                  </div>
             </div> 
       <div class="col-lg-12 text-center mt-5">
        <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Rooms >>></a>
       </div>

    </div>
</div>

    <!-- Our Facilities -->
<h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">OUR FACILITIES</h2>

<div class="container">
    <div class="row justify-content-evenly px-lg-0 px-md-0 px-5">
        <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
            <img src="images/features/wifi.svg" width="70px">
            <h5 class="mt-3">Wifi</h5>
        </div>
        <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
            <img src="images/features/star.svg" width="70px">
            <h5 class="mt-3">Star</h5>
        </div>
        <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
            <img src="images/features/wifi.svg" width="70px">
            <h5 class="mt-3">Wifi</h5>
        </div>
        <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
            <img src="images/features/wifi.svg" width="70px">
            <h5 class="mt-3">Wifi</h5>
        </div>
        <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
            <img src="images/features/wifi.svg" width="70px">
            <h5 class="mt-3">Wifi</h5>
        </div>
      <div class="col-lg-12 text-center mt-5">
        <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Facilities >>></a>
      </div>
    </div> 
</div>
</div>
</div>
</div>

    <!-- Testimonials -->
<h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">TESTIMONIALS</h2>
<div class="container mt-5">
    <div class="swiper swiper-testimonials">
        <div class="swiper-wrapper mb-5">

          <div class="swiper-slide bg-white p-4">
              <div class="profile d-flex align-items-center mb-3">
                <img src="images/features/star.svg" width="30px">
                <h6 class= "m-0 ms-2">Sam Douglas</h6>
              </div>
              <p>
                Was a great trip at the Provisio Resort. We were wined and dined with the utmost 
                attention. Will definitely recommend to others
                </p>
                <div class="rating">
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i> 
                </div>
          </div>
          <div class="swiper-slide bg-white p-4">
              <div class="profile d-flex align-items-center mb-3">
                <img src="images/features/star.svg" width="30px">
                <h6 class= "m-0 ms-2">Danielle Carr</h6>
              </div>
              <p>
                  This is a great place for spending some fun family time. The water park is entertaining enough for a full day. 
                  I did appreciate not having to drive all the way into Orlando, but I would not want to stay here if I were visiting theme parks in Orlando and have to make that drive (though some may appreciate the distance). 
                  You do feel like you have space here to unwind. The golfing looks fantastic.
                </p>
                <div class="rating">
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i> 
                </div>
          </div>
          <div class="swiper-slide bg-white p-4">
              <div class="profile d-flex align-items-center mb-3">
                <img src="images/features/star.svg" width="30px">
                <h6 class= "m-0 ms-2">Carey Lewis</h6>
              </div>

              <p>
              This is the best resort that I have ever stayed at! All resorts are beautiful inside but it was the staff that set this one apart.
              Everyone was extremely friendly- from the lobby, to the catering servers, to the man that was changing the garbage outside in the parking lot.
              Everyone had a big smile on their face, greeted us, and wished us a good day. The rooms were spacious and clean. The bed was really comfortable. 
              I ate at the Deli twice and the food was delicious. Needless to say, I would highly recommend this resort to anyone looking to visit this area.
                </p>

                <div class="rating">
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i> 
                </div>
          </div>
          <div class="swiper-slide bg-white p-4">
              <div class="profile d-flex align-items-center mb-3">
                <img src="images/features/star.svg" width="30px">
                <h6 class= "m-0 ms-2">Mark Andrews</h6>
              </div>

                <p>
                This resort is absolutely amazing for a family vacation. My son went for a soccer camp and the rest of the family was able to relax at the resort.
                The amenities for kids are great, basketball, wave pool, regular pool, lazy river, mini golf, short par 3 course.
                We also did a guided fishing excursion on property and that was absolutely fantastic for the price. Highly recommend this location.
                </p>

                <div class="rating">
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i> 
                </div>
             </div>
             <div class="swiper-slide bg-white p-4">
              <div class="profile d-flex align-items-center mb-3">
                <img src="images/features/star.svg" width="30px">
                <h6 class= "m-0 ms-2">Maura Caruso</h6>
              </div>

              <p>
              After spending a weekend at this wonderful resort I can summarize by saying I will be back.
              The staff was amazing from being welcomed in to housekeeping to the pool staff, everyone went above 
              and beyond.
             </p>

                <div class="rating">
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i>
                    <i class="bi bi-star-fill text-warning"></i> 
                    </div>
             </div>
          
        </div>
        <div class="swiper-pagination"></div>
      </div>
      <div class="col-lg-12 text-center mt-5">
        <a href="#" class="btn btn-sm- btn-outline-dark rounded-0 fw-bold shadow-none">Know More>>></a>
      </div>
</div>

    <!--Reach us -->
    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">REACH US</h2>

    <?php require('inc/footer.php'); ?>

    
 <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
 
 <script>
      var swiper = new Swiper(".swiper-container", {
        spaceBetween: 30,
        effect: "fade",
        loop: true,
        autoplay: {
            delay:3500,
            disableOnInteraction: false,
        }
      });

     
       var swiper = new Swiper(".swiper-testimonials", {
            effect: "coverflow",
            grabCursor: true,
            centeredSlides: true,
            slidesPerView: "auto",
            slidesPerView: "3",
            loop: true,
            coverflowEffect: {
            rotate: 50,
            stretch: 0,
            depth: 100,
            modifier: 1,
            slideShadows: false,
            },
            pagination: {
            el: ".swiper-pagination",
            },
            breakpoints: {
               320:{
                slidesPerView: 1,
               },
               640:{
                slidesPerView: 1,
               },
               768:{
                slidesPerView: 2,
               },  
               1024:{
                slidesPerView: 3,
               },
            }
        });
       
    </script>




</body>
</html>