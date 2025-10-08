<?php $page = 'home'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Home</title>
  <link rel="icon" type="image/png" href="assets/images/logo/colored-logo.png" />

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />

  <!-- Font Awesome Icons -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet" />

  <!-- Custom Styles -->
  <link href="assets/css/style.css" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=GFS+Didot&display=swap" rel="stylesheet">
  <script>
    window.chtlConfig = {
      chatbotId: "6175934164"
    }
  </script>
  <script async data-id="6175934164" id="chtl-script" type="text/javascript" src="https://chatling.ai/js/embed.js"></script>
</head>

<body>

  <?php include('includes/header.php'); ?>

  <!-- Your page content here -->

  <!-- Hero Section with Carousel -->
  <section id="hero">
    <div id="coverCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" style="opacity: 0.5;">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="assets/images/covers/img-1.jpg" class="d-block w-100 hero-img" alt="Cover 1">
        </div>
        <div class="carousel-item">
          <img src="assets/images/covers/img-2.jpg" class="d-block w-100 hero-img" alt="Cover 2">
        </div>
      </div>
    </div>

    <!-- Overlay Content -->
    <div class="hero-overlay text-center ">
      <h1 class="display-4 fw-bold">HOME SWEET HOME</h1>
      <div class="mt-4">
        <a href="services.php" class="btn btn-dark me-3 px-4 py-2">List of Services</a>
        <a href="contact.php" class="btn btn-dark px-4 py-2">Contact Us</a>
      </div>
    </div>
  </section>

  <!-- About Preview -->
  <section class="py-5 bg-light" id="about-preview">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-6 mb-4 mb-md-0">
          <img src="assets/images/covers/img-1.jpg" alt="About Us" class="img-fluid rounded shadow">
        </div>
        <div class="col-md-6">
          <h2 class="fw-bold">About Us</h2>
          <p class="mt-3" style="font-family: Poppins, Sans-serif;font-size: 17px; font-weight: 400; line-height: 1.7em;">Best Home Remodeling Services in the USA Comet Remodeling LLC, we bring your dream home to life with expert craftsmanship and attention to detail. With years of experience in home remodeling and construction, we specialize in kitchen and bathroom renovations, home additions, roofing, flooring, painting, and more. Our commitment to quality and customer satisfaction sets us apart, ensuring every project is completed on time and within budget.Whether you’re looking to enhance your living space or undertake a full home renovation, our skilled team is here to deliver outstanding results.</p>
          <a href="about.php" class="btn btn-outline-primary mt-3 px-4">Read More</a>
        </div>
      </div>
    </div>
  </section>

  <!-- Services Section -->
  <section id="services" class="py-5">
    <div class="container">
      <h2 class="text-center text-white mb-5 fw-bold">Our Services</h2>
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

  <!-- Gallery Section -->
  <section id="gallery" class="py-5">
    <div class="container">
      <h2 class="text-center mb-5 fw-bold">Our Gallery</h2>
      <div class="row justify-content-center g-4">
        <!-- Gallery Tile -->
        <div class="col-md-4 d-flex justify-content-center">
          <div class="gallery-tile">
            <img src="assets/images/gallery/img-1.jpg" alt="Project 1">
          </div>
        </div>
        <div class="col-md-4 d-flex justify-content-center">
          <div class="gallery-tile">
            <img src="assets/images/gallery/img-2.jpg" alt="Project 2">
          </div>
        </div>
        <div class="col-md-4 d-flex justify-content-center">
          <div class="gallery-tile">
            <img src="assets/images/gallery/img-3.jpg" alt="Project 3">
          </div>
        </div>
        <div class="col-md-4 d-flex justify-content-center">
          <div class="gallery-tile">
            <img src="assets/images/gallery/img-4.jpg" alt="Project 3">
          </div>
        </div>
        <div class="col-md-4 d-flex justify-content-center">
          <div class="gallery-tile">
            <img src="assets/images/gallery/img-5.jpg" alt="Project 3">
          </div>
        </div>
      </div>
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

  <div class="tooltip-container">
    <a href="https://wa.me/15712423890" class="whatsapp-float" target="_blank" aria-label="Chat on WhatsApp">
      <i class="fab fa-whatsapp whatsapp-icon"></i>
    </a>
    <span class="tooltip-text"> <i class="fab fa-whatsapp whatsapp-icon"></i> +1 (703) 939 5184</span>
  </div>




  <!-- Scroll Up Floating Button -->
  <a href="#" class="scrollup-button">
    <i class="fas fa-arrow-up fa-sm scrollup-icon"></i>
  </a>

</body>

</html>