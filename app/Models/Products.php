<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'value'
    ];

    public function getProductsSearchIndex(string $fieldSearch = ''){
        $product = $this->where(function($query) use ($fieldSearch){
            if($fieldSearch){
                $query->where('name', $fieldSearch);
                $query->orWhere('name', 'LIKE' , "%{$fieldSearch}%");
            };
        })->get();
        return $product;
    }
}
