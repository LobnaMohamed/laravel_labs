<h3>Edit your Tasks</h3>
<!-- {{ Auth::user() }} -->
@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}!!!!!!!</li>
            @endforeach
        </ul>
    </div>
@endif
<form   method="post">
  {{ csrf_field() }}
  Task Title <input type="text" name="task" value="{{$tasks->task_title}}" ><br><br>
  <input type="submit" name="edit" >
</form>
