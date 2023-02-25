<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Project extends Model
{
    use HasFactory;

    protected $fillable = ['title' , 'description' , 'is_visible' ];

    public function products(): BelongsToMany
    {
        return $this->belongsToMany(Product::class,'product_projects');
    }

    public function institutions(): BelongsToMany
    {
        return $this->belongsToMany(Institution::class,'institution_projects');
    }

}