<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;
    // connect to roles table
    protected $table = 'roles';
    // fillable fields
    protected $fillable = ['name', 'guard_name'];
    // one role can have many users
    // public function users()
    // {
    //     return $this->belongsToMany(User::class);
    // }
}
