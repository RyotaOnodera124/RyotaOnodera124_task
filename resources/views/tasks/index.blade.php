<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>タスク一覧</title>
</head>

<body>
    <h1>タスク一覧</h1>
    @foreach ($tasks as $task)
        <div class="task-list">
            <a href="{{ route('tasks.show', $task) }}">{{ $task->title }}</a>
        </div>
    @endforeach

    <h1>新規タスク投稿</h1>
    <form action="{{ route('tasks.store') }}" method="post">
        @csrf
        <p>
            <label for="title">タイトル</label><br>
            <input type="text" name="title" id="title" value="{{ old('title') }}">
        </p>
        <p>
            <label for="body">タスク内容</label><br>
            <textarea name="body" id="body">{{ old('body') }}</textarea>
        </p>
        <input type="submit" value="Create Task">
    </form>
</body>

</html>
