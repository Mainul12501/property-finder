@extends('front.master')

@section('title')
    Properties for sale
@endsection

@section('body')
    <!-- Rent Search Starts Here -->
    <section class="rent-search sticky-top" style="background-color: white; border-bottom: 0.1rem solid #dadada; z-index: 3;">
        <div class="container custom-container">
            <div class="col-lg-12">
                <form action="{{ route('home-page-search') }}" class="home-search px-0 py-2" method="get">

                    <div class="row g-2">
                        <div class="col-lg-4">
                            <div class="home-search-input">
                                {{--                                <input type="text" class="form-control" name="search_text" placeholder="City, community or building" style="min-height: 50px;">--}}
                                <input type="text" class="form-control" name="search_text" placeholder="Город, сообщество или здание" style="min-height: 50px;">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"></path>
                                      </svg>
                                </span>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="d-flex align-items-center justify-content-between flex-wrap rent-search-bottom">
                                <div class="home-search-select">
                                    <select class="form-select price-select rent-btn-active" name="property_ads_type_id">
                                        @foreach($propertyAdsTypes as $adsKey => $propertyAdsType)
                                            <option value="{{ $propertyAdsType->id }}" {{ $adsKey == 0 ? 'selected' : '' }}>{{ $propertyAdsType->type_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="home-search-select">
                                    <select class="form-select property-select" name="property_type_id">
                                        @foreach($propertyTypes as $typeKey => $propertyType)
                                            <option value="{{ $propertyType->id }}" {{ $typeKey == 0 ? 'selected' : '' }}>{{ $propertyType->type_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="home-search-select" id="bedBathRent">
                                    <button type="button" class="select_btn btn price-select">
                                        {{--Beds &amp; Baths--}}{{ Session::has('kaz') ? 'Төсектер' : '' }}{{ Session::has('rus') ? 'Кровати' : '' }}{{ Session::has('eng') ? 'Beds' : '' }}
                                        <span>
                                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"></path>
                                          </svg>
                                        </span>
                                    </button>
                                    <div class="dropdown-wrapper dropdown-wrapper-bed" id="bedBathsRent" style="display: none;">
                                        <div class="dropdown-wrapper-content">
                                            <div class="price-selector mt-3">
                                                <div class="price-selector-title">
                                                    <h4>{{ Session::has('kaz') ? 'Жатын бөлмелер' : '' }}{{ Session::has('rus') ? 'Спальни' : '' }}{{ Session::has('eng') ? 'Bedrooms' : '' }}</h4>
                                                </div>
                                                <div class="price-selector-buttons">
                                                    {{--                                                    <button type="button" class="btn">Studio</button>--}}
                                                    <button type="button" class="btn peice-selector-button">1</button>
                                                    <button type="button" class="btn peice-selector-button">2</button>
                                                    <button type="button" class="btn peice-selector-button">3</button>
                                                    <button type="button" class="btn peice-selector-button">4</button>
                                                    <button type="button" class="btn peice-selector-button">5</button>
                                                    <button type="button" class="btn peice-selector-button">6</button>
                                                    <button type="button" class="btn peice-selector-button">7</button>
                                                    <button type="button" class="btn peice-selector-button">7+</button>
                                                    <input type="hidden" name="bedrooms" id="bedRoomInput">
                                                </div>
                                            </div>
                                            <div class="price-selector mt-3">
                                                <div class="price-selector-title">
                                                    <h4>{{ Session::has('kaz') ? 'Жуынатын бөлмелер' : '' }}{{ Session::has('rus') ? 'Ванные комнаты' : '' }}{{ Session::has('eng') ? 'Bathrooms' : '' }}</h4>
                                                </div>
                                                <div class="price-selector-buttons">
                                                    <button type="button" class="btn home-bathroom-button">1</button>
                                                    <button type="button" class="btn home-bathroom-button">2</button>
                                                    <button type="button" class="btn home-bathroom-button">3</button>
                                                    <button type="button" class="btn home-bathroom-button">4</button>
                                                    <button type="button" class="btn home-bathroom-button">5</button>
                                                    <button type="button" class="btn home-bathroom-button">6</button>
                                                    <button type="button" class="btn home-bathroom-button">7</button>
                                                    <button type="button" class="btn home-bathroom-button">7+</button>
                                                    <input type="hidden" name="bathrooms" id="homeBathroom">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="dropdown-wrapper-footer">
                                        </div>
                                    </div>
                                </div>
                                <div class="home-search-select" >
                                    <button type="button" class="select_btn btn price-select" id="priceBtnSelect">
                                        {{ Session::has('kaz') ? 'Бағасы' : '' }}{{ Session::has('rus') ? 'Цена' : '' }}{{ Session::has('eng') ? 'Price' : '' }}
                                        <span>
                                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"></path>
                                          </svg>
                                        </span>
                                    </button>
                                    <div class="dropdown-wrapper" id="priceIdRent" style="display: none;">
                                        <div class="dropdown-wrapper-content">
                                            <div class="range-selector">
                                                <div class="range-selector-box">
                                                    {{--                                                    <input type="text" class="form-control" name="min_price" placeholder="Min. Price (AED)">--}}
                                                    <input type="text" class="form-control" name="min_price" placeholder="{{ Session::has('kaz') ? 'Мин. Бағасы' : '' }}{{ Session::has('rus') ? 'Мин. Цена' : '' }}{{ Session::has('eng') ? 'Min. Price' : '' }} (AED)">
                                                </div>
                                                <div class="range-selector-divider">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-dash" viewBox="0 0 16 16">
                                                        <path d="M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8z"></path>
                                                    </svg>
                                                </div>
                                                <div class="range-selector-box">
                                                    {{--                                                    <input type="text" class="form-control" name="max_price" placeholder="Max. Price (AED)">--}}
                                                    <input type="text" class="form-control" name="max_price" placeholder="{{ Session::has('kaz') ? 'Максималды. Бағасы' : '' }}{{ Session::has('rus') ? 'Максимум. Цена' : '' }}{{ Session::has('eng') ? 'Max. Price' : '' }} (AED)">
                                                </div>
                                            </div>
                                            <div class="price-selector">
                                                <div class="price-selector-title">
                                                    <h4>{{ Session::has('kaz') ? 'Жалдау мерзімі' : '' }}{{ Session::has('rus') ? 'Срок аренды' : '' }}{{ Session::has('eng') ? 'Rental period' : '' }}</h4>
                                                </div>
                                                <div class="price-selector-buttons" id="priceButtons">
                                                    <button type="button" class="btn active" id="yearlyRent"><!--Yearly-->{{ Session::has('kaz') ? 'жыл' : '' }}{{ Session::has('rus') ? 'Ежегодно' : '' }}{{ Session::has('eng') ? 'Yearly' : '' }}</button>
                                                    <button type="button" class="btn" id="monthlyRent"><!--Monthly-->{{ Session::has('kaz') ? 'ай' : '' }}{{ Session::has('rus') ? 'Ежемесячно' : '' }}{{ Session::has('eng') ? 'Monthly' : '' }}</button>
                                                    {{--                                                    <button type="button" class="btn" id="weeklyRent">Weekly</button>--}}
                                                    {{--                                                    <button type="button" class="btn" id="dailyRent">Daily</button>--}}
                                                </div>
                                            </div>
                                        </div>
                                        <div class="dropdown-wrapper-footer">
                                        </div>
                                    </div>
                                </div>

                                <div class="home-search-select" style="min-width: 120px;">
                                    {{--                                    <button type="button" class="select_btn btn price-select" data-bs-toggle="modal" data-bs-target="#filtersModal">--}}
                                    {{--                                        More Filters--}}
                                    {{--                                        <span>--}}
                                    {{--                                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16">--}}
                                    {{--                                            <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"></path>--}}
                                    {{--                                          </svg>--}}
                                    {{--                                        </span>--}}
                                    {{--                                    </button>--}}
                                </div>

                                <div class="rent-search-button">
                                    <button type="submit" class="btn search-btn fw-bold text-uppercase py-4">
                                        {{ Session::has('kaz') ? 'Табу' : '' }}{{ Session::has('rus') ? 'Находить' : '' }}{{ Session::has('eng') ? 'Find' : '' }}
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    @csrf
                </form>
            </div>
        </div>
    </section>
    <!-- Rent Search Ends Here -->

    <!-- Properties Rent Starts Here-->
    <section class="properties-rent">
        <div class="container custom-container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="properties-rent-top">
                        <h4>{{ Session::has('kaz') ? 'сатылатын мүлік' : '' }}{{ Session::has('rus') ? 'Недвижимость на продажу' : '' }}{{ Session::has('eng') ? 'Properties for sale' : '' }} </h4>
                        {{--                        <p class="mb-0">47705 results</p>--}}
                        <p class="mb-0">{!! count($properties) !!} {{ Session::has('kaz') ? 'нәтиже' : '' }}{{ Session::has('rus') ? 'результат' : '' }}{{ Session::has('eng') ? 'results' : '' }}</p>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="properties-rent-header flex-wrap">
                        <div class="properties-rent-header-start">
{{--                            <button class="btn me-3">--}}
{{--                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt" viewBox="0 0 16 16">--}}
{{--                                    <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z"/>--}}
{{--                                    <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>--}}
{{--                                </svg>--}}
{{--                                Просмотр карты--}}
{{--                            </button>--}}
{{--                            <button class="btn">--}}
{{--                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star" viewBox="0 0 16 16">--}}
{{--                                    <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"/>--}}
{{--                                </svg>--}}
{{--                                Сохранить поиск--}}
{{--                            </button>--}}
                        </div>
                        <div class="properties-rent-header-end">
                            <form action="" class="d-flex align-items-center">
                                <p class="me-2">{{ Session::has('kaz') ? 'Бағасы' : '' }}{{ Session::has('rus') ? 'Сортировать по' : '' }}{{ Session::has('eng') ? 'Sort by' : '' }}:</p>
                                <div>
                                    <form action="{{ route('short-properties') }}" method="post">
                                        @csrf
                                        <input type="hidden" name="from_page" value="search" />
                                        <select name="sort_by" class="form-select">
                                            <option value="featured"><!--Featured-->{{ Session::has('kaz') ? 'Таңдаулылар' : '' }}{{ Session::has('rus') ? 'Избранное' : '' }}{{ Session::has('eng') ? 'Featured' : '' }}</option>
                                            <option value="new"><!--Newest-->{{ Session::has('kaz') ? 'жаңасы' : '' }}{{ Session::has('rus') ? 'Новейшие' : '' }}{{ Session::has('eng') ? 'Newest' : '' }}</option>
                                            <option value="low"><!--Price(Low)-->{{ Session::has('kaz') ? 'Бағасы (төмен)' : '' }}{{ Session::has('rus') ? 'Цена(Низкая)' : '' }}{{ Session::has('eng') ? 'Price(Low)' : '' }}</option>
                                            <option value="high"><!--Price(High)-->{{ Session::has('kaz') ? 'Бағасы (жоғары)' : '' }}{{ Session::has('rus') ? 'Цена (высокая)' : '' }}{{ Session::has('eng') ? 'Price(High)' : '' }}</option>
                                        </select>
                                    </form>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            @if(count($propertyTypes)> 0)
                <div class="col-lg-12 d-none d-lg-block">
                    <div class="properties-rent-options">
                        <div class="row">
                            @foreach($propertyTypes as $key => $propertyType)
                                <div class="col-lg-3 col-md-3 {{ $key > 6 ? '.hide-me-buddy' : '' }}">
                                    <div class="properties-rent-options-wizard">
                                        <div class="properties-rent-options-single">
                                            <a href="">{{ $propertyType->type_name }}</a>
                                            <p>({!! count($propertyType->property) !!})</p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        @if(count($propertyTypes)>7)
                            <div class="row justify-content-end">
                                <div class="col-lg-2">
                                    <div class="d-flex justify-content-end">
                                        <div class="properties-rent-options-bottom">
                                            <div>
                                                <button type="button" class="btn" id="showAllBtn">{{--Show All--}}{{ Session::has('kaz') ? 'барлығын ' : '' }}{{ Session::has('rus') ? 'Показать все' : '' }}{{ Session::has('eng') ? 'Show All' : '' }}</button>
                                            </div>
                                            <div>
                                                <button type="button" class="btn" id="showlessBtn" style="display: none;">{{--Show less--}}{{ Session::has('kaz') ? 'Азырақ көрсету ' : '' }}{{ Session::has('rus') ? 'Показывай меньше' : '' }}{{ Session::has('eng') ? 'Show less' : '' }}</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            @endif
        </div>
    </section>
    <!-- Properties Rent Ends Here-->

    <!-- Rent Contents Starts Here-->

        <section class="rent-contents">
            <div class="container custom-container">
                <div class="row rent-contents-row">
                    <div class="col-lg-9 mb-4 mb-lg-0">
                    @if(count($properties)>0)
                        @foreach($properties as $property)
                            <!-- Rent Contents Component Starts Here -->
                                <a href="{{ route('property-details', ['id' => $property->id, 'slug' => str_replace('/','-',$property->slug)]) }}" class="d-block mb-4 rent-component">
                                    <!-- Rent Featured Starts Here -->
                                    <div class="rent-featured">
                                        <div class="rent-featured-start">
                                            <div class="rent-featured-start-slider">
                                                <!-- Rent Slider Area Starts Here -->
                                                <div id="carouselTwo" class="carousel slide" data-bs-ride="carousel" data-bs-interval="false">
                                                    <div class="carousel-indicators">
                                                        @foreach($property->subImages as $index => $subImageKey)
                                                            <button type="button" data-bs-target="#carouselTwo" data-bs-slide-to="{{ $index }}" class="{{ $index == 0 ? 'active' : '' }}" aria-current="true" aria-label="Slide {{ $index+1 }}"></button>
                                                        @endforeach
                                                        {{--                                                    <button type="button" data-bs-target="#carouselTwo" data-bs-slide-to="1" aria-label="Slide 2"></button>--}}
                                                        {{--                                                    <button type="button" data-bs-target="#carouselTwo" data-bs-slide-to="2" aria-label="Slide 3"></button>--}}
                                                    </div>
                                                    <div class="carousel-inner">
                                                        @foreach($property->subImages as $arrayKey => $subImage)
                                                            <div class="carousel-item {{ $arrayKey == 0 ? 'active' : '' }}">
                                                                <img src="{{ asset($subImage->big_img_url) }}" class="d-block w-100" style="min-width: 275px; height: 200px;" alt="{{ $property->property_title }}">
                                                            </div>
                                                        @endforeach
                                                        {{--                                                <div class="carousel-item">--}}
                                                        {{--                                                    <img src="{{ asset('/') }}assets/images/card/rent/02.jpg" class="d-block w-100" alt="Rent Image">--}}
                                                        {{--                                                </div>--}}
                                                        {{--                                                <div class="carousel-item">--}}
                                                        {{--                                                    <img src="{{ asset('/') }}assets/images/card/rent/03.jpg" class="d-block w-100" alt="Rent Image">--}}
                                                        {{--                                                </div>--}}
                                                    </div>
                                                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselTwo" data-bs-slide="prev">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-left"><polyline points="15 18 9 12 15 6"></polyline></svg>
                                                        <span class="visually-hidden">Previous</span>
                                                    </button>
                                                    <button class="carousel-control-next" type="button" data-bs-target="#carouselTwo" data-bs-slide="next">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                                                        <span class="visually-hidden">Next</span>
                                                    </button>
                                                </div>
                                                <!-- Rent Slider Area Ends Here -->
                                            </div>
                                            @if($property->is_verified == 1)
                                                <div class="rent-featured-start-badge">
                                                    <span class="text-uppercase">{{ Session::has('kaz') ? 'тексерілді ' : '' }}{{ Session::has('rus') ? 'проверено' : '' }}{{ Session::has('eng') ? 'verified' : '' }}</span>
                                                </div>
                                            @endif
                                            @if($property->panoramic_360_view != null)
                                                <div class="rent-featured-start-icon">
                                                    <img src="{{ asset('/') }}assets/images/property/icon/360degrees.png" data-bs-toggle="tooltip" data-bs-placement="top" title="360 Tours offer you a static panoramic view of the property." alt="360-degree-Icon">
                                                </div>
                                            @endif
                                            @if($property->panoramic_360_view == null && $property->property_video_url != null)
                                                <div class="rent-featured-start-icon">
                                                    <img src="{{ asset('/') }}assets/images/property/icon/video-icon.png" style="height: 24px; width: 24px;" data-bs-toggle="tooltip" data-bs-placement="top" title="Video Tours are pre-recorded video walk-throughs of the property available at all times." alt="360-degree-Icon">
                                                </div>
                                            @endif
                                        </div>
                                        <div class="rent-featured-end">
                                            <div class="rent-featured-mid">
                                                <div class="rent-featured-mid-title">
                                                    <h4>{{ number_format($property->property_price) }} AED</h4>
                                                    <h5>{{ $property->property_title }}</h5>
                                                </div>
                                                <div class="rent-featured-mid-amenities">
                                                    <div class="rent-featured-mid-amenities-single">
                                                        <p>{!! $property->propertyType->type_name !!}</p>
                                                    </div>
                                                    <div class="rent-featured-mid-amenities-single">
                                                        <p>
                                                              <span>
                                                                <img src="{{ asset('/') }}assets/images/property/icon/bed.png" alt="Icon">
                                                              </span>
                                                            {{ $property->bedrooms }}
                                                        </p>
                                                    </div>
                                                    <div class="rent-featured-mid-amenities-single">
                                                        <p>
                                                              <span>
                                                                  <img src="{{ asset('/') }}assets/images/property/icon/bathtub.png" alt="Icon" class="d-inline-block" style="margin-top: -5px;">
                                                              </span>
                                                            {{ $property->bathrooms }}
                                                        </p>
                                                    </div>
                                                    <div class="rent-featured-mid-amenities-single">
                                                        <p>{!! $property->property_size !!} кв.фут</p>
                                                    </div>
                                                </div>
                                                <div class="rent-featured-mid-location">
                                                    <p>
                                                            <span>
                                                              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt" viewBox="0 0 16 16">
                                                                <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z"/>
                                                                <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                                                              </svg>
                                                            </span>
                                                        {!! $property->location_area !!}, {!! $property->location_city !!}, {!! $property->location_country !!}
                                                    </p>
                                                </div>
                                                <div class="rent-featured-mid-buttons">
                                                    <div class="rent-featured-mid-buttons-single">
                                                        <button type="button" class="btn" onclick="directCall({!! $property->id !!})">
                                                                <span>
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="#007ea8" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-phone"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                                                                  </span>
                                                            {{ Session::has('kaz') ? 'Қоңырау ' : '' }}{{ Session::has('rus') ? 'Вызов' : '' }}{{ Session::has('eng') ? 'Call' : '' }}
                                                        </button>
                                                    </div>
                                                    <div class="rent-featured-mid-buttons-single">
                                                        <button type="button" class="btn" onclick="mail({{ $property->id }})">
                                                              <span>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
                                                                  <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z"/>
                                                                </svg>
                                                              </span>
                                                            {{ Session::has('kaz') ? 'пошта ' : '' }}{{ Session::has('rus') ? 'Эл. адрес' : '' }}{{ Session::has('eng') ? 'Email' : '' }}
                                                        </button>
                                                    </div>
                                                    <div class="rent-featured-mid-buttons-single">
                                                        <button type="button" class="btn" onclick="whatsapp({{ $property->id }})">
                                                              <span>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                                                                  <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/>
                                                                </svg>
                                                              </span>
                                                            WhatsApp
                                                        </button>
                                                    </div>
                                                    {{--                                                favourite icon start--}}
                                                    {{--                                                <div class="rent-featured-mid-buttons-single">--}}
                                                    {{--                                                    <button type="button" class="btn">--}}
                                                    {{--                                                      <span class="me-0">--}}
                                                    {{--                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">--}}
                                                    {{--                                                          <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>--}}
                                                    {{--                                                        </svg>--}}
                                                    {{--                                                      </span>--}}
                                                    {{--                                                    </button>--}}
                                                    {{--                                                </div>--}}
                                                    {{--                                                favourite icon end--}}
                                                    {{--                                                share report icon start--}}
                                                    {{--                                                <div class="rent-featured-mid-buttons-single">--}}
                                                    {{--                                                    <button type="button" class="btn" id="dotButton2">--}}
                                                    {{--                                                      <span class="me-0">--}}
                                                    {{--                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots" viewBox="0 0 16 16">--}}
                                                    {{--                                                          <path d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z"/>--}}
                                                    {{--                                                        </svg>--}}
                                                    {{--                                                      </span>--}}
                                                    {{--                                                    </button>--}}
                                                    {{--                                                    <div class="dot-button-dropdown" id="dotButtonDropdown2" style="display: none;">--}}
                                                    {{--                                                        <button type="button" class="btn dot-button-dropdown-button">--}}
                                                    {{--                                                            <svg height="24" viewBox="0 0 24 24" width="24" fill="none">--}}
                                                    {{--                                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M10.0135 4.5C10.0135 4.22386 9.78968 4 9.51354 4H8.25L8.04346 4.00521C5.78547 4.11932 4 6.09457 4 8.5V15.5L4.00488 15.7175C4.11189 18.0955 5.96457 20 8.25 20H15.75L15.9565 19.9948C18.2145 19.8807 20 17.9054 20 15.5V14.6072L19.9919 14.5173C19.9496 14.2841 19.7455 14.1072 19.5 14.1072C19.2239 14.1072 19 14.3311 19 14.6072V15.5L18.9952 15.6927C18.9021 17.5422 17.4779 19 15.75 19H8.25L8.07238 18.9948C6.36667 18.8956 5 17.3753 5 15.5V8.5L5.00483 8.30731C5.09786 6.45778 6.52213 5 8.25 5H9.51354L9.60341 4.99194C9.83666 4.94961 10.0135 4.74546 10.0135 4.5ZM16.4945 4.54821C16.664 4.37067 16.9329 4.34515 17.1308 4.47559L17.2014 4.53183L19.7383 6.95378C19.8942 7.03844 20 7.2036 20 7.39348L19.9999 7.40557C20.0024 7.51329 19.9704 7.62165 19.9039 7.71247L19.8418 7.78256L17.1979 10.2584C16.9964 10.4472 16.6799 10.4368 16.4912 10.2352C16.3234 10.0561 16.313 9.78617 16.4543 9.59583L16.5144 9.52852L18.2589 7.89348H15.5076C12.9522 7.89348 10.755 9.68821 10.6412 12.7917L10.6365 13.0462V14.855C10.6365 15.1311 10.4127 15.355 10.1365 15.355C9.89108 15.355 9.68693 15.1781 9.6446 14.9449L9.63654 14.855V13.0462C9.63654 9.28028 12.2425 6.99879 15.2941 6.89703L15.5076 6.89348H18.2273L16.5109 5.25512C16.3333 5.08562 16.3078 4.81672 16.4383 4.61878L16.4945 4.54821Z" fill="currentColor"></path>--}}
                                                    {{--                                                            </svg>--}}
                                                    {{--                                                            <span>Share</span>--}}
                                                    {{--                                                        </button>--}}
                                                    {{--                                                        <button type="button" class="btn dot-button-dropdown-button">--}}
                                                    {{--                                                            <svg height="24" viewBox="0 0 24 24" width="24">--}}
                                                    {{--                                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M7.98311 20C7.98311 20.5523 6.86761 21 5.49156 21C4.11551 21 3 20.5523 3 20C3 19.5162 3.85598 19.1127 4.99325 19.02V5H11.0228C11.2537 3.85888 12.2591 3 13.4645 3H17.9493L21 7.5L17.9493 12H11.9198C11.6889 13.1411 10.6834 14 9.47805 14H5.98987V19.02C7.12714 19.1127 7.98311 19.5162 7.98311 20ZM17.4219 11L19.7947 7.5L17.4219 4H13.4645C12.6389 4 11.9696 4.67157 11.9696 5.5V11H17.4219ZM10.973 6H5.98987V13H9.47805C10.3037 13 10.973 12.3284 10.973 11.5V6Z" fill="currentColor"></path>--}}
                                                    {{--                                                            </svg>--}}
                                                    {{--                                                            <span>Report</span>--}}
                                                    {{--                                                        </button>--}}
                                                    {{--                                                    </div>--}}
                                                    {{--                                                </div>--}}
                                                    {{--                                                share report icon end--}}
                                                </div>

                                            </div>

                                            <div class="rent-featured-company">
                                                <p>{{ $property->propertyPromotionType->name }}</p>
                                                <div class="rent-featured-company-logo">
                                                    <img src="{{ asset($property->company->big_logo_image) }}" alt="{{ asset($property->company->name) }}" class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Rent Featured Ends Here -->
                                </a>
                                <div class="" style="display: none">
                                    <a href="tel:{{ isset($property->agent->phone) ? $property->agent->phone : $property->company->phone_number }}" id="call{{ $property->id }}">call</a>
                                    <a href="mailto:{{ isset($property->agent->email) ? $property->agent->email : $property->company->email }}" id="mail{{ $property->id }}">mail</a>
                                    <a href="https://api.whatsapp.com/send?phone={{ isset($property->agent->whatsapp_number) ? $property->agent->whatsapp_number : $property->company->whatsapp_number }}" target="_blank" id="whatsapp{{ $property->id }}">whatsapp</a>
                                </div>
                                <!-- Rent Contents Component Ends Here -->
                            @endforeach
                    @else
                        <span class="text-danger">{{ Session::has('kaz') ? 'Кешіріңіз... Сипаттар табылмады. ' : '' }}{{ Session::has('rus') ? 'Извините... Свойства не найдены.' : '' }}{{ Session::has('eng') ? 'Sorry... Properties not found.' : '' }}</span>
                    @endif

                        @if(count($properties) > 9)
                            <div class="row mt-4">
                                <div class="col-lg-12">
                                    {{--                                        <div class="pagination-area justify-content-center">--}}
                                    {{--                                            <div class="pagination-area-end">--}}
                                    {{--                                                <a href="" class="active">1</a>--}}
                                    {{--                                                <a href="">2</a>--}}
                                    {{--                                                <a href="">3</a>--}}
                                    {{--                                                <a href="">4</a>--}}
                                    {{--                                                <a href="">5</a>--}}
                                    {{--                                                <a href="" class="next">--}}
                                    {{--                                                    Next--}}
                                    {{--                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">--}}
                                    {{--                                                        <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"></path>--}}
                                    {{--                                                    </svg>--}}
                                    {{--                                                </a>--}}
                                    {{--                                            </div>--}}
                                    {{--                                        </div>--}}
                                    {{ $properties->links() }}
                                </div>
                            </div>
                        @endif

                    </div>
                    <div class="col-lg-3 ps-lg-4">

                    </div>
                </div>
            </div>
        </section>

    <!-- Rent Contents Ends Here-->


@endsection

@section('front-js')
    <script>
        function directCall(propertyId)
        {
            event.preventDefault();
            document.getElementById('call'+propertyId).click();
        }

        function mail(propertyId)
        {
            event.preventDefault();
            // $('#mail'+propertyId).trigger('click');
            document.getElementById('mail'+propertyId).click();
        }
        function whatsapp(propertyId)
        {
            event.preventDefault();
            // $('#mail'+propertyId).trigger('click');
            document.getElementById('whatsapp'+propertyId).click();
        }

    </script>
@endsection
