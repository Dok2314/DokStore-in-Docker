<?php

namespace App\Http\Requests\Admin\Car;

use App\Models\Car;
use App\Rules\Admin\Car\ModelBelongsToMarkRule;
use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        $conditions = implode(',', array_keys(Car::conditions()));
        $types = implode(',', array_keys(Car::types()));

        $rules = [
            'mark' => ['required', 'exists:marks,id'],
            'model' => ['required', 'exists:models,id', new ModelBelongsToMarkRule($this->input('mark'))],
            'condition' => ['required', 'in:'.$conditions],
            'type' => ['required', 'in:'.$types],
            'color' => ['required'],
            'price' => ['required', 'numeric', 'gte:1'],
            'year' => ['required', 'numeric', 'gte:1995', 'lte:2023'],
        ];

        return $rules;
    }
}
