<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use App\Http\Requests\RegisteredUserRequest;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     *     */
    // public function store(RegisteredUserRequest $request): RedirectResponse
    public function store(Request $request): RedirectResponse
    {   User::create([
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        $username = $request->input('username');//コンパクトの時の変数設定
        // return redirect('added'); redirectだとコンパクト機能が使用できない
        // return view('auth.added',compact('username'));

        $request->session()->put('username',$username);//セッションに入れるデータを定義
        return redirect('added');
    }

    public function added(): View
    {
        // $input = $request->all(); 全てのデータを抽出
        return view('auth.added');
    }
}
