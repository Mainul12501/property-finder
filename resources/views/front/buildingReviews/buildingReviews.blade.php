@extends('front.master')

@section('title')
    Building reviews and ratings
@endsection

@section('body')
    <!-- House Prices Starts Here -->
    <section class="house-prices" style="background-image: url(assets/images/banner/06.jpg);">
        <div class="container custom-container">
            <h2 class="text-center text-white fw-bolder mt-3">Building Reviews</h2>
            <p class="text-center text-white fw-normal mt-3" style="font-size: 14px;">
                Find out more about your new home. Read reviews and ratings from real residents.
            </p>
            <div class="row justify-content-center house-prices-search" style="margin-top: 40px;">
                <div class="col-lg-8 col-md-8">
                    <form action="" class="banner-form">
                        <div class="row g-2 g-lg-3">
                            <div class="col-lg-8 col-md-8">
                                <div class="home-search-input" id="homeSearchInputTop">
                                    <input type="text" class="form-control" placeholder="Enter Building Name or Community">
                                    <span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                      <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"></path>
                    </svg>
                  </span>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <input type="submit" value="See reviews" class="btn btn-danger fw-bolder" style="background-color: #ef5e4e; border-color: #ef5e4e; padding: 11px 14px;">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- House Prices Ends Here -->

    <!-- Writting Review Intro Starts Here -->
    <section class="writting-review-intro">
        <div class="container custom-container">
            <div class="row align-items-center">
                <div class="col-lg-9">
                    <p class="mb-0 text-white text-md-center text-lg-start">
                        WANT TO SHARE YOUR EXPERIENCE? HELP US IMPROVE THE EXPERIENCE OF OTHERS BY WRITING A REVIEW
                    </p>
                </div>
                <div class="col-lg-3 mt-md-3 mt-0">
                    <div class="d-flex justify-content-end justify-content-md-center justify-content-lg-end">
                        <button type="button" class="btn btn-outline-light text-uppercase fw-bold rounded-0">Write review</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Writting Review Intro Ends Here -->

    <!-- Breadcrumb Starts Here -->
    <section class="breadcrumb-area calc-breadcrumb-area mb-0">
        <div class="container custom-container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-area-content">
                        <div class="breadcrumb-area-content-start">
                            <a href="index.html">Home</a>
                        </div>
                        <div class="breadcrumb-area-content-icon">
              <span>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"></path>
                </svg>
              </span>
                        </div>
                        <div class="breadcrumb-area-content-end">
                            <p>Building reviews</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Ends Here -->

    <!-- Building Review Component Starts Here -->
    <section class="review-component-area">
        <div class="container custom-container">
            <div class="row">
                <div class="col-lg-8">
                    <h3>Top reviewed buildings in the UAE</h3>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="review-component mb-4">
                                <div class="review-component-start">
                                    <div class="image">
                                        <img src="assets/images/card/building-review/map.png" alt="Map Image">
                                    </div>
                                </div>
                                <div class="review-component-end">
                                    <h4>Palace Tower 2</h4>
                                    <div class="review-component-end-point">
                                        <div class="poiont">
                                            <span>5/5</span>
                                        </div>
                                        <div>
                                            <a href="" class="d-inline-block text-decoration-underline">(5 reviews)</a>
                                        </div>
                                    </div>
                                    <div class="review-component-end-location">
                                        <div>
                      <span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                          <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                        </svg>
                      </span>
                                        </div>
                                        <div>
                                            <p class="mb-0">Dubai, Dubai Silicon Oasis, Palace Towers</p>
                                        </div>
                                    </div>
                                    <div class="review-component-end-links">
                                        <a href="" class="text-decoration-underline d-inline-block me-3">Properties for rent</a>
                                        <a href="" class="text-decoration-underline d-inline-block">Properties for sale</a>
                                    </div>
                                    <div class="review-component-end-buttons">
                                        <a href="#" class="d-inline-block btn">
                      <span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat" viewBox="0 0 16 16">
                          <path d="M2.678 11.894a1 1 0 0 1 .287.801 10.97 10.97 0 0 1-.398 2c1.395-.323 2.247-.697 2.634-.893a1 1 0 0 1 .71-.074A8.06 8.06 0 0 0 8 14c3.996 0 7-2.807 7-6 0-3.192-3.004-6-7-6S1 4.808 1 8c0 1.468.617 2.83 1.678 3.894zm-.493 3.905a21.682 21.682 0 0 1-.713.129c-.2.032-.352-.176-.273-.362a9.68 9.68 0 0 0 .244-.637l.003-.01c.248-.72.45-1.548.524-2.319C.743 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.52.263-1.639.742-3.468 1.105z"/>
                        </svg>
                      </span>
                                            Read reviews
                                        </a>
                                        <button type="button" class="btn">Write review</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="review-component mb-4">
                                <div class="review-component-start">
                                    <div class="image">
                                        <img src="assets/images/card/building-review/map.png" alt="Map Image">
                                    </div>
                                </div>
                                <div class="review-component-end">
                                    <h4>Palace Tower 2</h4>
                                    <div class="review-component-end-point">
                                        <div class="poiont">
                                            <span>5/5</span>
                                        </div>
                                        <div>
                                            <a href="" class="d-inline-block text-decoration-underline">(5 reviews)</a>
                                        </div>
                                    </div>
                                    <div class="review-component-end-location">
                                        <div>
                      <span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                          <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                        </svg>
                      </span>
                                        </div>
                                        <div>
                                            <p class="mb-0">Dubai, Dubai Silicon Oasis, Palace Towers</p>
                                        </div>
                                    </div>
                                    <div class="review-component-end-links">
                                        <a href="" class="text-decoration-underline d-inline-block me-3">Properties for rent</a>
                                        <a href="" class="text-decoration-underline d-inline-block">Properties for sale</a>
                                    </div>
                                    <div class="review-component-end-buttons">
                                        <a href="#" class="d-inline-block btn">
                      <span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat" viewBox="0 0 16 16">
                          <path d="M2.678 11.894a1 1 0 0 1 .287.801 10.97 10.97 0 0 1-.398 2c1.395-.323 2.247-.697 2.634-.893a1 1 0 0 1 .71-.074A8.06 8.06 0 0 0 8 14c3.996 0 7-2.807 7-6 0-3.192-3.004-6-7-6S1 4.808 1 8c0 1.468.617 2.83 1.678 3.894zm-.493 3.905a21.682 21.682 0 0 1-.713.129c-.2.032-.352-.176-.273-.362a9.68 9.68 0 0 0 .244-.637l.003-.01c.248-.72.45-1.548.524-2.319C.743 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.52.263-1.639.742-3.468 1.105z"/>
                        </svg>
                      </span>
                                            Read reviews
                                        </a>
                                        <button type="button" class="btn">Write review</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="review-component mb-4">
                                <div class="review-component-start">
                                    <div class="image">
                                        <img src="assets/images/card/building-review/map.png" alt="Map Image">
                                    </div>
                                </div>
                                <div class="review-component-end">
                                    <h4>Palace Tower 2</h4>
                                    <div class="review-component-end-point">
                                        <div class="poiont">
                                            <span>5/5</span>
                                        </div>
                                        <div>
                                            <a href="" class="d-inline-block text-decoration-underline">(5 reviews)</a>
                                        </div>
                                    </div>
                                    <div class="review-component-end-location">
                                        <div>
                      <span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                          <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                        </svg>
                      </span>
                                        </div>
                                        <div>
                                            <p class="mb-0">Dubai, Dubai Silicon Oasis, Palace Towers</p>
                                        </div>
                                    </div>
                                    <div class="review-component-end-links">
                                        <a href="" class="text-decoration-underline d-inline-block me-3">Properties for rent</a>
                                        <a href="" class="text-decoration-underline d-inline-block">Properties for sale</a>
                                    </div>
                                    <div class="review-component-end-buttons">
                                        <a href="#" class="d-inline-block btn">
                      <span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat" viewBox="0 0 16 16">
                          <path d="M2.678 11.894a1 1 0 0 1 .287.801 10.97 10.97 0 0 1-.398 2c1.395-.323 2.247-.697 2.634-.893a1 1 0 0 1 .71-.074A8.06 8.06 0 0 0 8 14c3.996 0 7-2.807 7-6 0-3.192-3.004-6-7-6S1 4.808 1 8c0 1.468.617 2.83 1.678 3.894zm-.493 3.905a21.682 21.682 0 0 1-.713.129c-.2.032-.352-.176-.273-.362a9.68 9.68 0 0 0 .244-.637l.003-.01c.248-.72.45-1.548.524-2.319C.743 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.52.263-1.639.742-3.468 1.105z"/>
                        </svg>
                      </span>
                                            Read reviews
                                        </a>
                                        <button type="button" class="btn">Write review</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="review-component mb-4">
                                <div class="review-component-start">
                                    <div class="image">
                                        <img src="assets/images/card/building-review/map.png" alt="Map Image">
                                    </div>
                                </div>
                                <div class="review-component-end">
                                    <h4>Palace Tower 2</h4>
                                    <div class="review-component-end-point">
                                        <div class="poiont">
                                            <span>5/5</span>
                                        </div>
                                        <div>
                                            <a href="" class="d-inline-block text-decoration-underline">(5 reviews)</a>
                                        </div>
                                    </div>
                                    <div class="review-component-end-location">
                                        <div>
                      <span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                          <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                        </svg>
                      </span>
                                        </div>
                                        <div>
                                            <p class="mb-0">Dubai, Dubai Silicon Oasis, Palace Towers</p>
                                        </div>
                                    </div>
                                    <div class="review-component-end-links">
                                        <a href="" class="text-decoration-underline d-inline-block me-3">Properties for rent</a>
                                        <a href="" class="text-decoration-underline d-inline-block">Properties for sale</a>
                                    </div>
                                    <div class="review-component-end-buttons">
                                        <a href="#" class="d-inline-block btn">
                      <span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat" viewBox="0 0 16 16">
                          <path d="M2.678 11.894a1 1 0 0 1 .287.801 10.97 10.97 0 0 1-.398 2c1.395-.323 2.247-.697 2.634-.893a1 1 0 0 1 .71-.074A8.06 8.06 0 0 0 8 14c3.996 0 7-2.807 7-6 0-3.192-3.004-6-7-6S1 4.808 1 8c0 1.468.617 2.83 1.678 3.894zm-.493 3.905a21.682 21.682 0 0 1-.713.129c-.2.032-.352-.176-.273-.362a9.68 9.68 0 0 0 .244-.637l.003-.01c.248-.72.45-1.548.524-2.319C.743 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.52.263-1.639.742-3.468 1.105z"/>
                        </svg>
                      </span>
                                            Read reviews
                                        </a>
                                        <button type="button" class="btn">Write review</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="review-component mb-4">
                                <div class="review-component-start">
                                    <div class="image">
                                        <img src="assets/images/card/building-review/map.png" alt="Map Image">
                                    </div>
                                </div>
                                <div class="review-component-end">
                                    <h4>Palace Tower 2</h4>
                                    <div class="review-component-end-point">
                                        <div class="poiont">
                                            <span>5/5</span>
                                        </div>
                                        <div>
                                            <a href="" class="d-inline-block text-decoration-underline">(5 reviews)</a>
                                        </div>
                                    </div>
                                    <div class="review-component-end-location">
                                        <div>
                      <span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                          <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                        </svg>
                      </span>
                                        </div>
                                        <div>
                                            <p class="mb-0">Dubai, Dubai Silicon Oasis, Palace Towers</p>
                                        </div>
                                    </div>
                                    <div class="review-component-end-links">
                                        <a href="" class="text-decoration-underline d-inline-block me-3">Properties for rent</a>
                                        <a href="" class="text-decoration-underline d-inline-block">Properties for sale</a>
                                    </div>
                                    <div class="review-component-end-buttons">
                                        <a href="#" class="d-inline-block btn">
                      <span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat" viewBox="0 0 16 16">
                          <path d="M2.678 11.894a1 1 0 0 1 .287.801 10.97 10.97 0 0 1-.398 2c1.395-.323 2.247-.697 2.634-.893a1 1 0 0 1 .71-.074A8.06 8.06 0 0 0 8 14c3.996 0 7-2.807 7-6 0-3.192-3.004-6-7-6S1 4.808 1 8c0 1.468.617 2.83 1.678 3.894zm-.493 3.905a21.682 21.682 0 0 1-.713.129c-.2.032-.352-.176-.273-.362a9.68 9.68 0 0 0 .244-.637l.003-.01c.248-.72.45-1.548.524-2.319C.743 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.52.263-1.639.742-3.468 1.105z"/>
                        </svg>
                      </span>
                                            Read reviews
                                        </a>
                                        <button type="button" class="btn">Write review</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="review-component mb-4">
                                <div class="review-component-start">
                                    <div class="image">
                                        <img src="assets/images/card/building-review/map.png" alt="Map Image">
                                    </div>
                                </div>
                                <div class="review-component-end">
                                    <h4>Palace Tower 2</h4>
                                    <div class="review-component-end-point">
                                        <div class="poiont">
                                            <span>5/5</span>
                                        </div>
                                        <div>
                                            <a href="" class="d-inline-block text-decoration-underline">(5 reviews)</a>
                                        </div>
                                    </div>
                                    <div class="review-component-end-location">
                                        <div>
                      <span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                          <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                        </svg>
                      </span>
                                        </div>
                                        <div>
                                            <p class="mb-0">Dubai, Dubai Silicon Oasis, Palace Towers</p>
                                        </div>
                                    </div>
                                    <div class="review-component-end-links">
                                        <a href="" class="text-decoration-underline d-inline-block me-3">Properties for rent</a>
                                        <a href="" class="text-decoration-underline d-inline-block">Properties for sale</a>
                                    </div>
                                    <div class="review-component-end-buttons">
                                        <a href="#" class="d-inline-block btn">
                      <span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat" viewBox="0 0 16 16">
                          <path d="M2.678 11.894a1 1 0 0 1 .287.801 10.97 10.97 0 0 1-.398 2c1.395-.323 2.247-.697 2.634-.893a1 1 0 0 1 .71-.074A8.06 8.06 0 0 0 8 14c3.996 0 7-2.807 7-6 0-3.192-3.004-6-7-6S1 4.808 1 8c0 1.468.617 2.83 1.678 3.894zm-.493 3.905a21.682 21.682 0 0 1-.713.129c-.2.032-.352-.176-.273-.362a9.68 9.68 0 0 0 .244-.637l.003-.01c.248-.72.45-1.548.524-2.319C.743 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.52.263-1.639.742-3.468 1.105z"/>
                        </svg>
                      </span>
                                            Read reviews
                                        </a>
                                        <button type="button" class="btn">Write review</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="review-component mb-4">
                                <div class="review-component-start">
                                    <div class="image">
                                        <img src="assets/images/card/building-review/map.png" alt="Map Image">
                                    </div>
                                </div>
                                <div class="review-component-end">
                                    <h4>Palace Tower 2</h4>
                                    <div class="review-component-end-point">
                                        <div class="poiont">
                                            <span>5/5</span>
                                        </div>
                                        <div>
                                            <a href="" class="d-inline-block text-decoration-underline">(5 reviews)</a>
                                        </div>
                                    </div>
                                    <div class="review-component-end-location">
                                        <div>
                      <span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                          <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                        </svg>
                      </span>
                                        </div>
                                        <div>
                                            <p class="mb-0">Dubai, Dubai Silicon Oasis, Palace Towers</p>
                                        </div>
                                    </div>
                                    <div class="review-component-end-links">
                                        <a href="" class="text-decoration-underline d-inline-block me-3">Properties for rent</a>
                                        <a href="" class="text-decoration-underline d-inline-block">Properties for sale</a>
                                    </div>
                                    <div class="review-component-end-buttons">
                                        <a href="#" class="d-inline-block btn">
                      <span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat" viewBox="0 0 16 16">
                          <path d="M2.678 11.894a1 1 0 0 1 .287.801 10.97 10.97 0 0 1-.398 2c1.395-.323 2.247-.697 2.634-.893a1 1 0 0 1 .71-.074A8.06 8.06 0 0 0 8 14c3.996 0 7-2.807 7-6 0-3.192-3.004-6-7-6S1 4.808 1 8c0 1.468.617 2.83 1.678 3.894zm-.493 3.905a21.682 21.682 0 0 1-.713.129c-.2.032-.352-.176-.273-.362a9.68 9.68 0 0 0 .244-.637l.003-.01c.248-.72.45-1.548.524-2.319C.743 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.52.263-1.639.742-3.468 1.105z"/>
                        </svg>
                      </span>
                                            Read reviews
                                        </a>
                                        <button type="button" class="btn">Write review</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="review-component mb-4">
                                <div class="review-component-start">
                                    <div class="image">
                                        <img src="assets/images/card/building-review/map.png" alt="Map Image">
                                    </div>
                                </div>
                                <div class="review-component-end">
                                    <h4>Palace Tower 2</h4>
                                    <div class="review-component-end-point">
                                        <div class="poiont">
                                            <span>5/5</span>
                                        </div>
                                        <div>
                                            <a href="" class="d-inline-block text-decoration-underline">(5 reviews)</a>
                                        </div>
                                    </div>
                                    <div class="review-component-end-location">
                                        <div>
                      <span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                          <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                        </svg>
                      </span>
                                        </div>
                                        <div>
                                            <p class="mb-0">Dubai, Dubai Silicon Oasis, Palace Towers</p>
                                        </div>
                                    </div>
                                    <div class="review-component-end-links">
                                        <a href="" class="text-decoration-underline d-inline-block me-3">Properties for rent</a>
                                        <a href="" class="text-decoration-underline d-inline-block">Properties for sale</a>
                                    </div>
                                    <div class="review-component-end-buttons">
                                        <a href="#" class="d-inline-block btn">
                      <span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat" viewBox="0 0 16 16">
                          <path d="M2.678 11.894a1 1 0 0 1 .287.801 10.97 10.97 0 0 1-.398 2c1.395-.323 2.247-.697 2.634-.893a1 1 0 0 1 .71-.074A8.06 8.06 0 0 0 8 14c3.996 0 7-2.807 7-6 0-3.192-3.004-6-7-6S1 4.808 1 8c0 1.468.617 2.83 1.678 3.894zm-.493 3.905a21.682 21.682 0 0 1-.713.129c-.2.032-.352-.176-.273-.362a9.68 9.68 0 0 0 .244-.637l.003-.01c.248-.72.45-1.548.524-2.319C.743 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.52.263-1.639.742-3.468 1.105z"/>
                        </svg>
                      </span>
                                            Read reviews
                                        </a>
                                        <button type="button" class="btn">Write review</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <h5>Latest reviews</h5>
                    <div class="col-lg-12 col-md-6">
                        <div class="review-list mb-4">
                            <div class="review-list-top">
                                <div class="review-list-top-heading">
                                    <div class="poiont">
                                        <span>3.5/5</span>
                                    </div>
                                    <h6>Excellent building</h6>
                                </div>
                                <div class="review-list-body">
                                    <p>
                                        Generous layout and finishes , children and pet friendly, park ,restaurants shops and beach on your doorstep.
                                    </p>
                                </div>
                            </div>
                            <div class="review-list-bottom">
                                <span>Golden Mile 5</span>
                                <a href="">More reviews</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-6">
                        <div class="review-list mb-4">
                            <div class="review-list-top">
                                <div class="review-list-top-heading">
                                    <div class="poiont">
                                        <span>3.5/5</span>
                                    </div>
                                    <h6>Excellent building</h6>
                                </div>
                                <div class="review-list-body">
                                    <p>
                                        Generous layout and finishes , children and pet friendly, park ,restaurants shops and beach on your doorstep.
                                    </p>
                                </div>
                            </div>
                            <div class="review-list-bottom">
                                <span>Golden Mile 5</span>
                                <a href="">More reviews</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-6">
                        <div class="review-list mb-4">
                            <div class="review-list-top">
                                <div class="review-list-top-heading">
                                    <div class="poiont">
                                        <span>3.5/5</span>
                                    </div>
                                    <h6>Excellent building</h6>
                                </div>
                                <div class="review-list-body">
                                    <p>
                                        Generous layout and finishes , children and pet friendly, park ,restaurants shops and beach on your doorstep.
                                    </p>
                                </div>
                            </div>
                            <div class="review-list-bottom">
                                <span>Golden Mile 5</span>
                                <a href="">More reviews</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-6">
                        <div class="review-list mb-4">
                            <div class="review-list-top">
                                <div class="review-list-top-heading">
                                    <div class="poiont">
                                        <span>3.5/5</span>
                                    </div>
                                    <h6>Excellent building</h6>
                                </div>
                                <div class="review-list-body">
                                    <p>
                                        Generous layout and finishes , children and pet friendly, park ,restaurants shops and beach on your doorstep.
                                    </p>
                                </div>
                            </div>
                            <div class="review-list-bottom">
                                <span>Golden Mile 5</span>
                                <a href="">More reviews</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-6">
                        <div class="review-list mb-4">
                            <div class="review-list-top">
                                <div class="review-list-top-heading">
                                    <div class="poiont">
                                        <span>3.5/5</span>
                                    </div>
                                    <h6>Excellent building</h6>
                                </div>
                                <div class="review-list-body">
                                    <p>
                                        Generous layout and finishes , children and pet friendly, park ,restaurants shops and beach on your doorstep.
                                    </p>
                                </div>
                            </div>
                            <div class="review-list-bottom">
                                <span>Golden Mile 5</span>
                                <a href="">More reviews</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-6">
                        <div class="review-list mb-4">
                            <div class="review-list-top">
                                <div class="review-list-top-heading">
                                    <div class="poiont">
                                        <span>3.5/5</span>
                                    </div>
                                    <h6>Excellent building</h6>
                                </div>
                                <div class="review-list-body">
                                    <p>
                                        Generous layout and finishes , children and pet friendly, park ,restaurants shops and beach on your doorstep.
                                    </p>
                                </div>
                            </div>
                            <div class="review-list-bottom">
                                <span>Golden Mile 5</span>
                                <a href="">More reviews</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-6">
                        <div class="review-list mb-4">
                            <div class="review-list-top">
                                <div class="review-list-top-heading">
                                    <div class="poiont">
                                        <span>3.5/5</span>
                                    </div>
                                    <h6>Excellent building</h6>
                                </div>
                                <div class="review-list-body">
                                    <p>
                                        Generous layout and finishes , children and pet friendly, park ,restaurants shops and beach on your doorstep.
                                    </p>
                                </div>
                            </div>
                            <div class="review-list-bottom">
                                <span>Golden Mile 5</span>
                                <a href="">More reviews</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-6">
                        <div class="review-list mb-4">
                            <div class="review-list-top">
                                <div class="review-list-top-heading">
                                    <div class="poiont">
                                        <span>3.5/5</span>
                                    </div>
                                    <h6>Excellent building</h6>
                                </div>
                                <div class="review-list-body">
                                    <p>
                                        Generous layout and finishes , children and pet friendly, park ,restaurants shops and beach on your doorstep.
                                    </p>
                                </div>
                            </div>
                            <div class="review-list-bottom">
                                <span>Golden Mile 5</span>
                                <a href="">More reviews</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-6">
                        <div class="review-list mb-lg-4 mb-0">
                            <div class="review-list-top">
                                <div class="review-list-top-heading">
                                    <div class="poiont">
                                        <span>3.5/5</span>
                                    </div>
                                    <h6>Excellent building</h6>
                                </div>
                                <div class="review-list-body">
                                    <p>
                                        Generous layout and finishes , children and pet friendly, park ,restaurants shops and beach on your doorstep.
                                    </p>
                                </div>
                            </div>
                            <div class="review-list-bottom">
                                <span>Golden Mile 5</span>
                                <a href="">More reviews</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Building Review Component Ends Here -->
@endsection
