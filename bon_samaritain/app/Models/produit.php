<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class produit extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom',
        'prix',
        'photo',
        'description',
        'category_id',
    ];

    public function category(){
        return $this->belongsTo(category::class,'category_id');
        }

    public function users(){
        return $this->belongsTo(User::class);
        }
    
}
