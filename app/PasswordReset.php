<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PasswordReset extends Model
{
    protected $table = 'PasswordReset';
    protected $primaryKey= 'id';
    protected $timestamps= false;
}
