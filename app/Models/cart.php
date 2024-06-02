<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cart extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'menuitem', 'quantity'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

public function menuitem()
{
    return $this->belongsTo(Menuitem::class);
}
}
