<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = [
    	'name', 'email', 'phone',
    ];

    public function company()
    {
        return $this->belongsTo(Company::class, 'company_id');
    }
}
