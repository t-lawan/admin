<form method="POST" action="/admin/duty/{{$duty->id}}">
    {{ csrf_field() }}
    <input type="hidden" name="_method" value="DELETE">
    <button class="btn btn-secondary"type="submit"> Delete </button>
</form>
