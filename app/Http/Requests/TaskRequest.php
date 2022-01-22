<?php

namespace App\Http\Requests;

use App\Models\Task;
use Illuminate\Foundation\Http\FormRequest;

class TaskRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        /** @var Task $task */
        $task = $this->route('task');
        $ignoreId = $task->id ?? 0;

        return [
            'name' => 'required|max:255|unique:tasks,name,' . $ignoreId,
            'description' => 'nullable',
            'status_id' => 'required|exists:task_statuses,id',
            'assigned_to_id' => 'nullable|exists:users,id',
            'labels' => 'array',
            'labels.*' => 'exists:labels,id'
        ];
    }

    public function messages(): array
    {
        $model = __('models.task');

        return [
            'name.unique' => __('validation.custom.name.unique', ['model' => $model]),
        ];
    }
}
