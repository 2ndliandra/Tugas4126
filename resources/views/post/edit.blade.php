@extends ('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Task</h1>

    <form method="POST" action="{{ url('/task/' . $task->id) }}">
        @method('PUT')
        @csrf

        <label for="name">Name</label>
        <input type="text" name="name" id="name" value="{{ $task->name }}">
        <br>

        <label for="description">Description</label>
        <textarea name="description" id="description" cols="30" rows="10">{{ $task->description }}</textarea>
        <br>

        <button type="submit">Edit Task</button>
    </form>

    <a href="{{ url('/task') }}">Back to Task</a>
</div>
@endsection