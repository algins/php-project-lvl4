<?php

namespace App\Http\Controllers;

use App\Http\Requests\TaskStatusRequest;
use App\Models\TaskStatus;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class TaskStatusController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index']]);
    }

    public function index(): View
    {
        $taskStatuses = TaskStatus::all();

        return view('task_status.index', compact('taskStatuses'));
    }

    public function create(): View
    {
        $taskStatus = new TaskStatus();

        return view('task_status.create', compact('taskStatus'));
    }

    public function store(TaskStatusRequest $request): RedirectResponse
    {
        $taskStatus = new TaskStatus($request->validated());
        $taskStatus->save();

        return redirect()
            ->route('task_statuses.index')
            ->with('success', __('views.task_status.index.status_stored'));
    }

    public function edit(TaskStatus $taskStatus): View
    {
        return view('task_status.edit', compact('taskStatus'));
    }

    public function update(TaskStatusRequest $request, TaskStatus $taskStatus): RedirectResponse
    {
        $taskStatus->fill($request->validated());
        $taskStatus->save();

        return redirect()
            ->route('task_statuses.index')
            ->with('success', __('views.task_status.index.status_updated'));
    }

    public function destroy(TaskStatus $taskStatus): RedirectResponse
    {
        $taskStatus->delete();

        return redirect()
            ->route('task_statuses.index')
            ->with('success', __('views.task_status.index.status_destroyed'));
    }
}
