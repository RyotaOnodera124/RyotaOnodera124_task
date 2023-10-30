<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>タスク詳細</title>
</head>
<body>
    <div class="task-title">
    <h1>論文詳細</h1>
    <p>【タイトル】</p>
    <P>{{ $task->task }}</P><br>
    </div>

    <div class="task-body">
    <p>【内容】</p>
    <p>{{ !! nl2br(e($task->task)) !!}}</p>
    <button onclick="location.href='{{ route('tasks.index') }}'">一覧へ戻る</button>
</body>
</html>
