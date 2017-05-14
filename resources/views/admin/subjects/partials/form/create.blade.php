
  <form class="form-horizontal" method="post" action="{{ route('subject_save',$institution) }}">
    {{ csrf_field() }}
    <div class="form-group">

      <input name="name"type="text" class="form-control"  placeholder="type subject name">
      <br />
      <input name="grade"type="text" class="form-control"  placeholder="type subject grade">
      <br />
      <button class="btn btn-secondary btn-block"type="submit"> Enter</button>
    </div>

  </form>
