<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'name', 'tags', 'price', 'company', 'logo', 'description'];

    public function scopeFilter($query, array $filters)
    {

        if ($filters['tag'] ?? false) {

            $query->where('tags', 'like', "%" . request('tag') . "%");
        }
        if ($filters['search'] ?? false) {

            $query->where('name', 'like', "%" . request('search') . "%")
                ->orWhere('tags', 'like', "%" . request('search') . "%")
                ->orWhere('description', 'like', "%" . request('search') . "%")
                ->orWhere('company', 'like', "%" . request('search') . "%");
        }

    }

    //create relationship to users table
    public function user()
    {
        //a product belongs to a user
        return $this->belongsTo(User::class, "user_id"); // the method is set to Model::model_id by default
    }

}
