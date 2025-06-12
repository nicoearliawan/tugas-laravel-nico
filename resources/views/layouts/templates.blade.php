
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Company Profile')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Custom CSS -->
    <style>
      :root {
        --primary-color: #4169E1; /* Royal Blue */
        --secondary-color: #000000; /* Black */
        --light-gray: #f8f9fa;
        --dark-gray: #212529;
        --text-light: #f8f9fa;
        --text-dark: #343a40;
      }

      body {
        font-family: 'Poppins', sans-serif;
        color: var(--text-dark);
      }

      .navbar {
        background-color: #fff !important;
        box-shadow: 0 2px 15px rgba(0, 0, 0, 0.1);
      }

      .navbar-brand img {
        max-height: 40px;
      }

      .navbar-light .navbar-nav .nav-link {
        color: var(--secondary-color);
        font-weight: 500;
        padding: 0.8rem 1rem;
      }

      .navbar-light .navbar-nav .nav-link:hover,
      .navbar-light .navbar-nav .nav-link.active {
        color: var(--primary-color);
      }

      .dropdown-item.active,
      .dropdown-item:active {
        background-color: var(--primary-color);
      }

      .btn-primary {
        background-color: var(--primary-color);
        border-color: var(--primary-color);
      }

      .btn-primary:hover {
        background-color: #3457c9;
        border-color: #3457c9;
      }

      .btn-outline-primary {
        color: var(--primary-color);
        border-color: var(--primary-color);
      }

      .btn-outline-primary:hover {
        background-color: var(--primary-color);
        border-color: var(--primary-color);
      }

      .footer {
        background-color: var(--dark-gray);
        color: var(--text-light);
        padding: 3rem 0;
      }

      .footer h5 {
        color: var(--text-light);
        font-weight: 600;
        margin-bottom: 1.5rem;
      }

      .social-icons a {
        color: var(--text-light);
        margin-right: 15px;
        font-size: 1.2rem;
        transition: color 0.3s;
      }

      .social-icons a:hover {
        color: var(--primary-color);
      }

      .footer-links a {
        color: #adb5bd;
        text-decoration: none;
        transition: color 0.3s;
      }

      .footer-links a:hover {
        color: var(--primary-color);
      }

      /* Section styles */
      .section {
        padding: 5rem 0;
      }

      .section-title {
        position: relative;
        margin-bottom: 3rem;
        font-weight: 700;
      }

      .section-title::after {
        content: '';
        position: absolute;
        left: 0;
        bottom: -10px;
        width: 60px;
        height: 4px;
        background-color: var(--primary-color);
      }

      .text-primary {
        color: var(--primary-color) !important;
      }
      @yield('custom-css')
    </style>
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  </head>
  <body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top shadow-sm">
      <div class="container">
        <a class="navbar-brand" href="/">
          <img src="img/logo.png">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link {{ (request()->is('/home') || request()->is('home')) ? 'active' : '' }}" href="/home">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ (request()->is('about*')) ? 'active' : '' }}" href="/about">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ (request()->is('contact*')) ? 'active' : '' }}" href="/contact">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Main Content -->
    <main>
      @yield('content')
    </main>

    <!-- Footer -->
    <footer class="footer mt-5">
      <div class="container">
        <div class="row">
          <div class="col-md-4 mb-4 mb-md-0">
            <h5>About Our Company</h5>
            <p>We provide innovative solutions to help businesses thrive in today's digital landscape. Our team of experts is dedicated to delivering high-quality services tailored to your needs.</p>
            <div class="social-icons mt-3">
              <a href="https://www.facebook.com/softwareseni.indonesia" target="_blank"><i class="fab fa-facebook-f"></i></a>
              <a href="https://twitter.com/SoftwareSeni" target="_blank"><i class="fab fa-twitter"></i></a>
              <a href="https://www.instagram.com/softwareseni_/" target="_blank"><i class="fab fa-instagram"></i></a>
            </div>
          </div>

          <div class="col-md-4 mb-4 mb-md-0">
            <h5>Quick Links</h5>
            <ul class="list-unstyled footer-links">
              <li class="mb-2"><a href="/home">Home</a></li>
              <li class="mb-2"><a href="/about">About Us</a></li>
              <li class="mb-2"><a href="/contact">Contact</a></li>
            </ul>
          </div>

          <div class="col-md-4">
            <h5>Contact Info</h5>
            <ul class="list-unstyled">
              <li class="mb-2">
                <i class="fas fa-map-marker-alt me-2"></i>
                    Plaza Indonesia, 5th Level Unit E021AB
                    Jl. M.H. Thamrin Kav. 28-30
                    Jakarta 10350
                    Indonesia
                </li>
              <li class="mb-2">
                <i class="fas fa-phone me-2"></i> <a href="https://api.whatsapp.com/send?phone=6285865149577">+62 858-6514-9577</a>
              </li>
            </ul>
          </div>
        </div>

        <hr class="mt-4 mb-4" style="border-color: rgba(255,255,255,0.1);">

        <div class="row">
          <div class="col-md-6 text-center text-md-start">
            <p class="mb-0">&copy; 2025 SoftwareSeni all rights reserved.</p>
          </div>
        </div>
      </div>
    </footer>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.min.js" integrity="sha384-RuyvpeZCxMJCqVUGFI0Do1mQrods/hhxYlcVfGPOfQtPJh0JCw12tUAZ/Mv10S7D" crossorigin="anonymous"></script>
    @yield('scripts')
  </body>
</html>
