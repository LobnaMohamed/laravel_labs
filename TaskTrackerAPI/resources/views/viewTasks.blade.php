<!DOCTYPE html>
<html>
<head>
	<title>My Tasks</title>
	<style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
</style>
</head>
<body>
	
	<h3>My Tasks</h3>

<a href="{{ URL('/addTask')}}">Add Task</a>

<table>
  <tr>
    <th>Task title</th>
    <th>Edit</th>
    <th>Delete</th>
  </tr>
  @foreach($tasks as $task)
  <tr>
     <td>{{$task->task_title}}</td>
     <td><a href="{{URL('/editTask')}}/{{$task->id}}" >Edit</a></td>
     <td><form action ="{{URL('/deleteTask')}}/{{$task->id}}" method="POST">
     <input type="hidden" name="_method" value="DELETE">
     {{csrf_field()}}
     <a href="{{URL('/deleteTask')}}/{{$task->id}}">Delete</a>
     </form>
     </td>
  </tr>
  
@endforeach
</table>

</body>
</html>

