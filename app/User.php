<?php
namespace app;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Authenticatable;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Model implements AuthenticatableContract,
                                    AuthorizableContract,
                                    CanResetPasswordContract
{
    use Authenticatable, Authorizable, CanResetPassword;

    private $rules = [
                'employee_id' => 'required|exists:employees,employee_no|unique:users',
                'name' => 'required',
                'email' => 'required',
                'password' => 'required',
                'blocked' => 'required',
                'remember_token' => 'required'
    ];

    public function hasDimensions(){
        return $this->morphMany('DimensionValueEntry','hasDimensions');
    }
    protected $table = 'users';

    protected $fillable = ['name', 'email', 'password'];

    protected $hidden = ['password', 'remember_token'];

    public function employee(){
        return $this->belongsTo('Employee');
    }
}
