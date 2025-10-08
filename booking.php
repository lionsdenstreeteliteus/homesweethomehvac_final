<?php $page = 'booking'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Booking</title>
    <link rel="icon" type="image/png" href="assets/images/logo/colored-logo.png" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Font Awesome Icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet" />

    <!-- Custom Styles -->
    <link href="assets/css/style.css" rel="stylesheet" />

    <link href="https://fonts.googleapis.com/css2?family=GFS+Didot&display=swap" rel="stylesheet">

</head>

<body>

    <?php include('includes/header.php'); ?>

    <!-- Your page content here -->
    <section class="services-hero">
        <div class="services-hero-image">
            <img src="assets/images/covers/img-1.jpg" alt="Bookings Banner" class="img-fluid w-100">
        </div>

        <div class="services-hero-overlay text-center text-white">
            <h1 class="services-hero-title fw-bold">Bookings</h1>
        </div>
    </section>

    <!-- Free Estimate Section -->
    <section id="estimate" class="py-5">
        <div class="container">
            <h2 class="text-center mb-5 fw-bold">Request a Free Estimate</h2>
            <form class="estimate-form mx-auto" style="max-width: 700px;" action="includes/smtp-mailer-booking.php" method="POST">
                <div class="mb-3">
                    <input type="text" name="name" class="form-control" placeholder="Full Name" required>
                </div>
                <div class="mb-3">
                    <input type="email" name="email" class="form-control" placeholder="Email" required>
                </div>
                <div class="mb-3">
                    <input type="tel" name="phone" class="form-control" placeholder="Phone" required>
                </div>
                <div class="mb-3">
                    <input type="text" name="address" class="form-control" placeholder="Address" required>
                </div>

                <label class="fw-semibold mb-2">Choose Services:</label>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="services[]" value="Kitchen Remodeling" id="kitchen">
                            <label class="form-check-label" for="kitchen">Kitchen Remodeling</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="services[]" value="Flooring Services" id="flooring">
                            <label class="form-check-label" for="flooring">Flooring Services</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="services[]" value="Bathroom Remodeling" id="bathroom">
                            <label class="form-check-label" for="bathroom">Bathroom Remodeling</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="services[]" value="Room Addition" id="room">
                            <label class="form-check-label" for="room">Room Addition</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="services[]" value="Painting Services" id="painting">
                            <label class="form-check-label" for="painting">Painting Services</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="services[]" value="Full Home Remodeling" id="full-home">
                            <label class="form-check-label" for="full-home">Full Home Remodeling</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="services[]" value="HVAC Services" id="hvac">
                            <label class="form-check-label" for="hvac">HVAC Services</label>
                        </div>
                    </div>
                </div>

                <div class="text-center mt-4">
                    <button type="submit" class="btn btn-primary px-5 py-2">Submit</button>
                </div>
            </form>
        </div>
    </section>

    <?php include('includes/footer.php'); ?>

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- WhatsApp Floating Button -->
    <div class="tooltip-container">
        <a href="https://wa.me/15712423890" class="whatsapp-float" target="_blank" aria-label="Chat on WhatsApp">
            <i class="fab fa-whatsapp whatsapp-icon"></i>
        </a>
        <span class="tooltip-text">WhatsApp</span>
    </div>


    <!-- Scroll Up Floating Button -->
    <a href="#" class="scrollup-button">
        <i class="fas fa-arrow-up fa-sm scrollup-icon"></i>
    </a>
</body>

</html>