<!DOCTYPE html>
<html lang="en">
    <head>
        <?php require('inc/head.php');?>
    </head>
    <body class="bg-light">
        <?php require('inc/header.php');?>
        <!-- carousel -->
        <div class="container-fluid px-lg-4 mt-4">
            <div class="swiper swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="images/carousel/1.png" class="w-100 d-block"/>
                    </div>
                    <div class="swiper-slide">
                        <img src="images/carousel/2.png" class="w-100 d-block" />
                    </div>
                    <div class="swiper-slide">
                        <img src="images/carousel/3.png" class="w-100 d-block"/>
                    </div>
                    <div class="swiper-slide">
                        <img src="images/carousel/4.png" class="w-100 d-block"/>
                    </div>
                    <div class="swiper-slide">
                        <img src="images/carousel/5.png" class="w-100 d-block"/>
                    </div>
                </div>
            </div>
        </div>
        <!-- check availability form -->
        <div class="container availability-form">
            <div class="row">
                <div class="col-lg-12 bg-white shadow p-4 rounded">
                    <h5 class="mb-4">Check Booking Availability</h5>
                    <form>
                        <div class="row align-items-end">
                            <div class="col-lg-3 md-3">
                                <label class="form-label" style="font-weight: 500;">Check-in</label>
                                <input type="date" class="form-control shadow-none">
                            </div>
                            <div class="col-lg-3 md-3">
                                <label class="form-label" style="font-weight: 500;">Check-out</label>
                                <input type="date" class="form-control shadow-none">
                            </div>
                            <div class="col-lg-3 md-3">
                                <label class="form-label" style="font-weight: 500;">Adult</label>
                                <select class="form-select shadow-none">
                                    <option selected>Open this select menu</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                            <div class="col-lg-2 md-3">
                                <label class="form-label" style="font-weight: 500;">Children</label>
                                <select class="form-select shadow-none">
                                    <option selected>Open this select menu</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                        <!-- xs <576 sm >=576 md 768 lg 1024 -->
                            <div class="col-lg-1 mb-lg-3 mt-2">
                                <button type="submit" class="btn btn-success text-white shadow-none">Submit</button>
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
                <div class="col-lg-4 col-md-6 mb-3 move">
                    <div class="card border-0 shadow" style="max-width: 350px;margin:auto;">
                        <img src="images/rooms/1.jpg" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title text-center mb-2 fw-bold">Simple room name</h5>
                            <h6 class="mb-4">200<sup>USD</sup> per night</h6>
                            <div class="features mb-4">
                                <h6 class="mb-1">Features</h6>
                                <span class="badge rounded-pill bg-light text-dark text-warp">
                                    2 Rooms
                                </span>
                                <span class="badge rounded-pill bg-light text-dark text-warp">
                                    1 Bathroom
                                </span>
                                <span class="badge rounded-pill bg-light text-dark text-warp">
                                    1 Balcony
                                </span>
                                <span class="badge rounded-pill bg-light text-dark text-warp">
                                    3 Sofa
                                </span>
                            </div>
                            <div class="facilities mb-4">
                                <h6 class="mb-1">Facilities</h6>
                                <span class="badge rounded-pill bg-light text-dark text-warp">
                                    Wifi
                                </span>
                                <span class="badge rounded-pill bg-light text-dark text-warp">
                                    Television
                                </span>
                                <span class="badge rounded-pill bg-light text-dark text-warp">
                                    AC
                                </span>
                                <span class="badge rounded-pill bg-light text-dark text-warp">
                                    Room Heater
                                </span>
                            </div>
                            <div class="guests mb-4">
                                <h6 class="mb-1">Guests</h6>
                                <span class="badge rounded-pill bg-light text-dark text-warp">
                                    5 Adults
                                </span>
                                <span class="badge rounded-pill bg-light text-dark text-warp">
                                    4 Children
                                </span>
                            </div>
                            <div class="rating mb-4">
                                <h6 class="mb-1">Facilities</h6>
                                <span class="badge rounded-pill bg-light text-dark text-warp">                              
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <i class="bi bi-star-fill text-warning"></i>
                                </span>
                            </div>
                            <div class="d-flex justify-content-evenly mb-2">
                                <a href="#" class="btn btn-sm btn-success shadow-none">Book Now</a>
                                <a href="#" class="btn btn-sm btn-outline-dark shadow-none ">More detail</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-3 move">
                    <div class="card border-0 shadow" style="max-width: 350px;margin:auto;">
                        <img src="images/rooms/1.jpg" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title text-center mb-2 fw-bold">Simple room name</h5>
                            <h6 class="mb-4">200<sup>USD</sup> per night</h6>
                            <div class="features mb-4">
                                <h6 class="mb-1">Features</h6>
                                <span class="badge rounded-pill bg-light text-dark text-warp">
                                    2 Rooms
                                </span>
                                <span class="badge rounded-pill bg-light text-dark text-warp">
                                    1 Bathroom
                                </span>
                                <span class="badge rounded-pill bg-light text-dark text-warp">
                                    1 Balcony
                                </span>
                                <span class="badge rounded-pill bg-light text-dark text-warp">
                                    3 Sofa
                                </span>
                            </div>
                            <div class="facilities mb-4">
                                <h6 class="mb-1">Facilities</h6>
                                <span class="badge rounded-pill bg-light text-dark text-warp">
                                    Wifi
                                </span>
                                <span class="badge rounded-pill bg-light text-dark text-warp">
                                    Television
                                </span>
                                <span class="badge rounded-pill bg-light text-dark text-warp">
                                    AC
                                </span>
                                <span class="badge rounded-pill bg-light text-dark text-warp">
                                    Room Heater
                                </span>
                            </div>
                            <div class="guests mb-4">
                                <h6 class="mb-1">Guests</h6>
                                <span class="badge rounded-pill bg-light text-dark text-warp">
                                    5 Adults
                                </span>
                                <span class="badge rounded-pill bg-light text-dark text-warp">
                                    4 Children
                                </span>
                            </div>
                            <div class="rating mb-4">
                                <h6 class="mb-1">Facilities</h6>
                                <span class="badge rounded-pill bg-light text-dark text-warp">                              
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <i class="bi bi-star-fill text-warning"></i>
                                </span>
                            </div>
                            <div class="d-flex justify-content-evenly mb-2">
                                <a href="#" class="btn btn-sm btn-success shadow-none">Book Now</a>
                                <a href="#" class="btn btn-sm btn-outline-dark shadow-none ">More detail</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-3 move">
                    <div class="card border-0 shadow" style="max-width: 350px;margin:auto;">
                        <img src="images/rooms/1.jpg" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title text-center mb-2 fw-bold">Simple room name</h5>
                            <h6 class="mb-4">200<sup>USD</sup> per night</h6>
                            <div class="features mb-4">
                                <h6 class="mb-1">Features</h6>
                                <span class="badge rounded-pill bg-light text-dark text-warp">
                                    2 Rooms
                                </span>
                                <span class="badge rounded-pill bg-light text-dark text-warp">
                                    1 Bathroom
                                </span>
                                <span class="badge rounded-pill bg-light text-dark text-warp">
                                    1 Balcony
                                </span>
                                <span class="badge rounded-pill bg-light text-dark text-warp">
                                    3 Sofa
                                </span>
                            </div>
                            <div class="facilities mb-4">
                                <h6 class="mb-1">Facilities</h6>
                                <span class="badge rounded-pill bg-light text-dark text-warp">
                                    Wifi
                                </span>
                                <span class="badge rounded-pill bg-light text-dark text-warp">
                                    Television
                                </span>
                                <span class="badge rounded-pill bg-light text-dark text-warp">
                                    AC
                                </span>
                                <span class="badge rounded-pill bg-light text-dark text-warp">
                                    Room Heater
                                </span>
                            </div>
                            <div class="guests mb-4">
                                <h6 class="mb-1">Guests</h6>
                                <span class="badge rounded-pill bg-light text-dark text-warp">
                                    5 Adults
                                </span>
                                <span class="badge rounded-pill bg-light text-dark text-warp">
                                    4 Children
                                </span>
                            </div>
                            <div class="rating mb-4">
                                <h6 class="mb-1">Facilities</h6>
                                <span class="badge rounded-pill bg-light text-dark text-warp">                              
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <i class="bi bi-star-fill text-warning"></i>
                                </span>
                            </div>
                            <div class="d-flex justify-content-evenly mb-2">
                                <a href="#" class="btn btn-sm btn-success shadow-none">Book Now</a>
                                <a href="#" class="btn btn-sm btn-outline-dark shadow-none ">More detail</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 text-center mt-5">
                    <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Rooms>>></a>
                </div>
            </div>
            
        </div>

        <!-- Our Facilities -->
        <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">OUR FACILITIES</h2>
        <div class="contain">
            <div class="row justify-content-evenly px-lg-0 px-md-0 px-5">
                <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                    <img src="images/features/wifi.jpg" width="80px">
                    <h5 class="mt-3">Wifi</h5>
                </div>
                <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                    <img src="images/features/wifi.jpg" width="80px">
                    <h5 class="mt-3">Wifi</h5>
                </div>
                <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                    <img src="images/features/wifi.jpg" width="80px">
                    <h5 class="mt-3">Wifi</h5>
                </div>
                <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                    <img src="images/features/wifi.jpg" width="80px">
                    <h5 class="mt-3">Wifi</h5>
                </div>
                <div class="col-lg-12 text-center mt-5">
                    <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Facilities>>></a>
                </div>
            </div>
        </div>
        <!-- Our Testimonials -->
        <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">OUR Testimonials</h2>
        <div class="container">
            <div class="swiper swiper-testimonials">
                <div class="swiper-wrapper mb-5">
                    
                    <div class="swiper-slide bg-white p-4">
                        <div class="profile d-flex align-items-center mb-3">
                            <img src="images/rooms/IMG_39782.png" width="30px">
                            <h6 class="m-0 ms-2">Random userl</h6>
                        </div>
                        <p>
                            Thông tin gì đó
                        </p>
                        <div class="rating">
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                        </div>
                    </div>
                    <div class="swiper-slide bg-white p-4">
                        <div class="profile d-flex align-items-center mb-3">
                            <img src="images/rooms/IMG_39782.png" width="30px">
                            <h6 class="m-0 ms-2">Random userl</h6>
                        </div>
                        <p>
                            Thông tin gì đó
                        </p>
                        <div class="rating">
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                        </div>
                    </div>
                    <div class="swiper-slide bg-white p-4">
                        <div class="profile d-flex align-items-center mb-3">
                            <img src="images/rooms/IMG_39782.png" width="30px">
                            <h6 class="m-0 ms-2">Random userl</h6>
                        </div>
                        <p>
                            Thông tin gì đó
                        </p>
                        <div class="rating">
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                        </div>
                    </div>
                    <div class="swiper-slide bg-white p-4">
                        <div class="profile d-flex align-items-center mb-3">
                            <img src="images/rooms/IMG_39782.png" width="30px">
                            <h6 class="m-0 ms-2">Random userl</h6>
                        </div>
                        <p>
                            Thông tin gì đó
                        </p>
                        <div class="rating">
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                        </div>
                    </div>

                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
        <!-- Reach us -->
        <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">REACH US</h2>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 p-4 mb-lg-0 mb-2 bg-white rounded">
                    <iframe class="w-100 rounded" height="320px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3916.9427292517857!2d106.48571827451948!3d10.967695555637647!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x310b2b7885bb2251%3A0x8cb5c26d9dbfaadc!2zQ-G6p3UgVsaw4bujdCBD4bunIENoaSAtIDczNCBRdeG7kWMgTOG7mSAyMiAtIFRo4buLIFRy4bqlbiBD4bunIENoaQ!5e0!3m2!1svi!2s!4v1713367584651!5m2!1svi!2s"  loading="lazy"></iframe>
                </div>
                <div class="col-lg-4 col-md-4 ">
                    <div class="bg-white p-4 md-4 rounded">
                        <h6>Call us</h6>
                        <a href="tel:0901410280" class="d-inline-block md-2 text-decoration-none text-dark">
                            <i class="bi bi-telephone-fill"></i>  0901410280
                        </a>
                        <br>
                        <a href="tel:0901410280" class="d-inline-block md-2 text-decoration-none text-dark">
                            <i class="bi bi-telephone-fill"></i>  0901410280
                        </a>
                    </div>
                    <div class="bg-white p-4 md-4 rounded">
                        <h6>Follow us</h6>
                        <a href="#" class="d-inline-block md-3">
                            <span class="badge bg-light text-dark fs-6 p-2">
                                <i class="bi bi-facebook me-1"></i> Facebook
                            </span>
                        </a>
                        <br>
                        <a href="#" class="d-inline-block md-3">
                            <span class="badge bg-light text-dark fs-6 p-2">
                                <i class="bi bi-instagram me-1"></i> Instagram
                            </span>
                        </a>
                        <br>
                        <a href="#" class="d-inline-block md-3">
                            <span class="badge bg-light text-dark fs-6 p-2">
                                <i class="bi bi-youtube me-1"></i> Youtube
                            </span>
                        </a>
                        <br>
                        <a href="#" class="d-inline-block">
                            <span class="badge bg-light text-dark fs-6 p-2">
                                <i class="bi bi-tiktok me-1"></i> Tiktok
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- footer -->
        <?php require('inc/footer.php'); ?>
        
        <!-- script -->
        <?php require('inc/script.php'); ?>
    </body>
</html>