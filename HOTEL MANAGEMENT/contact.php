<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Serenity Peak - CONTACT</title>
    <?php require('partials/links.php'); ?>
</head>

<body class="bg-light">

    <?php require('partials/header.php'); ?>

    <div class="my-5 px-4">
        <h2 class="fw-bold h-font text-center">CONTACT US</h2>
        <div class="h-line bg-dark"></div>
        <p class="text-center mt-3">
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Maxime,
            cumque deleniti natus nesciunt laborum quasi accusantium architecto nulla nobis culpa.
        </p>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 mb-5 px-4">
                <div class="bg-white rounded shadow p-4">
                    <iframe height="320px" class="w-100 rounded mb-4 "
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d482634.9318693191!2d72.55152045152113!3d19.08195772970854!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c6306644edc1%3A0x5da4ed8f8d648c69!2sMumbai%2C%20Maharashtra!5e0!3m2!1sen!2sin!4v1711268239310!5m2!1sen!2sin"
                        loading="lazy"></iframe>
                    <h5>Address</h5>
                    <a href="https://maps.app.goo.gl/ufuZ42AqpPjmSwNb9" target="_blank"
                        class="d-inline-block text-decoration-none text-dark mb-2">
                        <i class="bi bi-geo-alt-fill"> </i>Serenity Peak, Mumbai</a>
                    <h5 class="mt-5">Call Us</h5>
                    <a href="tel: 1234567890" class="d-inline-block mb-2 text-decoration-none text-dark  ">
                        <i class="bi bi-telephone-fill"> </i>1234567890</a> <br>
                    <a href="tel: 1234567890" class="d-inline-block mb-2 text-decoration-none text-dark  ">
                        <i class="bi bi-telephone-fill"> </i>1234567890</a>
                    <h5 class="mt-4">Email</h5>
                    <a href="#" class="d-inline-block text-decoration-none text-dark mb-2">
                        <i class="bi bi-envelope-fill"> </i>serenitypeak@gmail.com</a>
                    <h5 class="mt-4">Follow Us</h5>
                    <a href="#" class="d-inline-block text-dark fs-5 me-2">
                        <i class="bi bi-twitter-x me-1 "></i>
                    </a>
                    <a href="#" class="d-inline-block text-dark fs-5 me-2">
                        <i class="bi bi-facebook me-1 "></i>
                    </a>
                    <a href="#" class="d-inline-block text-dark fs-5">
                        <i class="bi bi-instagram me-1 "></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 px-4">
                <div class="bg-white rounded shadow p-4">
                    <form>
                        <h5>Send a message</h5>
                        <div class="mb-3">
                        <label class="form-label" style="font-weight:500;">Name</label>
                        <input type="text" class="form-control shadow-none">
                    </div>
                    <div class="mb-3">
                        <label class="form-label" style="font-weight:500;">Email</label>
                        <input type="email" class="form-control shadow-none">
                    </div>
                    <div class="mb-3">
                        <label class="form-label" style="font-weight:500;">Message</label>
                        <textarea class="form-control shadow-none" rows="5" style="resize:none;"></textarea>
                    </div>
                    <button type="submit" class="btn text-white custom-bg mt-3">Send</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <?php require('partials/footer.php'); ?>

</body>

</html>