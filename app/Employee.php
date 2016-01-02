<?php


class Employee extends PiramidModel
{
    private $rules = [
                        'employee_no' => 'required|unique:employees',
                        'first_name' => 'required',
                        'middle_name' => 'required',
                        'last_name' => 'required',
                        'job_title' => 'required',
                        'e-mail' => 'required|email',
                        'employment_date' => 'required|date',
                        'status' => 'required',
                        'active' => 'required|boolean'
    ];

    protected $fillable = ['employee_no', 'first_name', 'middle_name', 'last_name', 'job_title', 'address', 'city', 'post_code', 'county',
                            'phone_no', 'mobile_phone_no', 'e-mail', 'gender', 'manager_no', 'employment_date', 'status', 'inactive_date', 'created_by', 'active', 'registered'];

    public function createUser(){

    }

    public function checkIfRegistered(){

    }

    public function hasDimensions(){
        return $this->morphMany('DimensionValueEntry','hasDimensions');
    }

    public function user(){
        return $this->hasOne('User');
    }

    public function dimensionValue(){
        return $this->morphMany('DimensionValueEntry','hasDimensions');
    }

}
