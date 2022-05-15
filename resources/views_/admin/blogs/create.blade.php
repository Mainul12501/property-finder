@extends('layouts.admin')
@section('content')

    <div class="card">
        <div class="card-header">
            {{--            {{ trans('global.show') }} {{ trans('cruds.asset.title') }}--}}
            {{isset($blog) ? 'Update' : 'Add' }} Blog
            <a href="{{ route('admin.blogs.index') }}" class="btn btn-success float-right">
                <i class="fa-solid fa-circle-arrow-left"></i>
            </a>
        </div>

        <div class="card-body">
            <div>
                <form action="{{ isset($blog)? route('admin.blogs.update', $blog->id) : route('admin.blogs.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @if(!empty($blog))
                        @method('PATCH')
                    @endif
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label for="name" class="col-md-4">Blog Type Name <sup class="text-danger">*</sup></label>
                                <div  class="col-md-8">
                                    <select name="blog_category_id" id="" class="form-control" required>
                                        <option value="" {{ isset($blog->blog_category_id) ? '' : 'selected' }} disabled>Select Blog Type</option>
                                        @foreach($blogCategories as $blogCategorie)
                                            <option value="{{ $blogCategorie->id }}" {{ isset($blog) && $blog->blog_category_id == $blogCategorie->id ? 'selected' : '' }}>{{ $blogCategorie->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label for="name" class="col-md-4">Blog Title <sup class="text-danger">*</sup></label>
                                <div  class="col-md-8">
                                    <input type="text" required name="blog_title" class="form-control" value="{{ isset($blog) ? $blog->blog_title : '' }}" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label for="name" class="col-md-4">Main Image</label>
                                <div  class="col-md-8">
                                    <input type="file" name="main_image" accept="image/*" />
                                    @if(isset($blog))
                                        <img src="{{ asset($blog->main_image) }}" alt="{{ $blog->name }}" class="table-img-size-round" />
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6"></div>
                        <div class="col-md-12">
                            <div class="form-group ">
                                <label for="name" class="">Blog Content</label>
                                <div  class="">
                                    <textarea name="content" class="" id="editor" cols="30" rows="10">{{ isset($blog) ? $blog->content : '' }}</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <input type="submit" class="btn btn-outline-secondary btn-block" value="{{isset($blog) ? 'Update' : 'Add' }} Blog">
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
