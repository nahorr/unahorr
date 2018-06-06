@extends('layouts.public.app')

@section('content')

	@include('layouts.public.includes.nav-header')

  <!-- Google Map -->
  <div id="GMapCustomized-light" class="js-g-map embed-responsive embed-responsive-21by9 g-height-400" data-type="custom" data-lat="51.039530" data-lng="-114.080720" data-zoom="12" data-title="Agency" data-styles='[["", "", [{"saturation":-100},{"lightness":51},{"visibility":"simplified"}]], ["", "labels", [{"visibility":"on"}]], ["water", "", [{"color":"#bac6cb"}]] ]'
  data-pin="true" data-pin-icon="{{asset('unify/assets/img/icons/pin/green.png')}}">
  </div>
  <!-- End Google Map -->

  <section class="container g-pt-100 g-pb-40">
    <div class="row justify-content-between">
      <div class="col-md-7 g-mb-60">

        @include('flash::message')

        <h2 class="h2">Contact us</h2>
        <p class="g-color-gray-dark-v3 g-font-size-16">Nahorr Analytics is happy to provide you with more information, answer any questions you may have and create an effective solution for your software and data analysis needs.</p>

        <hr class="g-my-40">
        <!-- Contact Form -->
        <form action="{{url('/postcontact/')}}" method="POST">
          {{ csrf_field() }}
          <div class="row">
            <div class="col-md-6 form-group g-mb-20">
              <label class="g-color-gray-dark-v2 g-font-size-13">Full Name:</label>
              <input class="form-control g-color-gray-dark-v5 g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-brd-primary--focus rounded-3 g-py-13 g-px-15" type="text" name="full_name">
            </div>

            <div class="col-md-6 form-group g-mb-20">
              <label class="g-color-gray-dark-v2 g-font-size-13">Email:</label>
              <input class="form-control g-color-gray-dark-v5 g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-brd-primary--focus rounded-3 g-py-13 g-px-15" type="email" name="email">
            </div>

            <div class="col-md-6 form-group g-mb-20">
              <label class="g-color-gray-dark-v2 g-font-size-13">Subject:</label>
              <input class="form-control g-color-gray-dark-v5 g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-brd-primary--focus rounded-3 g-py-13 g-px-15" type="text" name="message_subject">
            </div>

            <div class="col-md-6 form-group g-mb-20">
              <label class="g-color-gray-dark-v2 g-font-size-13">Phone:</label>
              <input class="form-control g-color-gray-dark-v5 g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-brd-primary--focus rounded-3 g-py-13 g-px-15" type="text" name="phone">
            </div>

            <div class="col-md-12 form-group g-mb-40">
              <label class="g-color-gray-dark-v2 g-font-size-13">Message:</label>
              <textarea class="form-control g-color-gray-dark-v5 g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-brd-primary--focus g-resize-none rounded-3 g-py-13 g-px-15" rows="7" name="message"></textarea>
            </div>

            <div class="col-md-12 form-group g-mb-40">
              <div class="g-recaptcha" data-sitekey="{{env('RE_CAPTCHA_SITEKEY')}}"></div>
            </div>
          </div>

          <button class="btn u-btn-primary rounded-3 g-py-12 g-px-20" type="submit" role="button">Send Enquiry</button>
        </form>
        <!-- End Contact Form -->
      </div>

      <div class="col-md-4">
        <h1 class="g-font-weight-300 mb-5">Nahorr Ananlytics</h1>
        <div class="d-inline-block g-width-70 g-height-2 g-bg-black mb-4"></div>

        <div class="mb-4">
          <h2 class="h5 g-color-gray-dark-v2 g-font-weight-600">Address:</h2>
          <p class="g-color-gray-dark-v4 g-font-size-16">924 14 Avenue SW 
            <br>Calgary, Alberta
            <br>T2R 0N7</p>
        </div>

        <div class="mb-4">
          <h2 class="h5 g-color-gray-dark-v2 g-font-weight-600">Email us:</h2>
          <p class="g-color-gray-dark-v4">Email: <a class="g-color-gray-dark-v2" href="#!">info@nahorr.com</a>
          </p>
        </div>

        <div class="mb-3">
          <h2 class="h5 g-color-gray-dark-v2 g-font-weight-600">Call us:</h2>
          <p class="g-color-gray-dark-v4">Call: <span class="g-color-gray-dark-v2">+23414543236</span>
          </p>
        </div>

        <div class="g-mb-30">
          <p class="g-color-gray-dark-v5 g-font-weight-600 g-font-size-16"><em>Monday - Friday: 9:00 AM to 6:00 PM</em>
          </p>
        </div>

        <!-- Figure Social Icons -->
        <ul class="list-inline">
          <li class="list-inline-item">
            <a class="u-icon-v1 g-color-gray-dark-v5 g-bg-gray-light-v5 g-color-white--hover g-bg-primary--hover rounded-circle" href="https://www.facebook.com/Gosgem-474767262939625/" target="_blank">
              <i class="g-font-size-default fa fa-facebook"></i>
            </a>
          </li>
          <li class="list-inline-item g-mx-4">
            <a class="u-icon-v1 g-color-gray-dark-v5 g-bg-gray-light-v5 g-color-white--hover g-bg-primary--hover rounded-circle" href="https://twitter.com/GosGem" target="_blank">
              <i class="g-font-size-default fa fa-twitter"></i>
            </a>
          </li>
          
          <li class="list-inline-item g-mx-4">
            <a class="u-icon-v1 g-color-gray-dark-v5 g-bg-gray-light-v5 g-color-white--hover g-bg-primary--hover rounded-circle" href="https://www.instagram.com/gosgem/" target="_blank">
              <i class="g-font-size-default fa fa-linkedin"></i>
            </a>
          </li>
        </ul>
        <!-- End Figure Social Icons -->
      </div>
    </div>
  </section>
 

	@include('layouts.public.includes.footer')

@endsection