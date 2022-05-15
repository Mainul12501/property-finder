@extends('layouts.admin')
@section('content')

    <div class="card">
        <div class="card-header">
            {{--            {{ trans('global.show') }} {{ trans('cruds.asset.title') }}--}}
            {{ isset($propertyPromotionType) ? trans('global.update') : trans('global.add') }}  {{ trans('cruds.propertyPromotionType.title') }}
            <a href="{{ route('admin.property-promotion-types.index') }}" class="btn btn-success float-right">
                <i class="fa-solid fa-circle-arrow-left"></i>
            </a>
        </div>

        <div class="card-body">
            <div>
                <form action="{{ isset($propertyPromotionType)? route('admin.property-promotion-types.update', $propertyPromotionType->id) : route('admin.property-promotion-types.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @if(!empty($propertyPromotionType))
                        @method('PATCH')
                    @endif
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label for="name" class="col-md-4">{{ trans('cruds.propertyPromotionType.fields.property_type_name') }} <sup class="text-danger">*</sup></label>
                                <div  class="col-md-8">
                                    <input type="text" required name="name" class="form-control" value="{{ isset($propertyPromotionType) ? $propertyPromotionType->name : '' }}" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <input type="submit" class="btn btn-outline-secondary btn-block" value="{{ isset($propertyPromotionType) ? 'Update' : 'Add' }} {{ trans('cruds.propertyPromotionType.title_singular') }}">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>



@endsection
