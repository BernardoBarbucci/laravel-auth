<header class="container-fluid bg-dark">
    <section class="text-center py-3">
        <h1 class="fw-bold text-success">Admin Projects</h1>
    </section>
    <section>
        <div class="d-flex flex-row justify-content-end">
            <a href="{{ route('admin.data.create') }}" class="btn btn-success me-3">Create</a>
            {{-- <a href="{{ route('admin.data.edit', $project) }}" class="btn btn-warning me-3">Edit</a> --}}
            {{-- <a href="{{ route('admin.data.show', $project) }}" class="btn btn-primary me-3">Show</a> --}}
        </div>
    </section>
</header>
