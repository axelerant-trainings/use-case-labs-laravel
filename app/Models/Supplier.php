<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Product;

class Supplier extends Model
{
    use HasFactory;
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'contact_name',
        'address',
        'city',
        'postal_code',
        'country',
        'phone',
    ];
    
    /**
     * Get products for this supplier.
     */
    public function products(): HasMany
    {
        return $this->hasMany(Product::class);
    }
}
