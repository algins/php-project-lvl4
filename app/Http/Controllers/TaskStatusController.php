<?php

namespace App\Http\Controllers;

use App\Http\Requests\TaskStatusRequest;
use App\Models\TaskStatus;
use Exception;
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
        $taskStatuses = TaskStatus::latest()->paginate();

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

        /** @var string $message */
        $message = __('views.layouts.app.status_stored');
        flash($message)->success();

        return redirect()->route('task_statuses.index');
    }

    public function edit(TaskStatus $taskStatus): View
    {
        return view('task_status.edit', compact('taskStatus'));
    }

    public function update(TaskStatusRequest $request, TaskStatus $taskStatus): RedirectResponse
    {
        $taskStatus->fill($request->validated());
        $taskStatus->save();

        /** @var string $message */
        $message = __('views.layouts.app.status_updated');
        flash($message)->success();

        return redirect()->route('task_statuses.index');
    }

    public function destroy(TaskStatus $taskStatus): RedirectResponse
    {
        try {
            $taskStatus->delete();

            /** @var string $message */
            $message = __('views.layouts.app.status_destroyed');
            flash($message)->success();
        } catch (Exception $e) {
            /** @var string $message */
            $message = __('views.layouts.app.status_not_destroyed');
            flash($message)->error();
        }

        return redirect()->route('task_statuses.index');
    }
}
