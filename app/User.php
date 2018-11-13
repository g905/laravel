<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */


    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * Каноничный коммент перед объявлением лолкек
     * Указываю поле, которое НЕ ДОЛЖНО быть доступно для mass-assignable. Теперь все поля mass-assignable, кроме этих.
     *
     * @var array
     */
     protected $guarded = ['is_admin'];

    public function getFullName()
    {
        return $this->first_name." ".$this->last_name;
    }
}
