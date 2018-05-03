@extends('layouts.app')
@section('content')
<div class="col-md-9 col-lg-9 col-sm-9 pull-left" style="background-color:white;">
  <h1>Create New Project</h1>

  <div class="row col-md-12 col-lg-12 col-sm-12" style="background-color:white; margin:10px;">
    <form class="" method="post" action="{{ route('projects.store') }}" >
      {{ csrf_field() }}
        <div class="form-group">
            <label for="project-name">Name <span class="required">*</span></label>
            <input
              name="name"
              placeholder="Enter Name"
              id="project-name"
              required
              spellcheck="false"
              class="form-control">
        </div>

        @if ($companies == null)
        <div class="form-group">
            <input
              name="company_id"
              type="hidden"
              value="{{ $company_id }}">
        </div>
        @endif

        @if($companies != null)
        <div class="form-group">
          <select class="form-control" name="company_id">
          <label for="project-company_id">Select Company <span class="required">*</span></label>
            @foreach($companies as $company)
            <option value="{{ $company->id }}"> {{ $company->name }} </option>
            @endforeach
          </select>
        </div>
        @endif

        <div class="form-group">
            <label for="project-content">Description</label>
            <textarea
              placeholder="Enter Description"
              style="resize: vertical"
              id="project-content"
              name="description"
              rows="5"
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

<div class="col-sm-3 col-md-3 col-lg-3 pull-right">
    <!-- <div class="sidebar-module sidebar-module-inset">
      <h4>About</h4>
      <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
    </div> -->

    <div class="sidebar-module">
      <h4>Actions</h4>
      <ol class="list-unstyled">
        <li><a href="/projects">All Projects</a></li>
      </ol>
    </div>

    <!-- <div class="sidebar-module">
      <h4>Users</h4>
      <ol class="list-unstyled">
        <li><a href="#">March 2014</a></li>
      </ol>
    </div> -->
</div>
@endsection
