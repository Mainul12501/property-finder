@extends('layouts.admin')
@section('content')

    <div class="card">
        <div class="card-header">
{{--            {{ trans('global.show') }} {{ trans('cruds.asset.title') }}--}}
            All Properties
            <a href="{{ route('admin.properties.create') }}" class="btn btn-success float-right">
                <i class="fa-solid fa-circle-plus"></i>
            </a>
        </div>

        <div class="card-body">
            <div>
                <table class="table table-responsive" id="myTable">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Company Name</th>
                            <th>Agent Name</th>
                            <th>Property Type</th>
                            <th>Ads Type</th>
                            <th>Promotion Type</th>
                            <th>Title</th>
                            <th>Size</th>
                            <th>Bedrooms</th>
                            <th>Bathrooms</th>
                            <th>Price</th>
                            <th>Parking</th>
                            <th>Yearly Charge</th>
                            <th>Rent Charge</th>
                            <th>Interest Rate</th>
                            <th>Location</th>
                            <th>Latitude</th>
                            <th>Longitude</th>
                            <th>Description</th>
                            <th>Property Completion</th>
                            <th>Furnished</th>
                            <th>Image</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($properties as $property)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $property->company->name }}</td>
                                <td>{{ $property->agent->name }}</td>
                                <td>{{ $property->propertyType->type_name }}</td>
                                <td>{{ $property->propertyAdsType->type_name }}</td>
                                <td>{{ $property->propertyPromotionType->name }}</td>
                                <td>{{ $property->property_title }}</td>
                                <td>{{ $property->property_size }}</td>
                                <td>{{ $property->bedrooms }}</td>
                                <td>{{ $property->bathrooms }}</td>
                                <td>{{ $property->property_price }}</td>
                                <td>{{ $property->parking }}</td>
                                <td>{{ $property->yearly_service_charge }}</td>
                                <td>{{ $property->rent_charge_per_year }}</td>
                                <td>{{ $property->property_interest_rate }}</td>
                                <td>{{ $property->location_area }}, {{ $property->location_city }}, {{ $property->location_country }}</td>
                                <td>{{ $property->lat }}</td>
                                <td>{{ $property->lon }}</td>
                                <td>{{ substr_replace($property->property_description,'....', 60) }}</td>
                                <td>{{ $property->property_completion == 1 ? 'Completed' : 'Not Complete' }}</td>
                                <td>{{ $property->is_furnished == 1 ? 'Furnished' : 'Not Furnished' }}</td>
                                <td>
                                    <img src="{{ asset($property->main_image) }}" alt="{{ $property->property_title }}" class="table-img-size-round" />
                                </td>
                                <td>{{ $property->status == 1 ? 'Published' : 'Unpublished' }}</td>
                                <td>
                                    <a href="{{ route('admin.properties.status', ['id' => $property->id]) }}" class="btn btn-sm btn-{{ $property->status == 1 ? 'success' : 'secondary' }}">@if($property->status == 1)<i class="fa-solid fa-arrow-up"></i>@else<i class="fa-solid fa-arrow-down"></i>@endif</a>
                                    <a href="{{ route('admin.properties.edit', $property->id) }}" class="btn btn-sm btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
                                    <a href="{{ route('admin.properties.delete',['id' => $property->id]) }}" class="btn btn-sm btn-danger" onclick="confirm('Are you sure to delete this?')"><i class="fa-solid fa-trash-can"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>



@endsection
