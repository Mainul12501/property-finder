@extends('layouts.admin')
@section('content')

    <div class="card">
        <div class="card-header">
            {{--            {{ trans('global.show') }} {{ trans('cruds.asset.title') }}--}}
            {{ isset($seo) ? 'Update' : 'Add' }} Property SEO
            <a href="{{ route('admin.seo.index') }}" class="btn btn-success float-right">
                <i class="fa-solid fa-circle-arrow-left"></i>
            </a>
        </div>

        <div class="card-body">
            <div>
                <form action="{{ isset($seo)? route('admin.seo.update', $seo->id) : route('admin.seo.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @if(!empty($seo))
                        @method('PATCH')
                    @endif
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label for="name" class="col-md-4">Static Url </label>
                                <div  class="col-md-8">
                                    <input type="text" name="static_url" class="form-control" value="{{ isset($seo) ? $seo->static_url : '' }}" />
                                    <span class="text-sm-center">Please write page url here.</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label for="name" class="col-md-4">Url Type </label>
                                <div  class="col-md-8">
                                    <input type="radio" name="url_type" class="" value="default" {{ isset($seo) && $seo->url_tpe == 'default' ? 'checked' : '' }} checked/> Default
                                    <input type="radio" name="url_type" class="" value="property" {{ isset($seo) && $seo->url_tpe == 'property' ? 'checked' : '' }}/> Property Url
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label for="name" class="col-md-4">Property Name </label>
                                <div  class="col-md-8">
                                    <select name="property_id" id="" class="form-control">
                                        @foreach($properties as $property)
                                            <option value="{{ $property->id }}" {{ isset($seo) && $seo->property_id == $property->id ? 'selected' : '' }} >{{ $property->property_title }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label for="name" class="col-md-4">Blog Title </label>
                                <div  class="col-md-8">
                                    <select name="blog_id" id="" class="form-control">
                                        @foreach($blogs as $blog)
                                            <option value="{{ $blog->id }}" {{ isset($seo) && $seo->blog_id == $blog->id ? 'selected' : '' }} >{{ $blog->blog_title }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label for="name" class="col-md-4">Status</label>
                                <div  class="col-md-8">
                                    <label for=""><input type="radio" name="status" value="1" {{ isset($seo) && $seo->status == 1 ? 'checked' : '' }} > Published</label>
                                    <label for=""><input type="radio" name="status" value="0" {{ isset($seo) && $seo->status == 0 ? 'checked' : '' }}> Unpublished</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6"></div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name" class="">Header Content</label>
                                <div  class="">
                                    <textarea name="header_content" class="form-control" id="" cols="30" rows="2">{{ isset($seo) ? $seo->header_content : '' }}</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name" class="">Footer Content</label>
                                <div  class="">
                                    <textarea name="footer_content" class="form-control" id="" cols="30" rows="2">{{ isset($seo) ? $seo->footer_content : '' }}</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <input type="submit" class="btn btn-outline-secondary btn-block" value="{{ isset($seo) ? 'Update' : 'Add' }} SEO Content">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
