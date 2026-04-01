<!DOCTYPE html>
<html>
<head>
    <title>Create Task</title>
    <style>
        body { font-family: Arial; margin: 40px; }
        input, textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
        }
        .btn {
            padding: 10px;
            background: green;
            color: white;
            border: none;
            cursor: pointer;
        }
        .error { color: red; }
    </style>
</head>
<body>

<h2>➕ Tambah Task</h2>

<form action="{{ route('task.update', $task->id) }}" method="POST">
    @csrf
    @method('PUT')

    <input type="text" name="name" value="{{ old('name', $task->name) }}">
    <textarea name="description">{{ old('description', $task->description) }}</textarea>

    <button type="submit">Update</button>
</form>

</body>
</html>