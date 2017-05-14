<div class="panel panel-default col-md-8 col-md-offset-2">
  <div class="panel-heading">
      <span> {{strtoupper($experience->company_name)}}</span>
      <span class="pull-right">

        @include('admin.experiences.partials.form.delete')
      </span>

      <span class="pull-right">
        <a href="/experience/{{$experience->id}}">
          <button type="button" class="btn btn-secondary">Add Duty</button>
        </a>
      </span>
  </div>
  <div class="panel-body">
    <p>Role: {{$experience->role}}</p>
    <p>Start Date: {{$experience->start_date}}</p>
    <p>End Date: {{$experience->end_date}}</p>


  </div>


</div>
