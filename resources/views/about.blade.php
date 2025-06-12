@extends('layouts.templates')

@section('title', 'Company Profile')

@section('content')
    @include('layouts.hero')

    <div class="container d-flex justify-content-around mt-5 pt-5">
        <div class="m-5 p-5">
            <h1>Portfolio</h1>
            <p>As a Software House that has been designing and developing web apps, mobile apps, and PWAs since 2013, we have been trusted by our clients from America, Europe, Australia, and Asia.</p>
        </div>
        <div class="m-auto m-5 p-5">
            <img src="img/portfolio1.png" height="300px" alt="">
        </div>
    </div>


    <div class="container m-5 p-5 text-end">
        <h1>Service</h1>
        <p>Softwareseni offers a variety of the best services formulated to meet your needs for technology and product digitalization. However, we understand that every product has its own DNA. Therefore, do not hesitate to contact us and consult about your product.</p>
    </div>


    <h1 class="text-center m-5">Cooperation Model</h1>
    <p class="lead text-center m-5">A project model that meets your needs</p>

    <div class="container text-center">
        <div class="row align-items-start d-flex justify-content-around">
            <div class="col-3 text-success-emphasis shadow-sm pb-5">
                <h3 class="mb-5 mt-5 ps-3 text-start">Project-Based</h3>
                <p>With over 200 professional staff, and trusted by many companies in Indonesia. Softwareseni is here to help in designing, creating, and developing digital platforms that suit your business needs.</p>
                <a href="/contact"><button type="button" class="btn btn-success text-ligh">Contact Me!</button></a>
            </div>
            <div class="col-3 text-danger-emphasis shadow-sm pb-5">
                <h3 class="mb-5 mt-5 ps-3 text-start">Dedicated Team Engagement</h3>
                <p>We provide the best IT talents easily and quickly. Dedicated specifically to your digital projects and flexible in meeting every digitization needs of your company.</p>
                <a href="/contact"><button type="button" class="btn btn-danger text-light">Contact Me!</button></a>
            </div>
                <div class="col-3 text-info-emphasis shadow-sm pb-5">
                <h3 class="mb-5 mt-5 ps-3 text-start">On Demand</h3>
                <p>There is no perfect digital platform. Therefore, Softwareseni comes as a quick solution to optimize your company's digital platform, whether for bug fixing needs or feature adjustment.</p>
                <a href="/contact"><button type="button" class="btn btn-info text-light  ">Contact Me!</button></a>
            </div>
        </div>
    </div>

@endsection
