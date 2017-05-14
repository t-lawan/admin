{{ csrf_field() }}

<div class="form-group">
  <input type="text" name="name" id="name" class="form-control" value="{{old('name')}}" placeholder= "add institution name" required="true">

  @if ($errors->has('name'))
      <span class="help-block">
          <strong>{{ $errors->first('name') }}</strong>
      </span>
  @endif
</div>

<div class="form-group">
  <input type="text" name="degree" id="degree" class="form-control" value="{{old('degree')}}" placeholder= "add degree" required="true">

  @if ($errors->has('degree'))
      <span class="help-block">
          <strong>{{ $errors->first('degree') }}</strong>
      </span>
  @endif
</div>

<div class="form-group">
  <input type="text" name="city" id="city" class="form-control" value="{{old('city')}}" placeholder= "add city" required="true">

  @if ($errors->has('city'))
      <span class="help-block">
          <strong>{{ $errors->first('city') }}</strong>
      </span>
  @endif
</div>

<div class="form-group">
  <label for="start_date">start date</label>
  <input type="date" name="start_date" id="start_date" class="form-control" value="{{old('start_date')}}" placeholder= "enter start date" required="true">
  @if ($errors->has('start_date'))
      <span class="help-block">
          <strong>{{ $errors->first('start_date') }}</strong>
      </span>
  @endif
</div>

<div class="form-group">
  <label for="end_date">end date</label>
  <input type="date" name="end_date" id="end_date" class="form-control" value="{{old('end_date')}}"  required="true">
  @if ($errors->has('end_date'))
      <span class="help-block">
          <strong>{{ $errors->first('end_date') }}</strong>
      </span>
  @endif
</div>


<div class="form-group">
  <button type="submit" class="btn btn-secondary">Add Institution</button>
</div>
