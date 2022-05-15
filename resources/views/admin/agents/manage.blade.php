@extends('layouts.admin')
@section('content')

    <div class="card">
        <div class="card-header">
{{--            {{ trans('global.show') }} {{ trans('cruds.asset.title') }}--}}
            {{-- All Companies --}}
            {{ trans('global.all') }} {{ trans('cruds.companies.title') }}
            <a href="{{ route('admin.agents.create') }}" class="btn btn-success float-right">
                <i class="fa-solid fa-circle-plus"></i>
            </a>
        </div>

        <div class="card-body">
            <div>
                <table class="table table-responsive" id="myTable">
                    <thead>
                        <tr>
                            <th>{{ trans('cruds.agent.fields.id') }}</th>
                            <th>{{ trans('cruds.agent.fields.company_name') }}</th>
                            <th>{{ trans('cruds.agent.fields.name') }}</th>
                            <th>{{ trans('cruds.agent.fields.phone') }}</th>
                            <th>{{ trans('cruds.agent.fields.email') }}</th>
                            <th>{{ trans('cruds.agent.fields.image') }}</th>
                            <th>{{ trans('cruds.agent.fields.position') }}</th>
                            <th>{{ trans('cruds.agent.fields.license') }}</th>
                            <th>{{ trans('cruds.agent.fields.nationality') }}</th>
                            <th>{{ trans('cruds.agent.fields.languages') }}</th>
                            <th>{{ trans('cruds.agent.fields.location') }}</th>
                            <th>Exp. Since</th>
                            <th>{{ trans('cruds.agent.fields.about_agent') }}</th>
{{--                            <th>Social Links</th>--}}
                            <th>{{ trans('cruds.agent.fields.status') }}</th>
                            <th>{{ trans('global.action') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($agents as $agent)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $agent->company->name }}</td>
                                <td>{{ $agent->name }}</td>
                                <td>{{ $agent->Phone }}</td>
                                <td>{{ $agent->email }}</td>
                                <td><img src="{{ asset($agent->image) }}" alt="{{ $agent->name }}" class="table-img-size-round"></td>
                                <td>{{ $agent->position }}</td>
                                <td>{{ $agent->license_number }}</td>
                                <td>{{ $agent->nationality }}</td>
                                <td>{{ $agent->languages }}</td>
                                <td>{{ $agent->location }}</td>
                                <td>{{ $agent->experience_since }}</td>
                                <td>
                                    {!! substr_replace($agent->about_agent, '<a href="#" class="btn btn-sm btn-secondary">Read more</a>', 60) !!}

                                </td>
{{--                                <td>--}}
{{--                                    <div>--}}
{{--                                        whatsapp Number: {{ $agent->whatsapp_number }}--}}
{{--                                    </div>--}}
{{--                                    <div>--}}
{{--                                        Linkedin Profile: <a href="{{ $agent->linkedin_profile_url }}" target="_blank" class="btn mr-2"><i class="fa-brands fa-linkedin"></i></a>--}}
{{--                                        Fb Profile: <a href="{{ $agent->fb_profile_url }}" target="_blank" class="btn mr-2"><i class="fa-brands fa-facebook"></i></a>--}}
{{--                                    </div>--}}
{{--                                </td>--}}
                                <td>{{ $agent->status == 1 ? 'Published' : 'Unpublished' }}</td>
                                <td>
                                    <a href="{{ route('admin.agents.status', ['id' => $agent->id]) }}" class="btn btn-sm btn-{{ $agent->status == 1 ? 'success' : 'secondary' }}">@if($agent->status == 1)<i class="fa-solid fa-arrow-up"></i>@else<i class="fa-solid fa-arrow-down"></i>@endif</a>
                                    <a href="{{ route('admin.agents.edit', $agent->id) }}" class="btn btn-sm btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
                                    <a href="{{ route('admin.agents.delete',['id' => $agent->id]) }}" class="btn btn-sm btn-danger" onclick="confirm('Are you sure to delete this?')"><i class="fa-solid fa-trash-can"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>



@endsection
