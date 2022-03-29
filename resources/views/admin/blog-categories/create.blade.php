@extends('layouts.admin')
@section('content')

    <div class="card">
        <div class="card-header">
            {{--            {{ trans('global.show') }} {{ trans('cruds.asset.title') }}--}}
            Add Blog Category
            <a href="{{ route('admin.blog-categories.index') }}" class="btn btn-success float-right">
                <i class="fa-solid fa-circle-arrow-left"></i>
            </a>
        </div>

        <div class="card-body">
            <div>
                <form action="{{ isset($blogCategory)? route('admin.blog-categories.update', $blogCategory->id) : route('admin.blog-categories.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @if(!empty($blogCategory))
                        @method('PATCH')
                    @endif
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label for="name" class="col-md-4">Category Name <sup class="text-danger">*</sup></label>
                                <div  class="col-md-8">
                                    <input type="text" required name="name" class="form-control" value="{{ isset($blogCategory) ? $blogCategory->name : '' }}" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label for="name" class="col-md-4">Category Image</label>
                                <div  class="col-md-8">
                                    <input type="file" name="image" accept="image/*" />
                                    @if(isset($blogCategory))
                                        <img src="{{ asset($blogCategory->image) }}" alt="{{ $blogCategory->name }}" class="table-img-size-round" />
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <input type="submit" class="btn btn-outline-secondary btn-block" value="Add Blog Category">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>



@endsection
