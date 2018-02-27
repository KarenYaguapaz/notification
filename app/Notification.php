<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
	//A que tabla hace referencia este modelo
    protected $table ='notification';

    //Los campos que son asignables masivamente
    protected $fillable = [
        'id', 'title', 'description',
    ];

    public function user(){
    	return $this->belogsTo('App\User');
    }
}
