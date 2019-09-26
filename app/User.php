<?php

namespace App;

use Tymon\JWTAuth\Contracts\JWTSubject;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Hash;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable implements JWTSubject
{
    use Notifiable;


   public $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = [
        'created_at', 'updated_at', 'deleted_at'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function isAdmin(){
        return $this->type =='admin';
    }


    public function isUser(){
        return $this->type =='user';
    }



    /**
     * Creating User details to thr database.
     *
     * @var array
     */

     public static function createUser($request)
     {
         return self::create([
                'name'=>$request->name,
                'email'=>$request->email,
                'password' => Hash::make($request->password),
         ]);
     }


     public static function createAdminUser($request)
     {  
         
         return self::create([
                'name'=>$request->name,
                'email'=>$request->email,
                'password' => Hash::make($request->password),
                'type'=>$request->type
         ]);
     }




    // Rest omitted for brevity

    /**
     * Get the identifier that will be stored in the subject claim of the JWT.
     *
     * @return mixed
     */
    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    /**
     * Return a key value array, containing any custom claims to be added to the JWT.
     *
     * @return array
     */
    public function getJWTCustomClaims()
    {
        return [];
    }


    
}
