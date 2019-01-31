<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hour extends Model
{
    protected $fillable = [
        'week_number', 'hours_worked', 'description', 'state'
    ];

    public function companyPupil()
    {
        return $this->belongsTo('App\CompanyPupil', 'id');
    }
}
