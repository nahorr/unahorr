@extends('layouts.public.app')

@section('content')

  @include('layouts.public.includes.nav-header')

  @include('layouts.public.includes.header')

    <!-- Icon Blocks -->
    <section class="g-py-100">
      <div class="container">
        <div class="row no-gutters">
          <div class="col-lg-4 g-px-40 g-mb-50 g-mb-0--lg">
            <!-- Icon Blocks -->
            <div class="text-center">
              <span class="d-inline-block u-icon-v3 u-icon-size--xl g-bg-primary g-color-white rounded-circle g-mb-30">
                  <i class="icon-communication-081 u-line-icon-pro"></i>
                </span>
              <h3 class="h5 g-color-gray-dark-v2 g-font-weight-600 text-uppercase mb-3">Data Analysis</h3>
              <p class="mb-0">Be it environmrntal, social, or economic data, at Nahorr Analytics, we help build systems and procedures to effectively collect, analyse , and present data in a meaningful way.</p>
              <hr>
              <a href="{{url('mentorship')}}" class="btn btn-md u-btn-skew u-btn-primary g-font-weight-600 g-letter-spacing-0_5 text-uppercase g-brd-2 g-rounded-50 g-mr-10 g-mb-15">
                <span class="u-btn-skew__inner">
                  <i class="fa fa-check-circle g-mr-3"></i>
                  READ MORE
                </span>
              </a>
            </div>
            <!-- End Icon Blocks -->
          </div>

          <div class="col-lg-4 g-brd-left--lg g-brd-gray-light-v4 g-px-40 g-mb-50 g-mb-0--lg">
            <!-- Icon Blocks -->
            <div class="text-center">
              <span class="d-inline-block u-icon-v3 u-icon-size--xl g-bg-primary g-color-white rounded-circle g-mb-30">
                  <i class="icon-finance-086 u-line-icon-pro"></i>
                </span>
              <h3 class="h5 g-color-gray-dark-v2 g-font-weight-600 text-uppercase mb-3">Software Development</h3>
              <p class="mb-0">We take pride in designing and developing custom software solutions for our clients. We belive in easy to use yet robost software solutions that increase efficiency and enhance productivity.</p>
              <hr>
              <a href="{{url('about')}}" class="btn btn-md u-btn-skew u-btn-primary g-font-weight-600 g-letter-spacing-0_5 text-uppercase g-brd-2 g-rounded-50 g-mr-10 g-mb-15">
                <span class="u-btn-skew__inner">
                  <i class="fa fa-check-circle g-mr-3"></i>
                  READ MORE
                </span>
              </a>
            </div>
            <!-- End Icon Blocks -->
          </div>

          <div class="col-lg-4 g-brd-left--lg g-brd-gray-light-v4 g-px-40">
            <!-- Icon Blocks -->
            <div class="text-center">
              <span class="d-inline-block u-icon-v3 u-icon-size--xl g-bg-primary g-color-white rounded-circle g-mb-30">
                  <i class="icon-communication-057 u-line-icon-pro"></i>
                </span>
              <h3 class="h5 g-color-gray-dark-v2 g-font-weight-600 text-uppercase mb-3">Integrated Smart Website Design</h3>
              <p class="mb-0">At Nahorr Analytics, we will design a website you will feel very proud to own that you would tell the world about it at every oppurtunity.</p>
              <hr>
              <a href="{{url('about')}}" class="btn btn-md u-btn-skew u-btn-primary g-font-weight-600 g-letter-spacing-0_5 text-uppercase g-brd-2 g-rounded-50 g-mr-10 g-mb-15">
                <span class="u-btn-skew__inner">
                  <i class="fa fa-check-circle g-mr-3"></i>
                  READ MORE
                </span>
              </a>
            </div>
            <!-- End Icon Blocks -->
          </div>
        </div>
      </div>
    </section>
    <!-- End Icon Blocks -->

    <hr class="g-brd-gray-light-v4 my-0">



    <!-- Call to Action --> 
    <div class="g-pos-rel"> 
      <div class="container text-center g-pt-50 g-pb-50">
       <img class="img-fluid img-thumbnail rounded-circle" src="{{asset('unify/assets/img/totalgrades.jpg')}}" alt="Sinach">
        <!-- Heading -->
         <div class="g-max-width-645 mx-auto g-mb-40"> 
          <h2 class="h1 mb-3">TotalGrades</h2> 
          <p>Total Grades is an easy to use online platform for managing and presenting students’ grades and attendance records elegantly. Total Grades was designed with students and their parents in mind to provide a platform that encourages and empowers students to improve their grades while allowing parents to be actively enganged in helping shape their performances based on realtime statistics and feedback from teachers.</p> 
        </div> 
        <!-- End Heading --> 
        <a class="btn u-shadow-v33 g-color-white g-bg-primary g-bg-main--hover g-rounded-30 g-px-35 g-py-13" href="{{url('register')}}">Register Now</a> 
        <!-- SVG Shape --> 
        <svg class="d-inline-block g-width-35" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 37 1" enable-background="new 0 0 37 1" xml:space="preserve"> 
          <linearGradient id="SVGID_5_" gradientUnits="userSpaceOnUse" x1="0" y1="0.5" x2="37" y2="0.5"> 
            <stop offset="0" style="stop-color:#f5f6fa"></stop> <stop offset="1" style="stop-color:#b5b8cb"></stop> 
          </linearGradient> 
          <line fill="none" stroke="url(#SVGID_5_)" stroke-miterlimit="10" x1="37" y1="0.5" x2="0" y2="0.5"></line> 
        </svg> <!-- End SVG Shape --> 
        <span class="align-middle g-color-primary mx-1">or</span> 
        <!-- SVG Shape --> 
        <svg class="d-inline-block g-width-35" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 37 1" enable-background="new 0 0 37 1" xml:space="preserve"> 
          <linearGradient id="SVGID_6_" gradientUnits="userSpaceOnUse" x1="-10" y1="-1.5" x2="27" y2="-1.5" gradientTransform="matrix(-1 0 0 -1 27 -1)"> 
            <stop offset="0" style="stop-color:#f5f6fa"></stop> 
            <stop offset="1" style="stop-color:#b5b8cb"></stop> 
          </linearGradient> 
          <line fill="none" stroke="url(#SVGID_6_)" stroke-miterlimit="10" x1="0" y1="0.5" x2="37" y2="0.5"></line> 
        </svg> <!-- End SVG Shape --> 
        <a class="btn u-shadow-v32 g-color-primary g-color-white--hover g-bg-white g-bg-main--hover g-rounded-30 g-px-35 g-py-13" href="{{url('contact')}}">Contact Us</a> 
      </div> 
      <!-- SVG Background Shape --> 
      <svg class="g-pos-abs g-bottom-0 g-left-0 g-z-index-minus-1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1920 323" enable-background="new 0 0 1920 323" xml:space="preserve"> 
        <polygon fill="#f0f2f8" points="0,323 1920,323 1920,0 "></polygon> 
        <polygon fill="#f5f6fa" points="-0.5,322.5 -0.5,131.5 658.3,212.3 "></polygon> 
      </svg> <!-- End SVG Background Shape --> </div> <!-- End Call to Action -->

  <hr class="g-brd-gray-light-v4 my-0">

    <!-- Projects -->
    <section class="container g-py-100">
      <div class="text-center g-mb-50">
        <h2 class="h1 g-color-black g-font-weight-600">Why Choose Total Grades</h2>
        <p class="lead">Because Total Grades is an innovative and cost effective grades reporting solution developed by people with passion for improving the quality of primary and secondary eduction around the world.</p>
      </div>

      <div class="row no-gutters g-mx-minus-10">
        <div class="col-sm-6 col-lg-4 g-px-10 g-mb-20">
          <!-- Projects -->
          <div class="u-block-hover g-brd-around g-brd-gray-light-v4 g-color-black g-color-white--hover g-bg-purple--hover text-center rounded g-transition-0_3 g-px-30 g-py-50">
            <img class="img-fluid u-block-hover__main--zoom-v1 mb-5" src="{{asset('unify/assets/img/what-we-do/vocals.png')}}" alt="vocals">
            <span class="g-font-weight-600 g-font-size-12 text-uppercase"></span>
            <h3 class="h4 g-font-weight-600 mb-0">Student grades and Statistics</h3>

            <a class="u-link-v2" href="{{url('mentorship')}}"></a>
          </div>
          <!-- End Projects -->
        </div>

        <div class="col-sm-6 col-lg-4 g-px-10 g-mb-20">
          <!-- Projects -->
          <div class="u-block-hover g-brd-around g-brd-gray-light-v4 g-color-black g-color-white--hover g-bg-cyan--hover text-center rounded g-transition-0_3 g-px-30 g-py-50">
            <img class="img-fluid u-block-hover__main--zoom-v1 mb-5" src="{{asset('unify/assets/img/what-we-do/report_card_totalgrades.png')}}" alt="Image Description">
            <span class="g-font-weight-600 g-font-size-12 text-uppercase"></span>
            <h3 class="h4 g-font-weight-600 mb-0">Awesome Report Card</h3>

            <a class="u-link-v2" href="{{url('coming-soon')}}"></a>
          </div>
          <!-- End Projects -->
        </div>

        <div class="col-sm-6 col-lg-4 g-px-10 g-mb-20">
          <!-- Projects -->
          <div class="u-block-hover g-brd-around g-brd-gray-light-v4 g-color-black g-color-white--hover g-bg-teal--hover text-center rounded g-transition-0_3 g-px-30 g-py-50">
            <img class="img-fluid u-block-hover__main--zoom-v1 mb-5" src="{{asset('unify/assets/img/what-we-do/musıc_prod.jpg')}}" alt="Image Description">
            <span class="g-font-weight-600 g-font-size-12 text-uppercase"></span>
            <h3 class="h4 g-font-weight-600 mb-0">Students Attendance</h3>

            <a class="u-link-v2" href="{{url('coming-soon')}}"></a>
          </div>
          <!-- End Projects -->
        </div>

        <div class="col-sm-6 col-lg-4 g-px-10 g-mb-20">
          <!-- Projects -->
          <div class="u-block-hover g-brd-around g-brd-gray-light-v4 g-color-black g-color-white--hover g-bg-lightred--hover text-center rounded g-transition-0_3 g-px-30 g-py-50">
            <img class="img-fluid u-block-hover__main--zoom-v1 mb-5" src="{{asset('unify/assets/img/what-we-do/services.jpg')}}" alt="Image Description">
            <!--<span class="g-font-weight-600 g-font-size-12 text-uppercase">Hi-tech</span>-->
            <h3 class="h4 g-font-weight-600 mb-0">Easy to Use on Any Device</h3>

            <a class="u-link-v2" href="{{url('coming-soon')}}"></a>
          </div>
          <!-- End Projects -->
        </div>

        <div class="col-sm-6 col-lg-4 g-px-10 g-mb-20">
          <!-- Projects -->
          <div class="u-block-hover g-brd-around g-brd-gray-light-v4 g-color-black g-color-white--hover g-bg-primary--hover text-center rounded g-transition-0_3 g-px-30 g-py-50">
            <img class="img-fluid u-block-hover__main--zoom-v1 mb-5" src="{{asset('unify/assets/img/what-we-do/vocals.png')}}" alt="Image Description">
            <span class="g-font-weight-600 g-font-size-12 text-uppercase"></span>
            <h3 class="h4 g-font-weight-600 mb-0">Affordable</h3>

            <a class="u-link-v2" href="{{url('coming-soon')}}"></a>
          </div>
          <!-- End Projects -->
        </div>

        <div class="col-sm-6 col-lg-4 g-px-10 g-mb-20">
          <!-- Projects -->
          <div class="u-block-hover g-brd-around g-brd-gray-light-v4 g-color-black g-color-white--hover g-bg-pink--hover text-center rounded g-transition-0_3 g-px-30 g-py-50">
            <img class="img-fluid u-block-hover__main--zoom-v1 mb-5" src="{{asset('unify/assets/img/what-we-do/brand_dev.png')}}" alt="Image Description">
            <h3 class="h5 g-font-weight-600 mb-0">Committed & Accountable</h3>

            <a class="u-link-v2" href="{{url('coming-soon')}}"></a>
          </div>
          <!-- End Projects -->
        </div>
      </div>
    </section>
    <!-- End Projects -->


    <!-- Call To Action -->
    <section class="g-bg-primary g-color-white g-pa-30" style="background-image: url(/unify/assets/img/bg/pattern5.png);">
      <div class="d-md-flex justify-content-md-center text-center">
        <div class="align-self-md-center">
          <p class="lead g-font-weight-400 g-mr-20--md g-mb-15 g-mb-0--md">Learn from the best and become the best. Join our mentorship program</p>
        </div>
        <div class="align-self-md-center">
          <a class="btn btn-lg u-btn-white text-uppercase g-font-weight-600 g-font-size-12" target="_blank" href="{{url('mentorship')}}">More Information</a>
        </div>
      </div>
    </section>
    <!-- End Call To Action -->

    @include('layouts.public.includes.footer')

@endsection