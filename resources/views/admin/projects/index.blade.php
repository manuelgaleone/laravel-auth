@extends('layouts.admin')

@section('index')
<div class="index_wrapper">
    <div class="index_elements">
        <div class="row justify-content-center">
            @foreach ($projects as $project)
            <div class="card m-3" style="width: 18rem;">
                <img class="card-img-top" src="{{$project->thumb}}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection