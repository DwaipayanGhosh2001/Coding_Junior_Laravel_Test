@extends('layouts/main')

@section('main-section')
<section class="py-3 py-lg-5 py-xl-8">
    <div class="container overflow-hidden">
      <div class="row gy-5 gy-lg-0 align-items-lg-center justify-content-lg-between">
        <div class=" col-lg-7">
          <h2 class="display-3 fw-bold mb-3">A Digital Dashboard Displayin User Details</h2>
          <p class="fs-4 mb-5">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Tempora sunt laboriosam necessitatibus?</p>
          <div class="d-grid gap-2 d-sm-flex">
           <a href="{{ auth()->check() ? route('dashboard') : route('login') }}"> <button class="getStartedBtn">Get Started</button></a>
           
          </div>
        </div>
        <div class=" col-lg-5 text-center">
          <div class="position-relative d-md-block d-none">
            <div class="bsb-circle border border-4 border-warning position-absolute top-50 start-10 translate-middle z-1"></div>
            <div class="bsb-circle bg-primary position-absolute top-50 start-50 translate-middle" style="--bsb-cs: 460px;"></div>
            <div class="bsb-circle border border-4 border-warning position-absolute top-10 end-0 z-1" style="--bsb-cs: 100px;"></div>
            <img class="img-fluid position-relative z-2" loading="lazy" src="{{asset('assets/images/heroimg.webp')}}" alt="A Digital Agency Specialized in AI and Web 3.0">
          </div>
        </div>
      </div>
    </div>
  </section>
   
@endsection