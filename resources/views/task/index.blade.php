<!DOCTYPE html>
<html>
<head>
    <title>Task List</title>
    <style>
        body { font-family: Arial; margin: 40px; }
        .card {
            border: 1px solid #ddd;
            padding: 15px;
            margin-bottom: 15px;
            border-radius: 8px;
        }
        .actions a, .actions button {
            margin-right: 10px;
        }
        .btn {
            padding: 6px 10px;
            border: none;
            cursor: pointer;
            border-radius: 5px;
        }
        .btn-edit { background: orange; color: white; }
        .btn-delete { background: red; color: white; }
        .btn-create { background: green; color: white; text-decoration: none; padding: 8px 12px; }
    </style>
</head>
<body>

<h2>📋 Task List</h2>

<a href="/task/create" class="btn btn-create">+ Create Task</a>

<br><br>

@foreach($tasks as $task)
    <div class="card">
        <h3>{{ $task->name }}</h3>
        <p>{{ $task->description }}</p>

        <div class="actions">
            <a href="/task/{{ $task->id }}/edit" class="btn btn-edit">Edit</a>

            <form action="{{ route('task.destroy', $task->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-delete">Delete</button>
            </form>
        </div>
    </div>
@endforeach

</body>
</html>