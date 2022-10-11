<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EntryRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    // 今回は認証しません。
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'entry_name' => 'required',
            'master_category' => 'required',
            'amount' => 'integer',
            'due_date' => 'date'
        ];

    }

    public function attributes()
    {
        return [
            'entry_name.required' => ':attribute の入力をお願いします',
            'master_category.required' => ':attribute の入力をお願いします',
            'amount.integer' => ':attribute の入力をお願いします',
            'due_date.date' => ':attribute の入力をお願いします',
        ];
    }
}
