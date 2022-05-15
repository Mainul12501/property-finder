@extends('layouts.admin')
@section('content')

    <div class="card">
        <div class="card-header">
{{--            {{ trans('global.show') }} {{ trans('cruds.asset.title') }}--}}
            {{-- All Blog Categories --}}
            {{ trans('global.all') }} {{ trans('cruds.blogCategories.title') }}
            <a href="{{ route('admin.property-types.create') }}" class="btn btn-success float-right">
                <i class="fa-solid fa-circle-plus"></i>
            </a>
        </div>

        <div class="card-body">
            <div>
                <table class="table" id="myTable">
                    <thead>
                        <tr>
                            <th>{{ trans('cruds.propertyType.fields.id') }}</th>
                            <th>{{ trans('cruds.propertyType.fields.name') }}</th>
                            <th>{{ trans('cruds.propertyType.fields.status') }}</th>
                            <th>{{ trans('global.action') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($propertyTypes as $propertyType)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $propertyType->type_name }}</td>
                                <td>{{ $propertyType->status == 1 ? 'Published' : 'Unpublished' }}</td>
                                <td>
                                    <a href="{{ route('admin.property-types.status', ['id' => $propertyType->id]) }}" class="btn btn-sm btn-{{ $propertyType->status == 1 ? 'success' : 'secondary' }}">@if($propertyType->status == 1)<i class="fa-solid fa-arrow-up"></i>@else<i class="fa-solid fa-arrow-down"></i>@endif</a>
                                    <a href="{{ route('admin.property-types.edit', $propertyType->id) }}" class="btn btn-sm btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
                                    <a href="{{ route('admin.property-types.delete',['id' => $propertyType->id]) }}" class="btn btn-sm btn-danger" onclick="confirm('Are you sure to delete this?')"><i class="fa-solid fa-trash-can"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>



@endsection
