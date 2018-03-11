<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Notification extends Model
{
	//A que tabla hace referencia este modelo
    //protected $table ='notifications';

    //Los campos que son asignables masivamente
    protected $fillable = [
        'id', 'title', 'description',
    ];

    public function user(){
    	return $this->belogsTo('App\User');
    }
    
<<<<<<< HEAD
  /*  public function setFileAttribute($file){
    	$this->attributes['file']= Carbon::now->second.$file->getClientOriginalName();
    	$name=Carbon::now->second.$file->getClientOriginalName();
    	\Storage::disk('local')->put($name, \File::get($file));
    }*/
=======

>>>>>>> 2e8c4053ae6cb5e43951f7739ead3facc7ac721a
}
