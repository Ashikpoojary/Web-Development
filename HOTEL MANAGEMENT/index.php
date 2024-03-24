<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Management</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&family=Merienda:wght@400;700&display=swap"
        crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="css/styles.css">
    <style>
    .availability-form {
        margin-top: -50px;
        z-index: 2;
        position: relative;
    }

    @media screen and (max-width:575px) {
        .availability-form {
            margin-top: 25px;
            padding: 0 35px;
        }
    }
    </style>
</head>

<body class="bg-light">

    <!-- Navbar  -->
    <nav class="navbar navbar-expand-lg navbar-light bg-body-tertiary px-lg-3 py-lg-2 shadow-sm sticky-lg-top ">
        <div class="container-fluid">
            <a class="navbar-brand me-5 fw-bold fs-3 h-font" href="index.php">Serenity Peak</a>
            <button class="navbar-toggler shadow-none " type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active me-2" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link me-2" href="#">Room</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link me-2" href="#">Facilities</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link me-2" href="#">Contact us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link me-2" href="#">About</a>
                    </li>
                </ul>
                <div class="d-flex">
                    <button type="button" class="btn btn-outline-dark shadow-none  me-lg-3 me-2" data-bs-toggle="modal"
                        data-bs-target="#loginModal">
                        Login</button>
                    <button type="button" class="btn btn-outline-dark shadow-none" data-bs-toggle="modal"
                        data-bs-target="#registerModal">
                        Register</button>
                </div>
            </div>
        </div>
    </nav>



    <div class="modal fade" id="loginModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form>
                    <div class="modal-header">
                        <h1 class="modal-title fs-5 d-flex align-items-center  "><i
                                class="bi bi-person-circle fs-3 me-3"></i>User Login</h1>
                        <button type="reset" class="btn-close shadow-none  " data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label class="form-label">Email address</label>
                            <input type="email" class="form-control" shadow-none>
                        </div>
                        <div class="mb-4">
                            <label class="form-label">Password</label>
                            <input type="email" class="form-control" shadow-none>
                        </div>
                        <div class="d-flex align-items-center justify-content-between mb-2 ">
                            <button type="submit" class="btn btn-dark shadow-none ">Login</button>
                            <a href="javascript: void(0)" class="text-secondary text-decoration-none ">Forgot
                                Password?</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal fade" id="registerModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <form>
                    <div class="modal-header">
                        <h1 class="modal-title fs-5 d-flex align-items-center  ">
                            <i class="bi bi-person-lines-fill fs-3 me-3"></i>User Registration
                        </h1>
                        <button type="reset" class="btn-close shadow-none  " data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <span class="badge rounded-pill text-bg-light text-dark mb-3 text-wrap lh-base">
                            Note: Your detail must with your ID (Passport, Driving License, etc..)
                            that will be required during check-in.
                        </span>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-6 ps-0 mb-3">
                                    <label class="form-label">Name</label>
                                    <input type="text" class="form-control shadow-none">
                                </div>
                                <div class="col-md-6 p-0 mb-3">
                                    <label class="form-label">Email address</label>
                                    <input type="email" class="form-control shadow-none">
                                </div>
                                <div class="col-md-6 ps-0 mb-3">
                                    <label class="form-label">Phone Number</label>
                                    <input type="number" class="form-control shadow-none">
                                </div>
                                <div class="col-md-6 p-0 mb-3 ">
                                    <label class="form-label">Picture</label>
                                    <input type="file" class="form-control shadow-none">
                                </div>
                                <div class="col-md-12 p-0 mb-3  ">
                                    <label class="form-label">Address</label>
                                    <textarea class="form-control shadow-none " rows="1"></textarea>
                                </div>
                                <div class="col-md-6 ps-0 mb-3">
                                    <label class="form-label">Pincode</label>
                                    <input type="number" class="form-control shadow-none">
                                </div>
                                <div class="col-md-6 p-0 mb-3 ">
                                    <label class="form-label">Date of birth</label>
                                    <input type="date" class="form-control shadow-none">
                                </div>
                                <div class="col-md-6 ps-0 mb-3">
                                    <label class="form-label">Password</label>
                                    <input type="password" class="form-control shadow-none">
                                </div>
                                <div class="col-md-6 p-0 mb-3 ">
                                    <label class="form-label">Confirm Password</label>
                                    <input type="password" class="form-control shadow-none">
                                </div>
                            </div>
                        </div>
                        <div class="text-center my-1 ">
                            <button type="submit" class="btn btn-dark shadow-none ">Register</button>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Carousel  -->
    <div class="container-fluid" px-lg-4 mt-4>
        <div class="swiper swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="images/carousel/1.png" class="w-100 d-block" />
                </div>
                <div class="swiper-slide">
                    <img src="images/carousel/2.png" class="w-100 d-block" />
                </div>
                <div class="swiper-slide">
                    <img src="images/carousel/3.png" class="w-100 d-block" />
                </div>
                <div class="swiper-slide">
                    <img src="images/carousel/4.png" class="w-100 d-block" />
                </div>
                <div class="swiper-slide">
                    <img src="images/carousel/5.png" class="w-100 d-block" />
                </div>
                <div class="swiper-slide">
                    <img src="images/carousel/6.png" class="w-100 d-block" />
                </div>
            </div>
        </div>
    </div>

    <!-- Check Availability  -->
    <div class="container availability-form">
        <div class="row">
            <div class="col-lg-12 bg-white shadow p-4 rounded">
                <h5 class="mb-4">Check Booking Availability</h5>
                <form>
                    <div class="row align-items-end">
                        <div class="col-lg-3 mb-3">
                            <label type="data" class="form-label" style="font-weight-500">Check-in</label>
                            <input type="date" class="form-control shadow-none">
                        </div>
                        <div class="col-lg-3 mb-3">
                            <label type="data" class="form-label" style="font-weight-500">Check-out</label>
                            <input type="date" class="form-control shadow-none">
                        </div>
                        <div class="col-lg-3 mb-3">
                            <label type="data" class="form-label" style="font-weight-500">Adult</label>
                            <select class="form-select shadow-none">
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="col-lg-2 mb-3">
                            <label type="data" class="form-label" style="font-weight-500">Children</label>
                            <select class="form-select shadow-none">
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
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

    <!-- Room Card -->
    <h2 class="mt-5 pt-4 text-center fw-bold h-font ">ROOMS</h2>

    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 my-3">
                <div class="card border-0 shadow  " style="max-width: 350px; margin:auto;">
                    <img src="images/rooms/1.jpg" class="card-img-top">
                    <div class="card-body">
                        <h5>Room Name</h5>
                        <h6 class="mb-4">₹ 200 per night</h6>
                        <div class="features mb-4 ">
                            <h6 class="mb-1">Features</h6>
                            <span class="badge rounded-pill text-bg-light text-dark text-wrap">
                                2 Rooms
                            </span>
                            <span class="badge rounded-pill text-bg-light text-dark text-wrap">
                                1 Bathrooms
                            </span>
                            <span class="badge rounded-pill text-bg-light text-dark text-wrap">
                                1 Balcony
                            </span>
                            <span class="badge rounded-pill text-bg-light text-dark text-wrap">
                                3 Sofa
                            </span>
                        </div>
                        <div class="facilities mb-4">
                            <h6 class="mb-1">Facilities</h6>
                            <span class="badge rounded-pill text-bg-light text-dark text-wrap">
                                Wifi
                            </span>
                            <span class="badge rounded-pill text-bg-light text-dark text-wrap">
                                Television
                            </span>
                            <span class="badge rounded-pill text-bg-light text-dark text-wrap">
                                AC
                            </span>
                            <span class="badge rounded-pill text-bg-light text-dark text-wrap">
                                Room Heater
                            </span>
                        </div>
                        <div class="rating mb-4">
                            <h6 class="mb-1">Rating</h6>
                            <span class="badge rounded-pill bg-light ">
                                <i class="bi bi-star-fill text-warning "></i>
                                <i class="bi bi-star-fill text-warning "></i>
                                <i class="bi bi-star-fill text-warning "></i>
                                <i class="bi bi-star-fill text-warning "></i>
                            </span>
                        </div>
                        <div class="d-flex justify-content-evenly mb-2 ">
                            <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
                            <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More Details</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 my-3">
                <div class="card border-0 shadow  " style="max-width: 350px; margin:auto;">
                    <img src="images/rooms/1.jpg" class="card-img-top">
                    <div class="card-body">
                        <h5>Room Name</h5>
                        <h6 class="mb-4">₹ 200 per night</h6>
                        <div class="features mb-4 ">
                            <h6 class="mb-1">Features</h6>
                            <span class="badge rounded-pill text-bg-light text-dark text-wrap">
                                2 Rooms
                            </span>
                            <span class="badge rounded-pill text-bg-light text-dark text-wrap">
                                1 Bathrooms
                            </span>
                            <span class="badge rounded-pill text-bg-light text-dark text-wrap">
                                1 Balcony
                            </span>
                            <span class="badge rounded-pill text-bg-light text-dark text-wrap">
                                3 Sofa
                            </span>
                        </div>
                        <div class="facilities mb-4">
                            <h6 class="mb-1">Facilities</h6>
                            <span class="badge rounded-pill text-bg-light text-dark text-wrap">
                                Wifi
                            </span>
                            <span class="badge rounded-pill text-bg-light text-dark text-wrap">
                                Television
                            </span>
                            <span class="badge rounded-pill text-bg-light text-dark text-wrap">
                                AC
                            </span>
                            <span class="badge rounded-pill text-bg-light text-dark text-wrap">
                                Room Heater
                            </span>
                        </div>
                        <div class="rating mb-4">
                            <h6 class="mb-1">Rating</h6>
                            <span class="badge rounded-pill bg-light ">
                                <i class="bi bi-star-fill text-warning "></i>
                                <i class="bi bi-star-fill text-warning "></i>
                                <i class="bi bi-star-fill text-warning "></i>
                                <i class="bi bi-star-fill text-warning "></i>
                            </span>
                        </div>
                        <div class="d-flex justify-content-evenly mb-2 ">
                            <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
                            <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More Details</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 my-3">
                <div class="card border-0 shadow  " style="max-width: 350px; margin:auto;">
                    <img src="images/rooms/1.jpg" class="card-img-top">
                    <div class="card-body">
                        <h5>Room Name</h5>
                        <h6 class="mb-4">₹ 200 per night</h6>
                        <div class="features mb-4 ">
                            <h6 class="mb-1">Features</h6>
                            <span class="badge rounded-pill text-bg-light text-dark text-wrap">
                                2 Rooms
                            </span>
                            <span class="badge rounded-pill text-bg-light text-dark text-wrap">
                                1 Bathrooms
                            </span>
                            <span class="badge rounded-pill text-bg-light text-dark text-wrap">
                                1 Balcony
                            </span>
                            <span class="badge rounded-pill text-bg-light text-dark text-wrap">
                                3 Sofa
                            </span>
                        </div>
                        <div class="facilities mb-4">
                            <h6 class="mb-1">Facilities</h6>
                            <span class="badge rounded-pill text-bg-light text-dark text-wrap">
                                Wifi
                            </span>
                            <span class="badge rounded-pill text-bg-light text-dark text-wrap">
                                Television
                            </span>
                            <span class="badge rounded-pill text-bg-light text-dark text-wrap">
                                AC
                            </span>
                            <span class="badge rounded-pill text-bg-light text-dark text-wrap">
                                Room Heater
                            </span>
                        </div>
                        <div class="rating mb-4">
                            <h6 class="mb-1">Rating</h6>
                            <span class="badge rounded-pill bg-light ">
                                <i class="bi bi-star-fill text-warning "></i>
                                <i class="bi bi-star-fill text-warning "></i>
                                <i class="bi bi-star-fill text-warning "></i>
                                <i class="bi bi-star-fill text-warning "></i>
                            </span>
                        </div>
                        <div class="d-flex justify-content-evenly mb-2 ">
                            <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
                            <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More Details</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-12 text-center mt-5">
                <a href="" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none ">More Rooms >>></a>
            </div>
        </div>
    </div>

    <!-- Facilities  -->
    <h2 class="mt-5 pt-4 text-center fw-bold h-font ">OUR FACILITIES</h2>

    <div class="container">
        <div class="row justify-content-evenly px-lg-0 px-md-0 px-5 ">
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3 ">
                <img src="images/facilities/Wifi.svg" width="80px">
                <h5 class="mt-3">Wifi</h5>
            </div>
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3 ">
                <img src="images/facilities/Wifi.svg" width="80px">
                <h5 class="mt-3"></h5>
            </div>
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3 ">
                <img src="images/facilities/Wifi.svg" width="80px">
                <h5 class="mt-3"></h5>
            </div>
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3 ">
                <img src="images/facilities/Wifi.svg" width="80px">
                <h5 class="mt-3"></h5>
            </div>
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3 ">
                <img src="images/facilities/Wifi.svg" width="80px">
                <h5 class="mt-3"></h5>
            </div>
            <div class="col-lg-12 text-center mt-5 ">
                <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none ">More Facilities >>></a>
            </div>
        </div>
    </div>

    <!-- Our Testimonials -->
    <h2 class="mt-5 pt-4 text-center fw-bold h-font ">OUR TESTIMONIALS</h2>

    <div class="container mt-5">
        <!-- Swiper -->
        <div class="swiper swiper-testimonials">
            <div class="swiper-wrapper mb-5">

                <div class="swiper-slide bg-white p-4 ">
                    <div class="profile d-flex align-items-center mb-3 ">
                        <img src="https://th.bing.com/th/id/R.6b0022312d41080436c52da571d5c697?rik=Ql6UUNosrWAY0w&riu=http%3a%2f%2fpluspng.com%2fimg-png%2fpng-user-icon-icons-logos-emojis-users-2400.png&ehk=8agkVrs8bo9zafVF9Qk4%2bFqv5IwaEZrb8DwX%2ftfJtNc%3d&risl=&pid=ImgRaw&r=0"
                            width="30px">
                        <h6 class="m-0 ms-2 ">User1</h6>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Accusamus consequatur ex hic soluta laudantium iste
                        doloribus molestiae possimus harum voluptatem.</p>
                    <div class="rating">
                        <i class="bi bi-star-fill text-warning "></i>
                        <i class="bi bi-star-fill text-warning "></i>
                        <i class="bi bi-star-fill text-warning "></i>
                        <i class="bi bi-star-fill text-warning "></i>
                    </div>
                </div>
                <div class="swiper-slide bg-white p-4 ">
                    <div class="profile d-flex align-items-center mb-3 ">
                        <img src="https://th.bing.com/th/id/R.6b0022312d41080436c52da571d5c697?rik=Ql6UUNosrWAY0w&riu=http%3a%2f%2fpluspng.com%2fimg-png%2fpng-user-icon-icons-logos-emojis-users-2400.png&ehk=8agkVrs8bo9zafVF9Qk4%2bFqv5IwaEZrb8DwX%2ftfJtNc%3d&risl=&pid=ImgRaw&r=0"
                            width="30px">
                        <h6 class="m-0 ms-2 ">User1</h6>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Accusamus consequatur ex hic soluta laudantium iste
                        doloribus molestiae possimus harum voluptatem.</p>
                    <div class="rating">
                        <i class="bi bi-star-fill text-warning "></i>
                        <i class="bi bi-star-fill text-warning "></i>
                        <i class="bi bi-star-fill text-warning "></i>
                        <i class="bi bi-star-fill text-warning "></i>
                    </div>
                </div>
                <div class="swiper-slide bg-white p-4 ">
                    <div class="profile d-flex align-items-center mb-3 ">
                        <img src="https://th.bing.com/th/id/R.6b0022312d41080436c52da571d5c697?rik=Ql6UUNosrWAY0w&riu=http%3a%2f%2fpluspng.com%2fimg-png%2fpng-user-icon-icons-logos-emojis-users-2400.png&ehk=8agkVrs8bo9zafVF9Qk4%2bFqv5IwaEZrb8DwX%2ftfJtNc%3d&risl=&pid=ImgRaw&r=0"
                            width="30px">
                        <h6 class="m-0 ms-2 ">User1</h6>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Accusamus consequatur ex hic soluta laudantium iste
                        doloribus molestiae possimus harum voluptatem.</p>
                    <div class="rating">
                        <i class="bi bi-star-fill text-warning "></i>
                        <i class="bi bi-star-fill text-warning "></i>
                        <i class="bi bi-star-fill text-warning "></i>
                        <i class="bi bi-star-fill text-warning "></i>
                    </div>
                </div>


            </div>
            <div class="swiper-pagination"></div>
        </div>
        <div class="col-lg-12 text-center mt-5 ">
            <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none ">Know More >>></a>
        </div>
    </div>

    <!-- Reach us  -->
    <h2 class="mt-5 pt-4 text-center fw-bold h-font ">REACH US</h2>

    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-8 col-md-8 p-4 mb-lg-0 mb-3 bg-white rounded">
                <iframe height="320px" class="w-100 rounded "
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d482634.9318693191!2d72.55152045152113!3d19.08195772970854!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c6306644edc1%3A0x5da4ed8f8d648c69!2sMumbai%2C%20Maharashtra!5e0!3m2!1sen!2sin!4v1711268239310!5m2!1sen!2sin"
                    loading="lazy"></iframe>
            </div>
            <div class="col-lg-4 col-md-4 ">
                <div class="bg-white p-4 mb-4 ">
                    <h5>Call Us</h5>
                    <a href="tel: 1234567890" class="d-inline-block mb-2 text-decoration-none text-dark  ">
                        <i class="bi bi-telephone-fill"> </i>1234567890</a>
                    <a href="tel: 1234567890" class="d-inline-block mb-2 text-decoration-none text-dark  ">
                        <i class="bi bi-telephone-fill"> </i>1234567890</a>
                </div>
                <div class="bg-white p-4 mb-4 ">
                    <h5>Follow Us</h5>
                    <a href="#" class="d-inline-block mb-3">
                        <span class="badge bg-light text-dark fs-6 p-2 ">
                            <i class="bi bi-twitter me-1 "> </i>X</span>
                    </a>
                    <br>
                    <a href="tel: 1234567890" class="d-inline-block mb-3">
                        <span class="badge bg-light text-dark fs-6 p-2 ">
                            <i class="bi bi-facebook me-1 "> </i>Facebook</span>
                    </a>
                    <br>
                    <a href="tel: 1234567890" class="d-inline-block mb-3">
                        <span class="badge bg-light text-dark fs-6 p-2 ">
                            <i class="bi bi-instagram me-1 "> </i>Instagram</span>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer  -->
    <div class="container-fluid bg-white mt-5">
        <div class="row">
            <div class="col-lg-4 p-4">
                <h3 class="h-font fw-bold fs-3 mb-2 ">SERENITY PEAK</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                    Placeat ab amet voluptatem repellendus laboriosam aperiam,
                    repudiandae sapiente asperiores provident cum.</p>
            </div>
            <div class="col-lg-4 p-4">
                <h5 class="mb-3">Links</h5>
                <a href="#" class="d-inline-block mb-2 text-dark text-decoration-none">HOME</a> <br>
                <a href="#" class="d-inline-block mb-2 text-dark text-decoration-none">Rooms</a> <br>
                <a href="#" class="d-inline-block mb-2 text-dark text-decoration-none">Facilities</a> <br>
                <a href="#" class="d-inline-block mb-2 text-dark text-decoration-none">Contact Us</a> <br>
                <a href="#" class="d-inline-block mb-2 text-dark text-decoration-none">About Us</a>
            </div>
            <div class="col-lg-4 p-4">
                <h5 class="mb-3">Follow Us</h5>
                <a href="#" class="d-inline-block text-dark text-decoration-none mb-2"><i
                        class="bi bi-twitter me-1">Twitter</i></a> <br>
                <a href="#" class="d-inline-block text-dark text-decoration-none mb-2"><i
                        class="bi bi-facebook me-1">Facebook</i></a> <br>
                <a href="#" class="d-inline-block text-dark text-decoration-none"><i
                        class="bi bi-instagram me-1">Instagram</i></a>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script>
    var swiper = new Swiper(".swiper-container", {
        autoplay: {
            delay: 4000,
            disableOnInteraction: false,
        },
        spaceBetween: 30,
        effect: "fade",
        loop: true
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
            320: {
                slidesPerView: 1,
            },
            640: {
                slidesPerView: 1,
            },
            768: {
                slidesPerView: 2,
            },
            1024: {
                slidesPerView: 4,
            },
        }
    });
    </script>
</body>

</html>