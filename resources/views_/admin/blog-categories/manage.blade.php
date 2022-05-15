@extends('layouts.admin')
@section('content')

    <div class="card">
        <div class="card-header">
{{--            {{ trans('global.show') }} {{ trans('cruds.asset.title') }}--}}
            All Blog Categories
            <a href="{{ route('admin.blog-categories.create') }}" class="btn btn-success float-right">
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
                            <th>Image</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($blogCategories as $blogCategory)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $blogCategory->name }}</td>
                                <td><img src="{{ asset($blogCategory->image) }}" alt="{{ $blogCategory->name }}" class="table-img-size-round"></td>
                                <td>{{ $blogCategory->status == 1 ? 'Published' : 'Unpublished' }}</td>
                                <td>
                                    <a href="{{ route('admin.blog-categories.status', ['id' => $blogCategory->id]) }}" class="btn btn-sm btn-{{ $blogCategory->status == 1 ? 'success' : 'secondary' }}">@if($blogCategory->status == 1)<i class="fa-solid fa-arrow-up"></i>@else<i class="fa-solid fa-arrow-down"></i>@endif</a>
                                    <a href="{{ route('admin.blog-categories.edit', $blogCategory->id) }}" class="btn btn-sm btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
                                    <a href="{{ route('admin.blog-categories.delete',['id' => $blogCategory->id]) }}" class="btn btn-sm btn-danger" onclick="confirm('Are you sure to delete this?')"><i class="fa-solid fa-trash-can"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>



@endsection
