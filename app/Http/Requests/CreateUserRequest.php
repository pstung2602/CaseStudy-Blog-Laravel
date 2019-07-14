<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateUserRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'title'=>'required|max:30',
            'image'=>'required',
            'content'=>'required|min:100'
        ];
    }
    public function messages()
    {
        $messages = [
            'title.required'=>'Nhap tieu de',
            'title.max'=>'Tieu de toi da 30 ki tu',
            'image.required'=>'Nhap link anh',
            'content.required'=>'Nhap noi dung',
            'content.min'=>'Noi dung toi thieu 100 ki tu',
        ];
        return $messages;
    }
}
