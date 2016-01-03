<?php
namespace PiramidWare\Models;

class DimensionValueEntry extends PiramidModel
{
    private $rules = [
                'entry_type' => 'required',
                'dimension_code' => 'required|exists:dimension_codes,id',
                'dimension_value' => 'required|exists:dimension_values,id'
    ];
    protected $fillable = ['dimension','value','description','type'];

    public function hasDimensions(){
        return $this->morphTo();
    }

    public function dimensioncodes(){
        return $this->belongsTo('DimensionCodes');
    }

}
