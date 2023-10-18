<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Contact extends Model
{
    use HasFactory;
    protected $fillable = ['first_name','last_name','phone','email','address','company_id'];


    public function company():BelongsTo
    {
        return $this->belongsTo(Company::class);
    }


    public function tasks(): HasMany
    {
        return $this->hasMany(Task::class);
    }

}
