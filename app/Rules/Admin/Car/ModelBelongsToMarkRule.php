<?php

namespace App\Rules\Admin\Car;

use App\Models\CarModel;
use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class ModelBelongsToMarkRule implements ValidationRule
{
    private $markId;

    public function __construct($markId)
    {
        $this->markId = $markId;
    }

    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        $model = CarModel::find($value);

        if (!$model || $model->mark_id != $this->markId) {
            $fail($this->message());
        }
    }

    public function message()
    {
        return 'Модель не принадлежит выбранной марке.';
    }
}
