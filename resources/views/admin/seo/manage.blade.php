@extends('layouts.admin')
@section('content')

    <div class="card">
        <div class="card-header">
{{--            {{ trans('global.show') }} {{ trans('cruds.asset.title') }}--}}
            All SEO Infos
            <a href="{{ route('admin.seo.create') }}" class="btn btn-success float-right">
                <i class="fa-solid fa-circle-plus"></i>
            </a>
        </div>

        <div class="card-body">
            <div>
                <table class="table" id="myTable">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Url Type</th>
                            <th>Static Url</th>
                            <th>property Name</th>
                            <th>Blog Title</th>
                            <th>Header Content</th>
                            <th>footer Content</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($seos as $seo)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $seo->url_type }}</td>
                                <td>{!! $seo->static_url !!}</td>
                                <td>{!! $seo->property->property_title !!}</td>
                                <td>{!! $seo->blog->blog_title !!}</td>
                                <td>{!! $seo->header_content !!}</td>
                                <td>{!! $seo->footer_content !!}</td>
                                <td>{{ $seo->status == 1 ? 'Published' : 'Unpublished' }}</td>
                                <td>
                                    <a href="{{ route('admin.seo.status', ['id' => $seo->id]) }}" class="btn btn-sm btn-{{ $seo->status == 1 ? 'success' : 'secondary' }}">@if($seo->status == 1)<i class="fa-solid fa-arrow-up"></i>@else<i class="fa-solid fa-arrow-down"></i>@endif</a>
                                    <a href="{{ route('admin.seo.edit', $seo->id) }}" class="btn btn-sm btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
                                    <a href="{{ route('admin.seo.delete',['id' => $seo->id]) }}" class="btn btn-sm btn-danger" onclick="confirm('Are you sure to delete this?')"><i class="fa-solid fa-trash-can"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>



@endsection
