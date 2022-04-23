@extends('front.master')

@section('title')

@endsection

@section('body')



    <!-- Verified Broker Starts Here -->
    <section class="verified-agents-area" id="" style="">
        <div class="container custom-container">
            <div class="verified-agents-area-title">
                <h3>{{ Session::has('eng') ? 'search results' : '' }}{{ Session::has('kaz') ? 'іздеу нәтижелері' : '' }}{{ Session::has('rus') ? 'результат поиска' : '' }}</h3>
            </div>
            <div class="row justify-content-center justify-content-md-start justify-content-lg-start">
                @if(count($companies)>0)
                    @foreach($companies as $company)
                        <div class="col-lg-3 col-10 col-md-4 mb-4">
                            <a href="{{ route('company-details', ['id' => $company->id, 'name' => str_replace(' ','-',$company->name)]) }}">
                                <div class="verified-agents">
                                    <div class="verified-agents-images">
                                        <div class="verified-agents-image">
                                            <img src="{{ asset($company->big_logo_image) }}" alt="{{ $company->name }}" class="img-fluid">
                                        </div>
                                    </div>
                                    <div class="verified-agents-info" style="margin-bottom: 10px;">
                                        <h5>{{ $company->name }}</h5>
                                        <p>{{ count($company->agents) }} {{ Session::has('eng') ? 'AGENTS' : '' }}{{ Session::has('kaz') ? 'АГЕНТТЕР' : '' }}{{ Session::has('rus') ? 'АГЕНТЫ' : '' }}</p>
                                    </div>
                                    <div class="verified-agents-body ps-0">
                                        <div class="verified-agents-body-item flex-column align-items-center">
                                            <div class="verified-agents-body-item-start flex-grow-0 flex-shrink-0" style="flex-basis: 0;">
                                                <span>{{ Session::has('eng') ? 'HEAD OFFICE' : '' }}{{ Session::has('kaz') ? 'БАСТЫ офис' : '' }}{{ Session::has('rus') ? 'ГЛАВНЫЙ ОФИС' : '' }}</span>
                                            </div>
                                            <div class="verified-agents-body-item-end flex-grow-0">
                                                <p class="px-2">{{ $company->head_office_state }}</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="verified-agents-footer">
                                        <div class="verified-agents-footer-item">
                                            <div class="verified-agents-footer-item-single">
                                                <div>
                                                    @php
                                                        $companyRentCount = count(\App\Models\Property::where('company_id', $company->id)->where('property_ads_type_id', 2)->get());
                                                    @endphp
                                                    <h5>{{ $companyRentCount }}</h5>
                                                </div>
                                                <div>
                                                    <p>{{ Session::has('eng') ? 'for rent' : '' }}{{ Session::has('kaz') ? 'жалға беріледі' : '' }}{{ Session::has('rus') ? 'в аренду' : '' }}</p>
                                                </div>
                                            </div>
                                            <div class="verified-agents-footer-item-single">
                                                <div>
                                                    @php
                                                        $companyBuyCount = count(\App\Models\Property::where('company_id', $company->id)->where('property_ads_type_id', 1)->get());
                                                    @endphp
                                                    <h5>{{ $companyBuyCount }}</h5>
                                                </div>
                                                <div>
                                                    <p>{{ Session::has('eng') ? 'for sale' : '' }}{{ Session::has('kaz') ? 'сатуға арналған' : '' }}{{ Session::has('rus') ? 'на продажу' : '' }}</p>
                                                </div>
                                            </div>
                                            <div class="verified-agents-footer-item-single">
                                                <div>
                                                    @php
                                                        $companyRentCount = count(\App\Models\Property::where('company_id', $company->id)->where('property_ads_type_id', 3)->get());
                                                    @endphp
                                                    <h5>{{ $companyRentCount }}</h5>
                                                </div>
                                                <div>
                                                    <p>{{ Session::has('eng') ? 'commercial' : '' }}{{ Session::has('kaz') ? 'коммерциялық' : '' }}{{ Session::has('rus') ? 'коммерческий' : '' }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                @else
                    <span>{{ Session::has('eng') ? 'Sorry... No agents found.' : '' }}{{ Session::has('kaz') ? 'Кешіріңіз... Агенттер табылмады.' : '' }}{{ Session::has('rus') ? 'Извините... Агенты не найдены.' : '' }}</span>
                @endif
            </div>
            @if(count($companies) > 11)
                <div class="mt-3 mt-md-0 mt-lg-5 d-flex justify-content-center">
                    {{--                    <a href="" class="btn red-pill-btn-outline">View all companies</a>--}}
                    {{ $companies->links() }}
                </div>
            @endif
        </div>
    </section>
    <!-- Verified Broker Ends Here -->
@endsection


