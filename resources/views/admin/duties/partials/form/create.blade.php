
  <form class="form-horizontal" method="post" action="{{ route('duty_save', $experience) }}">
    {{ csrf_field() }}
    <div class="form-group">

      <input name="description" type="text" class="form-control" id="duty" placeholder="type duty">
      <br />
      <button class="btn btn-secondary btn-block"type="submit"> Enter</button>
    </div>

  </form>
