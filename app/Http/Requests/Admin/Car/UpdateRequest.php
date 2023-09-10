<?php

namespace App\Http\Requests\Admin\Car;

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
        $rules = [
            'mark' => ['required', 'exists:marks,id'],
            'model' => ['required', 'exists:models,id', new ModelBelongsToMarkRule($this->input('mark'))],
            'condition' => ['required', 'in:new,used'],
            'type' => ['required', 'in:passenger,moto,freight,bus,air,water'],
            'color' => ['required'],
            'price' => ['required', 'min:1'],
            'year' => ['required', 'min:1995'],
        ];

        return $rules;
    }
}
