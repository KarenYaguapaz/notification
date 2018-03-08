<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Notification extends Model
{
	//A que tabla hace referencia este modelo
    protected $table ='notification';

    //Los campos que son asignables masivamente
    protected $fillable = [
        'id', 'title', 'description', 'file',
    ];

    public function user(){
    	return $this->belogsTo('App\User');
    }
    
    public function setFileAttribute($file){
    	$this->attributes['file']= Carbon::now->second.$file->getClientOriginalName();
    	$name=Carbon::now->second.$file->getClientOriginalName();
    	\Storage::disk('local')->put($name, \File::get($file));
    }
}
