<?php

namespace App\Http\Requests;

use App\Models\Event;
use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;

class StoreEventRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            //
            'title' => 'required|min:3',
            'price' => 'required|numeric',
            'place' => 'required',
            'places_number' => 'required|numeric',
            'date' => 'required|date|after:today',
            'category_id' => 'required',
            'description' => 'required',
            'image' => 'required',
          //'status' => 'required|in:' . Event::IS_APPROVED . ',' . Event::IS_PENDING,
          'acceptation' => 'required|in:' . Event::ACCEPTATION_MAN . ',' . Event::ACCEPTATION_AUTO,
        ];
    }
}
