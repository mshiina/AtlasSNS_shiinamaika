<?php

namespace App\Http\Requests;

use Illuminate\Auth\Events\Lockout;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;

class RegisteredUserRequest extends FormRequest
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
            //
            'username' => ['required','min:2','max:12'],
            'email' => ['required','min:5','max:40','unique:posts','email'],
            'password' => ['required','alpha_num:ascii','min:8','max:20'],
            'password_confirmation' => ['required','alpha_num:ascii','min:8','max:20','confirmed'],
        ];
    }

    public function attributes()
    {
        return [
            'username' => 'ユーザー名',
            'email' => 'メールアドレス',
            'password' => 'パスワード',
            'password_confirmation' => 'パスワード確認',
        ];
    }
}
