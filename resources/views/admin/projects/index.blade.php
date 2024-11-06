@extends('layouts.app')
@section('content')
    <div class="container-fluid my-5">
        <div class="col d-flex bg-primary align-items-center p-4 justify-content-center text-white rounded-top-5">
            <h1 class="m-0">Management for our projects |</h1>
            <h2 class="m-0 ps-3">Add a new project, edit information or delete it. </h2>
        </div>
        <div class="row">
            <div class="col">
                <table class="table table-dark table-striped">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">title</th>
                            <th scope="col">content</th>
                        </tr>
                    </thead>
                    @forelse ($projects as $project)
                        <tbody>
                            <tr>
                                <th scope="row">{{ $project->id }}</th>
                                <td>{{ $project->title }}</td>
                                <td>{{ $project->content }}</td>
                            </tr>
                        </tbody>
                    @empty
                    @endforelse
                </table>
            </div>
        </div>
    </div>
@endsection
