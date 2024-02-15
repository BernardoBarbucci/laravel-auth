@extends('layouts.admin.app')

@section('content')
    <main class="container-fluid bg-dark">
        <section class="col-10 offset-1">
            <h1 class="text-warning text-center">All projects</h1>
        </section>
        <section class="bg-dark d-flex flex-wrap justify-content-around">
                @forelse ($projects as $project)
                <div class="card m-2" style="width: 15rem;">
                    <div class="card" style="width: 15rem;">
                        <img src="{{ asset('images/' . $project['image']) }}" class="card-img-top" alt="">
                        <div class="card-body">
                            <h5 class="card-title"><strong>{{ $project['title'] }}</strong></h5>
                            <p class="card-text">{{ $project['description'] }}</p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Length: {{ $project['length'] }}</li>
                            <li class="list-group-item">Duration: {{ $project['duration'] }}</li>
                        </ul>
                        <div class="card-body d-flex justify-content-between">
                            <a href="#" class="btn btn-success">Show</a>
                            <a href="#" class="btn btn-warning">Edit</a>
                            <a href="#" class="btn btn-success">Delete</a>
                        </div>
                    </div>
                </div>
                @empty
                    <div class="text-center">
                        <h1>
                            <strong>There are no projects to show.</strong>
                        </h1>
                    </div>
                @endforelse
        </section>
    </main>
@endsection