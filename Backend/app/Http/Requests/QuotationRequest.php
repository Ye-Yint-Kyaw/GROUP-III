<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class QuotationRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'quotation' => 'required',
            'description' => '',
            'is_agree' => 'required',
            'quotation_date' => 'required|date_format:Y-m-d', // Add the date format rule
            'project_id' => 'required',
        ];
    }
}


