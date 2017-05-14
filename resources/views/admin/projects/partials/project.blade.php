<div class="panel panel-default col-md-8 col-md-offset-2">
  <div class="panel-heading">
      <span> {{strtoupper($project->name)}}</span>


      <span class="pull-right">

        @include('admin.projects.partials.form.delete')
      </span>

      <span class="pull-right">
        <a href="/project/{{$project->id}}">
          <button type="button" class="btn btn-secondary icon-button">
            <span class="glyphicon glyphicon-plus" role="button"></span>
          </button>
        </a>
      </span>
  </div>
  <div class="panel-body">
    <p>Description: {{$project->description}}</p>
    <p>GitHub Repo: {{$project->github_link}}</p>
    <p>Site URL: {{$project->site_link}}</p>
    <p> Technologies Used:
      @foreach($project->technologies as $technology)
        @if (!$loop->last)
          {{$technology->name}},
        @else
          {{$technology->name}}.
        @endif
      @endforeach
    </p>


  </div>


</div>
