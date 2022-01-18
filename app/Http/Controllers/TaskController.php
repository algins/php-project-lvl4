<?php

namespace App\Http\Controllers;

use App\Http\Requests\TaskRequest;
use App\Models\Label;
use App\Models\Task;
use App\Models\TaskStatus;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class TaskController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }

    public function index(): View
    {
        $tasks = Task::all();

        return view('task.index', compact('tasks'));
    }

    public function create(): View
    {
        $task = new Task();
        $taskStatuses = TaskStatus::all();
        $users = User::all();
        $labels = Label::all();

        return view('task.create', compact('task', 'taskStatuses', 'users', 'labels'));
    }

    public function store(TaskRequest $request): RedirectResponse
    {
        $task = $request->user()->createdTasks()->make($request->validated());
        $task->save();
        $task->labels()->sync($request->input('labels'));

        /** @var string $message */
        $message = __('views.layouts.app.task_stored');
        flash($message)->success();

        return redirect()->route('tasks.index');
    }

    public function show(Task $task): View
    {
        return view('task.show', compact('task'));
    }

    public function edit(Task $task): View
    {
        $taskStatuses = TaskStatus::all();
        $users = User::all();
        $labels = Label::all();

        return view('task.edit', compact('task', 'taskStatuses', 'users', 'labels'));
    }

    public function update(TaskRequest $request, Task $task): RedirectResponse
    {
        $task->fill($request->validated());
        $task->save();
        $task->labels()->sync($request->input('labels'));

        /** @var string $message */
        $message = __('views.layouts.app.task_updated');
        flash($message)->success();

        return redirect()->route('tasks.index');
    }

    public function destroy(Task $task): RedirectResponse
    {
        $this->authorize('delete', $task);
        $task->delete();

        /** @var string $message */
        $message = __('views.layouts.app.task_destroyed');
        flash($message)->success();

        return redirect()->route('tasks.index');
    }
}
