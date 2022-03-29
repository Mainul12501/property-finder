@extends('front.master')

@section('title')
    Property Finder House Prices
@endsection

@section('body')
    <!-- House Prices Starts Here -->
    <section class="house-prices" style="background-image: url(assets/images/banner/05.jpg);">
        <div class="container custom-container">
            <h2 class="text-center text-white">House prices</h2>
            <p class="text-center text-white">
                See house values in different communities and compare asking prices, actual transaction prices and rental yields.
            </p>
            <div class="row justify-content-center">
                <div class="col-lg-3">
                    <div class="btn-switch-area">
                        <div class="button-switch">
                            <div class="button-switch-start">
                                <button type="button" class="btn switecher-btn switecher-btn-active">Dubai</button>
                            </div>
                            <div class="button-switch-end">
                                <button type="button" class="btn switecher-btn">Abu Dhabi</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <form action="" class="banner-form">
                        <div class="row">
                            <div class="banner-form-input">
                                <div class="input-group">
                                    <input type="text" class="form-control">
                                    <button class="btn btn-primary" type="button">Show trends</button>
                                </div>
                                <div class="icon-search">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"></path>
                                    </svg>
                                </div>
                                <button type="button" class="input-tag">
                  <span>
                    Dubai Marina
                  </span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                                        <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- House Prices Ends Here -->

    <!-- Breadcrumb Starts Here -->
    <section class="breadcrumb-area calc-breadcrumb-area mb-0">
        <div class="container custom-container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-area-content">
                        <div class="breadcrumb-area-content-start">
                            <a href="{{ route('home-page') }}">Home</a>
                        </div>
                        <div class="breadcrumb-area-content-icon">
              <span>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"></path>
                </svg>
              </span>
                        </div>
                        <div class="breadcrumb-area-content-end">
                            <p>House Prices</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Ends Here -->

    <!-- House Prices Area Starts Here -->
    <section class="house-prices-area">
        <div class="container custom-container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-intro-content mb-4">
                        <h2>House Prices in Dubai Marina</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- House Prices Area Ends Here -->

    <!-- Price Trends Starts Here -->
    <section class="price-trends">
        <div class="container custom-container">
            <div class="row">
                <h4>Dubai Property Price Trends</h4>
                <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                    <div class="price-trends-wizard">
                        <a href="">Arabian Ranches Property Price Trends</a>
                        <a href="">Business Bay Property Price Trends</a>
                        <a href="">DIFC Property Price Trends</a>
                        <a href="">Downtown Dubai Property Price Trends</a>
                        <a href="">Dubai Hills Estate Property Price Trends</a>
                        <a href="">Dubai Land Property Price Trends</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                    <div class="price-trends-wizard">
                        <a href="">Dubai Marina Property Price Trends</a>
                        <a href="">Dubai Sports City Property Price Trends</a>
                        <a href="">International City Property Price Trends</a>
                        <a href="">Jumeirah Beach Residence Property Price Trends</a>
                        <a href="">Jumeirah Park Property Price Trends</a>
                        <a href="">Jumeirah Village Circle Property Price Trends</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="price-trends-wizard">
                        <a href="">Mohammed Bin Rashid City Property Price Trends</a>
                        <a href="">Mudon Property Price Trends</a>
                        <a href="">Palm Jumeirah Property Price Trends</a>
                        <a href="">Reem Property Price Trends</a>
                        <a href="">The Springs Property Price Trends</a>
                        <a href="">The Views Property Price Trends</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Price Trends Ends Here -->
@endsection
