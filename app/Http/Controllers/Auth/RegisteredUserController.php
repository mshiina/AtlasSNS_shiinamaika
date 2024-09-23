<?php

namespace App\Http\Controllers\Auth;
// namespace App\Http\Controllers\web;//web.phpと接続したい

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use App\Http\Requests\RegisteredUserRequest;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
// use Illuminate\Support\Facades\web;//web.phpと接続したい
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
use Illuminate\View\Views\layouts;

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
    public function store(RegisteredUserRequest $request): RedirectResponse //リクエストファイルを使用してバリデーション設定
    // public function store(Request $request): RedirectResponse
    {   User::create([
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        $username = $request->input('username');//変数設定
        // return redirect('added'); redirectだとコンパクト機能が使用できない
        // return view('auth.added',compact('username'));

        $request->session()->put('username',$username);//セッションに入れるデータを定義
        return redirect('added');
    }

    // public function store(Request $request): RedirectResponse //リクエストファイル不要のバリデーション設定
    // {   $request->validate([
    //     'username' => ['required','min:2','max:12'],
    //     'email' => ['required','min:5','max:40','unique:posts','email'],
    //     'password' => ['required','alpha_num:ascii','min:8','max:20'],
    //     'password_confirmation' => ['required','alpha_num:ascii','min:8','max:20','confirmed'],
    //     ]);

    //     User::create([
    //         'username' => $request->username,
    //         'email' => $request->email,
    //         'password' => Hash::make($request->password),
    //     ]);
    //     $username = $request->input('username');//変数設定
    //     $request->session()->put('username',$username);//セッションに入れるデータを定義
    //     return redirect('added');
    // }

    public function added(): View
    {
        // $input = $request->all(); 全てのデータを抽出
        // $date = compact('username','email');
        // session($date);
        return view('auth.added');
    }

    public function show(Request $request)
   {
       Auth::show();
   
       $request->session()->invalidate();
   
       return redirect('layouts.navigation');
   }

    // public function show(): View
    // {
    //     return view('layouts.navigation');
    // }

}
