@extends('layouts.admin.app')

@section('content')
    <main class="container-fluid bg-dark">
        <section class="col-10 offset-1">
            <h1 class="text-warning text-center">All projects</h1>
        </section>
        <section class="bg-dark d-flex flex-wrap justify-content-center">
            <div class="card" style="width: 15rem;">
                <div class="row">
                    @foreach ($projects as $project)
                        <div class="col-md-4 mb-4">
                            <div class="card" style="width: 18rem;">
                                <img src="{{ asset('images/' . $project['image']) }}" class="card-img-top" alt="{{ $project['title'] }}">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $project['title'] }}</h5>
                                    <p class="card-text">{{ $project['description'] }}</p>
                                </div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">Length: {{ $project['length'] }}</li>
                                    <li class="list-group-item">Duration: {{ $project['duration'] }}</li>
                                </ul>
                                <div class="card-body">
                                    <a href="#" class="card-link">Card link</a>
                                    <a href="#" class="card-link">Another link</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
        </section>
    </main>
@endsection