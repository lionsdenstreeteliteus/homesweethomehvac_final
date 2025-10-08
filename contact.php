<?php $page = 'contact'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact</title>
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
            <img src="assets/images/covers/img-3.jpg" alt="Contact Us Banner" class="img-fluid w-100">
        </div>

        <div class="services-hero-overlay text-center text-white">
            <h1 class="services-hero-title fw-bold">Thank You For Choosing Home Sweet Home</h1>
        </div>
    </section>

    <section id="contact-form" class="py-5">
        <div class="container">
            <h2 class="text-center mb-5 fw-bold">Request a Free Estimate</h2>
            <div class="row g-5 align-items-start">
                <!-- Form Column -->
                <div class="col-md-7">
                    <form class="contact-form" action="includes/smtp-mailer.php" method="POST">
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
                        <div class="mb-3">
                            <textarea name="message" class="form-control" rows="4" placeholder="Additional Message (optional)"></textarea>
                        </div>
                        <div class="text-start mt-4">
                            <button type="submit" class="btn px-5 py-2" style="background-color: #FD914D">Submit</button>
                        </div>
                    </form>

                </div>

                <!-- Contact Info Column -->
                <div class="col-md-5">
                    <h5 style="color: #FD914D">Contact Us</h5>
                    <p><i class="fas fa-phone me-1" style="color: #FD914D"></i> +1 (571) 464-6434</p>
                    <p><i class="fas fa-envelope me-1" style="color: #FD914D"></i> info@hshhvac.com</p>
                    <p><i class="fas fa-map-marker-alt me-1" style="color: #FD914D"></i> 7626 Inishmore Court, Springfield, VA 22153.</p>
                    <!-- <div class="mt-2">
                        <a href="#" class="text-info me-3"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="text-light me-3"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="text-primary"><i class="fab fa-facebook-f"></i></a>
                    </div> -->
                </div>
            </div>
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