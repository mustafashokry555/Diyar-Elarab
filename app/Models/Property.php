<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;
    protected $fillable = [
        'location',
        'desc',
        'cat_id',
        'project_id',
        'imgs'
    ];

    public function project() {
        return $this->belongsTo(Project::class, 'project_id');
    }

    public function cat() {
        return $this->belongsTo(Cat::class, 'cat_id');
    }
}
