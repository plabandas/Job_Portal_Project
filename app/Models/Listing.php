<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    use HasFactory;

    // protected $fillable = ['title', 'company', 'location', 'website', 'email', 'description', 'tags'];  // This can write or :         Model::unguard(); in AppServiceProvider>boot function


    public function scopeFilter($query, array $filter){  //scopeFilter and argument er filter match korsa
      if($filter['tag'] ?? false){
        $query->where('tags', 'like', '%' . request('tag') . '%');  // Request tag ta tags coloum er modda khujba
      }

      if($filter['search'] ?? false){
        $query->where('title', 'like', '%' . request('search') . '%')  // Request search ta title coloum er modda khujba
        ->orWhere('description', 'like', '%' . request('search') . '%')
        ->orWhere('tags', 'like', '%' . request('search') . '%')
        ->orWhere('location', 'like', '%' . request('search') . '%');
      }
    }
}

