<?php 
namespace App;

use Illuminate\Database\Eloquent\Model;


class laravel extends Model {

	//
	//protected $connection = 'mysql';
   // protected $primaryKey = 'id';
   // protected $table = 'test';
    protected $fillable = ['f_name','l_name','phone','email'];
        
    

   // public $timestamps = false;

}
