<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

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

    // public function follows(){
    //     return $this->belongsToMany(
    //         '//app/Models/User.php',//user.phpの場所
    //         'follows',//中間テーブル名
    //         'following_id',//自分の中間テーブルカラム名
    //         'followed_id',//相手の中間テーブルカラム名
    //     );
    // }

    // public function followers(){
    //     return $this->belongsToMany(
    //         '//app/Models/User.php',//user.phpの場所
    //         'follows',//中間テーブル名
    //         'followed_id',//自分の中間テーブルカラム名
    //         'following_id',//相手の中間テーブルカラム名
    //     );
    // }
}
