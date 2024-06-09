@extends('backends.master')
@section('title')
<title>{{ __('Insert Category :: Newscripts') }}</title>
@endsection
@section('main_contents')
<div id="main-content">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-5 col-md-8 col-sm-12">                        
                    <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a>{{ __('Category Lists') }}</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route(auth()->user()->type) }}"><i class="icon-home"></i></a></li>                            
                        <li class="breadcrumb-item active">{{ __('Insert Category') }}</li>
                    </ul>
                </div>
                <div class="col-lg-7 col-md-4 col-sm-12 text-right">
                    <div class="inlineblock text-center m-r-15 m-l-15 hidden-sm">
                        <a href="{{ route('category') }}" class="btn btn-warning">Back Category</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row clearfix">
            <div class="col-md-12">
                <div class="card">
                    <div class="header">
                        <h2 class="text-center">Insert New Category</h2>
                    </div>
                    <div class="body">
                        <form id="basic-form" method="post" action="{{ route('create.category') }}">@csrf
                            <div class="form-group row">
                                <div class="col-md-6">
                                    <label for="nameInput">{{ __('Category Name') }}</label>
                                    <input type="text" name="name" id="nameInput" class="form-control @error('name') is-invalid @enderror" required>
                                    @error('password') <span class="invalid-feedback" role="alert"> <strong>{{ $message }}</strong></span>@enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="slugInput">{{ __('Category Slug') }}</label>
                                    <input type="text" name="slug" id="slugInput" class="form-control @error('slug') is-invalid @enderror" required>
                                    @error('password') <span class="invalid-feedback" role="alert"> <strong>{{ $message }}</strong></span>@enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-6">
                                    <label for="metaInput">{{ __('Meta Tags') }}</label>
                                    <textarea class="form-control" name="meta_tags" rows="2"></textarea>
                                </div>
                                <div class="col-md-6">
                                    <label for="metaInput">{{ __('Meta Desc') }}</label>
                                    <textarea class="form-control" name="meta_desc" rows="2"></textarea>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label>{{ __('Status') }}</label>
                                <br />
                                <label class="fancy-radio">
                                    <input type="radio" name="status" value="active" checked>
                                    <span><i></i>{{ __('Active') }}</span>
                                </label>
                                <label class="fancy-radio">
                                    <input type="radio" name="status" value="inactive">
                                    <span><i></i>{{ __('Inactive') }}</span>
                                </label>
                                <p id="error-radio"></p>
                            </div>
                            <br>
                            <button type="submit" class="btn btn-warning btn-block">{{ __('Publish') }}</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
    <!-- Javascript -->
    <script>
        $(function() {
            // validation needs name of the element
            $('#food').multiselect();
        
            // initialize after multiselect
            $('#basic-form').parsley();
        });
    </script>
@endsection