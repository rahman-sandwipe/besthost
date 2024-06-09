@extends('backends.master')
@section('title')
<title>Register New Auth :: Newscripts</title>
@endsection
@section('register_contents')
<div class="vertical-align-wrap">
    <div class="vertical-align-middle">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="header">
                            <p class="lead text-center">Create an account</p>
                        </div>
                        <div class="body">
                            <form method="post" action="{{ route('register') }}" class="form-auth-small row">
                                @csrf
                                <!-- Name -->
                                <div class="form-group col-6">
                                    <label for="name" class="control-label sr-only">{{ __('Name') }}</label>
                                    <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" placeholder="Name" required>
                                    @error('name') <span class="invalid-feedback" role="alert"> <strong>{{ $message }}</strong></span>@enderror
                                </div>
                                <!-- Username -->
                                <div class="form-group col-6">
                                    <label for="username" class="control-label sr-only">{{ __('Username') }}</label>
                                    <input type="text" name="username" id="username" class="form-control @error('username') is-invalid @enderror" placeholder="username" required>
                                    @error('username') <span class="invalid-feedback" role="alert"> <strong>{{ $message }}</strong></span>@enderror
                                </div>
        
                                <!-- Email Address -->
                                <div class="form-group col-6">
                                    <label for="email" class="control-label">{{ __('Email') }}</label>
                                    <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email" required>
                                    @error('email') <span class="invalid-feedback" role="alert"> <strong>{{ $message }}</strong></span>@enderror
                                </div>
                                <!-- Phone Number -->
                                <div class="form-group col-6">
                                    <label for="phone" class="control-label">{{ __('Phone Number') }}</label>
                                    <input type="text" name="phone" id="phone" class="form-control @error('phone') is-invalid @enderror" placeholder="phone" required>
                                    @error('phone') <span class="invalid-feedback" role="alert"> <strong>{{ $message }}</strong></span>@enderror
                                </div>
        
                                <!-- Photo -->
                                <div class="form-group col-8">
                                    <label for="photoInput" class="control-label">Photo</label>
                                    <input type="file" name="photo" id="photoInput" class="form-control" placeholder="Photo">
                                </div>
                                <!-- Access Type -->
                                <div class="form-group col-2">
                                    <label for="metaInput">Type<sup class="text-danger">*</sup></label>
                                    <select class="form-control" name="type">
                                        <option value="client">Client</option>
                                        <option value="admin">Admin</option>
                                    </select>
                                </div>
                                <!-- Status -->
                                <div class="form-group col-2">
                                    <label>Status</label>
                                    <select class="form-control" name="status">
                                        <option value="public">Public</option>
                                        <option value="private">Private</option>
                                    </select>
                                </div>
        
        
                                <!-- Password -->
                                <div class="form-group col-6">
                                    <label for=password" class="control-label sr-only">{{ __('Password') }}</label>
                                    <input type="password" name="password" id="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" required>
                                    @error('password') <span class="invalid-feedback" role="alert"> <strong>{{ $message }}</strong></span>@enderror
                                    
                                </div>
                                <!-- Confirm Password -->
                                <div class="form-group col-6">
                                    <label for="password_confirmation" class="control-label sr-only">{{ __('Password') }}</label>
                                    <input type="password" name="password_confirmation" id="password_confirmation" class="form-control @error('password_confirmation') is-invalid @enderror" placeholder="Confirm Password" required>
                                    @error('password_confirmation') <span class="invalid-feedback" role="alert"> <strong>{{ $message }}</strong></span>@enderror
                                </div>
        
                                <button type="submit" class="btn btn-primary btn-lg btn-block">{{ __('REGISTER') }}</button>
                            </form>
                        </div>
                    </div
                </div>
            </div>
        </div>
    </div>
</div>
@endsection