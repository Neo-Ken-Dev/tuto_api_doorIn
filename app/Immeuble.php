<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Immeuble extends Model
{
 protected $fillable = ['address', 'name', 'code_im', 'code_soc'];

    public function accounts()
    {
        return $this->hasMany(Account::class);
    }
}
