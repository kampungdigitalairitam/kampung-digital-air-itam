<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'thumbnail', 'description'];

    // Relasi ke ProgramContent
    public function contents()
    {
        return $this->hasMany(ProgramContent::class);
    }


    protected static function boot()
{
    parent::boot();

    static::deleting(function ($program) {
        $program->contents()->delete();
    });
}



}
