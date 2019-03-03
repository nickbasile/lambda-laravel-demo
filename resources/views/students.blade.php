@extends('layouts.app')

@section('content')
    <section class="jumbotron jumbotron-fluid mt-n4 bg-primary">
        <div class="container">
            <h1 class="display-3 text-white">Looking for talent?</h1>
            <p class="lead text-white">Meet the Lambda School students who are ready to make an impact on your team.</p>
            <a class="btn btn-light" href="#students" role="button">Find Your Next Hire</a>
        </div>
    </section>
    <section class="container">
        @foreach($students->chunk(3) as $chunk)
            <div class="card-deck" id="students">
                @foreach($chunk as $student)
                    <div class="card mx-4 my-2">
                        <img src="{{ $student->profile_photo_url }}" class="card-img-top" alt="{{ $student->first_name . ' ' . $student->last_name }}'s profile picture">
                        <div class="card-body">
                            <h3 class="card-title">{{ $student->first_name }} {{$student->last_name}}</h3>
                            <p class="card-text">{{ $student->bio }}</p>
                        </div>
                        <div class="card-footer bg-white">
                            <a href="{{ $student->github_url }}" class="card-link">Github <i class="ml-1 fas fa-external-link-alt"></i></a>
                            <a href="{{ $student->portfolio_url }}" class="card-link">Portfolio <i class="ml-1 fas fa-external-link-alt"></i></a>
                            <a href="#" class="card-link text-success float-right">Contact!</a>
                        </div>
                    </div>
                @endforeach
            </div>
        @endforeach
    </section>
@endsection
