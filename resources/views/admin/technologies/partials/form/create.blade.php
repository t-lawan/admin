
  <form class="form-horizontal" method="post" action="{{ route('technology_save',$project) }}">
    {{ csrf_field() }}
    <div class="form-group">

      <input name="name"type="name" class="form-control" id="technology" placeholder="type technology">
      <br />
      <button class="btn btn-secondary btn-block"type="submit"> Enter</button>
    </div>

  </form>
