@extends('layouts.admin')
@section('content')

    <div class="card">
        <div class="card-header">
            {{--            {{ trans('global.show') }} {{ trans('cruds.asset.title') }}--}}
            {{-- Add Blog Category --}}
            {{ isset($propertyType) ? trans('global.update') : trans('global.add') }} {{ trans('cruds.blogCategories.title_singular') }}
            <a href="{{ route('admin.property-types.index') }}" class="btn btn-success float-right">
                <i class="fa-solid fa-circle-arrow-left"></i>
            </a>
        </div>

        <div class="card-body">
            <div>
                <form action="{{ isset($propertyType)? route('admin.property-types.update', $propertyType->id) : route('admin.property-types.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @if(!empty($propertyType))
                        @method('PATCH')
                    @endif
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label for="name" class="col-md-4">{{ trans('cruds.propertyType.fields.property_type_name') }}<sup class="text-danger">*</sup></label>
                                <div  class="col-md-8">
                                    <input type="text" required name="type_name" class="form-control" value="{{ isset($propertyType) ? $propertyType->type_name : '' }}" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <input type="submit" class="btn btn-outline-secondary btn-block" value="{{ isset($propertyType) ? 'Update' : 'Add' }} {{ trans('cruds.propertyType.title_singular') }}">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>



@endsection
