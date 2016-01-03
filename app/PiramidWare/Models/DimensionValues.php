<?php
namespace PiramidWare\Models;

class DimensionValues extends PiramidModel
{
    private $rules = [
            'dimension' => 'required|exists:dimension_codes,id',
            'value' => 'required',
            'description' => 'required',
            'type'=> 'required'
    ];

    public function getDimensionCodeName(){

    }

    public function checkIsBlocked(){

    }
}
