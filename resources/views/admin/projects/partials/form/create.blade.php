{{ csrf_field() }}

<div class="form-group">
  <input type="text" name="name" id="name" class="form-control" value="{{old('name')}}" placeholder= "project name">

  @if ($errors->has('name'))
      <span class="help-block">
          <strong>{{ $errors->first('name') }}</strong>
      </span>
  @endif
</div>

<div class="form-group">
  <input type="text" name="description" id="description" class="form-control" value="{{old('description')}}" placeholder= "project description" required="true">

  @if ($errors->has('description'))
      <span class="help-block">
          <strong>{{ $errors->first('description') }}</strong>
      </span>
  @endif
</div>

<div class="form-group">
  <input type="text" name="github_link" id="github_link" class="form-control" value="{{old('github_link')}}" placeholder= "Github URL" required="true">
  @if ($errors->has('github_link'))
      <span class="help-block">
          <strong>{{ $errors->first('github_link') }}</strong>
      </span>
  @endif
</div>

<div class="form-group">
  <input type="text" name="site_link" id="site_link" class="form-control" value="{{old('site_link')}}" placeholder= "Site URL" required="true">
  @if ($errors->has('site_link'))
      <span class="help-block">
          <strong>{{ $errors->first('site_link') }}</strong>
      </span>
  @endif
</div>


<div class="form-group">
  <button type="submit" class="btn btn-secondary">Add Project</button>
</div>
