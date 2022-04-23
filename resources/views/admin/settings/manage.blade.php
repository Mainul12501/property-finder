@extends('layouts.admin')
@section('content')

    <div class="card">
        <div class="card-header">
{{--            {{ trans('global.show') }} {{ trans('cruds.asset.title') }}--}}
            All Companies
            <a href="{{ route('admin.site-settings.create') }}" class="btn btn-success float-right">
                <i class="fa-solid fa-circle-plus"></i>
            </a>
        </div>

        <div class="card-body">
            <div>
                <table class="table" id="myTable">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Title</th>
                            <th>Name</th>
                            <th>Meta</th>
                            <th>Logo</th>
                            <th>Banner</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($siteSettings as $company)
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
                                        whatsapp Number: {{ $company->whatsapp_number }}
                                    </div>
                                    <div>
                                        @if(isset($company->fb_url))
                                            Fb Profile: <a href="{{ $company->fb_url }}" target="_blank" class="btn mr-2"><i class="fa-brands fa-facebook"></i></a>
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
