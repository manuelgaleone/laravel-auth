@extends('layouts.admin')

@section('edit')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800 py-4">Create a Project</h1>
</div>
@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
<form action="{{route('admin.projects.store')}}" method="post" class="card p-3">
    @csrf
    <div class="mb-3">
        <input type="text" name="title" id="title" class="form-control" value="{{$project->title}}" aria-describedby="helpId" required>
    </div>
    <div class="mb-3">
        <textarea class="form-control" name="content" id="content" rows="3" required>{{$project->content}}</textarea>
    </div>
    <div class="mb-3">
        <input type="text" class="form-control" name="thumb" id="thumb" value="{{$project->thumb}}" rows="3" required>
    </div>
    <button type="submit" class="btn btn-primary">Invia!</button>
</form>
@endsection