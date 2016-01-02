<?php

class DimensionCode extends PiramidModel
{
    private $rules = [
                'code' => 'required',
                'name' => 'required'
    ];

    protected $fillable = ['code', 'name'];

    public function checkIsBlocked(){

    }

    public function dimensionvalues(){
        return $this->hasMany('DimensionValues');
    }


}
