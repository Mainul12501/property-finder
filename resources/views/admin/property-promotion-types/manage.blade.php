@extends('layouts.admin')
@section('content')

    <div class="card">
        <div class="card-header">
{{--            {{ trans('global.show') }} {{ trans('cruds.asset.title') }}--}}
            All Property Promotion Types
            <a href="{{ route('admin.property-promotion-types.create') }}" class="btn btn-success float-right">
                <i class="fa-solid fa-circle-plus"></i>
            </a>
        </div>

        <div class="card-body">
            <div>
                <table class="table" id="myTable">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($propertyPromotionTypes as $propertyPromotionType)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $propertyPromotionType->name }}</td>
                                <td>{{ $propertyPromotionType->status == 1 ? 'Published' : 'Unpublished' }}</td>
                                <td>
                                    <a href="{{ route('admin.property-promotion-types.status', ['id' => $propertyPromotionType->id]) }}" class="btn btn-sm btn-{{ $propertyPromotionType->status == 1 ? 'success' : 'secondary' }}">@if($propertyPromotionType->status == 1)<i class="fa-solid fa-arrow-up"></i>@else<i class="fa-solid fa-arrow-down"></i>@endif</a>
                                    <a href="{{ route('admin.property-promotion-types.edit', $propertyPromotionType->id) }}" class="btn btn-sm btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
                                    <a href="{{ route('admin.property-promotion-types.delete',['id' => $propertyPromotionType->id]) }}" class="btn btn-sm btn-danger" onclick="confirm('Are you sure to delete this?')"><i class="fa-solid fa-trash-can"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>



@endsection
