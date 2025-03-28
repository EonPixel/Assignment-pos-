<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


    class Sale extends Model
    {
        use HasFactory;
    
        protected $fillable = ['total_amount', 'discount'];
    
        public function products()
        {
            return $this->belongsToMany(Product::class)
                ->withPivot('stock_entry_id', 'quantity', 'price');
        }
    }
