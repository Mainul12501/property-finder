@extends('front.master')

@section('title')
    Property Finder - UAE's number one property website for properties for sale and to rent.
@endsection

@section('body')
    <!-- Banner Starts Here -->
    <section class="banner-area" style="background-image: url({!! isset($siteSetting)? asset($siteSetting->site_banner) : asset('./assets/images/banner/01.jpg') !!});">
        <div class="container custom-container">
            <div class="row justify-content-center">
                <h1 class="text-center mb-5">{{ Session::has('kaz') ? 'Болашақ үйіңізді табыңыз' : '' }}{{ Session::has('rus') ? 'Найдите свой будущий дом' : '' }}{{ Session::has('eng') ? 'Find your future home' : '' }}</h1>
                <div class="col-lg-12 home-search" style="z-index: 2;">
                    <form action="{{ route('home-page-search') }}" class="" method="get"> <!-- incase add this class: home-search-->
                        <div class="home-search-top" id="bannerButton">
                            <button type="button" class="btn active" id="rentBtn">{{ Session::has('kaz') ? 'Жалға алу' : '' }}{{ Session::has('rus') ? 'Аренда' : '' }}{{ Session::has('eng') ? 'Rent' : '' }}</button>
                            <button type="button" class="btn" id="buyBtn">{{ Session::has('kaz') ? 'Сатып' : '' }}{{ Session::has('rus') ? 'Купить' : '' }}{{ Session::has('eng') ? 'Buy' : '' }}</button>
                        </div>
                        <!-- Banner Components Starts Here -->
                        <div class="row position-relative"> <!-- incase add this class: banner-components mb-2-->
                            <div class="home-search-input col-sm-5" id="homeSearchInputTop">
{{--                                <input type="text" class="form-control" name="search_text" required placeholder="City, community or building">--}}
                                <input type="text" class="form-control" name="search_text" required placeholder="{{ Session::has('kaz') ? 'Қала, қауымдастық немесе ғимарат' : '' }}{{ Session::has('rus') ? 'Город, сообщество или здание' : '' }}{{ Session::has('eng') ? 'City, community or building' : '' }}">
                                <input type="hidden" id="reqType" name="req_type" value="rent">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                      <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                                    </svg>
                                </span>
                            </div>
                            <div class="home-search-select col-sm-2 col-4 home-search-m-t">
                                <select class="form-select property-select" name="property_type_id">
                                    <option disabled>{{ Session::has('kaz') ? '<--- Меншік түрін таңдаңыз --->' : '' }}{{ Session::has('rus') ? '<--- Выберите тип недвижимости --->' : '' }}{{ Session::has('eng') ? '<--- Select property type --->' : '' }}</option>
                                    @foreach($propertyTypes as $propertyType)
                                        <option value="{{ $propertyType->id }}">{{ $propertyType->type_name }}</option>
                                    @endforeach
                                </select>
                            </div>
{{--                            price div start  --}}
                            <div class="home-search-select col-sm-2 col-4 home-search-m-t" style="display: none;" >
                                <button class="select_btn btn price-select form-control ms-0" type="button" style="min-width: 115px; margin-left: 4px;" id="price1st">
                                    {{ Session::has('kaz') ? 'Бағасы' : '' }}{{ Session::has('rus') ? 'Цена' : '' }}{{ Session::has('eng') ? 'Price' : '' }}
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
                                    </svg>
                                </button>
                                <div class="dropdown-wrapper" id="priceId" style="display: none;">
                                    <div class="dropdown-wrapper-content">
                                        <div class="range-selector">
                                            <div class="range-selector-box">
                                                {{--                                                <input type="number" class="form-control" id="minPrice1Input" name="min_price" placeholder="Min. Price (AED)">--}}
                                                <input type="number" class="form-control" id="minPrice1Input" name="min_price" placeholder="{{ Session::has('kaz') ? 'Мин. Бағасы' : '' }}{{ Session::has('rus') ? 'Мин. Цена' : '' }}{{ Session::has('eng') ? 'Min. Price' : '' }} ({{ Session::has('kaz') ? 'Tenge' : 'AED' }})">
                                            </div>
                                            <div class="range-selector-divider">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-dash" viewBox="0 0 16 16">
                                                    <path d="M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8z"></path>
                                                </svg>
                                            </div>
                                            <div class="range-selector-box">
                                                <input type="number" class="form-control" id="maxPrice1Input" name="max_price" placeholder="{{ Session::has('kaz') ? 'Максималды. Бағасы' : '' }}{{ Session::has('rus') ? 'Максимум. Цена' : '' }}{{ Session::has('eng') ? 'Max. Price' : '' }} ({{ Session::has('kaz') ? 'Tenge' : 'AED' }})">
                                                {{--                                                <input type="number" class="form-control" id="maxPrice1Input" name="max_price" placeholder="Max. Price (AED)">--}}
                                            </div>
                                        </div>
                                        <div class="price-selector">
                                            <div class="price-selector-title">
                                                <h4>{{ Session::has('kaz') ? 'Жалдау мерзімі' : '' }}{{ Session::has('rus') ? 'Срок аренды' : '' }}{{ Session::has('eng') ? 'Rental Period' : '' }}</h4>
                                            </div>
                                            <div class="price-selector-buttons" id="">
                                                <button type="button" class="btn active" id="monthly">{{ Session::has('kaz') ? 'Ай' : '' }}{{ Session::has('rus') ? 'Ежемесячно' : '' }}{{ Session::has('eng') ? 'Monthly' : '' }}</button>
                                                <button type="button" class="btn" id="yearly">{{ Session::has('kaz') ? 'жыл' : '' }}{{ Session::has('rus') ? 'Ежегодно' : '' }}{{ Session::has('eng') ? 'Annually' : '' }}</button>
                                                <input type="hidden" name="rental_period" id="rentalPeriod">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="dropdown-wrapper-footer">
                                    </div>
                                </div>
                            </div>
{{--                            price div end--}}
{{--                            bed bath start--}}
                            <div class="home-search-select col-sm-2 col-4 home-search-m-t" id="bedBath" style="">
                                <button class="select_btn btn price-select form-control" type="button" >
{{--                                    Кровати и ванны--}}
                                    {{ Session::has('kaz') ? 'Төсектер' : '' }}{{ Session::has('rus') ? 'Кровати' : '' }}{{ Session::has('eng') ? 'Beds' : '' }}
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
                                    </svg>
                                </button>
                                <div class="dropdown-wrapper dropdown-wrapper-bed" style="left: unset; right: 0px; display: none;" id="bedBaths">
                                    <div class="dropdown-wrapper-content">
                                        <div class="price-selector mt-3">
                                            <div class="price-selector-title">
                                                <h4>{{ Session::has('kaz') ? 'Жатын бөлмелер' : '' }}{{ Session::has('rus') ? 'Спальни' : '' }}{{ Session::has('eng') ? 'Bedrooms' : '' }}</h4>
                                            </div>
                                            <div class="price-selector-buttons">
{{--                                                <button type="button" class="btn peice-selector-button">Студия</button>--}}
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
{{--                            bed bath end--}}
{{--                            price div start--}}
                            <div class="home-search-select col-sm-2 col-4 home-search-m-t" id="price2ndDiv">
                                <button class="select_btn btn price-select form-control" type="button" id="price2nd">
                                    <!--Price-->{{ Session::has('kaz') ? 'Бағасы' : '' }}{{ Session::has('rus') ? 'Цена' : '' }}{{ Session::has('eng') ? 'Price' : '' }}
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
                                    </svg>
                                </button>
                                <div class="dropdown-wrapper" id="priceId2" style="left: unset; right: 0px; display: none;">
                                    <div class="dropdown-wrapper-content">
                                        <div class="range-selector">
                                            <div class="range-selector-box">
                                                <input type="number" name="min_price" id="minPrice2Input" class="form-control" placeholder="{{ Session::has('kaz') ? 'Мин. Бағасы' : '' }}{{ Session::has('rus') ? 'Мин. Цена' : '' }}{{ Session::has('eng') ? 'Min. Price' : '' }} ({{ Session::has('kaz') ? 'Tenge' : 'AED' }})">
                                            </div>
                                            <div class="range-selector-divider">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-dash" viewBox="0 0 16 16">
                                                    <path d="M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8z"></path>
                                                </svg>
                                            </div>
                                            <div class="range-selector-box">
                                                <input type="text" name="max_price" id="maxPrice2Input" class="form-control" placeholder="{{ Session::has('kaz') ? 'Максималды. Бағасы' : '' }}{{ Session::has('rus') ? 'Максимум. Цена' : '' }}{{ Session::has('eng') ? 'Max. Price' : '' }} ({{ Session::has('kaz') ? 'Tenge' : 'AED' }})">
                                            </div>
                                        </div>
                                        <div class="price-selector">
                                            <div class="price-selector-title">
                                                <h4>{{ Session::has('kaz') ? 'Жалдау мерзімі' : '' }}{{ Session::has('rus') ? 'Срок аренды' : '' }}{{ Session::has('eng') ? 'Rental period' : '' }}</h4>
                                            </div>
                                            <div class="price-selector-buttons" id="">
                                                <button type="button" class="btn active" id="yearly2">{{ Session::has('kaz') ? 'жыл' : '' }}{{ Session::has('rus') ? 'Ежегодно' : '' }}{{ Session::has('eng') ? 'Annually' : '' }}</button>
                                                <button type="button" class="btn" id="monthly2">{{ Session::has('kaz') ? 'ай' : '' }}{{ Session::has('rus') ? 'Ежемесячно' : '' }}{{ Session::has('eng') ? 'Monthly' : '' }}</button>
{{--                                                <button type="button" class="btn" id="weekly">Weekly</button>--}}
{{--                                                <button type="button" class="btn" id="daily">Daily</button>--}}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="dropdown-wrapper-footer">
                                    </div>
                                </div>
                            </div>
{{--                            price div end--}}
{{--                            size div start--}}
                            <div class="home-search-select col-sm-2 col-4 home-search-m-t" style="display: none;"  id="areaSelect">
                                <button class="select_btn btn price-select form-control" type="button">
                                    {{ Session::has('kaz') ? 'Шаршы' : '' }}{{ Session::has('rus') ? 'Площадь' : '' }}{{ Session::has('eng') ? 'Square' : '' }} (кв. фут)
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
                                    </svg>
                                </button>
                                <div class="dropdown-wrapper" style="right: 0%; left: unset; display: none;" id="areaId">
                                    <div class="dropdown-wrapper-content">
                                        <div class="range-selector">
                                            <div class="range-selector-box">
{{--                                                <input type="number" class="form-control" name="min_size" id="minArea1" placeholder="Min. Area">--}}
                                                <input type="number" class="form-control" name="min_size" id="minArea1" placeholder="{{ Session::has('kaz') ? 'Мин. Шаршы' : '' }}{{ Session::has('rus') ? 'Мин. Площадь' : '' }}{{ Session::has('eng') ? 'Min. Size' : '' }}">
                                            </div>
                                            <div class="range-selector-divider">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-dash" viewBox="0 0 16 16">
                                                    <path d="M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8z"></path>
                                                </svg>
                                            </div>
                                            <div class="range-selector-box">
{{--                                                <input type="number" class="form-control" name="max_size" id="maxArea1" placeholder="Max. Area">--}}
                                                <input type="number" class="form-control" name="max_size" id="maxArea1" placeholder="{{ Session::has('kaz') ? 'Максималды' : '' }}{{ Session::has('rus') ? 'Максимум. Площадь' : '' }}{{ Session::has('eng') ? 'Max Size' : '' }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="dropdown-wrapper-footer">
                                    </div>
                                </div>
                            </div>
{{--                            size div end--}}
                            <div class="home-search-button col-sm-1" id="homeSearchSubmitBtn">
                                <button type="submit" class="btn search-btn">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <!-- Banner Components Ends Here -->
                        <!-- Banner Components Second Starts Here -->
                        <div class=" my-3 row" id="homeInput" style="display: none;"> <!-- incase - add this class : banner-components-second -->
                            <div class=" col-sm-6 col-md-2 col-6">
                                <select class="form-select property-select" name="is_furnished" id="allFurnishing">
                                    <option value="1" selected>{{--All furnishings--}}{{ Session::has('kaz') ? 'Барлық жиһаз' : '' }}{{ Session::has('rus') ? 'Вся мебель' : '' }}{{ Session::has('eng') ? 'All furnishings' : '' }}</option>
                                    <option value="0">{{--Not furnished--}}{{ Session::has('kaz') ? 'Жиһазсыз' : '' }}{{ Session::has('rus') ? 'Без мебели' : '' }}{{ Session::has('eng') ? 'Not furnished' : '' }}</option>
                                </select>
                            </div>   <!-- incase - add this class : home-search-select -->
                            <div class=" col-sm-6 col-md-3 col-6">
                                <button class="select_btn btn price-select" type="button" id="area" style="width: 100%;">
                                    {{ Session::has('kaz') ? 'Ауданы (шаршы фут)' : '' }}{{ Session::has('rus') ? 'Площадь (кв. фут)' : '' }}{{ Session::has('eng') ? 'Area (square feet)' : '' }}
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"></path>
                                    </svg>
                                </button>
                                <div class="dropdown-wrapper" style="display: none;" id="areaButton">
                                    <div class="dropdown-wrapper-content">
                                        <div class="range-selector">
                                            <div class="range-selector-box">
                                                <input type="number" class="form-control" name="min_size" id="minArea2" placeholder="{{ Session::has('kaz') ? 'Мин. Шаршы' : '' }}{{ Session::has('rus') ? 'Мин. Площадь' : '' }}{{ Session::has('eng') ? 'Min. Size' : '' }}">
                                            </div>
                                            <div class="range-selector-divider">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-dash" viewBox="0 0 16 16">
                                                    <path d="M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8z"></path>
                                                </svg>
                                            </div>
                                            <div class="range-selector-box">
                                                <input type="text" class="form-control" name="max_size" id="maxArea2" placeholder="{{ Session::has('kaz') ? 'Максималды. Шаршы' : '' }}{{ Session::has('rus') ? 'Максимум. Площадь' : '' }}{{ Session::has('eng') ? 'Max. Size' : '' }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="dropdown-wrapper-footer">
                                    </div>
                                </div>
                            </div>  <!-- incase - add this class : home-search-select -->
{{--                            aminities--}}
{{--                            <div class="home-search-select">--}}
{{--                                <button class="select_btn btn price-select" type="button" id="amenities">--}}
{{--                                    Удобства--}}
{{--                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16">--}}
{{--                                        <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"></path>--}}
{{--                                    </svg>--}}
{{--                                </button>--}}
{{--                                <div class="dropdown-wrapper dropdown-wrapper-amenities" style="display: none;" id="amenitiesButton">--}}
{{--                                    <div class="dropdown-wrapper-content">--}}
{{--                                        <div class="home-search-input">--}}
{{--                                            <input type="text" class="form-control" placeholder="Search amenities...">--}}
{{--                                            <span>--}}
{{--                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">--}}
{{--                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"></path>--}}
{{--                      </svg>--}}
{{--                    </span>--}}
{{--                                        </div>--}}
{{--                                        <div class="dropdown-wrapper-amenities-checkbox-area">--}}
{{--                                            <div class="dropdown-wrapper-amenities-checkbox-area-single">--}}
{{--                                                <div>--}}
{{--                                                    <div class="form-check">--}}
{{--                                                        <input class="form-check-input" type="checkbox" value="">--}}
{{--                                                        <label class="form-check-label">--}}
{{--                                                            Центральный кондиционер--}}
{{--                                                        </label>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <div>--}}
{{--                                                    <div class="form-check">--}}
{{--                                                        <input class="form-check-input" type="checkbox" value="">--}}
{{--                                                        <label class="form-check-label">--}}
{{--                                                            Балкон--}}
{{--                                                        </label>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <div class="dropdown-wrapper-amenities-checkbox-area-single">--}}
{{--                                                <div class="form-check">--}}
{{--                                                    <input class="form-check-input" type="checkbox" value="">--}}
{{--                                                    <label class="form-check-label">--}}
{{--                                                        Central A/C--}}
{{--                                                    </label>--}}
{{--                                                </div>--}}
{{--                                                <div class="form-check">--}}
{{--                                                    <input class="form-check-input" type="checkbox" value="">--}}
{{--                                                    <label class="form-check-label">--}}
{{--                                                        Balcony--}}
{{--                                                    </label>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="dropdown-wrapper-footer">--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            2nd search text box div--}}
                            <div class="home-search-input me-0 col-sm-12 col-md-7 home-search-m-t" id="placeholder">
                                <input type="text" class="form-control" name="extra_content" placeholder="{{ Session::has('kaz') ? 'кілт сөздер: мысалы. жағажай салқындатқышы тегін' : '' }}{{ Session::has('rus') ? 'ключевые слова: напр. пляжный чиллер бесплатно' : '' }}{{ Session::has('eng') ? 'keywords: e.g. beach, chiller free' : '' }}">
{{--                                <input type="text" class="form-control" name="extra_content" placeholder="keywords: e.g. beach, chiller free">--}}
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                      <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                                    </svg>
                                  </span>
                            </div>
                        </div>
                        <!-- Banner Components Second Ends Here -->
                        <div class="row mt-3">
                            <div class="col-lg-12">
                                <div class="d-flex align-items-center justify-content-between flex-wrap">
                                    <div class="form-check" >
                                        <input class="form-check-input" type="checkbox" value="" id="checkBox" >
                                        <label class="form-check-label" >
                                            {{ Session::has('kaz') ? 'Тек коммерциялық мүлікті көрсетіңіз' : '' }}{{ Session::has('rus') ? 'Показать только коммерческую недвижимость' : '' }}{{ Session::has('eng') ? 'Show commercial properties only' : '' }}
                                        </label>
                                    </div>
                                    <div>
                                        <button class="show-btn" type="button" id="showButton">
                                            {{ Session::has('kaz') ? 'Қосымша іздеу опцияларын көрсету' : '' }}{{ Session::has('rus') ? 'Показать больше параметров поиска' : '' }}{{ Session::has('eng') ? 'Show more search options' : '' }}
                                            <span>
                                              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
                                              </svg>
                                            </span>
                                        </button>
                                        <button class="show-btn" type="button" id="lessButton" style="display: none;">
                                            {{ Session::has('kaz') ? 'Іздеу опцияларын азырақ көрсету' : '' }}{{ Session::has('rus') ? 'Показать меньше параметров поиска' : '' }}{{ Session::has('eng') ? 'Show less search options' : '' }}
                                            <span>
                                              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-up" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd" d="M7.646 4.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1-.708.708L8 5.707l-5.646 5.647a.5.5 0 0 1-.708-.708l6-6z"/>
                                              </svg>
                                            </span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Banner All Components Are Ends Here -->
                        @csrf
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner Ends Here -->

    <!-- Verified Feature Area Starts Here -->
    <section class="verified-feature">
        <div class="container custom-container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="verified-feature-heading">
                        <h4>
                            <span>{{ Session::has('kaz') ? 'Қазақстандағы таңдаулы мүліктер' : '' }}{{ Session::has('rus') ? 'Рекомендуемые объекты в Казахстане' : '' }}{{ Session::has('eng') ? 'Recommended properties in Kazakhstan' : '' }}</span>
                        </h4>
                    </div>
                </div>
            </div>
            <div class="row verified-feature-row">
                <div class="col-lg-8">
                    <div class="row">
                        @foreach($properties as $key => $property)
                            <div class="col-lg-6 col-md-6 mb-4">
                                <div class="verified-listing">
                                    <a href="{{ route('property-details', ['id' => $property->id, 'slug' => str_replace('/','-',$property->slug)]) }}" class="d-block">
                                        <div class="verified-listing-image">
                                            <img src="{{ asset($property->main_image) }}" alt="Property Image" class="img-fluid" style="height: 255px; width: 100%;">
                                        </div>
                                        @if($property->is_verified == 1)
                                            <div class="verified-listing-badge">
                                                <p class="mb-0 text-uppercase text-white">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-lg" viewBox="0 0 16 16">
                                                        <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z"></path>
                                                    </svg>
                                                    {{ Session::has('kaz') ? 'Расталған тізім' : '' }}{{ Session::has('rus') ? 'Проверенный список' : '' }}{{ Session::has('eng') ? 'Verified List' : '' }}
                                                </p>
                                            </div>
                                        @endif
                                        <div class="verified-listing-logo">
                                            <img src="{{ asset($property->company->big_logo_image) }}" alt="Broker Logo" style="height: 43px; width: 78px;">
                                        </div>
                                        <div class="verified-listing-icon">
                                            <p class="mb-0 text-white">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-camera-fill" viewBox="0 0 16 16">
                                                    <path d="M10.5 8.5a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"></path>
                                                    <path d="M2 4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2h-1.172a2 2 0 0 1-1.414-.586l-.828-.828A2 2 0 0 0 9.172 2H6.828a2 2 0 0 0-1.414.586l-.828.828A2 2 0 0 1 3.172 4H2zm.5 2a.5.5 0 1 1 0-1 .5.5 0 0 1 0 1zm9 2.5a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0z"></path>
                                                </svg>
                                                <span class="mx-1">{{ count($property->subImages) }}</span>
                                                @if($property->panoramic_360_view != null)
                                                    <span>
                                                        <img src="{{ asset('/') }}assets/images/property/icon/360degrees.png" alt="Icon">
                                                    </span>
                                                @endif
                                            </p>
                                        </div>
                                        <div class="verified-listing-footer">
                                            <h5 class="mb-0">
                                                {{ $property->property_title }}
                                            </h5>
                                            <div class="d-flex align-items-center flex-wrap mt-1">
                                                <div class="verified-listing-footer-title me-2">
                                                    <p class="mb-0">{{ $property->propertyType->type_name }}</p>
                                                </div>
                                                <div class="verified-listing-footer-info">
                                                    <strong>{{ $property->property_ads_type_id == 1 ? $property->property_price.' '. (Session::has('kaz') ? 'Tenge' : 'AED') : $property->rent_charge_per_year.' '. (Session::has('kaz') ? 'Tenge' : 'AED') .'/year' }} </strong>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Verified Feature Area Ends Here -->

    <!-- Call Action Area Starts Here -->
    <section class="call-action">
        <div class="container custom-container">
            <div class="row">
                <div class="col-lg-8 col-md-8 mb-4 mb-lg-0 mb-lg-0">
                    <div class="call-action-banner">
                        <div class="call-action-banner-content">
                            <h4>{{ Session::has('kaz') ? 'Агент хабы: аудиторияңызды кеңейтіңіз, брендіңізді насихаттаңыз' : '' }}{{ Session::has('rus') ? 'Агент Хаб: Расширяйте свою аудиторию, продвигайте свой бренд' : '' }}{{ Session::has('eng') ? 'Agent Hub: Grow your audience, boost your brand' : '' }}</h4>
                            <p>
                                {{ Session::has('kaz') ? 'Property Finder-те қатысу мүмкіндігін барынша пайдаланғысы келетін жылжымайтын мүлік агенттері үшін' : '' }}{{ Session::has('rus') ? 'Для агентов по недвижимости, которые хотят получить максимальную отдачу от своего присутствия на Property Finder' : '' }}{{ Session::has('eng') ? 'For real estate agents who want to make the most out of their presence on Property Finder' : '' }}
                            </p>
{{--                            <a href="" class="white-btn">Go to Agent Hub</a>--}}
                        </div>
                        <img src="{{ asset('/') }}assets/images/banner/02.jpg" alt="Banner Image" class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="call-action-end">
                        <div class="call-action-end-image">
                            <a href="">
                                <img src="{{ asset('/') }}assets/images/banner/03.png" alt="Cover Image" class="img-fluid">
                            </a>
                        </div>
                        <div class="social-links">
                            <div class="social-links-heading">
                                <p>{{--Follow us--}}{{ Session::has('kaz') ? 'бізге жазылыңыздар' : '' }}{{ Session::has('rus') ? 'Подписывайтесь на нас' : '' }}{{ Session::has('eng') ? 'follow us' : '' }}</p>
                            </div>
                            <div class="social-links-main">
                                <a href="" class="social-links-main-one">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                                        <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
                                    </svg>
                                </a>
                                <a href="" class="social-links-main-two">
                                    <svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="facebook-f" class="svg-inline--fa fa-facebook-f fa-w-10" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path fill="currentColor" d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z"></path></svg>
                                </a>
                                <a href="" class="social-links-main-three">
                                    <svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="twitter" class="svg-inline--fa fa-twitter fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z"></path></svg>
                                </a>
                                <a href="" class="social-links-main-four">
                                    <svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="linkedin-in" class="svg-inline--fa fa-linkedin-in fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M100.28 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.58 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.28 61.9 111.28 142.3V448z"></path></svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Call Action Area Ends Here -->

    <!-- News Blog Starts Here -->
    <section class="news-blog">
        <div class="container custom-container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="news-blog-heading">
                        <h5>{{ Session::has('kaz') ? 'Блогтағы жаңалықтар' : '' }}{{ Session::has('rus') ? 'Новости из блога' : '' }}{{ Session::has('eng') ? 'News from the blog' : '' }}</h5>
                    </div>
                    @foreach($latestBlogs as $latestBlog)
                        <div class="news-blog-content">
                            <div class="news-blog-content-start">
                                <h6>{{ $latestBlog->created_at->format('d M') }}</h6>
                            </div>
                            <div class="news-blog-content-end">
                                <a href="">{{ $latestBlog->blog_title }}</a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!-- News Blog Ends Here -->

    <!-- Quick Links Starts Here -->
    <section class="quick-links">
        <div class="container custom-container">
            <div class="row">
                <div class="col-lg-6 col-md-6 mb-2 mb-lg-0">
                    <div class="quick-links-header">
                        <h6>{{ Session::has('kaz') ? 'Танымал Іздеу' : '' }}{{ Session::has('rus') ? 'ПОПУЛЯРНЫЕ ПОИСКИ' : '' }}{{ Session::has('eng') ? 'POPULAR SEARCH' : '' }}</h6>
                    </div>
                    @foreach($popularSearches as $search)
                        <div class="quick-links-single">
                            <a href="{{ url('/search-results?search_text='.$search->search_text.'&property_ads_type_id='.$search->property_ads_type_id.'&property_type_id='.$search->property_type_id.'&bedrooms='.$search->bedrooms.'&bathrooms='.$search->bathrooms.'&min_price='.$search->min_price.'&max_price='.$search->max_price.'&property_size='.$search->property_size.'&is_furnished='.$search->is_furnished) }}">{{ $search->search_text }}</a>
                        </div>
                    @endforeach
{{--                    <div class="quick-links-single">--}}
{{--                        <a href="">Apartments for rent in Dubai</a>--}}
{{--                    </div>--}}
{{--                    <div class="quick-links-single">--}}
{{--                        <a href="">Dubai Real Estate</a>--}}
{{--                    </div>--}}
                </div>
                <div class="col-lg-6 col-md-6 mb-2 mb-lg-0">
                    <div class="quick-links-header">
                        <h6>{{ Session::has('kaz') ? 'Нақты Іздеу' : '' }}{{ Session::has('rus') ? 'АКТУАЛЬНЫЕ ПОИСКИ' : '' }}{{ Session::has('eng') ? 'TRENDING SEARCHES' : '' }}</h6>
                    </div>
                    @foreach($trendingSearches as $search)
                        <div class="quick-links-single">
                            <a href="{{ url('/search-results?search_text='.$search->search_text.'&property_ads_type_id='.$search->property_ads_type_id.'&property_type_id='.$search->property_type_id.'&bedrooms='.$search->bedrooms.'&bathrooms='.$search->bathrooms.'&min_price='.$search->min_price.'&max_price='.$search->max_price.'&property_size='.$search->property_size.'&is_furnished='.$search->is_furnished) }}">{{ $search->search_text }}</a>
                        </div>
                    @endforeach
{{--                    <div class="quick-links-single">--}}
{{--                        <a href="">Apartments for rent in Dubai</a>--}}
{{--                    </div>--}}
{{--                    <div class="quick-links-single">--}}
{{--                        <a href="">Apartments for sale in Abu Dhabi</a>--}}
{{--                    </div>--}}
{{--                    <div class="quick-links-single">--}}
{{--                        <a href="">Flat for rent Sharjah</a>--}}
{{--                    </div>--}}
                </div>
            </div>
        </div>
    </section>
    <!-- Quick Links Ends Here -->
@endsection

@section('front-css')
    <style>
        @media screen and (max-width: 685px){
            .home-search-select .dropdown-wrapper {
                min-width: 290px!important;
            }
        }
        /*@media screen and (max-width: 574px) and (max-width: 700px){*/
        /*    .dropdown-wrapper-bed {*/
                /*min-width: 390px!important;*/
            /*}*/
        /*}*/
    </style>
@endsection

@section('front-js')
    <script>
        // $(document).on('click', '#rentBtn', function () {
        //     $('#reqType').val('rent');
        // })
        // $(document).on('click', '#buyBtn', function () {
        //     $('#reqType').val('buy');
        // })
        $(document).on('click', '#monthly', function () {
            $('#rentalPeriod').val('month');
        })
        $(document).on('click', '#monthly2', function () {
            $('#rentalPeriod').val('month');
        })
        $(document).on('click', '#yearly2', function () {
            $('#rentalPeriod').val('year');
        })
        $(document).on('click', '#yearly', function () {
            $('#rentalPeriod').val('year');
        })
        $(document).on('click', '.peice-selector-button', function () {
            $('#bedRoomInput').val($(this).text());
            $('.peice-selector-button').each(function (){
                $(this).removeClass('active');
            })
            $(this).addClass('active');
        })
        $(document).on('click', '.home-bathroom-button', function () {
            $('#homeBathroom').val($(this).text());
            $('.home-bathroom-button').each(function (){
                $(this).removeClass('active');
            })
            $(this).addClass('active');
        })
        $('input[name="min_price"]').on('keyup', function (){
            $('#minPrice2Input').val($(this).val());
            $('#minPrice1Input').val($(this).val());
        })
        $('input[name="max_price"]').on('keyup', function (){
            $('#maxPrice2Input').val($(this).val());
            $('#maxPrice1Input').val($(this).val());
        })
        $('input[name="min_size"]').on('keyup', function (){
            $('#minArea1').val($(this).val());
            $('#minArea2').val($(this).val());
        })
        $('input[name="max_size"]').on('keyup', function (){
            $('#maxArea1').val($(this).val());
            $('#maxArea2').val($(this).val());
        })
        $('.search-btn').on('click', function (){
            $('.home-search').submit();
        })
    </script>
@endsection
