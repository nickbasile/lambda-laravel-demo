@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Add a Student
                </div>
                <div class="card-body">
                    <form method="POST" action="/students">
                        @csrf
                        <div class="form-row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="first_name">First Name</label>
                                    <input type="text" class="form-control{{ $errors->has('first_name') ? ' is-invalid' : '' }}" id="first_name" name="first_name" value="{{ old('first_name') }}">
                                    @if($errors->has('first_name'))
                                        <div class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('first_name') }}</strong>
                                        </div>
                                    @endif
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="last_name">Last Name</label>
                                    <input type="text" class="form-control{{ $errors->has('last_name') ? ' is-invalid' : '' }}" id="last_name" name="last_name" value="{{ old('last_name') }}">
                                    @if ($errors->has('last_name'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('last_name') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" id="email" name="email" value="{{ old('email') }}">
                            @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="bio">Bio</label>
                            <textarea class="form-control{{ $errors->has('bio') ? ' is-invalid' : '' }}" id="bio" name="bio">{{ old('bio') }}</textarea>
                            @if ($errors->has('bio'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('bio') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="profile_photo_url">Profile Photo URL</label>
                            <input type="text" class="form-control{{ $errors->has('profile_photo_url') ? ' is-invalid' : '' }}" id="profile_photo_url" name="profile_photo_url" value="{{ old('profile_photo_url') }}">
                            @if ($errors->has('profile_photo_url'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('profile_photo_url') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="github_url">Github Profile URL</label>
                            <input type="text" class="form-control{{ $errors->has('github_url') ? ' is-invalid' : '' }}" id="github_url" name="github_url" value="{{ old('github_url') }}">
                            @if ($errors->has('github_url'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('github_url') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="portfolio_url">Portfolio URL</label>
                            <input type="text" class="form-control{{ $errors->has('portfolio_url') ? ' is-invalid' : '' }}" id="portfolio_url" name="portfolio_url" value="{{ old('portfolio_url') }}">
                            @if ($errors->has('portfolio_url'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('portfolio_url') }}</strong>
                                </span>
                            @endif
                        </div>
                        <button type="submit" class="btn btn-primary">Add Student</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
