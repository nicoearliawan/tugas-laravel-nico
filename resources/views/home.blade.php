
@extends('layouts.templates')

@section('title', 'Home')

@section('content')
  @include('layouts.hero')

  <!-- Additional content sections -->
  <section class="section">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center mb-5">
          <h2 class="section-title text-center mx-auto">Websites</h2>
          <p class="lead">We provide comprehensive solutions to help your business grow</p>
        </div>
      </div>
      <div class="row g-4">
        <!-- Service 1 -->
        <div class="col-md-4">
          <div class="card h-100 border-0 shadow-sm">
            <div class="card-body text-center p-4">
              <div class="mb-4">
                <i class="fas fa-laptop fa-3x text-primary"></i>
              </div>
              <h4>Websites</h4>
              <p class="text-muted">Create a company profile or e-commerce website that has fast performance, is easy to use, and is SEO friendly, specifically for your own business.</p>
              <a href="/about" class="btn btn-outline-dark mt-3">Learn More</a>
            </div>
          </div>
        </div>

        <!-- Service 2 -->
        <div class="col-md-4">
          <div class="card h-100 border-0 shadow-sm">
            <div class="card-body text-center p-4">
              <div class="mb-4">
                <i class="fas fa-chart-line fa-3x text-primary"></i>
              </div>
              <h4>MVP Development</h4>
              <p class="text-muted">Know the business opportunities from each idea and concept by developing an MVP product, and find the answers to the current digital market needs.</p>
              <a href="/about" class="btn btn-outline-dark mt-3">Learn More</a>
            </div>
          </div>
        </div>

        <!-- Service 3 -->
        <div class="col-md-4">
          <div class="card h-100 border-0 shadow-sm">
            <div class="card-body text-center p-4">
              <div class="mb-4">
                <i class="fas fa-mobile-alt fa-3x text-primary"></i>
              </div>
              <h4>Mobile App</h4>
              <p class="text-muted">Mobilize your business in the digital era by developing Android & iOS applications that represent your business identity.</p>
              <a href="/about" class="btn btn-outline-dark mt-3">Learn More</a>
            </div>
          </div>
        </div>

        <!-- Service 4 -->
        <div class="col-md-6">
          <div class="card h-100 border-0 shadow-sm">
            <div class="card-body text-center p-4">
              <div class="mb-4">
                <i class="fas fa-mobile-alt fa-3x text-primary"></i>
                <ImageView ...android:src="@drawable/description_24"/>
              </div>
              <h4>Specification Document & Wireframe</h4>
              <p class="text-muted">Make sure you understand every requirement for the development of your business's digital platform with the specification document and wireframe.</p>
              <a href="/about" class="btn btn-outline-dark mt-3">Learn More</a>
            </div>
          </div>
        </div>

        <!-- Service 5 -->
        <div class="col-md-6">
          <div class="card h-100 border-0 shadow-sm">
            <div class="card-body text-center p-4">
              <div class="mb-4">
                <i class="fas fa-laptop fa-3x text-primary"></i>
              </div>
              <h4>Custom Software</h4>
              <p class="text-muted">Develop a system that meets the company's business needs, and create an effective and efficient work environment to accelerate your business pace.</p>
              <a href="/about" class="btn btn-outline-dark mt-3">Learn More</a>
            </div>
          </div>
        </div>
    </div>
  </section>

  <!-- CTA Section -->
  <section class="section text-center" style="background-color: var(--primary-color); color:white;">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8">
          <h2 class="mb-4">Ready to start your project?</h2>
          <p class="lead mb-4">Contact us today to get a free consultation and quote for your next project.</p>
          <a href="/contact" class="btn btn-lg btn-outline-light">Contact Us Now</a>
        </div>
      </div>
    </div>
  </section>
@endsection
