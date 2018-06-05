<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function product_images()
	    {
	    	return $this->hasMany('App\Product_image','product_id', 'id');
   	 	}

    public function enquiry(){
    	 return $this->hasOne('App\Enquiry');
    }
    public function collection(){
    	 return $this->hasOne('App\Collection');
    }
    public function support(){
         return $this->hasOne('App\Support');
    }
}
