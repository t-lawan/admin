<div class="panel panel-default col-md-8 col-md-offset-2">
  <div class="panel-heading">
      <span class="lead"> {{strtoupper($institution->name)}}</span>
      <span class="pull-right">

        @include('admin.institutions.partials.form.delete')
      </span>
      <span class="pull-right">
        <a href="/admin/institution/{{$institution->id}}">
          <button type="button" class="btn btn-secondary">Add Subject</button>
        </a>
      </span>
  </div>
  <div class="panel-body">
    <h4>Degree: {{$institution->degree}}</h4>
    <h4>City: {{$institution->city}}</h4>
    <h4>Start Date: {{$institution->start_date}}</h4>
    <h4>End Date: {{$institution->end_date}}</h4>

  </div>


</div>
