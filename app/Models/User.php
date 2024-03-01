<?php

 namespace App\Models;
 use Illuminate\Database\Eloquent\Model;
 class User extends Model{
 protected $table = 'tbluser';
 // column sa table
 protected $fillable = [
 'username', 'password'
 ];
 }

class User extends Model implements AuthenticatableContract, AuthorizableContract
{
    use Authenticatable, Authorizable, HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name', 'email',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var string[]
     */
    protected $hidden = [
        'password',
    ];
}
