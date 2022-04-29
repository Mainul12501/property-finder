@extends('front.master')

@section('title')
    company details
@endsection

@section('body')
    <section class="py-5" style="background-color: #f3f3f3">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="card card-body">
                        <div class="row border-bottom">
                            <div class="col-md-4">
                                <div>
                                    <img src="{{ asset($company->big_logo_image) }}" class="img-fluid" alt="client name" style="width: 260px;" >
                                </div>
                            </div>
                            <div class="col-md-8 ">
                                <div class="mt-5 ms-5" style="">
                                    <h4 class="font-weight-light">{{ $company->name }}</h4>
                                </div>
                                <div class="row ms-5 mt-4 ms-0">
                                    <div class="col-4 ps-0">{{ Session::has('kaz') ? 'ҚЫЗМЕТКЕРЛЕР' : '' }}{{ Session::has('rus') ? 'СОТРУДНИКИ' : '' }}{{ Session::has('eng') ? 'СОТРУДНИКИ' : '' }}:</div>
                                    <div class="col-8">
                                        <a href="">{{ count($company->agents) }} {{ Session::has('kaz') ? 'Агенттер' : '' }}{{ Session::has('rus') ? 'Агенты' : '' }}{{ Session::has('eng') ? 'Agents' : '' }}</a>
                                    </div>
                                </div>
                                <div class="row ms-5 mt-2 ms-0">
                                    <div class="col-4 ps-0">{{ Session::has('kaz') ? 'БЕЛСЕНДІ ЖАРНАМАЛАР' : '' }}{{ Session::has('rus') ? 'АКТИВНЫЕ ОБЪЯВЛЕНИЯ' : '' }}{{ Session::has('eng') ? 'ACTIVE ADS' : '' }}:</div>
                                    <div class="col-8">
                                        <a href="">{{ count($company->properties) }} {{ Session::has('kaz') ? 'Сипаттамалары' : '' }}{{ Session::has('rus') ? 'Характеристики' : '' }}{{ Session::has('eng') ? 'Characteristics' : '' }}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mt-3 ps-5">
                                    <h5 class="font-weight-light">О {{ $company->name }}</h5>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="row mt-2">
                                                <div class="col-md-6">
                                                    <span class="text-secondary">{{ Session::has('kaz') ? 'ORN' : '' }}{{ Session::has('rus') ? 'ОРН' : '' }}{{ Session::has('eng') ? 'ORN' : '' }}:</span>
                                                </div>
                                                <div class="col-md-6">
                                                    <a href=""> {{ $company->orn }}</a>
                                                </div>
                                            </div>
                                            <div class="row mt-2">
                                                <div class="col-md-6">
                                                    <span class="text-secondary">{{ Session::has('kaz') ? 'Бас кеңсе' : '' }}{{ Session::has('rus') ? 'Головной офис' : '' }}{{ Session::has('eng') ? 'Head office' : '' }}:</span>
                                                </div>
                                                <div class="col-md-6">
                                                    <span>{{ $company->head_office_area }}, {{ $company->head_office_city }}, {{ $company->head_office_state }}</span>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="col-md-6">
                                            <div class="row mt-2">
                                                <div class="col-md-3">
                                                    <span class="text-secondary">{{ Session::has('kaz') ? 'АЙМАҚТАР' : '' }}{{ Session::has('rus') ? 'ОБЛАСТИ' : '' }}{{ Session::has('eng') ? 'AREAS' : '' }}:</span>
                                                </div>
                                                <div class="col-md-9"> {{ $company->head_office_city }}</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="text-justify mt-3">{!! substr_replace($company->about_office,'....',260) !!}</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card card-body">
                        <h6 class="text-uppercase">{{ Session::has('kaz') ? 'Осы Брокерге хабарласыңыз' : '' }}{{ Session::has('rus') ? 'Свяжитесь с этим Брокером' : '' }}{{ Session::has('eng') ? 'Contact this Broker' : '' }}</h6>
                        <div class="row d-grid px-4 mt-4">
                            <a href="tel:{{ $company->phone }}" class="btn btn-orange-type col-12 text-white py-2">
                                <i class="fa-solid fa-phone"></i> <span class="text-capitalize">{{ Session::has('kaz') ? 'Агент қоңырауы' : '' }}{{ Session::has('rus') ? 'Вызов агента' : '' }}{{ Session::has('eng') ? 'Call' : '' }}</span>
                            </a>
                        </div>
                        <div class="row d-grid px-4 mt-2 pb-5">
                            <a href="mailto:{{ $company->email }}" class="btn btn-orange-type col-12 text-white py-2">
                                <i class="fa-solid fa-envelope"></i> <span class="text-capitalize">{{ Session::has('kaz') ? 'Электрондық пошта агенті' : '' }}{{ Session::has('rus') ? 'Агент электронной почты' : '' }}{{ Session::has('eng') ? 'Email' : '' }}</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-body">
                        <div>
                            <nav>
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                    <button class="nav-link " id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">{{--our agents--}}{{ Session::has('kaz') ? 'агенттер' : '' }}{{ Session::has('rus') ? 'наши агенты' : '' }}{{ Session::has('eng') ? 'our agents' : '' }} ({{ count($company->agents) }})</button>
                                    <button class="nav-link active" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">{{--My Properties--}}{{ Session::has('kaz') ? 'қасиеттерім' : '' }}{{ Session::has('rus') ? 'Мои свойства' : '' }}{{ Session::has('eng') ? 'My properties' : '' }} ({{ count($company->properties) }})</button>
                                </div>
                            </nav>
                            <div class="tab-content" id="nav-tabContent">
                                <div class="tab-pane fade " id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                    @foreach($company->agents as $agent)
                                    <div class="row mt-4">
                                        <div class="col-md-3">
                                            <div>
                                                <img src="{{ asset($agent->image) }}" alt="" class="" style="height: 210px; width: 100%">
                                            </div>
                                        </div>
                                        <div class="col-md-9">
                                            <div class="row border-bottom">
                                                <div class="col-md-12">
                                                    <h6>{{ $agent->name }}</h6>
                                                    <span>{{ $agent->position }}</span>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-10">
                                                    <div class="row mt-4">
                                                        <div class="col-md-3">
                                                            <span>{{ Session::has('kaz') ? 'Компания' : '' }}{{ Session::has('rus') ? 'Компания' : '' }}{{ Session::has('eng') ? 'Company' : '' }}</span>
                                                        </div>
                                                        <div class="col-md-9">
                                                            <h6>{{ $company->name }}</h6>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <span>{{ Session::has('kaz') ? 'Ұлты' : '' }}{{ Session::has('rus') ? 'Национальность' : '' }}{{ Session::has('eng') ? 'Nationality' : '' }}</span>
                                                        </div>
                                                        <div class="col-md-9">
                                                            <h6>{{ $agent->nationality }}</h6>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <span>{{ Session::has('kaz') ? 'Тілдер' : '' }}{{ Session::has('rus') ? 'Языки' : '' }}{{ Session::has('eng') ? 'Languages' : '' }}</span>
                                                        </div>
                                                        <div class="col-md-9">
                                                            <h6>{{ $agent->languages }}</h6>
                                                        </div>
                                                    </div>
                                                    <div class="row mt-4">
                                                        <div class="col-md-12">
                                                            <a href="tel:{{ $agent->phone }}" class="btn border">
                                                                <i class="fa-solid fa-phone"></i> {{ Session::has('kaz') ? 'Қоңырау' : '' }}{{ Session::has('rus') ? 'Вызов' : '' }}{{ Session::has('eng') ? 'Call' : '' }}
                                                            </a>
                                                            <a href="mailto:{{ $agent->email }}" class="btn border">
                                                                <i class="fa-solid fa-envelope"></i> {{ Session::has('kaz') ? 'пошт' : '' }}{{ Session::has('rus') ? 'Эл. адрес' : '' }}{{ Session::has('eng') ? 'Email' : '' }}
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="mt-4">
{{--                                                        company logo--}}
                                                        <img src="{{ asset($company->big_logo_image) }}" alt="" class="w-100" style="height: 60px;">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                                <div class="tab-pane fade show active" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                                    <!-- Rent Components Starts Here -->
                                    <div class="container py-5">
                                        <div class="row mb-3">
                                            <div class="col-md-10">
                                                <div>
{{--                                                    <form action="" method="post">--}}
{{--                                                        @csrf--}}
{{--                                                        <div class="form-group row" style="width: 400px">--}}
{{--                                                            <label for="" class="col-md-3 mt-2">Sort By:</label>--}}
{{--                                                            <div class="col-md-9">--}}
{{--                                                                <select name="" id="" class="form-control">--}}
{{--                                                                    <option value="featured">Featured</option>--}}
{{--                                                                </select>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}

{{--                                                    </form>--}}
                                                </div>
                                            </div>
                                            <div class="col-md-2">{{ Session::has('kaz') ? 'Жалпы меншік' : '' }}{{ Session::has('rus') ? 'Общая недвижимость' : '' }}{{ Session::has('eng') ? 'Properties' : '' }}: {{ count($company->properties) }}</div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12">
                                                @foreach($company->properties as $property)
                                                    <a href="{{ route('property-details', ['id' => $property->id, 'slug' => str_replace('/','-', $property->slug)]) }}">
                                                        <div class="rent-featured mb-4">
                                                            <div class="rent-featured-start">
                                                                <div class="rent-featured-start-slider">
                                                                    <!-- Rent Slider Area Starts Here -->
                                                                    <div id="carouselTen" class="carousel slide mb-3" data-bs-ride="carousel" data-bs-interval="false">
                                                                        <div class="carousel-indicators">
                                                                            @foreach($property->subImages as $key => $subImageIndex)
                                                                                <button type="button" data-bs-target="#carouselTen" data-bs-slide-to="{{ $key }}" class="{{ $key == 0 ? 'active' : '' }}" aria-current="true" aria-label="Slide 1"></button>
                                                                            @endforeach
                                                                            {{--                                                                        <button type="button" data-bs-target="#carouselTen" data-bs-slide-to="1" aria-label="Slide 2"></button>--}}
                                                                            {{--                                                                        <button type="button" data-bs-target="#carouselTen" data-bs-slide-to="2" aria-label="Slide 3"></button>--}}
                                                                        </div>
                                                                        <div class="carousel-inner">
                                                                            @foreach($property->subImages as $index => $subImage)
                                                                                <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                                                                                    <img src="{{ asset($subImage->big_img_url) }}" class="d-block " alt="Rent Image" style="width: 275px; height: 212px">
                                                                                </div>
                                                                            @endforeach
                                                                            {{--                                                                        <div class="carousel-item">--}}
                                                                            {{--                                                                            <img src="{{ asset('/') }}assets/images/card/rent/02.jpg" class="d-block" alt="Rent Image" style="width: 275px; height: 212px">--}}
                                                                            {{--                                                                        </div>--}}
                                                                            {{--                                                                        <div class="carousel-item">--}}
                                                                            {{--                                                                            <img src="{{ asset('/') }}assets/images/card/rent/03.jpg" class="d-block" alt="Rent Image" style="width: 275px; height: 212px">--}}
                                                                            {{--                                                                        </div>--}}
                                                                        </div>
                                                                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselTen" data-bs-slide="prev">
                                                                            <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-left"><polyline points="15 18 9 12 15 6"></polyline></svg>
                                                                            <span class="visually-hidden">Previous</span>
                                                                        </button>
                                                                        <button class="carousel-control-next" type="button" data-bs-target="#carouselTen" data-bs-slide="next">
                                                                            <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                                                                            <span class="visually-hidden">Next</span>
                                                                        </button>
                                                                    </div>
                                                                    <!-- Rent Slider Area Ends Here -->
                                                                </div>
                                                                @if($property->is_verified == 1)
                                                                    <div class="rent-featured-start-badge">
                                                                        <span class="text-uppercase">{{ Session::has('kaz') ? 'тексерілді' : '' }}{{ Session::has('rus') ? 'проверено' : '' }}{{ Session::has('eng') ? 'verified' : '' }}</span>
                                                                    </div>
                                                                @endif
                                                                <div class="rent-featured-start-icon">
                                                                    <img src="{{ asset('/') }}assets/images/property/icon/360degrees.png" alt="Icon">
                                                                </div>
                                                            </div>
                                                            <div class="rent-featured-end">
                                                                <div class="rent-featured-mid">
                                                                    <div class="rent-featured-mid-title">
                                                                        <h4>{{ $property->rent_charge_per_year != null ? $property->rent_charge_per_year.' '.(Session::has('kaz') ? 'Tenge' : 'AED').'/year' : $property->property_price.(Session::has('kaz') ? ' Tenge' : ' AED') }} </h4>
                                                                        <h5>{{ $property->property_title }}</h5>
                                                                    </div>
                                                                    <div class="rent-featured-mid-amenities">
                                                                        <div class="rent-featured-mid-amenities-single">
                                                                            <p>{{ $property->propertyType->type_name }}</p>
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
                                                                            <p>{{ $property->size }} sqft</p>
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
                                                                            {{ $property->location_area }}, {{ $property->location_city }}, {{ $property->location_country }} </p>
                                                                    </div>
                                                                    <div class="rent-featured-mid-buttons">
                                                                        <div class="rent-featured-mid-buttons-single">
                                                                            <button type="button" class="btn" onclick="call({{ $property->id }})">
                                                                          <span>
                                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="#007ea8" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-phone"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                                                                          </span>
                                                                                {{ Session::has('kaz') ? 'Қоңырау' : '' }}{{ Session::has('rus') ? 'Вызов' : '' }}{{ Session::has('eng') ? 'Call' : '' }}
                                                                            </button>
                                                                        </div>
                                                                        <div class="rent-featured-mid-buttons-single">
                                                                            <button type="button" class="btn" onclick="mail({{ $property->id }})">
                                                                          <span>
                                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
                                                                              <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z"/>
                                                                            </svg>
                                                                          </span>
                                                                                {{ Session::has('kaz') ? 'пошт' : '' }}{{ Session::has('rus') ? 'Эл. адрес' : '' }}{{ Session::has('eng') ? 'Email' : '' }}
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
                                                                        {{--                                                                    <div class="rent-featured-mid-buttons-single">--}}
                                                                        {{--                                                                        <button type="button" class="btn">--}}
                                                                        {{--                                                                          <span class="me-0">--}}
                                                                        {{--                                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">--}}
                                                                        {{--                                                                              <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>--}}
                                                                        {{--                                                                            </svg>--}}
                                                                        {{--                                                                          </span>--}}
                                                                        {{--                                                                        </button>--}}
                                                                        {{--                                                                    </div>--}}
                                                                        {{--                                                                    <div class="rent-featured-mid-buttons-single">--}}
                                                                        {{--                                                                        <button type="button" class="btn" id="dotButton1">--}}
                                                                        {{--                                                                          <span class="me-0">--}}
                                                                        {{--                                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots" viewBox="0 0 16 16">--}}
                                                                        {{--                                                                              <path d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z"/>--}}
                                                                        {{--                                                                            </svg>--}}
                                                                        {{--                                                                          </span>--}}
                                                                        {{--                                                                        </button>--}}
                                                                        {{--                                                                        <div class="dot-button-dropdown" id="dotButtonDropdown1" style="display: none;">--}}
                                                                        {{--                                                                            <button type="button" class="btn dot-button-dropdown-button">--}}
                                                                        {{--                                                                                <svg height="24" viewBox="0 0 24 24" width="24" fill="none">--}}
                                                                        {{--                                                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M10.0135 4.5C10.0135 4.22386 9.78968 4 9.51354 4H8.25L8.04346 4.00521C5.78547 4.11932 4 6.09457 4 8.5V15.5L4.00488 15.7175C4.11189 18.0955 5.96457 20 8.25 20H15.75L15.9565 19.9948C18.2145 19.8807 20 17.9054 20 15.5V14.6072L19.9919 14.5173C19.9496 14.2841 19.7455 14.1072 19.5 14.1072C19.2239 14.1072 19 14.3311 19 14.6072V15.5L18.9952 15.6927C18.9021 17.5422 17.4779 19 15.75 19H8.25L8.07238 18.9948C6.36667 18.8956 5 17.3753 5 15.5V8.5L5.00483 8.30731C5.09786 6.45778 6.52213 5 8.25 5H9.51354L9.60341 4.99194C9.83666 4.94961 10.0135 4.74546 10.0135 4.5ZM16.4945 4.54821C16.664 4.37067 16.9329 4.34515 17.1308 4.47559L17.2014 4.53183L19.7383 6.95378C19.8942 7.03844 20 7.2036 20 7.39348L19.9999 7.40557C20.0024 7.51329 19.9704 7.62165 19.9039 7.71247L19.8418 7.78256L17.1979 10.2584C16.9964 10.4472 16.6799 10.4368 16.4912 10.2352C16.3234 10.0561 16.313 9.78617 16.4543 9.59583L16.5144 9.52852L18.2589 7.89348H15.5076C12.9522 7.89348 10.755 9.68821 10.6412 12.7917L10.6365 13.0462V14.855C10.6365 15.1311 10.4127 15.355 10.1365 15.355C9.89108 15.355 9.68693 15.1781 9.6446 14.9449L9.63654 14.855V13.0462C9.63654 9.28028 12.2425 6.99879 15.2941 6.89703L15.5076 6.89348H18.2273L16.5109 5.25512C16.3333 5.08562 16.3078 4.81672 16.4383 4.61878L16.4945 4.54821Z" fill="currentColor"></path>--}}
                                                                        {{--                                                                                </svg>--}}
                                                                        {{--                                                                                <span>Share</span>--}}
                                                                        {{--                                                                            </button>--}}
                                                                        {{--                                                                            <button type="button" class="btn dot-button-dropdown-button">--}}
                                                                        {{--                                                                                <svg height="24" viewBox="0 0 24 24" width="24">--}}
                                                                        {{--                                                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M7.98311 20C7.98311 20.5523 6.86761 21 5.49156 21C4.11551 21 3 20.5523 3 20C3 19.5162 3.85598 19.1127 4.99325 19.02V5H11.0228C11.2537 3.85888 12.2591 3 13.4645 3H17.9493L21 7.5L17.9493 12H11.9198C11.6889 13.1411 10.6834 14 9.47805 14H5.98987V19.02C7.12714 19.1127 7.98311 19.5162 7.98311 20ZM17.4219 11L19.7947 7.5L17.4219 4H13.4645C12.6389 4 11.9696 4.67157 11.9696 5.5V11H17.4219ZM10.973 6H5.98987V13H9.47805C10.3037 13 10.973 12.3284 10.973 11.5V6Z" fill="currentColor"></path>--}}
                                                                        {{--                                                                                </svg>--}}
                                                                        {{--                                                                                <span>Report</span>--}}
                                                                        {{--                                                                            </button>--}}
                                                                        {{--                                                                        </div>--}}
                                                                        {{--                                                                    </div>--}}
                                                                    </div>
                                                                </div>
                                                                <div class="rent-featured-company">
                                                                    <p>{{ $property->propertyPromotionType->name }}</p>
                                                                    <div class="rent-featured-company-logo">
                                                                        <img src="{{ asset($company->big_logo_image) }}" alt="Logo" class="img-fluid">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <div class="" style="display: none">
                                                        <a href="tel:{{ isset($property->agent->phone) ? $property->agent->phone : $property->company->phone_number }}" id="call{{ $property->id }}">call</a>
                                                        <a href="mailto:{{ isset($property->agent->email) ? $property->agent->email : $property->company->email }}" id="mail{{ $property->id }}">mail</a>
                                                        <a href="https://api.whatsapp.com/send?phone={{ isset($property->agent->whatsapp_number) ? $property->agent->whatsapp_number : $property->company->whatsapp_number }}" target="_blank" id="whatsapp{{ $property->id }}">whatsapp</a>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Rent Components Ends Here -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
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
