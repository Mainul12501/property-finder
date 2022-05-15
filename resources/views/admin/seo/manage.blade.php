@extends('layouts.admin')
@section('content')

    <div class="card">
        <div class="card-header">
{{--            {{ trans('global.show') }} {{ trans('cruds.asset.title') }}--}}
            {{-- All SEO Infos --}}
            {{ trans('global.all') }} {{ trans('cruds.seoManagement.fields.seo_infos') }}
            <a href="{{ route('admin.seo.create') }}" class="btn btn-success float-right">
                <i class="fa-solid fa-circle-plus"></i>
            </a>
        </div>

        <div class="card-body">
            <div>
                <table class="table" id="myTable">
                    <thead>
                        <tr>
                            <th>{{ trans('cruds.seoManagement.fields.id') }}</th>
                            <th>{{ trans('cruds.seoManagement.fields.url_type') }}</th>
                            <th>{{ trans('cruds.seoManagement.fields.static_url') }}</th>
                            <th>{{ trans('cruds.seoManagement.fields.property_name') }}</th>
                            <th>{{ trans('cruds.seoManagement.fields.blog_title') }}</th>
                            <th>{{ trans('cruds.seoManagement.fields.header_content') }}</th>
                            <th>{{ trans('cruds.seoManagement.fields.footer_content') }}</th>
                            <th>{{ trans('cruds.seoManagement.fields.status') }}</th>
                            <th>{{ trans('global.action') }}</th>
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
