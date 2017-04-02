<h3>Add Tasks</h3>
<!-- {{ Auth::user() }} -->


<form  action="#" method="post" >
  {{ csrf_field() }}
  Task Title<input type="text" name="task" ><br>
  Save<input type="submit" name="add" value="add">
</form>
