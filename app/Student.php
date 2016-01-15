<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['first_name', 'last_name', 'address', 'zip', 'state_id',
                           'city', 'phone_number', 'mobile_number', 'email',
                           'year_level', 'section_id'];

    public function state()
    {
        return $this->belongsTo('App\State');
    }

    public function section()
    {
        return $this->belongsTo('App\Section');
    }
}
