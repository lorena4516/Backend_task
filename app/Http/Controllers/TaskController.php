<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\TaskRequest;
use App\Models\Task;

class TaskController extends Controller
{
    public function index() {
        $tasks = Task::with('keywords')->latest()->get();
        return response()->json($tasks);
    }

    public function store(TaskRequest $request) {
        $data = $request->validated();
        $task = Task::create([
            'title' => $data['title'],
            'is_done' => false,
        ]);

        if (!empty($data['keywords'])) {
            $task->keywords()->sync($data['keywords']);
        }

        return response()->json($task->load('keywords'), 201);
    }

    public function toggle($id) {
        $task = Task::with('keywords')->findOrFail($id);
        $task->is_done = !$task->is_done;
        $task->save();

        return response()->json($task);
    }
}
