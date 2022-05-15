@extends('layouts.admin')
@section('content')

    <div class="card">
        <div class="card-header">
{{--            {{ trans('global.show') }} {{ trans('cruds.asset.title') }}--}}
            {{-- All Companies --}}
            {{ trans('global.all') }} {{ trans('cruds.companies.title') }}
            <a href="{{ route('admin.companies.create') }}" class="btn btn-success float-right">
                <i class="fa-solid fa-circle-plus"></i>
            </a>
        </div>

        <div class="card-body">
            <div>
                <table class="table" id="myTable">
                    <thead>
                        <tr>
                            <th>{{ trans('cruds.companies.fields.id') }}</th>
                            <th>{{ trans('cruds.companies.fields.name') }}</th>
                            <th>{{ trans('cruds.companies.fields.email') }}</th>
                            <th>{{ trans('cruds.companies.fields.phone_number') }}</th>
                            <th>{{ trans('cruds.companies.fields.logo') }}</th>
                            <th>{{ trans('cruds.companies.fields.location_area') }}</th>
                            <th>{{ trans('cruds.companies.fields.orn') }}</th>
                            <th>{{ trans('cruds.companies.fields.about_office') }}</th>
                            <th>{{ trans('cruds.companies.fields.social_links') }}</th>
                            <th>{{ trans('cruds.companies.fields.status') }}</th>
                            <th>{{ trans('global.action') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($companies as $company)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $company->name }}</td>
                                <td>{{ $company->email }}</td>
                                <td>{{ $company->Phone_number }}</td>
                                <td><img src="{{ asset($company->big_logo_image) }}" alt="{{ $company->name }}" class="table-img-size-round"></td>
                                <td>
                                    {!! $company->head_office_area !!}, {!! $company->head_office_city !!}, {!! $company->head_office_state !!}
                                </td>
                                <td>{{ $company->orn }}</td>
                                <td>
                                    {!! substr_replace($company->about_office, '<a href="#" class="btn btn-sm btn-secondary">Read more</a>', 60) !!}

                                </td>
                                <td>
                                    <div>
                                        {{ trans('cruds.companies.fields.whatsapp_number') }}: {{ $company->whatsapp_number }}
                                    </div>
                                    <div>
                                        @if(isset($company->fb_url))
                                        {{ trans('cruds.companies.fields.fb_profile') }}: <a href="{{ $company->fb_url }}" target="_blank" class="btn mr-2"><i class="fa-brands fa-facebook"></i></a>
                                        @endif
                                    </div>
                                </td>
                                <td>{{ $company->status == 1 ? 'Published' : 'Unpublished' }}</td>
                                <td>
                                    <a href="{{ route('admin.companies.status', ['id' => $company->id]) }}" class="btn btn-sm btn-{{ $company->status == 1 ? 'success' : 'secondary' }}">@if($company->status == 1)<i class="fa-solid fa-arrow-up"></i>@else<i class="fa-solid fa-arrow-down"></i>@endif</a>
                                    <a href="{{ route('admin.companies.edit', $company->id) }}" class="btn btn-sm btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
                                    <a href="{{ route('admin.companies.delete',['id' => $company->id]) }}" class="btn btn-sm btn-danger" onclick="confirm('Are you sure to delete this?')"><i class="fa-solid fa-trash-can"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>



@endsection
