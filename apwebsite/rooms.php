<!DOCTYPE html>
<html lang="en">
    <head>
        <?php require('inc/head.php');?>
    </head>
    <body class="bg-light">
        <?php require('inc/header.php');?>
        <!-- cont -->
        <div class="my-5 px-4">
            <h2 class="fw-bold h-font text-center">OUR ROOMS</h2>
            <div class="h-line bg-dark"></div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-12 mb-lg-0 mb-4 px-lg-0">
                    <nav class="navbar navbar-expand-lg navbar-light bg-white rounded shadow">
                        <div class="container-fluid flex-lg-column align-items-stretch">
                            <h4 class="mt-2">FILTER</h4>
                            <button class="navbar-toggler shadow-none mb-2" type="button" data-bs-toggle="collapse" data-bs-target="#filterDropdown" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>  
                            <div class="collapse navbar-collapse flex-column align-items-stretch" id="filterDropdown">
                                <div class="border bg-light p-3 rounded mb-3">
                                    <h5 class="mb-3" style="font-size: 18px;">CHECK AVAILABILITY</h5>
                                    <label class="form-label" style="font-weight: 500;">Check-in</label>
                                    <input type="date" class="form-control shadow-none mb-3">
                                    <label class="form-label" style="font-weight: 500;">Check-out</label>
                                    <input type="date" class="form-control shadow-none">
                                </div>
                                <div class="border bg-light p-3 rounded mb-3">
                                    <h5 class="mb-3" style="font-size: 18px;">FACILITIES</h5>
                                    <div class="mt-2">
                                        <input type="checkbox" id="f1" class="form-check-input shadow-none me-1">
                                        <label class="form-check-label" for="f1">Facility one</label>
                                    </div>   
                                    <div class="mt-2">
                                        <input type="checkbox" id="f2" class="form-check-input shadow-none me-1">
                                        <label class="form-check-label" for="f2">Facility two</label>
                                    </div> 
                                    <div class="mt-2">
                                        <input type="checkbox" id="f3" class="form-check-input shadow-none me-1">
                                        <label class="form-check-label" for="f3">Facility three</label>
                                    </div> 
                                </div>
                                <div class="border bg-light p-3 rounded mb-3">
                                    <h5 class="mb-3" style="font-size: 18px;">FEATURES</h5>
                                    <div class="mt-2">
                                        <input type="checkbox" id="f1" class="form-check-input shadow-none me-1">
                                        <label class="form-check-label" for="f1">Features one</label>
                                    </div>   
                                    <div class="mt-2">
                                        <input type="checkbox" id="f2" class="form-check-input shadow-none me-1">
                                        <label class="form-check-label" for="f2">Features two</label>
                                    </div> 
                                    <div class="mt-2">
                                        <input type="checkbox" id="f3" class="form-check-input shadow-none me-1">
                                        <label class="form-check-label" for="f3">Features three</label>
                                    </div> 
                                </div>
                                <div class="border bg-light p-3 rounded mb-3">
                                    <h5 class="mb-3" style="font-size: 18px;">GUESTS</h5>
                                    <div class="d-flex">
                                        <div class="me-3">
                                            <label class="form-check-label" for="f1">Adults</label>
                                            <input type="number" class="form-control shadow-none"> 
                                        </div>  
                                        <div class="me-3">
                                            <label class="form-check-label" for="f1">Adults</label>
                                            <input type="number" class="form-control shadow-none"> 
                                        </div>   
                                    </div>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
                <div class="col-lg-9 col-md-12 px-4">
                    <div class="card mb-4 border-0 shadow">
                        <div class="row g-0 p-3 align-items-center">
                            <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
                                <img src="images/rooms/1.jpg" class="img-fluid rounded">
                            </div>
                            <div class="col-md-5 px-lg-3 px-md-3 px-0">
                                <h5 class="mb-3">Rooms Name</h5>
                                <div class="features mb-3">
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
                                <div class="facilities mb-3">
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
                                <div class="guests mb-3">
                                    <h6 class="mb-1">Guests</h6>
                                    <span class="badge rounded-pill bg-light text-dark text-warp">
                                        5 Adults
                                    </span>
                                    <span class="badge rounded-pill bg-light text-dark text-warp">
                                        4 Children
                                    </span>
                                </div>
                            </div>
                            <div class="col-md-2 mt-lg-0 mt-md-0 mt-4 text-center">
                                <h6 class="mb-4">200<sup>USD</sup> per night</h6>
                                <a href="#" class="btn w-100 btn-sm btn-success shadow-none mb-2">Book Now</a>
                                <a href="#" class="btn w-100 btn-sm btn-outline-dark shadow-none ">More detail>>></a>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-4 border-0 shadow">
                        <div class="row g-0 p-3 align-items-center">
                            <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
                                <img src="images/rooms/1.jpg" class="img-fluid rounded">
                            </div>
                            <div class="col-md-5 px-lg-3 px-md-3 px-0">
                                <h5 class="mb-3">Rooms Name</h5>
                                <div class="features mb-3">
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
                                <div class="facilities mb-3">
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
                                <div class="guests mb-3">
                                    <h6 class="mb-1">Guests</h6>
                                    <span class="badge rounded-pill bg-light text-dark text-warp">
                                        5 Adults
                                    </span>
                                    <span class="badge rounded-pill bg-light text-dark text-warp">
                                        4 Children
                                    </span>
                                </div>
                            </div>
                            <div class="col-md-2 mt-lg-0 mt-md-0 mt-4 text-center">
                                <h6 class="mb-4">200<sup>USD</sup> per night</h6>
                                <a href="#" class="btn w-100 btn-sm btn-success shadow-none mb-2">Book Now</a>
                                <a href="#" class="btn w-100 btn-sm btn-outline-dark shadow-none ">More detail>>></a>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-4 border-0 shadow">
                        <div class="row g-0 p-3 align-items-center">
                            <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
                                <img src="images/rooms/1.jpg" class="img-fluid rounded">
                            </div>
                            <div class="col-md-5 px-lg-3 px-md-3 px-0">
                                <h5 class="mb-3">Rooms Name</h5>
                                <div class="features mb-3">
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
                                <div class="facilities mb-3">
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
                                <div class="guests mb-3">
                                    <h6 class="mb-1">Guests</h6>
                                    <span class="badge rounded-pill bg-light text-dark text-warp">
                                        5 Adults
                                    </span>
                                    <span class="badge rounded-pill bg-light text-dark text-warp">
                                        4 Children
                                    </span>
                                </div>
                            </div>
                            <div class="col-md-2 mt-lg-0 mt-md-0 mt-4 text-center">
                                <h6 class="mb-4">200<sup>USD</sup> per night</h6>
                                <a href="#" class="btn w-100 btn-sm btn-success shadow-none mb-2">Book Now</a>
                                <a href="#" class="btn w-100 btn-sm btn-outline-dark shadow-none ">More detail>>></a>
                            </div>
                        </div>
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