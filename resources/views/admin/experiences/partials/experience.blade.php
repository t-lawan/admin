<div class="panel panel-default col-md-8 col-md-offset-2">
  <div class="panel-heading">
      <span class="lead"> {{strtoupper($experience->company_name)}}</span>
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
    <h4>Role: {{$experience->role}}</h4>
    <h4>Start Date: {{$experience->start_date}}</h4>
    <h4>End Date: {{$experience->end_date}}</h4>


  </div>


</div>
