<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Product extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'barcode', 'description'];

    public function stockEntries()
    {
        return $this->hasMany(StockEntry::class);
    }
}
