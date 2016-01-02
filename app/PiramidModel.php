<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 12/29/2015
 * Time: 3:40 PM
 */


use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Validation\Validator;

class PiramidModel extends Model
{
    public function validate(){
        $validEntry = Validator::make($this->attributes, $this->rules);

        if ($validEntry->passes()) return true;

        $this->errors = $validEntry->messages();

        return false;
    }
}