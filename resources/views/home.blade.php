@extends('layouts.admin')
@section('content')
<div class="content">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    {{ trans('dashboard.title') }}
                </div>

                <div class="card-body">
                    @if(session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        {{ trans('dashboard.login_msg') }}
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <div class="card card-body">
                <h3>{{ trans('dashboard.property_count') }}</h3>
                <p class="text-center font-weight-bold mb-0" style="font-size: 40px">{{ count(\App\Models\Property::all()) }}</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card card-body">
                <h3>{{ trans('dashboard.agent_count') }}</h3>
                <p class="text-center font-weight-bold mb-0" style="font-size: 40px">{{ count(\App\Models\Agent::all()) }}</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card card-body">
                <h3>{{ trans('dashboard.company_count') }}</h3>
                <p class="text-center font-weight-bold mb-0" style="font-size: 40px">{{ count(\App\Models\Company::all()) }}</p>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
@parent

@endsection
