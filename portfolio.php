<?php $page = 'portfolio'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Portfolio</title>
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

    <section class="services-hero">
        <div class="services-hero-image">
            <img src="assets/images/covers/img-1.jpg" alt="Projects Banner" class="img-fluid w-100">
        </div>

        <div class="services-hero-overlay text-center text-white">
            <h1 class="services-hero-title fw-bold">Recent Projects</h1>
        </div>
    </section>

    <!-- Completed Projects Section -->
    <section id="completed-projects" class="py-5">
        <div class="container">
            <div class="row align-items-center">
                <!-- Text Column -->
                <div class="col-md-12">
                    <h2 class="fw-bold mb-3 text-center">Completed Projects</h2>
                    <p class="text-muted">
                        We take pride in delivering high-quality craftsmanship and exceptional service in every project we complete. Our portfolio showcases a diverse range of successful projects, each reflecting our dedication to excellence and client satisfaction.
                    </p>
                    <h5 class="fw-semibold mt-4 text-muted">Our Completed Projects Include:</h5>
                    <ul class="mt-3 text-muted">
                        <li><strong>Home Renovations</strong> – Full home remodels, kitchen and bathroom upgrades.</li>
                        <li><strong>Commercial Spaces</strong> – Office renovations, retail store designs, and workspace improvements.</li>
                        <li><strong>Flooring Installations</strong> – Hardwood, tile, vinyl, and carpet flooring transformations.</li>
                        <li><strong>Custom Kitchen Designs</strong> – Cabinet installations, countertops, and modern layouts.</li>
                        <li><strong>Exterior Upgrades</strong> – Roofing, siding, and outdoor living enhancements.</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section id="services" class="py-5">
        <div class="container">
            <div class="row g-4">
                <!-- Service Card -->
                <div class="col-md-4">
                    <a class="text-decoration-none" href="services.php#air-conditioning">
                        <div class="service-tile" style="background-image: url('assets/images/services/ac.jpg');">
                            <div class="tile-overlay">
                                <h5>Air Conditioning</h5>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a class="text-decoration-none" href="services.php#heating-systems">
                        <div class="service-tile" style="background-image: url('assets/images/services/heating.jpg');">
                            <div class="tile-overlay">
                                <h5>Heating Systems</h5>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a class="text-decoration-none" href="services.php#ventilation">
                        <div class="service-tile" style="background-image: url('assets/images/services/ventilation.jpg');">
                            <div class="tile-overlay">
                                <h5>Ventilation</h5>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a class="text-decoration-none" href="services.php#plumbing">
                        <div class="service-tile" style="background-image: url('assets/images/services/pluming.jpg');">
                            <div class="tile-overlay">
                                <h5>Pluming Services</h5>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a class="text-decoration-none" href="services.php#emergency-repairs">
                        <div class="service-tile" style="background-image: url('assets/images/services/emergency-repairs.jpg');">
                            <div class="tile-overlay">
                                <h5>Emergency Repairs</h5>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a class="text-decoration-none" href="new-installation.php#">
                        <div class="service-tile" style="background-image: url('assets/images/services/new-installation.jpg');">
                            <div class="tile-overlay">
                                <h5>New Installations</h5>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section id="testimonials" class="py-5">
        <div class="container">
            <h2 class="text-center mb-5 fw-bold">Testimonials</h2>
            <div class="row g-4 justify-content-center">
                <!-- Testimonial Card -->
                <div class="col-md-4">
                    <div class="testimonial-card p-4 rounded border shadow">
                        <p class="">“This repair went extremely well. Home Sweet Home promptly responded to my inquiry
                            for repair via Home Sweet Home. Highly Recommended!”</p>
                        <h6 class="text-accent mt-3">— Sarah M., Arlington VA</h6>
                        <span class="stars me-2">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </span>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="testimonial-card p-4 rounded border shadow">
                        <p class="">“The technician was quick to visit and did a full inspection of my appliance. He followed
                            up with a quote to repair the unit. I am most likely going to replace the unit instead.”</p>
                        <h6 class="text-accent mt-3">— James T., McLean VA</h6>
                        <span class="stars me-2">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </span>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="testimonial-card p-4 rounded border shadow">
                        <p class="">“Guys were nice, quick, did what
                            they said for the price they said, fixed my washing machine and showed me in detail
                            what the problem was. Would hire again.”</p>
                        <h6 class="text-accent mt-3">— Priya K., Fairfax VA</h6>
                        <span class="stars me-2">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                        </span>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="testimonial-card p-4 rounded border shadow">
                        <p class="">“HSH Representative was responsive, courteous, knowledgeable and efficient. He skillfully diagnosed
                            and solved our stovetop issue. Great guy and great service.”</p>
                        <h6 class="text-accent mt-3">— Robert G.</h6>
                        <span class="stars me-2">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </span>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="testimonial-card p-4 rounded border shadow">
                        <p class="">“HSH Representative was great! He arrived promptly at the time he said he would. He worked efficiently
                            and it was obvious he knew what he was doing.”</p>
                        <h6 class="text-accent mt-3">— Sally K.</h6>
                        <span class="stars me-2">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                        </span>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="testimonial-card p-4 rounded border shadow">
                        <p class="">“I was extremely impressed and happy with Home Sweet Home from initial contact
                            through completion of the job. He and his team arrived timely and completed the job timely.”</p>
                        <h6 class="text-accent mt-3">— Jessica M.</h6>
                        <span class="stars me-2">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </span>
                    </div>
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