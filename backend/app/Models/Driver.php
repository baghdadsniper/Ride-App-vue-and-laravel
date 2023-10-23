<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Driver extends Model
{
    use HasFactory;

    //protected $quarded = [];

    protected $quarded = [];

    public function user()
    {

        return $this->belonsTo(User::class);
    }

    public function trips()
    {

        return $this->hasMany(Trip::class);
    }
}
