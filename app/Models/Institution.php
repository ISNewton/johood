<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Institution extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
    ];

    public function projects()
    {
        return $this->belongsToMany(Project::class,'institution_projects');
    }


}