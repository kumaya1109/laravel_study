<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;

class TaskController extends Controller
{
    public function test(Request $request)
    {
        $tasks = Task::all();
        return response()->json($tasks, 200, [], JSON_PRETTY_PRINT);
    }
}
