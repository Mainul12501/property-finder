@extends('layouts.admin')
@section('content')

    <div class="card">
        <div class="card-header">
            {{--            {{ trans('global.show') }} {{ trans('cruds.asset.title') }}--}}
            {{-- Add Site Info --}}
            {{ trans('global.add') }} {{ trans('cruds.siteSettings.fields.site_info') }}
{{--            <a href="{{ route('admin.site-settings.index') }}" class="btn btn-success float-right">--}}
{{--                <i class="fa-solid fa-circle-arrow-left"></i>--}}
{{--            </a>--}}
        </div>

        <div class="card-body">
            <div>
                <form action="{{ isset($siteSetting)? route('admin.site-settings.update', $siteSetting->id) : route('admin.site-settings.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @if(!empty($siteSetting))
                        @method('PATCH')
                    @endif
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label for="name" class="col-md-4">{{ trans('cruds.siteSettings.fields.site_title') }}<sup class="text-danger">*</sup></label>
                                <div  class="col-md-8">
                                    <input type="text" name="site_title" class="form-control" value="{{ isset($siteSetting) ? $siteSetting->site_title : '' }}" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label for="name" class="col-md-4">{{ trans('cruds.siteSettings.fields.site_name') }}<sup class="text-danger">*</sup></label>
                                <div  class="col-md-8">
                                    <input type="text"  name="site_name" class="form-control" value="{{ isset($siteSetting) ? $siteSetting->site_name : '' }}" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label for="name" class="col-md-4">{{ trans('cruds.siteSettings.fields.site_logo') }}<sup class="text-danger">*</sup></label>
                                <div  class="col-md-8">
                                    <input type="file"  name="site_logo" class="form-control-file" />
                                    @if(isset($siteSetting->site_logo))
                                        <img src="{{ asset($siteSetting->site_logo) }}" alt="{{ $siteSetting->site_title.'-logo' }}" style="height: 100px; width: 100px" class="mt-2"/>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label for="name" class="col-md-4">{{ trans('cruds.siteSettings.fields.site_banner') }}</label>
                                <div  class="col-md-8">
                                    <input type="file" name="site_banner" class="form-control-file"/>
                                    @if(isset($siteSetting))
                                        <img src="{{ asset($siteSetting->site_banner) }}" alt="{{ $siteSetting->site_title.'-banner' }}" class="table-img-size-round mt-2" />
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group row">
                                <label for="name" class="col-md-2">{{ trans('cruds.siteSettings.fields.site_meta') }}</label>
                                <div  class="col-md-10">
                                    {{--                                    <input type="email" name="email" class="form-control" value="{{ isset($siteSetting) ? $siteSetting->site_meta : '' }}" />--}}
                                    <textarea name="site_meta" id="editor" cols="30" rows="10">{{ isset($siteSetting) ? $siteSetting->site_meta : '' }}</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <input type="submit" class="btn btn-outline-secondary btn-block" value="{{ isset($siteSetting) ? 'Update' : 'Add' }} {{ trans('cruds.siteSettings.fields.site_info') }}">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>



@endsection

@section('scripts')
    <script>
        CKEDITOR.replace('editor');
    </script>
@endsection
