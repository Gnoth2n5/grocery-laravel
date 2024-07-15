<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\BelongsToMany;


class Coupons extends Model
{
    use HasFactory;

    protected $table = 'coupons';

    protected $fillable = ['code', 'discount', 'expiry_date', 'min_value'];


    public function order(): BelongsToMany
    {
        return $this->belongsToMany(Orders::class);
    }
}
