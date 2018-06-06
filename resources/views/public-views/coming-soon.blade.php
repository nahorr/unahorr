@extends('layouts.public.app')

@section('content')

  @include('layouts.public.includes.nav-header')

  <main class="g-min-height-100vh g-flex-centered g-bg-size-cover g-bg-cover g-bg-bluegray-opacity-0_3--after g-pa-15" style="background-image: url(unify/assets/img/coming-soon.jpg);">
    <div class="text-center g-max-width-700 g-flex-centered-item g-z-index-1 g-color-white">
      <h1 class="display-3 g-mb-30">Coming Soon</h1>
      <p class="g-font-size-22 g-mb-50">Please check back soon. We have something interesting in the works.</p>

      <div class="js-countdown row g-z-index-1" data-end-date="2018/12/01" data-month-format="%m" data-days-format="%D" data-hours-format="%H" data-minutes-format="%M" data-seconds-format="%S">
        <div class="col-3 g-py-10">
          <strong class="js-cd-days d-block display-4 mx-auto g-width-70 g-height-70 g-bg-white-opacity-0_2 g-font-weight-700 g-font-size-25 g-rounded-50x g-line-height-1 g-pa-20 mb-2"></strong>
          <em class="g-font-style-normal g-font-size-20">Days</em>
        </div>

        <div class="col-3 g-brd-left g-brd-white-dark-v3 g-py-10">
          <strong class="js-cd-hours d-block display-4 mx-auto g-width-70 g-height-70 g-bg-white-opacity-0_2 g-font-weight-700 g-font-size-25 g-rounded-50x g-line-height-1 g-pa-20 mb-2"></strong>
          <em class="g-font-style-normal g-font-size-20">Hours</em>
        </div>

        <div class="col-3 g-brd-left g-brd-white-dark-v3 g-py-10">
          <strong class="js-cd-minutes d-block display-4 mx-auto g-width-70 g-height-70 g-bg-white-opacity-0_2 g-font-weight-700 g-font-size-25 g-rounded-50x g-line-height-1 g-pa-20 m2-3"></strong>
          <em class="g-font-style-normal g-font-size-20">Minutes</em>
        </div>

        <div class="col-3 g-brd-left g-brd-white-dark-v3 g-py-10">
          <strong class="js-cd-seconds d-block display-4 mx-auto g-width-70 g-height-70 g-bg-white-opacity-0_2 g-font-weight-700 g-font-size-25 g-rounded-50x g-line-height-1 g-pa-20 m2-3"></strong>
          <em class="g-font-style-normal g-font-size-20">Seconds</em>
        </div>
      </div>
    </div>
  </main>
  

@endsection