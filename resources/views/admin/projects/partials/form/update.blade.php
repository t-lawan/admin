<form method="POST" action="/admin/project/{{$project->id}}">
    {{ csrf_field() }}
    <input type="hidden" name="_method" value="PUT">
    <button class="btn btn-secondary"type="submit"> Update </button>
</form>
