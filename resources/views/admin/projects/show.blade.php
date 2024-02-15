@extends('layouts.admin.app')

@section('content')
    <main class="container-fluid bg-dark">
        <section class="col-10 offset-1 p-3">
            <h1 class="text-warning text-center">Show Project Details </h1>
        </section>
        <section class="bg-dark d-flex justify-content-center">
            <div class="card m-2" style="width: 30rem; min-height= 20rem;">
                <img src="{{ $project->image }}" class="card-img-top" alt="img">
                <div class="card-body">
                    <h5 class="card-title"><strong>{{ $project->title }}</strong></h5>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Description: {{ $project->description }}</li>
                    <li class="list-group-item">Length: {{ $project->length }}</li>
                    <li class="list-group-item">Duration: {{ $project->duration }}</li>
                    <li class="list-group-item">Color: {{ $project->color }}</li>
                </ul>
                <div class="card-body d-flex justify-content-between">
                    <a href="{{ route('admin.data.edit', ['data' => $project->id]) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('admin.data.destroy', $project) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </div>
            </div>
        </section>
    </main>
@endsection
