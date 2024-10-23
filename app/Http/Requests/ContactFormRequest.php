<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true; // Change this to true to allow form submission
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|string|min:10|max:15',
            'date' => 'required|date',
            'message' => 'required|string|max:1000',
        ];
    }

    public function submit(ContactFormRequest $request)
    {
        // Retrieve validated input data
        $validated = $request->validated();

        // Handle the form submission (e.g., send an email, save to database)

        // Use translation for success message
        return back()->with('success', __('messages.success'));
    }

}
