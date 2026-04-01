<!DOCTYPE html>
<html>

<head>
    <title>Edit Task</title>
    <style>
        body {
            font-family: Arial;
            margin: 40px;
        }

        input,
        textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
        }

        .btn {
            padding: 10px;
            background: orange;
            color: white;
            border: none;
            cursor: pointer;
        }

        .error {
            color: red;
        }
    </style>
</head>

<body>

    <h2>✏️ Edit Task</h2>

    <form action="{{ route('task.store') }}" method="POST">
        @csrf

        <input type="text" name="name" value="{{ old('title') }}">
        @error('title') <p class="error">{{ $message }}</p> @enderror

        <textarea name="description">{{ old('description') }}</textarea>
        @error('description') <p class="error">{{ $message }}</p> @enderror

        <button type="submit">Create</button>
    </form>

</body>

</html>