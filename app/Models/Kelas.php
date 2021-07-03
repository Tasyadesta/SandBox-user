<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    use HasFactory;
    protected $guarded =["id"];
    protected $table = "kelas";
    public function users()
    {
        return $this->belongsToMany(User::class,"users_kelas");
    }
    public function materi()
    {
        return $this->hasMany(Materi::class);
    }
}
