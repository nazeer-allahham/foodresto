@extends('client.layouts.master')

@section('content')
    <?php 
        $search_form_visibility = true
    ?>
    <div class="section site-cover" id="home-section" style="background-image:url('{{ asset('images/bg_3.jpg')}}')">
        <div class="site-cover-content d-flex justify-content-center align-items-center text-center">
            <div class="col-md-12">
                <h1 class="site-heading mb-3 text-warning aos-item" data-aos="fade-in">Restofood</h1>
                <h2 class="site-subheading mb-5 text-white-50 aos-item" data-aos="fade-in">your best place to order healthy &amp; delicious food</h2>    
                <div class="mx-auto aos-item" data-aos="fade-in">
                    <button onclick="setVisibility('#reservationModal', true)" class="col-3 btn btn-outline-light btn-lg py-3">New reservation</button>
                    <button class="col-3 btn btn-outline-dark btn-lg py-3 text-capitalize" type="button" data-toggle="collapse" data-target="#search-section" aria-expanded="false" aria-controls="search-section">
                        search
                    </button>
                </div>
                <form action="search" method="POST" class="collapse form mt-4 col-8 mx-auto" id="search-section">
                    @csrf
                    <input class="form-control" type="text" placeholder="type any thing to search..."/>
                </form>
            </div>
        </div>
    </div>

    <div class="section bg-secondary" id="offer-section">
        <div class="container py-3">
            <p class="bg-danger text-white">{{ Cookie::get('order')}}</p>
            @include('client.components.offers')
        </div>
    </div>

    <div class="section bg-light" id="meals-section">
        <div class="container py-3">
            @include('client.components.meals')
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="section bg-dark" id="contactus-section">
        <div class="container-fluid py-4">
            <div class="col-md-5 col-xs-10 mx-auto">
                <form action="messages/feedback" method="post" class="form">
                    @csrf
                    <div class="form-group">
                        <input type="email" name="email" placeholder="Email" class="form-control aos-item" data-aos="fade-left">
                    </div>
                    <div class="form-group">
                        <textarea name="message" cols="30" rows="5" class="form-control aos-item" data-aos="fade-right" placeholder="Write your message here.."></textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-secondary btn-md" value="Submit">
                    </div>
                </form>
            </div>
    
            <div id="social-networks" class="d-flex justify-content-center align-items-center mx-auto py-3 my-3">
                <a href="https://www.facebook.com" class="social-networks-item btn btn-facebook btn-lg aos-item" data-aos="fade-up">
                    <i class="fa fa-facebook"></i>
                </a>
                <a href="https://www.twitter.com" class="social-networks-item btn btn-twitter btn-lg aos-item" data-aos="fade-up">
                    <i class="fa fa-twitter"></i>
                </a>
                <a href="https://www.instagram.com" class="social-networks-item btn btn-instagram btn-lg aos-item" data-aos="fade-up">
                    <i class="fa fa-instagram"></i>
                </a>
            </div>

            <div class="row px-4">
                <a role="button" href="https://www.google.com/maps/" class="btn btn-warning btn-waves col-md-5 col-xs-10 mx-auto">Check Our Location On Google Maps</a>
            </div>
        </div>
    </div>
@endsection