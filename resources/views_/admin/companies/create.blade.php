@extends('layouts.admin')
@section('content')

    <div class="card">
        <div class="card-header">
            {{--            {{ trans('global.show') }} {{ trans('cruds.asset.title') }}--}}
            Add Company
            <a href="{{ route('admin.companies.index') }}" class="btn btn-success float-right">
                <i class="fa-solid fa-circle-arrow-left"></i>
            </a>
        </div>

        <div class="card-body">
            <div>
                <form action="{{ isset($company)? route('admin.companies.update', $company->id) : route('admin.companies.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @if(!empty($company))
                        @method('PATCH')
                    @endif
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label for="name" class="col-md-4">Company Name <sup class="text-danger">*</sup></label>
                                <div  class="col-md-8">
                                    <input type="text" required name="name" class="form-control" value="{{ isset($company) ? $company->name : '' }}" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label for="name" class="col-md-4">Company Email</label>
                                <div  class="col-md-8">
                                    <input type="email" name="email" class="form-control" value="{{ isset($company) ? $company->email : '' }}" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label for="name" class="col-md-4">Company Phone Number <sup class="text-danger">*</sup></label>
                                <div  class="col-md-8">
                                    <input type="number" required name="phone_number" class="form-control" value="{{ isset($company) ? $company->phone_number : '' }}" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label for="name" class="col-md-4">Company Logo</label>
                                <div  class="col-md-8">
                                    <input type="file" name="logo_image" class="form-control-file"/>
                                    @if(isset($company))
                                        <img src="{{ asset($company->big_logo_image) }}" alt="{{ $company->name.'-logo' }}" class="table-img-size-round" />
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label for="name" class="col-md-4">Head Office Area</label>
                                <div  class="col-md-8">
                                    <input type="text" required name="head_office_area" class="form-control" value="{{ isset($company) ? $company->head_office_area : '' }}" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label for="name" class="col-md-4">Head office city</label>
                                <div  class="col-md-8">
                                    <input type="text" name="head_office_city" class="form-control" value="{{ isset($company) ? $company->head_office_city : '' }}" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label for="name" class="col-md-4">Head Office State</label>
                                <div  class="col-md-8">
                                    <input type="text" required name="head_office_state" class="form-control" value="{{ isset($company) ? $company->head_office_state : '' }}" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label for="name" class="col-md-4">ORN/Licence Number</label>
                                <div  class="col-md-8">
                                    <input type="text" required name="orn" class="form-control" value="{{ isset($company) ? $company->orn : '' }}" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label for="name" class="col-md-4">Location (Optional)</label>
                                <div  class="col-md-8">
                                    <textarea name="location" id="" cols="30" rows="2" class="form-control">{{ isset($company) ? $company->location : '' }}</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label for="name" class="col-md-4">Location Map Url(Optional)</label>
                                <div  class="col-md-8">
                                    <textarea name="location_map_url" id="" cols="30" rows="2" class="form-control">{{ isset($company) ? $company->location_map_url : '' }}</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label for="name" class="col-md-4">Company FB Profile (Optional)</label>
                                <div  class="col-md-8">
                                    <input type="text" name="fb_url" class="form-control" value="{{ isset($company) ? $company->fb_url : '' }}" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label for="name" class="col-md-4">Whatsapp Number (Optional)</label>
                                <div  class="col-md-8">
                                    <input type="text" name="whatsapp_number" class="form-control" value="{{ isset($company) ? $company->whatsapp_number : '' }}" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="name" class="">About Office (Optional)</label>
                                <div  class="">
                                    <textarea name="about_office" id="editor" cols="30" rows="2" class="form-control">{{ isset($company) ? $company->about_office : '' }}</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <input type="submit" class="btn btn-outline-secondary btn-block" value="{{ isset($company) ? 'Update' : 'Add' }} Company">
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
