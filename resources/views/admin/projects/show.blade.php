@extends('layouts.admin')

@section('index')
@foreach ($projects as $project)
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800 py-4">{{$project->title}}</h1>
</div>
@endforeach
@endsection