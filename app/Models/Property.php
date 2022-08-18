<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;

    protected $table = 'propertys';

    protected $fillable = [
        'property_name','price','size','amenities','description','discount','floor','bedrooms'
    ];

    public function images(){
        return $this->hasMany(Image::class,'property_id');
    }
}
