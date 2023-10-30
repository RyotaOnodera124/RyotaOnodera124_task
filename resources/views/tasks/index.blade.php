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
        <p><a href="{{ route('tasks.show', $task) }}">{{ $task->task }}</a></p>
    @endforeach
</body>
</html>
