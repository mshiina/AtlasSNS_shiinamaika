<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'username',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    // public function users(){
    //     return $this->belongsToMany(
    //         '//app/Models/user.php',//user.phpの場所・多対多のリレーション
    //         'follows',//中間テーブル名
    //         'following_id',//自分の中間テーブルカラム名
    //         'following_id',//相手の中間テーブルカラム名
    //     );
    // } laravel6時点の記載方法

    public function roles(){
        return $this->belongsToMany(Role::class);
    }
}

