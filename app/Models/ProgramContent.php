<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProgramContent extends Model
{
    use HasFactory;

    protected $fillable = ['program_id', 'photo', 'description'];

    // Relasi ke Program
    public function program()
{
    return $this->belongsTo(Program::class);
}

}
