@extends('layouts.templates')

@section('title', 'Contact Us')

@section('content')
  @include('layouts.hero')
  <section class="mt-5 mb-5">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 text-center mb-5">
          <h2 class="section-title text-center mx-auto">Contact Us</h2>
          <ul class="list-unstyled d-flex justify-content-center flex-column align-items-center">
            <li class="mb-3">
                <strong>Phone:</strong> <a href="https://api.whatsapp.com/send?phone=6285865149577">+62 858-6514-9577</a>
            </li>
            <li class="mb-3">
                <strong>Address:</strong>
                        <h6>JAKARTA</h6>
                        <p class="mb-3">
                            Plaza Indonesia, 5th Level Unit E021AB
                            Jl. M.H. Thamrin Kav. 28-30
                            Jakarta 10350
                            Indonesia
                        </p>


                        <h6>BANDUNG</h6>
                        <p class="mb-3">
                            Jl. Banda No. 30
                            Bandung 40115
                            Indonesia
                        </p>


                        <h6>YOGYAKARTA</h6>
                        <p class="mb-3">
                            Unit A & B
                            Jl. Prof. Herman Yohanes No.1125, Terban, Gondokusuman, Yogyakarta,
                            Daerah Istimewa Yogyakarta 55223
                        </p>
            </li>
          </ul>
          <p>
                Have a project or want to collaborate? Contact us and develop your dream software, now!
          </p>
        </div>
         <div class="col-lg-6 text-center mb-5">
          <h2 class="section-title text-center mx-auto">Our Location</h2>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.529893638494!2d106.8193718740959!3d-6.1935923606770595!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f42108e6d503%3A0x7d7fe17ad64a053f!2sPlaza%20Indonesia!5e0!3m2!1sen!2sid!4v1749696241518!5m2!1sen!2sid" width="600" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>

  </section>
  <div class="container">
    <h2 class="section-title">Get in Touch</h2>
    <p>If you have any questions or inquiries, please feel free to contact us using the form below.</p>
    <form action="/contact" method="POST">
      @csrf
      <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control" id="name" name="name" required>
      </div>
      <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" name="email" required>
      </div>
      <div class="mb-3">
        <label for="message" class="form-label">Message</label>
        <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
      </div>
      <button type="submit" class="btn btn-primary">Send Message</button>
    </form>
  </div>
@endsection
