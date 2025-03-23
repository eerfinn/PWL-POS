<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true; // Pastikan ini diatur ke true
    }

    /**
     * Get the validation rules that apply to the request.
     */
    public function rules(): array
    {
        return [
            'username' => 'required|unique:m_user,username|max:10', // Pastikan tabel dan kolom sesuai
            'nama' => 'required|max:50',
            'password' => 'required|min:4',
            'level_id' => 'required|exists:m_level,level_id',
        ];
    }
}
