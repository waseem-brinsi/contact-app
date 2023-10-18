<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Company extends Model
{
    use HasFactory;

    // protected $table = "app_companies";
    // protected $primaryKey = "_id";
    // protected $guarded = [];
    protected $fillable = ['name','email','address','website'];

    public function contacts(): HasMany
    {
        return $this->hasMany(Contact::class);
    }

}
