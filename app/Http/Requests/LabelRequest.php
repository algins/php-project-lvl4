<?php

namespace App\Http\Requests;

use App\Models\Label;
use Illuminate\Foundation\Http\FormRequest;

class LabelRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        /** @var Label $label */
        $label = $this->route('label');
        $ignoreId = $label->id ?? 0;

        return [
            'name' => 'required|max:255|unique:labels,name,' . $ignoreId,
            'description' => 'nullable',
        ];
    }
}
