@extends('layouts.admin')
@section('content')

    <div class="card">
        <div class="card-header">
{{--            {{ trans('global.show') }} {{ trans('cruds.asset.title') }}--}}
            {{-- All Blog Categories --}}
            {{ trans('global.all') }} {{ trans('cruds.blogCategories.title') }}
            <a href="{{ route('admin.blogs.create') }}" class="btn btn-success float-right">
                <i class="fa-solid fa-circle-plus"></i>
            </a>
        </div>

        <div class="card-body">
            <div>
                <table class="table" id="myTable">
                    <thead>
                        <tr>
                            <th>{{ trans('cruds.blogs.fields.id') }}</th>
                            <th>{{ trans('cruds.blogs.fields.title') }}</th>
                            <th>{{ trans('cruds.blogs.fields.category') }}</th>
                            <th>{{ trans('cruds.blogs.fields.main_image') }}</th>
                            <th>{{ trans('cruds.blogs.fields.content') }}</th>
                            <th>{{ trans('cruds.blogs.fields.status') }}</th>
                            <th>{{ trans('global.action') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($blogs as $blog)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $blog->blog_title }}</td>
                                <td>{{ $blog->blogCategory->name }}</td>
                                <td><img src="{{ asset($blog->main_image) }}" alt="{{ $blog->main_image }}" class="table-img-size-round"></td>
                                <td>
                                    {!! substr_replace($blog->content, '<a href="#" class="btn btn-sm btn-secondary">Read more</a>', 60) !!}

                                </td>
                                <td>{{ $blog->status == 1 ? 'Published' : 'Unpublished' }}</td>
                                <td>
                                    <a href="{{ route('admin.blogs.status', ['id' => $blog->id]) }}" class="btn btn-sm btn-{{ $blog->status == 1 ? 'success' : 'secondary' }}">@if($blog->status == 1)<i class="fa-solid fa-arrow-up"></i>@else<i class="fa-solid fa-arrow-down"></i>@endif</a>
                                    <a href="{{ route('admin.blogs.edit', $blog->id) }}" class="btn btn-sm btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
                                    <a href="{{ route('admin.blogs.delete',['id' => $blog->id]) }}" class="btn btn-sm btn-danger" onclick="confirm('Are you sure to delete this?')"><i class="fa-solid fa-trash-can"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>



@endsection
