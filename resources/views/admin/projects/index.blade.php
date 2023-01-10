@extends('layouts.admin')

@section('index')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800 py-4">Projects</h1>
</div>
<div class="index_wrapper">
    <div class="index_elements">
        <div class="row justify-content-center">
            @foreach ($projects as $project)
            <div class="card m-3" style="width: 18rem;">
                <img class="card-img-top pt-3" src="{{$project->thumb}}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">{{$project->title}}</h5>
                    <p class="card-text">{{$project->content}}</p>
                    <div class="d-flex align-items-center justify-content-center">
                        <a class="btn btn-primary">
                            View
                        </a>
                        <a class="btn btn-dark m-2">
                            Edit
                        </a>
                        <a class="btn btn-danger">
                            Delete
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection