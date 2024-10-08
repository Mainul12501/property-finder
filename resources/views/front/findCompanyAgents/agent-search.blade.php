@extends('front.master')

@section('title')

@endsection

@section('body')


    <!-- Verified Agents Starts Here -->
    <section class="verified-agents-area" id="">
        <div class="container custom-container">
            <div class="verified-agents-area-title">
                <h3>{{ Session::has('eng') ? 'search results' : '' }}{{ Session::has('kaz') ? 'іздеу нәтижелері' : '' }}{{ Session::has('rus') ? 'результат поиска' : '' }}</h3>
            </div>
            <div class="row justify-content-center justify-content-md-start justify-content-lg-start">
                @if(count($agents)>0)
                    @foreach($agents as $agent)
                        <div class="col-lg-3 col-10 col-md-4 mb-4">
                            <a href="{{ route('agent-details',['id' => $agent->id, 'name' => str_replace(' ','-', $agent->name)]) }}">
                                <div class="verified-agents">
                                    <div class="verified-agents-images">
                                        <div class="verified-agents-image">
                                            <img src="{{ asset($agent->image) }}" alt="{{ $agent->name }}" class="img-fluid" style="">
                                        </div>
                                        <div class="verified-agents-logo">
                                            <img src="{{ asset($agent->company->big_logo_image) }}" alt="{{ $agent->company->name }}">
                                        </div>
                                    </div>
                                    <div class="verified-agents-info">
                                        <h5>{{ $agent->name }}</h5>
                                        <p>{{ $agent->position }}</p>
                                    </div>
                                    <div class="verified-agents-body">
                                        <div class="verified-agents-body-item">
                                            <div class="verified-agents-body-item-start">
                                                <span>{ Session::has('eng') ? 'Nation' : '' }}{{ Session::has('kaz') ? 'ҰЛТЫ' : '' }}{{ Session::has('rus') ? 'НАЦИОНАЛЬНОСТЬ' : '' }}:</span>
                                            </div>
                                            <div class="verified-agents-body-item-end">
                                                <p>{{ $agent->nationality }}</p>
                                            </div>
                                        </div>
                                        <div class="verified-agents-body-item">
                                            <div class="verified-agents-body-item-start">
                                                <span>{{ Session::has('eng') ? 'LANGUAGES' : '' }}{{ Session::has('kaz') ? 'ТІЛДЕР' : '' }}{{ Session::has('rus') ? 'ЯЗЫКИ' : '' }}:</span>
                                            </div>
                                            <div class="verified-agents-body-item-end">
                                                <p>{{ $agent->languages }}</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="verified-agents-footer">
                                        <div class="verified-agents-footer-item">
                                            <div class="verified-agents-footer-item-single">
                                                <div>
                                                    @php
                                                        $rentCount = count(\App\Models\Property::where('agent_id', $agent->id)->where('property_ads_type_id', 2)->get());
                                                    @endphp
                                                    <h5>{{ $rentCount }}</h5>
                                                </div>
                                                <div>
                                                    <p>{{ Session::has('eng') ? 'for rent' : '' }}{{ Session::has('kaz') ? 'жалға беріледі' : '' }}{{ Session::has('rus') ? 'в аренду' : '' }}</p>
                                                </div>
                                            </div>
                                            <div class="verified-agents-footer-item-single">
                                                <div>
                                                    @php
                                                        $buyCount = count(\App\Models\Property::where('agent_id', $agent->id)->where('property_ads_type_id', 1)->get());
                                                    @endphp
                                                    <h5>{{ $buyCount }}</h5>
                                                </div>
                                                <div>
                                                    <p>{{ Session::has('eng') ? 'for sale' : '' }}{{ Session::has('kaz') ? 'сатуға арналған' : '' }}{{ Session::has('rus') ? 'на продажу' : '' }}</p>
                                                </div>
                                            </div>
                                            <div class="verified-agents-footer-item-single">
                                                <div>
                                                    @php
                                                        $commercialCount = count(\App\Models\Property::where('agent_id', $agent->id)->where('property_ads_type_id', 3)->get());
                                                    @endphp
                                                    <h5>{{ $commercialCount }}</h5>
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
            @if(count($agents)> 11)
                <div class="mt-3 mt-md-0 mt-lg-5 d-flex justify-content-center">
                    {{--                    <a href="" class="btn red-pill-btn-outline">View all agents</a>--}}
                    {{ $agents->links() }}
                </div>
            @endif
        </div>
    </section>
    <!-- Verified Agents Ends Here -->


@endsection


