@extends('layouts.admin')
@section('content')

    <div class="card">
        <div class="card-header">
            {{--            {{ trans('global.show') }} {{ trans('cruds.asset.title') }}--}}
            {{ isset($property) ? trans('global.update') : trans('global.add') }} {{ trans('cruds.property.title_singular') }}
            <a href="{{ route('admin.properties.index') }}" class="btn btn-success float-right">
                <i class="fa-solid fa-circle-arrow-left"></i>
            </a>
        </div>

        <div class="card-body">
            <div>
                <form action="{{ isset($property)? route('admin.properties.update', $property->id) : route('admin.properties.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @if(!empty($property))
                        @method('PATCH')
                    @endif
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label for="name" class="col-md-4">{{ trans('cruds.property.fields.company_name') }}<sup class="text-danger">*</sup></label>
                                <div  class="col-md-8">
                                    <select name="company_id" id="" class="form-control" required>
                                        <option value="" disabled {{ isset($property) ? '' : 'selected' }}>Select a company</option>
                                        @foreach($companies as $company)
                                            <option value="{{ $company->id }}" {{ $property->company_id == $company->id ? 'selected' : '' }}>{{ $company->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label for="name" class="col-md-4">{{ trans('cruds.property.fields.agent_name') }}<sup class="text-danger">*</sup></label>
                                <div  class="col-md-8">
                                    <select name="agent_id" id="" class="form-control" required>
                                        <option value="" disabled {{ isset($property) ? '' : 'selected' }}>Select an Agent</option>
                                        @foreach($agents as $agent)
                                            <option value="{{ $agent->id }}" {{ $property->agent_id == $agent->id ? 'selected' : '' }}>{{ $agent->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label for="name" class="col-md-4">{{ trans('cruds.property.fields.property_type') }}<sup class="text-danger">*</sup></label>
                                <div  class="col-md-8">
                                    <select name="property_type_id" id="" class="form-control" required>
                                        <option value="" disabled {{ isset($property) ? '' : 'selected' }}>Select a property type</option>
                                        @foreach($propertyTypes as $propertyType)
                                            <option value="{{ $propertyType->id }}" {{ $property->property_type_id == $propertyType->id ? 'selected' : '' }}>{{ $propertyType->type_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label for="name" class="col-md-4">{{ trans('cruds.property.fields.property_ads_type') }}<sup class="text-danger">*</sup></label>
                                <div  class="col-md-8">
                                    <select name="property_ads_type_id" id="" class="form-control" required>
                                        <option value="" disabled {{ isset($property) ? '' : 'selected' }}>Select an ads type</option>
                                        @foreach($propertyAdsTypes as $propertyAdsType)
                                            <option value="{{ $propertyAdsType->id }}" {{ $property->property_ads_type_id == $propertyAdsType->id ? 'selected' : '' }}>{{ $propertyAdsType->type_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label for="name" class="col-md-4">{{ trans('cruds.property.fields.property_promotion_type') }}<sup class="text-danger">*</sup></label>
                                <div  class="col-md-8">
                                    <select name="property_promotion_type_id" id="" class="form-control" required>
                                        <option value="" disabled {{ isset($property) ? '' : 'selected' }}> Select a promotion type</option>
                                        @foreach($propertyPromotionTypes as $propertyPromotionType)
                                            <option value="{{ $propertyPromotionType->id }}" {{ $property->property_promotion_type_id == $propertyPromotionType->id ? 'selected' : '' }}>{{ $propertyPromotionType->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label for="name" class="col-md-4">{{ trans('cruds.property.fields.property_title') }}<sup class="text-danger">*</sup></label>
                                <div  class="col-md-8">
                                    <input type="text" name="property_title" required class="form-control" value="{{ isset($property) ? $property->property_title : '' }}"/>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label for="name" class="col-md-4">{{ trans('cruds.property.fields.property_size') }} <sup class="text-danger">*</sup></label>
                                <div  class="col-md-8">
                                    <input type="text" required name="property_size" class="form-control" value="{{ isset($property) ? $property->property_size : '' }}"/>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label for="name" class="col-md-4">{{ trans('cruds.property.fields.bedrooms') }}<sup class="text-muted">(Optional)</sup></label>
                                <div  class="col-md-8">
                                    <input type="number" name="bedrooms" class="form-control" value="{{ isset($property) ? $property->bedrooms : '' }}" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label for="name" class="col-md-4">{{ trans('cruds.property.fields.bathrooms') }} <sup class="text-muted">(Optional)</sup></label>
                                <div  class="col-md-8">
                                    <input type="number" name="bathrooms" class="form-control" value="{{ isset($property) ? $property->bathrooms : '' }}" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label for="name" class="col-md-4">{{ trans('cruds.property.fields.parking') }}<sup class="text-muted">(Optional)</sup></label>
                                <div  class="col-md-8">
                                    <select name="parking" class="form-control" id="">
                                        <option value="" disabled>Select Parking Slot</option>
                                        <option value="no" {{ $property->parking == 'no' ? 'selected' : '' }}>No</option>
                                        <option value="1" {{ $property->parking == '1' ? 'selected' : '' }}>1</option>
                                        <option value="2" {{ $property->parking == '2' ? 'selected' : '' }}>2</option>
                                        <option value="3" {{ $property->parking == '3' ? 'selected' : '' }}>3</option>
                                        <option value="4" {{ $property->parking == '4' ? 'selected' : '' }}>4</option>
                                        <option value="5" {{ $property->parking == '5' ? 'selected' : '' }}>5</option>
                                        <option value="5+" {{ $property->parking == '5+' ? 'selected' : '' }}>5+</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label for="name" class="col-md-4">{{ trans('cruds.property.fields.property_complete_status') }}<sup class="text-danger">*</sup></label>
                                <div  class="col-md-8">
                                    <select name="property_completion" class="form-control" id="" required>
                                        <option value="1"  {{ $property->property_completion == 1 ? 'selected' : '' }}>Complete</option>
                                        <option value="0" {{ $property->property_completion == 0 ? 'selected' : '' }}>Not Complete</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label for="name" class="col-md-4">{{ trans('cruds.property.fields.property_price') }}<sup class="text-danger">*</sup></label>
                                <div  class="col-md-8">
                                    <input type="number" required name="property_price" class="form-control" value="{{ isset($property) ? $property->property_price : '' }}" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label for="name" class="col-md-4">{{ trans('cruds.property.fields.yearly_service_charge') }}<sup class="text-muted">(Optional)</sup></label>
                                <div  class="col-md-8">
                                    <input type="number" name="yearly_service_charge" class="form-control" value="{{ isset($property) ? $property->property_service_charge : '' }}" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label for="name" class="col-md-4">{{ trans('cruds.property.fields.rent_charge_per_year') }}<sup class="text-muted">(Optional)</sup></label>
                                <div  class="col-md-8">
                                    <input type="number" name="rent_charge_per_year" class="form-control" value="{{ isset($property) ? $property->rent_charge_per_year : '' }}" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label for="name" class="col-md-4">{{ trans('cruds.property.fields.property_interest_rate') }}  (%) <sup class="text-muted">(Optional)</sup></label>
                                <div  class="col-md-8">
                                    <input type="number" name="rent_charge_per_year" class="form-control" value="{{ isset($property) ? $property->property_interest_rate : '' }}" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label for="name" class="col-md-4">{{ trans('cruds.property.fields.location_area') }}<sup class="text-danger">*</sup></label>
                                <div  class="col-md-8">
                                    <input type="text" name="location_area" required class="form-control" value="{{ isset($property) ? $property->location_area : '' }}" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label for="name" class="col-md-4">{{ trans('cruds.property.fields.location_city') }} <sup class="text-danger">*</sup></label>
                                <div  class="col-md-8">
                                    <input type="text" name="location_city" required class="form-control" value="{{ isset($property) ? $property->location_city : '' }}" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label for="name" class="col-md-4">{{ trans('cruds.property.fields.location_state_or_country') }}<<sup class="text-danger">*</sup></label>
                                <div  class="col-md-8">
                                    <input type="text" name="location_country" required class="form-control" value="{{ isset($property) ? $property->location_country : '' }}" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label for="name" class="col-md-4">{{ trans('cruds.property.fields.property_image') }}<sup class="text-danger">*</sup></label>
                                <div  class="col-md-8">
                                    <input type="file" name="main_image" class="form-control-file" accept="image/*" />
                                    <img src="{{ asset($property->main_image) }}" alt="" class="table-img-size-round">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label for="name" class="col-md-4">{{ trans('cruds.property.fields.property_sub_images') }} <sup class="text-danger">*</sup></label>
                                <div  class="col-md-8">
                                    <input type="file" name="sub_images[]" multiple class="form-control-file" accept="image/*" />
                                    @foreach($property->subImages as $subImage)
                                        <img src="{{ asset($subImage->big_img_url) }}" alt="{{ $property->property_title }}" class="table-img-size-round ml-2">
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label for="name" class="col-md-4">{{ trans('cruds.property.fields.furnished') }}<sup class="text-danger">*</sup></label>
                                <div  class="col-md-8">
                                    <select name="is_furnished" class="form-control" id="" required>
                                        <option value="1" {{ isset($property) && $property->is_furnished == 1 ? 'selected' : '' }}>Yes</option>
                                        <option value="0" {{ isset($property) && $property->is_furnished == 1 ? 'selected' : '' }}>No</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label for="name" class="col-md-4">{{ trans('cruds.property.fields.verify_property') }}<sup class="text-danger">*</sup></label>
                                <div  class="col-md-8">
                                    <select name="is_verified" class="form-control" id="" required>
                                        <option value="1" {{ $property->is_verified == 1 ? 'selected' : '' }}>Yes</option>
                                        <option value="0" {{ $property->is_verified == 0 ? 'selected' : '' }}>No</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="name" class="">{{ trans('cruds.property.fields.property_description') }}<sup class="text-danger">*</sup></label>
                                <div  class="">
                                    <textarea name="property_description" required id="editor" cols="30" rows="2">{!! $property->property_description !!}</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label for="name" class="col-md-4">{{ trans('cruds.property.fields.property_latitude') }} <sup class="text-danger">*</sup></label>
                                <div  class="col-md-8">
                                    <input type="text" name="lat" class="form-control" value="{{ $property->lat }}"/>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label for="name" class="col-md-4">{{ trans('cruds.property.fields.property_longitude') }} <sup class="text-muted">(optional)</sup></label>
                                <div  class="col-md-8">
                                    <input type="text" name="lon" class="form-control" value="{{ $property->lon }}"/>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label for="name" class="col-md-4">{{ trans('cruds.property.fields.property_map') }} <sup class="text-danger">*</sup></label>
                                <div  class="col-md-8">
                                    <input type="text" name="property_map_url" class="form-control" value="{!! $property->property_map_url !!}"/>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label for="name" class="col-md-4">{{ trans('cruds.property.fields.property_video') }}<sup class="text-muted">(optional)</sup></label>
                                <div  class="col-md-8">
                                    <input type="text" name="property_video_url" class="form-control" value="{{ $property->property_video_url }}" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label for="name" class="col-md-4">{{ trans('cruds.property.fields.property_360_view') }}<sup class="text-muted">(optional)</sup></label>
                                <div  class="col-md-8">
                                    <input type="file" name="panoramic_360_view" class="form-control-file" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label for="name" class="col-md-4">{{ trans('cruds.property.fields.property_status') }} <sup class="text-danger">*</sup></label>
                                <div  class="col-md-8">
                                    <input type="radio" name="status" value="1" {{ $property->status == 1 ? 'checked' : '' }}> Published
                                    <input type="radio" name="status" value="0" {{ $property->status == 0 ? 'checked' : '' }}> Unpublished
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <input type="submit" class="btn btn-outline-secondary btn-block" value="{{ isset($property) ? 'Update' : 'Add' }} {{ trans('cruds.property.title_singular') }}">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>



@endsection
