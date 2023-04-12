<?php 

 

namespace App\Http\Requests\Post;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Str;

class StoreRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            "title" => "required",
            "description" => "required",
            "slug" => "required|unique:posts",
            "posted" => "required",
            "category_id" => "required|integer",
        ];
    }

    /**
     * Prepare the data for validation.
     *
     * @return void
     */
    protected function prepareForValidation()
    {
        $this->merge([
            'slug' => Str::of($this->title)->slug(),
        ]);
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages(): array
    {
        return [
            "title.required" => "El título es obligatorio",
            "description.required" => "La descripción es obligatoria",
            "slug.required" => "El slug es obligatorio",
            "slug.unique" => "El slug ya existe",
            "posted.required" => "Posteado es obligatorio saber 'Yes' o 'No'",
            "category_id.required" => "La categoría es obligatoria",
            "category_id.integer" => "La categoría debe ser un número entero",
        ];
    }
}
