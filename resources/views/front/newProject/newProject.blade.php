@extends('front.master')

@section('title')
    New Homes &amp; New Construction For Sale
@endsection

@section('body')
    <!-- Project Search Starts Here -->
    <section class="project-search sticky-top bg-white d-block d-md-block" style="z-index: 2; padding: 15px 0px;">
        <div class="container custom-container project-search-container">
            <!-- Button -->

            <!-- Button -->

            <!-- Content -->
            <div class="" id="">
                <div class="card card-body p-0 border-0">
                    <div class="row">
                        <div class="col-lg-12">
                            <form action="{{ route('project-search') }}" class="project-search-form" method="get" id="newProjectsForm">

                                <div class="project-search-form-start">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"></path>
                                    </svg>
{{--                                    <input type="text" placeholder="Search by location, developer" name="search_text" class="form-control">--}}
                                    <input type="text" placeholder="Поиск по местоположению, разработчику" name="search_text" class="form-control">
                                </div>
                                <div class="project-search-form-dropdown">
                                    <button type="button" class="filter-btn btn">
                                        <div class="filter-btn-start">
                                            <div>
                                                <p>{{--Project type--}}Тип проекта</p>
                                                <h6 class="d-flex">Any</h6>
                                            </div>
                                        </div>
                                        <div class="filter-btn-end">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-down-fill" viewBox="0 0 16 16">
                                                <path d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z"/>
                                            </svg>
                                        </div>
                                    </button>
                                    <div class="project-search-form-dropdown-area">
                                        @foreach($propertyTypes as $propertyType)
                                        <div class="check-box">
                                            <div class="form-check">

                                                <label class="form-check-label">
                                                    <input class="form-check-input" name="property_type_id" type="radio" value="{{ $propertyType->id }}">
                                                    {{ $propertyType->type_name }}
                                                </label>
                                            </div>
                                        </div>
                                        @endforeach
{{--                                        <div class="check-box">--}}
{{--                                            <div class="form-check">--}}
{{--                                                <input class="form-check-input" type="checkbox" value="">--}}
{{--                                                <label class="form-check-label">--}}
{{--                                                    Land--}}
{{--                                                </label>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="check-box">--}}
{{--                                            <div class="form-check">--}}
{{--                                                <input class="form-check-input" type="checkbox" value="">--}}
{{--                                                <label class="form-check-label">--}}
{{--                                                    Office--}}
{{--                                                </label>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
                                    </div>
                                </div>
                                <div class="project-search-form-dropdown">
                                    <button type="button" class="filter-btn btn">
                                        <div class="filter-btn-start">
                                            <div>
                                                <p><!--Bedrooms-->Спальни</p>
                                                <h6 class="d-flex">Any</h6>
                                                <input type="hidden" name="badrooms" id="bedrooms">
                                            </div>
                                        </div>
                                        <div class="filter-btn-end">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-down-fill" viewBox="0 0 16 16">
                                                <path d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z"/>
                                            </svg>
                                        </div>
                                    </button>
                                    <div class="project-search-form-dropdown-area project-search-form-dropdown-area-bed">
                                        <div>
                                            <div class="project-search-form-dropdown-area-single">
                                                <button type="button" class="btn bedrooms-btn">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                                                        <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"/>
                                                    </svg>
                                                    No min.
                                                </button>
                                            </div>
{{--                                            <div class="project-search-form-dropdown-area-single">--}}
{{--                                                <button type="button" class="btn">Studio</button>--}}
{{--                                            </div>--}}
                                            <div class="project-search-form-dropdown-area-single">
                                                <button type="button" class="btn bedrooms-btn">1 Bedroom</button>
                                            </div>
                                            <div class="project-search-form-dropdown-area-single">
                                                <button type="button" class="btn bedrooms-btn">2 Bedrooms</button>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="project-search-form-dropdown-area-single">
                                                <button type="button" class="btn bedrooms-btn">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                                                        <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"/>
                                                    </svg>
                                                    No max.
                                                </button>
                                            </div>
{{--                                            <div class="project-search-form-dropdown-area-single">--}}
{{--                                                <button type="button" class="btn">Studio</button>--}}
{{--                                            </div>--}}
                                            <div class="project-search-form-dropdown-area-single">
                                                <button type="button" class="btn bedrooms-btn">3 Bedroom</button>
                                            </div>
                                            <div class="project-search-form-dropdown-area-single">
                                                <button type="button" class="btn bedrooms-btn">4 Bedrooms</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="project-search-form-dropdown">
                                    <button type="button" class="filter-btn btn">
                                        <div class="filter-btn-start">
                                            <div>
                                                <p>{{--Possession date--}}Дата владения</p>
                                                <h6 class="d-flex">Any</h6>
                                                <input type="hidden" name="is_completed" id="isCompleted">
                                            </div>
                                        </div>
                                        <div class="filter-btn-end">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-down-fill" viewBox="0 0 16 16">
                                                <path d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z"/>
                                            </svg>
                                        </div>
                                    </button>
                                    <div class="project-search-form-dropdown-area project-search-form-dropdown-area-date">
                                        <div class="project-search-form-dropdown-area-date-single">
                                            <button type="button" class="btn is-completed" data-id="1">Completed</button>
                                        </div>
                                        <div class="project-search-form-dropdown-area-date-single">
                                            <button type="button" class="btn is-completed" data-id="0">Not Completed</button>
                                        </div>
{{--                                        <div class="project-search-form-dropdown-area-date-single">--}}
{{--                                            <button type="button" class="btn">From 2023</button>--}}
{{--                                        </div>--}}
                                    </div>
                                </div>
                                <div class="project-search-form-dropdown">
                                    <button type="button" class="filter-btn btn border-end-0">
                                        <div class="filter-btn-start">
                                            <div>
                                                <p>{{--Starting price--}}Стартовая цена (AED)</p>
                                                <h6 class="d-flex">Any</h6>
                                            </div>
                                        </div>
                                        <div class="filter-btn-end">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-down-fill" viewBox="0 0 16 16">
                                                <path d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z"/>
                                            </svg>
                                        </div>
                                    </button>
                                    <div class="project-search-form-dropdown-area project-search-form-dropdown-area-bed project-search-form-dropdown-area-price">
                                        <div>
                                            <div class="project-search-form-dropdown-area-single">
                                                <button type="button" class="btn">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                                                        <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"/>
                                                    </svg>
                                                    {{--No min.--}}Нет мин.
                                                </button>
                                            </div>
                                            <div class="project-search-form-dropdown-area-single">
                                                <button type="button" class="btn">250,0000 AED</button>
                                            </div>
                                            <div class="project-search-form-dropdown-area-single">
                                                <button type="button" class="btn">500,0000 AED</button>
                                            </div>
                                            <div class="project-search-form-dropdown-area-single">
                                                <button type="button" class="btn">750,0000 AED</button>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="project-search-form-dropdown-area-single">
                                                <button type="button" class="btn">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                                                        <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"/>
                                                    </svg>
                                                    {{--No max.--}}Нет макс.
                                                </button>
                                            </div>
                                            <div class="project-search-form-dropdown-area-single">
                                                <button type="button" class="btn">100,0000 AED</button>
                                            </div>
                                            <div class="project-search-form-dropdown-area-single">
                                                <button type="button" class="btn">250,0000 AED</button>
                                            </div>
                                            <div class="project-search-form-dropdown-area-single">
                                                <button type="button" class="btn">250,0000 AED</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="project-search-form-end">
                                    <button type="submit" class="btn" id="submitBtn"><!--find-->найти</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Content -->
        </div>
    </section>

{{--    <section class="project-search sticky-top bg-white d-none d-md-none d-lg-block" style="z-index: 2;">--}}
{{--        <div class="container custom-container project-search-container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-lg-12">--}}
{{--                    <form action="" class="project-search-form" id="newProjectsFormMd">--}}
{{--                        <div class="project-search-form-start">--}}
{{--                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">--}}
{{--                                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"></path>--}}
{{--                            </svg>--}}
{{--                            <input type="text" placeholder="Search by location, developer" name="search_text" class="form-control">--}}
{{--                            <input type="text" placeholder="Поиск по местоположению, разработчику" name="search_text" class="form-control">--}}
{{--                        </div>--}}
{{--                        <div class="project-search-form-dropdown">--}}
{{--                            <button type="button" class="filter-btn btn">--}}
{{--                                <div class="filter-btn-start">--}}
{{--                                    <div>--}}
{{--                                        <p>Project typeТип проекта</p>--}}
{{--                                        <h6 class="d-flex">Any</h6>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="filter-btn-end">--}}
{{--                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-down-fill" viewBox="0 0 16 16">--}}
{{--                                        <path d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z"/>--}}
{{--                                    </svg>--}}
{{--                                </div>--}}
{{--                            </button>--}}
{{--                            <div class="project-search-form-dropdown-area">--}}
{{--                                <div class="check-box">--}}
{{--                                    <div class="form-check">--}}
{{--                                        <input class="form-check-input" type="checkbox" value="">--}}
{{--                                        <label class="form-check-label">--}}
{{--                                            All--}}
{{--                                        </label>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="check-box">--}}
{{--                                    <div class="form-check">--}}
{{--                                        <input class="form-check-input" type="checkbox" value="">--}}
{{--                                        <label class="form-check-label">--}}
{{--                                            Land--}}
{{--                                        </label>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="check-box">--}}
{{--                                    <div class="form-check">--}}
{{--                                        <input class="form-check-input" type="checkbox" value="">--}}
{{--                                        <label class="form-check-label">--}}
{{--                                            Office--}}
{{--                                        </label>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="project-search-form-dropdown">--}}
{{--                            <button type="button" class="filter-btn btn">--}}
{{--                                <div class="filter-btn-start">--}}
{{--                                    <div>--}}
{{--                                        <p><!--Bedrooms-->Спальни</p>--}}
{{--                                        <h6 class="d-flex">Any</h6>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="filter-btn-end">--}}
{{--                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-down-fill" viewBox="0 0 16 16">--}}
{{--                                        <path d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z"/>--}}
{{--                                    </svg>--}}
{{--                                </div>--}}
{{--                            </button>--}}
{{--                            <div class="project-search-form-dropdown-area project-search-form-dropdown-area-bed">--}}
{{--                                <div>--}}
{{--                                    <div class="project-search-form-dropdown-area-single">--}}
{{--                                        <button type="button" class="btn">--}}
{{--                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">--}}
{{--                                                <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"/>--}}
{{--                                            </svg>--}}
{{--                                            No min.--}}
{{--                                        </button>--}}
{{--                                    </div>--}}
{{--                                    <div class="project-search-form-dropdown-area-single">--}}
{{--                                        <button type="button" class="btn">Studio</button>--}}
{{--                                    </div>--}}
{{--                                    <div class="project-search-form-dropdown-area-single">--}}
{{--                                        <button type="button" class="btn">1 Bedroom</button>--}}
{{--                                    </div>--}}
{{--                                    <div class="project-search-form-dropdown-area-single">--}}
{{--                                        <button type="button" class="btn">2 Bedrooms</button>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div>--}}
{{--                                    <div class="project-search-form-dropdown-area-single">--}}
{{--                                        <button type="button" class="btn">--}}
{{--                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">--}}
{{--                                                <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"/>--}}
{{--                                            </svg>--}}
{{--                                            No max.--}}
{{--                                        </button>--}}
{{--                                    </div>--}}
{{--                                    <div class="project-search-form-dropdown-area-single">--}}
{{--                                        <button type="button" class="btn">Studio</button>--}}
{{--                                    </div>--}}
{{--                                    <div class="project-search-form-dropdown-area-single">--}}
{{--                                        <button type="button" class="btn">1 Bedroom</button>--}}
{{--                                    </div>--}}
{{--                                    <div class="project-search-form-dropdown-area-single">--}}
{{--                                        <button type="button" class="btn">2 Bedrooms</button>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="project-search-form-dropdown">--}}
{{--                            <button type="button" class="filter-btn btn">--}}
{{--                                <div class="filter-btn-start">--}}
{{--                                    <div>--}}
{{--                                        <p>Possession dateДата владения</p>--}}
{{--                                        <h6 class="d-flex">Any</h6>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="filter-btn-end">--}}
{{--                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-down-fill" viewBox="0 0 16 16">--}}
{{--                                        <path d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z"/>--}}
{{--                                    </svg>--}}
{{--                                </div>--}}
{{--                            </button>--}}
{{--                            <div class="project-search-form-dropdown-area project-search-form-dropdown-area-date">--}}
{{--                                <div class="project-search-form-dropdown-area-date-single">--}}
{{--                                    <button type="button" class="btn">Completed</button>--}}
{{--                                </div>--}}
{{--                                <div class="project-search-form-dropdown-area-date-single">--}}
{{--                                    <button type="button" class="btn">From 2022</button>--}}
{{--                                </div>--}}
{{--                                <div class="project-search-form-dropdown-area-date-single">--}}
{{--                                    <button type="button" class="btn">From 2023</button>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="project-search-form-dropdown">--}}
{{--                            <button type="button" class="filter-btn btn border-end-0">--}}
{{--                                <div class="filter-btn-start">--}}
{{--                                    <div>--}}
{{--                                        <p>Starting priceСтартовая цена (AED)</p>--}}
{{--                                        <h6 class="d-flex">Any</h6>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="filter-btn-end">--}}
{{--                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-down-fill" viewBox="0 0 16 16">--}}
{{--                                        <path d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z"/>--}}
{{--                                    </svg>--}}
{{--                                </div>--}}
{{--                            </button>--}}
{{--                            <div class="project-search-form-dropdown-area project-search-form-dropdown-area-bed project-search-form-dropdown-area-price">--}}
{{--                                <div>--}}
{{--                                    <div class="project-search-form-dropdown-area-single">--}}
{{--                                        <button type="button" class="btn">--}}
{{--                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">--}}
{{--                                                <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"/>--}}
{{--                                            </svg>--}}
{{--                                            No min.--}}
{{--                                        </button>--}}
{{--                                    </div>--}}
{{--                                    <div class="project-search-form-dropdown-area-single">--}}
{{--                                        <button type="button" class="btn">50,0000 AED</button>--}}
{{--                                    </div>--}}
{{--                                    <div class="project-search-form-dropdown-area-single">--}}
{{--                                        <button type="button" class="btn">100,0000 AED</button>--}}
{{--                                    </div>--}}
{{--                                    <div class="project-search-form-dropdown-area-single">--}}
{{--                                        <button type="button" class="btn">150,0000 AED</button>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div>--}}
{{--                                    <div class="project-search-form-dropdown-area-single">--}}
{{--                                        <button type="button" class="btn">--}}
{{--                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">--}}
{{--                                                <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"/>--}}
{{--                                            </svg>--}}
{{--                                            No max.--}}
{{--                                        </button>--}}
{{--                                    </div>--}}
{{--                                    <div class="project-search-form-dropdown-area-single">--}}
{{--                                        <button type="button" class="btn">200,0000 AED</button>--}}
{{--                                    </div>--}}
{{--                                    <div class="project-search-form-dropdown-area-single">--}}
{{--                                        <button type="button" class="btn">250,0000 AED</button>--}}
{{--                                    </div>--}}
{{--                                    <div class="project-search-form-dropdown-area-single">--}}
{{--                                        <button type="button" class="btn">300,0000 AED</button>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="project-search-form-end">--}}
{{--                            <button type="submit" class="btn" id="submitBtnMd"><!--find-->найти</button>--}}
{{--                        </div>--}}
{{--                    </form>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
    <!-- Project Search Ends Here -->

    <!-- Breadcrumb Starts Here -->
    <section class="breadcrumb-area calc-breadcrumb-area mb-0">
        <div class="container custom-container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-area-content">
                        <div class="breadcrumb-area-content-start">
                            <a href="{{ route('new-projects-page') }}">New projects</a>
                        </div>
                        <div class="breadcrumb-area-content-icon">
                          <span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                              <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"></path>
                            </svg>
                          </span>
                        </div>
{{--                        <div class="breadcrumb-area-content-end">--}}
{{--                            <p>UAE</p>--}}
{{--                        </div>--}}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Ends Here -->

    <!-- Page Intro Starts Here -->
    <section class="page-intro new-project-intro">
        <div class="container custom-container">
            <div class="row">
                <div class="col-lg-9 new-project-intro-area mb-4 mb-lg-0">
                    <div class="page-intro-content mb-4">
                        <h2>Нашел {{ $totalProperties }} новые проекты</h2>
                    </div>


                    @foreach($properties as $property)
                        <div class="new-projects-card mb-4">
                            <a href="{{ route('property-details',['id' => $property->id, 'slug' => str_replace('/','-',$property->slug)]) }}">
                            <div class="new-projects-card-image">
                                <div class="w-100 h-100">
                                    <img src="{{ asset($property->main_image) }}" alt="{{ $property->property_title }}" style="height: 230px; width: 312px;">
                                </div>
                                <div class="new-projects-card-logo">
                                    <img src="{{ asset($property->company->big_logo_image) }}" alt="{{ $property->company->name }}" style="width: 51px; height: 46px;">
                                </div>
                            </div>
                            <div class="new-projects-card-info">
                                <div class="new-projects-card-info-top">
                                    <div class="new-projects-card-info-top-item">
                                        <div class="new-projects-card-info-top-item-heading">
                                            <p>By {{ $property->company->name }} <span>•</span> {{ $property->property_completion == 1 ? 'Complete' : 'Not Complete' }}</p>
                                        </div>
                                        <div class="new-projects-card-info-top-item-title">
                                            <h4>
                                                {{ $property->property_title }}
                                            </h4>
                                            <span>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                                                  <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"></path>
                                                </svg>
                                            </span>
                                        </div>
                                        <div class="new-projects-card-info-top-item-location">
                                          <span>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt" viewBox="0 0 16 16">
                                              <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z"></path>
                                              <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"></path>
                                            </svg>
                                          </span>
                                            <p>{{ $property->location_area.', '.$property->location_city }}</p>
                                        </div>
                                        <div class="new-projects-card-info-top-item-info">
{{--                                            <span>476 units:</span>--}}
                                            <h6>{{ $property->bedrooms }} bedrooms</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="new-projects-card-bottom">
                                    <div class="d-flex align-baseline justify-content-between">
                                        <h5>{{ number_format($property->property_price) }}</h5>
{{--                                        <button class="new-projects-card-btn">Learn more</button>--}}
                                    </div>
                                </div>
                            </div>
                            <div class="new-projects-card-tag">
                                <span>{{ $property->propertyPromotionType->name }}</span>
                            </div>
                        </a>
                        </div>
                    @endforeach


{{--                    pagination section start--}}
                    @if(count($properties) > 10)
                        <div class="pagination-area flex-wrap">
                        <div class="pagination-area-start">
                            <p>Showing {{ $properties->firstItem().'-'.$properties->lastItem() }} of {{ $properties->total() }} results</p>
                        </div>
                        <div class="pagination-area-end">
{{--                            <a href="" class="active">1</a>--}}
{{--                            <a href="">2</a>--}}
{{--                            <a href="">3</a>--}}
{{--                            <a href="">4</a>--}}
{{--                            <a href="">5</a>--}}
{{--                            <a href="" class="next">--}}
{{--                                Next--}}
{{--                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">--}}
{{--                                    <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>--}}
{{--                                </svg>--}}
{{--                            </a>--}}
                            {{ $properties->links() }}
                        </div>
                    </div>
                    @endif
{{--                    pagination section end--}}
                </div>
                <div class="col-lg-3">
                    <form action="" class="form-sort mb-4">
                        <div class="row g-2">
                            <div class="col-lg-4">
                                <p>Sort by:</p>
                            </div>
                            <div class="col-lg-8">
                                <form action="" method="">
                                    @csrf
                                    <select class="form-select form-select-sm">
                                        <option selected value="">Featured</option>
                                        <option value="1">Premium</option>
                                        <option value="2">Bedroom (least)</option>
                                        <option value="3">Bedroom (most)</option>
                                    </select>
                                </form>
                            </div>
                        </div>
                    </form>
                    <div class="banner-map" style="background-image: url(assets/images/banner/map.svg);">
                        <a href="" class="modal-btn-to-click" data-bs-toggle="modal" data-bs-target="#mapModal">View on map</a>
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
    <!-- Page Intro Ends Here -->
@endsection

@section('front-js')
    <script>
        var position =
            [@foreach($properties as $property)
                [ {!! $property->lat !!}, {!! $property->lon !!} ],
            @endforeach];
        DG.then(function() {
           var map = DG.map('map', {
                // 'center': [position],
                'center': [54.198, 82.189],
                'zoom': 13
            });
            DG.marker([54.198, 82.189]).addTo(map);
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
        $(document).on('click', '.bedrooms-btn', function () {
            $('.bedrooms-btn').each(function () {
                $(this).removeClass('active-bg');
            })
            $(this).addClass('active-bg');
            $('#bedrooms').val($(this).text());
        })
        $(document).on('click', '.is-completed', function () {
            $('#isCompleted').val($(this).data('id'));
        })
    </script>
    <script>
        $('#submitBtn').click(function () {
            document.getElementById('newProjectsForm').submit();
        });
        $('#submitBtnMd').click(function () {
            document.getElementById('newProjectsFormMd').submit();
        });
    </script>
@endsection
