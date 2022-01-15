<?php

namespace App\Http\Requests;

use App\Models\TaskStatus;
use Illuminate\Foundation\Http\FormRequest;

class TaskStatusRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        /** @var TaskStatus $taskStatus */
        $taskStatus = $this->route('task_status');
        $ignoreId = $taskStatus->id ?? null;

        return [
            'name' => 'required|max:255|unique:task_statuses,name,' . $ignoreId,
        ];
    }
}
