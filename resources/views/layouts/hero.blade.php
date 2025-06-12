
<section class="hero position-relative">
  <!-- Carousel wrapper -->
  <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
    <div class="carousel-inner">
      <!-- Slide 1 -->
      <div class="carousel-item active" data-bs-interval="3000">
        <div class="hero-slide" style="background-image: url('{{ asset('img/hero1.png') }}');">
          <div class="hero-content">
            <div class="container">
              <h1 class="display-4 fw-bold text-white mb-3">Welcome to Our Company</h1>
              <p class="lead text-white mb-4">We provide innovative solutions for businesses worldwide</p>
              <a href="/about" class="btn btn-primary btn-lg">Learn About Us</a>
            </div>
          </div>
        </div>
      </div>

      <!-- Slide 2 -->
      <div class="carousel-item" data-bs-interval="3000">
        <div class="hero-slide" style="background-image: url('{{ asset('img/hero2.png') }}');">
          <div class="hero-content">
            <div class="container">
              <h1 class="display-4 fw-bold text-white mb-3">Get in Touch</h1>
              <p class="lead text-white mb-4">Let's discuss how we can help your business grow</p>
              <a href="/contact" class="btn btn-primary btn-lg">Contact Us</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<style>
  :root {
    --primary-color: #4169E1; /* Royal Blue */
    --secondary-color: #000000; /* Black */
  }

  .hero {
    height: 80vh;
    min-height: 500px;
    overflow: hidden;
  }

  .hero-slide {
    height: 80vh;
    min-height: 500px;
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    position: relative;
  }

  .hero-slide::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.6); /* Dark overlay for better text visibility */
  }

  .hero-content {
    position: relative;
    z-index: 10;
    height: 80vh;
    min-height: 500px;
    display: flex;
    align-items: center;
    text-align: left;
  }

  .btn-primary {
    background-color: var(--primary-color);
    border-color: var(--primary-color);
    padding: 10px 25px;
    font-weight: 500;
  }

  .btn-primary:hover {
    background-color: #3457c9; /* Slightly darker royal blue */
    border-color: #3457c9;
  }

  /* Responsive adjustments */
  @media (max-width: 768px) {
    .hero, .hero-slide, .hero-content {
      height: 60vh;
      min-height: 400px;
    }

    .display-4 {
      font-size: 2.5rem;
    }

    .lead {
      font-size: 1.1rem;
    }
  }

  @media (max-width: 576px) {
    .hero, .hero-slide, .hero-content {
      height: 50vh;
      min-height: 350px;
    }

    .display-4 {
      font-size: 2rem;
    }
  }
</style>
