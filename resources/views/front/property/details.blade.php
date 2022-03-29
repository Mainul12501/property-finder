@extends('front.master')

@section('title')
    {{ env('APP_NAME') }} - {{ $property->property_title }}
@endsection

@section('body')
    <!-- Second Breadcrumb Starts Here -->
    <section class="second-breadcrumb">
        <div class="container custom-container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="second-breadcrumb-area">
                        <div class="second-breadcrumb-area-start">

                            <a href="javascript:void(0)">Характеристики</a>
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                            </span>
                            <a href="javascript:void(0)">{{ $property->property_title }}</a>

                        </div>
                        <div class="second-breadcrumb-area-end">
                            <p>Свойства для {{ $property->propertyAdsType->type_name }} в {{ $property->location_city }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Second Breadcrumb Ends Here -->

    <!-- Image Area Starts Here -->
    <section class="image-area">
        <div class="container custom-container">
            <div class="row">
                <div class="col-lg-8 col-md-8 pe-lg-0 pe-md-0 mb-3 mb-lg-0">
                    <div class="gallerys">
                        <div class="image-area-start">
{{--                            <a href="{{ asset($property->main_image) }}" class="d-block" target="_blank">--}}
{{--                                <img src="{{ asset($property->main_image) }}" alt="Image" class="img-fluid" style="/*height: 513px*/">--}}
{{--                            </a>--}}

{{--                            <a href="{{ asset('/') }}assets/images/details/01.jpg" class="d-block" target="_blank">--}}
                                <img src="{{ asset('/') }}assets/images/details/01.jpg" alt="Image" class="img-fluid detailsBigImg" id="detailsBigImg">
{{--                            </a>--}}
                        </div>
                        <div class="image-area-start-buttons">
                            <button class="btn" type="button" id="showAllImages">
                                <span>
                                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-camera" viewBox="0 0 16 16">
                                    <path d="M15 12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V6a1 1 0 0 1 1-1h1.172a3 3 0 0 0 2.12-.879l.83-.828A1 1 0 0 1 6.827 3h2.344a1 1 0 0 1 .707.293l.828.828A3 3 0 0 0 12.828 5H14a1 1 0 0 1 1 1v6zM2 4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2h-1.172a2 2 0 0 1-1.414-.586l-.828-.828A2 2 0 0 0 9.172 2H6.828a2 2 0 0 0-1.414.586l-.828.828A2 2 0 0 1 3.172 4H2z"/>
                                    <path d="M8 11a2.5 2.5 0 1 1 0-5 2.5 2.5 0 0 1 0 5zm0 1a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7zM3 6.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0z"/>
                                  </svg>
                                </span>
                                Показывать {{ count($property->subImages) }} фотографии
                            </button>
                            <button class="btn" type="button" id="productDetailsMapView">
                                <span>
                                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt" viewBox="0 0 16 16">
                                    <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z"/>
                                    <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                                  </svg>
                                </span>
                                Посмотреть на карте
                            </button>
                        </div>
                        <!-- light box start -->
                        <div class="Gallery" style="display: none">
                            @foreach($property->subImages as $subImageKey => $subImage)
{{--                                <a href="{{ asset($subImage->big_img_url) }}">--}}
                                    <img src="{{ asset($subImage->big_img_url) }}" class="bigImageSlot{{ $subImageKey }}" alt="{{ $property->property_title }}">
{{--                                </a>--}}
                            @endforeach
                        </div>
                        <!-- light box end -->
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="image-area-end">
                        <div class="row">
                            @foreach($property->subImages as $firstSubImageKey => $firstSubImage)
                                @if($firstSubImageKey == 0 || $firstSubImageKey == 1)
                                    <div class="col-lg-12" style="{{ $firstSubImageKey == 0 ? 'margin-bottom: 15px;': '' }}">
                                        <div class="gallerys">
                                            <div class="image-area-end-sm-image">
        {{--                                        <a href="{{ asset('/') }}assets/images/details/02.jpg" class="d-block" target="_blank">--}}
                                                    <img src="{{ asset($firstSubImage->big_img_url) }}" alt="{{ $property->property_title }}" class="img-fluid detailsBigImg" style="height: 250px; width: 100%">
        {{--                                        </a>--}}
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
{{--                            <div class="col-lg-12">--}}
{{--                                <div class="gallerys">--}}
{{--                                    <div class="image-area-end-sm-image">--}}
{{--                                        <a href="{{ asset('/') }}assets/images/details/03.jpg" class="d-block" target="_blank">--}}
{{--                                            <img src="{{ asset('/') }}assets/images/details/03.jpg" alt="Image" class="img-fluid">--}}
{{--                                        </a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Image Area Ends Here -->

    <!-- Commercial Rent Starts Here -->
    <section class="commercial-rent">
        <div class="container custom-container">
            <div class="row">
                <div class="col-lg-8 mb-4 mb-lg-0">
                    <div class="commercial-rent-start">
                        <div class="property-info" style="border-bottom: 1px solid #e4e4e4;">
                            <div class="property-info-heading">
                                <h5 class="text-uppercase">{{ $property->propertyType->type_name }} FOR {{ $property->propertyAdsType->type_name }} IN {{ $property->location_area }}, {{ $property->location_city }}</h5>
                                <h4>{{ $property->property_title }}</h4>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="property-info-single">
                                        <div class="property-info-single-start">
                                            <p>
                                                <span>
                                                  <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 122.88 115.52">
                                                    <defs><style>.cls-1{fill-rule:evenodd;}</style></defs><title>property</title><path class="cls-1" d="M119.2,111.86V3.66H57.86V41l-3.65-2.9V2.68A2.89,2.89,0,0,1,55.05.87h0A2.92,2.92,0,0,1,57.13,0h62.8A2.92,2.92,0,0,1,122,.86l.13.14a2.9,2.9,0,0,1,.74,1.94V31.15h0v80.71H104V87.1a1.67,1.67,0,0,0-1.67-1.67H90.44v30.09h32.44v-3.66ZM7.74,115.51V79.74a6.18,6.18,0,0,1-4.27.2A5.08,5.08,0,0,1,1.12,78.3,5.2,5.2,0,0,1,0,75.64a6.72,6.72,0,0,1,1.61-5h0a1.67,1.67,0,0,1,.23-.23l38.38-30a1.38,1.38,0,0,1,1.81-.07l38.47,29.9h0l.17.15a6.34,6.34,0,0,1,1.79,5.84,5.39,5.39,0,0,1-3.4,3.82,5.9,5.9,0,0,1-4.57-.3v35.59H70.77V78.18c0-.68-26.39-21.54-29.3-23.81-3.09,2.35-30,23-30,23.91v37.24ZM41.33,79.2A14.75,14.75,0,0,1,56,93.89v15.65H26.64V93.89A14.73,14.73,0,0,1,41.33,79.2Zm1.27,2.62V93.93H53.46v0A12.17,12.17,0,0,0,42.6,81.82Zm0,14.66V107H53.46V96.48ZM40.05,107V96.48H29.2V107Zm0-13.06V81.82A12.18,12.18,0,0,0,29.2,93.89v0ZM23.94,112.32H58.71v2.55H23.94v-2.55ZM66.68,12.87h9.85a.29.29,0,0,1,.28.28v11.4a.28.28,0,0,1-.28.27H66.68a.27.27,0,0,1-.28-.27V13.15a.28.28,0,0,1,.28-.28Zm33.86,0h9.85a.29.29,0,0,1,.28.28v11.4a.28.28,0,0,1-.28.27h-9.85a.28.28,0,0,1-.28-.27V13.15a.29.29,0,0,1,.28-.28Zm-16.93,0h9.85a.29.29,0,0,1,.28.28v11.4a.28.28,0,0,1-.28.27H83.61a.27.27,0,0,1-.28-.27V13.15a.28.28,0,0,1,.28-.28ZM66.68,35.76h9.85a.28.28,0,0,1,.28.27v11.4a.29.29,0,0,1-.28.28H66.68a.28.28,0,0,1-.28-.28V36a.27.27,0,0,1,.28-.27Zm33.86,0h9.85a.28.28,0,0,1,.28.27v11.4a.29.29,0,0,1-.28.28h-9.85a.29.29,0,0,1-.28-.28V36a.28.28,0,0,1,.28-.27Zm-16.93,0h9.85a.28.28,0,0,1,.28.27v11.4a.29.29,0,0,1-.28.28H83.61a.28.28,0,0,1-.28-.28V36a.27.27,0,0,1,.28-.27Zm16.93,22.88h9.85a.29.29,0,0,1,.28.28V70.31a.29.29,0,0,1-.28.28h-9.85a.29.29,0,0,1-.28-.28V58.92a.29.29,0,0,1,.28-.28Zm-16.93,0h9.85a.29.29,0,0,1,.28.28V70.31a.29.29,0,0,1-.28.28h-3V66.82l-7.11-5.64V58.92a.28.28,0,0,1,.28-.28Z"/>
                                                  </svg>
                                                </span>
                                                Тип недвижимости:
                                            </p>
                                        </div>
                                        <div class="property-info-single-end">
                                            <h6>{{ $property->propertyType->type_name }}</h6>
                                        </div>
                                    </div>
                                    <div class="property-info-single">
                                        <div class="property-info-single-start">
                                            <p>
                                                <span>
{{--                                                  <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 122.88 115.52">--}}
{{--                                                    <defs><style>.cls-1{fill-rule:evenodd;}</style></defs><title>property</title><path class="cls-1" d="M119.2,111.86V3.66H57.86V41l-3.65-2.9V2.68A2.89,2.89,0,0,1,55.05.87h0A2.92,2.92,0,0,1,57.13,0h62.8A2.92,2.92,0,0,1,122,.86l.13.14a2.9,2.9,0,0,1,.74,1.94V31.15h0v80.71H104V87.1a1.67,1.67,0,0,0-1.67-1.67H90.44v30.09h32.44v-3.66ZM7.74,115.51V79.74a6.18,6.18,0,0,1-4.27.2A5.08,5.08,0,0,1,1.12,78.3,5.2,5.2,0,0,1,0,75.64a6.72,6.72,0,0,1,1.61-5h0a1.67,1.67,0,0,1,.23-.23l38.38-30a1.38,1.38,0,0,1,1.81-.07l38.47,29.9h0l.17.15a6.34,6.34,0,0,1,1.79,5.84,5.39,5.39,0,0,1-3.4,3.82,5.9,5.9,0,0,1-4.57-.3v35.59H70.77V78.18c0-.68-26.39-21.54-29.3-23.81-3.09,2.35-30,23-30,23.91v37.24ZM41.33,79.2A14.75,14.75,0,0,1,56,93.89v15.65H26.64V93.89A14.73,14.73,0,0,1,41.33,79.2Zm1.27,2.62V93.93H53.46v0A12.17,12.17,0,0,0,42.6,81.82Zm0,14.66V107H53.46V96.48ZM40.05,107V96.48H29.2V107Zm0-13.06V81.82A12.18,12.18,0,0,0,29.2,93.89v0ZM23.94,112.32H58.71v2.55H23.94v-2.55ZM66.68,12.87h9.85a.29.29,0,0,1,.28.28v11.4a.28.28,0,0,1-.28.27H66.68a.27.27,0,0,1-.28-.27V13.15a.28.28,0,0,1,.28-.28Zm33.86,0h9.85a.29.29,0,0,1,.28.28v11.4a.28.28,0,0,1-.28.27h-9.85a.28.28,0,0,1-.28-.27V13.15a.29.29,0,0,1,.28-.28Zm-16.93,0h9.85a.29.29,0,0,1,.28.28v11.4a.28.28,0,0,1-.28.27H83.61a.27.27,0,0,1-.28-.27V13.15a.28.28,0,0,1,.28-.28ZM66.68,35.76h9.85a.28.28,0,0,1,.28.27v11.4a.29.29,0,0,1-.28.28H66.68a.28.28,0,0,1-.28-.28V36a.27.27,0,0,1,.28-.27Zm33.86,0h9.85a.28.28,0,0,1,.28.27v11.4a.29.29,0,0,1-.28.28h-9.85a.29.29,0,0,1-.28-.28V36a.28.28,0,0,1,.28-.27Zm-16.93,0h9.85a.28.28,0,0,1,.28.27v11.4a.29.29,0,0,1-.28.28H83.61a.28.28,0,0,1-.28-.28V36a.27.27,0,0,1,.28-.27Zm16.93,22.88h9.85a.29.29,0,0,1,.28.28V70.31a.29.29,0,0,1-.28.28h-9.85a.29.29,0,0,1-.28-.28V58.92a.29.29,0,0,1,.28-.28Zm-16.93,0h9.85a.29.29,0,0,1,.28.28V70.31a.29.29,0,0,1-.28.28h-3V66.82l-7.11-5.64V58.92a.28.28,0,0,1,.28-.28Z"/>--}}
{{--                                                  </svg>--}}
                                                    <img src="{{ asset('/') }}assets/images/property/icon/bed.png" alt="">
                                                </span>
                                                Спальни:
                                            </p>
                                        </div>
                                        <div class="property-info-single-end">
                                            <h6>{{ $property->bedrooms }}</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="property-info-single">
                                        <div class="property-info-single-start">
                                            <p>
                                                <span>
                                                  <img src="{{ asset('/') }}assets/images/details/icon/size.png" alt="Icon">
                                                </span>
                                                Размер недвижимости:
                                            </p>
                                        </div>
                                        <div class="property-info-single-end">
                                            <h6>{{ $property->property_size }} sqft</h6>
                                        </div>
                                    </div>
                                    <div class="property-info-single mb-0">
                                        <div class="property-info-single-start">
                                            <p>
                                                <span>
                                                  <img src="{{ asset('/') }}assets/images/property/icon/bathtub.png" alt="Icon">
                                                </span>
                                                Ванные комнаты:
                                            </p>
                                        </div>
                                        <div class="property-info-single-end">
                                            <h6>{{ $property->bathrooms }}</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pannel-info" style="border-bottom: 1px solid #e4e4e4; padding: 26px 0px;">
                            <div class="row">
                                <div class="col-lg-6 mb-4 mb-lg-0">
                                    <div class="pannel-info-single">
                                        <h5 class="pannel-info-single-heading">Место нахождения</h5>
                                        <div class="pannel-info-single-content">
                                            <div class="pannel-info-single-content-image">
                                                <img src="{{ asset('/') }}assets/images/details/icon/map.svg" alt="Icon">
                                                <div class="pannel-info-single-button">
                                                    <button type="button" class="btn btn-outline-info modal-btn-to-click" data-bs-toggle="modal" data-bs-target="#mapModal">карта</button>
                                                </div>
                                            </div>
                                            <div class="pannel-info-single-content-text">
                                                <p>{{ $property->location_area }}</p>
                                                <p class="mb-0">{{ $property->location_city }}, {{ $property->location_country }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="pannel-info-single">
                                        <h5 class="pannel-info-single-heading">Агент</h5>
                                        <div class="pannel-info-single-content">
                                            <div class="pannel-info-single-content-image">
                                                <a href="" class="d-inline-block">
                                                    <img src="{{ asset($property->agent->image) }}" alt="Icon" style="height: 120px; width: 120px">
                                                </a>
                                            </div>
                                            <div class="pannel-info-single-content-text">
                                                <a href="">{{ $property->agent->name }}</a>
                                                <div class="pannel-info-single-content-text-company">
                                                    <div class="d-flex flex-column flex-lg-row">
                                                        <div>
                                                            <a href="">
                                                                <img src="{{ asset($property->agent->company->big_logo_image) }}" alt="company_Logo">
                                                            </a>
                                                        </div>
                                                        <div>
                                                            <p class="mb-0">{{ $property->agent->position }} at {{ $property->agent->company->name }}</p>
                                                            <a href="">({{ count($property->agent->properties) }} характеристики)</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <p class="mb-0">{{ $property->agent->languages }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
{{--                        <div class="aminities-information" style="border-bottom: 1px solid #e4e4e4; padding: 26px 0px;">--}}
{{--                            <h5>Amenities</h5>--}}
{{--                            <p>--}}
{{--                            <span>--}}
{{--                              <img src="{{ asset('/') }}assets/images/details/icon/parking-garage.png" alt="Icon">--}}
{{--                            </span>--}}
{{--                                Covered Parking--}}
{{--                            </p>--}}
{{--                        </div>--}}
                        <div class="description-info" style="border-bottom: 1px solid #e4e4e4; padding: 26px 0px;">
                            <div>
                                <h5>Description</h5>
                            </div>
{{--                            <div></div>--}}
                            <div class="text-container">
                                <div class="text-justify" id="smallP">{!! $property->property_description !!}</div>
{{--                                {!! $property->property_description !!}--}}
                            </div>
{{--                            <p class="text-justify" id="smallP">{!! substr_replace($property->property_description,'...', 560) !!}</p>--}}
{{--                            <div id="detailsHide" style="display: none;">--}}
{{--                                <p class="text-justify">{!! $property->property_description !!}</p>--}}
{{--                            </div>--}}
{{--                            <div class="description-info-bottom">--}}
{{--                                <button type="button" class="btn" id="readMore2">--}}
{{--                                  <span>--}}
{{--                                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="#ef5e4e" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-up"><polyline points="18 15 12 9 6 15"></polyline></svg>--}}
{{--                                  </span>--}}
{{--                                    Read more--}}
{{--                                </button>--}}
{{--                                <button type="button" class="btn" id="readLess2" style="display: none;">--}}
{{--                                  <span>--}}
{{--                                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="#ef5e4e" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg>--}}
{{--                                  </span>--}}
{{--                                    Read less--}}
{{--                                </button>--}}
{{--                            </div>--}}
                        </div>
                        <div class="reference-info" style="border-bottom: 1px solid #e4e4e4; padding: 26px 0px;">
                            <div class="reference-info-start">
{{--                                <div class="reference-info-list">--}}
{{--                                    <div class="reference-info-list-start">--}}
{{--                                        <p>Reference:</p>--}}
{{--                                    </div>--}}
{{--                                    <div class="reference-info-list-end">--}}
{{--                                        <p>{{ uniqid() }}</p>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="reference-info-list">--}}
{{--                                    <div class="reference-info-list-start">--}}
{{--                                        <p>Trakheesi Permit:</p>--}}
{{--                                    </div>--}}
{{--                                    <div class="reference-info-list-end">--}}
{{--                                        <p>7131098800</p>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
                                <div class="reference-info-list">
                                    <div class="reference-info-list-start">
                                        <p>Брокер ОРН:</p>
                                    </div>
                                    <div class="reference-info-list-end">
                                        <p>{{ $property->company->orn }}</p>
                                    </div>
                                </div>
                                <div class="reference-info-list">
                                    <div class="reference-info-list-start pb-0">
                                        <p>Перечислено:</p>
                                    </div>
                                    <div class="reference-info-list-end pb-0">

                                        <p>{{ $posted_time }} дней назад</p>
                                    </div>
                                </div>
                            </div>
                            <div class="reference-info-end">
                                <div class="reference-info-list">
                                    <div class="reference-info-list-start">
                                        <p>Агент БРН:</p>
                                    </div>
                                    <div class="reference-info-list-end">
                                        <p>{{ $property->agent->license_number }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="property-share" style="padding: 26px 0px;">
                            <h5>Нравится это свойство? Вернитесь к нему позже, легко.</h5>
                            <div class="property-share-bottom">
                                <button type="button" class="btn">
                                      <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
                                          <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
                                        </svg>
                                      </span>
                                    Сохранить в избранное
                                </button>
                                <span class="or-share">or share</span>
                                <a href="" class="btn">
                                      <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#4267b2" class="bi bi-facebook" viewBox="0 0 16 16">
                                          <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
                                        </svg>
                                      </span>
                                    Фейсбук
                                </a>
                                <a href="" class="btn">
                                      <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#e60019" class="bi bi-pinterest" viewBox="0 0 16 16">
                                          <path d="M8 0a8 8 0 0 0-2.915 15.452c-.07-.633-.134-1.606.027-2.297.146-.625.938-3.977.938-3.977s-.239-.479-.239-1.187c0-1.113.645-1.943 1.448-1.943.682 0 1.012.512 1.012 1.127 0 .686-.437 1.712-.663 2.663-.188.796.4 1.446 1.185 1.446 1.422 0 2.515-1.5 2.515-3.664 0-1.915-1.377-3.254-3.342-3.254-2.276 0-3.612 1.707-3.612 3.471 0 .688.265 1.425.595 1.826a.24.24 0 0 1 .056.23c-.061.252-.196.796-.222.907-.035.146-.116.177-.268.107-1-.465-1.624-1.926-1.624-3.1 0-2.523 1.834-4.84 5.286-4.84 2.775 0 4.932 1.977 4.932 4.62 0 2.757-1.739 4.976-4.151 4.976-.811 0-1.573-.421-1.834-.919l-.498 1.902c-.181.695-.669 1.566-.995 2.097A8 8 0 1 0 8 0z"/>
                                        </svg>
                                      </span>
                                    Пинтерест
                                </a>
                                <a href="" class="btn">
                                      <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#1da1f3" class="bi bi-twitter" viewBox="0 0 16 16">
                                          <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
                                        </svg>
                                      </span>
                                    Твиттер
                                </a>
                                <button type="button" class="btn">
                                      <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#ef5e4e" class="bi bi-envelope-fill" viewBox="0 0 16 16">
                                          <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z"/>
                                        </svg>
                                      </span>
                                    Эл. адрес
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <!-- Contact Card Starts Here -->
                    <div class="contact-card">
                        <div class="contact-card-heading">
                            <h5>{{ $property->rent_charge_per_year != null ? number_format($property->rent_charge_per_year).' AED / yearly' : number_format($property->property_price).' AED' }} </h5>
{{--                            <button type="button" class="btn" id="dotBtn">--}}
{{--                                <span>--}}
{{--                                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots" viewBox="0 0 16 16">--}}
{{--                                    <path d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z"></path>--}}
{{--                                  </svg>--}}
{{--                                </span>--}}
{{--                            </button>--}}
{{--                            <div class="dotbtn-dropdowns" style="display: none;" id="dotbtnDropdowns">--}}
{{--                                <div class="dotbtn-dropdowns-single active">--}}
{{--                                    <button class="btn" type="button">AED</button>--}}
{{--                                </div>--}}
{{--                                <div class="dotbtn-dropdowns-single">--}}
{{--                                    <button class="btn" type="button">AED</button>--}}
{{--                                </div>--}}
{{--                                <div class="dotbtn-dropdowns-single">--}}
{{--                                    <button class="btn" type="button">AED</button>--}}
{{--                                </div>--}}
{{--                                <div class="dotbtn-dropdowns-single">--}}
{{--                                    <button class="btn" type="button">AED</button>--}}
{{--                                </div>--}}
{{--                                <div class="dotbtn-dropdowns-single">--}}
{{--                                    <button class="btn" type="button">AED</button>--}}
{{--                                </div>--}}
{{--                                <div class="dotbtn-dropdowns-single">--}}
{{--                                    <button class="btn" type="button">AED</button>--}}
{{--                                </div>--}}
{{--                                <div class="dotbtn-dropdowns-single">--}}
{{--                                    <button class="btn" type="button">AED</button>--}}
{{--                                </div>--}}
{{--                            </div>--}}
                        </div>
                        <div class="contact-card-buttons">
                            <button class="btn" type="button" onclick="call({{ $property->id }})" style="background-color: #ef5e4e;">
                                    <span>
                                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                                      </svg>
                                    </span>
                                Вызов
                            </button>
                            <button class="btn" type="button" onclick="mail({{ $property->id }})" style="background-color: #ef5e4e;">
                                    <span>
                                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
                                        <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z"></path>
                                      </svg>
                                    </span>
                                Эл. адрес
                            </button>
                            <button class="btn" type="button" onclick="whatsapp({{ $property->id }})" style="background-color: #25d366;">
                                    <span>
                                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                                        <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/>
                                      </svg>
                                    </span>
                                WhatsApp
                            </button>
                        </div>
                        @if($property->is_verified == 1)
                            <div class="contact-card-text">
                                <p class="text-center">
                                    Property Finder проверил точность и подлинность этого списка.
                                </p>
                            </div>
                        @endif
                        <div class="d-flex justify-content-center">
                            <button type="button" class="btn save-btn">
                                    <span>
                                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
                                        <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"></path>
                                      </svg>
                                    </span>
                                Сохранить в избранное
                            </button>
                        </div>
                        @if($property->is_verified == 1)
                            <div class="contact-card-badge">
                                <div class="custom-badge">
                                    <span class="text-uppercase">Verified</span>
                                </div>
                            </div>
                        @endif
                    </div>
                    <!-- Contact Card Ends Here -->
{{--                    <div class="d-flex align-items-center justify-content-center mt-4">--}}
{{--                        <a href="" class="report-btn">--}}
{{--                              <span>--}}
{{--                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-flag" viewBox="0 0 16 16">--}}
{{--                                  <path d="M14.778.085A.5.5 0 0 1 15 .5V8a.5.5 0 0 1-.314.464L14.5 8l.186.464-.003.001-.006.003-.023.009a12.435 12.435 0 0 1-.397.15c-.264.095-.631.223-1.047.35-.816.252-1.879.523-2.71.523-.847 0-1.548-.28-2.158-.525l-.028-.01C7.68 8.71 7.14 8.5 6.5 8.5c-.7 0-1.638.23-2.437.477A19.626 19.626 0 0 0 3 9.342V15.5a.5.5 0 0 1-1 0V.5a.5.5 0 0 1 1 0v.282c.226-.079.496-.17.79-.26C4.606.272 5.67 0 6.5 0c.84 0 1.524.277 2.121.519l.043.018C9.286.788 9.828 1 10.5 1c.7 0 1.638-.23 2.437-.477a19.587 19.587 0 0 0 1.349-.476l.019-.007.004-.002h.001M14 1.221c-.22.078-.48.167-.766.255-.81.252-1.872.523-2.734.523-.886 0-1.592-.286-2.203-.534l-.008-.003C7.662 1.21 7.139 1 6.5 1c-.669 0-1.606.229-2.415.478A21.294 21.294 0 0 0 3 1.845v6.433c.22-.078.48-.167.766-.255C4.576 7.77 5.638 7.5 6.5 7.5c.847 0 1.548.28 2.158.525l.028.01C9.32 8.29 9.86 8.5 10.5 8.5c.668 0 1.606-.229 2.415-.478A21.317 21.317 0 0 0 14 7.655V1.222z"/>--}}
{{--                                </svg>--}}
{{--                              </span>--}}
{{--                            Report This Listing--}}
{{--                        </a>--}}
{{--                    </div>--}}

                    <!-- Contact Card SM Starts Here -->
                    <div class="sticky-top" style="display:none;" id="scroll">
                        <div class="contact-card contact-card-sm mt-4">
                            <div class="contact-card-heading">
                                <h5>{{ $property->rent_charge_per_year != null ? $property->rent_charge_per_year.' AED / yearly' : $property->property_price.' AED' }} </h5>
{{--                                <button type="button" class="btn" id="dotBtn" >--}}
{{--                                        <span>--}}
{{--                                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots" viewBox="0 0 16 16">--}}
{{--                                            <path d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z"></path>--}}
{{--                                          </svg>--}}
{{--                                        </span>--}}
{{--                                </button>--}}
{{--                                <div class="dotbtn-dropdowns" style="display: none;" id="dotbtnDropdowns">--}}
{{--                                    <div class="dotbtn-dropdowns-single active">--}}
{{--                                        <button class="btn" type="button">AED</button>--}}
{{--                                    </div>--}}
{{--                                    <div class="dotbtn-dropdowns-single">--}}
{{--                                        <button class="btn" type="button">AED</button>--}}
{{--                                    </div>--}}
{{--                                    <div class="dotbtn-dropdowns-single">--}}
{{--                                        <button class="btn" type="button">AED</button>--}}
{{--                                    </div>--}}
{{--                                    <div class="dotbtn-dropdowns-single">--}}
{{--                                        <button class="btn" type="button">AED</button>--}}
{{--                                    </div>--}}
{{--                                    <div class="dotbtn-dropdowns-single">--}}
{{--                                        <button class="btn" type="button">AED</button>--}}
{{--                                    </div>--}}
{{--                                    <div class="dotbtn-dropdowns-single">--}}
{{--                                        <button class="btn" type="button">AED</button>--}}
{{--                                    </div>--}}
{{--                                    <div class="dotbtn-dropdowns-single">--}}
{{--                                        <button class="btn" type="button">AED</button>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
                            </div>
                            <div class="contact-card-buttons pb-0 border-0 mb-0">
                                <button class="btn" type="button" onclick="call({{ $property->id }})" style="background-color: #ef5e4e;">
                                        <span>
                                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                                          </svg>
                                        </span>
                                    Вызов
                                </button>
                                <button class="btn" onclick="mail({{ $property->id }})" type="button" style="background-color: #ef5e4e;">
                                        <span>
                                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
                                            <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z"></path>
                                          </svg>
                                        </span>
                                    Эл. адрес
                                </button>
                                <button class="btn" onclick="whatsapp({{ $property->id }})" type="button" style="background-color: #25d366;">
                                        <span>
                                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                                            <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/>
                                          </svg>
                                        </span>
                                    WhatsApp
                                </button>
                            </div>
                            @if($property->is_verified == 1)
                                <div class="contact-card-badge">
                                    <div class="custom-badge">
                                        <span class="text-uppercase">проверено</span>
                                    </div>
                                </div>
                            @endif
                            <button type="button" class="btn save-btn">
                                  <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
                                      <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"></path>
                                    </svg>
                                  </span>
                            </button>
                        </div>
                    </div>
                    <!-- Contact Card SM Ends Here -->
                </div>
            </div>
        </div>
    </section>
    <!-- Commercial Rent Ends Here -->

    <!-- Commercial Rent Bottom Starts Here -->
    <section class="commercial-rent-bottom">
        <div class="container custom-container">
            <h4>Больше доступно в том же районе</h4>
            <div class="row">
                <div class="col-lg-8 mb-4 mb-lg-0">
                    <div class="row">
                        @foreach($relatedProperties as $relatedProperty)
                        <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                            <a href="" class="d-inline-block">
                                <div class="rent-card-sm">
                                    <div class="rent-card-sm-image">
                                        <img src="{{ asset($relatedProperty->main_image) }}" alt="Card-image" class="img-fluid">
                                    </div>
                                    <div class="rent-card-sm-bottom">
                                        <p class="rent-card-sm-subtitle">{{ $relatedProperty->propertyType->type_name }}</p>
                                        <p class="rent-card-sm-title">{{ $property->rent_charge_per_year != null ? number_format($property->rent_charge_per_year).' AED / yearly' : number_format($property->property_price).' AED' }}</p>
                                        <p class="rent-card-sm-details">
                                            {{ $relatedProperty->location_area }}, {{ $relatedProperty->location_city }}, {{ $relatedProperty->location_country }}
                                        </p>
                                        <div class="d-flex align-items-center">
                                            <div class="rent-card-sm-icon">
                                                <p>
                                                    <span>
                                                      <img src="{{ asset('/') }}assets/images/details/icon/size.png" alt="Icon">
                                                    </span>
                                                    {{ $relatedProperty->property_size }} sqft
                                                </p>
                                            </div>
                                            @if($relatedProperty->bedrooms != null)
                                                <div class="rent-card-sm-icon">
                                                    <p>
                                                        <span>
                                                          <img src="{{ asset('/') }}assets/images/property/icon/bed.png" alt="Icon" class="bathtubicon">
                                                        </span>
                                                        {{ $relatedProperty->bedrooms }}
                                                    </p>
                                                </div>
                                            @endif
                                            <div class="rent-card-sm-icon">
                                                <p>
                                                    <span>
                                                      <img src="{{ asset('/') }}assets/images/property/icon/bathtub.png" alt="Icon" class="bathtubicon">
                                                    </span>
                                                    {{ $relatedProperty->bathrooms }}
                                                </p>
                                            </div>
                                        </div>
                                        @if($relatedProperty->is_verified == 1)
                                            <div class="rent-card-sm-badge">
                                                <div class="custom-badge">
                                                    <span class="text-uppercase">проверено</span>
                                                </div>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </a>
                        </div>
                        @endforeach
{{--                        <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">--}}
{{--                            <a href="" class="d-inline-block">--}}
{{--                                <div class="rent-card-sm">--}}
{{--                                    <div class="rent-card-sm-image">--}}
{{--                                        <img src="{{ asset('/') }}assets/images/details/card/01.jpg" alt="Card-image">--}}
{{--                                    </div>--}}
{{--                                    <div class="rent-card-sm-bottom">--}}
{{--                                        <p class="rent-card-sm-subtitle">Office Space</p>--}}
{{--                                        <p class="rent-card-sm-title">135,000 AED/year</p>--}}
{{--                                        <p class="rent-card-sm-details">--}}
{{--                                            Mazaya Business Avenue AA1, Mazaya Business Avenue, Jumeirah Lake Towers, Dubai--}}
{{--                                        </p>--}}
{{--                                        <div class="d-flex align-items-center">--}}
{{--                                            <div class="rent-card-sm-icon">--}}
{{--                                                <p>--}}
{{--                        <span>--}}
{{--                          <img src="{{ asset('/') }}assets/images/details/icon/size.png" alt="Icon">--}}
{{--                        </span>--}}
{{--                                                    2,086 sqft--}}
{{--                                                </p>--}}
{{--                                            </div>--}}
{{--                                            <div class="rent-card-sm-icon">--}}
{{--                                                <p>--}}
{{--                        <span>--}}
{{--                          <img src="{{ asset('/') }}assets/images/property/icon/bathtub.png" alt="Icon" class="bathtubicon">--}}
{{--                        </span>--}}
{{--                                                    2--}}
{{--                                                </p>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="rent-card-sm-badge">--}}
{{--                                            <div class="custom-badge">--}}
{{--                                                <span class="text-uppercase">Verified</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </a>--}}
{{--                        </div>--}}
{{--                        <div class="col-lg-4 col-md-6">--}}
{{--                            <a href="" class="d-inline-block">--}}
{{--                                <div class="rent-card-sm">--}}
{{--                                    <div class="rent-card-sm-image">--}}
{{--                                        <img src="{{ asset('/') }}assets/images/details/card/01.jpg" alt="Card-image">--}}
{{--                                    </div>--}}
{{--                                    <div class="rent-card-sm-bottom">--}}
{{--                                        <p class="rent-card-sm-subtitle">Office Space</p>--}}
{{--                                        <p class="rent-card-sm-title">135,000 AED/year</p>--}}
{{--                                        <p class="rent-card-sm-details">--}}
{{--                                            Mazaya Business Avenue AA1, Mazaya Business Avenue, Jumeirah Lake Towers, Dubai--}}
{{--                                        </p>--}}
{{--                                        <div class="d-flex align-items-center">--}}
{{--                                            <div class="rent-card-sm-icon">--}}
{{--                                                <p>--}}
{{--                        <span>--}}
{{--                          <img src="{{ asset('/') }}assets/images/details/icon/size.png" alt="Icon">--}}
{{--                        </span>--}}
{{--                                                    2,086 sqft--}}
{{--                                                </p>--}}
{{--                                            </div>--}}
{{--                                            <div class="rent-card-sm-icon">--}}
{{--                                                <p>--}}
{{--                        <span>--}}
{{--                          <img src="{{ asset('/') }}assets/images/property/icon/bathtub.png" alt="Icon" class="bathtubicon">--}}
{{--                        </span>--}}
{{--                                                    2--}}
{{--                                                </p>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="rent-card-sm-badge">--}}
{{--                                            <div class="custom-badge">--}}
{{--                                                <span class="text-uppercase">Verified</span>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </a>--}}
{{--                        </div>--}}
                    </div>
                </div>
                <div class="col-lg-4 mb-3 mb-lg-0">
                    <div class="newsletter-area">
                        <div class="d-flex justify-content-center">
                            <div class="newsletter-area-top">
                                <img src="{{ asset('/') }}assets/images/details/icon/01.svg" alt="Icon">
                                <div class="bell-icon">
                                    <img src="{{ asset('/') }}assets/images/details/icon/02.svg" alt="Icon">
                                </div>
                            </div>
                        </div>
                        <div class="newsletter-area-text">
                            <h6 class="text-center mb-0">Не пропустите!</h6>
                            <p class="text-center mb-0">Получайте уведомления о новых свойствах для</p>
                            <h6 class="text-center mb-0">{{ $property->company->name }}</h6>
                        </div>
                        <form action="" class="newsletter-area-form">
                            <div class="row g-2">
                                <form action="" method="post">
                                    <div class="col-lg-8">
                                        <input type="email" class="form-control" placeholder="Email" style="font-size: 13px;">
                                    </div>
                                    <div class="col-lg-4">
                                        <button class="btn border text-danger fw-bold" type="submit" style="font-size: 13px;">Сообщите мне</button>
                                    </div>
                                </form>
                            </div>
                        </form>
                        <p class="newsletter-area-alert text-danger">Пожалуйста, введите адрес электронной почты</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="modal fade" id="mapModal">
        <div class="modal-dialog modal-fullscreen-xxl-down" style="width: 100%;">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div id="map" style="height: 600px; width: 100%"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Commercial Rent Bottom Ends Here -->

    <div class="" style="display: none">
        <a href="tel:{{ isset($property->agent->phone) ? $property->agent->phone : $property->company->phone_number }}" id="call{{ $property->id }}">call</a>
        <a href="mailto:{{ isset($property->agent->email) ? $property->agent->email : $property->company->email }}" id="mail{{ $property->id }}">mail</a>
        <a href="https://api.whatsapp.com/send?phone={{ isset($property->agent->whatsapp_number) ? $property->agent->whatsapp_number : $property->company->whatsapp_number }}" target="_blank" id="whatsapp{{ $property->id }}">whatsapp</a>
    </div>
@endsection

@section('front-js')
    <script>
        var lat = {!! json_encode($property->lat) !!};
        var lon = {!! json_encode($property->lon) !!};
        var map;
        DG.then(function() {
            map = DG.map('map', {
                'center': [lat, lon],
                // 'center': [54.98, 82.89],
                'zoom': 13
            });
            // DG.marker([54.98, 82.89]).addTo(map);
            DG.marker([lat, lon]).addTo(map);
        });

    </script>

    <script>
        $(document).on('click', '.modal-btn-to-click', function () {
            setTimeout(function () {
                $('.dg-control-round__icon_name_fullscreen')[0].click();
            }, 300);
        })
    </script>
    <script>
        $(document).ready(function (){
            JavaScriptGallery.initGallery();
            JavaScriptGallery.enableAutoWidth();
            JavaScriptGallery.enableDoubleClick();
            JavaScriptGallery.initMove();
            JavaScriptGallery.setGalleryTransition("zoomin");
            JavaScriptGallery.enableKeydownESC();

            // var textContent = new showHideText('.text-container', {
            //     charQty     : 250,
            //     ellipseText :"...",
            //     moreText    :"Read more",
            //     lessText    :"Read less"
            //
            // });
        })
        $(document).on('click','#showAllImages', function (){
            // $('.gallery a').simpleLightbox({
            //     overlay:true,
            // })
            document.getElementById('0').click();
        })
        $(document).on('click','.detailsBigImg', function (){
            document.getElementById('0').click();
        })
        setTimeout(function (){
            $('.morelink').addClass('btn btn-outline-warning text-success btn-sm w-100');
        },1000)
    </script>

    <script>
        $('#productDetailsMapView').click(function () {

            var btn = document.createElement('a');
            btn.setAttribute('target','_blank');
            btn.setAttribute('src', {!! json_encode($property->property_map_url) !!});
            btn.click();
            btn.remove();

        });
        function call(propertyId)
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
