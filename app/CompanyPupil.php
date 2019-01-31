<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\Pivot;

class CompanyPupil extends Pivot
{
    protected $fillable = [
        'state'
    ];

    public function hour()
    {
        return $this->hasOne('App\Hour', 'companyPupil_id');
    }
}
