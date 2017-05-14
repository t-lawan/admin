<div class="panel panel-default col-md-8 col-md-offset-2">
  <div class="panel-heading">
      <span> {{strtoupper($institution->name)}}</span>
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
    <p>Degree: {{$institution->degree}}</p>
    <p>City: {{$institution->city}}</p>
    <p>Start Date: {{$institution->start_date}}</p>
    <p>End Date: {{$institution->end_date}}</p>

  </div>


</div>
