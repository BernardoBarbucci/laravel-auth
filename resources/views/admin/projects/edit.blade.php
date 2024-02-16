@extends('layouts.admin.app')

@section('content')
    <main class="container-fluid bg-dark">
        <section class="col-10 offset-1 p-3">
            <h1 class="text-warning text-center">Edit Project</h1>
        </section>
        <section class="bg-dark d-flex flex-wrap justify-content-around">
            <div class="card m-2" style="width: 15rem;">
                <div class="card" style="width: 15rem;">
                    <img src="{{ $project->image }}" class="card-img-top" alt="img">
                    <div class="card-body">
                        <form action="{{ route('admin.data.update', $project) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="title">Title:</label>
                                <input type="text" class="form-control" id="title" name="title"
                                    value="{{ $project->title }}">
                            </div>
                            <div class="form-group">
                                <label for="description">Description:</label>
                                <textarea class="form-control" id="description" name="description" rows="3">{{ $project->description }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="length">Length:</label>
                                <input type="text" class="form-control" id="length" name="length"
                                    value="{{ $project->length }}">
                            </div>
                            <div class="form-group">
                                <label for="duration">Duration:</label>
                                <input type="text" class="form-control" id="duration" name="duration"
                                    value="{{ $project->duration }}">
                            </div>
                            <div class="form-group">
                                <label for="color">Color:</label>
                                <input type="text" class="form-control" id="color" name="color"
                                    value="{{ $project->color }}">
                            </div>
                            <button type="submit" class="btn btn-primary">Save Changes</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
