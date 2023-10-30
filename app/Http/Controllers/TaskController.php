<?php

namespace App\Http\Controllers;

// Taskクラスを読み込む
use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        // モデル名::テーブル全件取得
        $tasks = Task::all();
        // tasksディレクトリーの中のindexページを指定し、tasksの連想配列を代入
        return view("tasks.index", ["tasks" => $tasks]);
    }
    
    // showページへ移動
    public function show($id)
    {
        $task = Task::find($id);
        return view('tasks.show', ['task' => $task]);
    }
}
