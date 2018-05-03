@extends('layouts.app')
@section('content')
<div class="col-md-9 col-lg-9 col-sm-9 pull-left">
    <!-- Jumbotron -->
    <div class="well well-lg">
      <h1>{{ $project->name }}</h1>
      <p class="lead">{{ $project->description }}</p>
      <!-- <p><a class="btn btn-lg btn-success" href="#" role="button">Get started today</a></p> -->
    </div>

    <!-- Example row of columns -->
    <div class="row" style="background-color:white; margin:10px;">
      <br>
      @include('partials.comments')<!-- comments apper here -->
      <br>
      <div class="row container-fluid">
        <form class="" method="post" action="{{ route('comments.store') }}" >
          {{ csrf_field() }}

          <input type="hidden" name="commentable_type" value="App\Project">
          <input type="hidden" name="commentable_id" value="{{ $project->id }}">

          <div class="form-group">
              <label for="comment-body">Comment</label>
              <textarea
                placeholder="Enter Comment"
                style="resize: vertical"
                id="project-body"
                name="body"
                rows="3"
                spellcheck="false"
                class="form-control autosize-target text-left">
              </textarea>
          </div>

          <div class="form-group">
              <label for="project-content">URL (proof of work done)</label>
              <textarea
                placeholder="Enter URL"
                style="resize: vertical"
                id="comment-url"
                name="url"
                rows="2"
                spellcheck="false"
                class="form-control autosize-target text-left">
              </textarea>
          </div>

          <div class="form-group">
            <input type="submit" class="btn btn-success" value="Submit">
          </div>
        </form>
      </div>
    </div>

</div>
<div class="col-sm-3 col-md-3 col-lg-3 pull-right">
    <!-- <div class="sidebar-module sidebar-module-inset">
      <h4>About</h4>
      <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
    </div> -->

    <div class="sidebar-module">
      <h4>Actions</h4>
      <ol class="list-unstyled">
        <li><a href="/projects/{{ $project->id }}/edit">Edit</a></li>
        <li><a href="/projects/create">Create new project</a></li>
        <li><a href="/projects">View all Projects</a></li>
        <br>
        @if($project->user_id == Auth::user()->id)
        <li>
          <a href="#" onclick="
            var result = confirm('Are you sure want to delete this project?');
            if(result){
              event.preventDefault();
              document.getElementById('delete-form').submit();
            }
          ">Delete</a>
          <form id="delete-form"
           action="{{ route('projects.destroy', [$project->id]) }}"
            method="post"
            style="Display: none">
            <input type="hidden" name="_method" value="delete">
              {{ csrf_field() }}
          </form>
        </li>
        @endif
        <!-- <li><a href="#">Add a new Member</a></li> -->
      </ol><br><hr>
      <h4>Add members to project</h4>
      <div class="row">
        <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
          <form id="delete-form"
           action="{{ route('projects.adduser') }}"
            method="post">
              {{ csrf_field() }}
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Email">
              <span class="input-group-btn">
              <button class="btn btn-primary" type="button">Add</button>
            </span>
          </div><!-- /input-group -->
          </form>
        </div><!-- /.col-lg-6 -->
      </div><!-- /.row -->
      <br><hr>
      <h4>Team members</h4>
      <ol class="list-unstyled">
        <li><a href="#">March 2014</a></li>
      </ol>

    </div>
</div>
@endsection
