
@extends('layouts.app')

@section('content')
<div class="col-md-6 col-lg-6 col-md-offset-3 col-md-offset-3">
  <div class="panel panel-primary">
    <div class="panel-heading">

      <h3 class="panel-title"></h3>

      Projects <a class="
      btn btn-primary
       pull-right btn-sm"
        href="/projects/create">
        Create new Project</a>

    </div>
    <div class="panel-body">

      <ul class="list-group">
        @foreach($projects as $project)
        <li class="list-group-item"><a href="/projects/{{ $project->id }}"> {{ $project->name }}</a> </li>
        @endforeach
      </ul>

    </div>
  </div>
</div>
@endsection
