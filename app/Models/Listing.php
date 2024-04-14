<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    use HasFactory;

    public function scopeFilter($query, array $filter){  //scopeFilter and argument er filter match korsa
      if($filter['tag'] ?? false){
        $query->where('tags', 'like', '%' . request('tag') . '%');  // Request tag ta tags coloum er modda khujba
      }
    }
}

